<?php
/**
 * Category Listing Page
 * Displays blog posts filtered by category
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Get category slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($slug)) {
    redirect(url('resources/blog/'));
}

// Get category data
$category = db_fetch_one("SELECT * FROM blog_categories WHERE slug = ?", [$slug], 's');

if (!$category) {
    redirect(url('resources/blog/'));
}

// Page variables
$page_title = $category['name'] . ' - Blog';
$meta_description = $category['description'] ?: 'Browse all ' . $category['name'] . ' articles from VettlyGlobal.';
$meta_keywords = $category['name'] . ', blog, ' . SITE_NAME;

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, $page);
$limit = 9; // Posts per page
$offset = ($page - 1) * $limit;

// Get total posts count for this category
$count_query = "SELECT COUNT(*) as total FROM blog_posts WHERE category_id = ? AND status = 'published'";
$count_result = db_query($count_query, [$category['id']], 'i');
$total_posts = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_posts / $limit);

// Get posts for this category
$query = "SELECT bp.*, bc.name as category_name, bc.slug as category_slug
          FROM blog_posts bp
          LEFT JOIN blog_categories bc ON bp.category_id = bc.id
          WHERE bp.category_id = ? AND bp.status = 'published'
          ORDER BY bp.published_date DESC
          LIMIT ? OFFSET ?";
$posts = db_fetch_all($query, [$category['id'], $limit, $offset], 'iii');

// Get all categories for sidebar
$categories = db_fetch_all("SELECT * FROM blog_categories ORDER BY name ASC");

// Get recent posts for sidebar
$recent_posts = db_fetch_all("SELECT id, title, slug, published_date FROM blog_posts WHERE status = 'published' ORDER BY published_date DESC LIMIT 5");

include '../../includes/header.php';
?>

<!-- Category Header -->
<section class="category-header">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo url('resources/blog/'); ?>">Blog</a>
            <i class="fas fa-chevron-right"></i>
            <span><?php echo clean($category['name']); ?></span>
        </div>
        <h1><?php echo clean($category['name']); ?></h1>
        <?php if ($category['description']): ?>
            <p><?php echo clean($category['description']); ?></p>
        <?php endif; ?>
        <div class="category-stats">
            <span><i class="fas fa-newspaper"></i> <?php echo $total_posts; ?> Articles</span>
        </div>
    </div>
</section>

<!-- Category Content -->
<section class="blog-section section">
    <div class="container">
        <div class="blog-layout">
            <!-- Main Content -->
            <div class="blog-main">
                <?php if (!empty($posts)): ?>
                    <div class="blog-grid">
                        <?php foreach ($posts as $post): ?>
                            <article class="blog-card">
                                <?php if ($post['featured_image']): ?>
                                    <div class="blog-card-image">
                                        <img src="<?php echo url('uploads/blog/' . clean($post['featured_image'])); ?>" alt="<?php echo clean($post['title']); ?>">
                                        <span class="blog-card-category"><?php echo clean($post['category_name']); ?></span>
                                    </div>
                                <?php endif; ?>

                                <div class="blog-card-content">
                                    <div class="blog-card-meta">
                                        <span class="blog-card-date">
                                            <i class="far fa-calendar-alt"></i>
                                            <?php echo format_date($post['published_date'], 'M j, Y'); ?>
                                        </span>
                                        <span class="blog-card-author">
                                            <i class="far fa-user"></i>
                                            <?php echo clean($post['author']); ?>
                                        </span>
                                    </div>

                                    <h3 class="blog-card-title">
                                        <a href="<?php echo url('resources/blog/' . urlencode($post['slug'])); ?>">
                                            <?php echo clean($post['title']); ?>
                                        </a>
                                    </h3>

                                    <p class="blog-card-excerpt">
                                        <?php echo truncate(strip_tags($post['content']), 150); ?>
                                    </p>

                                    <a href="<?php echo url('resources/blog/' . urlencode($post['slug'])); ?>" class="blog-card-link">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                        <div class="blog-pagination">
                            <?php if ($page > 1): ?>
                                <a href="?slug=<?php echo urlencode($slug); ?>&page=<?php echo ($page - 1); ?>" class="pagination-btn">
                                    <i class="fas fa-chevron-left"></i> Previous
                                </a>
                            <?php endif; ?>

                            <div class="pagination-numbers">
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <?php if ($i == $page): ?>
                                        <span class="pagination-number active"><?php echo $i; ?></span>
                                    <?php else: ?>
                                        <a href="?slug=<?php echo urlencode($slug); ?>&page=<?php echo $i; ?>" class="pagination-number"><?php echo $i; ?></a>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>

                            <?php if ($page < $total_pages): ?>
                                <a href="?slug=<?php echo urlencode($slug); ?>&page=<?php echo ($page + 1); ?>" class="pagination-btn">
                                    Next <i class="fas fa-chevron-right"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="blog-no-posts">
                        <i class="fas fa-folder-open"></i>
                        <h3>No posts in this category yet</h3>
                        <p>Check back soon for new content in <?php echo clean($category['name']); ?>!</p>
                        <a href="<?php echo url('resources/blog/'); ?>" class="btn btn-primary">View All Posts</a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
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
                            <li>
                                <a href="<?php echo url('resources/blog/'); ?>">
                                    All Posts
                                </a>
                            </li>
                            <?php foreach ($categories as $cat): ?>
                                <li>
                                    <a href="<?php echo url('resources/blog/category/' . urlencode($cat['slug'])); ?>"
                                       class="<?php echo ($cat['id'] == $category['id']) ? 'active' : ''; ?>">
                                        <?php echo clean($cat['name']); ?>
                                        <span class="category-count"><?php echo $cat['post_count']; ?></span>
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

                <!-- Browse More Categories -->
                <div class="sidebar-widget sidebar-widget-cta">
                    <h4 class="widget-title">Browse Topics</h4>
                    <p>Explore articles across all our categories</p>
                    <a href="<?php echo url('resources/blog/'); ?>" class="btn-outline-primary">View All Posts</a>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>
/* Category Header */
.category-header {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
    color: white;
    padding: 80px 0;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.breadcrumb a {
    color: rgba(255,255,255,0.9);
    transition: var(--transition);
}

.breadcrumb a:hover {
    color: white;
}

.breadcrumb i {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.7);
}

.breadcrumb span {
    color: white;
    font-weight: 600;
}

.category-header h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 15px;
}

.category-header p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
    max-width: 700px;
    margin-bottom: 25px;
}

.category-stats {
    display: flex;
    gap: 25px;
    font-size: 1rem;
}

.category-stats span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.95);
}

.category-stats i {
    font-size: 1.2rem;
}

/* Blog Section */
.blog-section {
    background: var(--bg-lighter);
}

.blog-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.blog-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.blog-card-image {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.blog-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.blog-card:hover .blog-card-image img {
    transform: scale(1.05);
}

.blog-card-category {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--primary-color);
    color: white;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.blog-card-content {
    padding: 25px;
}

.blog-card-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
    font-size: 0.9rem;
    color: var(--text-light);
}

.blog-card-meta i {
    margin-right: 5px;
}

.blog-card-title {
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.blog-card-title a {
    color: var(--text-primary);
    transition: var(--transition);
}

.blog-card-title a:hover {
    color: var(--primary-color);
}

.blog-card-excerpt {
    color: var(--text-secondary);
    margin-bottom: 20px;
    line-height: 1.6;
}

.blog-card-link {
    color: var(--primary-color);
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.blog-card-link:hover {
    gap: 12px;
}

/* Pagination */
.blog-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    margin-top: 40px;
}

.pagination-btn {
    padding: 10px 20px;
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    color: var(--text-primary);
    font-weight: 500;
    transition: var(--transition);
}

.pagination-btn:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.pagination-numbers {
    display: flex;
    gap: 8px;
}

.pagination-number {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    color: var(--text-primary);
    font-weight: 500;
    transition: var(--transition);
}

.pagination-number:hover,
.pagination-number.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

/* No Posts */
.blog-no-posts {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 12px;
}

.blog-no-posts i {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 20px;
}

.blog-no-posts h3 {
    margin-bottom: 15px;
}

.blog-no-posts p {
    margin-bottom: 25px;
}

/* Sidebar */
.blog-sidebar {
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

.sidebar-widget-cta {
    background: var(--bg-light);
    text-align: center;
}

.sidebar-widget-cta p {
    margin-bottom: 20px;
}

.btn-outline-primary {
    display: inline-block;
    padding: 12px 25px;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    border-radius: 25px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-outline-primary:hover {
    background: var(--primary-color);
    color: white;
}

/* Responsive */
@media (max-width: 992px) {
    .blog-layout {
        grid-template-columns: 1fr;
    }

    .blog-sidebar {
        position: static;
    }

    .blog-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    }
}

@media (max-width: 768px) {
    .category-header h1 {
        font-size: 2.2rem;
    }

    .blog-grid {
        grid-template-columns: 1fr;
    }

    .blog-pagination {
        flex-wrap: wrap;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
