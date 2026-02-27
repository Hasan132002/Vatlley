<?php
/**
 * VettlyGlobal Products Database
 * Complete product catalog with 50+ products across all industries
 */

function get_all_products() {
    return [
        // Identity Verification & Authentication Products
        [
            'id' => 1,
            'name' => 'VettlyID',
            'slug' => 'vettlyid',
            'short_description' => 'Real-time identity verification and authentication solution for instant decision-making.',
            'full_description' => 'VettlyID is our flagship identity verification solution that provides instant authentication of consumer identities using comprehensive data sources and advanced analytics. Perfect for businesses requiring immediate identity verification decisions.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Real-time identity verification in milliseconds',
                'Multi-layered authentication process',
                'Comprehensive identity scoring',
                'Address verification and validation',
                'Phone number verification',
                'SSN verification and validation',
                'Risk assessment and fraud detection',
                'Customizable verification rules',
                'API integration available',
                'Compliance with regulatory requirements'
            ],
            'benefits' => [
                'Reduce fraud losses by up to 80%',
                'Streamline customer onboarding',
                'Improve customer experience',
                'Ensure regulatory compliance',
                'Lower operational costs',
                'Real-time decision making'
            ],
            'icon' => 'fa-user-check',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 2,
            'name' => 'VettlyID for Healthcare',
            'slug' => 'vettlyid-healthcare',
            'short_description' => 'HIPAA-compliant identity verification specifically designed for healthcare providers and payers.',
            'full_description' => 'VettlyID for Healthcare provides secure, HIPAA-compliant identity verification for healthcare organizations, ensuring patient identity accuracy while maintaining privacy and regulatory compliance.',
            'industries' => ['Healthcare'],
            'features' => [
                'HIPAA-compliant verification process',
                'Patient identity matching',
                'Insurance eligibility verification',
                'Provider credentialing support',
                'Medical identity theft prevention',
                'Duplicate record detection',
                'Real-time verification',
                'Secure data handling',
                'Integration with EHR systems',
                'Compliance reporting'
            ],
            'benefits' => [
                'Reduce medical identity theft',
                'Improve patient safety',
                'Eliminate duplicate records',
                'Streamline patient registration',
                'Ensure HIPAA compliance',
                'Reduce claim denials'
            ],
            'icon' => 'fa-heartbeat',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 3,
            'name' => 'VettlyID for Insurance',
            'slug' => 'vettlyid-insurance',
            'short_description' => 'Identity verification tailored for insurance underwriting, claims, and policy management.',
            'full_description' => 'VettlyID for Insurance delivers comprehensive identity verification solutions specifically designed for insurance carriers, helping verify applicants, prevent fraud, and streamline claims processing.',
            'industries' => ['Insurance'],
            'features' => [
                'Applicant identity verification',
                'Claimant verification',
                'Beneficiary verification',
                'Fraud detection algorithms',
                'Risk scoring for underwriting',
                'Death verification',
                'Address and contact validation',
                'Policy holder authentication',
                'Real-time verification API',
                'Compliance management tools'
            ],
            'benefits' => [
                'Detect fraudulent applications',
                'Reduce claims fraud',
                'Speed up underwriting',
                'Improve customer onboarding',
                'Lower operational costs',
                'Ensure regulatory compliance'
            ],
            'icon' => 'fa-shield-alt',
            'color' => 'var(--primary-color)'
        ],

        // VettlySearch Solutions
        [
            'id' => 4,
            'name' => 'VettlySearch One',
            'slug' => 'vettlysearch-one',
            'short_description' => 'Unified investigation platform providing comprehensive data access and advanced analytics.',
            'full_description' => 'VettlySearch One is a powerful, all-in-one investigation platform that combines extensive data sources with advanced search capabilities and analytics tools, enabling professionals to uncover critical information quickly and efficiently.',
            'industries' => ['Law Enforcement', 'Corporations', 'Financial Services', 'Insurance'],
            'features' => [
                'Access to billions of public records',
                'Advanced search algorithms',
                'Comprehensive people search',
                'Business intelligence data',
                'Asset discovery tools',
                'Social media integration',
                'Link analysis capabilities',
                'Batch search functionality',
                'Mobile app access',
                'Custom reporting tools',
                'Data visualization',
                'Case management integration'
            ],
            'benefits' => [
                'Accelerate investigations',
                'Uncover hidden connections',
                'Make informed decisions',
                'Improve case outcomes',
                'Save investigation time',
                'Access comprehensive data sources'
            ],
            'icon' => 'fa-search-plus',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 5,
            'name' => 'VettlySearch for Collections',
            'slug' => 'vettlysearch-collections',
            'short_description' => 'Skip tracing and debtor location solution for collections agencies and creditors.',
            'full_description' => 'VettlySearch for Collections provides powerful skip tracing capabilities and debtor location tools, helping collection agencies and creditors locate difficult-to-find individuals and recover outstanding debts efficiently and compliantly.',
            'industries' => ['Collections & Recovery', 'Financial Services'],
            'features' => [
                'Advanced skip tracing tools',
                'Real-time debtor location',
                'Contact information updates',
                'Employment verification',
                'Asset discovery',
                'Relatives and associates search',
                'Phone number verification',
                'Email address discovery',
                'FDCPA compliance tools',
                'Batch processing capabilities',
                'Priority scoring',
                'Recovery analytics'
            ],
            'benefits' => [
                'Increase recovery rates',
                'Reduce skip costs',
                'Ensure FDCPA compliance',
                'Locate debtors faster',
                'Improve contact rates',
                'Maximize ROI on collections'
            ],
            'icon' => 'fa-money-check-alt',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 6,
            'name' => 'VettlySearch for Government',
            'slug' => 'vettlysearch-government',
            'short_description' => 'Public sector intelligence platform for government agencies and municipalities.',
            'full_description' => 'VettlySearch for Government delivers comprehensive data intelligence and investigative tools specifically designed for government agencies, supporting mission-critical operations across federal, state, and local levels.',
            'industries' => ['Government'],
            'features' => [
                'Secure government-grade platform',
                'Multi-jurisdictional data access',
                'Fraud detection and prevention',
                'Benefit eligibility verification',
                'Tax compliance support',
                'Licensing verification',
                'Public assistance fraud detection',
                'Child support enforcement',
                'Audit trail and compliance',
                'Role-based access controls',
                'Custom reporting',
                'Training and support'
            ],
            'benefits' => [
                'Reduce government fraud',
                'Improve program integrity',
                'Ensure compliance',
                'Protect taxpayer dollars',
                'Streamline investigations',
                'Support agency missions'
            ],
            'icon' => 'fa-landmark',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 7,
            'name' => 'VettlySearch for Healthcare',
            'slug' => 'vettlysearch-healthcare',
            'short_description' => 'Healthcare fraud detection and patient verification for providers and payers.',
            'full_description' => 'VettlySearch for Healthcare provides comprehensive fraud detection, waste and abuse identification, and patient verification capabilities specifically designed for healthcare organizations.',
            'industries' => ['Healthcare'],
            'features' => [
                'Healthcare fraud detection',
                'Provider verification',
                'Patient identity validation',
                'Claims investigation tools',
                'Duplicate patient detection',
                'Medical identity theft prevention',
                'Billing fraud detection',
                'Network adequacy verification',
                'HIPAA-compliant platform',
                'Advanced analytics',
                'Case management',
                'Reporting and dashboards'
            ],
            'benefits' => [
                'Reduce healthcare fraud',
                'Prevent improper payments',
                'Protect patient identity',
                'Lower investigation costs',
                'Improve claims accuracy',
                'Ensure compliance'
            ],
            'icon' => 'fa-hospital',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 8,
            'name' => 'VettlySearch for Insurance',
            'slug' => 'vettlysearch-insurance',
            'short_description' => 'Insurance fraud detection and investigation platform for carriers and adjusters.',
            'full_description' => 'VettlySearch for Insurance delivers powerful fraud detection and investigation tools designed specifically for insurance carriers, helping identify fraudulent claims and reduce losses.',
            'industries' => ['Insurance'],
            'features' => [
                'Claims fraud detection',
                'Applicant screening',
                'Claimant investigation',
                'Asset discovery',
                'Social media intelligence',
                'Medical provider verification',
                'Witness verification',
                'Death verification',
                'Link analysis',
                'Pattern detection',
                'Risk scoring',
                'Comprehensive reporting'
            ],
            'benefits' => [
                'Detect fraudulent claims',
                'Reduce claim costs',
                'Speed up investigations',
                'Improve claim outcomes',
                'Identify organized fraud',
                'Protect profitability'
            ],
            'icon' => 'fa-file-invoice-dollar',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 9,
            'name' => 'VettlySearch for Law Enforcement',
            'slug' => 'vettlysearch-law-enforcement',
            'short_description' => 'Criminal investigation platform with specialized tools for law enforcement agencies.',
            'full_description' => 'VettlySearch for Law Enforcement provides law enforcement agencies with powerful investigative tools, comprehensive data access, and specialized features designed for criminal investigations and public safety.',
            'industries' => ['Law Enforcement'],
            'features' => [
                'Criminal investigation tools',
                'Suspect identification',
                'Witness location',
                'Gang intelligence',
                'Drug trafficking investigation',
                'Human trafficking detection',
                'Missing persons search',
                'Cold case support',
                'Social network analysis',
                'Vehicle registration data',
                'Real-time alerts',
                'Mobile access'
            ],
            'benefits' => [
                'Solve cases faster',
                'Identify suspects quickly',
                'Locate witnesses efficiently',
                'Uncover criminal networks',
                'Protect public safety',
                'Support investigations'
            ],
            'icon' => 'fa-user-shield',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 10,
            'name' => 'VettlySearch Crime Analysis',
            'slug' => 'vettlysearch-crime-analysis',
            'short_description' => 'Advanced crime analytics and predictive policing platform for law enforcement.',
            'full_description' => 'VettlySearch Crime Analysis combines powerful analytics with comprehensive crime data to help law enforcement agencies predict, prevent, and respond to criminal activity more effectively.',
            'industries' => ['Law Enforcement'],
            'features' => [
                'Crime pattern analysis',
                'Predictive policing algorithms',
                'Hot spot identification',
                'Temporal analysis',
                'Geographic information system (GIS)',
                'Crime correlation tools',
                'Offender profiling',
                'Resource allocation optimization',
                'Real-time crime monitoring',
                'Statistical reporting',
                'Data visualization',
                'Integration with RMS systems'
            ],
            'benefits' => [
                'Prevent crime proactively',
                'Optimize resource deployment',
                'Identify crime trends',
                'Improve clearance rates',
                'Enhance public safety',
                'Support strategic planning'
            ],
            'icon' => 'fa-chart-line',
            'color' => 'var(--primary-color)'
        ],

        // Fraud Detection Products
        [
            'id' => 11,
            'name' => 'VettlyThreat',
            'slug' => 'vettlythreat',
            'short_description' => 'Digital identity intelligence and fraud prevention platform for online transactions.',
            'full_description' => 'VettlyThreat provides advanced digital identity intelligence and device fingerprinting technology to detect and prevent online fraud, account takeovers, and fraudulent transactions in real-time.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Device fingerprinting technology',
                'Behavioral biometrics',
                'Global shared intelligence network',
                'Real-time risk scoring',
                'Account takeover prevention',
                'Bot detection',
                'Malware detection',
                'Proxy and VPN detection',
                'Transaction risk assessment',
                'Identity verification',
                'Multi-factor authentication',
                'Continuous authentication'
            ],
            'benefits' => [
                'Prevent account takeovers',
                'Reduce online fraud losses',
                'Improve customer experience',
                'Detect sophisticated attacks',
                'Real-time fraud prevention',
                'Reduce false positives'
            ],
            'icon' => 'fa-shield-virus',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 12,
            'name' => 'VettlyEmail Shield',
            'slug' => 'vettlyemail-shield',
            'short_description' => 'Email intelligence and risk assessment for fraud prevention and verification.',
            'full_description' => 'VettlyEmail Shield leverages email address intelligence to assess risk, prevent fraud, and verify customer identities across digital channels, using a global consortium of fraud and risk data.',
            'industries' => ['Financial Services', 'Corporations', 'Insurance'],
            'features' => [
                'Email risk scoring',
                'Email address validation',
                'Domain analysis',
                'Email age verification',
                'Fraud pattern detection',
                'Global email consortium data',
                'Real-time risk assessment',
                'Velocity checks',
                'Network analysis',
                'Device correlation',
                'Identity linking',
                'API integration'
            ],
            'benefits' => [
                'Detect email-based fraud',
                'Reduce account fraud',
                'Improve KYC processes',
                'Lower false positives',
                'Enhance customer verification',
                'Prevent synthetic identities'
            ],
            'icon' => 'fa-envelope-open-text',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 13,
            'name' => 'VettlyFraud',
            'slug' => 'vettlyfraud',
            'short_description' => 'Comprehensive fraud detection and prevention solution with multi-layered analytics.',
            'full_description' => 'VettlyFraud combines multiple fraud detection methodologies and data sources to provide comprehensive fraud prevention across customer lifecycles, from application to transaction.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Multi-layered fraud detection',
                'Identity verification',
                'Document authentication',
                'Synthetic identity detection',
                'First-party fraud detection',
                'Third-party fraud prevention',
                'Risk-based authentication',
                'Fraud scoring models',
                'Consortium fraud data',
                'Machine learning algorithms',
                'Customizable rules engine',
                'Real-time decisioning'
            ],
            'benefits' => [
                'Reduce fraud losses',
                'Detect emerging fraud types',
                'Improve approval rates',
                'Lower operational costs',
                'Enhance customer experience',
                'Adapt to evolving threats'
            ],
            'icon' => 'fa-exclamation-triangle',
            'color' => 'var(--primary-color)'
        ],

        // Account Monitoring & Management
        [
            'id' => 14,
            'name' => 'Account Monitoring',
            'slug' => 'account-monitoring',
            'short_description' => 'Continuous account monitoring for suspicious activity and fraud detection.',
            'full_description' => 'Account Monitoring provides continuous surveillance of customer accounts to detect suspicious activity, prevent fraud, and ensure compliance with regulatory requirements in real-time.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Real-time account monitoring',
                'Suspicious activity detection',
                'Behavior pattern analysis',
                'Transaction monitoring',
                'Identity change detection',
                'Address change alerts',
                'Credit activity monitoring',
                'Dark web monitoring',
                'Automated alert system',
                'Customizable rules and thresholds',
                'Compliance reporting',
                'Case management integration'
            ],
            'benefits' => [
                'Detect fraud early',
                'Prevent account takeovers',
                'Ensure compliance',
                'Protect customer accounts',
                'Reduce fraud losses',
                'Improve customer trust'
            ],
            'icon' => 'fa-eye',
            'color' => 'var(--primary-color)'
        ],

        // Insurance-Specific Products
        [
            'id' => 15,
            'name' => 'VettlyClaims Auto',
            'slug' => 'vettlyclaims-auto',
            'short_description' => 'Comprehensive Loss Underwriting Exchange database for auto insurance claims history.',
            'full_description' => 'VettlyClaims Auto provides access to a comprehensive database of auto insurance claims history, helping insurers make informed underwriting and pricing decisions based on historical loss data.',
            'industries' => ['Insurance'],
            'features' => [
                'Auto claims history database',
                'Five-year loss history',
                'Claim severity information',
                'Loss type classification',
                'Vehicle identification',
                'Driver history',
                'Prior carrier information',
                'Underwriting data points',
                'Risk assessment tools',
                'Batch processing',
                'API integration',
                'Compliance support'
            ],
            'benefits' => [
                'Accurate risk assessment',
                'Improved underwriting',
                'Reduced adverse selection',
                'Better pricing accuracy',
                'Fraud detection',
                'Lower loss ratios'
            ],
            'icon' => 'fa-car-crash',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 16,
            'name' => 'VettlyClaims Property',
            'slug' => 'vettlyclaims-property',
            'short_description' => 'Property insurance claims database for homeowners and property underwriting.',
            'full_description' => 'VettlyClaims Property delivers comprehensive property insurance claims history data, enabling insurers to assess property risk accurately and make informed underwriting decisions.',
            'industries' => ['Insurance'],
            'features' => [
                'Property claims history',
                'Seven-year loss data',
                'Claim type details',
                'Loss amounts',
                'Property characteristics',
                'Prior claim dates',
                'Weather-related loss data',
                'Water damage history',
                'Fire loss information',
                'Theft claims data',
                'Underwriting insights',
                'Risk scoring'
            ],
            'benefits' => [
                'Assess property risk',
                'Price policies accurately',
                'Identify high-risk properties',
                'Reduce underwriting costs',
                'Prevent fraud',
                'Improve profitability'
            ],
            'icon' => 'fa-home',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 17,
            'name' => 'Telematics OnDemand',
            'slug' => 'telematics-ondemand',
            'short_description' => 'Usage-based insurance platform with real-time driving behavior data and analytics.',
            'full_description' => 'Telematics OnDemand enables insurers to implement usage-based insurance programs by collecting and analyzing real-time driving behavior data, allowing for personalized pricing and improved risk assessment.',
            'industries' => ['Insurance'],
            'features' => [
                'Real-time driving data collection',
                'Behavior scoring algorithms',
                'Mileage tracking',
                'Speed monitoring',
                'Harsh braking detection',
                'Acceleration patterns',
                'Time-of-day analysis',
                'Geographic risk assessment',
                'Trip-level data',
                'Driver coaching tools',
                'Mobile app integration',
                'Dynamic pricing support'
            ],
            'benefits' => [
                'Enable usage-based insurance',
                'Reward safe drivers',
                'Improve risk selection',
                'Reduce claim frequency',
                'Increase customer engagement',
                'Differentiate competitively'
            ],
            'icon' => 'fa-tachometer-alt',
            'color' => 'var(--primary-color)'
        ],

        // Risk & Compliance Products
        [
            'id' => 18,
            'name' => 'VettlyBridge XG',
            'slug' => 'vettlybridge-xg',
            'short_description' => 'Global watchlist screening and sanctions compliance for AML and KYC.',
            'full_description' => 'VettlyBridge XG provides comprehensive global watchlist screening, sanctions compliance, and adverse media monitoring to help organizations meet AML, KYC, and regulatory compliance requirements.',
            'industries' => ['Financial Services', 'Corporations', 'Government'],
            'features' => [
                'Global sanctions screening',
                'PEP (Politically Exposed Persons) lists',
                'Adverse media monitoring',
                'Watchlist screening',
                'OFAC compliance',
                'EU sanctions screening',
                'UN sanctions lists',
                'Real-time screening',
                'Ongoing monitoring',
                'Risk scoring',
                'Case management',
                'Audit trails and reporting'
            ],
            'benefits' => [
                'Ensure AML compliance',
                'Meet KYC requirements',
                'Avoid regulatory penalties',
                'Reduce false positives',
                'Streamline onboarding',
                'Monitor existing customers'
            ],
            'icon' => 'fa-globe',
            'color' => 'var(--primary-color)'
        ],

        // Data Quality & Enhancement
        [
            'id' => 19,
            'name' => 'DataNormalization Pro',
            'slug' => 'data-normalization-pro',
            'short_description' => 'Advanced data standardization and cleansing for improved data quality.',
            'full_description' => 'DataNormalization Pro provides comprehensive data standardization, cleansing, and enhancement services to improve data quality, ensure consistency, and maximize the value of your data assets.',
            'industries' => ['Corporations', 'Financial Services', 'Healthcare', 'Insurance'],
            'features' => [
                'Address standardization',
                'Name parsing and standardization',
                'Phone number formatting',
                'Email validation',
                'Data deduplication',
                'Append missing information',
                'Geocoding services',
                'Data enrichment',
                'Batch processing',
                'Real-time validation',
                'Custom business rules',
                'Quality scoring'
            ],
            'benefits' => [
                'Improve data accuracy',
                'Reduce duplicates',
                'Enhance analytics',
                'Lower operational costs',
                'Improve customer communications',
                'Support compliance'
            ],
            'icon' => 'fa-database',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 20,
            'name' => 'Identity Resolution Engine',
            'slug' => 'identity-resolution-engine',
            'short_description' => 'Advanced identity linking and resolution across disparate data sources.',
            'full_description' => 'Identity Resolution Engine uses sophisticated algorithms to link and resolve identities across multiple data sources, providing a comprehensive single customer view and enabling better decision-making.',
            'industries' => ['Corporations', 'Financial Services', 'Healthcare'],
            'features' => [
                'Cross-reference identity matching',
                'Probabilistic matching algorithms',
                'Deterministic matching rules',
                'Household linking',
                'Relationship mapping',
                'Address change tracking',
                'Name variation handling',
                'Alias identification',
                'Confidence scoring',
                'Data source integration',
                'API access',
                'Custom matching rules'
            ],
            'benefits' => [
                'Create single customer view',
                'Improve data accuracy',
                'Enhance marketing effectiveness',
                'Better customer insights',
                'Reduce fraud',
                'Improve compliance'
            ],
            'icon' => 'fa-project-diagram',
            'color' => 'var(--primary-color)'
        ],

        // Business Intelligence Products
        [
            'id' => 21,
            'name' => 'Business Intelligence Suite',
            'slug' => 'business-intelligence-suite',
            'short_description' => 'Comprehensive business data and analytics for informed decision-making.',
            'full_description' => 'Business Intelligence Suite delivers comprehensive business data, analytics, and insights to help organizations make informed decisions about business relationships, risk assessment, and market opportunities.',
            'industries' => ['Corporations', 'Financial Services'],
            'features' => [
                'Company profile data',
                'Financial information',
                'Credit scores and ratings',
                'Business ownership data',
                'Corporate linkage',
                'Industry classification',
                'Business size metrics',
                'Contact information',
                'Location data',
                'Risk assessment tools',
                'Predictive analytics',
                'Custom reporting'
            ],
            'benefits' => [
                'Assess business risk',
                'Identify opportunities',
                'Support due diligence',
                'Improve credit decisions',
                'Enhance sales prospecting',
                'Monitor business changes'
            ],
            'icon' => 'fa-briefcase',
            'color' => 'var(--primary-color)'
        ],

        // Credit & Risk Products
        [
            'id' => 22,
            'name' => 'VettlyCredit Vision',
            'slug' => 'vettlycredit-vision',
            'short_description' => 'Advanced credit risk assessment with trended data and predictive analytics.',
            'full_description' => 'VettlyCredit Vision leverages trended credit data and advanced analytics to provide more accurate credit risk assessment, helping lenders make better lending decisions and expand credit access.',
            'industries' => ['Financial Services', 'Corporations'],
            'features' => [
                'Trended credit data analysis',
                'Predictive credit scores',
                'Payment behavior trends',
                'Credit utilization patterns',
                'Balance trends',
                'Risk segmentation',
                'Scorecard development',
                'Model validation',
                'Portfolio analytics',
                'Origination tools',
                'Account management',
                'Collection strategies'
            ],
            'benefits' => [
                'Improve credit decisions',
                'Expand credit access',
                'Reduce default rates',
                'Optimize pricing',
                'Increase approvals',
                'Lower losses'
            ],
            'icon' => 'fa-credit-card',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 23,
            'name' => 'VettlyRisk Score',
            'slug' => 'vettlyrisk-score',
            'short_description' => 'Comprehensive risk scoring and assessment across multiple dimensions.',
            'full_description' => 'VettlyRisk Score provides multi-dimensional risk assessment combining credit, identity, fraud, and behavioral data to deliver comprehensive risk scores for better decision-making.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Multi-dimensional risk scoring',
                'Credit risk assessment',
                'Identity risk evaluation',
                'Fraud risk detection',
                'Behavioral analytics',
                'Predictive models',
                'Risk segmentation',
                'Custom score development',
                'Model monitoring',
                'Performance tracking',
                'Decision automation',
                'Regulatory compliance'
            ],
            'benefits' => [
                'Holistic risk assessment',
                'Better decision accuracy',
                'Reduce fraud and credit losses',
                'Optimize approvals',
                'Improve profitability',
                'Meet compliance requirements'
            ],
            'icon' => 'fa-chart-area',
            'color' => 'var(--primary-color)'
        ],

        // Healthcare-Specific Products
        [
            'id' => 24,
            'name' => 'Provider Data Management',
            'slug' => 'provider-data-management',
            'short_description' => 'Comprehensive provider credentialing, verification, and network management.',
            'full_description' => 'Provider Data Management delivers complete provider credentialing, verification, and network management solutions for healthcare organizations, ensuring accurate provider data and compliance.',
            'industries' => ['Healthcare'],
            'features' => [
                'Provider credentialing',
                'License verification',
                'Board certification validation',
                'Sanction screening',
                'Education verification',
                'Work history validation',
                'Hospital privileges verification',
                'Provider network management',
                'Data quality monitoring',
                'Re-credentialing automation',
                'Compliance tracking',
                'Integration with systems'
            ],
            'benefits' => [
                'Ensure provider compliance',
                'Reduce credentialing time',
                'Improve data accuracy',
                'Lower operational costs',
                'Mitigate risk',
                'Enhance patient safety'
            ],
            'icon' => 'fa-user-md',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 25,
            'name' => 'Healthcare Market Data',
            'slug' => 'healthcare-market-data',
            'short_description' => 'Comprehensive healthcare market intelligence and competitive analytics.',
            'full_description' => 'Healthcare Market Data provides comprehensive market intelligence, competitive insights, and analytics to help healthcare organizations make strategic decisions and identify growth opportunities.',
            'industries' => ['Healthcare'],
            'features' => [
                'Market size and trends',
                'Competitive intelligence',
                'Provider network analysis',
                'Patient demographics',
                'Service line analysis',
                'Referral patterns',
                'Market share data',
                'Payer mix analytics',
                'Geographic analysis',
                'Benchmarking data',
                'Forecasting tools',
                'Custom analytics'
            ],
            'benefits' => [
                'Make strategic decisions',
                'Identify growth opportunities',
                'Understand competition',
                'Optimize networks',
                'Improve market position',
                'Support planning'
            ],
            'icon' => 'fa-hospital-alt',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 26,
            'name' => 'Population Health Analytics',
            'slug' => 'population-health-analytics',
            'short_description' => 'Advanced analytics for population health management and value-based care.',
            'full_description' => 'Population Health Analytics delivers comprehensive analytics and insights to support population health management initiatives, risk stratification, and value-based care programs.',
            'industries' => ['Healthcare'],
            'features' => [
                'Risk stratification',
                'Care gap identification',
                'Patient segmentation',
                'Chronic disease management',
                'Predictive modeling',
                'Social determinants of health',
                'Quality measure tracking',
                'Cost analytics',
                'Utilization analysis',
                'Outcome measurement',
                'Care coordination support',
                'Intervention effectiveness'
            ],
            'benefits' => [
                'Improve patient outcomes',
                'Reduce healthcare costs',
                'Identify high-risk patients',
                'Close care gaps',
                'Support value-based care',
                'Enhance quality scores'
            ],
            'icon' => 'fa-users',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 27,
            'name' => 'Real World Data Platform',
            'slug' => 'real-world-data-platform',
            'short_description' => 'Comprehensive real-world data for research, analytics, and life sciences.',
            'full_description' => 'Real World Data Platform provides access to comprehensive real-world healthcare data for research, drug development, post-market surveillance, and healthcare analytics.',
            'industries' => ['Healthcare'],
            'features' => [
                'De-identified patient data',
                'Claims data',
                'Electronic health records',
                'Prescription data',
                'Lab results',
                'Patient outcomes',
                'Treatment patterns',
                'Comorbidity analysis',
                'Longitudinal patient journeys',
                'Research cohort building',
                'Data visualization',
                'Statistical analysis tools'
            ],
            'benefits' => [
                'Support clinical research',
                'Accelerate drug development',
                'Post-market surveillance',
                'Treatment effectiveness',
                'Cost-effectiveness analysis',
                'Regulatory compliance'
            ],
            'icon' => 'fa-flask',
            'color' => 'var(--primary-color)'
        ],

        // Financial Services Products
        [
            'id' => 28,
            'name' => 'AML Compliance Suite',
            'slug' => 'aml-compliance-suite',
            'short_description' => 'Comprehensive anti-money laundering compliance and monitoring solution.',
            'full_description' => 'AML Compliance Suite provides end-to-end anti-money laundering compliance tools including customer screening, transaction monitoring, and suspicious activity reporting.',
            'industries' => ['Financial Services'],
            'features' => [
                'Customer due diligence',
                'Enhanced due diligence',
                'Transaction monitoring',
                'Suspicious activity detection',
                'SAR filing support',
                'Risk-based approach',
                'Sanctions screening',
                'PEP screening',
                'Adverse media monitoring',
                'Case management',
                'Audit trail',
                'Regulatory reporting'
            ],
            'benefits' => [
                'Meet AML regulations',
                'Avoid penalties',
                'Detect money laundering',
                'Streamline compliance',
                'Reduce false positives',
                'Improve efficiency'
            ],
            'icon' => 'fa-money-bill-wave',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 29,
            'name' => 'KYC Automation Platform',
            'slug' => 'kyc-automation-platform',
            'short_description' => 'Automated Know Your Customer processes for faster, compliant onboarding.',
            'full_description' => 'KYC Automation Platform streamlines customer onboarding with automated identity verification, document validation, and risk assessment, ensuring compliance while improving customer experience.',
            'industries' => ['Financial Services', 'Insurance'],
            'features' => [
                'Automated identity verification',
                'Document authentication',
                'Biometric verification',
                'Address verification',
                'PEP and sanctions screening',
                'Adverse media checks',
                'Risk scoring',
                'Digital onboarding',
                'E-signature integration',
                'Regulatory compliance',
                'Audit trails',
                'Global coverage'
            ],
            'benefits' => [
                'Faster customer onboarding',
                'Reduce abandonment',
                'Ensure compliance',
                'Lower operational costs',
                'Improve customer experience',
                'Mitigate risk'
            ],
            'icon' => 'fa-user-check',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 30,
            'name' => 'Payment Fraud Prevention',
            'slug' => 'payment-fraud-prevention',
            'short_description' => 'Real-time payment fraud detection and prevention for all payment channels.',
            'full_description' => 'Payment Fraud Prevention delivers real-time fraud detection and prevention across all payment channels, protecting organizations from payment fraud while ensuring legitimate transactions are approved.',
            'industries' => ['Financial Services', 'Corporations'],
            'features' => [
                'Real-time fraud detection',
                'Multi-channel monitoring',
                'Machine learning algorithms',
                'Behavioral analytics',
                'Device fingerprinting',
                'Velocity checks',
                'Rule-based detection',
                'Risk scoring',
                'Transaction profiling',
                'Manual review queue',
                'Case management',
                'Fraud reporting'
            ],
            'benefits' => [
                'Prevent payment fraud',
                'Reduce chargebacks',
                'Improve approval rates',
                'Protect revenue',
                'Enhance customer trust',
                'Lower fraud costs'
            ],
            'icon' => 'fa-credit-card',
            'color' => 'var(--primary-color)'
        ],

        // Law Enforcement Products
        [
            'id' => 31,
            'name' => 'Criminal Investigation Platform',
            'slug' => 'criminal-investigation-platform',
            'short_description' => 'Comprehensive investigative tools and data access for law enforcement.',
            'full_description' => 'Criminal Investigation Platform provides law enforcement with comprehensive investigative tools, data access, and analytics to solve crimes faster and improve public safety.',
            'industries' => ['Law Enforcement'],
            'features' => [
                'Suspect identification',
                'Witness location',
                'Evidence analysis',
                'Link analysis',
                'Timeline creation',
                'Social network analysis',
                'Vehicle tracking',
                'Phone records analysis',
                'Financial investigation',
                'Case management',
                'Collaboration tools',
                'Report generation'
            ],
            'benefits' => [
                'Solve cases faster',
                'Identify suspects',
                'Find witnesses',
                'Uncover connections',
                'Improve clearance rates',
                'Enhance public safety'
            ],
            'icon' => 'fa-fingerprint',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 32,
            'name' => 'Crash Reporting System',
            'slug' => 'crash-reporting-system',
            'short_description' => 'Digital crash reporting and traffic incident management for law enforcement.',
            'full_description' => 'Crash Reporting System modernizes traffic crash reporting with digital data collection, automated report generation, and analytics to improve traffic safety and investigations.',
            'industries' => ['Law Enforcement'],
            'features' => [
                'Digital data collection',
                'Mobile crash reporting',
                'Automated report generation',
                'Diagram tools',
                'Photo documentation',
                'Witness statements',
                'Citation integration',
                'Data validation',
                'State reporting compliance',
                'Analytics and insights',
                'Trend analysis',
                'Safety recommendations'
            ],
            'benefits' => [
                'Reduce report time',
                'Improve data accuracy',
                'Enhance traffic safety',
                'Meet state requirements',
                'Support investigations',
                'Identify trends'
            ],
            'icon' => 'fa-car-crash',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 33,
            'name' => 'Geolocation Intelligence',
            'slug' => 'geolocation-intelligence',
            'short_description' => 'Advanced location intelligence and geospatial analysis for investigations.',
            'full_description' => 'Geolocation Intelligence provides advanced location tracking, geospatial analysis, and mapping tools to help law enforcement agencies investigate crimes and locate subjects.',
            'industries' => ['Law Enforcement'],
            'features' => [
                'Real-time location tracking',
                'Historical location data',
                'Geofencing capabilities',
                'Pattern analysis',
                'Route analysis',
                'Point of interest identification',
                'Proximity analysis',
                'Time-space analysis',
                'Mapping visualization',
                'Integration with other data',
                'Mobile device tracking',
                'Vehicle location history'
            ],
            'benefits' => [
                'Locate suspects',
                'Track movements',
                'Identify patterns',
                'Support investigations',
                'Improve situational awareness',
                'Solve cases faster'
            ],
            'icon' => 'fa-map-marked-alt',
            'color' => 'var(--primary-color)'
        ],

        // Collections & Recovery Products
        [
            'id' => 34,
            'name' => 'Advanced Skip Tracing',
            'slug' => 'advanced-skip-tracing',
            'short_description' => 'Powerful skip tracing tools to locate hard-to-find debtors efficiently.',
            'full_description' => 'Advanced Skip Tracing combines multiple data sources and advanced algorithms to help collection agencies locate difficult-to-find debtors quickly and compliantly.',
            'industries' => ['Collections & Recovery'],
            'features' => [
                'Comprehensive people search',
                'Phone number discovery',
                'Address verification',
                'Employment location',
                'Relative identification',
                'Neighbor contacts',
                'Social media profiles',
                'Email discovery',
                'Asset identification',
                'Batch processing',
                'Priority scoring',
                'FDCPA compliance tools'
            ],
            'benefits' => [
                'Locate debtors faster',
                'Increase recovery rates',
                'Lower skip costs',
                'Ensure compliance',
                'Improve contact rates',
                'Maximize ROI'
            ],
            'icon' => 'fa-search-location',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 35,
            'name' => 'Asset Discovery Platform',
            'slug' => 'asset-discovery-platform',
            'short_description' => 'Comprehensive asset identification and valuation for debt recovery.',
            'full_description' => 'Asset Discovery Platform helps collection agencies and creditors identify, value, and locate debtor assets to maximize recovery potential while maintaining compliance.',
            'industries' => ['Collections & Recovery', 'Law Enforcement'],
            'features' => [
                'Property ownership search',
                'Vehicle registration',
                'Watercraft and aircraft',
                'Business ownership',
                'Bank account indicators',
                'Investment accounts',
                'Real estate valuations',
                'Lien identification',
                'Bankruptcy filings',
                'Judgment history',
                'Employment verification',
                'Income estimation'
            ],
            'benefits' => [
                'Maximize recovery',
                'Identify hidden assets',
                'Prioritize collection efforts',
                'Support legal actions',
                'Improve settlement rates',
                'Reduce write-offs'
            ],
            'icon' => 'fa-coins',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 36,
            'name' => 'Debt Recovery Analytics',
            'slug' => 'debt-recovery-analytics',
            'short_description' => 'Advanced analytics and scoring to optimize collection strategies.',
            'full_description' => 'Debt Recovery Analytics provides predictive analytics, scoring models, and performance metrics to help collection agencies optimize strategies and maximize recovery rates.',
            'industries' => ['Collections & Recovery'],
            'features' => [
                'Predictive recovery scores',
                'Propensity to pay modeling',
                'Portfolio segmentation',
                'Treatment optimization',
                'Channel effectiveness',
                'Contact strategy optimization',
                'Performance dashboards',
                'KPI tracking',
                'Collector performance',
                'Campaign analytics',
                'A/B testing',
                'ROI measurement'
            ],
            'benefits' => [
                'Optimize collection strategies',
                'Increase recovery rates',
                'Improve efficiency',
                'Reduce costs',
                'Better resource allocation',
                'Data-driven decisions'
            ],
            'icon' => 'fa-chart-pie',
            'color' => 'var(--primary-color)'
        ],

        // Government Products
        [
            'id' => 37,
            'name' => 'Public Assistance Verification',
            'slug' => 'public-assistance-verification',
            'short_description' => 'Eligibility verification and fraud prevention for public benefit programs.',
            'full_description' => 'Public Assistance Verification helps government agencies verify eligibility, detect fraud, and ensure program integrity for public benefit programs while protecting taxpayer dollars.',
            'industries' => ['Government'],
            'features' => [
                'Income verification',
                'Asset verification',
                'Identity verification',
                'Household composition',
                'Employment verification',
                'Duplicate benefit detection',
                'Cross-program validation',
                'Death verification',
                'Address verification',
                'Fraud pattern detection',
                'Case management',
                'Audit support'
            ],
            'benefits' => [
                'Reduce benefit fraud',
                'Ensure eligibility',
                'Protect taxpayer dollars',
                'Improve program integrity',
                'Streamline processing',
                'Support compliance'
            ],
            'icon' => 'fa-hands-helping',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 38,
            'name' => 'Tax Compliance Solutions',
            'slug' => 'tax-compliance-solutions',
            'short_description' => 'Advanced tools for tax fraud detection and compliance enforcement.',
            'full_description' => 'Tax Compliance Solutions provides government tax agencies with advanced tools to detect tax fraud, ensure compliance, and improve revenue collection.',
            'industries' => ['Government'],
            'features' => [
                'Tax fraud detection',
                'Identity theft prevention',
                'Business verification',
                'Income verification',
                'Asset discovery',
                'Unreported income detection',
                'Tax evasion indicators',
                'Audit support',
                'Lien and levy support',
                'Collections assistance',
                'Risk scoring',
                'Analytics and reporting'
            ],
            'benefits' => [
                'Detect tax fraud',
                'Improve collections',
                'Increase revenue',
                'Ensure compliance',
                'Reduce tax gap',
                'Support audits'
            ],
            'icon' => 'fa-file-invoice-dollar',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 39,
            'name' => 'Child Support Enforcement',
            'slug' => 'child-support-enforcement',
            'short_description' => 'Locate non-custodial parents and enforce child support obligations.',
            'full_description' => 'Child Support Enforcement helps state and local agencies locate non-custodial parents, verify income and assets, and enforce child support orders effectively.',
            'industries' => ['Government'],
            'features' => [
                'Parent location services',
                'Employment verification',
                'Income discovery',
                'Asset identification',
                'Contact information',
                'Relative identification',
                'New hire detection',
                'Bank account location',
                'Wage garnishment support',
                'License suspension tracking',
                'Payment history',
                'Case management'
            ],
            'benefits' => [
                'Locate non-custodial parents',
                'Increase collections',
                'Support families',
                'Improve compliance',
                'Reduce caseload time',
                'Better outcomes'
            ],
            'icon' => 'fa-child',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 40,
            'name' => 'Vital Records Management',
            'slug' => 'vital-records-management',
            'short_description' => 'Digital vital records management and verification for government agencies.',
            'full_description' => 'Vital Records Management provides comprehensive digital management, verification, and security for birth, death, marriage, and divorce records for government agencies.',
            'industries' => ['Government'],
            'features' => [
                'Digital records management',
                'Birth certificate verification',
                'Death certificate validation',
                'Marriage records',
                'Divorce records',
                'Fraud prevention',
                'Identity verification',
                'Secure access controls',
                'Audit trails',
                'Online access portal',
                'Record amendments',
                'Statistical reporting'
            ],
            'benefits' => [
                'Improve record security',
                'Prevent fraud',
                'Streamline access',
                'Ensure accuracy',
                'Support verification',
                'Meet compliance'
            ],
            'icon' => 'fa-file-medical',
            'color' => 'var(--primary-color)'
        ],

        // Additional Corporate Products
        [
            'id' => 41,
            'name' => 'Customer Acquisition Intelligence',
            'slug' => 'customer-acquisition-intelligence',
            'short_description' => 'Data-driven customer acquisition and marketing intelligence platform.',
            'full_description' => 'Customer Acquisition Intelligence leverages comprehensive consumer data and predictive analytics to help businesses identify, target, and acquire new customers more effectively.',
            'industries' => ['Corporations', 'Financial Services'],
            'features' => [
                'Consumer segmentation',
                'Propensity modeling',
                'Life event triggers',
                'Demographic profiling',
                'Psychographic insights',
                'Contact information',
                'Multi-channel marketing',
                'Response prediction',
                'Campaign optimization',
                'ROI tracking',
                'Lookalike modeling',
                'Suppression lists'
            ],
            'benefits' => [
                'Improve acquisition rates',
                'Reduce marketing costs',
                'Better targeting',
                'Increase ROI',
                'Optimize campaigns',
                'Grow customer base'
            ],
            'icon' => 'fa-bullseye',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 42,
            'name' => 'Due Diligence Platform',
            'slug' => 'due-diligence-platform',
            'short_description' => 'Comprehensive due diligence and background investigation for business.',
            'full_description' => 'Due Diligence Platform provides comprehensive background investigation and due diligence services for businesses evaluating partnerships, acquisitions, and high-risk relationships.',
            'industries' => ['Corporations', 'Financial Services'],
            'features' => [
                'Background investigations',
                'Criminal record searches',
                'Civil litigation history',
                'Business verification',
                'Asset verification',
                'Media searches',
                'Regulatory actions',
                'Professional licenses',
                'Education verification',
                'Employment verification',
                'International screening',
                'Report generation'
            ],
            'benefits' => [
                'Mitigate risk',
                'Protect reputation',
                'Support M&A',
                'Ensure compliance',
                'Make informed decisions',
                'Avoid bad actors'
            ],
            'icon' => 'fa-search-dollar',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 43,
            'name' => 'Employee Screening Solutions',
            'slug' => 'employee-screening-solutions',
            'short_description' => 'Pre-employment screening and background checks for hiring.',
            'full_description' => 'Employee Screening Solutions provides comprehensive pre-employment screening, background checks, and ongoing monitoring to help organizations make safe, informed hiring decisions.',
            'industries' => ['Corporations', 'Healthcare', 'Government'],
            'features' => [
                'Criminal background checks',
                'Employment verification',
                'Education verification',
                'Professional license verification',
                'Credit checks',
                'Drug screening',
                'Motor vehicle records',
                'Social media screening',
                'International checks',
                'Ongoing monitoring',
                'FCRA compliance',
                'Fast turnaround'
            ],
            'benefits' => [
                'Hire safely',
                'Reduce risk',
                'Ensure compliance',
                'Protect workplace',
                'Improve retention',
                'Support due diligence'
            ],
            'icon' => 'fa-user-tie',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 44,
            'name' => 'Vendor Risk Management',
            'slug' => 'vendor-risk-management',
            'short_description' => 'Third-party vendor screening and ongoing risk monitoring.',
            'full_description' => 'Vendor Risk Management helps organizations assess, monitor, and manage third-party vendor risks through comprehensive due diligence and continuous monitoring.',
            'industries' => ['Corporations', 'Financial Services', 'Healthcare'],
            'features' => [
                'Vendor screening',
                'Financial stability assessment',
                'Cybersecurity evaluation',
                'Compliance verification',
                'Regulatory checks',
                'Performance monitoring',
                'Risk scoring',
                'Adverse media monitoring',
                'Contract management',
                'Issue tracking',
                'Audit support',
                'Reporting dashboards'
            ],
            'benefits' => [
                'Reduce vendor risk',
                'Ensure compliance',
                'Protect data',
                'Avoid disruptions',
                'Support audits',
                'Improve governance'
            ],
            'icon' => 'fa-handshake',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 45,
            'name' => 'Small Business Risk Assessment',
            'slug' => 'small-business-risk-assessment',
            'short_description' => 'Credit and risk assessment solutions for small business lending.',
            'full_description' => 'Small Business Risk Assessment provides comprehensive risk evaluation tools specifically designed for small business lending, helping lenders make informed credit decisions.',
            'industries' => ['Financial Services', 'Corporations'],
            'features' => [
                'Business credit scores',
                'Owner credit evaluation',
                'Business financial analysis',
                'Payment history',
                'Public records',
                'Legal filings',
                'Industry risk factors',
                'Ownership structure',
                'Predictive models',
                'Fraud detection',
                'Portfolio monitoring',
                'Benchmarking data'
            ],
            'benefits' => [
                'Improve approval accuracy',
                'Reduce defaults',
                'Expand lending',
                'Better pricing',
                'Support growth',
                'Manage portfolio risk'
            ],
            'icon' => 'fa-store',
            'color' => 'var(--primary-color)'
        ],

        // Additional Insurance Products
        [
            'id' => 46,
            'name' => 'Insurance Underwriting Intelligence',
            'slug' => 'insurance-underwriting-intelligence',
            'short_description' => 'Advanced data and analytics for accurate insurance underwriting.',
            'full_description' => 'Insurance Underwriting Intelligence provides comprehensive data, analytics, and risk assessment tools to help insurers make accurate underwriting decisions and optimize pricing.',
            'industries' => ['Insurance'],
            'features' => [
                'Risk assessment tools',
                'Loss history data',
                'Property characteristics',
                'Lifestyle indicators',
                'Credit-based insurance scores',
                'Occupational data',
                'Behavioral analytics',
                'Predictive modeling',
                'Automated decision support',
                'Fraud indicators',
                'Competitive intelligence',
                'Pricing optimization'
            ],
            'benefits' => [
                'Improve risk selection',
                'Optimize pricing',
                'Reduce adverse selection',
                'Increase profitability',
                'Speed underwriting',
                'Enhance accuracy'
            ],
            'icon' => 'fa-calculator',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 47,
            'name' => 'Claims Investigation Suite',
            'slug' => 'claims-investigation-suite',
            'short_description' => 'Comprehensive claims investigation and fraud detection tools.',
            'full_description' => 'Claims Investigation Suite provides insurance investigators with powerful tools to investigate claims, detect fraud, and make informed claim decisions quickly.',
            'industries' => ['Insurance'],
            'features' => [
                'Claimant investigation',
                'Social media intelligence',
                'Witness verification',
                'Medical provider screening',
                'Attorney investigation',
                'Asset discovery',
                'Activity checks',
                'Prior claims history',
                'Fraud indicators',
                'Link analysis',
                'Report generation',
                'Case management'
            ],
            'benefits' => [
                'Detect fraud faster',
                'Reduce claim costs',
                'Improve investigation efficiency',
                'Support litigation',
                'Better claim outcomes',
                'Protect profitability'
            ],
            'icon' => 'fa-clipboard-list',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 48,
            'name' => 'Insurance Data Prefill',
            'slug' => 'insurance-data-prefill',
            'short_description' => 'Automated data prefill to streamline insurance applications and quotes.',
            'full_description' => 'Insurance Data Prefill automatically populates application and quote forms with accurate consumer data, reducing friction and improving conversion rates.',
            'industries' => ['Insurance'],
            'features' => [
                'Automated data population',
                'Address verification',
                'Vehicle information',
                'Property details',
                'Driver history',
                'Prior insurance',
                'Demographics',
                'Contact information',
                'Real-time data delivery',
                'API integration',
                'Mobile optimization',
                'Accuracy validation'
            ],
            'benefits' => [
                'Improve conversion rates',
                'Reduce abandonment',
                'Enhance customer experience',
                'Increase accuracy',
                'Speed quote process',
                'Lower costs'
            ],
            'icon' => 'fa-file-import',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 49,
            'name' => 'Insurance Retention Analytics',
            'slug' => 'insurance-retention-analytics',
            'short_description' => 'Predictive analytics to identify and retain at-risk policyholders.',
            'full_description' => 'Insurance Retention Analytics uses predictive modeling and analytics to identify policyholders at risk of cancellation and recommend retention strategies.',
            'industries' => ['Insurance'],
            'features' => [
                'Churn prediction models',
                'Risk segmentation',
                'Lifetime value analysis',
                'Trigger event detection',
                'Competitive intelligence',
                'Retention scoring',
                'Treatment optimization',
                'Campaign effectiveness',
                'Customer satisfaction indicators',
                'Pricing sensitivity',
                'Cross-sell opportunities',
                'Performance dashboards'
            ],
            'benefits' => [
                'Reduce policyholder churn',
                'Increase retention rates',
                'Improve customer lifetime value',
                'Optimize retention spend',
                'Target at-risk policies',
                'Grow book of business'
            ],
            'icon' => 'fa-user-friends',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 50,
            'name' => 'Commercial Insurance Intelligence',
            'slug' => 'commercial-insurance-intelligence',
            'short_description' => 'Business intelligence and risk data for commercial insurance underwriting.',
            'full_description' => 'Commercial Insurance Intelligence provides comprehensive business data and risk intelligence for commercial insurance underwriting, pricing, and risk management.',
            'industries' => ['Insurance'],
            'features' => [
                'Business verification',
                'Financial data',
                'Loss history',
                'Industry classification',
                'Risk characteristics',
                'Employee count',
                'Revenue data',
                'Property details',
                'Fleet information',
                'Claims history',
                'Risk scoring',
                'Competitive benchmarks'
            ],
            'benefits' => [
                'Accurate risk assessment',
                'Better pricing',
                'Reduce losses',
                'Improve underwriting',
                'Win profitable business',
                'Market intelligence'
            ],
            'icon' => 'fa-building',
            'color' => 'var(--primary-color)'
        ],

        // Emerging Technology Products
        [
            'id' => 51,
            'name' => 'AI-Powered Risk Orchestration',
            'slug' => 'ai-risk-orchestration',
            'short_description' => 'Machine learning-driven risk orchestration and decision automation.',
            'full_description' => 'AI-Powered Risk Orchestration leverages artificial intelligence and machine learning to orchestrate risk decisions across multiple systems, optimizing outcomes in real-time.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Machine learning models',
                'Real-time decisioning',
                'Multi-data source integration',
                'Adaptive learning',
                'Risk scoring',
                'Policy management',
                'A/B testing',
                'Champion/challenger',
                'Explainable AI',
                'Model monitoring',
                'Performance analytics',
                'Regulatory compliance'
            ],
            'benefits' => [
                'Optimize decisions',
                'Improve accuracy',
                'Reduce false positives',
                'Adapt to threats',
                'Increase automation',
                'Better outcomes'
            ],
            'icon' => 'fa-brain',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 52,
            'name' => 'Blockchain Identity Verification',
            'slug' => 'blockchain-identity-verification',
            'short_description' => 'Distributed ledger technology for secure identity verification and credentialing.',
            'full_description' => 'Blockchain Identity Verification uses distributed ledger technology to create secure, verifiable, and portable digital identities that reduce fraud and improve privacy.',
            'industries' => ['Financial Services', 'Healthcare', 'Government'],
            'features' => [
                'Blockchain-based identity',
                'Self-sovereign identity',
                'Verifiable credentials',
                'Decentralized verification',
                'Immutable audit trail',
                'Privacy-preserving',
                'Interoperability',
                'Digital signatures',
                'Smart contracts',
                'Credential revocation',
                'Multi-party verification',
                'Standards compliance'
            ],
            'benefits' => [
                'Enhance security',
                'Improve privacy',
                'Reduce fraud',
                'Streamline verification',
                'Lower costs',
                'Future-proof identity'
            ],
            'icon' => 'fa-link',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 53,
            'name' => 'Synthetic Identity Detection',
            'slug' => 'synthetic-identity-detection',
            'short_description' => 'Advanced detection of synthetic identities and fake personas.',
            'full_description' => 'Synthetic Identity Detection uses advanced analytics and machine learning to identify synthetic identities created by fraudsters, protecting organizations from this growing threat.',
            'industries' => ['Financial Services', 'Insurance', 'Corporations'],
            'features' => [
                'Synthetic identity detection',
                'Identity fabrication analysis',
                'Data inconsistency detection',
                'Social security validation',
                'Credit file analysis',
                'Digital footprint analysis',
                'Identity timeline analysis',
                'Behavioral indicators',
                'Machine learning models',
                'Consortium intelligence',
                'Risk scoring',
                'Real-time screening'
            ],
            'benefits' => [
                'Prevent synthetic fraud',
                'Reduce credit losses',
                'Protect applications',
                'Improve detection',
                'Lower fraud costs',
                'Safeguard portfolios'
            ],
            'icon' => 'fa-user-secret',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 54,
            'name' => 'Biometric Authentication Platform',
            'slug' => 'biometric-authentication-platform',
            'short_description' => 'Multi-modal biometric authentication for secure identity verification.',
            'full_description' => 'Biometric Authentication Platform delivers secure, convenient authentication using facial recognition, voice, fingerprint, and behavioral biometrics.',
            'industries' => ['Financial Services', 'Healthcare', 'Government', 'Corporations'],
            'features' => [
                'Facial recognition',
                'Voice authentication',
                'Fingerprint scanning',
                'Iris recognition',
                'Behavioral biometrics',
                'Liveness detection',
                'Multi-factor authentication',
                'Passive authentication',
                'Continuous authentication',
                'Risk-based authentication',
                'Mobile SDK',
                'Privacy compliance'
            ],
            'benefits' => [
                'Enhanced security',
                'Improved user experience',
                'Reduce fraud',
                'Passwordless authentication',
                'Lower support costs',
                'Meet compliance'
            ],
            'icon' => 'fa-fingerprint',
            'color' => 'var(--primary-color)'
        ],
        [
            'id' => 55,
            'name' => 'Digital Identity Wallet',
            'slug' => 'digital-identity-wallet',
            'short_description' => 'Secure digital wallet for storing and sharing verified credentials.',
            'full_description' => 'Digital Identity Wallet provides consumers with a secure mobile wallet to store verified credentials and share them with organizations, improving privacy and convenience.',
            'industries' => ['Financial Services', 'Healthcare', 'Government', 'Corporations'],
            'features' => [
                'Secure credential storage',
                'Verified credential issuance',
                'Selective disclosure',
                'Consent management',
                'Multi-credential support',
                'QR code sharing',
                'Biometric protection',
                'Backup and recovery',
                'Revocation checking',
                'Standards-based',
                'Cross-platform support',
                'Privacy-preserving'
            ],
            'benefits' => [
                'Consumer control',
                'Improved privacy',
                'Streamlined verification',
                'Reduced friction',
                'Better security',
                'Regulatory compliance'
            ],
            'icon' => 'fa-wallet',
            'color' => 'var(--primary-color)'
        ]
    ];
}

/**
 * Get single product by slug
 */
function get_product_by_slug($slug) {
    $products = get_all_products();
    foreach ($products as $product) {
        if ($product['slug'] === $slug) {
            return $product;
        }
    }
    return null;
}

/**
 * Get products by industry
 */
function get_products_by_industry($industry) {
    $products = get_all_products();
    return array_filter($products, function($product) use ($industry) {
        return in_array($industry, $product['industries']);
    });
}

/**
 * Get related products
 */
function get_related_products($current_product_id, $limit = 3) {
    $products = get_all_products();
    $current_product = null;

    // Find current product
    foreach ($products as $product) {
        if ($product['id'] === $current_product_id) {
            $current_product = $product;
            break;
        }
    }

    if (!$current_product) {
        return [];
    }

    // Find products with matching industries
    $related = array_filter($products, function($product) use ($current_product) {
        if ($product['id'] === $current_product['id']) {
            return false;
        }
        return !empty(array_intersect($product['industries'], $current_product['industries']));
    });

    // Limit results
    return array_slice($related, 0, $limit);
}
