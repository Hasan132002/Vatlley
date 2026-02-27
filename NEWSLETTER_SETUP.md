# Newsletter Subscription System - Setup Guide

## Database Setup

### Step 1: Create Database Table

1. Open phpMyAdmin: `http://localhost/phpmyadmin/`
2. Select database: `vettlyglobal_db` (or create it if doesn't exist)
3. Go to SQL tab
4. Copy and paste contents from `database_newsletter.sql`
5. Click "Go" to execute

**OR manually create:**
```sql
CREATE TABLE newsletter_subscribers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  status ENUM('active','unsubscribed') DEFAULT 'active',
  subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  unsubscribed_at TIMESTAMP NULL,
  ip_address VARCHAR(45),
  INDEX(status),
  INDEX(subscribed_at)
);
```

---

## Newsletter Forms Location

Newsletter signup forms are on these pages:
1. `/resources/blog/` - Blog sidebar
2. `/resources/events/` - Events page
3. `/resources/whitepapers/` - Whitepapers page
4. `/resources/webinars/` - Webinars page
5. `/about-us/press-room/` - Press room

**All forms submit to:** `/resources/blog/newsletter-subscribe.php`

---

## Features

✅ Email validation
✅ Duplicate email checking
✅ CSRF protection
✅ Database storage
✅ Success/error messages
✅ Welcome email (optional - currently disabled)

---

## How to Enable Welcome Emails

Edit: `resources/blog/newsletter-subscribe.php`

Find line 88:
```php
// Uncomment to send email
// send_email($email, $subject, $message);
```

Change to:
```php
// Send welcome email
send_email($email, $subject, $message);
```

**Note:** Configure SMTP settings in `config.php` first!

---

## Testing

1. Create database table (see above)
2. Visit any page with newsletter form
3. Enter email address
4. Click "Subscribe"
5. Check for success message
6. Verify email in database (phpMyAdmin)

---

## Viewing Subscribers

### Via phpMyAdmin:
1. Go to `http://localhost/phpmyadmin/`
2. Select `vettlyglobal_db` database
3. Click `newsletter_subscribers` table
4. View all subscribed emails

### Via SQL:
```sql
SELECT * FROM newsletter_subscribers
WHERE status = 'active'
ORDER BY subscribed_at DESC;
```

---

## Export Subscribers

```sql
SELECT email, subscribed_at
FROM newsletter_subscribers
WHERE status = 'active'
INTO OUTFILE 'subscribers.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

Or use phpMyAdmin Export feature.

---

## Security Features

✅ CSRF token validation
✅ Email format validation
✅ SQL injection prevention (prepared statements)
✅ XSS protection (sanitized output)
✅ Duplicate prevention
✅ IP address logging (optional)

---

## Status

- **Form Handler:** ✅ Created (`newsletter-subscribe.php`)
- **Database Table:** ⏳ Need to create manually
- **Forms:** ✅ All configured
- **Validation:** ✅ Implemented
- **Error Handling:** ✅ Implemented

---

**Next:** Create the database table in phpMyAdmin, then test the forms!
