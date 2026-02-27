<?php
/**
 * Healthcare Market Data - Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Healthcare Market Data Solutions | VettlyGlobal';
$meta_description = 'Access comprehensive healthcare market intelligence, competitive analysis, and trend data from VettlyGlobal to drive strategic business decisions.';

include '../../includes/header.php';
?>

<!-- Page Header / Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/healthcare'); ?>" style="color: white;">Healthcare</a>
                <span style="margin: 0 10px;">/</span>
                <span>Market Data</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Healthcare Market Data Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Make informed strategic decisions with comprehensive market intelligence, competitive analysis, and trend forecasting from VettlyGlobal.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 20px;">Strategic Market Intelligence for Healthcare Leaders</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px; line-height: 1.8;">
                    The healthcare market is dynamic and complex. VettlyGlobal provides comprehensive market intelligence that helps you understand market size, competitive dynamics, growth opportunities, and emerging trends.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;">
                    Whether you're evaluating market entry strategies, assessing competitive threats, or identifying acquisition targets, our market data solutions provide the strategic intelligence you need for confident decision-making.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Market sizing and forecasting
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Competitive analysis
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Market trend analysis
                    </li>
                </ul>
            </div>
            <div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fas fa-chart-bar" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Market Intelligence & Insights</h3>
                    <p style="color: var(--text-secondary);">
                        Access real-world market data that drives strategic planning, competitive positioning, and growth opportunities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Capabilities</h2>
            <p>Comprehensive healthcare market intelligence solutions</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-pie" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Market Sizing & Forecasting</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Get accurate market size estimates and growth projections across healthcare segments to support business planning and investment decisions.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-crosshairs" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Competitive Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Understand competitive positioning, market share dynamics, pricing strategies, and competitive advantages in your market segment.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-lightbulb" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Trend Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify emerging healthcare trends, market shifts, and disruption opportunities to stay ahead of the competition.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-microscope" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Segment Intelligence</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Access detailed data on healthcare segments including payer, provider, pharmacy, and life sciences markets.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-map-location-dot" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Geographic Intelligence</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Analyze regional market dynamics, growth variations, and geographic expansion opportunities.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-handshake" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">M&A Intelligence</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify acquisition targets, assess market consolidation opportunities, and support due diligence with market data.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>How It Works</h2>
            <p>Market intelligence delivered at your fingertips</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 50px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    1
                </div>
                <h3 style="margin-bottom: 15px;">Multi-Source Data Collection</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    We aggregate data from healthcare claims, provider networks, EHRs, and market sources to create comprehensive market intelligence.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    2
                </div>
                <h3 style="margin-bottom: 15px;">Analysis & Modeling</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Our experts analyze market trends, build forecasting models, and conduct competitive analysis.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    3
                </div>
                <h3 style="margin-bottom: 15px;">Strategic Insights</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Receive actionable insights through reports, dashboards, and custom analysis that support strategic planning.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    4
                </div>
                <h3 style="margin-bottom: 15px;">Continuous Updates</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Stay informed with real-time market updates, trend alerts, and quarterly market analysis reports.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Use Cases</h2>
            <p>Market intelligence for strategic growth</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">New Market Entry</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Evaluate market attractiveness, competitive landscape, and growth opportunities before entering new geographic markets or segments.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Market feasibility analysis
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Competitive positioning
                    </li>
                </ul>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Mergers & Acquisitions</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Support M&A strategy with target identification, valuation analysis, and post-merger integration planning based on market insights.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Target identification
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Due diligence support
                    </li>
                </ul>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Strategic Planning</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Inform 3-5 year strategic plans with market forecasts, competitive trends, and growth opportunity analysis.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Market forecasting
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Trend analysis
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white; padding: 60px 0;">
    <div class="container" style="text-align: center;">
        <h2 style="color: white; margin-bottom: 20px;">Drive Strategic Growth with Market Intelligence</h2>
        <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px; font-size: 1.1rem;">
            Access comprehensive healthcare market data from VettlyGlobal to inform strategic decisions and identify growth opportunities.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 30px; font-weight: 600;">
                Request a Demo <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 30px; font-weight: 600;">
                Contact Sales
            </a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
