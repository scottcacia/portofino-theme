<?php
/**
 * Template Name: Menu
 *
 * @package Portofino_Modern
 */

get_header();
?>

<div class="page-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/menu-header.jpg'); ?>');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
        <h1 class="page-title"><?php esc_html_e('Our Menu', 'portofino-modern'); ?></h1>
        <div class="breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'portofino-modern'); ?></a>
            <span> / </span>
            <span><?php esc_html_e('Menu', 'portofino-modern'); ?></span>
        </div>
    </div>
</div>

<section class="section section-lg menu-section">
    <div class="container">
        <div class="text-center reveal" style="margin-bottom: var(--spacing-lg);">
            <span class="section-subtitle"><?php esc_html_e('A La Carte', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Our Signature Dishes', 'portofino-modern'); ?></h2>
        </div>

        <!-- Starters -->
        <div class="menu-category reveal" style="margin-bottom: var(--spacing-xl);">
            <h3 class="text-center" style="margin-bottom: var(--spacing-md);"><?php esc_html_e('Starters', 'portofino-modern'); ?></h3>
            <div class="menu-grid">
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
            </div>
        </div>

        <!-- Pasta -->
        <div class="menu-category reveal" style="margin-bottom: var(--spacing-xl);">
            <h3 class="text-center" style="margin-bottom: var(--spacing-md);"><?php esc_html_e('Pasta', 'portofino-modern'); ?></h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Spaghetti Carbonara', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;14.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Classic Roman pasta with pancetta, egg, pecorino and black pepper', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Penne Arrabbiata', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;12.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Penne in spicy tomato sauce with garlic and fresh chilli', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Linguine ai Frutti di Mare', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;18.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Linguine with mixed seafood in white wine, garlic and cherry tomato sauce', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Lasagna della Casa', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;15.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Traditional layered pasta with beef ragù, béchamel and parmesan', 'portofino-modern'); ?></p>
                </div>
            </div>
        </div>

        <!-- Main Courses -->
        <div class="menu-category reveal" style="margin-bottom: var(--spacing-xl);">
            <h3 class="text-center" style="margin-bottom: var(--spacing-md);"><?php esc_html_e('Main Courses', 'portofino-modern'); ?></h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Pollo alla Parmigiana', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;17.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Breaded chicken breast topped with tomato sauce and melted mozzarella', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Saltimbocca alla Romana', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;21.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Veal escalopes with Parma ham and sage in white wine butter sauce', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Branzino al Forno', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;22.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Oven-baked sea bass with cherry tomatoes, olives and capers', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Bistecca alla Griglia', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;26.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Grilled ribeye steak with rosemary, garlic butter and roasted vegetables', 'portofino-modern'); ?></p>
                </div>
            </div>
        </div>

        <!-- Desserts -->
        <div class="menu-category reveal">
            <h3 class="text-center" style="margin-bottom: var(--spacing-md);"><?php esc_html_e('Desserts', 'portofino-modern'); ?></h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Tiramisu', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;7.50</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Classic Italian dessert with mascarpone, espresso-soaked savoiardi and cocoa', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Panna Cotta', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;6.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Vanilla cream custard with berry compote', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Affogato', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;5.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Vanilla gelato drowned in hot espresso with amaretti crumble', 'portofino-modern'); ?></p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <span class="menu-item-name"><?php esc_html_e('Cannoli Siciliani', 'portofino-modern'); ?></span>
                        <span class="menu-item-price">&pound;7.95</span>
                    </div>
                    <p class="menu-item-description"><?php esc_html_e('Crispy pastry shells filled with sweet ricotta, chocolate chips and pistachios', 'portofino-modern'); ?></p>
                </div>
            </div>
        </div>

        <div class="text-center reveal" style="margin-top: var(--spacing-xl);">
            <p style="color: var(--color-text-secondary); margin-bottom: var(--spacing-md);">
                <?php esc_html_e('Please inform us of any dietary requirements or allergies', 'portofino-modern'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/reservations/')); ?>" class="btn btn-primary">
                <?php esc_html_e('Book a Table', 'portofino-modern'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
