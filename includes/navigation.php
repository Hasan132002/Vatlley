<nav class="main-navigation" id="mainNavigation">
    <ul class="nav-menu">
        <!-- Home -->
        <li>
            <a href="<?php echo url(); ?>" class="<?php echo is_active('index'); ?>">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>

        <!-- Products -->
        <li>
            <a href="<?php echo url('products'); ?>" class="<?php echo is_active('products'); ?>">
                <i class="fas fa-box"></i>
                Products
            </a>
        </li>

        <!-- Industries Dropdown with Nested Mega Menu -->
        <li class="has-dropdown has-nested-mega">
            <a href="#" class="dropdown-toggle">
                <i class="fas fa-industry"></i>
                Industries
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="mega-menu industries-mega-menu">
                <div class="mega-menu-content">
                    <div class="container">
                        <div class="mega-menu-grid">
                            <!-- Corporations -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/corporations'); ?>" class="mega-menu-link">
                                    <i class="fas fa-building"></i>
                                    <div>
                                        <h4>Corporations</h4>
                                        <p>Identity verification, fraud prevention & risk assessment</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-building"></i> Corporate Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/corporations/financial-crime-compliance'); ?>" class="nested-service-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>Financial Crime Compliance</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/fraud-identity-solutions'); ?>" class="nested-service-item">
                                                <i class="fas fa-user-shield"></i>
                                                <span>Fraud & Identity Solutions</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/credit-risk'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-line"></i>
                                                <span>Credit Risk Assessment</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/customer-acquisition'); ?>" class="nested-service-item">
                                                <i class="fas fa-users"></i>
                                                <span>Customer Acquisition</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/collections-recovery'); ?>" class="nested-service-item">
                                                <i class="fas fa-hand-holding-usd"></i>
                                                <span>Collections & Recovery</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/payments-efficiency'); ?>" class="nested-service-item">
                                                <i class="fas fa-credit-card"></i>
                                                <span>Payments Efficiency</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/investigations-due-diligence'); ?>" class="nested-service-item">
                                                <i class="fas fa-search"></i>
                                                <span>Investigations & Due Diligence</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/small-business-risk'); ?>" class="nested-service-item">
                                                <i class="fas fa-store"></i>
                                                <span>Small Business Risk</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/data-quality'); ?>" class="nested-service-item">
                                                <i class="fas fa-database"></i>
                                                <span>Data Quality Management</span>
                                            </a>
                                            <a href="<?php echo url('industries/corporations/risk-orchestration'); ?>" class="nested-service-item">
                                                <i class="fas fa-cogs"></i>
                                                <span>Risk Orchestration</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Financial Services -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/financial-services'); ?>" class="mega-menu-link">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <h4>Financial Services</h4>
                                        <p>AML, fraud detection & compliance solutions</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-chart-line"></i> Financial Services Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/financial-services/aml'); ?>" class="nested-service-item">
                                                <i class="fas fa-money-bill-wave"></i>
                                                <span>Anti-Money Laundering</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/kyc'); ?>" class="nested-service-item">
                                                <i class="fas fa-id-badge"></i>
                                                <span>Know Your Customer (KYC)</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/fraud-detection'); ?>" class="nested-service-item">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                <span>Fraud Detection & Prevention</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/credit-risk'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-pie"></i>
                                                <span>Credit Risk Assessment</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/compliance'); ?>" class="nested-service-item">
                                                <i class="fas fa-balance-scale"></i>
                                                <span>Regulatory Compliance</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/sanctions-screening'); ?>" class="nested-service-item">
                                                <i class="fas fa-search"></i>
                                                <span>Sanctions Screening</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/collections-recovery'); ?>" class="nested-service-item">
                                                <i class="fas fa-hand-holding-usd"></i>
                                                <span>Collections & Recovery</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/customer-acquisition'); ?>" class="nested-service-item">
                                                <i class="fas fa-users"></i>
                                                <span>Customer Acquisition</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/data-quality'); ?>" class="nested-service-item">
                                                <i class="fas fa-database"></i>
                                                <span>Data Quality Management</span>
                                            </a>
                                            <a href="<?php echo url('industries/financial-services/risk-orchestration'); ?>" class="nested-service-item">
                                                <i class="fas fa-cogs"></i>
                                                <span>Risk Orchestration</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Government -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/government'); ?>" class="mega-menu-link">
                                    <i class="fas fa-landmark"></i>
                                    <div>
                                        <h4>Government</h4>
                                        <p>Identity intelligence & fraud prevention</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-landmark"></i> Government Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/government/identity-assessment'); ?>" class="nested-service-item">
                                                <i class="fas fa-id-card"></i>
                                                <span>Identity Assessment</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/fraud-detection'); ?>" class="nested-service-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>Fraud Detection & Prevention</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/data-quality'); ?>" class="nested-service-item">
                                                <i class="fas fa-database"></i>
                                                <span>Data Quality Management</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/payment-processing'); ?>" class="nested-service-item">
                                                <i class="fas fa-credit-card"></i>
                                                <span>Payment Processing</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/dmv-solutions'); ?>" class="nested-service-item">
                                                <i class="fas fa-car"></i>
                                                <span>DMV Solutions</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/medicaid-management'); ?>" class="nested-service-item">
                                                <i class="fas fa-medkit"></i>
                                                <span>Medicaid Management</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/public-health'); ?>" class="nested-service-item">
                                                <i class="fas fa-heartbeat"></i>
                                                <span>Public Health</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/unemployment-insurance'); ?>" class="nested-service-item">
                                                <i class="fas fa-briefcase"></i>
                                                <span>Unemployment Insurance</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/social-services'); ?>" class="nested-service-item">
                                                <i class="fas fa-hands-helping"></i>
                                                <span>Social Services</span>
                                            </a>
                                            <a href="<?php echo url('industries/government/vital-records'); ?>" class="nested-service-item">
                                                <i class="fas fa-file-alt"></i>
                                                <span>Vital Records</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Healthcare -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/healthcare'); ?>" class="mega-menu-link">
                                    <i class="fas fa-heartbeat"></i>
                                    <div>
                                        <h4>Healthcare</h4>
                                        <p>Provider data, identity verification & analytics</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-heartbeat"></i> Healthcare Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/healthcare/life-sciences'); ?>" class="nested-service-item">
                                                <i class="fas fa-flask"></i>
                                                <span>Life Sciences</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/pharmacy'); ?>" class="nested-service-item">
                                                <i class="fas fa-pills"></i>
                                                <span>Pharmacy</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/payer'); ?>" class="nested-service-item">
                                                <i class="fas fa-hospital"></i>
                                                <span>Payer</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/provider'); ?>" class="nested-service-item">
                                                <i class="fas fa-user-md"></i>
                                                <span>Provider</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/healthcare-market-data'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-bar"></i>
                                                <span>Healthcare Market Data</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/provider-data-management'); ?>" class="nested-service-item">
                                                <i class="fas fa-database"></i>
                                                <span>Provider Data Management</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/identity-verification'); ?>" class="nested-service-item">
                                                <i class="fas fa-id-card"></i>
                                                <span>Identity Verification</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/real-world-data'); ?>" class="nested-service-item">
                                                <i class="fas fa-globe"></i>
                                                <span>Real-World Data</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/population-health'); ?>" class="nested-service-item">
                                                <i class="fas fa-users"></i>
                                                <span>Population Health Data</span>
                                            </a>
                                            <a href="<?php echo url('industries/healthcare/whole-person-data'); ?>" class="nested-service-item">
                                                <i class="fas fa-heart"></i>
                                                <span>Whole Person Data</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Insurance -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/insurance'); ?>" class="mega-menu-link">
                                    <i class="fas fa-shield-alt"></i>
                                    <div>
                                        <h4>Insurance</h4>
                                        <p>Risk solutions & fraud detection</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-shield-alt"></i> Insurance Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/insurance/fraud-detection'); ?>" class="nested-service-item">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                <span>Fraud Detection</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/claims'); ?>" class="nested-service-item">
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                <span>Claims Processing</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/underwriting'); ?>" class="nested-service-item">
                                                <i class="fas fa-calculator"></i>
                                                <span>Quoting & Underwriting</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/acquisition'); ?>" class="nested-service-item">
                                                <i class="fas fa-users"></i>
                                                <span>Acquisition & Retention</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/telematics'); ?>" class="nested-service-item">
                                                <i class="fas fa-tachometer-alt"></i>
                                                <span>Telematics</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/analytics'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-bar"></i>
                                                <span>Data Analytics & Modeling</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/auto-insurance'); ?>" class="nested-service-item">
                                                <i class="fas fa-car-crash"></i>
                                                <span>Auto Insurance</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/home-insurance'); ?>" class="nested-service-item">
                                                <i class="fas fa-home"></i>
                                                <span>Home Insurance</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/life-insurance'); ?>" class="nested-service-item">
                                                <i class="fas fa-heartbeat"></i>
                                                <span>Life Insurance</span>
                                            </a>
                                            <a href="<?php echo url('industries/insurance/commercial-insurance'); ?>" class="nested-service-item">
                                                <i class="fas fa-building"></i>
                                                <span>Commercial Insurance</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Law Enforcement -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/law-enforcement'); ?>" class="mega-menu-link">
                                    <i class="fas fa-user-shield"></i>
                                    <div>
                                        <h4>Law Enforcement</h4>
                                        <p>Crime analytics & investigative tools</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-user-shield"></i> Law Enforcement Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/law-enforcement/crime-analytics'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-line"></i>
                                                <span>Crime Analytics & Mapping</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/crash-reporting'); ?>" class="nested-service-item">
                                                <i class="fas fa-file-alt"></i>
                                                <span>Crash & Incident Reporting</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/investigative-services'); ?>" class="nested-service-item">
                                                <i class="fas fa-search"></i>
                                                <span>Investigative Services</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/criminal-investigation'); ?>" class="nested-service-item">
                                                <i class="fas fa-user-secret"></i>
                                                <span>Criminal Investigation Tools</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/geolocation'); ?>" class="nested-service-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Device Geolocation</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/marketplace'); ?>" class="nested-service-item">
                                                <i class="fas fa-store"></i>
                                                <span>Public Safety Marketplace</span>
                                            </a>
                                            <a href="<?php echo url('industries/law-enforcement/public-safety-tools'); ?>" class="nested-service-item">
                                                <i class="fas fa-tools"></i>
                                                <span>Public Safety Tools</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Collections & Recovery -->
                            <div class="mega-menu-item has-submenu">
                                <a href="<?php echo url('industries/collections-recovery'); ?>" class="mega-menu-link">
                                    <i class="fas fa-money-check-alt"></i>
                                    <div>
                                        <h4>Collections & Recovery</h4>
                                        <p>Skip tracing & debt recovery</p>
                                    </div>
                                    <i class="fas fa-chevron-right submenu-arrow"></i>
                                </a>
                                <div class="nested-mega-menu">
                                    <div class="nested-mega-content">
                                        <h5><i class="fas fa-money-check-alt"></i> Collections & Recovery Solutions</h5>
                                        <div class="nested-services-grid">
                                            <a href="<?php echo url('industries/collections-recovery/skip-tracing'); ?>" class="nested-service-item">
                                                <i class="fas fa-search-location"></i>
                                                <span>Skip Tracing</span>
                                            </a>
                                            <a href="<?php echo url('industries/collections-recovery/compliance'); ?>" class="nested-service-item">
                                                <i class="fas fa-balance-scale"></i>
                                                <span>Collections Compliance</span>
                                            </a>
                                            <a href="<?php echo url('industries/collections-recovery/contact-strategies'); ?>" class="nested-service-item">
                                                <i class="fas fa-phone-alt"></i>
                                                <span>Contact Strategies</span>
                                            </a>
                                            <a href="<?php echo url('industries/collections-recovery/debt-recovery'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-pie"></i>
                                                <span>Debt Recovery Assessment</span>
                                            </a>
                                            <a href="<?php echo url('industries/collections-recovery/asset-discovery'); ?>" class="nested-service-item">
                                                <i class="fas fa-coins"></i>
                                                <span>Asset Discovery</span>
                                            </a>
                                            <a href="<?php echo url('industries/collections-recovery/analytics'); ?>" class="nested-service-item">
                                                <i class="fas fa-chart-bar"></i>
                                                <span>Analytics & Reporting</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <!-- Resources -->
        <li class="has-dropdown">
            <a href="#" class="dropdown-toggle">
                <i class="fas fa-folder-open"></i>
                Resources
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo url('resources/blog'); ?>"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?php echo url('resources/events'); ?>"><i class="fas fa-calendar"></i> Events</a></li>
                <li><a href="<?php echo url('resources/whitepapers'); ?>"><i class="fas fa-file-alt"></i> Whitepapers</a></li>
                <li><a href="<?php echo url('resources/case-studies'); ?>"><i class="fas fa-chart-bar"></i> Case Studies</a></li>
                <li><a href="<?php echo url('resources/webinars'); ?>"><i class="fas fa-video"></i> Webinars</a></li>
            </ul>
        </li>

        <!-- About Us - Mega Menu -->
        <li class="has-dropdown has-mega-menu">
            <a href="#" class="dropdown-toggle">
                <i class="fas fa-building"></i>
                About Us
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="mega-menu about-mega-menu">
                <div class="mega-menu-content">
                    <div class="container">
                        <div class="about-mega-grid">
                            <!-- Company Section -->
                            <div class="about-section">
                                <h4 class="about-section-title">
                                    <i class="fas fa-building"></i>
                                    Company
                                </h4>
                                <div class="about-items">
                                    <a href="<?php echo url('about-us'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>About Us</h5>
                                            <p>Learn about our mission, vision, and values</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/leadership'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Leadership</h5>
                                            <p>Meet our executive leadership team</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/careers'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Careers</h5>
                                            <p>Join our team and grow your career</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Programs Section -->
                            <div class="about-section">
                                <h4 class="about-section-title">
                                    <i class="fas fa-heart"></i>
                                    Programs
                                </h4>
                                <div class="about-items">
                                    <a href="<?php echo url('about-us/corporate-responsibility'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-hand-holding-heart"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Corporate Responsibility</h5>
                                            <p>Our commitment to social impact</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/inclusion-belonging'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-hands-helping"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Inclusion & Belonging</h5>
                                            <p>Diversity, equity, and inclusion initiatives</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/adam-program'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-child"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>ADAM Program</h5>
                                            <p>Helping bring missing children home</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Media & Technology Section -->
                            <div class="about-section">
                                <h4 class="about-section-title">
                                    <i class="fas fa-microchip"></i>
                                    Media & Tech
                                </h4>
                                <div class="about-items">
                                    <a href="<?php echo url('about-us/press-room'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-newspaper"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Press Room</h5>
                                            <p>Latest news and press releases</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/technology'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Our Technology</h5>
                                            <p>Innovation driving our solutions</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/experts'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Industry Experts</h5>
                                            <p>Thought leadership and expertise</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Partnerships Section -->
                            <div class="about-section">
                                <h4 class="about-section-title">
                                    <i class="fas fa-handshake"></i>
                                    Partnerships
                                </h4>
                                <div class="about-items">
                                    <a href="<?php echo url('about-us/partnerships/corporate'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Corporate Partnerships</h5>
                                            <p>Strategic business partnerships</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/partnerships/government'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-landmark"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Government Partnerships</h5>
                                            <p>Public sector collaborations</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo url('about-us/partnerships/healthcare'); ?>" class="about-card">
                                        <div class="about-card-icon">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                        <div class="about-card-content">
                                            <h5>Healthcare Partnerships</h5>
                                            <p>Healthcare industry alliances</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <!-- CTA Button -->
    <a href="<?php echo url('contact'); ?>" class="btn nav-cta-btn">
        <i class="fas fa-envelope"></i>
        Contact Us
    </a>
</nav>
