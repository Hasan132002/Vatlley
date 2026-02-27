<?php
/**
 * Webinars Page
 * Displays upcoming and on-demand webinars with registration
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Page variables
$page_title = 'Webinars';
$meta_description = 'Join VettlyGlobal\'s expert-led webinars on risk management, fraud detection, compliance, and data intelligence. Register for upcoming sessions or access our on-demand library.';
$meta_keywords = 'webinars, online training, expert sessions, risk management webinars, compliance training';

// Sample upcoming webinars data
$upcoming_webinars = [
    [
        'id' => 1,
        'title' => 'Advanced Fraud Detection Techniques for 2026',
        'date' => '2026-03-15',
        'time' => '2:00 PM - 3:00 PM EST',
        'duration' => '60 minutes',
        'speaker' => 'Dr. Sarah Johnson',
        'speaker_title' => 'Chief Security Officer',
        'speaker_image' => 'speaker-1.jpg',
        'description' => 'Learn the latest AI-powered fraud detection strategies and how to implement them in your organization. This comprehensive session covers machine learning models, behavioral analytics, and real-time monitoring techniques.',
        'topics' => ['AI & Machine Learning', 'Fraud Detection', 'Risk Management'],
        'level' => 'Intermediate',
        'attendees' => 347,
        'max_attendees' => 500,
        'registration_url' => url('contact/?inquiry=webinar'),
        'featured' => true
    ],
    [
        'id' => 2,
        'title' => 'HIPAA Compliance: What\'s New in 2026',
        'date' => '2026-03-22',
        'time' => '1:00 PM - 2:00 PM EST',
        'duration' => '60 minutes',
        'speaker' => 'Michael Chen',
        'speaker_title' => 'Healthcare Compliance Director',
        'speaker_image' => 'speaker-2.jpg',
        'description' => 'Stay ahead of HIPAA regulatory changes and learn best practices for protecting patient data. Discover practical strategies for maintaining compliance while improving operational efficiency.',
        'topics' => ['Healthcare', 'Compliance', 'Data Security'],
        'level' => 'All Levels',
        'attendees' => 289,
        'max_attendees' => 400,
        'registration_url' => url('contact/?inquiry=webinar'),
        'featured' => true
    ],
    [
        'id' => 3,
        'title' => 'Identity Verification in the Digital Age',
        'date' => '2026-04-05',
        'time' => '3:00 PM - 4:00 PM EST',
        'duration' => '60 minutes',
        'speaker' => 'Jessica Martinez',
        'speaker_title' => 'Identity Solutions Expert',
        'speaker_image' => 'speaker-3.jpg',
        'description' => 'Explore cutting-edge identity verification technologies including biometrics, document verification, and multi-factor authentication. Learn how to balance security with user experience.',
        'topics' => ['Identity Verification', 'Technology', 'Security'],
        'level' => 'Beginner',
        'attendees' => 412,
        'max_attendees' => 600,
        'registration_url' => url('contact/?inquiry=webinar'),
        'featured' => false
    ],
    [
        'id' => 4,
        'title' => 'KYC & AML: Streamlining Compliance Processes',
        'date' => '2026-04-18',
        'time' => '2:00 PM - 3:30 PM EST',
        'duration' => '90 minutes',
        'speaker' => 'Robert Williams',
        'speaker_title' => 'Financial Compliance Specialist',
        'speaker_image' => 'speaker-4.jpg',
        'description' => 'Master the essentials of Know Your Customer and Anti-Money Laundering compliance. This workshop-style webinar includes real-world case studies and interactive Q&A.',
        'topics' => ['Financial Services', 'KYC', 'AML', 'Compliance'],
        'level' => 'Advanced',
        'attendees' => 198,
        'max_attendees' => 300,
        'registration_url' => url('contact/?inquiry=webinar'),
        'featured' => false
    ]
];

// Past conducted webinars data
$ondemand_webinars = [
    [
        'id' => 5,
        'title' => 'Data Privacy Regulations: A Global Overview',
        'conducted_date' => '2026-02-01',
        'speaker' => 'Emily Thompson',
        'speaker_title' => 'Privacy & Data Protection Officer',
        'description' => 'Comprehensive overview of global data privacy regulations including GDPR, CCPA, and emerging frameworks.',
        'topics' => ['Data Privacy', 'Compliance', 'GDPR'],
        'attendees' => 320,
        'thumbnail' => 'Data-Privacy-Regulations-A-Global-Overview.jpg'
    ],
    [
        'id' => 6,
        'title' => 'Insurance Analytics: From Data to Insights',
        'conducted_date' => '2026-01-25',
        'speaker' => 'David Kumar',
        'speaker_title' => 'Insurance Analytics Lead',
        'description' => 'Learn how to leverage data analytics for better underwriting decisions, claims processing, and risk assessment.',
        'topics' => ['Insurance', 'Analytics', 'Risk Assessment'],
        'attendees' => 275,
        'thumbnail' => 'Insurance-Analytics-From-Data-to-Insights.jpg'
    ],
    [
        'id' => 7,
        'title' => 'Credit Risk Management Best Practices',
        'conducted_date' => '2026-01-15',
        'speaker' => 'Amanda Foster',
        'speaker_title' => 'Credit Risk Director',
        'description' => 'Explore modern credit risk management strategies, scoring models, and portfolio optimization techniques.',
        'topics' => ['Financial Services', 'Credit Risk', 'Risk Management'],
        'attendees' => 410,
        'thumbnail' => 'Credit-Risk-Management-Best-Practices.jpg'
    ],
    [
        'id' => 8,
        'title' => 'Government Digital Identity Solutions',
        'conducted_date' => '2025-12-20',
        'speaker' => 'James Patterson',
        'speaker_title' => 'Public Sector Technology Advisor',
        'description' => 'Discover how government agencies are modernizing identity verification and citizen services.',
        'topics' => ['Government', 'Digital Identity', 'Public Services'],
        'attendees' => 195,
        'thumbnail' => 'Government-Digital-Identity-Solutions.jpg'
    ],
    [
        'id' => 9,
        'title' => 'Collections & Recovery: Maximizing ROI',
        'conducted_date' => '2025-12-10',
        'speaker' => 'Lisa Anderson',
        'speaker_title' => 'Collections Strategy Expert',
        'description' => 'Proven strategies for improving recovery rates while maintaining compliance and customer relationships.',
        'topics' => ['Collections', 'Debt Recovery', 'Strategy'],
        'attendees' => 230,
        'thumbnail' => 'Collections-&-Recovery-Maximizing-ROI.jpg'
    ],
    [
        'id' => 10,
        'title' => 'Cybersecurity for Financial Institutions',
        'conducted_date' => '2025-11-28',
        'speaker' => 'Marcus Brown',
        'speaker_title' => 'Cybersecurity Director',
        'description' => 'Essential cybersecurity practices for protecting financial data and preventing cyber attacks.',
        'topics' => ['Financial Services', 'Cybersecurity', 'Data Protection'],
        'attendees' => 385,
        'thumbnail' => 'Cybersecurity-for-Financial-institutions.jpg'
    ]
];

include '../../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <span>Webinars</span>
        </nav>
        <h1>Expert Webinars</h1>
        <p>Learn from industry leaders through expert-led educational sessions</p>
    </div>
</section>

<!-- Featured Upcoming Webinar -->
<?php $featured = array_filter($upcoming_webinars, function($w) { return $w['featured']; }); ?>
<?php if (!empty($featured)): ?>
    <?php $featured_webinar = reset($featured); ?>
    <section class="featured-webinar-section section" style="background: var(--bg-lighter);">
        <div class="container">
            <div class="featured-badge">
                <i class="fas fa-star"></i>
                Featured Webinar
            </div>
            <div class="featured-webinar">
                <div class="featured-webinar-left">
                    <div class="speaker-image">
                        <div class="placeholder-speaker">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    </div>
                </div>
                <div class="featured-webinar-right">
                    <div class="webinar-date-time">
                        <i class="far fa-calendar-alt"></i>
                        <?php echo date('F j, Y', strtotime($featured_webinar['date'])); ?> at <?php echo $featured_webinar['time']; ?>
                    </div>
                    <h2><?php echo $featured_webinar['title']; ?></h2>
                    <div class="speaker-info">
                        <span class="speaker-name"><?php echo $featured_webinar['speaker']; ?></span>
                        <span class="speaker-title"><?php echo $featured_webinar['speaker_title']; ?></span>
                    </div>
                    <p><?php echo $featured_webinar['description']; ?></p>
                    <div class="webinar-meta">
                        <span><i class="far fa-clock"></i> <?php echo $featured_webinar['duration']; ?></span>
                        <span><i class="fas fa-signal"></i> <?php echo $featured_webinar['level']; ?></span>
                        <span><i class="fas fa-users"></i> <?php echo $featured_webinar['attendees']; ?>/<?php echo $featured_webinar['max_attendees']; ?> registered</span>
                    </div>
                    <div class="webinar-topics">
                        <?php foreach ($featured_webinar['topics'] as $topic): ?>
                            <span class="topic-tag"><?php echo $topic; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Upcoming Webinars -->
<section class="upcoming-webinars-section section">
    <div class="container">
        <div class="section-header">
            <h2><i class="far fa-calendar-check"></i> Upcoming Live Webinars</h2>
            <p>Explore upcoming expert-led sessions</p>
        </div>

        <div class="webinars-grid">
            <?php foreach ($upcoming_webinars as $webinar): ?>
                <div class="webinar-card">
                    <div class="webinar-card-header">
                        <div class="webinar-date-badge">
                            <div class="badge-month"><?php echo date('M', strtotime($webinar['date'])); ?></div>
                            <div class="badge-day"><?php echo date('d', strtotime($webinar['date'])); ?></div>
                        </div>
                        <div class="webinar-level">
                            <i class="fas fa-signal"></i>
                            <?php echo $webinar['level']; ?>
                        </div>
                    </div>

                    <div class="webinar-card-body">
                        <h3><?php echo $webinar['title']; ?></h3>

                        <div class="webinar-speaker">
                            <div class="speaker-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="speaker-details">
                                <div class="speaker-name"><?php echo $webinar['speaker']; ?></div>
                                <div class="speaker-title"><?php echo $webinar['speaker_title']; ?></div>
                            </div>
                        </div>

                        <p class="webinar-description"><?php echo $webinar['description']; ?></p>

                        <div class="webinar-topics">
                            <?php foreach ($webinar['topics'] as $topic): ?>
                                <span class="topic-tag"><?php echo $topic; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="webinar-info">
                            <div class="info-item">
                                <i class="far fa-clock"></i>
                                <span><?php echo $webinar['time']; ?></span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-hourglass-half"></i>
                                <span><?php echo $webinar['duration']; ?></span>
                            </div>
                        </div>

                        <div class="registration-status">
                            <div class="status-bar">
                                <div class="status-fill" style="width: <?php echo ($webinar['attendees'] / $webinar['max_attendees'] * 100); ?>%"></div>
                            </div>
                            <div class="status-text">
                                <?php echo $webinar['attendees']; ?> of <?php echo $webinar['max_attendees']; ?> spots filled
                            </div>
                        </div>
                    </div>

                    <div class="webinar-card-footer">
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-block">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- On-Demand Webinars -->
<section class="ondemand-section section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header">
            <h2><i class="fas fa-chalkboard-teacher"></i> Previously Conducted Webinars</h2>
            <p>Explore the topics and insights from our past expert-led sessions</p>
        </div>

        <div class="ondemand-grid">
            <?php foreach ($ondemand_webinars as $webinar): ?>
                <div class="ondemand-card">
                    <div class="ondemand-thumbnail">
                        <img src="<?php echo ASSETS_URL; ?>/images/<?php echo $webinar['thumbnail']; ?>" alt="<?php echo $webinar['title']; ?>">
                        <span class="session-badge"><i class="fas fa-check-circle"></i> Session Completed</span>
                    </div>

                    <div class="ondemand-content">
                        <div class="ondemand-topics">
                            <?php foreach ($webinar['topics'] as $topic): ?>
                                <span class="topic-tag"><?php echo $topic; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <h3><?php echo $webinar['title']; ?></h3>

                        <div class="ondemand-speaker">
                            <i class="fas fa-user"></i>
                            <span><?php echo $webinar['speaker']; ?>, <?php echo $webinar['speaker_title']; ?></span>
                        </div>

                        <p><?php echo $webinar['description']; ?></p>

                        <div class="ondemand-meta">
                            <div class="meta-item">
                                <i class="far fa-calendar"></i>
                                Conducted on <?php echo date('M j, Y', strtotime($webinar['conducted_date'])); ?>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-users"></i>
                                <?php echo number_format($webinar['attendees']); ?> attendees
                            </div>
                        </div>

                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-block" style="margin-top: 15px;">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="newsletter-section section">
    <div class="container">
        <div class="newsletter-content text-center">
            <i class="fas fa-bell" style="font-size: 2.5rem; color: white; margin-bottom: 20px;"></i>
            <h2 style="color: white;">Never Miss a Webinar</h2>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem;">
                Subscribe to receive notifications about upcoming webinars and exclusive learning opportunities
            </p>
            <form class="newsletter-form-inline" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>" data-validate>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="redirect_url" value="<?php echo current_url(); ?>">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-paper-plane"></i>
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="cta-content">
                <h2>Looking for Custom Training?</h2>
                <p>We offer customized webinars and training sessions tailored to your organization's specific needs and challenges.</p>
            </div>
            <div class="cta-action">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Page Header */
.page-header {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 80px 0 60px;
}

.page-header h1 {
    color: white;
    font-size: 2rem;
    margin-bottom: 15px;
}

.newsletter-section {
    padding: 80px 0;
    background: url('<?php echo ASSETS_URL; ?>/images/cyber-security-img.jpg') center center / cover no-repeat;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    background-attachment: fixed;
}
.newsletter-content{
    position: relative;
    z-index: 1;
}

.newsletter-section:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--primary-dark);
    opacity: 0.6;
}

.page-header p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    font-size: 0.95rem;
    color: rgba(255,255,255,0.9);
}

.breadcrumb a {
    color: white;
    transition: var(--transition);
}

.breadcrumb a:hover {
    color: rgba(255,255,255,0.8);
}

/* Featured Webinar */
.featured-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--accent-orange);
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    margin-bottom: 30px;
}

.featured-webinar {
    background: white;
    border-radius: 16px;
    padding: 50px;
    box-shadow: var(--shadow-xl);
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 40px;
    align-items: center;
}

.speaker-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-lg);
}

.placeholder-speaker {
    font-size: 3rem;
    color: rgba(255,255,255,0.4);
}

.webinar-date-time {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--bg-light);
    color: var(--primary-color);
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.95rem;
    margin-bottom: 20px;
}

.featured-webinar-right h2 {
    font-size: 2.2rem;
    margin-bottom: 15px;
}

.speaker-info {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.speaker-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-primary);
}

.speaker-title {
    font-size: 0.95rem;
    color: var(--text-secondary);
}

.featured-webinar-right p {
    font-size: 1.05rem;
    line-height: 1.7;
    margin-bottom: 20px;
}

.webinar-meta {
    display: flex;
    gap: 25px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.webinar-meta span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.webinar-meta i {
    color: var(--primary-color);
}

/* Section Headers */
.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2rem;
    margin-bottom: 15px;
}

.section-header h2 i {
    color: var(--primary-color);
    margin-right: 10px;
}

.section-header p {
    font-size: 1.15rem;
    color: var(--text-secondary);
}

/* Webinar Topics */
.webinar-topics {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.topic-tag {
    padding: 5px 12px;
    background: var(--bg-light);
    color: var(--primary-color);
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Upcoming Webinars Grid */
.webinars-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
}

.webinar-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
}

.webinar-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.webinar-card-header {
    padding: 20px;
    background: var(--bg-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.webinar-date-badge {
    background: var(--primary-color);
    color: white;
    padding: 12px 18px;
    border-radius: 8px;
    text-align: center;
}

.badge-month {
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
}

.badge-day {
    font-size: 1.8rem;
    font-weight: 700;
    line-height: 1;
}

.webinar-level {
    display: flex;
    align-items: center;
    gap: 5px;
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.webinar-card-body {
    padding: 25px;
    flex: 1;
}

.webinar-card-body h3 {
    font-size: 1.3rem;
    margin-bottom: 20px;
}

.webinar-speaker {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid var(--border-light);
}

.speaker-avatar {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.speaker-details .speaker-name {
    font-weight: 600;
    color: var(--text-primary);
    display: block;
}

.speaker-details .speaker-title {
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.webinar-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 15px;
}

.webinar-info {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 20px;
    padding: 15px;
    background: var(--bg-light);
    border-radius: 8px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.info-item i {
    color: var(--primary-color);
    width: 20px;
}

.registration-status {
    margin-bottom: 20px;
}

.status-bar {
    height: 8px;
    background: var(--bg-light);
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 8px;
}

.status-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--secondary-color), var(--secondary-light));
    transition: width 0.5s ease;
}

.status-text {
    font-size: 0.85rem;
    color: var(--text-secondary);
    text-align: center;
}

.webinar-card-footer {
    padding: 0 25px 25px;
}

/* On-Demand Grid */
.ondemand-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
}

.ondemand-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.ondemand-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.ondemand-thumbnail {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.ondemand-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.ondemand-card:hover .ondemand-thumbnail img {
    transform: scale(1.05);
}

.session-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
}

.ondemand-content {
    padding: 25px;
}

.ondemand-topics {
    display: flex;
    gap: 6px;
    margin-bottom: 12px;
    flex-wrap: wrap;
}

.ondemand-content h3 {
    font-size: 1.2rem;
    margin-bottom: 12px;
}

.ondemand-speaker {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin-bottom: 12px;
}

.ondemand-speaker i {
    color: var(--primary-color);
}

.ondemand-content p {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 15px;
}

.ondemand-meta {
    display: flex;
    gap: 20px;
    padding: 15px 0;
    border-top: 1px solid var(--border-light);
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.meta-item i {
    color: var(--primary-color);
}

/* Newsletter Section */
.newsletter-form-inline {
    display: flex;
    gap: 15px;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-form-inline input {
    flex: 1;
    padding: 15px 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 1rem;
}

.newsletter-form-inline input::placeholder {
    color: rgba(255,255,255,0.7);
}

.newsletter-form-inline button {
    padding: 15px 30px;
}

/* CTA Box */
.cta-box {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: var(--shadow-md);
    display: flex;
    align-items: center;
    gap: 40px;
}

.cta-icon {
    font-size: 4rem;
    color: var(--primary-color);
}

.cta-content {
    flex: 1;
}

.cta-content h2 {
    margin-bottom: 10px;
}

.cta-content p {
    margin: 0;
    font-size: 1.1rem;
}

/* Buttons */
.btn-block {
    width: 100%;
    justify-content: center;
}

.btn-lg {
    padding: 16px 40px;
    font-size: 1.1rem;
}

/* Responsive */
@media (max-width: 992px) {
    .featured-webinar {
        grid-template-columns: 1fr;
        text-align: center;
        padding: 40px;
    }

    .speaker-image {
        margin: 0 auto;
    }

    .webinar-meta {
        justify-content: center;
    }

    .webinars-grid,
    .ondemand-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    }
}

@media (max-width: 768px) {
    .page-header h1 {
        font-size: 2.2rem;
    }

    .featured-webinar {
        padding: 30px;
    }

    .featured-webinar-right h2 {
        font-size: 1.8rem;
    }

    .webinars-grid,
    .ondemand-grid {
        grid-template-columns: 1fr;
    }

    .newsletter-form-inline {
        flex-direction: column;
    }

    .cta-box {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
