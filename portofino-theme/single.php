<?php
/**
 * Single Post Template
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
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php esc_html_e('Blog', 'portofino-modern'); ?></a>
            <span> / </span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 800px;">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-meta" style="margin-bottom: var(--spacing-md); font-size: 0.875rem; color: var(--color-text-muted);">
                    <?php portofino_posted_on(); ?> | <?php portofino_posted_by(); ?>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: var(--spacing-md);">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: var(--radius-md);')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.125rem; line-height: 1.8;">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'portofino-modern'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="entry-footer" style="margin-top: var(--spacing-lg); padding-top: var(--spacing-md); border-top: 1px solid #eee;">
                    <?php portofino_entry_footer(); ?>
                </footer>
            </article>

            <?php
            // Post navigation
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'portofino-modern') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'portofino-modern') . '</span> <span class="nav-title">%title</span>',
            ));

            // Comments
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
