<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title><?php echo isset($page_title) ? page_title($page_title) : DEFAULT_META_TITLE; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? clean($meta_description) : DEFAULT_META_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? clean($meta_keywords) : DEFAULT_META_KEYWORDS; ?>">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo isset($page_title) ? page_title($page_title) : DEFAULT_META_TITLE; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? clean($meta_description) : DEFAULT_META_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('images/logo/favicon.png'); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/megamenu.css'); ?>">

    <?php if(isset($extra_css)): ?>
        <?php echo $extra_css; ?>
    <?php endif; ?>
</head>
<body>

<!-- Header -->
<header class="site-header">
    <!-- Header Top Bar -->
    <!-- <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <div class="header-contact">
                    <a href="tel:<?php echo COMPANY_PHONE; ?>">
                        <i class="fas fa-phone"></i>
                        <span><?php echo COMPANY_PHONE; ?></span>
                    </a>
                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo COMPANY_EMAIL; ?></span>
                    </a>
                </div>
                <div class="header-social">
                    <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Header Main -->
    <div class="header-main">
        <div class="container">
            <div class="header-main-content">
                <!-- Logo -->
                <a href="<?php echo url(); ?>" class="site-logo">
                    <img src="<?php echo asset('images/logo/logo.svg'); ?>" alt="<?php echo SITE_NAME; ?> Logo">
                    <div class="site-logo-text">
                        <!-- <span class="site-logo-name"><?php echo SITE_NAME; ?></span> -->
                        <!-- <span class="site-logo-tagline"><?php echo SITE_TAGLINE; ?></span> -->
                    </div>
                </a>

                <!-- Navigation -->
                <?php include 'navigation.php'; ?>

                <!-- Mobile Menu Toggle -->
                <div class="mobile-menu-toggle" id="mobileMenuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Flash Messages -->
<?php
$flash = get_flash();
if ($flash):
?>
<div class="flash-message flash-<?php echo $flash['type']; ?>">
    <div class="container">
        <div class="flash-content">
            <i class="fas fa-<?php echo $flash['type'] === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
            <span><?php echo clean($flash['message']); ?></span>
            <button class="flash-close">&times;</button>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Main Content -->
<main id="main-content">
