# VettlyGlobal Blog System

A professional, fully-featured blog system for VettlyGlobal with responsive design, search functionality, categories, and newsletter subscription.

## Features

- **Blog Listing Page** (`index.php`) - Display all blog posts with pagination
- **Single Post Page** (`post.php`) - Full blog post view with social sharing
- **Category Page** (`category.php`) - Filter posts by category
- **Search Page** (`search.php`) - Search through blog posts
- **Newsletter Subscription** - Allow visitors to subscribe to updates
- **Responsive Design** - Works perfectly on all devices
- **Social Sharing** - Share posts on Facebook, Twitter, LinkedIn, and Email
- **SEO Optimized** - Meta tags and clean URLs
- **Professional Layout** - Modern design with sidebar widgets

## Installation

### Step 1: Database Setup

1. Open phpMyAdmin (http://localhost/phpmyadmin/)
2. Select the `vettlyglobal_db` database
3. Click on the "SQL" tab
4. Copy and paste the contents of `database_setup.sql`
5. Click "Go" to execute the SQL

This will create:
- `blog_categories` table
- `blog_posts` table
- `newsletter_subscribers` table
- `blog_comments` table (for future use)
- Sample categories and blog posts

### Step 2: Create Upload Directory

Create the blog uploads directory:
```
C:\xampp\htdocs\VattleyGlobal\uploads\blog\
```

This directory will store featured images for blog posts.

### Step 3: Access the Blog

Navigate to: http://localhost/VattleyGlobal/resources/blog/

## File Structure

```
resources/blog/
├── index.php                    # Main blog listing page
├── post.php                     # Single blog post page
├── category.php                 # Category listing page
├── search.php                   # Search results page
├── newsletter-subscribe.php     # Newsletter subscription handler
├── database_setup.sql          # Database setup script
└── README.md                    # This file
```

## Database Tables

### blog_categories
- Stores blog categories
- Fields: id, name, slug, description, post_count

### blog_posts
- Stores all blog posts
- Fields: id, category_id, title, slug, content, featured_image, author, status, views, tags, published_date

### newsletter_subscribers
- Stores newsletter subscribers
- Fields: id, email, status, subscribed_at

### blog_comments
- For future comment functionality
- Fields: id, post_id, author_name, content, status

## Usage

### Creating Blog Posts

Since this is a frontend blog system, you'll need to add blog posts directly to the database:

1. Open phpMyAdmin
2. Navigate to `vettlyglobal_db` → `blog_posts`
3. Click "Insert" to add a new post
4. Fill in the fields:
   - **category_id**: Select a category (1-10)
   - **title**: Post title
   - **slug**: URL-friendly version (e.g., "my-blog-post")
   - **content**: Full HTML content
   - **author**: Author name
   - **status**: Set to "published"
   - **published_date**: Publication date
   - **tags**: Comma-separated tags
   - **featured_image**: Image filename (upload to uploads/blog/)

### Adding Categories

1. Navigate to `blog_categories` table
2. Click "Insert"
3. Add: name, slug, description

### Managing Newsletter Subscribers

View subscribers in the `newsletter_subscribers` table.

## Features Detail

### Search Functionality
- Searches through titles, content, tags, and authors
- Real-time results with pagination
- Highlighted search terms
- Popular search suggestions

### Social Sharing
- Facebook, Twitter, LinkedIn sharing
- Email sharing
- Copy link to clipboard
- Open Graph meta tags for better sharing

### Sidebar Widgets
- Search box
- Categories list with post counts
- Recent posts
- Newsletter subscription
- Popular tags

### Responsive Design
- Mobile-first approach
- Tablet and desktop optimized
- Touch-friendly navigation
- Optimized images

## Customization

### Colors
Edit the CSS variables in each PHP file's `<style>` section:
```css
--primary-color: #4A90E2;
--primary-dark: #2E5F8D;
--primary-light: #7AB8F5;
```

### Posts Per Page
Change the `$limit` variable in each file:
```php
$limit = 9; // Change to desired number
```

### Newsletter Email
Edit `newsletter-subscribe.php` to customize the welcome email template.

## SEO Features

- Clean, descriptive URLs
- Meta titles and descriptions
- Open Graph tags for social sharing
- Structured heading hierarchy
- Fast page load times
- Mobile-responsive

## Security Features

- CSRF token protection
- SQL injection prevention (prepared statements)
- XSS protection (output sanitization)
- Email validation
- Input sanitization

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Future Enhancements

Possible additions to the blog system:
- Comment system (database table already created)
- Blog post admin panel
- Image upload interface
- Rich text editor
- RSS feed
- Related posts algorithm
- Post likes/reactions
- Author profiles
- Post scheduling
- Draft auto-save

## Troubleshooting

### Posts not showing
- Check database connection in `config.php`
- Verify posts have `status = 'published'`
- Check published_date is not in the future

### Images not loading
- Verify `uploads/blog/` directory exists
- Check file permissions
- Ensure images are uploaded to correct directory

### Newsletter not working
- Check CSRF token is enabled
- Verify email validation function
- Check `newsletter_subscribers` table exists

### Search not working
- Verify FULLTEXT index on blog_posts
- Check MySQL version supports FULLTEXT search
- Ensure search query is not empty

## Support

For issues or questions:
- Email: info@vettlyglobal.com
- Check VettlyGlobal documentation
- Review database setup SQL file

## Credits

Developed for VettlyGlobal
Design: Modern, professional business blog
Framework: Custom PHP with MySQLi
Icons: Font Awesome 6.4.0
Fonts: Inter & Poppins (Google Fonts)

## License

Proprietary - VettlyGlobal Internal Use Only
