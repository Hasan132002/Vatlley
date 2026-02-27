<?php
/**
 * Single Blog Post Page
 * Displays a single blog post with full content
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Get post slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($slug)) {
    redirect(url('resources/blog/'));
}

// Get post data
$query = "SELECT bp.*, bc.name as category_name, bc.slug as category_slug
          FROM blog_posts bp
          LEFT JOIN blog_categories bc ON bp.category_id = bc.id
          WHERE bp.slug = ? AND bp.status = 'published'
          LIMIT 1";
$post = db_fetch_one($query, [$slug], 's');

if (!$post) {
    redirect(url('resources/blog/'));
}

// Update view count
$update_views = "UPDATE blog_posts SET views = views + 1 WHERE id = ?";
db_query($update_views, [$post['id']], 'i');

// Page variables
$page_title = $post['title'];
$meta_description = $post['meta_description'] ?: truncate(strip_tags($post['content']), 160);
$meta_keywords = $post['meta_keywords'] ?: 'blog, ' . SITE_NAME;

// Get related posts (same category)
$related_query = "SELECT id, title, slug, featured_image, published_date
                  FROM blog_posts
                  WHERE category_id = ? AND id != ? AND status = 'published'
                  ORDER BY published_date DESC
                  LIMIT 3";
$related_posts = db_fetch_all($related_query, [$post['category_id'], $post['id']], 'ii');

// Get recent posts for sidebar
$recent_posts = db_fetch_all("SELECT id, title, slug, published_date FROM blog_posts WHERE status = 'published' ORDER BY published_date DESC LIMIT 5");

// Get categories for sidebar
$categories = db_fetch_all("SELECT * FROM blog_categories ORDER BY name ASC");

include '../../includes/header.php';
?>

<!-- Blog Post Header -->
<section class="post-header">
    <div class="container">
        <div class="post-header-content">
            <?php if ($post['category_name']): ?>
                <a href="<?php echo url('resources/blog/category/' . urlencode($post['category_slug'])); ?>" class="post-category-badge">
                    <?php echo clean($post['category_name']); ?>
                </a>
            <?php endif; ?>

            <h1><?php echo clean($post['title']); ?></h1>

            <div class="post-meta">
                <span class="post-meta-item">
                    <i class="far fa-user"></i>
                    <?php echo clean($post['author']); ?>
                </span>
                <span class="post-meta-item">
                    <i class="far fa-calendar-alt"></i>
                    <?php echo format_date($post['published_date'], 'F j, Y'); ?>
                </span>
                <span class="post-meta-item">
                    <i class="far fa-eye"></i>
                    <?php echo number_format($post['views'] + 1); ?> views
                </span>
                <span class="post-meta-item">
                    <i class="far fa-clock"></i>
                    <?php echo ceil(str_word_count(strip_tags($post['content'])) / 200); ?> min read
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Blog Post Content -->
<article class="post-content-section section">
    <div class="container">
        <div class="post-layout">
            <!-- Main Content -->
            <div class="post-main">
                <!-- Featured Image -->
                <?php if ($post['featured_image']): ?>
                    <div class="post-featured-image">
                        <img src="<?php echo url('uploads/blog/' . clean($post['featured_image'])); ?>" alt="<?php echo clean($post['title']); ?>">
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="post-body">
                    <?php echo $post['content']; ?>
                </div>

                <!-- Post Tags -->
                <?php if (!empty($post['tags'])): ?>
                    <div class="post-tags">
                        <h5>Tags:</h5>
                        <?php
                        $tags = explode(',', $post['tags']);
                        foreach ($tags as $tag):
                            $tag = trim($tag);
                        ?>
                            <a href="<?php echo url('resources/blog/search?q=' . urlencode($tag)); ?>" class="post-tag">
                                <?php echo clean($tag); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Social Share -->
                <!-- <div class="post-share">
                    <h5>Share this post:</h5>
                    <div class="share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url()); ?>"
                           target="_blank" class="share-btn share-facebook" title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($post['title']); ?>"
                           target="_blank" class="share-btn share-twitter" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(current_url()); ?>&title=<?php echo urlencode($post['title']); ?>"
                           target="_blank" class="share-btn share-linkedin" title="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode($post['title']); ?>&body=<?php echo urlencode(current_url()); ?>"
                           class="share-btn share-email" title="Share via Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <button onclick="copyToClipboard('<?php echo current_url(); ?>')"
                                class="share-btn share-copy" title="Copy Link">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div> -->

                <!-- Author Bio -->
                <div class="post-author-bio">
                    <div class="author-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="author-info">
                        <h5>About <?php echo clean($post['author']); ?></h5>
                        <p>Expert contributor at VettlyGlobal, sharing insights on risk solutions, data intelligence, and industry best practices.</p>
                    </div>
                </div>

                <!-- Comments Section (Placeholder) -->
                <div class="post-comments">
                    <h3>Comments</h3>
                    <div class="comments-placeholder">
                        <i class="far fa-comments"></i>
                        <p>Comments are coming soon! We're working on enabling discussions for our blog posts.</p>
                        <p class="text-muted">In the meantime, feel free to share your thoughts with us via our <a href="<?php echo url('contact'); ?>">contact form</a>.</p>
                    </div>
                </div>

                <!-- Related Posts -->
                <?php if (!empty($related_posts)): ?>
                    <div class="related-posts">
                        <h3>Related Articles</h3>
                        <div class="related-posts-grid">
                            <?php foreach ($related_posts as $related): ?>
                                <article class="related-post-card">
                                    <?php if ($related['featured_image']): ?>
                                        <div class="related-post-image">
                                            <img src="<?php echo url('uploads/blog/' . clean($related['featured_image'])); ?>" alt="<?php echo clean($related['title']); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="related-post-content">
                                        <h4>
                                            <a href="<?php echo url('resources/blog/' . urlencode($related['slug'])); ?>">
                                                <?php echo clean($related['title']); ?>
                                            </a>
                                        </h4>
                                        <span class="related-post-date">
                                            <i class="far fa-calendar-alt"></i>
                                            <?php echo format_date($related['published_date'], 'M j, Y'); ?>
                                        </span>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="post-sidebar">
                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Search Blog</h4>
                    <form action="<?php echo url('resources/blog/search'); ?>" method="GET" class="sidebar-search-form">
                        <div class="search-input-group">
                            <input type="text" name="q" placeholder="Search articles..." required>
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <?php if (!empty($categories)): ?>
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="sidebar-category-list">
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?php echo url('resources/blog/category/' . urlencode($category['slug'])); ?>"
                                       class="<?php echo ($post['category_id'] == $category['id']) ? 'active' : ''; ?>">
                                        <?php echo clean($category['name']); ?>
                                        <span class="category-count"><?php echo $category['post_count']; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Recent Posts Widget -->
                <?php if (!empty($recent_posts)): ?>
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Recent Posts</h4>
                        <ul class="sidebar-recent-posts">
                            <?php foreach ($recent_posts as $recent): ?>
                                <li>
                                    <a href="<?php echo url('resources/blog/' . urlencode($recent['slug'])); ?>">
                                        <h5><?php echo clean($recent['title']); ?></h5>
                                        <span class="recent-post-date">
                                            <i class="far fa-calendar-alt"></i>
                                            <?php echo format_date($recent['published_date'], 'M j, Y'); ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Newsletter Widget -->
                <div class="sidebar-widget sidebar-widget-newsletter">
                    <h4 class="widget-title">Newsletter</h4>
                    <p>Subscribe to get the latest blog posts and updates.</p>
                    <form class="newsletter-form" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="email" name="email" placeholder="Your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</article>

<style>
/* Post Header */
.post-header {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
    color: white;
    padding: 60px 0 40px;
}

.post-header-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.post-category-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 20px;
    transition: var(--transition);
}

.post-category-badge:hover {
    background: rgba(255,255,255,0.3);
}

.post-header h1 {
    color: white;
    font-size: 2.8rem;
    margin-bottom: 25px;
    line-height: 1.3;
}

.post-meta {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
    color: rgba(255,255,255,0.9);
    font-size: 0.95rem;
}

.post-meta-item i {
    margin-right: 8px;
}

/* Post Content */
.post-content-section {
    background: var(--bg-lighter);
}

.post-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
}

.post-main {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.post-featured-image {
    width: 100%;
    height: 450px;
    overflow: hidden;
}

.post-featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.post-body {
    padding: 40px;
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-secondary);
}

.post-body h2,
.post-body h3,
.post-body h4 {
    color: var(--text-primary);
    margin-top: 30px;
    margin-bottom: 15px;
}

.post-body h3{
    font-size: 1.5rem;
}

.post-body p {
    margin-bottom: 20px;
}

.post-body ul,
.post-body ol {
    margin-bottom: 20px;
    padding-left: 30px;
}

.post-body li {
    margin-bottom: 10px;
}

.post-body img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 20px 0;
}

.post-body blockquote {
    border-left: 4px solid var(--primary-color);
    padding-left: 20px;
    margin: 25px 0;
    font-style: italic;
    color: var(--text-light);
}

.post-tags {
    padding: 30px 40px;
    border-top: 1px solid var(--border-light);
}

.post-tags h5 {
    display: inline-block;
    margin-right: 15px;
    margin-bottom: 0;
}

.post-tag {
    display: inline-block;
    padding: 8px 15px;
    background: var(--bg-light);
    color: var(--text-secondary);
    border-radius: 20px;
    font-size: 0.9rem;
    margin: 5px;
    transition: var(--transition);
}

.post-tag:hover {
    background: var(--primary-color);
    color: white;
}


/* Author Bio */
.post-author-bio {
    padding: 30px 40px;
    border-top: 1px solid var(--border-light);
    display: flex;
    gap: 25px;
    align-items: flex-start;
}

.author-avatar {
    font-size: 4rem;
    color: var(--primary-color);
}

.author-info h5 {
    margin-bottom: 10px;
}

.author-info p {
    color: var(--text-secondary);
    margin-bottom: 0;
}

/* Comments */
.post-comments {
    padding: 40px;
    border-top: 1px solid var(--border-light);
}

.post-comments h3 {
    margin-bottom: 25px;
}

.comments-placeholder {
    text-align: center;
    padding: 40px;
    background: var(--bg-lighter);
    border-radius: 12px;
}

.comments-placeholder i {
    font-size: 3rem;
    color: var(--text-light);
    margin-bottom: 15px;
}

.comments-placeholder p {
    color: var(--text-secondary);
}

.text-muted {
    font-size: 0.9rem;
    color: var(--text-light) !important;
}

/* Related Posts */
.related-posts {
    padding: 40px;
    border-top: 1px solid var(--border-light);
}

.related-posts h3 {
    margin-bottom: 25px;
}

.related-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.related-post-card {
    border: 1px solid var(--border-light);
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition);
}

.related-post-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-3px);
}

.related-post-image {
    height: 160px;
    overflow: hidden;
}

.related-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.related-post-content {
    padding: 20px;
}

.related-post-content h4 {
    font-size: 1rem;
    margin-bottom: 10px;
}

.related-post-content a {
    color: var(--text-primary);
}

.related-post-content a:hover {
    color: var(--primary-color);
}

.related-post-date {
    font-size: 0.85rem;
    color: var(--text-light);
}

/* Sidebar */
.post-sidebar {
    position: sticky;
    top: 100px;
    height: fit-content;
}

.sidebar-widget {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-bottom: 25px;
}

.widget-title {
    font-size: 1.2rem;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--primary-color);
}

.sidebar-search-form .search-input-group {
    display: flex;
}

.sidebar-search-form input {
    flex: 1;
    padding: 12px 15px;
    border: 1px solid var(--border-color);
    border-radius: 8px 0 0 8px;
    font-size: 0.95rem;
}

.sidebar-search-form button {
    padding: 12px 20px;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    transition: var(--transition);
}

.sidebar-search-form button:hover {
    background: var(--primary-dark);
}

.sidebar-category-list {
    list-style: none;
}

.sidebar-category-list li {
    margin-bottom: 12px;
}

.sidebar-category-list a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    color: var(--text-secondary);
    border-radius: 8px;
    transition: var(--transition);
}

.sidebar-category-list a:hover,
.sidebar-category-list a.active {
    background: var(--bg-light);
    color: var(--primary-color);
}

.category-count {
    background: var(--bg-gray);
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 0.85rem;
}

.sidebar-recent-posts {
    list-style: none;
}

.sidebar-recent-posts li {
    padding: 15px 0;
    border-bottom: 1px solid var(--border-light);
}

.sidebar-recent-posts li:last-child {
    border-bottom: none;
}

.sidebar-recent-posts h5 {
    font-size: 0.95rem;
    margin-bottom: 8px;
    color: var(--text-primary);
    transition: var(--transition);
}

.sidebar-recent-posts a:hover h5 {
    color: var(--primary-color);
}

.recent-post-date {
    font-size: 0.85rem;
    color: var(--text-light);
}

.sidebar-widget-newsletter {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
}

.sidebar-widget-newsletter .widget-title {
    color: white;
    border-bottom-color: rgba(255,255,255,0.3);
}

.sidebar-widget-newsletter p {
    color: rgba(255,255,255,0.9);
}

.newsletter-form input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    margin-bottom: 12px;
    background: rgba(255,255,255,0.1);
    color: white;
}

.newsletter-form input::placeholder {
    color: rgba(255,255,255,0.7);
}

.newsletter-form button {
    width: 100%;
    background: white;
    color: var(--primary-color);
}

/* Responsive */
@media (max-width: 992px) {
    .post-layout {
        grid-template-columns: 1fr;
    }

    .post-sidebar {
        position: static;
    }

    .post-header h1 {
        font-size: 2rem;
    }

    .post-body {
        padding: 25px;
    }

    .post-tags,
    .post-share,
    .post-author-bio,
    .post-comments,
    .related-posts {
        padding: 25px;
    }
}

@media (max-width: 768px) {
    .post-meta {
        font-size: 0.85rem;
        gap: 15px;
    }

    .related-posts-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        alert('Link copied to clipboard!');
    }, function(err) {
        console.error('Could not copy text: ', err);
    });
}
</script>

<?php include '../../includes/footer.php'; ?>
