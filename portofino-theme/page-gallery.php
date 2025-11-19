<?php
/**
 * Template Name: Gallery
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/gallery-header.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <h1 class="page-title"><?php esc_html_e('Gallery', 'portofino-modern'); ?></h1>
        <div class="breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'portofino-modern'); ?></a>
            <span> / </span>
            <span><?php esc_html_e('Gallery', 'portofino-modern'); ?></span>
        </div>
    </div>
</div>

<section class="section section-lg gallery-section">
    <div class="container">
        <div class="text-center reveal" style="margin-bottom: var(--spacing-lg);">
            <span class="section-subtitle"><?php esc_html_e('Our Restaurant', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('A Glimpse Inside', 'portofino-modern'); ?></h2>
        </div>

        <div class="gallery-grid reveal">
            <?php
            // Get attached images or use placeholders
            $gallery_images = get_posts(array(
                'post_parent'    => get_the_ID(),
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'numberposts'    => -1,
            ));

            if ($gallery_images) :
                foreach ($gallery_images as $image) :
                    $image_url = wp_get_attachment_image_src($image->ID, 'portofino-gallery');
                    $full_url = wp_get_attachment_image_src($image->ID, 'full');
                    ?>
                    <a href="<?php echo esc_url($full_url[0]); ?>" class="gallery-item" data-lightbox="gallery">
                        <img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo esc_attr($image->post_title); ?>">
                        <div class="gallery-item-overlay">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                <line x1="11" y1="8" x2="11" y2="14"/>
                                <line x1="8" y1="11" x2="14" y2="11"/>
                            </svg>
                        </div>
                    </a>
                    <?php
                endforeach;
            else :
                // Placeholder images
                for ($i = 1; $i <= 8; $i++) :
                    ?>
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/gallery-placeholder-' . $i . '.jpg'); ?>" alt="<?php printf(esc_attr__('Gallery Image %d', 'portofino-modern'), $i); ?>">
                        <div class="gallery-item-overlay">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                <line x1="11" y1="8" x2="11" y2="14"/>
                                <line x1="8" y1="11" x2="14" y2="11"/>
                            </svg>
                        </div>
                    </div>
                    <?php
                endfor;
            endif;
            ?>
        </div>

        <div class="text-center reveal" style="margin-top: var(--spacing-xl);">
            <p style="color: var(--color-text-secondary); margin-bottom: var(--spacing-md);">
                <?php esc_html_e('Follow us on social media for more photos and updates', 'portofino-modern'); ?>
            </p>
            <?php echo portofino_social_links(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
