<?php
/**
 * Whitepaper Detail Page
 * Displays individual whitepaper with download, sharing, and related content
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? clean($_GET['slug']) : '';

// Sample whitepapers data (should match index.php data + detailed info)
$whitepapers_data = [
    'identity-verification-digital-banking' => [
        'id' => 1,
        'title' => 'The Future of Identity Verification in Digital Banking',
        'slug' => 'identity-verification-digital-banking',
        'category' => 'Financial Services',
        'topic' => 'Identity Verification',
        'author' => 'Dr. Sarah Mitchell',
        'author_title' => 'Chief Security Analyst',
        'description' => 'Explore emerging trends and technologies in digital identity verification for financial institutions, including biometrics, AI, and blockchain solutions.',
        'pages' => 24,
        'published_date' => '2026-02-01',
        'downloads' => 1547,
        'featured' => true,
        'executive_summary' => 'The digital banking landscape is rapidly evolving, and with it, the need for robust, user-friendly identity verification solutions. This whitepaper examines the current state of identity verification in financial services and explores emerging technologies that are reshaping how banks verify customer identities. From biometric authentication to AI-powered fraud detection and blockchain-based identity systems, we analyze the benefits, challenges, and implementation strategies for modern identity verification solutions.',
        'table_of_contents' => [
            'Executive Summary',
            'The Current State of Digital Identity Verification',
            'Emerging Technologies and Trends',
            'Biometric Authentication Systems',
            'AI and Machine Learning in Identity Verification',
            'Blockchain-Based Digital Identity',
            'Regulatory Compliance and Best Practices',
            'Implementation Strategies',
            'Case Studies and Real-World Applications',
            'Future Outlook and Recommendations'
        ],
        'key_highlights' => [
            'Biometric authentication adoption increased by 156% in financial services over the past two years',
            'AI-powered identity verification reduces false positives by up to 80%',
            'Blockchain-based digital identity solutions offer enhanced security and user control',
            'Average customer onboarding time reduced from 5 days to 5 minutes with modern solutions',
            'Regulatory compliance costs decreased by 40% with automated verification systems',
            'Customer satisfaction scores improved by 65% with streamlined digital verification'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '2.8 MB',
        'image' => 'The-Future-of-Identity-Verification-in-Digital-Banking.jpg'
    ],
    'healthcare-data-security' => [
        'id' => 2,
        'title' => 'Healthcare Data Security: A Comprehensive Guide',
        'slug' => 'healthcare-data-security',
        'category' => 'Healthcare',
        'topic' => 'Data Security',
        'author' => 'Michael Chen, CISSP',
        'author_title' => 'Healthcare Security Specialist',
        'description' => 'Learn best practices for protecting patient data, ensuring HIPAA compliance, and preventing healthcare data breaches.',
        'pages' => 32,
        'published_date' => '2026-01-15',
        'downloads' => 2103,
        'featured' => true,
        'executive_summary' => 'Healthcare organizations face unprecedented challenges in protecting sensitive patient data while maintaining accessibility for authorized personnel. This comprehensive guide examines the evolving threat landscape, regulatory requirements, and best practices for healthcare data security. From technical controls to organizational policies, we provide actionable strategies for achieving and maintaining robust data protection in healthcare environments.',
        'table_of_contents' => [
            'Introduction to Healthcare Data Security',
            'Understanding HIPAA and Regulatory Requirements',
            'Common Threats and Vulnerabilities',
            'Technical Security Controls',
            'Access Management and Authentication',
            'Data Encryption Strategies',
            'Incident Response Planning',
            'Employee Training and Awareness',
            'Third-Party Risk Management',
            'Continuous Monitoring and Improvement'
        ],
        'key_highlights' => [
            'Healthcare data breaches cost an average of $10.93 million per incident',
            '89% of healthcare organizations experienced at least one data breach in the past two years',
            'Proper encryption reduces breach costs by an average of $360,000',
            'Employee training decreases security incidents by 70%',
            'Multi-factor authentication blocks 99.9% of automated attacks',
            'Regular security audits identify vulnerabilities before they can be exploited'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '3.5 MB',
        'image' => 'Healthcare-Data-Security-A-Comprehensive-Guide.jpg'
    ],
    'ai-fraud-detection' => [
        'id' => 3,
        'title' => 'AI-Powered Fraud Detection Strategies',
        'slug' => 'ai-fraud-detection',
        'category' => 'Technology',
        'topic' => 'Fraud Detection',
        'author' => 'Jennifer Rodriguez, PhD',
        'author_title' => 'AI Research Director',
        'description' => 'Discover how artificial intelligence and machine learning are revolutionizing fraud detection and prevention across industries.',
        'pages' => 28,
        'published_date' => '2025-12-20',
        'downloads' => 1823,
        'featured' => false,
        'executive_summary' => 'Artificial intelligence and machine learning technologies are transforming fraud detection capabilities across industries. This whitepaper explores how AI algorithms can identify patterns and anomalies that traditional rule-based systems miss, providing real-time fraud prevention with unprecedented accuracy. We examine implementation strategies, best practices, and real-world results from organizations that have successfully deployed AI-powered fraud detection systems.',
        'table_of_contents' => [
            'The Evolution of Fraud Detection',
            'Understanding AI and Machine Learning',
            'Key AI Technologies for Fraud Prevention',
            'Neural Networks and Deep Learning',
            'Anomaly Detection Algorithms',
            'Real-Time Transaction Monitoring',
            'Reducing False Positives',
            'Integration with Existing Systems',
            'ROI and Performance Metrics',
            'Future Trends in AI Fraud Detection'
        ],
        'key_highlights' => [
            'AI systems detect fraud 3-5 times faster than traditional methods',
            'Machine learning reduces false positives by up to 80%',
            'Organizations see ROI within 6-12 months of AI implementation',
            'Neural networks can identify new fraud patterns without manual programming',
            'Real-time AI monitoring prevents fraud before transactions complete',
            'Adaptive algorithms continuously improve detection accuracy over time'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '2.9 MB',
        'image' => 'AI-Powered-Fraud-Detection-Strategies.jpg'
    ],
    'aml-compliance-digital-age' => [
        'id' => 4,
        'title' => 'AML Compliance in the Digital Age',
        'slug' => 'aml-compliance-digital-age',
        'category' => 'Financial Services',
        'topic' => 'Compliance',
        'author' => 'Robert Thompson, CPA',
        'author_title' => 'Compliance Solutions Lead',
        'description' => 'Navigate the complex landscape of anti-money laundering regulations with modern compliance strategies and technologies.',
        'pages' => 36,
        'published_date' => '2025-11-30',
        'downloads' => 1654,
        'featured' => false,
        'executive_summary' => 'Anti-money laundering compliance has become increasingly complex in the digital age, with evolving regulations, sophisticated criminals, and expanding global operations. This whitepaper provides a comprehensive overview of modern AML compliance requirements and explores how technology solutions can streamline compliance processes, reduce costs, and improve effectiveness. Financial institutions will find practical strategies for building robust AML programs that meet regulatory expectations while supporting business growth.',
        'table_of_contents' => [
            'AML Regulatory Landscape',
            'Key Compliance Requirements',
            'Customer Due Diligence',
            'Transaction Monitoring Systems',
            'Suspicious Activity Reporting',
            'Technology Solutions for AML',
            'Risk-Based Approaches',
            'International Considerations',
            'Audit and Documentation',
            'Building an Effective AML Program'
        ],
        'key_highlights' => [
            'AML fines exceeded $10 billion globally in 2025',
            'Automated monitoring systems reduce manual review time by 60%',
            'Risk-based approaches improve efficiency while maintaining compliance',
            'Advanced analytics identify suspicious patterns traditional systems miss',
            'Integrated solutions reduce compliance costs by 30-40%',
            'Proper AML programs protect reputation and enable business growth'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '3.8 MB',
        'image' => 'AML-Compliance-in-the-Digital-Age.jpg'
    ],
    'insurance-analytics' => [
        'id' => 5,
        'title' => 'Insurance Analytics: Driving Better Outcomes',
        'slug' => 'insurance-analytics',
        'category' => 'Insurance',
        'topic' => 'Analytics',
        'author' => 'Amanda Foster',
        'author_title' => 'Insurance Analytics Director',
        'description' => 'Learn how data analytics is transforming insurance underwriting, claims processing, and risk assessment.',
        'pages' => 20,
        'published_date' => '2025-11-10',
        'downloads' => 1432,
        'featured' => false,
        'executive_summary' => 'Data analytics is revolutionizing the insurance industry, enabling insurers to make better decisions, improve profitability, and enhance customer experiences. This whitepaper examines how advanced analytics techniques are being applied across the insurance value chain, from underwriting and pricing to claims management and fraud detection. Insurance professionals will discover actionable strategies for leveraging data to drive competitive advantage and operational excellence.',
        'table_of_contents' => [
            'The Analytics Revolution in Insurance',
            'Predictive Modeling for Underwriting',
            'Dynamic Pricing Strategies',
            'Claims Analytics and Automation',
            'Fraud Detection and Prevention',
            'Customer Segmentation and Retention',
            'Risk Assessment Technologies',
            'Integrating Internal and External Data',
            'Analytics Tools and Platforms',
            'Measuring Analytics ROI'
        ],
        'key_highlights' => [
            'Predictive analytics improve underwriting accuracy by 30-50%',
            'Dynamic pricing based on analytics increases profitability by 15-25%',
            'Claims automation reduces processing costs by 40%',
            'Analytics-driven fraud detection saves insurers millions annually',
            'Customer retention improves 35% with analytics-driven engagement',
            'Data-driven insurers achieve 20% higher profit margins'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '2.2 MB',
        'image' => 'Insurance-Analytics-Driving-Better-Outcomes.jpg'
    ],
    'kyc-best-practices' => [
        'id' => 6,
        'title' => 'KYC Best Practices for Financial Institutions',
        'slug' => 'kyc-best-practices',
        'category' => 'Financial Services',
        'topic' => 'Compliance',
        'author' => 'David Park, CAMS',
        'author_title' => 'KYC & Compliance Director',
        'description' => 'Comprehensive guide to Know Your Customer processes, regulatory requirements, and implementation strategies.',
        'pages' => 30,
        'published_date' => '2025-10-25',
        'downloads' => 1876,
        'featured' => false,
        'executive_summary' => 'Know Your Customer (KYC) processes are the cornerstone of financial compliance and risk management. This whitepaper provides a comprehensive guide to implementing effective KYC programs that meet regulatory requirements while minimizing friction for legitimate customers. From identity verification and customer due diligence to ongoing monitoring and enhanced due diligence, we cover the full spectrum of KYC best practices for modern financial institutions.',
        'table_of_contents' => [
            'Introduction to KYC Requirements',
            'Regulatory Framework and Standards',
            'Customer Identification Programs',
            'Customer Due Diligence (CDD)',
            'Enhanced Due Diligence (EDD)',
            'Ongoing Monitoring and Review',
            'Technology Solutions for KYC',
            'Risk-Based KYC Approaches',
            'Global KYC Considerations',
            'Building an Effective KYC Program'
        ],
        'key_highlights' => [
            'Effective KYC programs reduce regulatory fines by up to 70%',
            'Automated KYC solutions cut onboarding time from days to minutes',
            'Risk-based approaches optimize resource allocation by 45%',
            'Digital identity verification improves customer experience scores by 60%',
            'Continuous monitoring catches 3x more suspicious activities than periodic reviews',
            'Integrated KYC platforms reduce compliance costs by 35%'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '3.1 MB',
        'image' => 'KYC-Best-Practices-for-Financial-Institutions.jpg'
    ],
    'government-data-quality' => [
        'id' => 7,
        'title' => 'Government Data Quality and Integrity',
        'slug' => 'government-data-quality',
        'category' => 'Government',
        'topic' => 'Data Quality',
        'author' => 'Patricia Williams, MPA',
        'author_title' => 'Government Solutions Analyst',
        'description' => 'Strategies for maintaining high-quality data in government systems and ensuring data integrity for public services.',
        'pages' => 26,
        'published_date' => '2025-10-05',
        'downloads' => 987,
        'featured' => false,
        'executive_summary' => 'Government agencies rely on accurate, complete, and timely data to deliver critical public services effectively. This whitepaper examines the unique challenges government organizations face in maintaining data quality and integrity across complex, interconnected systems. We explore proven strategies, technology solutions, and governance frameworks that help agencies improve data quality, reduce errors, and enhance decision-making for better public outcomes.',
        'table_of_contents' => [
            'The Importance of Government Data Quality',
            'Common Data Quality Challenges',
            'Data Governance Frameworks',
            'Data Standardization and Normalization',
            'Identity Resolution and Matching',
            'Data Validation and Verification',
            'Interoperability and Data Sharing',
            'Privacy and Security Considerations',
            'Measuring Data Quality Metrics',
            'Building a Data Quality Culture'
        ],
        'key_highlights' => [
            'Poor data quality costs government agencies an estimated $3.1 trillion annually',
            'Automated data validation reduces error rates by 85%',
            'Master data management improves cross-agency collaboration by 50%',
            'Real-time data quality monitoring catches issues before they impact services',
            'Standardized data formats reduce integration costs by 40%',
            'Data governance programs improve public trust and transparency'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '2.7 MB',
        'image' => 'Government-Data-Quality-and-Integrity.jpg'
    ],
    'credit-risk-management' => [
        'id' => 8,
        'title' => 'Credit Risk Management in 2026',
        'slug' => 'credit-risk-management',
        'category' => 'Financial Services',
        'topic' => 'Risk Management',
        'author' => 'James Morrison, CFA',
        'author_title' => 'Credit Risk Strategist',
        'description' => 'Modern approaches to credit risk assessment, modeling, and mitigation in an evolving financial landscape.',
        'pages' => 34,
        'published_date' => '2025-09-20',
        'downloads' => 2210,
        'featured' => false,
        'executive_summary' => 'Credit risk management is undergoing a fundamental transformation driven by advanced analytics, alternative data sources, and evolving regulatory requirements. This whitepaper explores modern approaches to credit risk assessment and management that enable financial institutions to make better lending decisions while maintaining portfolio quality. From AI-powered scoring models to real-time monitoring and stress testing, we provide actionable insights for building resilient credit risk frameworks.',
        'table_of_contents' => [
            'The Evolving Credit Risk Landscape',
            'Modern Credit Scoring Models',
            'Alternative Data in Credit Assessment',
            'AI and Machine Learning Applications',
            'Portfolio Risk Management',
            'Stress Testing and Scenario Analysis',
            'Regulatory Capital Requirements',
            'Real-Time Risk Monitoring',
            'Credit Risk Mitigation Strategies',
            'Future Trends and Predictions'
        ],
        'key_highlights' => [
            'AI-powered credit models improve prediction accuracy by 25-40%',
            'Alternative data sources expand creditworthy population by 20%',
            'Real-time monitoring reduces default rates by 15-30%',
            'Advanced stress testing identifies portfolio vulnerabilities before they materialize',
            'Automated decisioning reduces credit approval time by 80%',
            'Modern risk frameworks balance growth with prudent risk management'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '3.6 MB',
        'image' => 'Credit-Risk-Management-in-2026.jpg'
    ],
    'telematics-insurance' => [
        'id' => 9,
        'title' => 'Telematics and Insurance: The Connected Future',
        'slug' => 'telematics-insurance',
        'category' => 'Insurance',
        'topic' => 'Technology',
        'author' => 'Lisa Chang',
        'author_title' => 'InsurTech Research Lead',
        'description' => 'How telematics data is reshaping auto insurance pricing, risk assessment, and customer engagement.',
        'pages' => 22,
        'published_date' => '2025-09-01',
        'downloads' => 1345,
        'featured' => false,
        'executive_summary' => 'Telematics technology is revolutionizing the auto insurance industry by providing real-time driving behavior data that enables more accurate risk assessment and personalized pricing. This whitepaper explores how insurers are leveraging connected vehicle data, smartphone-based telematics, and IoT devices to transform underwriting, claims management, and customer engagement. We examine the benefits, challenges, and future trajectory of telematics in insurance.',
        'table_of_contents' => [
            'Introduction to Insurance Telematics',
            'Types of Telematics Solutions',
            'Usage-Based Insurance Models',
            'Driving Behavior Analytics',
            'Risk Scoring with Telematics Data',
            'Claims Management and FNOL',
            'Customer Engagement Strategies',
            'Privacy and Data Governance',
            'Implementation Best Practices',
            'The Connected Future of Insurance'
        ],
        'key_highlights' => [
            'Telematics-based policies reduce claims frequency by 20-40%',
            'Usage-based insurance adoption grew 35% year-over-year',
            'Real-time crash detection reduces claims processing time by 50%',
            'Personalized pricing improves customer retention by 25%',
            'Driving behavior feedback reduces risky driving incidents by 30%',
            'Connected vehicle data enables proactive risk management'
        ],
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'file_size' => '2.4 MB',
        'image' => 'Telematics-and-Insurance-The-Connected-Future.jpg'
    ]
];

// Get current whitepaper or 404
if (!isset($whitepapers_data[$slug])) {
    header('Location: ' . url('resources/whitepapers'));
    exit;
}

$whitepaper = $whitepapers_data[$slug];

// Get related whitepapers (same category or topic, excluding current)
$related_whitepapers = array_filter($whitepapers_data, function($wp) use ($whitepaper) {
    return $wp['id'] !== $whitepaper['id'] &&
           ($wp['category'] === $whitepaper['category'] || $wp['topic'] === $whitepaper['topic']);
});
$related_whitepapers = array_slice($related_whitepapers, 0, 3);

// Page variables
$page_title = $whitepaper['title'];
$meta_description = $whitepaper['description'];
$meta_keywords = $whitepaper['category'] . ', ' . $whitepaper['topic'] . ', whitepaper, research, ' . SITE_NAME;

include '../../includes/header.php';
?>

<!-- Hero Section -->
<section class="whitepaper-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/<?php echo rawurlencode($whitepaper['image']); ?>') center center / cover no-repeat;">
    <div class="hero-background"></div>
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <a href="<?php echo url('resources/whitepapers'); ?>">Whitepapers</a>
            <span>/</span>
            <span><?php echo $whitepaper['title']; ?></span>
        </nav>

        <div class="whitepaper-hero-content">
            <div class="whitepaper-badges">
                <span class="badge badge-category"><?php echo $whitepaper['category']; ?></span>
                <span class="badge badge-topic"><?php echo $whitepaper['topic']; ?></span>
            </div>

            <h1><?php echo $whitepaper['title']; ?></h1>

            <div class="whitepaper-meta-info">
                <div class="meta-item">
                    <i class="fas fa-user"></i>
                    <div>
                        <strong><?php echo $whitepaper['author']; ?></strong>
                        <span><?php echo $whitepaper['author_title']; ?></span>
                    </div>
                </div>
                <div class="meta-item">
                    <i class="far fa-calendar"></i>
                    <div>
                        <strong>Published</strong>
                        <span><?php echo date('F j, Y', strtotime($whitepaper['published_date'])); ?></span>
                    </div>
                </div>
                <div class="meta-item">
                    <i class="far fa-file-pdf"></i>
                    <div>
                        <strong><?php echo $whitepaper['pages']; ?> Pages</strong>
                        <span><?php echo $whitepaper['file_size']; ?></span>
                    </div>
                </div>
                <div class="meta-item">
                    <i class="fas fa-download"></i>
                    <div>
                        <strong><?php echo number_format($whitepaper['downloads']); ?></strong>
                        <span>Downloads</span>
                    </div>
                </div>
            </div>

            <div class="hero-actions">
                <a href="<?php echo url('contact'); ?>" class="btn btn-outline btn-sm">
                                <i class="fas fa-envelope"></i>
                                Contact Us
                            </a>
                <!-- <div class="share-buttons">
                    <span>Share:</span>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(current_url()); ?>" target="_blank" class="share-btn" title="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($whitepaper['title']); ?>" target="_blank" class="share-btn" title="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=<?php echo urlencode($whitepaper['title']); ?>&body=<?php echo urlencode('Check out this whitepaper: ' . current_url()); ?>" class="share-btn" title="Share via Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="whitepaper-content section">
    <div class="container">
        <div class="content-layout">
            <!-- Main Content -->
            <div class="content-main">
                <!-- Executive Summary -->
                <div class="content-card">
                    <div class="content-header">
                        <i class="fas fa-file-alt"></i>
                        <h2>Executive Summary</h2>
                    </div>
                    <p class="summary-text"><?php echo $whitepaper['executive_summary']; ?></p>
                </div>

                <!-- Key Highlights -->
                <div class="content-card highlights-card">
                    <div class="content-header">
                        <i class="fas fa-star"></i>
                        <h2>Key Highlights & Takeaways</h2>
                    </div>
                    <ul class="highlights-list">
                        <?php foreach ($whitepaper['key_highlights'] as $highlight): ?>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><?php echo $highlight; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Table of Contents -->
                <div class="content-card toc-card">
                    <div class="content-header">
                        <i class="fas fa-list"></i>
                        <h2>Table of Contents</h2>
                    </div>
                    <ol class="toc-list">
                        <?php foreach ($whitepaper['table_of_contents'] as $index => $section): ?>
                            <li>
                                <span class="toc-number"><?php echo ($index + 1); ?>.</span>
                                <span class="toc-title"><?php echo $section; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <!-- Download CTA -->
                <div class="content-cta">
                    <div class="cta-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="cta-text">
                        <h3>Ready to dive deeper?</h3>
                        <p>Contact us to access the complete whitepaper with all insights, data, and recommendations.</p>
                    </div>
                    <a href="<?php echo url('contact/?inquiry=whitepaper'); ?>" class="btn btn-primary btn-lg">
                        <i class="fas fa-envelope"></i>
                        Request Access
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="content-sidebar">
                <!-- Download Card -->
                <div class="sidebar-card download-card">
                    <div class="download-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3>Request This Whitepaper</h3>
                    <p>Contact us to get access to the full PDF document</p>
                    <a href="<?php echo url('contact/?inquiry=whitepaper'); ?>" class="btn btn-primary btn-block" id="sidebar-download-btn">
                        <i class="fas fa-envelope"></i>
                        Request Access
                    </a>
                    <div class="download-details">
                        <div class="detail-item">
                            <i class="far fa-file"></i>
                            <span><?php echo $whitepaper['pages']; ?> pages</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-hdd"></i>
                            <span><?php echo $whitepaper['file_size']; ?></span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-download"></i>
                            <span><?php echo number_format($whitepaper['downloads']); ?> downloads</span>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="sidebar-card newsletter-card">
                    <div class="newsletter-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3>Stay Updated</h3>
                    <p>Get notified when we publish new whitepapers and research</p>
                    <form class="newsletter-form" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="email" name="email" placeholder="Your email address" required>
                        <button type="submit" class="btn btn-secondary btn-block">
                            <i class="fas fa-paper-plane"></i>
                            Subscribe
                        </button>
                    </form>
                </div>

                <!-- Contact CTA -->
                <div class="sidebar-card contact-card">
                    <h3>Need Expert Guidance?</h3>
                    <p>Our team can help you implement the strategies discussed in this whitepaper</p>
                    <a href="<?php echo url('contact'); ?>" class="btn btn-outline btn-block">
                        <i class="fas fa-comments"></i>
                        Contact Us
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Related Whitepapers -->
<?php if (!empty($related_whitepapers)): ?>
<section class="related-section section" style="background: var(--bg-lighter);">
    <div class="container">
        <div class="section-header">
            <h2>Related Whitepapers</h2>
            <p>Continue your research with these related resources</p>
        </div>

        <div class="related-grid">
            <?php foreach ($related_whitepapers as $related): ?>
                <article class="related-card">
                    <div class="related-thumbnail">
                        <img src="<?php echo ASSETS_URL; ?>/images/<?php echo rawurlencode($related['image']); ?>" alt="<?php echo htmlspecialchars($related['title']); ?>">
                    </div>
                    <div class="related-content">
                        <div class="related-tags">
                            <span class="tag tag-category"><?php echo $related['category']; ?></span>
                            <span class="tag tag-topic"><?php echo $related['topic']; ?></span>
                        </div>
                        <h3><?php echo $related['title']; ?></h3>
                        <p><?php echo substr($related['description'], 0, 120) . '...'; ?></p>
                        <div class="related-meta">
                            <span><i class="far fa-file"></i> <?php echo $related['pages']; ?>p</span>
                            <span><i class="fas fa-download"></i> <?php echo number_format($related['downloads']); ?></span>
                        </div>
                        <a href="<?php echo url('resources/whitepapers/' . $related['slug']); ?>" class="btn btn-outline btn-sm">
                            Read More
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<style>
/* Hero Section */
.whitepaper-hero {
    position: relative;
    padding: 100px 0 80px;
    color: white;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--primary-dark);
    opacity: 0.85;
}



.whitepaper-hero .container {
    position: relative;
    z-index: 1;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
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

.whitepaper-hero-content h1 {
    color: white;
    font-size: 3rem;
    margin: 20px 0 30px;
    line-height: 1.2;
}

.whitepaper-badges {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.badge {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

.badge-category {
    background: rgba(255,255,255,0.25);
    color: white;
    backdrop-filter: blur(10px);
}

.badge-topic {
    background: var(--accent-orange);
    color: white;
}

.whitepaper-meta-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    margin: 30px 0;
    padding: 30px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.2);
}

.meta-item {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.meta-item i {
    font-size: 1.5rem;
    color: rgba(255,255,255,0.9);
    margin-top: 3px;
}

.meta-item div {
    display: flex;
    flex-direction: column;
}

.meta-item strong {
    font-size: 1rem;
    color: white;
    margin-bottom: 3px;
}

.meta-item span {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.8);
}

.hero-actions {
    display: flex;
    gap: 30px;
    align-items: center;
    margin-top: 30px;
    flex-wrap: wrap;
}

.share-buttons {
    display: flex;
    gap: 12px;
    align-items: center;
    color: white;
}

.share-buttons span {
    font-size: 0.95rem;
    color: rgba(255,255,255,0.9);
}

.share-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: var(--transition);
}

.share-btn:hover {
    background: rgba(255,255,255,0.25);
    transform: translateY(-2px);
}

/* Content Layout */
.content-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
    margin-top: 50px;
}

.content-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-sm);
    margin-bottom: 30px;
}

.content-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 2px solid var(--primary-color);
}

.content-header i {
    font-size: 1.8rem;
    color: var(--primary-color);
}

.content-header h2 {
    font-size: 1.8rem;
    margin: 0;
    color: var(--text-primary);
}

.summary-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-secondary);
}

/* Highlights */
.highlights-card {
    background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
}

.highlights-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.highlights-list li {
    display: flex;
    gap: 15px;
    padding: 15px;
    margin-bottom: 12px;
    background: white;
    border-radius: 8px;
    box-shadow: var(--shadow-sm);
    align-items: flex-start;
}

.highlights-list i {
    color: var(--secondary-color);
    font-size: 1.2rem;
    margin-top: 3px;
    flex-shrink: 0;
}

.highlights-list span {
    flex: 1;
    font-size: 1rem;
    line-height: 1.6;
    color: var(--text-primary);
}

/* Table of Contents */
.toc-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.toc-list li {
    display: flex;
    gap: 15px;
    padding: 15px;
    margin-bottom: 8px;
    border-left: 3px solid var(--primary-color);
    background: var(--bg-light);
    transition: var(--transition);
}

.toc-list li:hover {
    background: var(--bg-lighter);
}

.toc-number {
    font-weight: 700;
    color: var(--primary-color);
    font-size: 1.1rem;
    flex-shrink: 0;
}

.toc-title {
    flex: 1;
    font-size: 1rem;
    color: var(--text-primary);
}

/* Content CTA */
.content-cta {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    padding: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 30px;
    color: white;
    box-shadow: var(--shadow-lg);
}

.cta-icon {
    font-size: 4rem;
    color: rgba(255,255,255,0.9);
}

.cta-text {
    flex: 1;
}

.cta-text h3 {
    color: white;
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.cta-text p {
    color: rgba(255,255,255,0.95);
    font-size: 1.1rem;
    margin: 0;
}

/* Sidebar */
.sidebar-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-bottom: 25px;
}

.download-card {
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    color: white;
    text-align: center;
}

.download-icon {
    font-size: 4rem;
    color: rgba(255,255,255,0.9);
    margin-bottom: 20px;
}

.download-card h3 {
    color: white;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.download-card p {
    color: rgba(255,255,255,0.95);
    margin-bottom: 20px;
}

.download-details {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,0.2);
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(255,255,255,0.95);
    font-size: 0.9rem;
}

.detail-item i {
    width: 20px;
    text-align: center;
}

.newsletter-card {
    text-align: center;
}

.newsletter-icon {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.newsletter-card h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.newsletter-card p {
    color: var(--text-secondary);
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.newsletter-form input {
    width: 100%;
    padding: 12px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    margin-bottom: 12px;
    font-size: 0.95rem;
}

.newsletter-form input:focus {
    outline: none;
    border-color: var(--primary-color);
}

.contact-card h3 {
    font-size: 1.2rem;
    margin-bottom: 12px;
}

.contact-card p {
    color: var(--text-secondary);
    margin-bottom: 20px;
    font-size: 0.95rem;
}

/* Related Section */
.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.15rem;
    color: var(--text-secondary);
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}

.related-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.related-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.related-thumbnail {
    height: 180px;
    overflow: hidden;
}

.related-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-card:hover .related-thumbnail img {
    transform: scale(1.05);
}

.related-content {
    padding: 25px;
}

.related-tags {
    display: flex;
    gap: 8px;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.tag {
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.tag-category {
    background: #E3F2FD;
    color: #1976D2;
}

.tag-topic {
    background: #F3E5F5;
    color: #7B1FA2;
}

.related-card h3 {
    font-size: 1.2rem;
    margin-bottom: 12px;
    line-height: 1.4;
}

.related-card p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 15px;
}

.related-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.related-meta i {
    margin-right: 5px;
}

/* Responsive */
@media (max-width: 992px) {
    .content-layout {
        grid-template-columns: 1fr;
    }

    .content-sidebar {
        order: -1;
    }

    .whitepaper-meta-info {
        grid-template-columns: 1fr 1fr;
    }

    .content-cta {
        flex-direction: column;
        text-align: center;
        padding: 40px 30px;
    }
}

@media (max-width: 768px) {
    .whitepaper-hero {
        padding: 80px 0 60px;
    }

    .whitepaper-hero-content h1 {
        font-size: 2rem;
    }

    .whitepaper-meta-info {
        grid-template-columns: 1fr;
        padding: 20px;
    }

    .hero-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .share-buttons {
        justify-content: center;
    }

    .content-card {
        padding: 25px;
    }

    .content-header h2 {
        font-size: 1.5rem;
    }

    .related-grid {
        grid-template-columns: 1fr;
    }
}
</style>


<?php include '../../includes/footer.php'; ?>
