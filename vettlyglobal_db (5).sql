-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2026 at 03:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vettlyglobal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `post_count` int(11) UNSIGNED DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `description`, `post_count`, `created_at`, `updated_at`) VALUES
(1, 'Risk Management', 'risk-management', 'Articles about risk assessment, mitigation strategies, and best practices', 1, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(2, 'Data Intelligence', 'data-intelligence', 'Insights on data analytics, business intelligence, and data-driven decision making', 1, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(3, 'Fraud Prevention', 'fraud-prevention', 'Fraud detection, prevention techniques, and security measures', 1, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(4, 'Healthcare', 'healthcare', 'Healthcare industry insights, HIPAA compliance, and healthcare data solutions', 1, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(5, 'Financial Services', 'financial-services', 'Financial compliance, banking security, and fintech innovations', 1, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(6, 'Technology', 'technology', 'Latest technology trends, innovations, and digital transformation', 0, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(7, 'Compliance', 'compliance', 'Regulatory compliance, GDPR, data protection, and legal requirements', 0, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(8, 'Industry News', 'industry-news', 'Latest news and updates from the risk solutions industry', 0, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(9, 'Case Studies', 'case-studies', 'Real-world examples and success stories from our clients', 0, '2026-02-11 13:41:13', '2026-02-11 13:41:13'),
(10, 'Best Practices', 'best-practices', 'Expert tips, guides, and best practices for businesses', 0, '2026-02-11 13:41:13', '2026-02-11 13:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_website` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` enum('pending','approved','spam','trash') DEFAULT 'pending',
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT 'VettlyGlobal Team',
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `views` int(11) UNSIGNED DEFAULT 0,
  `tags` text DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `title`, `slug`, `content`, `excerpt`, `featured_image`, `author`, `status`, `views`, `tags`, `meta_description`, `meta_keywords`, `published_date`, `created_at`, `updated_at`) VALUES
(1, 1, '10 Essential Risk Management Strategies for Modern Businesses', '10-essential-risk-management-strategies', '<h2>Introduction</h2>\r\n<p>In today\'s rapidly evolving business landscape, effective risk management is more critical than ever. Organizations face a multitude of threats ranging from cybersecurity breaches to compliance violations. This comprehensive guide explores ten essential strategies that modern businesses must implement to protect their operations and ensure long-term success.</p>\r\n\r\n<h3>1. Conduct Regular Risk Assessments</h3>\r\n<p>Regular risk assessments help identify potential threats before they become critical issues. Implement a structured approach that evaluates both internal and external risks quarterly.</p>\r\n\r\n<h3>2. Implement Strong Data Security Measures</h3>\r\n<p>Data breaches can be devastating. Invest in robust cybersecurity infrastructure, including encryption, multi-factor authentication, and regular security audits.</p>\r\n\r\n<h3>3. Develop a Comprehensive Compliance Program</h3>\r\n<p>Stay ahead of regulatory requirements by establishing a dedicated compliance team that monitors changes in regulations and ensures your organization remains compliant.</p>\r\n\r\n<h3>4. Create a Business Continuity Plan</h3>\r\n<p>Prepare for the unexpected with a detailed business continuity plan that outlines procedures for maintaining operations during disruptions.</p>\r\n\r\n<h3>5. Foster a Risk-Aware Culture</h3>\r\n<p>Employee training and awareness are crucial. Regular workshops and communication about risk management create a culture where everyone takes responsibility for identifying and mitigating risks.</p>\r\n\r\n<h3>6. Utilize Advanced Analytics</h3>\r\n<p>Leverage data analytics and artificial intelligence to predict and prevent potential risks before they materialize.</p>\r\n\r\n<h3>7. Maintain Insurance Coverage</h3>\r\n<p>Comprehensive insurance coverage provides a safety net for unexpected events that could impact your business financially.</p>\r\n\r\n<h3>8. Establish Clear Governance Structures</h3>\r\n<p>Define roles, responsibilities, and accountability frameworks to ensure risk management is integrated into decision-making at all levels.</p>\r\n\r\n<h3>9. Monitor Third-Party Risks</h3>\r\n<p>Your vendors and partners can introduce risks. Implement vendor risk management programs to assess and monitor third-party relationships.</p>\r\n\r\n<h3>10. Continuously Improve</h3>\r\n<p>Risk management is not a one-time effort. Regularly review and update your strategies based on emerging threats and changing business conditions.</p>\r\n\r\n<h2>Conclusion</h2>\r\n<p>Implementing these ten strategies will help your organization build resilience and protect against potential threats. Remember, effective risk management is an ongoing process that requires commitment from leadership and participation from all employees.</p>', NULL, NULL, 'Sarah Johnson', 'published', 267, 'risk management, business strategy, compliance, security', 'Discover 10 essential risk management strategies that modern businesses must implement to protect their operations and ensure long-term success.', NULL, '2024-01-15 09:00:00', '2026-02-11 13:41:13', '2026-02-17 22:12:44'),
(2, 2, 'The Future of Data Intelligence: Trends to Watch in 2024', 'future-of-data-intelligence-2024', '<h2>The Evolution of Data Intelligence</h2>\r\n<p>Data intelligence is transforming how organizations make decisions and operate. As we progress through 2024, several key trends are reshaping the landscape of business intelligence and analytics.</p>\r\n\r\n<h3>AI-Powered Analytics</h3>\r\n<p>Artificial intelligence is revolutionizing data analysis, enabling organizations to process vast amounts of information quickly and uncover insights that would be impossible to detect manually.</p>\r\n\r\n<h3>Real-Time Decision Making</h3>\r\n<p>The demand for real-time data processing is growing. Businesses need instant insights to respond quickly to market changes and customer needs.</p>\r\n\r\n<h3>Predictive Analytics</h3>\r\n<p>Advanced predictive models help organizations anticipate future trends, customer behavior, and potential risks, allowing for proactive rather than reactive strategies.</p>\r\n\r\n<h3>Data Privacy and Ethics</h3>\r\n<p>As data collection expands, organizations must balance intelligence gathering with privacy concerns and ethical considerations.</p>\r\n\r\n<h2>Conclusion</h2>\r\n<p>The future of data intelligence is bright, with technology enabling more sophisticated analysis and insights than ever before. Organizations that embrace these trends will gain a competitive advantage in their industries.</p>', NULL, NULL, 'Michael Chen', 'published', 198, 'data intelligence, analytics, AI, business intelligence', 'Explore the latest trends in data intelligence for 2024 and learn how AI and analytics are transforming business decision-making.', NULL, '2024-02-01 10:30:00', '2026-02-11 13:41:13', '2026-02-17 22:12:44'),
(3, 3, 'How to Build a Robust Fraud Prevention System', 'build-robust-fraud-prevention-system', '<h2>Understanding Modern Fraud Threats</h2>\r\n<p>Fraud is becoming increasingly sophisticated, with cybercriminals using advanced techniques to exploit vulnerabilities. Building a robust fraud prevention system requires a multi-layered approach.</p>\r\n\r\n<h3>Identity Verification</h3>\r\n<p>Implement strong identity verification processes including document verification, biometric authentication, and knowledge-based verification.</p>\r\n\r\n<h3>Transaction Monitoring</h3>\r\n<p>Real-time transaction monitoring systems can identify suspicious patterns and flag potentially fraudulent activities immediately.</p>\r\n\r\n<h3>Machine Learning Detection</h3>\r\n<p>Machine learning algorithms can analyze patterns and detect anomalies that indicate fraudulent behavior, improving accuracy over time.</p>\r\n\r\n<h3>Multi-Factor Authentication</h3>\r\n<p>Require multiple forms of authentication to access sensitive systems and data, making it harder for fraudsters to gain unauthorized access.</p>\r\n\r\n<h2>Best Practices</h2>\r\n<p>Regular audits, employee training, and staying updated on the latest fraud trends are essential components of an effective fraud prevention strategy.</p>', NULL, NULL, 'David Martinez', 'published', 314, 'fraud prevention, security, identity verification, cybersecurity', 'Learn how to build a comprehensive fraud prevention system to protect your organization from modern fraud threats and cybercrime.', NULL, '2024-02-10 14:00:00', '2026-02-11 13:41:13', '2026-02-17 22:12:44'),
(4, 4, 'Healthcare Data Security: HIPAA Compliance Best Practices', 'healthcare-data-security-hipaa-compliance', '<h2>The Importance of Healthcare Data Security</h2>\r\n<p>Healthcare organizations handle some of the most sensitive personal information, making data security and HIPAA compliance critical priorities.</p>\r\n\r\n<h3>Understanding HIPAA Requirements</h3>\r\n<p>HIPAA establishes national standards for protecting patient health information. Organizations must implement administrative, physical, and technical safeguards.</p>\r\n\r\n<h3>Key Compliance Measures</h3>\r\n<ul>\r\n<li>Conduct regular risk assessments</li>\r\n<li>Implement access controls and authentication</li>\r\n<li>Encrypt data in transit and at rest</li>\r\n<li>Train staff on HIPAA requirements</li>\r\n<li>Maintain detailed audit logs</li>\r\n</ul>\r\n\r\n<h3>Data Breach Prevention</h3>\r\n<p>Prevention is better than cure. Implement proactive measures to prevent data breaches, including network security, endpoint protection, and regular security audits.</p>\r\n\r\n<h2>Conclusion</h2>\r\n<p>HIPAA compliance is not just about avoiding penalties—it\'s about protecting patient privacy and maintaining trust in healthcare systems.</p>', NULL, NULL, 'Dr. Emily Roberts', 'published', 292, 'healthcare, HIPAA, compliance, data security, patient privacy', 'Essential HIPAA compliance best practices for healthcare organizations to protect patient data and maintain regulatory compliance.', NULL, '2024-02-15 11:00:00', '2026-02-11 13:41:13', '2026-02-27 02:07:37'),
(5, 5, 'Financial Services in the Digital Age: Balancing Innovation and Security', 'financial-services-digital-age-innovation-security', '<h2>The Digital Transformation of Financial Services</h2>\r\n<p>The financial services industry is undergoing rapid digital transformation, with new technologies offering unprecedented opportunities and challenges.</p>\r\n\r\n<h3>Fintech Innovations</h3>\r\n<p>Digital banking, blockchain, cryptocurrency, and mobile payments are revolutionizing how financial services are delivered and consumed.</p>\r\n\r\n<h3>Security Challenges</h3>\r\n<p>With increased digitalization comes increased risk. Financial institutions must invest heavily in cybersecurity to protect customer assets and data.</p>\r\n\r\n<h3>Regulatory Compliance</h3>\r\n<p>Navigate complex regulatory requirements including KYC (Know Your Customer), AML (Anti-Money Laundering), and data protection regulations.</p>\r\n\r\n<h3>Customer Experience</h3>\r\n<p>Balance security with user experience. Implement friction-right security that protects without creating unnecessary barriers for legitimate customers.</p>\r\n\r\n<h2>The Path Forward</h2>\r\n<p>Success in the digital age requires financial institutions to embrace innovation while maintaining the highest standards of security and compliance.</p>', NULL, NULL, 'Robert Anderson', 'published', 229, 'financial services, fintech, digital banking, security, compliance', 'Explore how financial services organizations can balance innovation and security in the digital age while meeting regulatory requirements.', NULL, '2024-02-20 09:30:00', '2026-02-11 13:41:13', '2026-02-26 23:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `form_type` varchar(50) DEFAULT 'contact',
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `source_page` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('new','contacted','qualified','converted','closed') DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `form_type`, `full_name`, `email`, `phone`, `company_name`, `industry`, `country`, `message`, `source_page`, `ip_address`, `user_agent`, `status`, `created_at`) VALUES
(1, 'contact', 'test', 'testusrwe@aslksdklff.com', '+1-310-358-5176', 'test', NULL, NULL, 'asdsdsadadadadd', 'http://localhost/VattleyGlobal/contact/', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'new', '2026-02-12 22:17:16'),
(2, 'contact', 'test', 'testusrwe@aslksdklff.com', '+1-310-358-5176', 'test', NULL, NULL, 'asdsdsadadadadd', 'http://localhost/VattleyGlobal/contact/', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'new', '2026-02-12 22:19:54'),
(3, 'contact', 'my test', 'testttt@testtt.com', '+1-645-300-7537', 'my test', NULL, NULL, 'my testasdasdsadasdsdsd', 'http://localhost/VattleyGlobal/contact/', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'new', '2026-02-12 22:23:17'),
(4, 'contact', 'Abdul', 'haseebhanifsyscrowd@gmail.com', '+1-645-300-7537', 'tedy', NULL, NULL, 'fsdfsdfdffdsfsdfdf', 'http://localhost/VattleyGlobal/contact/', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'new', '2026-02-16 21:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('active','unsubscribed') DEFAULT 'active',
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `unsubscribed_at` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `status`, `subscribed_at`, `unsubscribed_at`, `ip_address`) VALUES
(1, 'test@test.com', 'active', '2026-02-12 17:07:00', NULL, NULL),
(2, 'test222@test.com', 'active', '2026-02-12 22:05:08', NULL, NULL),
(4, 'haseebhanifsyscrowd@gmail.com', 'active', '2026-02-12 22:13:59', NULL, NULL),
(5, 'testttt@testtt.com', 'active', '2026-02-12 22:16:15', NULL, NULL),
(6, 'testusrwe@aslksdklff.com', 'active', '2026-02-16 16:30:30', NULL, NULL),
(7, 'haseebbhai@gmail.com', 'active', '2026-02-16 18:11:44', NULL, NULL),
(8, 'hussan@gmail.com', 'active', '2026-02-17 17:13:37', NULL, NULL),
(9, 'phillip@gmai.com', 'active', '2026-02-17 20:57:47', NULL, NULL),
(10, 'hammad@gmail.com', 'active', '2026-02-26 22:12:10', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `status` (`status`),
  ADD KEY `published_date` (`published_date`),
  ADD KEY `idx_category_status` (`category_id`,`status`),
  ADD KEY `idx_status_published` (`status`,`published_date`);
ALTER TABLE `blog_posts` ADD FULLTEXT KEY `search` (`title`,`content`,`tags`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `form_type` (`form_type`),
  ADD KEY `created_at` (`created_at`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `subscribed_at` (`subscribed_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `fk_blog_comments_parent` FOREIGN KEY (`parent_id`) REFERENCES `blog_comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_blog_comments_post` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk_blog_posts_category` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
