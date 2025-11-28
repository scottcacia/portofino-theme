<?php
/**
 * Front Page Template
 *
 * @package Portofino_Modern
 */

get_header();

// Get hero settings
$hero_bg = get_theme_mod('portofino_hero_bg', '');
$hero_title = get_theme_mod('portofino_hero_title', 'Portofino');
$hero_subtitle = get_theme_mod('portofino_hero_subtitle', 'Fine Italian Dining');
$hero_desc = get_theme_mod('portofino_hero_desc', 'Experience authentic Italian cuisine served with style in the heart of Hanley');
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background" style="background-image: url('<?php echo esc_url($hero_bg ? $hero_bg : get_template_directory_uri() . '/images/hero-placeholder.jpg'); ?>');">
    </div>
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <span class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></span>
        <h1 class="hero-title"><span class="italia-green">Por</span><span class="italia-white">tof</span><span class="italia-red">ino</span></h1>
        <p class="hero-description"><?php echo esc_html($hero_desc); ?></p>

        <div class="hero-buttons">
            <a href="<?php echo esc_url(home_url('/reservations/')); ?>" class="btn btn-primary">
                <?php esc_html_e('Book a Table', 'portofino-modern'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/menus/')); ?>" class="btn btn-outline">
                <?php esc_html_e('View Menu', 'portofino-modern'); ?>
            </a>
        </div>
    </div>

    <div class="hero-scroll">
        <a href="#about" class="scroll-indicator">
            <span><?php esc_html_e('Scroll', 'portofino-modern'); ?></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M5 12l7 7 7-7"/>
            </svg>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section section-lg about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image reveal">
                <img src="https://www.portofino-hanley.co.uk/wp-content/uploads/photo-gallery/imported_from_media_libray/025.jpg" alt="<?php esc_attr_e('Portofino Italian Food', 'portofino-modern'); ?>">
            </div>

            <div class="about-content reveal">
                <span class="section-subtitle"><?php esc_html_e('Our Story', 'portofino-modern'); ?></span>
                <h2 class="section-title"><?php esc_html_e('A Taste of Italy', 'portofino-modern'); ?></h2>

                <p class="about-text">
                    <?php esc_html_e('Welcome to Portofino, where authentic Italian cuisine meets warm hospitality. Our chefs create wholesome, satisfying meals using traditional recipes passed down through generations.', 'portofino-modern'); ?>
                </p>

                <p class="about-text">
                    <?php esc_html_e('Every dish is prepared with the finest ingredients and served with genuine care in our family-friendly atmosphere. Whether you\'re joining us for a casual lunch or a special celebration, we promise an unforgettable dining experience.', 'portofino-modern'); ?>
                </p>

                <div class="about-features">
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span><?php esc_html_e('Fresh Ingredients', 'portofino-modern'); ?></span>
                    </div>
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span><?php esc_html_e('Traditional Recipes', 'portofino-modern'); ?></span>
                    </div>
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span><?php esc_html_e('Family Friendly', 'portofino-modern'); ?></span>
                    </div>
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span><?php esc_html_e('Expert Chefs', 'portofino-modern'); ?></span>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-dark">
                    <?php esc_html_e('Learn More', 'portofino-modern'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Menu Preview Section -->
<section class="section section-lg menu-section">
    <div class="container">
        <div class="text-center reveal">
            <span class="section-subtitle"><?php esc_html_e('Our Menu', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Signature Dishes', 'portofino-modern'); ?></h2>
        </div>

        <div class="menu-categories">
            <button class="menu-tab active" data-category="starters"><?php esc_html_e('Starters', 'portofino-modern'); ?></button>
            <button class="menu-tab" data-category="pasta"><?php esc_html_e('Pasta', 'portofino-modern'); ?></button>
            <button class="menu-tab" data-category="mains"><?php esc_html_e('Mains', 'portofino-modern'); ?></button>
            <button class="menu-tab" data-category="desserts"><?php esc_html_e('Desserts', 'portofino-modern'); ?></button>
        </div>

        <div class="menu-grid reveal">
            <!-- Sample Menu Items - These would be dynamic in production -->
            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Bruschetta Classica', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;7.50</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('Toasted ciabatta topped with fresh tomatoes, basil, garlic and extra virgin olive oil', 'portofino-modern'); ?></p>
            </div>

            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Calamari Fritti', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;9.95</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('Crispy fried squid rings served with aioli and lemon wedge', 'portofino-modern'); ?></p>
            </div>

            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Carpaccio di Manzo', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;11.50</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('Thinly sliced raw beef with rocket, parmesan shavings and truffle oil', 'portofino-modern'); ?></p>
            </div>

            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Arancini', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;8.50</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('Golden fried risotto balls filled with mozzarella and peas, served with marinara', 'portofino-modern'); ?></p>
            </div>

            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Gamberoni all\'Aglio', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;12.95</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('King prawns sautéed in garlic butter, white wine and chilli flakes', 'portofino-modern'); ?></p>
            </div>

            <div class="menu-item">
                <div class="menu-item-header">
                    <span class="menu-item-name"><?php esc_html_e('Antipasto Misto', 'portofino-modern'); ?></span>
                    <span class="menu-item-price">&pound;14.95</span>
                </div>
                <p class="menu-item-description"><?php esc_html_e('Selection of Italian cured meats, cheeses, olives and marinated vegetables', 'portofino-modern'); ?></p>
            </div>
        </div>

        <div class="text-center" style="margin-top: var(--spacing-lg);">
            <a href="<?php echo esc_url(home_url('/menus/')); ?>" class="btn btn-dark">
                <?php esc_html_e('View Full Menu', 'portofino-modern'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-lg testimonials-section">
    <div class="container">
        <div class="text-center reveal">
            <span class="section-subtitle"><?php esc_html_e('Testimonials', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('What Our Guests Say', 'portofino-modern'); ?></h2>
        </div>

        <div class="testimonials-slider reveal">
            <div class="testimonial">
                <div class="testimonial-rating">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </div>
                <p class="testimonial-text">
                    <?php esc_html_e('Absolutely wonderful experience. The food was exceptional, service impeccable, and the atmosphere was perfect for our anniversary dinner. We will definitely be returning!', 'portofino-modern'); ?>
                </p>
                <span class="testimonial-author"><?php esc_html_e('John Lakey', 'portofino-modern'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/cta-placeholder.jpg'); ?>');">
    <div class="cta-overlay"></div>
    <div class="cta-content reveal">
        <span class="section-subtitle"><?php esc_html_e('Reserve Your Table', 'portofino-modern'); ?></span>
        <h2 class="section-title"><?php esc_html_e('Join Us for an Unforgettable Evening', 'portofino-modern'); ?></h2>
        <p class="cta-text">
            <?php esc_html_e('Book your table today and experience the finest Italian cuisine in Hanley. Perfect for date nights, family gatherings, or special celebrations.', 'portofino-modern'); ?>
        </p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url(home_url('/reservations/')); ?>" class="btn btn-primary">
                <?php esc_html_e('Book Now', 'portofino-modern'); ?>
            </a>
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('portofino_phone', '01782 209444'))); ?>" class="btn btn-outline">
                <?php echo esc_html(get_theme_mod('portofino_phone', '01782 209444')); ?>
            </a>
        </div>
    </div>
</section>

<!-- Contact Preview Section -->
<section class="section section-lg contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info reveal">
                <span class="section-subtitle"><?php esc_html_e('Get in Touch', 'portofino-modern'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Find Us', 'portofino-modern'); ?></h2>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4><?php esc_html_e('Address', 'portofino-modern'); ?></h4>
                        <p><?php echo nl2br(esc_html(get_theme_mod('portofino_address', 'Marsh Street, Hanley, Stoke-on-Trent, ST1 1JD'))); ?></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4><?php esc_html_e('Phone', 'portofino-modern'); ?></h4>
                        <p>
                            <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('portofino_phone', '01782 209444'))); ?>">
                                <?php echo esc_html(get_theme_mod('portofino_phone', '01782 209444')); ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4><?php esc_html_e('Email', 'portofino-modern'); ?></h4>
                        <p>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('portofino_email', 'info@portofino-hanley.co.uk')); ?>">
                                <?php echo esc_html(get_theme_mod('portofino_email', 'info@portofino-hanley.co.uk')); ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="opening-hours">
                    <h4><?php esc_html_e('Opening Hours', 'portofino-modern'); ?></h4>
                    <ul class="hours-list">
                        <li>
                            <span><?php esc_html_e('Monday - Thursday', 'portofino-modern'); ?></span>
                            <span>12:00 - 22:00</span>
                        </li>
                        <li>
                            <span><?php esc_html_e('Friday - Saturday', 'portofino-modern'); ?></span>
                            <span>12:00 - 23:00</span>
                        </li>
                        <li>
                            <span><?php esc_html_e('Sunday', 'portofino-modern'); ?></span>
                            <span>12:00 - 21:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-map reveal">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.5!2d-2.1753!3d53.0258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDAx'zM0LjkiTiAywrAxMCczMi4zIlc!5e0!3m2!1sen!2suk!4v1234567890"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
