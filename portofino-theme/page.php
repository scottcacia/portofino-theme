<?php
/**
 * Default Page Template
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/page-header-placeholder.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'portofino-modern'); ?></a>
            <span> / </span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'portofino-modern'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
