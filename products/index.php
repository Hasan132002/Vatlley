<?php
/**
 * VettlyGlobal - Products Listing Page
 * All products with filtering, search, and pagination
 */

require_once '../config.php';
require_once '../includes/functions.php';
require_once 'products-data.php';

// Page meta data
$page_title = 'Products & Solutions';
$meta_description = 'Explore VettlyGlobal\'s comprehensive suite of 55+ products and solutions across identity verification, fraud detection, risk assessment, and data intelligence for all industries.';
$meta_keywords = 'identity verification products, fraud detection solutions, risk assessment tools, data intelligence, insurance technology, healthcare solutions';

// Get all products
$all_products = get_all_products();

// Include header
include '../includes/header.php';
?>

<style>
/* Products Page Styles */
.products-hero {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 80px 0 60px;
    position: relative;
    overflow: hidden;
}

.products-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
    opacity: 0.3;
}

.products-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.products-hero h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 20px;
    animation: fadeInDown 0.8s ease;
}

.products-hero p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
    margin-bottom: 0;
    animation: fadeInUp 0.8s ease;
}

/* Filter Bar */
.filter-bar {
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    padding: 25px 0;
    margin-bottom: 40px;
    transition: all 0.3s ease;
}

.filter-bar.sticky {
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    animation: slideDown 0.3s ease;
}

.filter-controls {
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
}

.filter-group {
    flex: 1;
    min-width: 200px;
}

.filter-group label {
    display: block;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 8px;
    font-size: 0.9rem;
}

.filter-group select,
.filter-group input {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.filter-group select:focus,
.filter-group input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(5,130,189,0.1);
}

.search-input-wrapper {
    position: relative;
}

.search-input-wrapper i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
}

.search-input-wrapper input {
    padding-left: 45px;
}

/* Alphabet Filter */
.alphabet-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid var(--border-light);
}

.alphabet-btn {
    padding: 8px 12px;
    border: 2px solid var(--border-color);
    background: white;
    border-radius: 6px;
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--text-primary);
    cursor: pointer;
    transition: all 0.3s ease;
}

.alphabet-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    background: var(--bg-lighter);
}

.alphabet-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

/* Results Info */
.results-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--border-light);
}

.results-count {
    font-size: 1.1rem;
    color: var(--text-primary);
    font-weight: 600;
}

.results-count span {
    color: var(--primary-color);
}

.reset-filters {
    padding: 10px 20px;
    background: var(--bg-light);
    color: var(--text-primary);
    border: 2px solid var(--border-color);
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.reset-filters:hover {
    background: white;
    border-color: var(--primary-color);
    color: var(--primary-color);
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.product-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    animation: fadeInUp 0.5s ease;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

.product-card-header {
    padding: 25px;
    border-bottom: 1px solid var(--border-light);
}

.product-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    font-size: 1.8rem;
    color: white;
}

.product-name {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 10px;
    line-height: 1.3;
}

.product-industries {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 12px;
}

.industry-tag {
    padding: 4px 10px;
    background: var(--bg-lighter);
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--text-secondary);
    border: 1px solid var(--border-light);
}

.product-card-body {
    padding: 25px;
    flex: 1;
}

.product-description {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 20px;
}

.product-card-footer {
    padding: 20px 25px;
    background: var(--bg-lighter);
    border-top: 1px solid var(--border-light);
}

.learn-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background: var(--primary-color);
    color: white;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    justify-content: center;
}

.learn-more-btn:hover {
    background: var(--primary-dark);
    transform: translateX(5px);
    color: white;
}

/* No Results */
.no-results {
    text-align: center;
    padding: 80px 20px;
    background: var(--bg-lighter);
    border-radius: 12px;
    margin: 40px 0;
}

.no-results i {
    font-size: 2.5rem;
    color: var(--text-light);
    margin-bottom: 20px;
}

.no-results h3 {
    color: var(--text-primary);
    margin-bottom: 10px;
}

.no-results p {
    color: var(--text-secondary);
}

/* Loading Animation */
.loading {
    text-align: center;
    padding: 60px 20px;
}

.loading i {
    font-size: 2rem;
    color: var(--primary-color);
    animation: spin 1s linear infinite;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-100%);
    }
    to {
        transform: translateY(0);
    }
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .products-hero h1 {
        font-size: 2rem;
    }

    .products-hero p {
        font-size: 1rem;
    }

    .filter-controls {
        flex-direction: column;
    }

    .filter-group {
        min-width: 100%;
    }

    .alphabet-filter {
        gap: 6px;
    }

    .alphabet-btn {
        padding: 6px 10px;
        font-size: 0.85rem;
    }

    .products-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .results-info {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }
}
</style>

<!-- Hero Section -->
<section class="products-hero">
    <div class="container">
        <div class="products-hero-content">
            <h1>Products & Solutions</h1>
            <p>Discover our comprehensive suite of 55+ products designed to solve complex challenges across identity verification, fraud detection, risk assessment, and data intelligence.</p>
        </div>
    </div>
</section>

<!-- Filter Bar -->
<div class="filter-bar" id="filterBar">
    <div class="container">
        <div class="filter-controls">
            <!-- Industry Filter -->
            <div class="filter-group">
                <label for="industryFilter"><i class="fas fa-industry"></i> Filter by Industry</label>
                <select id="industryFilter">
                    <option value="">All Industries</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Financial Services">Financial Services</option>
                    <option value="Government">Government</option>
                    <option value="Law Enforcement">Law Enforcement</option>
                    <option value="Corporations">Corporations</option>
                    <option value="Collections & Recovery">Collections & Recovery</option>
                </select>
            </div>

            <!-- Search -->
            <div class="filter-group">
                <label for="searchInput"><i class="fas fa-search"></i> Search Products</label>
                <div class="search-input-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search by product name...">
                </div>
            </div>
        </div>

        <!-- Alphabet Filter -->
        <div class="alphabet-filter">
            <button class="alphabet-btn active" data-letter="all">All</button>
            <?php foreach (range('A', 'Z') as $letter): ?>
                <button class="alphabet-btn" data-letter="<?php echo $letter; ?>"><?php echo $letter; ?></button>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Products Section -->
<section class="section">
    <div class="container">
        <!-- Results Info -->
        <div class="results-info">
            <div class="results-count">
                Showing <span id="resultCount"><?php echo count($all_products); ?></span> of <?php echo count($all_products); ?> products
            </div>
            <button class="reset-filters" id="resetFilters">
                <i class="fas fa-redo"></i> Reset Filters
            </button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
            <?php foreach ($all_products as $product): ?>
                <div class="product-card"
                     data-name="<?php echo clean($product['name']); ?>"
                     data-industries="<?php echo clean(implode(',', $product['industries'])); ?>"
                     data-letter="<?php echo strtoupper(substr($product['name'], 0, 1)); ?>">

                    <div class="product-card-header">
                        <div class="product-icon" style="background: <?php echo $product['color']; ?>;">
                            <i class="fas <?php echo $product['icon']; ?>"></i>
                        </div>
                        <h3 class="product-name"><?php echo clean($product['name']); ?></h3>
                        <div class="product-industries">
                            <?php foreach ($product['industries'] as $industry): ?>
                                <span class="industry-tag"><?php echo clean($industry); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="product-card-body">
                        <p class="product-description">
                            <?php echo clean($product['short_description']); ?>
                        </p>
                    </div>

                    <div class="product-card-footer">
                        <a href="<?php echo url('products/' . $product['slug']); ?>" class="learn-more-btn">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No Results Message -->
        <div class="no-results" id="noResults" style="display: none;">
            <i class="fas fa-search"></i>
            <h3>No Products Found</h3>
            <p>Try adjusting your filters or search terms to find what you're looking for.</p>
        </div>
    </div>
</section>

<script>
// Products Filtering & Search
document.addEventListener('DOMContentLoaded', function() {
    const industryFilter = document.getElementById('industryFilter');
    const searchInput = document.getElementById('searchInput');
    const alphabetBtns = document.querySelectorAll('.alphabet-btn');
    const productCards = document.querySelectorAll('.product-card');
    const productsGrid = document.getElementById('productsGrid');
    const noResults = document.getElementById('noResults');
    const resultCount = document.getElementById('resultCount');
    const resetFilters = document.getElementById('resetFilters');
    const filterBar = document.getElementById('filterBar');

    let filters = {
        industry: '',
        search: '',
        letter: 'all'
    };

    // Sticky Filter Bar
    window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
            filterBar.classList.add('sticky');
        } else {
            filterBar.classList.remove('sticky');
        }
    });

    // Industry Filter
    industryFilter.addEventListener('change', function() {
        filters.industry = this.value;
        filterProducts();
    });

    // Search Input
    searchInput.addEventListener('input', function() {
        filters.search = this.value.toLowerCase();
        filterProducts();
    });

    // Alphabet Filter
    alphabetBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            alphabetBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            filters.letter = this.dataset.letter;
            filterProducts();
        });
    });

    // Reset Filters
    resetFilters.addEventListener('click', function() {
        filters = {
            industry: '',
            search: '',
            letter: 'all'
        };
        industryFilter.value = '';
        searchInput.value = '';
        alphabetBtns.forEach(btn => {
            if (btn.dataset.letter === 'all') {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
        filterProducts();
    });

    // Main Filter Function
    function filterProducts() {
        let visibleCount = 0;

        productCards.forEach(card => {
            const name = card.dataset.name.toLowerCase();
            const industries = card.dataset.industries.toLowerCase();
            const letter = card.dataset.letter;

            // Check all filters
            const matchesIndustry = !filters.industry || industries.includes(filters.industry.toLowerCase());
            const matchesSearch = !filters.search || name.includes(filters.search);
            const matchesLetter = filters.letter === 'all' || letter === filters.letter;

            // Show/Hide card with animation
            if (matchesIndustry && matchesSearch && matchesLetter) {
                card.style.display = 'flex';
                card.style.animation = 'fadeInUp 0.5s ease';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update results count
        resultCount.textContent = visibleCount;

        // Show/Hide no results message
        if (visibleCount === 0) {
            productsGrid.style.display = 'none';
            noResults.style.display = 'block';
        } else {
            productsGrid.style.display = 'grid';
            noResults.style.display = 'none';
        }
    }

    // Initial filter
    filterProducts();
});
</script>

<?php include '../includes/footer.php'; ?>
