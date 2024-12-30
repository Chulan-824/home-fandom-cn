<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <!-- 移动端导航 -->
    <nav class="mobile-nav">
        <div class="mobile-nav__header">
            <a href="<?php echo home_url('/'); ?>" class="mobile-nav__logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="logo" class="mobile-nav__logo-image" />
            </a>
            <button class="mobile-nav__toggle" aria-label="Toggle menu">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_menu.svg" class="mobile-nav__menu-icon" alt="menu" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_menu_close.svg" class="mobile-nav__close-icon" alt="close menu" />
            </button>
        </div>

        <div class="mobile-nav__content">
            <div class="mobile-nav__links">
                <a href="/products" class="mobile-nav__link">
                    <span class="mobile-nav__link-text">Products</span>
                </a>
                <a href="/contact" class="mobile-nav__link">
                    <span class="mobile-nav__link-text">Contact Us</span>
                </a>
                <a href="https://apply.workable.com/crazymaplestudio/" class="mobile-nav__link">
                    <span class="mobile-nav__link-text">Join Us</span>
                </a>
                <a href="/about" class="mobile-nav__link">
                    <span class="mobile-nav__link-text">About Us</span>
                </a>
                <a href="/fandom" class="mobile-nav__link">
                    <span class="mobile-nav__link-text">Fandom</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- 桌面端导航 -->
    <nav class="desktop-nav">
        <div class="desktop-nav__container">
            <div class="desktop-nav__left">
                <a href="<?php echo home_url('/'); ?>" class="desktop-nav__logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/logo.svg'); ?>" alt="logo" class="desktop-nav__logo-image" />
                </a>

                <div class="desktop-nav__links">
                    <a href="/products" class="desktop-nav__link">
                        <span class="desktop-nav__link-text">Products</span>
                    </a>
                    <a href="/contact" class="desktop-nav__link">
                        <span class="desktop-nav__link-text">Contact Us</span>
                    </a>
                    <a href="https://apply.workable.com/crazymaplestudio/" class="desktop-nav__link" target="_blank" rel="noopener noreferrer">
                        <span class="desktop-nav__link-text">Join Us</span>
                    </a>
                    <a href="/about" class="desktop-nav__link">
                        <span class="desktop-nav__link-text">About Us</span>
                    </a>
                    <a href="/fandom" class="desktop-nav__link">
                        <span class="desktop-nav__link-text">Fandom</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
document.querySelector('.mobile-nav__toggle').addEventListener('click', function() {
    document.querySelector('.mobile-nav').classList.toggle('active');
});
</script>
</body>
</html> 