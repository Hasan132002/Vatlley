-- Leads Table for Contact Form Submissions
-- Create this table in phpMyAdmin

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_type` varchar(50) DEFAULT 'contact',
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `message` text,
  `source_page` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `status` enum('new','contacted','qualified','converted','closed') DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `form_type` (`form_type`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
