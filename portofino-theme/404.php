<?php
/**
 * 404 Page Template
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/page-header-placeholder.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <h1 class="page-title"><?php esc_html_e('Page Not Found', 'portofino-modern'); ?></h1>
    </div>
</div>

<section class="section section-lg">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 6rem; color: var(--color-secondary); margin-bottom: var(--spacing-sm);">404</h2>
        <p style="font-size: 1.25rem; color: var(--color-text-secondary); margin-bottom: var(--spacing-lg);">
            <?php esc_html_e('Sorry, the page you are looking for could not be found.', 'portofino-modern'); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
            <?php esc_html_e('Return Home', 'portofino-modern'); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
