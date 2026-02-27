<?php
/**
 * Financial Services - Risk Orchestration Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Risk Orchestration Solutions';
$meta_description = 'Integrated risk orchestration platform for financial institutions. Unified customer risk management, risk scoring, and decisioning across all channels and processes.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/financial-services'); ?>" style="color: white;">Financial Services</a>
                <span style="margin: 0 10px;">/</span>
                <span>Risk Orchestration</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Risk Orchestration Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Unified risk management across your entire organization. Integrated customer risk scoring, decisioning, and case management for consistent risk mitigation.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Risk Orchestration Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Risk Orchestration platform provides a unified approach to managing customer risk across all processes and channels. By integrating credit risk, fraud risk, compliance risk, and operational risk into a single decision engine, our platform enables consistent risk mitigation while optimizing customer experience and operational efficiency.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From customer onboarding through account management and collections, our platform delivers unified risk scoring, orchestrated decision-making, and comprehensive case management to protect your institution and customers.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Integrated risk management and orchestration platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-poll" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Unified Customer Risk Scoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Integrated scoring that combines credit risk, fraud risk, compliance risk, and behavioral indicators. Single risk score for consistent customer risk assessment across all processes.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-cogs" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Orchestrated Decision Engine</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Centralized decision logic that coordinates decisions across multiple risk domains. Prevent conflicting decisions and ensure consistent policy application.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tasks" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Integrated Case Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Unified case management for investigations, reviews, and escalations. Track all risk-related activities for a customer throughout their lifecycle.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bell" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Multi-Domain Alert Orchestration</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Consolidate alerts from fraud, AML, credit, and compliance systems. Intelligent alert prioritization to focus on highest-risk situations first.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-exchange-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Policy Enforcement</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Configure and enforce risk policies in real-time across all channels. Automatically apply rules for approvals, denials, and escalations based on risk score and policy.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Analytics & Reporting</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Comprehensive reporting on risk metrics, decisions, and outcomes. Measure model performance and identify opportunities for improvement across all risk domains.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Benefits -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Regulatory Benefits</h2>
            <p>Unified approach to comprehensive compliance and risk management</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Integrated Risk Framework</h3>
                <p style="color: var(--text-secondary);">
                    Demonstrate comprehensive risk management framework combining credit, fraud, compliance, and operational risk domains to regulators.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Policy Governance</h3>
                <p style="color: var(--text-secondary);">
                    Centralized policy management and governance. Document policy decisions, approvals, and evidence of policy compliance for regulatory review.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Fair Lending Monitoring</h3>
                <p style="color: var(--text-secondary);">
                    Integrated monitoring of decisions for fair lending compliance. Ensure non-discriminatory risk assessment and decision-making across protected classes.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Model Governance</h3>
                <p style="color: var(--text-secondary);">
                    Document model performance, validation, and governance. Ensure all models meet regulatory standards and are properly validated and monitored.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Audit Trail & Transparency</h3>
                <p style="color: var(--text-secondary);">
                    Complete audit trails of all decisions and policy applications. Provide evidence of compliance with regulatory requirements and policy requirements.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Risk Reporting</h3>
                <p style="color: var(--text-secondary);">
                    Risk dashboards and reporting for management and regulators. Support stress testing, capital planning, and regulatory examination requests.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Common Use Cases</h2>
            <p>How institutions optimize risk management</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Customer Onboarding Orchestration</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Coordinate KYC, AML, fraud, and credit risk checks during onboarding. Single decision point that incorporates all risk dimensions for account opening decisions.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Transaction Risk Assessment</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Assess transaction risk by combining fraud, compliance, and behavioral risk factors. Make real-time decisions on transaction approval/denial and authentication requirements.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Credit Decision Orchestration</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Coordinate credit risk with fraud, AML, and compliance risk assessment. Make lending decisions that consider all risk domains for better outcomes.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Customer Monitoring & Escalation</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor customers across all risk domains. Intelligent alert consolidation and escalation when customers trigger multiple risk thresholds simultaneously.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Enhanced Due Diligence Coordination</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Coordinate enhanced due diligence investigations across compliance, fraud, and credit risk teams. Single case management interface for all risk investigations.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Regulatory Reporting Consolidation</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Consolidate risk data from multiple sources for regulatory reporting. Support compliance reporting with consistent risk assessments across all dimensions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Orchestrate Your Risk Management</h2>
            <p>Integrate risk management across your entire organization. Unified risk scoring and orchestrated decision-making for consistent risk mitigation and better outcomes.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.use-cases-grid > div:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.compliance-grid > div {
    transition: var(--transition);
}

.compliance-grid > div:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-lg);
}
</style>

<?php include '../../includes/footer.php'; ?>
