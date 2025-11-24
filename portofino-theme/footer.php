    </main><!-- #primary -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-main">
                <!-- About Column -->
                <div class="footer-about">
                    <div class="footer-logo"><span class="italia-green">Por</span><span class="italia-white">tof</span><span class="italia-red">ino</span></div>
                    <p><?php esc_html_e('Experience authentic Italian cuisine in the heart of Hanley. Our family recipes and warm hospitality have been delighting guests since opening our doors.', 'portofino-modern'); ?></p>
                    <?php echo portofino_social_links(); ?>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h4 class="footer-heading"><?php esc_html_e('Quick Links', 'portofino-modern'); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-links',
                        'container'      => false,
                        'fallback_cb'    => 'portofino_footer_fallback_menu',
                        'depth'          => 1,
                    ));
                    ?>
                </div>

                <!-- Opening Hours -->
                <div class="footer-column">
                    <h4 class="footer-heading"><?php esc_html_e('Opening Hours', 'portofino-modern'); ?></h4>
                    <ul class="footer-links">
                        <?php
                        $hours = get_theme_mod('portofino_hours', "Monday - Thursday: 12:00 - 22:00\nFriday - Saturday: 12:00 - 23:00\nSunday: 12:00 - 21:00");
                        $hours_array = explode("\n", $hours);
                        foreach ($hours_array as $hour) :
                            if (trim($hour)) :
                        ?>
                            <li><?php echo esc_html(trim($hour)); ?></li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-column footer-contact">
                    <h4 class="footer-heading"><?php esc_html_e('Contact Us', 'portofino-modern'); ?></h4>
                    <p>
                        <strong><?php esc_html_e('Address:', 'portofino-modern'); ?></strong><br>
                        <?php echo nl2br(esc_html(get_theme_mod('portofino_address', 'Marsh Street, Hanley, Stoke-on-Trent, ST1 1JD'))); ?>
                    </p>
                    <p>
                        <strong><?php esc_html_e('Phone:', 'portofino-modern'); ?></strong><br>
                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('portofino_phone', '01782 209444'))); ?>">
                            <?php echo esc_html(get_theme_mod('portofino_phone', '01782 209444')); ?>
                        </a>
                    </p>
                    <p>
                        <strong><?php esc_html_e('Email:', 'portofino-modern'); ?></strong><br>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('portofino_email', 'info@portofino-hanley.co.uk')); ?>">
                            <?php echo esc_html(get_theme_mod('portofino_email', 'info@portofino-hanley.co.uk')); ?>
                        </a>
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'portofino-modern'); ?>
                </div>
                <div class="footer-credits">
                    <a href="<?php echo esc_url(get_privacy_policy_url()); ?>"><?php esc_html_e('Privacy Policy', 'portofino-modern'); ?></a>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Fallback menu for footer
 */
function portofino_footer_fallback_menu() {
    ?>
    <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'portofino-modern'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/menus/')); ?>"><?php esc_html_e('Menus', 'portofino-modern'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/reservations/')); ?>"><?php esc_html_e('Reservations', 'portofino-modern'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/gallery/')); ?>"><?php esc_html_e('Gallery', 'portofino-modern'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact', 'portofino-modern'); ?></a></li>
    </ul>
    <?php
}
?>
