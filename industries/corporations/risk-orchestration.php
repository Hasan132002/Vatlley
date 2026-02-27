<?php
/**
 * Risk Orchestration Solutions Service Page - Corporations Industry
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Risk Orchestration Solutions';
$meta_description = 'Integrated risk orchestration and decision management solutions for corporations. Unify risk management across channels with VettlyGlobal.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 120px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 25px; opacity: 0.9; font-size: 0.95rem;">
                <a href="<?php echo url(); ?>" style="color: white; text-decoration: none;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white; text-decoration: none;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/corporations'); ?>" style="color: white; text-decoration: none;">Corporations</a>
                <span style="margin: 0 10px;">/</span>
                <span>Risk Orchestration</span>
            </div>
            <h1 style="color: white; font-size: 2.8rem; margin-bottom: 25px; font-weight: 700; line-height: 1.2;">Risk Orchestration Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.7; margin-bottom: 0;">
                Unified risk management and orchestration platform to streamline decision-making, automate workflows, and manage risk across all channels and touchpoints.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Integrated Risk Management Platform</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                VettlyGlobal's risk orchestration solution unifies risk management decisions, case workflows, and data across your organization to enable faster, more consistent, and more effective risk management.
            </p>
        </div>

        <div style="background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: 40px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Workflow Automation</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Automate risk management workflows, case routing, and decision processes to reduce manual effort and improve consistency.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Decision Engine</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Centralized decision logic with configurable rules and policies to ensure consistent, compliant, and optimized risk decisions across channels.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Case Management</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Manage complex risk cases with task tracking, collaboration tools, and audit trails for compliance and accountability.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Analytics & Insights</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Comprehensive analytics and dashboards to monitor risk metrics, identify trends, and optimize risk management strategy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Capabilities -->
<section class="section" style="background: var(--bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Key Capabilities</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Advanced risk orchestration and decision management tools</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Decision Engine & Policy Management -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Decision Engine & Policy Management</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Configurable rules engine for decisions
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Policy and approval workflow automation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Risk scoring and decisioning
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business rule management
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Real-time decision delivery
                    </li>
                </ul>
            </div>

            <!-- Workflow & Case Management -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Workflow & Case Management</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Workflow design and automation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Case routing and prioritization
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Task management and tracking
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Collaboration and escalation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Notification and communication
                    </li>
                </ul>
            </div>

            <!-- Data Integration & APIs -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Data Integration & APIs</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Multi-source data integration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        REST and real-time APIs
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        System integration and middleware
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Data transformation and enrichment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Batch and event-driven processing
                    </li>
                </ul>
            </div>

            <!-- Analytics & Monitoring -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Analytics & Monitoring</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Risk metrics and KPI dashboards
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Performance analytics and reporting
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Decisioning and process analytics
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Trend analysis and forecasting
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Custom reports and visualizations
                    </li>
                </ul>
            </div>

            <!-- Compliance & Governance -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Compliance & Governance</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Audit trails and activity logging
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Role-based access control
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Regulatory reporting and compliance
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Policy and governance documentation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        User provisioning and authentication
                    </li>
                </ul>
            </div>

            <!-- Support & Consulting -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Support & Consulting</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Implementation and deployment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Customization and configuration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        24/7 technical support
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Training and best practices
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Continuous optimization services
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Strategic Benefits</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">How VettlyGlobal's solutions drive business value</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Streamline Operations</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Automate risk management workflows and decision processes to reduce manual effort, improve efficiency, and speed up case resolution.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ensure Consistency</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Apply consistent policies and decisioning logic across all channels and touchpoints to improve customer experience and reduce risk.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improve Visibility</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Gain comprehensive insights into risk metrics and operations with advanced analytics, dashboards, and reporting capabilities.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Reduce Risk & Cost</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Lower operational costs and reduce risk with automated workflows, efficient case management, and data-driven decision-making.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ensure Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Maintain audit trails, enforce governance policies, and generate compliance reports to meet regulatory and internal requirements.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Scale Operations</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Scale risk management operations to handle increased volume without proportional increases in costs or headcount.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industry Applications -->
<section class="section" style="background: var(--bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Industry Applications</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">How corporations across sectors leverage our solutions</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 50px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Financial Services</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Orchestrate credit decisions, fraud cases, and compliance reviews with unified workflows and decisioning engine.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Insurance & Claims</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Manage claims decisions, fraud investigations, and underwriting workflows with coordinated case management.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Collections & Recovery</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Coordinate collections cases, payment arrangements, and recovery strategies with integrated workflow management.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Compliance & Investigations</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Manage compliance cases, investigations, and audit activities with centralized governance and documentation.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Multi-Channel Operations</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Coordinate risk decisions and case management across all channels with unified orchestration platform.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Enterprise Risk Management</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Unify risk management across business units and geographies with centralized decisions and governance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 80px 0; color: white;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="font-size: 2.2rem; margin-bottom: 25px;">Ready to Orchestrate Your Risk?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 40px; opacity: 0.95;">
                Discover how VettlyGlobal's risk orchestration solutions can help you streamline operations, improve consistency, and make better decisions.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg" style="background: white; color: var(--primary-color); border: none;">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Consultation
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-secondary btn-lg" style="background: transparent; border: 2px solid white; color: white;">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.page-hero {
    color: white;
}

.section-header h2 {
    color: var(--text-primary);
    font-weight: 700;
}

.section-header p {
    font-weight: 500;
}

.btn-lg {
    padding: 14px 32px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(74, 144, 226, 0.3);
}

.btn-secondary:hover {
    background: rgba(74, 144, 226, 0.1);
}

@media (max-width: 768px) {
    .page-hero {
        padding: 80px 0;
    }

    .page-hero h1 {
        font-size: 2rem;
    }

    .section-header h2 {
        font-size: 1.8rem;
    }

    .hero-content {
        max-width: 100%;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
