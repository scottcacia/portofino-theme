<?php
/**
 * The main template file
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/page-header-placeholder.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <?php if (is_home() && !is_front_page()) : ?>
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        <?php elseif (is_archive()) : ?>
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
        <?php elseif (is_search()) : ?>
            <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'portofino-modern'), get_search_query()); ?></h1>
        <?php else : ?>
            <h1 class="page-title"><?php esc_html_e('Blog', 'portofino-modern'); ?></h1>
        <?php endif; ?>
    </div>
</div>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>

            <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-md);">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="background: white; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                <?php the_post_thumbnail('portofino-thumbnail', array('style' => 'width: 100%; height: 200px; object-fit: cover;')); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-content" style="padding: var(--spacing-md);">
                            <h2 class="post-title" style="font-size: 1.25rem; margin-bottom: var(--spacing-xs);">
                                <a href="<?php the_permalink(); ?>" style="color: var(--color-text-primary); text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="post-meta" style="font-size: 0.8125rem; color: var(--color-text-muted); margin-bottom: var(--spacing-sm);">
                                <?php portofino_posted_on(); ?>
                            </div>

                            <div class="post-excerpt" style="font-size: 0.875rem; color: var(--color-text-secondary);">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="read-more" style="display: inline-block; margin-top: var(--spacing-sm); font-size: 0.875rem; font-weight: 600; color: var(--color-secondary);">
                                <?php esc_html_e('Read More', 'portofino-modern'); ?> &rarr;
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination" style="margin-top: var(--spacing-lg); text-align: center;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => esc_html__('&laquo; Previous', 'portofino-modern'),
                    'next_text' => esc_html__('Next &raquo;', 'portofino-modern'),
                ));
                ?>
            </div>

        <?php else : ?>

            <div class="no-results" style="text-align: center; padding: var(--spacing-xl) 0;">
                <h2><?php esc_html_e('Nothing Found', 'portofino-modern'); ?></h2>
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'portofino-modern'); ?></p>
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
