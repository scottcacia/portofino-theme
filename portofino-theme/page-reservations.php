<?php
/**
 * Template Name: Reservations
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/reservations-header.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <h1 class="page-title"><?php esc_html_e('Reservations', 'portofino-modern'); ?></h1>
        <div class="breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'portofino-modern'); ?></a>
            <span> / </span>
            <span><?php esc_html_e('Reservations', 'portofino-modern'); ?></span>
        </div>
    </div>
</div>

<section class="section section-lg">
    <div class="container">
        <div class="text-center reveal" style="margin-bottom: var(--spacing-lg);">
            <span class="section-subtitle"><?php esc_html_e('Book a Table', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Reserve Your Experience', 'portofino-modern'); ?></h2>
            <p style="max-width: 600px; margin: var(--spacing-md) auto 0; color: var(--color-text-secondary);">
                <?php esc_html_e('Complete the form below to request a reservation. We will contact you to confirm your booking.', 'portofino-modern'); ?>
            </p>
        </div>

        <form id="reservation-form" class="reservation-form reveal">
            <div class="form-row">
                <div class="form-group">
                    <label for="res-name"><?php esc_html_e('Full Name', 'portofino-modern'); ?> *</label>
                    <input type="text" id="res-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="res-email"><?php esc_html_e('Email Address', 'portofino-modern'); ?> *</label>
                    <input type="email" id="res-email" name="email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="res-phone"><?php esc_html_e('Phone Number', 'portofino-modern'); ?> *</label>
                    <input type="tel" id="res-phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="res-guests"><?php esc_html_e('Number of Guests', 'portofino-modern'); ?> *</label>
                    <select id="res-guests" name="guests" required>
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php selected($i, 2); ?>>
                                <?php echo $i; ?> <?php echo $i === 1 ? esc_html__('Guest', 'portofino-modern') : esc_html__('Guests', 'portofino-modern'); ?>
                            </option>
                        <?php endfor; ?>
                        <option value="10+"><?php esc_html_e('10+ Guests (Large Party)', 'portofino-modern'); ?></option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="res-date"><?php esc_html_e('Preferred Date', 'portofino-modern'); ?> *</label>
                    <input type="date" id="res-date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                    <label for="res-time"><?php esc_html_e('Preferred Time', 'portofino-modern'); ?> *</label>
                    <select id="res-time" name="time" required>
                        <option value=""><?php esc_html_e('Select Time', 'portofino-modern'); ?></option>
                        <option value="12:00">12:00 PM</option>
                        <option value="12:30">12:30 PM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="13:30">1:30 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="17:00">5:00 PM</option>
                        <option value="17:30">5:30 PM</option>
                        <option value="18:00">6:00 PM</option>
                        <option value="18:30">6:30 PM</option>
                        <option value="19:00">7:00 PM</option>
                        <option value="19:30">7:30 PM</option>
                        <option value="20:00">8:00 PM</option>
                        <option value="20:30">8:30 PM</option>
                        <option value="21:00">9:00 PM</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="res-message"><?php esc_html_e('Special Requests', 'portofino-modern'); ?></label>
                <textarea id="res-message" name="message" rows="4" placeholder="<?php esc_attr_e('Dietary requirements, special occasions, seating preferences...', 'portofino-modern'); ?>"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <?php esc_html_e('Request Reservation', 'portofino-modern'); ?>
                </button>
            </div>

            <div id="reservation-message" style="margin-top: var(--spacing-md); text-align: center;"></div>
        </form>

        <div class="text-center" style="margin-top: var(--spacing-lg);">
            <p style="color: var(--color-text-secondary);">
                <?php esc_html_e('For immediate reservations or large parties, please call us directly:', 'portofino-modern'); ?>
            </p>
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('portofino_phone', '01782 209444'))); ?>" class="btn btn-dark" style="margin-top: var(--spacing-sm);">
                <?php echo esc_html(get_theme_mod('portofino_phone', '01782 209444')); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
