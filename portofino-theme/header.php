<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portofino-modern'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-inner">
                <!-- Logo -->
                <div class="site-branding">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                            Porto<span>fino</span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Navigation -->
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'walker'         => new Portofino_Nav_Walker(),
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="screen-reader-text"><?php esc_html_e('Menu', 'portofino-modern'); ?></span>
                </button>
            </div>
        </div>
    </header>

    <main id="primary" class="site-main">
