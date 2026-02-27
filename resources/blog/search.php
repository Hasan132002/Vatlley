<?php
/**
 * Blog Search Page
 * Displays search results for blog posts
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Get search query
$search_query = isset($_GET['q']) ? trim($_GET['q']) : '';

// Page variables
$page_title = !empty($search_query) ? 'Search Results for "' . $search_query . '"' : 'Search Blog';
$meta_description = 'Search VettlyGlobal blog for articles, insights, and resources on risk solutions, data intelligence, and industry trends.';

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, $page);
$limit = 9; // Posts per page
$offset = ($page - 1) * $limit;

$posts = [];
$total_posts = 0;
$total_pages = 0;

// Perform search if query is not empty
if (!empty($search_query)) {
    $search_term = '%' . $search_query . '%';

    // Get total posts count
    $count_query = "SELECT COUNT(*) as total
                    FROM blog_posts
                    WHERE status = 'published'
                    AND (title LIKE ? OR content LIKE ? OR tags LIKE ? OR author LIKE ?)";
    $count_result = db_query($count_query, [$search_term, $search_term, $search_term, $search_term], 'ssss');
    $total_posts = $count_result->fetch_assoc()['total'];
    $total_pages = ceil($total_posts / $limit);

    // Get posts
    $query = "SELECT bp.*, bc.name as category_name, bc.slug as category_slug
              FROM blog_posts bp
              LEFT JOIN blog_categories bc ON bp.category_id = bc.id
              WHERE bp.status = 'published'
              AND (bp.title LIKE ? OR bp.content LIKE ? OR bp.tags LIKE ? OR bp.author LIKE ?)
              ORDER BY bp.published_date DESC
              LIMIT ? OFFSET ?";
    $posts = db_fetch_all($query, [$search_term, $search_term, $search_term, $search_term, $limit, $offset], 'ssssii');
}

// Get categories for sidebar
$categories = db_fetch_all("SELECT * FROM blog_categories ORDER BY name ASC");

// Get recent posts for sidebar
$recent_posts = db_fetch_all("SELECT id, title, slug, published_date FROM blog_posts WHERE status = 'published' ORDER BY published_date DESC LIMIT 5");

// Get popular search terms (placeholder - you can track this in a separate table)
$popular_searches = [
    'Risk Management',
    'Data Intelligence',
    'Fraud Prevention',
    'Healthcare Analytics',
    'Financial Compliance',
    'Identity Verification',
    'Cybersecurity',
    'Insurance Analytics'
];

include '../../includes/header.php';
?>

<!-- Search Header -->
<section class="search-header">
    <div class="container">
        <h1>
            <?php if (!empty($search_query)): ?>
                Search Results
            <?php else: ?>
                Search Blog
            <?php endif; ?>
        </h1>

        <!-- Search Form -->
        <div class="search-form-wrapper">
            <form action="<?php echo url('resources/blog/search'); ?>" method="GET" class="main-search-form">
                <div class="search-input-wrapper">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text"
                           name="q"
                           placeholder="Search for articles, topics, keywords..."
                           value="<?php echo clean($search_query); ?>"
                           required>
                    <button type="submit" class="search-submit-btn">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <?php if (!empty($search_query)): ?>
            <p class="search-results-info">
                Found <strong><?php echo number_format($total_posts); ?></strong>
                <?php echo $total_posts == 1 ? 'result' : 'results'; ?>
                for "<strong><?php echo clean($search_query); ?></strong>"
            </p>
        <?php endif; ?>
    </div>
</section>

<!-- Search Content -->
<section class="blog-section section">
    <div class="container">
        <div class="blog-layout">
            <!-- Main Content -->
            <div class="blog-main">
                <?php if (!empty($search_query)): ?>
                    <?php if (!empty($posts)): ?>
                        <div class="blog-grid">
                            <?php foreach ($posts as $post): ?>
                                <article class="blog-card">
                                    <?php if ($post['featured_image']): ?>
                                        <div class="blog-card-image">
                                            <img src="<?php echo url('uploads/blog/' . clean($post['featured_image'])); ?>" alt="<?php echo clean($post['title']); ?>">
                                            <?php if ($post['category_name']): ?>
                                                <span class="blog-card-category"><?php echo clean($post['category_name']); ?></span>
                                            <?php endif; ?>
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
                                            <?php
                                            // Highlight search term in excerpt
                                            $excerpt = truncate(strip_tags($post['content']), 150);
                                            echo $excerpt;
                                            ?>
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
                                    <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo ($page - 1); ?>" class="pagination-btn">
                                        <i class="fas fa-chevron-left"></i> Previous
                                    </a>
                                <?php endif; ?>

                                <div class="pagination-numbers">
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                        <?php if ($i == $page): ?>
                                            <span class="pagination-number active"><?php echo $i; ?></span>
                                        <?php else: ?>
                                            <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo $i; ?>" class="pagination-number"><?php echo $i; ?></a>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>

                                <?php if ($page < $total_pages): ?>
                                    <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo ($page + 1); ?>" class="pagination-btn">
                                        Next <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                    <?php else: ?>
                        <div class="search-no-results">
                            <i class="fas fa-search"></i>
                            <h3>No results found</h3>
                            <p>We couldn't find any articles matching "<strong><?php echo clean($search_query); ?></strong>"</p>
                            <div class="search-suggestions">
                                <h4>Try these search tips:</h4>
                                <ul>
                                    <li>Check your spelling</li>
                                    <li>Try more general keywords</li>
                                    <li>Try different keywords</li>
                                    <li>Browse our categories below</li>
                                </ul>
                            </div>
                            <a href="<?php echo url('resources/blog/'); ?>" class="btn btn-primary">Browse All Posts</a>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <!-- Welcome Search Screen -->
                    <div class="search-welcome">
                        <i class="fas fa-search-plus"></i>
                        <h3>Search Our Blog</h3>
                        <p>Enter keywords above to search through our extensive library of articles on risk solutions, data intelligence, and industry insights.</p>

                        <div class="popular-searches">
                            <h4>Popular Searches:</h4>
                            <div class="search-tags">
                                <?php foreach ($popular_searches as $term): ?>
                                    <a href="?q=<?php echo urlencode($term); ?>" class="search-tag">
                                        <?php echo clean($term); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="search-or-browse">
                            <p>Or browse all articles:</p>
                            <a href="<?php echo url('resources/blog/'); ?>" class="btn btn-outline">View All Posts</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Refine Search</h4>
                    <form action="<?php echo url('resources/blog/search'); ?>" method="GET" class="sidebar-search-form">
                        <div class="search-input-group">
                            <input type="text"
                                   name="q"
                                   placeholder="Search articles..."
                                   value="<?php echo clean($search_query); ?>"
                                   required>
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <?php if (!empty($categories)): ?>
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Browse by Category</h4>
                        <ul class="sidebar-category-list">
                            <li>
                                <a href="<?php echo url('resources/blog/'); ?>">
                                    All Posts
                                </a>
                            </li>
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?php echo url('resources/blog/category/' . urlencode($category['slug'])); ?>">
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

                <!-- Popular Tags -->
                <div class="sidebar-widget">
                    <h4 class="widget-title">Popular Topics</h4>
                    <div class="sidebar-tags">
                        <?php foreach ($popular_searches as $term): ?>
                            <a href="?q=<?php echo urlencode($term); ?>" class="tag">
                                <?php echo clean($term); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Newsletter Widget -->
                <div class="sidebar-widget sidebar-widget-newsletter">
                    <h4 class="widget-title">Newsletter</h4>
                    <p>Subscribe to get the latest blog posts and updates.</p>
                    <form class="newsletter-form" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>" data-validate>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="redirect_url" value="<?php echo current_url(); ?>">
                        <input type="email" name="email" placeholder="Your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>
/* Search Header */
.search-header {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
    color: white;
    padding: 80px 0 60px;
    text-align: center;
}

.search-header h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 30px;
}

.search-form-wrapper {
    max-width: 700px;
    margin: 0 auto 25px;
}

.main-search-form {
    width: 100%;
}

.search-input-wrapper {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 8px 8px 8px 25px;
    box-shadow: var(--shadow-lg);
}

.search-icon {
    color: var(--text-light);
    font-size: 1.2rem;
    margin-right: 15px;
}

.search-input-wrapper input {
    flex: 1;
    border: none;
    outline: none;
    font-size: 1.05rem;
    padding: 10px;
    color: var(--text-primary);
}

.search-submit-btn {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 14px 35px;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
}

.search-submit-btn:hover {
    background: var(--primary-dark);
    transform: scale(1.05);
}

.search-results-info {
    color: rgba(255,255,255,0.95);
    font-size: 1.1rem;
}

.search-results-info strong {
    color: white;
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

/* No Results */
.search-no-results {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 12px;
}

.search-no-results i {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 20px;
}

.search-no-results h3 {
    margin-bottom: 15px;
}

.search-no-results p {
    font-size: 1.1rem;
    margin-bottom: 30px;
}

.search-suggestions {
    background: var(--bg-light);
    padding: 25px;
    border-radius: 12px;
    margin: 30px 0;
    text-align: left;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.search-suggestions h4 {
    margin-bottom: 15px;
}

.search-suggestions ul {
    list-style-position: inside;
}

.search-suggestions li {
    margin-bottom: 8px;
    color: var(--text-secondary);
}

/* Welcome Screen */
.search-welcome {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 12px;
}

.search-welcome i {
    font-size: 4rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.search-welcome h3 {
    margin-bottom: 15px;
}

.search-welcome > p {
    font-size: 1.1rem;
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.popular-searches {
    margin: 40px 0;
}

.popular-searches h4 {
    margin-bottom: 20px;
}

.search-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
}

.search-tag {
    padding: 10px 20px;
    background: var(--bg-light);
    color: var(--text-secondary);
    border-radius: 25px;
    font-size: 0.95rem;
    transition: var(--transition);
}

.search-tag:hover {
    background: var(--primary-color);
    color: white;
}

.search-or-browse {
    margin-top: 40px;
}

.search-or-browse p {
    margin-bottom: 15px;
    color: var(--text-secondary);
}

.btn-outline {
    display: inline-block;
    padding: 12px 30px;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    border-radius: 25px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-outline:hover {
    background: var(--primary-color);
    color: white;
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

.sidebar-category-list a:hover {
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

.sidebar-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.sidebar-tags .tag {
    padding: 8px 15px;
    background: var(--bg-light);
    color: var(--text-secondary);
    border-radius: 20px;
    font-size: 0.85rem;
    transition: var(--transition);
}

.sidebar-tags .tag:hover {
    background: var(--primary-color);
    color: white;
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
    .search-header h1 {
        font-size: 2.2rem;
    }

    .search-input-wrapper {
        flex-direction: column;
        padding: 15px;
        border-radius: 20px;
    }

    .search-input-wrapper input {
        width: 100%;
        margin-bottom: 10px;
    }

    .search-submit-btn {
        width: 100%;
    }

    .blog-grid {
        grid-template-columns: 1fr;
    }

    .blog-pagination {
        flex-wrap: wrap;
    }

    .search-tags {
        gap: 8px;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
