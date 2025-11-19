<?php
/**
 * Portofino Modern Theme Functions
 *
 * @package Portofino_Modern
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function portofino_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

    // Add image sizes
    add_image_size('portofino-hero', 1920, 1080, true);
    add_image_size('portofino-gallery', 600, 600, true);
    add_image_size('portofino-thumbnail', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'portofino-modern'),
        'footer'    => esc_html__('Footer Menu', 'portofino-modern'),
    ));
}
add_action('after_setup_theme', 'portofino_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function portofino_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'portofino-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'portofino-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'portofino-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('portofino-main', 'portofinoData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('portofino_nonce'),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'portofino_enqueue_scripts');

/**
 * Register Widget Areas
 */
function portofino_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'portofino-modern'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here for footer column 1.', 'portofino-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'portofino-modern'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here for footer column 2.', 'portofino-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'portofino_widgets_init');

/**
 * Customizer Settings
 */
function portofino_customize_register($wp_customize) {
    // Restaurant Information Section
    $wp_customize->add_section('portofino_restaurant_info', array(
        'title'    => esc_html__('Restaurant Information', 'portofino-modern'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('portofino_phone', array(
        'default'           => '01782 209444',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_phone', array(
        'label'    => esc_html__('Phone Number', 'portofino-modern'),
        'section'  => 'portofino_restaurant_info',
        'type'     => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('portofino_email', array(
        'default'           => 'info@portofino-hanley.co.uk',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_email', array(
        'label'    => esc_html__('Email Address', 'portofino-modern'),
        'section'  => 'portofino_restaurant_info',
        'type'     => 'email',
    ));

    // Address
    $wp_customize->add_setting('portofino_address', array(
        'default'           => 'Marsh Street, Hanley, Stoke-on-Trent, ST1 1JD',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_address', array(
        'label'    => esc_html__('Address', 'portofino-modern'),
        'section'  => 'portofino_restaurant_info',
        'type'     => 'textarea',
    ));

    // Opening Hours
    $wp_customize->add_setting('portofino_hours', array(
        'default'           => "Monday - Thursday: 12:00 - 22:00\nFriday - Saturday: 12:00 - 23:00\nSunday: 12:00 - 21:00",
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_hours', array(
        'label'    => esc_html__('Opening Hours', 'portofino-modern'),
        'section'  => 'portofino_restaurant_info',
        'type'     => 'textarea',
    ));

    // Social Media Section
    $wp_customize->add_section('portofino_social', array(
        'title'    => esc_html__('Social Media', 'portofino-modern'),
        'priority' => 35,
    ));

    $social_networks = array('facebook', 'instagram', 'twitter', 'tripadvisor');

    foreach ($social_networks as $network) {
        $wp_customize->add_setting('portofino_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));

        $wp_customize->add_control('portofino_' . $network, array(
            'label'    => ucfirst($network) . ' URL',
            'section'  => 'portofino_social',
            'type'     => 'url',
        ));
    }

    // Hero Section
    $wp_customize->add_section('portofino_hero', array(
        'title'    => esc_html__('Hero Section', 'portofino-modern'),
        'priority' => 40,
    ));

    // Hero Background Image
    $wp_customize->add_setting('portofino_hero_bg', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portofino_hero_bg', array(
        'label'    => esc_html__('Hero Background Image', 'portofino-modern'),
        'section'  => 'portofino_hero',
    )));

    // Hero Title
    $wp_customize->add_setting('portofino_hero_title', array(
        'default'           => 'Portofino',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_hero_title', array(
        'label'    => esc_html__('Hero Title', 'portofino-modern'),
        'section'  => 'portofino_hero',
        'type'     => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('portofino_hero_subtitle', array(
        'default'           => 'Fine Italian Dining',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_hero_subtitle', array(
        'label'    => esc_html__('Hero Subtitle', 'portofino-modern'),
        'section'  => 'portofino_hero',
        'type'     => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('portofino_hero_desc', array(
        'default'           => 'Experience authentic Italian cuisine served with style in the heart of Hanley',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('portofino_hero_desc', array(
        'label'    => esc_html__('Hero Description', 'portofino-modern'),
        'section'  => 'portofino_hero',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'portofino_customize_register');

/**
 * Custom Menu Walker for Navigation
 */
class Portofino_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}

/**
 * Add custom body classes
 */
function portofino_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'front-page';
    }

    if (is_singular()) {
        $classes[] = 'singular';
    }

    return $classes;
}
add_filter('body_class', 'portofino_body_classes');

/**
 * Excerpt length
 */
function portofino_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'portofino_excerpt_length');

/**
 * Excerpt more
 */
function portofino_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'portofino_excerpt_more');

/**
 * Get theme option helper
 */
function portofino_get_option($option, $default = '') {
    return get_theme_mod('portofino_' . $option, $default);
}

/**
 * Display social links
 */
function portofino_social_links() {
    $networks = array(
        'facebook'    => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z',
        'instagram'   => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z',
        'twitter'     => 'M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z',
        'tripadvisor' => 'M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 00-1.963 4.437c0 3.314 2.686 6 6 6 2.186 0 4.101-1.175 5.13-2.926l.876 1.498.876-1.498c1.029 1.751 2.944 2.926 5.13 2.926 3.314 0 6-2.686 6-6a5.997 5.997 0 00-1.963-4.437L24 6.648h-4.359c-2.307-1.569-4.975-2.353-7.645-2.353h.01zm0 2.18c1.893 0 3.73.565 5.328 1.64H6.678a11.99 11.99 0 015.328-1.64zm-6 3.96c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm12 0c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm-12 1.2c-1.54 0-2.8 1.26-2.8 2.8s1.26 2.8 2.8 2.8 2.8-1.26 2.8-2.8-1.26-2.8-2.8-2.8zm12 0c-1.54 0-2.8 1.26-2.8 2.8s1.26 2.8 2.8 2.8 2.8-1.26 2.8-2.8-1.26-2.8-2.8-2.8z'
    );

    $output = '<div class="social-links">';

    foreach ($networks as $network => $path) {
        $url = get_theme_mod('portofino_' . $network, '');
        if ($url) {
            $output .= sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="%s"/>
                    </svg>
                </a>',
                esc_url($url),
                esc_attr(ucfirst($network)),
                $path
            );
        }
    }

    $output .= '</div>';

    return $output;
}

/**
 * AJAX handler for reservation form
 */
function portofino_handle_reservation() {
    check_ajax_referer('portofino_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $date    = sanitize_text_field($_POST['date'] ?? '');
    $time    = sanitize_text_field($_POST['time'] ?? '');
    $guests  = intval($_POST['guests'] ?? 2);
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time)) {
        wp_send_json_error('Please fill in all required fields.');
    }

    // Email to restaurant
    $to      = get_theme_mod('portofino_email', get_option('admin_email'));
    $subject = sprintf('New Reservation Request from %s', $name);
    $body    = sprintf(
        "New reservation request:\n\nName: %s\nEmail: %s\nPhone: %s\nDate: %s\nTime: %s\nGuests: %d\nMessage: %s",
        $name, $email, $phone, $date, $time, $guests, $message
    );
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Your reservation request has been sent. We will contact you shortly to confirm.');
    } else {
        wp_send_json_error('There was an error sending your request. Please call us directly.');
    }
}
add_action('wp_ajax_portofino_reservation', 'portofino_handle_reservation');
add_action('wp_ajax_nopriv_portofino_reservation', 'portofino_handle_reservation');

/**
 * Include additional files
 */
require_once get_template_directory() . '/inc/template-tags.php';
