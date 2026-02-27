# VettlyGlobal - Quick Start Guide

## 🚀 Getting Started

### Step 1: XAMPP Setup
1. Ensure XAMPP is installed and running
2. Apache and MySQL should be started
3. Project is located at: `C:\xampp\htdocs\VattleyGlobal`

### Step 2: Access the Website
Open your browser and visit:
```
http://localhost/VattleyGlobal
```

### Step 3: Database Setup (Optional for Now)
The website currently works without a database using static data in functions.php.
To enable database features later, import the SQL file when ready.

---

## 📁 Project Structure

```
VattleyGlobal/
├── index.php                      # Homepage ✅ DONE
├── config.php                     # Configuration ✅ DONE
├── .htaccess                      # URL rewriting ✅ DONE
│
├── assets/                        # Frontend assets ✅ DONE
│   ├── css/
│   │   ├── main.css              # Main styles ✅
│   │   └── responsive.css        # Responsive ✅
│   ├── js/
│   │   └── main.js               # JavaScript ✅
│   └── images/
│       └── logo/
│           └── logo.svg          # Placeholder logo ✅
│
├── includes/                      # Reusable components ✅ DONE
│   ├── header.php                # Site header ✅
│   ├── footer.php                # Site footer ✅
│   ├── navigation.php            # Mega menu ✅
│   ├── functions.php             # Helper functions ✅
│   └── db.php                    # Database connection ✅
│
├── industries/                    # Industry pages
│   ├── corporations/             # ⏳ TODO
│   ├── financial-services/       # ⏳ TODO
│   ├── government/               # ⏳ TODO
│   ├── healthcare/               # 🔨 IN PROGRESS
│   ├── insurance/                # ⏳ TODO
│   ├── law-enforcement/          # ⏳ TODO
│   └── collections-recovery/     # ⏳ TODO
│
├── about-us/                      # ⏳ TODO
├── resources/                     # ⏳ TODO
├── legal/                         # ⏳ TODO
└── contact/                       # ⏳ TODO
```

---

## ✅ What's Ready

### Core Infrastructure
- ✅ Folder structure created
- ✅ Configuration files (config.php, .htaccess)
- ✅ Database connection (db.php)
- ✅ Helper functions (functions.php)

### Design & Layout
- ✅ Professional color scheme (Light blues, greens)
- ✅ Responsive CSS framework
- ✅ Header with mega menu navigation
- ✅ Footer with links
- ✅ Mobile-responsive menu

### Homepage
- ✅ Hero section with CTA buttons
- ✅ Industries grid (7 industries)
- ✅ Features section (6 features)
- ✅ Solutions overview (4 solutions)
- ✅ Stats section
- ✅ Call-to-action section

### JavaScript
- ✅ Mobile menu toggle
- ✅ Smooth scrolling
- ✅ Form validation
- ✅ Flash messages
- ✅ Lazy loading images

---

## 🎨 Design Elements

### Color Palette
```css
Primary Blue: #4A90E2
Dark Blue: #2E5F8D
Light Blue: #7AB8F5
Green: #2980B9
Coral Accent: #FF6B6B
```

### Typography
- **Primary Font:** Inter
- **Heading Font:** Poppins

### Icons
- Font Awesome 6.4.0 (included via CDN)

---

## 🔨 Next Steps

### 1. Replace Placeholder Logo
Current: `assets/images/logo/logo.svg` (placeholder)
**Action:** Replace with your actual VettlyGlobal logo (PNG or SVG)

### 2. Update Company Information
Edit `config.php`:
```php
define('COMPANY_EMAIL', 'your-email@vettlyglobal.com');
define('COMPANY_PHONE', '+1 (XXX) XXX-XXXX');
define('COMPANY_ADDRESS', 'Your Address');
```

### 3. Create Industry Pages
Priority order:
1. Healthcare (most complex)
2. Financial Services
3. Insurance
4. Government
5. Corporations
6. Law Enforcement
7. Collections & Recovery

### 4. Build Service Sub-Pages
Each industry needs 5-15 service pages (referenced in COMPLETE_DEVELOPMENT_PLAN.md)

### 5. Add Content
- About Us pages
- Legal pages (Privacy, Terms, GDPR, HIPAA)
- Contact form
- Blog system (optional)

---

## 🌐 Testing the Website

### 1. Homepage Test
Visit: `http://localhost/VattleyGlobal`

**Check:**
- ✅ Header loads
- ✅ Logo displays
- ✅ Navigation menu works
- ✅ Hero section shows
- ✅ All 7 industries display
- ✅ Features section loads
- ✅ Footer shows

### 2. Navigation Test
Click on each menu item:
- Home → ✅ Works
- Industries dropdown → ✅ Shows all 7 industries
- Resources dropdown → ⏳ Pages not created yet
- About Us dropdown → ⏳ Pages not created yet

### 3. Mobile Test
1. Open browser DevTools (F12)
2. Toggle device toolbar (Ctrl+Shift+M)
3. Test on:
   - iPhone (375px)
   - iPad (768px)
   - Desktop (1920px)

**Check:**
- ✅ Mobile menu toggle works
- ✅ Mega menu collapses properly
- ✅ Content is readable
- ✅ Buttons are clickable

### 4. Browser Test
Test on:
- ✅ Chrome
- ✅ Firefox
- ✅ Edge
- ✅ Safari (if available)

---

## 🐛 Troubleshooting

### Issue: "Page not found"
**Solution:** Check .htaccess is working. If not, enable mod_rewrite in Apache.

### Issue: "Database connection failed"
**Solution:** This is normal for now. Database is optional. If you want to use it, create database first.

### Issue: "Logo not showing"
**Solution:** Clear browser cache or replace with actual logo file.

### Issue: "CSS not loading"
**Solution:** Check file paths in header.php and ensure XAMPP Apache is running.

### Issue: "Mobile menu not working"
**Solution:** Ensure main.js is loaded. Check browser console for errors (F12).

---

## 📝 Customization Guide

### Change Colors
Edit `assets/css/main.css` (lines 11-30)
```css
:root {
    --primary-color: #YOUR_COLOR;
    --secondary-color: #YOUR_COLOR;
}
```

### Change Fonts
Edit Google Fonts link in `includes/header.php` (line 18)

### Add New Section to Homepage
Edit `index.php` and add your section before footer include

### Modify Navigation Menu
Edit `includes/navigation.php`

---

## 🎯 Current Status Summary

| Component | Status | Notes |
|-----------|--------|-------|
| Homepage | ✅ Complete | Fully functional |
| Header/Footer | ✅ Complete | With mega menu |
| CSS Framework | ✅ Complete | Responsive |
| JavaScript | ✅ Complete | All features working |
| Logo | ⚠️ Placeholder | Replace with real logo |
| Industry Pages | 🔨 In Progress | Creating now |
| Service Pages | ⏳ Pending | After industries |
| About Pages | ⏳ Pending | Planned |
| Legal Pages | ⏳ Pending | Planned |
| Contact Form | ⏳ Pending | Planned |
| Database | ⏳ Optional | Not required yet |

---

## 📞 Support

If you encounter issues:
1. Check XAMPP is running (Apache must be green)
2. Verify file paths are correct
3. Clear browser cache
4. Check browser console for JavaScript errors (F12)

---

## 🚀 Ready to Launch?

Before going live:
- [ ] Replace placeholder logo
- [ ] Update all company information in config.php
- [ ] Complete all industry pages
- [ ] Add real content (not lorem ipsum)
- [ ] Create contact form
- [ ] Add legal pages (Privacy, Terms)
- [ ] Test on all browsers
- [ ] Test on mobile devices
- [ ] Setup SSL certificate
- [ ] Configure production database
- [ ] Update BASE_URL in config.php

---

**Version:** 1.0
**Last Updated:** February 11, 2026
**Status:** Development in Progress
