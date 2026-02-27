<?php
/**
 * Case Study Detail Page
 * Displays individual case study with full details, metrics, and related content
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? clean($_GET['slug']) : '';

// Sample case studies data (should match index.php data + detailed info)
$case_studies_data = [
    'bank-fraud-reduction-ai' => [
        'id' => 1,
        'title' => 'Major Bank Reduces Fraud by 65% with AI-Powered Detection',
        'slug' => 'bank-fraud-reduction-ai',
        'industry' => 'Financial Services',
        'company_type' => 'Banking',
        'company_name' => 'National Commercial Bank',
        'company_description' => 'A leading national bank with over 500 branches and 5 million customers',
        'challenge' => 'Rising digital fraud losses threatening customer trust and profitability',
        'challenge_detail' => 'The bank was experiencing a sharp increase in digital fraud attempts, with losses exceeding $50 million annually. Traditional rule-based fraud detection systems were generating excessive false positives (45% false positive rate), leading to poor customer experiences and operational inefficiencies. The fraud team was overwhelmed with manual reviews, and sophisticated fraudsters were exploiting system weaknesses.',
        'solution' => 'AI-powered fraud detection platform',
        'solution_detail' => 'VettlyGlobal implemented a comprehensive AI-powered fraud detection platform that leverages machine learning algorithms, behavioral analysis, and real-time risk scoring. The solution integrated seamlessly with existing systems and provided immediate fraud detection across all digital channels including online banking, mobile apps, and card transactions.',
        'implementation_process' => [
            'Initial assessment and data analysis (2 weeks)',
            'System integration and API development (4 weeks)',
            'Machine learning model training with historical data (3 weeks)',
            'Pilot program with 100,000 transactions (2 weeks)',
            'Full deployment across all channels (2 weeks)',
            'Staff training and optimization (ongoing)'
        ],
        'results' => [
            '65% reduction in fraud losses ($32.5M annual savings)',
            '40% faster detection time (from hours to minutes)',
            '95% accuracy rate in fraud identification',
            '80% reduction in false positives',
            'ROI achieved within 8 months',
            'Customer satisfaction improved by 35%'
        ],
        'metrics' => [
            ['label' => 'Fraud Loss Reduction', 'value' => '65%', 'icon' => 'shield-alt'],
            ['label' => 'Detection Speed', 'value' => '40%', 'icon' => 'tachometer-alt'],
            ['label' => 'Accuracy Rate', 'value' => '95%', 'icon' => 'bullseye'],
            ['label' => 'Annual Savings', 'value' => '$32.5M', 'icon' => 'dollar-sign']
        ],
        'benefits' => [
            'Real-time fraud prevention across all digital channels',
            'Significant reduction in operational costs',
            'Enhanced customer experience with fewer false positives',
            'Scalable solution supporting business growth',
            'Continuous learning and adaptation to new fraud patterns',
            'Comprehensive reporting and analytics for compliance'
        ],
        'testimonial' => [
            'quote' => 'VettlyGlobal\'s AI-powered fraud detection has transformed our security posture. We\'re not only preventing more fraud but doing so with minimal impact on legitimate customers. The ROI has exceeded our expectations.',
            'author' => 'James Patterson',
            'position' => 'Chief Risk Officer',
            'company' => 'National Commercial Bank'
        ],
        'published_date' => '2026-02-01',
        'read_time' => '8 min read'
    ],
    'healthcare-hipaa-compliance' => [
        'id' => 2,
        'title' => 'Healthcare Provider Achieves 100% HIPAA Compliance',
        'slug' => 'healthcare-hipaa-compliance',
        'industry' => 'Healthcare',
        'company_type' => 'Hospital Network',
        'company_name' => 'Regional Healthcare System',
        'company_description' => 'Multi-state healthcare network with 50+ facilities serving 3 million patients',
        'challenge' => 'Complex compliance requirements and data security vulnerabilities',
        'challenge_detail' => 'The healthcare network was struggling with fragmented security systems across multiple facilities, making HIPAA compliance difficult to maintain. Previous audits revealed gaps in data protection, access controls, and audit trails. The organization faced potential fines and reputational damage while spending excessive resources on manual compliance processes.',
        'solution' => 'Comprehensive data security and compliance platform',
        'solution_detail' => 'VettlyGlobal deployed an integrated compliance and security platform that automated HIPAA compliance monitoring, centralized access management, implemented advanced encryption, and provided real-time audit capabilities across all facilities. The solution included staff training programs and continuous monitoring to maintain compliance.',
        'implementation_process' => [
            'Comprehensive security audit across all facilities (3 weeks)',
            'Gap analysis and remediation planning (2 weeks)',
            'Platform deployment and system integration (6 weeks)',
            'Data migration and encryption implementation (4 weeks)',
            'Staff training programs (ongoing, 3 waves)',
            'Compliance verification and certification (2 weeks)'
        ],
        'results' => [
            '100% HIPAA compliance achieved across all facilities',
            '80% reduction in audit preparation time',
            'Zero compliance violations in 18 months',
            '3 million patient records secured',
            '90% reduction in unauthorized access attempts',
            '70% decrease in security incidents'
        ],
        'metrics' => [
            ['label' => 'Compliance Rate', 'value' => '100%', 'icon' => 'check-circle'],
            ['label' => 'Audit Time Saved', 'value' => '80%', 'icon' => 'clock'],
            ['label' => 'Records Secured', 'value' => '3M', 'icon' => 'lock'],
            ['label' => 'Violations', 'value' => '0', 'icon' => 'shield-alt']
        ],
        'benefits' => [
            'Complete HIPAA compliance with automated monitoring',
            'Reduced risk of costly fines and penalties',
            'Enhanced patient trust and satisfaction',
            'Streamlined audit processes',
            'Centralized security management across all facilities',
            'Improved operational efficiency'
        ],
        'testimonial' => [
            'quote' => 'Achieving and maintaining HIPAA compliance across our entire network seemed impossible until we partnered with VettlyGlobal. Their platform has given us peace of mind and freed up our team to focus on patient care.',
            'author' => 'Dr. Maria Rodriguez',
            'position' => 'Chief Information Officer',
            'company' => 'Regional Healthcare System'
        ],
        'published_date' => '2026-01-20',
        'read_time' => '10 min read'
    ],
    'insurance-claims-acceleration' => [
        'id' => 3,
        'title' => 'Insurance Company Accelerates Claims Processing by 50%',
        'slug' => 'insurance-claims-acceleration',
        'industry' => 'Insurance',
        'company_type' => 'Auto Insurance',
        'company_name' => 'Premier Auto Insurance',
        'company_description' => 'Leading auto insurance provider serving 2 million policyholders nationwide',
        'challenge' => 'Slow claims processing and high fraud rates',
        'challenge_detail' => 'The insurance company faced significant challenges with manual claims verification processes that averaged 7-10 days for settlement. Customer satisfaction was declining, and fraud was eating into profitability. The verification process was labor-intensive, expensive, and prone to errors, while fraudulent claims were costing millions annually.',
        'solution' => 'Automated identity verification and data analytics platform',
        'solution_detail' => 'VettlyGlobal implemented an automated claims processing solution combining identity verification, document analysis, fraud detection algorithms, and real-time data validation. The platform integrated with existing claims management systems and provided instant verification for most claims while flagging suspicious cases for review.',
        'implementation_process' => [
            'Claims process analysis and optimization planning (2 weeks)',
            'Platform integration with existing systems (5 weeks)',
            'Fraud detection model development (3 weeks)',
            'Pilot program with select claim types (3 weeks)',
            'Full rollout across all claim categories (2 weeks)',
            'Staff retraining and process optimization (ongoing)'
        ],
        'results' => [
            '50% faster claim processing (7 days to 3.5 days average)',
            '30% reduction in fraudulent claims',
            '92% customer satisfaction score',
            '24-hour average settlement for simple claims',
            '$15M annual cost savings',
            '40% reduction in claims processing staff workload'
        ],
        'metrics' => [
            ['label' => 'Processing Speed', 'value' => '50%', 'icon' => 'bolt'],
            ['label' => 'Fraud Reduction', 'value' => '30%', 'icon' => 'shield-alt'],
            ['label' => 'Satisfaction', 'value' => '92%', 'icon' => 'smile'],
            ['label' => 'Settlement Time', 'value' => '24hr', 'icon' => 'clock']
        ],
        'benefits' => [
            'Dramatically faster claims settlement',
            'Significant fraud prevention and cost savings',
            'Improved customer satisfaction and retention',
            'Reduced operational costs',
            'Scalable platform supporting business growth',
            'Better risk assessment and pricing accuracy'
        ],
        'testimonial' => [
            'quote' => 'The transformation in our claims process has been remarkable. Our customers are happier, our costs are down, and we\'re preventing fraud more effectively than ever. VettlyGlobal\'s solution delivered results beyond our expectations.',
            'author' => 'Robert Chen',
            'position' => 'VP of Claims Operations',
            'company' => 'Premier Auto Insurance'
        ],
        'published_date' => '2026-01-10',
        'read_time' => '7 min read'
    ],
    'government-identity-modernization' => [
        'id' => 4,
        'title' => 'Government Agency Modernizes Identity Verification',
        'slug' => 'government-identity-modernization',
        'industry' => 'Government',
        'company_type' => 'State Government',
        'company_name' => 'State Department of Motor Vehicles',
        'company_description' => 'State government agency serving 12 million citizens with licensing and identification services',
        'challenge' => 'Outdated identity verification systems causing delays and frustration',
        'challenge_detail' => 'The DMV was using legacy verification systems that required extensive manual processing and in-person visits for most services. Citizens faced long wait times (average 2 hours), multiple visits were often necessary, and the systems were vulnerable to identity fraud. The agency needed to modernize while maintaining security and accessibility for all citizens.',
        'solution' => 'Modern digital identity verification platform',
        'solution_detail' => 'VettlyGlobal deployed a comprehensive digital identity platform enabling online verification, biometric authentication, and document validation. The solution maintained accessibility for all citizens while dramatically improving efficiency and security. Integration with existing systems ensured continuity during the transition.',
        'implementation_process' => [
            'Legacy system assessment and planning (4 weeks)',
            'Platform development and customization (8 weeks)',
            'Pilot program in 3 regional offices (4 weeks)',
            'Phased rollout to all 150 offices (12 weeks)',
            'Public awareness campaign and education (ongoing)',
            'Continuous optimization and support (ongoing)'
        ],
        'results' => [
            '70% faster citizen onboarding (2 hours to 20 minutes)',
            '99.8% accuracy rate in verification',
            '500,000 citizens verified monthly',
            '$5M annual cost savings',
            '85% reduction in required in-person visits',
            '95% citizen satisfaction score'
        ],
        'metrics' => [
            ['label' => 'Speed Improvement', 'value' => '70%', 'icon' => 'tachometer-alt'],
            ['label' => 'Accuracy Rate', 'value' => '99.8%', 'icon' => 'check-circle'],
            ['label' => 'Monthly Volume', 'value' => '500K', 'icon' => 'users'],
            ['label' => 'Cost Savings', 'value' => '$5M', 'icon' => 'dollar-sign']
        ],
        'benefits' => [
            'Dramatically improved citizen experience',
            'Reduced wait times and increased accessibility',
            'Enhanced security against identity fraud',
            'Significant operational cost savings',
            'Modern, scalable infrastructure',
            'Better service delivery across all demographics'
        ],
        'testimonial' => [
            'quote' => 'This modernization project has transformed how we serve our citizens. What once took hours now takes minutes, and we\'re doing it with better security. VettlyGlobal understood the unique challenges of government service delivery.',
            'author' => 'Patricia Williams',
            'position' => 'Director of Operations',
            'company' => 'State Department of Motor Vehicles'
        ],
        'published_date' => '2025-12-15',
        'read_time' => '9 min read'
    ],
    'ecommerce-fraud-prevention' => [
        'id' => 5,
        'title' => 'E-commerce Platform Prevents $8M in Payment Fraud',
        'slug' => 'ecommerce-fraud-prevention',
        'industry' => 'Corporations',
        'company_type' => 'E-commerce',
        'company_name' => 'ShopNow Online Marketplace',
        'company_description' => 'Major e-commerce platform processing 10 million transactions monthly',
        'challenge' => 'High-volume payment fraud impacting revenue and customer trust',
        'challenge_detail' => 'The e-commerce platform was experiencing sophisticated payment fraud costing $12M annually. Traditional fraud detection was slow, generated high false positives (30% of declined legitimate transactions), and couldn\'t keep pace with evolving fraud tactics. Customer experience was suffering, and operational costs for fraud management were unsustainable.',
        'solution' => 'Real-time transaction monitoring and risk scoring platform',
        'solution_detail' => 'VettlyGlobal implemented an advanced fraud prevention solution with real-time risk scoring, machine learning algorithms, device fingerprinting, and behavioral analysis. The system evaluates hundreds of risk factors in milliseconds, approving legitimate transactions while blocking fraud with minimal customer friction.',
        'implementation_process' => [
            'Transaction data analysis and pattern identification (3 weeks)',
            'Risk scoring model development (4 weeks)',
            'Platform integration with payment gateway (3 weeks)',
            'Shadow mode testing with live traffic (2 weeks)',
            'Gradual rollout with monitoring (3 weeks)',
            'Optimization and fine-tuning (ongoing)'
        ],
        'results' => [
            '$8M in fraud prevented annually (67% reduction)',
            '98% legitimate transaction approval rate',
            '2% false positive rate (down from 30%)',
            '200ms average decision time',
            '45% reduction in chargeback rates',
            '$2.5M annual operational cost savings'
        ],
        'metrics' => [
            ['label' => 'Fraud Prevented', 'value' => '$8M', 'icon' => 'shield-alt'],
            ['label' => 'Approval Rate', 'value' => '98%', 'icon' => 'check-circle'],
            ['label' => 'False Positives', 'value' => '2%', 'icon' => 'exclamation-triangle'],
            ['label' => 'Decision Speed', 'value' => '200ms', 'icon' => 'bolt']
        ],
        'benefits' => [
            'Massive reduction in fraud losses',
            'Improved customer experience with fewer false declines',
            'Real-time fraud prevention without checkout friction',
            'Reduced chargeback costs and disputes',
            'Lower operational expenses',
            'Scalable solution supporting transaction growth'
        ],
        'testimonial' => [
            'quote' => 'VettlyGlobal\'s fraud prevention solution has been a game-changer. We\'re preventing millions in fraud while actually improving the customer experience. The system is invisible to legitimate customers but deadly to fraudsters.',
            'author' => 'David Kumar',
            'position' => 'Chief Technology Officer',
            'company' => 'ShopNow Online Marketplace'
        ],
        'published_date' => '2025-12-01',
        'read_time' => '6 min read'
    ],
    'law-enforcement-case-resolution' => [
        'id' => 6,
        'title' => 'Law Enforcement Agency Solves Cases 40% Faster',
        'slug' => 'law-enforcement-case-resolution',
        'industry' => 'Law Enforcement',
        'company_type' => 'Police Department',
        'company_name' => 'Metropolitan Police Department',
        'company_description' => 'Large metropolitan police department serving a population of 2.5 million across 15 districts',
        'challenge' => 'Time-consuming investigations and fragmented data sources',
        'challenge_detail' => 'The police department was dealing with increasingly complex cases while relying on disconnected databases and manual research methods. Investigators spent an average of 60% of their time gathering and cross-referencing data from multiple systems. Cold cases were piling up, inter-jurisdictional collaboration was limited, and the department lacked the analytical tools needed to identify patterns across cases.',
        'solution' => 'Integrated investigative data and analytics platform',
        'solution_detail' => 'VettlyGlobal deployed a unified investigative platform that consolidates data from multiple law enforcement databases, public records, and intelligence sources into a single searchable interface. The platform includes advanced link analysis, pattern recognition, and cross-jurisdictional data sharing capabilities, enabling investigators to uncover connections and leads that were previously invisible.',
        'implementation_process' => [
            'Needs assessment and data source inventory (3 weeks)',
            'Secure platform deployment and database integration (6 weeks)',
            'Data normalization and indexing (4 weeks)',
            'Pilot program with Major Crimes division (4 weeks)',
            'Department-wide rollout across all 15 districts (6 weeks)',
            'Advanced training and workflow optimization (ongoing)'
        ],
        'results' => [
            '40% faster case resolution times',
            '85% improvement in data accuracy and completeness',
            '1,000+ cases solved using the platform',
            'Successful cross-jurisdiction collaboration established',
            '50% reduction in investigator research time',
            '30% increase in case clearance rate'
        ],
        'metrics' => [
            ['label' => 'Faster Resolution', 'value' => '40%', 'icon' => 'clock'],
            ['label' => 'Data Accuracy', 'value' => '85%', 'icon' => 'bullseye'],
            ['label' => 'Cases Solved', 'value' => '1K+', 'icon' => 'search'],
            ['label' => 'Clearance Rate', 'value' => '+30%', 'icon' => 'check-circle']
        ],
        'benefits' => [
            'Dramatically faster investigation timelines',
            'Unified access to multiple data sources',
            'Enhanced cross-jurisdictional collaboration',
            'Data-driven pattern recognition for serial cases',
            'Reduced administrative burden on investigators',
            'Improved public safety outcomes'
        ],
        'testimonial' => [
            'quote' => 'This platform has fundamentally changed how we investigate cases. Our detectives now have instant access to the intelligence they need, and we\'re solving cases that had gone cold for years. VettlyGlobal understood the unique demands of law enforcement.',
            'author' => 'Chief Robert Martinez',
            'position' => 'Chief of Police',
            'company' => 'Metropolitan Police Department'
        ],
        'published_date' => '2025-11-20',
        'read_time' => '8 min read'
    ],
    'collections-recovery-improvement' => [
        'id' => 7,
        'title' => 'Collections Agency Improves Recovery Rate by 35%',
        'slug' => 'collections-recovery-improvement',
        'industry' => 'Collections & Recovery',
        'company_type' => 'Debt Collection',
        'company_name' => 'National Recovery Solutions',
        'company_description' => 'Leading national collections agency managing $2 billion in receivables across multiple industries',
        'challenge' => 'Low contact and recovery rates due to outdated data',
        'challenge_detail' => 'The collections agency was struggling with outdated debtor contact information, resulting in a contact success rate of only 25%. Skip tracing was manual and time-consuming, costing thousands of hours monthly. Recovery rates were declining, operational costs were rising, and the agency was losing competitive ground. Their existing tools couldn\'t keep pace with the volume and complexity of modern debt recovery.',
        'solution' => 'Advanced skip tracing and contact optimization platform',
        'solution_detail' => 'VettlyGlobal implemented a comprehensive skip tracing and contact strategy optimization platform that leverages real-time data from hundreds of sources to locate debtors and determine the best contact methods. The solution includes predictive analytics for optimal contact timing, automated workflow routing, and compliance monitoring to ensure all collection activities meet regulatory requirements.',
        'implementation_process' => [
            'Current process analysis and performance benchmarking (2 weeks)',
            'Platform integration with existing collection systems (4 weeks)',
            'Data source connectivity and skip tracing setup (3 weeks)',
            'Predictive model development and training (3 weeks)',
            'Pilot program with select portfolios (3 weeks)',
            'Full deployment and staff training (ongoing)'
        ],
        'results' => [
            '35% increase in overall recovery rate',
            '45% improvement in contact success rate',
            '$25M in additional recoveries in first year',
            '20% reduction in operational costs',
            '60% faster debtor location time',
            '100% regulatory compliance maintained'
        ],
        'metrics' => [
            ['label' => 'Recovery Rate', 'value' => '+35%', 'icon' => 'chart-line'],
            ['label' => 'Contact Success', 'value' => '45%', 'icon' => 'phone'],
            ['label' => 'Added Recovery', 'value' => '$25M', 'icon' => 'dollar-sign'],
            ['label' => 'Cost Reduction', 'value' => '20%', 'icon' => 'arrow-down']
        ],
        'benefits' => [
            'Significantly higher recovery rates and revenue',
            'Improved debtor contact rates with accurate data',
            'Reduced time and cost per recovery',
            'Automated compliance monitoring and documentation',
            'Better resource allocation through predictive analytics',
            'Scalable solution supporting portfolio growth'
        ],
        'testimonial' => [
            'quote' => 'VettlyGlobal transformed our recovery operations. The skip tracing accuracy is remarkable, and the predictive contact strategies have boosted our success rates beyond what we thought possible. The ROI was evident within the first quarter.',
            'author' => 'Sandra Mitchell',
            'position' => 'VP of Operations',
            'company' => 'National Recovery Solutions'
        ],
        'published_date' => '2025-11-05',
        'read_time' => '7 min read'
    ],
    'fintech-kyc-scaling' => [
        'id' => 8,
        'title' => 'Fintech Startup Scales KYC to 100K Users/Month',
        'slug' => 'fintech-kyc-scaling',
        'industry' => 'Financial Services',
        'company_type' => 'Fintech',
        'company_name' => 'PayStream Digital',
        'company_description' => 'Fast-growing fintech startup offering digital payment solutions to 500,000+ users',
        'challenge' => 'Scaling compliant user onboarding without sacrificing speed',
        'challenge_detail' => 'The fintech startup was experiencing rapid growth but their manual KYC (Know Your Customer) process couldn\'t keep pace. Onboarding took 3-5 business days per user, creating a bottleneck that was costing potential customers. Manual document review was expensive, error-prone, and couldn\'t scale. Meanwhile, regulatory requirements for AML (Anti-Money Laundering) compliance were becoming more stringent, adding further complexity.',
        'solution' => 'Automated KYC and AML compliance platform',
        'solution_detail' => 'VettlyGlobal deployed an automated identity verification and compliance platform that performs real-time KYC checks, document validation, sanctions screening, and risk assessment. The solution uses AI-powered document analysis, biometric verification, and multi-source data validation to verify users in minutes while maintaining full regulatory compliance across multiple jurisdictions.',
        'implementation_process' => [
            'Compliance requirements mapping and gap analysis (2 weeks)',
            'API integration with existing user onboarding flow (3 weeks)',
            'KYC/AML rule engine configuration (2 weeks)',
            'Document verification model calibration (2 weeks)',
            'Beta testing with new user cohort (2 weeks)',
            'Full launch and monitoring setup (1 week)'
        ],
        'results' => [
            '100,000 users verified monthly (10x increase)',
            '99% automation rate for standard verifications',
            '5-minute average onboarding time (from 3-5 days)',
            '100% regulatory compliance across all markets',
            '75% reduction in verification costs',
            '95% user satisfaction with onboarding experience'
        ],
        'metrics' => [
            ['label' => 'Monthly Users', 'value' => '100K', 'icon' => 'users'],
            ['label' => 'Automation Rate', 'value' => '99%', 'icon' => 'robot'],
            ['label' => 'Onboarding Time', 'value' => '5min', 'icon' => 'bolt'],
            ['label' => 'Compliance', 'value' => '100%', 'icon' => 'shield-alt']
        ],
        'benefits' => [
            'Massive scaling of user onboarding capacity',
            'Near-instant verification for legitimate users',
            'Full regulatory compliance across jurisdictions',
            'Dramatically reduced verification costs',
            'Improved user experience and conversion rates',
            'Flexible platform adapting to new regulations'
        ],
        'testimonial' => [
            'quote' => 'We went from manually reviewing documents to verifying 100,000 users a month automatically. VettlyGlobal didn\'t just solve our KYC challenge, they turned compliance into a competitive advantage. Our users love the fast onboarding experience.',
            'author' => 'Alex Torres',
            'position' => 'Co-Founder & CTO',
            'company' => 'PayStream Digital'
        ],
        'published_date' => '2025-10-25',
        'read_time' => '6 min read'
    ],
    'pharma-supply-chain-security' => [
        'id' => 9,
        'title' => 'Pharmaceutical Company Strengthens Supply Chain Security',
        'slug' => 'pharma-supply-chain-security',
        'industry' => 'Healthcare',
        'company_type' => 'Life Sciences',
        'company_name' => 'BioVita Pharmaceuticals',
        'company_description' => 'Global pharmaceutical company with operations in 30 countries and 500+ supply chain partners',
        'challenge' => 'Supply chain fraud and counterfeiting risks',
        'challenge_detail' => 'The pharmaceutical company was facing growing threats from supply chain fraud and counterfeit products. With a global network of 500+ suppliers and distributors, manual verification was impossible at scale. Several incidents of counterfeit ingredients had been detected, each costing millions in recalls and regulatory penalties. The company needed comprehensive vendor verification and continuous supply chain monitoring to protect patient safety and brand integrity.',
        'solution' => 'Comprehensive vendor verification and supply chain monitoring platform',
        'solution_detail' => 'VettlyGlobal implemented an end-to-end supply chain security platform that performs continuous vendor verification, real-time shipment monitoring, and automated risk assessment. The solution includes vendor due diligence screening, document authentication, anomaly detection across the supply chain, and compliance reporting for FDA and international regulatory requirements.',
        'implementation_process' => [
            'Supply chain risk assessment and vendor mapping (4 weeks)',
            'Platform customization for pharmaceutical requirements (5 weeks)',
            'Vendor onboarding and verification setup (6 weeks)',
            'Integration with existing ERP and logistics systems (4 weeks)',
            'Phased rollout across geographic regions (8 weeks)',
            'Continuous monitoring and optimization (ongoing)'
        ],
        'results' => [
            'Zero counterfeit incidents since implementation',
            '90% vendor verification coverage achieved',
            '$15M in potential risk mitigated',
            'Complete supply chain visibility across 30 countries',
            '60% faster vendor onboarding process',
            '100% FDA compliance in supply chain documentation'
        ],
        'metrics' => [
            ['label' => 'Counterfeit Events', 'value' => '0', 'icon' => 'shield-alt'],
            ['label' => 'Vendor Coverage', 'value' => '90%', 'icon' => 'check-circle'],
            ['label' => 'Risk Mitigated', 'value' => '$15M', 'icon' => 'dollar-sign'],
            ['label' => 'Countries', 'value' => '30', 'icon' => 'globe']
        ],
        'benefits' => [
            'Complete protection against counterfeit products',
            'Comprehensive vendor due diligence and monitoring',
            'Real-time supply chain visibility and tracking',
            'Automated regulatory compliance documentation',
            'Faster and more thorough vendor onboarding',
            'Enhanced patient safety and brand protection'
        ],
        'testimonial' => [
            'quote' => 'Supply chain security is a matter of patient safety for us. VettlyGlobal gave us the tools to verify every vendor, monitor every shipment, and ensure the integrity of our products from raw material to patient. We haven\'t had a single counterfeit incident since deployment.',
            'author' => 'Dr. Catherine Brooks',
            'position' => 'VP of Supply Chain & Quality',
            'company' => 'BioVita Pharmaceuticals'
        ],
        'published_date' => '2025-10-10',
        'read_time' => '9 min read'
    ]
];

// Get current case study or 404
if (!isset($case_studies_data[$slug])) {
    header('Location: ' . url('resources/case-studies'));
    exit;
}

$case_study = $case_studies_data[$slug];

// Get related case studies (same industry, excluding current)
$related_studies = array_filter($case_studies_data, function($cs) use ($case_study) {
    return $cs['id'] !== $case_study['id'] && $cs['industry'] === $case_study['industry'];
});
$related_studies = array_slice($related_studies, 0, 3);

// Page variables
$page_title = $case_study['title'];
$meta_description = $case_study['company_description'] . ' - ' . $case_study['challenge'];
$meta_keywords = $case_study['industry'] . ', case study, success story, ' . $case_study['company_type'] . ', ' . SITE_NAME;

include '../../includes/header.php';
?>

<!-- Hero Section -->
<section class="case-study-hero">
    <div class="hero-background"></div>
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <a href="<?php echo url('resources/case-studies'); ?>">Case Studies</a>
            <span>/</span>
            <span><?php echo $case_study['company_type']; ?></span>
        </nav>

        <div class="hero-content">
            <div class="hero-badges">
                <span class="badge badge-industry"><?php echo $case_study['industry']; ?></span>
                <span class="badge badge-type"><?php echo $case_study['company_type']; ?></span>
            </div>

            <h1><?php echo $case_study['title']; ?></h1>

            <div class="company-info">
                <div class="company-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="company-details">
                    <h3><?php echo $case_study['company_name']; ?></h3>
                    <p><?php echo $case_study['company_description']; ?></p>
                </div>
            </div>

            <div class="hero-meta">
                <span><i class="far fa-calendar"></i> <?php echo date('F Y', strtotime($case_study['published_date'])); ?></span>
                <span><i class="far fa-clock"></i> <?php echo $case_study['read_time']; ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Metrics Overview -->
<section class="metrics-section">
    <div class="container">
        <div class="metrics-grid">
            <?php foreach ($case_study['metrics'] as $metric): ?>
                <div class="metric-card">
                    <div class="metric-icon">
                        <i class="fas fa-<?php echo $metric['icon']; ?>"></i>
                    </div>
                    <div class="metric-value"><?php echo $metric['value']; ?></div>
                    <div class="metric-label"><?php echo $metric['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="case-study-content section">
    <div class="container">
        <div class="content-layout">
            <!-- Main Content -->
            <div class="content-main">
                <!-- Challenge -->
                <div class="content-section challenge-section">
                    <div class="section-icon challenge-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="section-content">
                        <h2>The Challenge</h2>
                        <h3><?php echo $case_study['challenge']; ?></h3>
                        <p><?php echo $case_study['challenge_detail']; ?></p>
                    </div>
                </div>

                <!-- Solution -->
                <div class="content-section solution-section">
                    <div class="section-icon solution-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="section-content">
                        <h2>The Solution</h2>
                        <h3><?php echo $case_study['solution']; ?></h3>
                        <p><?php echo $case_study['solution_detail']; ?></p>
                    </div>
                </div>

                <!-- Implementation -->
                <div class="content-section implementation-section">
                    <div class="section-icon implementation-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="section-content">
                        <h2>Implementation Process</h2>
                        <div class="timeline">
                            <?php foreach ($case_study['implementation_process'] as $index => $step): ?>
                                <div class="timeline-item">
                                    <div class="timeline-marker"><?php echo ($index + 1); ?></div>
                                    <div class="timeline-content">
                                        <p><?php echo $step; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Results -->
                <div class="content-section results-section">
                    <div class="section-icon results-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="section-content">
                        <h2>Results & Impact</h2>
                        <div class="results-grid">
                            <?php foreach ($case_study['results'] as $result): ?>
                                <div class="result-card">
                                    <i class="fas fa-check-circle"></i>
                                    <p><?php echo $result; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="content-section benefits-section">
                    <div class="section-icon benefits-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="section-content">
                        <h2>Key Benefits Achieved</h2>
                        <ul class="benefits-list">
                            <?php foreach ($case_study['benefits'] as $benefit): ?>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <span><?php echo $benefit; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Testimonial -->
                <?php if (!empty($case_study['testimonial'])): ?>
                <div class="testimonial-section">
                    <div class="testimonial-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <blockquote class="testimonial-quote">
                        <?php echo $case_study['testimonial']['quote']; ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <strong><?php echo $case_study['testimonial']['author']; ?></strong>
                            <span><?php echo $case_study['testimonial']['position']; ?></span>
                            <span><?php echo $case_study['testimonial']['company']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="content-sidebar">
                <!-- CTA Card -->
                <div class="sidebar-card cta-card">
                    <div class="cta-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Achieve Similar Results</h3>
                    <p>Learn how VettlyGlobal can help your organization overcome challenges and drive measurable results.</p>
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-block">
                        <i class="fas fa-comments"></i>
                        Schedule a Demo
                    </a>
                </div>

                <!-- Request Card -->
                <div class="sidebar-card download-card">
                    <h3>Request Case Study</h3>
                    <p>Get the complete version of this case study</p>
                    <a href="<?php echo url('contact'); ?>?inquiry=case-study" class="btn btn-primary btn-block">
                        <i class="fas fa-envelope"></i>
                        Request PDF
                    </a>
                </div>

                <!-- Share Card -->
                <!-- <div class="sidebar-card share-card">
                    <h3>Share This Story</h3>
                    <div class="share-buttons">
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(current_url()); ?>" target="_blank" class="share-btn linkedin">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($case_study['title']); ?>" target="_blank" class="share-btn twitter">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode($case_study['title']); ?>&body=<?php echo urlencode('Check out this case study: ' . current_url()); ?>" class="share-btn email">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div> -->

                <!-- Related Industry -->
                <div class="sidebar-card industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3><?php echo $case_study['industry']; ?></h3>
                    <p>Explore more success stories from this industry</p>
                    <a href="<?php echo url('resources/case-studies?industry=' . strtolower(str_replace(' ', '-', $case_study['industry']))); ?>" class="btn btn-primary btn-block btn-sm">
                        View All
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Related Case Studies -->
<?php if (!empty($related_studies)): ?>
<section class="related-section section" style="background: var(--bg-lighter);">
    <div class="container">
        <div class="section-header">
            <h2>Related Success Stories</h2>
            <p>See how other organizations in <?php echo $case_study['industry']; ?> achieved great results</p>
        </div>

        <div class="related-grid">
            <?php foreach ($related_studies as $related): ?>
                <article class="related-card">
                    <div class="related-header">
                        <div class="related-image">
                            <div class="placeholder-image">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="related-badges">
                            <span class="badge badge-industry"><?php echo $related['industry']; ?></span>
                            <span class="badge badge-type"><?php echo $related['company_type']; ?></span>
                        </div>
                    </div>
                    <div class="related-content">
                        <h3><?php echo $related['title']; ?></h3>
                        <p><?php echo $related['company_description']; ?></p>
                        <div class="related-metrics">
                            <?php $first_two_metrics = array_slice($related['metrics'], 0, 2); ?>
                            <?php foreach ($first_two_metrics as $metric): ?>
                                <div class="mini-metric">
                                    <i class="fas fa-<?php echo $metric['icon']; ?>"></i>
                                    <strong><?php echo $metric['value']; ?></strong>
                                    <span><?php echo $metric['label']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo url('resources/case-studies/' . $related['slug']); ?>" class="btn btn-primary btn-sm">
                            Read Full Story
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Final CTA -->
<section class="final-cta-section section">
    <div class="container">
        <div class="final-cta-content">
            <div class="cta-left">
                <i class="fas fa-bullhorn"></i>
                <div>
                    <h2>Ready to Write Your Success Story?</h2>
                    <p>Let's discuss how VettlyGlobal can help your organization achieve similar results</p>
                </div>
            </div>
            <div class="cta-right">
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-calendar-alt"></i>
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.case-study-hero {
    position: relative;
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    padding: 90px 0 70px;
    color: white;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 20% 50%, rgba(255,255,255,0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
    opacity: 0.5;
}

.case-study-hero .container {
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

.hero-content h1 {
    color: white;
    font-size: 2rem;
    margin: 15px 0 20px;
    line-height: 1.3;
}

.hero-badges {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.badge {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.badge-industry {
    background: rgba(255,255,255,0.25);
    color: white;
    backdrop-filter: blur(10px);
}

.badge-type {
    background: var(--accent-orange);
    color: white;
}

.company-info {
    display: flex;
    gap: 15px;
    padding: 20px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.15);
    margin: 20px 0;
    align-items: center;
}

.company-icon {
    font-size: 1.5rem;
    color: rgba(255,255,255,0.9);
}

.company-details h3 {
    color: white;
    font-size: 1.15rem;
    margin-bottom: 5px;
}

.company-details p {
    color: rgba(255,255,255,0.9);
    font-size: 0.9rem;
    line-height: 1.5;
    margin: 0;
}

.hero-meta {
    display: flex;
    gap: 25px;
    color: rgba(255,255,255,0.9);
    font-size: 0.95rem;
}

.hero-meta i {
    margin-right: 8px;
}

/* Metrics Section */
.metrics-section {
    background: transparent;
    padding: 0;
    margin-top: -30px;
    position: relative;
    z-index: 10;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.metric-card {
    background: white;
    padding: 30px 20px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
    transition: var(--transition);
    border-top: 3px solid var(--primary-color);
}

.metric-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.metric-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.metric-value {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 5px;
}

.metric-label {
    color: var(--text-secondary);
    font-size: 0.85rem;
    font-weight: 500;
}

/* Content Layout */
.content-layout {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
    margin-top: 50px;
}

.content-section {
    margin-bottom: 40px;
    display: flex;
    gap: 20px;
}

.section-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
    margin-top: 3px;
}

.challenge-icon {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
}

.solution-icon {
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    color: white;
}

.implementation-icon {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
}

.results-icon {
    background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
    color: white;
}

.benefits-icon {
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    color: white;
}

.section-content {
    flex: 1;
}

.section-content h2 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    color: var(--text-primary);
}

.section-content h3 {
    font-size: 1.1rem;
    color: var(--primary-color);
    margin-bottom: 12px;
    font-weight: 600;
}

.section-content p {
    font-size: 0.95rem;
    line-height: 1.7;
    color: var(--text-secondary);
}

/* Timeline */
.timeline {
    position: relative;
    padding-left: 0;
    margin-top: 10px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 25px;
    bottom: 25px;
    width: 2px;
    background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
}

.timeline-item {
    display: flex;
    gap: 16px;
    margin-bottom: 16px;
    position: relative;
    align-items: center;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.9rem;
    flex-shrink: 0;
    position: relative;
    z-index: 1;
    border: 2px solid var(--primary-color);
    box-shadow: 0 2px 8px rgba(74, 144, 226, 0.2);
    transition: var(--transition);
}

.timeline-item:hover .timeline-marker {
    background: var(--primary-color);
    color: white;
}

.timeline-content {
    flex: 1;
    padding: 14px 20px;
    background: white;
    border-radius: 8px;
    border: 1px solid var(--border-color);
    box-shadow: 0 1px 4px rgba(0,0,0,0.04);
    transition: var(--transition);
}

.timeline-item:hover .timeline-content {
    border-color: var(--primary-color);
    box-shadow: 0 2px 8px rgba(74, 144, 226, 0.1);
}

.timeline-content p {
    margin: 0;
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.5;
}

/* Results Grid */
.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    margin-top: 15px;
}

.result-card {
    background: white;
    padding: 18px 20px;
    border-radius: 8px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    display: flex;
    gap: 12px;
    align-items: center;
    border-left: 3px solid var(--primary-color);
    transition: var(--transition);
}

.result-card:hover {
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    border-left-color: var(--primary-dark);
}

.result-card i {
    color: var(--primary-color);
    font-size: 1.1rem;
    flex-shrink: 0;
}

.result-card p {
    margin: 0;
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--text-primary);
}

/* Benefits List */
.benefits-list {
    list-style: none;
    padding: 0;
    margin: 15px 0 0;
}

.benefits-list li {
    display: flex;
    gap: 12px;
    padding: 12px 15px;
    margin-bottom: 8px;
    background: var(--bg-light);
    border-radius: 8px;
    align-items: center;
    transition: var(--transition);
}

.benefits-list li:hover {
    background: white;
    box-shadow: 0 1px 4px rgba(0,0,0,0.06);
}

.benefits-list i {
    color: var(--primary-color);
    font-size: 0.8rem;
}

.benefits-list span {
    flex: 1;
    font-size: 0.9rem;
    line-height: 1.5;
}

/* Testimonial */
.testimonial-section {
    background: var(--bg-light);
    padding: 35px 30px;
    border-radius: 12px;
    position: relative;
    margin-top: 30px;
    border: 1px solid var(--border-color);
    border-left: 4px solid var(--primary-color);
}

.testimonial-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 12px;
    opacity: 0.4;
}

.testimonial-quote {
    font-size: 1.05rem;
    line-height: 1.7;
    font-style: italic;
    margin: 0 0 20px;
    color: var(--text-primary);
}

.testimonial-author {
    display: flex;
    gap: 15px;
    align-items: center;
}

.author-avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
}

.author-info {
    display: flex;
    flex-direction: column;
}

.author-info strong {
    font-size: 0.95rem;
    color: var(--text-primary);
    margin-bottom: 2px;
}

.author-info span {
    font-size: 0.85rem;
    color: var(--text-secondary);
}

/* Sidebar */
.sidebar-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 1px 6px rgba(0,0,0,0.06);
    margin-bottom: 20px;
    border: 1px solid var(--border-color);
}

.cta-card {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    text-align: center;
    border: none;
}

.cta-card .cta-icon {
    font-size: 1.5rem;
    color: rgba(255,255,255,0.9);
    margin-bottom: 12px;
}

.cta-card h3 {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.cta-card p {
    color: rgba(255,255,255,0.9);
    margin-bottom: 20px;
    font-size: 0.9rem;
    line-height: 1.5;
}

.download-card h3,
.share-card h3,
.industry-card h3 {
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.download-card p,
.share-card p,
.industry-card p {
    color: var(--text-secondary);
    margin-bottom: 15px;
    font-size: 0.9rem;
}

.industry-card {
    text-align: center;
}

.industry-card .industry-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

/* Related Section */
.section-header {
    text-align: center;
    margin-bottom: 35px;
}

.section-header h2 {
    font-size: 1.6rem;
    margin-bottom: 8px;
}

.section-header p {
    font-size: 1rem;
    color: var(--text-secondary);
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
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

.related-header {
    position: relative;
}

.related-image {
    height: 180px;
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.placeholder-image {
    font-size: 1.5rem;
    color: rgba(255,255,255,0.3);
}

.related-badges {
    position: absolute;
    bottom: 15px;
    left: 15px;
    display: flex;
    gap: 8px;
}

.related-content {
    padding: 25px;
}

.related-card h3 {
    font-size: 1.05rem;
    margin-bottom: 10px;
    line-height: 1.4;
}

.related-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 15px;
}

.related-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 20px;
}

.mini-metric {
    background: var(--bg-light);
    padding: 15px;
    border-radius: 8px;
    text-align: center;
}

.mini-metric i {
    color: var(--primary-color);
    font-size: 1.1rem;
    margin-bottom: 5px;
    display: block;
}

.mini-metric strong {
    display: block;
    font-size: 1.1rem;
    color: var(--primary-dark);
    margin-bottom: 2px;
}

.mini-metric span {
    font-size: 0.75rem;
    color: var(--text-secondary);
}

/* Final CTA */
.final-cta-section {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
}

.final-cta-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    padding: 40px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.15);
}

.cta-left {
    display: flex;
    gap: 20px;
    align-items: center;
    flex: 1;
}

.cta-left i {
    font-size: 1.5rem;
    color: white;
}

.cta-left h2 {
    color: white;
    font-size: 1.4rem;
    margin-bottom: 5px;
}

.cta-left p {
    color: rgba(255,255,255,0.9);
    font-size: 0.95rem;
    margin: 0;
}

/* Responsive */
@media (max-width: 992px) {
    .content-layout {
        grid-template-columns: 1fr;
    }

    .content-sidebar {
        order: -1;
    }

    .content-section {
        flex-direction: column;
    }

    .metrics-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .final-cta-content {
        flex-direction: column;
        text-align: center;
    }

    .cta-left {
        flex-direction: column;
    }
}

@media (max-width: 768px) {
    .case-study-hero {
        padding: 80px 0 50px;
    }

    .hero-content h1 {
        font-size: 1.6rem;
    }

    .company-info {
        flex-direction: column;
        text-align: center;
    }

    .metrics-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .results-grid {
        grid-template-columns: 1fr;
    }

    .testimonial-section {
        padding: 25px 20px;
    }

    .testimonial-quote {
        font-size: 0.95rem;
    }

    .related-grid {
        grid-template-columns: 1fr;
    }

    .final-cta-content {
        padding: 25px 20px;
    }

    .cta-left h2 {
        font-size: 1.2rem;
    }

    .section-content h2 {
        font-size: 1.2rem;
    }

    .metric-value {
        font-size: 1.5rem;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
