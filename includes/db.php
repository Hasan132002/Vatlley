<?php
/**
 * Database Connection
 */

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8mb4");

/**
 * Execute a prepared statement query
 *
 * @param string $query SQL query with placeholders
 * @param array $params Parameters for binding
 * @param string $types Parameter types (s=string, i=integer, d=double, b=blob)
 * @return mysqli_result|bool
 */
function db_query($query, $params = [], $types = '') {
    global $conn;

    if (empty($params)) {
        return $conn->query($query);
    }

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return false;
    }

    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $success = $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false) {
        // Non-SELECT query (INSERT, UPDATE, DELETE) - return execute success
        $stmt->close();
        return $success;
    }

    $stmt->close();
    return $result;
}

/**
 * Fetch single row
 */
function db_fetch_one($query, $params = [], $types = '') {
    $result = db_query($query, $params, $types);
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    return null;
}

/**
 * Fetch all rows
 */
function db_fetch_all($query, $params = [], $types = '') {
    $result = db_query($query, $params, $types);
    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    return [];
}

/**
 * Get last insert ID
 */
function db_insert_id() {
    global $conn;
    return $conn->insert_id;
}

/**
 * Escape string
 */
function db_escape($string) {
    global $conn;
    return $conn->real_escape_string($string);
}
