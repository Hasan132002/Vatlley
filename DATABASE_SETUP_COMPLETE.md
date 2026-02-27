# VettlyGlobal - Complete Database Setup Guide

## Required Database Tables

VettlyGlobal uses these database tables:

### 1. **newsletter_subscribers** - Newsletter signups
### 2. **leads** - Contact form submissions
### 3. **blog_posts** - Blog system (optional)
### 4. **blog_categories** - Blog categories (optional)

---

## Setup Instructions

### Step 1: Create Database

1. Open phpMyAdmin: `http://localhost/phpmyadmin/`
2. Click "New" to create database
3. Database name: `vettlyglobal_db`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

---

### Step 2: Create Required Tables

#### **Table 1: Newsletter Subscribers**

Run this SQL:
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

**OR** import: `database_newsletter.sql`

---

#### **Table 2: Leads (Contact Forms)**

Run this SQL:
```sql
CREATE TABLE leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  form_type VARCHAR(50) DEFAULT 'contact',
  full_name VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(20),
  company_name VARCHAR(200),
  industry VARCHAR(100),
  country VARCHAR(100),
  message TEXT,
  source_page VARCHAR(255),
  ip_address VARCHAR(45),
  user_agent TEXT,
  status ENUM('new','contacted','qualified','converted','closed') DEFAULT 'new',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(email),
  INDEX(status),
  INDEX(form_type),
  INDEX(created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

**OR** import: `database_leads.sql`

---

### Step 3: Import Blog Tables (Optional)

If you want to use the blog system:

**Import:** `resources/blog/database_setup.sql`

This creates:
- `blog_posts`
- `blog_categories`
- Sample blog posts and categories

---

## Quick Setup (All Tables at Once)

Copy and run ALL these SQL commands in phpMyAdmin SQL tab:

```sql
-- 1. Newsletter Table
CREATE TABLE newsletter_subscribers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  status ENUM('active','unsubscribed') DEFAULT 'active',
  subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. Leads Table
CREATE TABLE leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  form_type VARCHAR(50) DEFAULT 'contact',
  full_name VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(20),
  company_name VARCHAR(200),
  message TEXT,
  source_page VARCHAR(255),
  ip_address VARCHAR(45),
  status ENUM('new','contacted','qualified','converted') DEFAULT 'new',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(email),
  INDEX(status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

---

## Verify Tables Created

Run this query to check:
```sql
SHOW TABLES;
```

You should see:
- ✅ newsletter_subscribers
- ✅ leads
- ✅ blog_posts (if imported)
- ✅ blog_categories (if imported)

---

## Test Forms

### Test Newsletter Subscription:
1. Visit: `http://localhost/VattleyGlobal/resources/blog/`
2. Find newsletter form in sidebar
3. Enter email: test@example.com
4. Click "Subscribe"
5. See success message
6. Check database: `SELECT * FROM newsletter_subscribers;`

### Test Contact Form:
1. Visit: `http://localhost/VattleyGlobal/contact/`
2. Fill out form
3. Click "Send Message"
4. See success message
5. Redirected to thank you page
6. Check database: `SELECT * FROM leads;`

---

## View Submissions

### Newsletter Subscribers:
```sql
SELECT email, subscribed_at, status
FROM newsletter_subscribers
WHERE status = 'active'
ORDER BY subscribed_at DESC;
```

### Contact Form Leads:
```sql
SELECT full_name, email, phone, company_name, message, created_at
FROM leads
WHERE status = 'new'
ORDER BY created_at DESC;
```

---

## Features

### Newsletter System:
✅ Email validation
✅ Duplicate prevention
✅ CSRF protection
✅ Database storage
✅ Welcome email (optional)
✅ Success/error messages

### Contact Form:
✅ Full validation
✅ CSRF protection
✅ Database storage
✅ Email notification
✅ Thank you page redirect
✅ IP & user agent logging

---

## File Locations

**SQL Files:**
- `database_newsletter.sql` - Newsletter table
- `database_leads.sql` - Leads table
- `resources/blog/database_setup.sql` - Blog tables

**Form Handlers:**
- `contact/index.php` - Contact form (saves to DB + sends email)
- `resources/blog/newsletter-subscribe.php` - Newsletter handler

**Documentation:**
- `NEWSLETTER_SETUP.md` - Newsletter guide
- `DATABASE_SETUP_COMPLETE.md` - This file

---

## Troubleshooting

### Error: Table doesn't exist
**Fix:** Run the CREATE TABLE SQL in phpMyAdmin

### Error: Database connection failed
**Fix:** Check `config.php` DB credentials

### Error: CSRF token invalid
**Fix:** Hard refresh page (Ctrl + Shift + R)

### Form submits but no data in database
**Fix:** Check database table exists, check DB credentials

---

## Production Checklist

Before going live:
- [ ] Create database on production server
- [ ] Import all SQL tables
- [ ] Update `config.php` with production DB credentials
- [ ] Test newsletter signup
- [ ] Test contact form
- [ ] Configure SMTP for email sending
- [ ] Enable welcome emails (optional)
- [ ] Test from different browsers
- [ ] Verify data saves correctly

---

**Status:** ✅ Ready to Use (after creating tables)

**Next Step:** Run SQL in phpMyAdmin to create tables!
