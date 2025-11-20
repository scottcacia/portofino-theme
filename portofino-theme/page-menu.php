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
        <h1 class="page-title"><?php esc_html_e('Our Menus', 'portofino-modern'); ?></h1>
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
            <span class="section-subtitle"><?php esc_html_e('Our Menus', 'portofino-modern'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Explore Our Selection', 'portofino-modern'); ?></h2>
        </div>

        <!-- Main Menu Selector -->
        <div class="menu-selector" style="display: flex; justify-content: center; gap: var(--spacing-sm); margin: var(--spacing-lg) 0; flex-wrap: wrap;">
            <button class="menu-main-tab active" data-menu="alacarte"><?php esc_html_e('A La Carte', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="lunch"><?php esc_html_e('Lunch', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="pretheatre"><?php esc_html_e('Pre Theatre', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="wine"><?php esc_html_e('Wine & Drinks', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="desserts"><?php esc_html_e('Desserts & Coffee', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="christmas"><?php esc_html_e('Christmas', 'portofino-modern'); ?></button>
            <button class="menu-main-tab" data-menu="kids"><?php esc_html_e('Kids', 'portofino-modern'); ?></button>
        </div>

        <!-- A LA CARTE MENU -->
        <div class="menu-panel" id="alacarte-menu">
            <div class="menu-categories">
                <button class="menu-tab active" data-category="starters"><?php esc_html_e('Starters', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="pizza"><?php esc_html_e('Pizza', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="pasta"><?php esc_html_e('Pasta', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="mains"><?php esc_html_e('Mains', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="sides"><?php esc_html_e('Sides', 'portofino-modern'); ?></button>
            </div>

            <!-- Starters -->
            <div class="menu-grid reveal menu-content" id="starters">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Zuppa Del Giorno</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Homemade soup of the day served with crusty bread</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bruschetta</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Toasted ciabatta topped with fresh tomatoes, basil, garlic and olive oil</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Insalata Caprese</span><span class="menu-item-price">&pound;7.95</span></div><p class="menu-item-description">Fresh buffalo mozzarella with vine tomatoes, basil and olive oil</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Funghi Ripieni</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Stuffed mushrooms with garlic and herbs</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mozzarella Fritti</span><span class="menu-item-price">&pound;7.95</span></div><p class="menu-item-description">Deep fried mozzarella served with marinara sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Arrabiata</span><span class="menu-item-price">&pound;7.95</span></div><p class="menu-item-description">Chicken strips in a spicy tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Polpetti Arrabiata</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Homemade meatballs in a spicy tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Gamberi in Padella</span><span class="menu-item-price">&pound;9.95</span></div><p class="menu-item-description">Pan-fried king prawns in garlic butter</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calamari Fritti</span><span class="menu-item-price">&pound;8.25</span></div><p class="menu-item-description">Crispy fried squid rings served with aioli</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Antipasto Di Mare</span><span class="menu-item-price">&pound;18.95</span></div><p class="menu-item-description">Seafood platter for two - prawns, calamari and mussels</p></div>
            </div>

            <!-- Pizza -->
            <div class="menu-grid reveal menu-content" id="pizza" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Margherita</span><span class="menu-item-price">&pound;11.95</span></div><p class="menu-item-description">Tomato sauce, mozzarella and fresh basil</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Hawaii</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Ham and pineapple with mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pepperoni</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Spicy pepperoni with mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Con Gambas</span><span class="menu-item-price">&pound;14.95</span></div><p class="menu-item-description">King prawns with garlic and mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Vegetariana</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Mixed vegetables with mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Quattro Formaggi</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Four cheese pizza - mozzarella, gorgonzola, parmesan and ricotta</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Con Fungi</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Chicken and mushrooms with mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Vesuvio</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Spicy Italian sausage with peppers and chilli</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calzone Bolognese</span><span class="menu-item-price">&pound;14.95</span></div><p class="menu-item-description">Folded pizza with bolognese filling</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calzone Di Polpette</span><span class="menu-item-price">&pound;14.95</span></div><p class="menu-item-description">Folded pizza with meatball filling</p></div>
            </div>

            <!-- Pasta -->
            <div class="menu-grid reveal menu-content" id="pasta" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spaghetti Carbonara</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Spaghetti with pancetta, egg, parmesan and cream</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spaghetti Bolognese</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Spaghetti with traditional meat sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spaghetti Con Polpette</span><span class="menu-item-price">&pound;12.95</span></div><p class="menu-item-description">Spaghetti with homemade meatballs in tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lasagne</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Traditional layered pasta with beef ragu and bechamel</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cannelloni Fiorentina</span><span class="menu-item-price">&pound;11.95</span></div><p class="menu-item-description">Pasta tubes filled with spinach and ricotta</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Ravioli Formaggio</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Cheese filled ravioli in your choice of sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fusilli Verdure</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Fusilli pasta with seasonal vegetables</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Risotto Pollo</span><span class="menu-item-price">&pound;13.95</span></div><p class="menu-item-description">Creamy risotto with chicken and mushrooms</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Linguini Pescatore</span><span class="menu-item-price">&pound;15.95</span></div><p class="menu-item-description">Linguini with mixed seafood in tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Linguini Gambas</span><span class="menu-item-price">&pound;19.95</span></div><p class="menu-item-description">Linguini with king prawns in garlic and chilli</p></div>
            </div>

            <!-- Mains -->
            <div class="menu-grid reveal menu-content" id="mains" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Milanese</span><span class="menu-item-price">&pound;17.95</span></div><p class="menu-item-description">Breaded chicken breast served with spaghetti</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Funghi</span><span class="menu-item-price">&pound;18.95</span></div><p class="menu-item-description">Chicken breast with mushrooms in cream sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Al Pepe</span><span class="menu-item-price">&pound;17.95</span></div><p class="menu-item-description">Chicken breast in peppercorn sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Beef Stroganoff</span><span class="menu-item-price">&pound;19.95</span></div><p class="menu-item-description">Strips of beef in creamy mushroom sauce with rice</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sea Bass</span><span class="menu-item-price">&pound;21.95</span></div><p class="menu-item-description">Pan-fried sea bass fillet with vegetables</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Gamberoni Picante</span><span class="menu-item-price">&pound;21.95</span></div><p class="menu-item-description">King prawns in spicy tomato sauce with linguini</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lamb Shank</span><span class="menu-item-price">&pound;21.95</span></div><p class="menu-item-description">Slow-cooked lamb shank in red wine sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bistecca Di Manzo</span><span class="menu-item-price">&pound;25.95</span></div><p class="menu-item-description">8oz sirloin steak with your choice of sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pepper Steak</span><span class="menu-item-price">&pound;25.95</span></div><p class="menu-item-description">8oz sirloin steak with peppercorn sauce</p></div>
            </div>

            <!-- Sides -->
            <div class="menu-grid reveal menu-content" id="sides" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chips</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Crispy golden chips</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Garlic Bread</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Toasted ciabatta with garlic butter</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Garlic Bread with Cheese</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Toasted garlic bread topped with melted mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Garlic & Tomato Bread</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Toasted garlic bread with fresh tomato topping</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mash Potato</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Creamy mashed potato</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mixed Salad</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Fresh mixed leaves with house dressing</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Rocket & Parmesan Salad</span><span class="menu-item-price">&pound;5.95</span></div><p class="menu-item-description">Fresh rocket with shaved parmesan and balsamic</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Seasonal Vegetables</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Selection of fresh seasonal vegetables</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Olives</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Marinated Italian olives</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Blue Cheese Sauce</span><span class="menu-item-price">&pound;5.95</span></div><p class="menu-item-description">Creamy blue cheese sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Peppercorn Sauce</span><span class="menu-item-price">&pound;5.95</span></div><p class="menu-item-description">Classic peppercorn sauce</p></div>
            </div>
        </div>

        <!-- LUNCH MENU -->
        <div class="menu-panel" id="lunch-menu" style="display: none;">
            <div class="text-center" style="margin-bottom: var(--spacing-lg);">
                <h3 style="color: var(--color-secondary);">2 Course Set Meal - &pound;13.95</h3>
                <p style="color: var(--color-text-secondary); font-style: italic;">Add any dessert for &pound;4.95</p>
            </div>

            <div class="menu-categories">
                <button class="menu-tab active" data-category="lunch-starters"><?php esc_html_e('Starters', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="lunch-mains"><?php esc_html_e('Mains', 'portofino-modern'); ?></button>
            </div>

            <!-- Lunch Starters -->
            <div class="menu-grid reveal menu-content" id="lunch-starters">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Soup of the Day</span></div><p class="menu-item-description">Soup of the day served with a basket of bread</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bruschetta (V)</span></div><p class="menu-item-description">Fresh tomatoes and onions marinated in olive oil and basil served on toasted homemade bread</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Funghi Ripieni (V)</span></div><p class="menu-item-description">Mushrooms filled with garlic, parmesan, parsley and breadcrumbs, baked with creamy cheese and tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Polpetti Arrabiata</span></div><p class="menu-item-description">Homemade beef meatballs in chilli tomato sauce, topped with rocket and parmesan shavings</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Smoked Salmon Salad</span></div><p class="menu-item-description">Smoked salmon with rocket and lemon, finished with extra-virgin olive oil and balsamic</p></div>
            </div>

            <!-- Lunch Mains -->
            <div class="menu-grid reveal menu-content" id="lunch-mains" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fish of the Day</span><span class="menu-item-price">+&pound;2.95</span></div><p class="menu-item-description">Ask a member of staff for the daily fish special</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Al Pepe</span></div><p class="menu-item-description">Chicken breast char grilled with peppercorn sauce, served with broccoli and mashed potato</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fusilli Verdure Alla Griglia (V)</span></div><p class="menu-item-description">Fusilli pasta with olive oil, garlic butter, char grilled Mediterranean vegetables and parmesan</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cannelloni Fiorentina (V)</span></div><p class="menu-item-description">Fresh cannelloni filled with ricotta, spinach and nutmeg, oven baked in tomato and mozzarella sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lasagne Al Forno</span></div><p class="menu-item-description">Layers of pasta with meat, tomato and mozzarella cheese sauce, oven baked</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pizza Margherita (V)</span></div><p class="menu-item-description">Cheese, tomato and oregano</p></div>
            </div>
        </div>

        <!-- PRE THEATRE MENU -->
        <div class="menu-panel" id="pretheatre-menu" style="display: none;">
            <div class="text-center" style="margin-bottom: var(--spacing-lg);">
                <h3 style="color: var(--color-secondary);">2 Course Set Meal - &pound;20.95</h3>
                <p style="color: var(--color-text-secondary); font-style: italic;">Perfect before the theatre</p>
            </div>

            <div class="menu-categories">
                <button class="menu-tab active" data-category="pretheatre-starters"><?php esc_html_e('Starters', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="pretheatre-mains"><?php esc_html_e('Mains', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="pretheatre-sides"><?php esc_html_e('Sides', 'portofino-modern'); ?></button>
            </div>

            <!-- Pre Theatre Starters -->
            <div class="menu-grid reveal menu-content" id="pretheatre-starters">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bruschetta (V)</span></div><p class="menu-item-description">Fresh tomatoes and onions marinated in olive oil and basil served on toasted homemade bread</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Insalata Caprese (V) (G)</span></div><p class="menu-item-description">Slices of tomato, buffalo mozzarella and fresh basil, dressed with olive oil and balsamic glaze</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Funghi Ripieni (V)</span></div><p class="menu-item-description">Mushrooms filled with garlic, parmesan, parsley and breadcrumbs, baked with creamy cheese and tomato sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Polpetti Arrabiata</span></div><p class="menu-item-description">Homemade beef meatballs in chilli tomato sauce, topped with rocket and parmesan shavings</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calamari Fritti</span></div><p class="menu-item-description">Fresh squid deep-fried served with continental salad and garlic mayo dip</p></div>
            </div>

            <!-- Pre Theatre Mains -->
            <div class="menu-grid reveal menu-content" id="pretheatre-mains" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Milanese</span></div><p class="menu-item-description">Tender chicken breast, breaded and pan-fried with garlic butter, served with spaghetti in cream sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Spaghetti Carbonara</span></div><p class="menu-item-description">Spaghetti cooked with ham, egg, cheese and cream</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Fusilli Verdure Alla Griglia (V)</span></div><p class="menu-item-description">Fusilli pasta with olive oil, garlic butter, char grilled Mediterranean vegetables, rocket and parmesan</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Linguini Pescatore</span></div><p class="menu-item-description">Linguini pasta with selection of seafood, olive oil, garlic, chilli and white wine garlic butter</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pizza Con Rucola</span></div><p class="menu-item-description">Cheese and tomato pizza finished with rocket and shaved parmesan</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bistecca Di Manzo (G)</span><span class="menu-item-price">+&pound;3.95</span></div><p class="menu-item-description">Strips of sirloin steak, pan-fried with Mediterranean vegetables, finished with balsamic glaze</p></div>
            </div>

            <!-- Pre Theatre Sides -->
            <div class="menu-grid reveal menu-content" id="pretheatre-sides" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chips</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Crispy golden chips</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mixed Salad</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Fresh mixed leaves with house dressing</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Garlic Bread with Cheese</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Toasted garlic bread topped with melted mozzarella</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Garlic Tomato Bread</span><span class="menu-item-price">&pound;5.95</span></div><p class="menu-item-description">Toasted garlic bread with fresh tomato topping</p></div>
            </div>
        </div>

        <!-- WINE & DRINKS MENU -->
        <div class="menu-panel" id="wine-menu" style="display: none;">
            <div class="menu-categories">
                <button class="menu-tab active" data-category="sparkling"><?php esc_html_e('Sparkling', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="white-wine"><?php esc_html_e('White Wine', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="red-wine"><?php esc_html_e('Red Wine', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="rose-wine"><?php esc_html_e('Rosé', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="cocktails"><?php esc_html_e('Cocktails', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="beers"><?php esc_html_e('Beers & Spirits', 'portofino-modern'); ?></button>
            </div>

            <!-- Sparkling -->
            <div class="menu-grid reveal menu-content" id="sparkling">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Prosecco</span><span class="menu-item-price">&pound;7.95 / &pound;29.95</span></div><p class="menu-item-description">Light and refreshing Italian sparkling (glass/bottle)</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Prosecco Rosé</span><span class="menu-item-price">&pound;7.95 / &pound;29.95</span></div><p class="menu-item-description">Delicate pink sparkling with red fruit notes (glass/bottle)</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Moët & Chandon</span><span class="menu-item-price">&pound;69.95</span></div><p class="menu-item-description">Classic French Champagne</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Veuve Clicquot</span><span class="menu-item-price">&pound;89.95</span></div><p class="menu-item-description">Premium French Champagne</p></div>
            </div>

            <!-- White Wine -->
            <div class="menu-grid reveal menu-content" id="white-wine" style="display: none;">
                <div class="text-center" style="margin-bottom: var(--spacing-sm); color: var(--color-text-secondary); font-size: 0.875rem;">125ml / 175ml / Bottle</div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Trebbiano</span><span class="menu-item-price">&pound;6.10 / &pound;7.65 / &pound;22.95</span></div><p class="menu-item-description">Light, crisp Italian white with citrus notes</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pinot Grigio</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Crisp and dry with apple and pear notes</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sauvignon Blanc</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Fresh and zesty with citrus notes</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chardonnay</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Medium-bodied with vanilla hints</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Gavi di Gavi</span><span class="menu-item-price">&pound;34.95</span></div><p class="menu-item-description">Premium Piedmont white, elegant and mineral</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chablis</span><span class="menu-item-price">&pound;39.95</span></div><p class="menu-item-description">Classic French Burgundy, crisp and refined</p></div>
            </div>

            <!-- Red Wine -->
            <div class="menu-grid reveal menu-content" id="red-wine" style="display: none;">
                <div class="text-center" style="margin-bottom: var(--spacing-sm); color: var(--color-text-secondary); font-size: 0.875rem;">125ml / 175ml / Bottle</div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Montepulciano d'Abruzzo</span><span class="menu-item-price">&pound;6.10 / &pound;7.65 / &pound;22.95</span></div><p class="menu-item-description">Smooth Italian red with cherry notes</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Merlot</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Soft and fruity with plum flavours</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Shiraz</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Bold and spicy with blackberry notes</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chianti Classico</span><span class="menu-item-price">&pound;29.95</span></div><p class="menu-item-description">Traditional Tuscan red, medium-bodied</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Amarone della Valpolicella</span><span class="menu-item-price">&pound;59.95</span></div><p class="menu-item-description">Rich and complex Venetian masterpiece</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Barolo</span><span class="menu-item-price">&pound;69.95</span></div><p class="menu-item-description">King of Italian wines, powerful and elegant</p></div>
            </div>

            <!-- Rosé -->
            <div class="menu-grid reveal menu-content" id="rose-wine" style="display: none;">
                <div class="text-center" style="margin-bottom: var(--spacing-sm); color: var(--color-text-secondary); font-size: 0.875rem;">125ml / 175ml / Bottle</div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pinot Grigio Rosé</span><span class="menu-item-price">&pound;6.40 / &pound;8.65 / &pound;24.95</span></div><p class="menu-item-description">Light and refreshing pink wine</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Whispering Angel</span><span class="menu-item-price">&pound;44.95</span></div><p class="menu-item-description">Premium Provence rosé, pale and elegant</p></div>
            </div>

            <!-- Cocktails -->
            <div class="menu-grid reveal menu-content" id="cocktails" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Aperol Spritz</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Aperol, Prosecco, soda water</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Negroni</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Gin, Campari, sweet vermouth</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Espresso Martini</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Vodka, Kahlua, fresh espresso</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bellini</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Prosecco with peach purée</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Limoncello Spritz</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Limoncello, Prosecco, soda</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Mojito</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Rum, mint, lime, sugar, soda</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cosmopolitan</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Vodka, Cointreau, lime, cranberry</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pornstar Martini</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Vanilla vodka, Passoa, passionfruit</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Margarita</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Tequila, Cointreau, lime</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Long Island Iced Tea</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Vodka, gin, rum, tequila, Cointreau, cola</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Piña Colada</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Rum, coconut cream, pineapple</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sex on the Beach</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Vodka, peach schnapps, orange, cranberry</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Strawberry Daiquiri</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Rum, strawberry, lime</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Old Fashioned</span><span class="menu-item-price">&pound;8.95</span></div><p class="menu-item-description">Bourbon, sugar, Angostura bitters</p></div>
            </div>

            <!-- Beers & Spirits -->
            <div class="menu-grid reveal menu-content" id="beers" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Peroni Nastro Azzurro</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Premium Italian lager (330ml)</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Moretti</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Classic Italian beer (330ml)</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Peroni 0.0%</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Alcohol-free Italian lager</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Corona</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Mexican lager with lime (330ml)</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Limoncello</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Traditional Italian lemon liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Amaretto</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Almond-flavoured liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sambuca</span><span class="menu-item-price">&pound;4.95</span></div><p class="menu-item-description">Anise-flavoured Italian liqueur</p></div>
            </div>
        </div>

        <!-- DESSERTS & COFFEE MENU -->
        <div class="menu-panel" id="desserts-menu" style="display: none;">
            <div class="menu-categories">
                <button class="menu-tab active" data-category="desserts-items"><?php esc_html_e('Desserts', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="coffee"><?php esc_html_e('Coffee & Tea', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="liqueurs"><?php esc_html_e('Liqueurs', 'portofino-modern'); ?></button>
            </div>

            <!-- Desserts -->
            <div class="menu-grid reveal menu-content" id="desserts-items">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cheesecake</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Homemade New York style cheesecake</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Tiramisu</span><span class="menu-item-price">&pound;7.50</span></div><p class="menu-item-description">Classic Italian coffee-flavoured dessert</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Chocolate Fudge Cake</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Rich chocolate cake with cream</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Tartufo Al Limoncello</span><span class="menu-item-price">&pound;8.25</span></div><p class="menu-item-description">Lemon ice cream truffle with limoncello</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Affogato</span><span class="menu-item-price">&pound;8.25</span></div><p class="menu-item-description">Vanilla ice cream drowned in espresso</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Profiterole</span><span class="menu-item-price">&pound;7.15</span></div><p class="menu-item-description">Choux pastry balls with chocolate sauce</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Panna Cotta</span><span class="menu-item-price">&pound;6.95</span></div><p class="menu-item-description">Italian cream dessert with berry compote</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Ice Cream</span><span class="menu-item-price">&pound;2.35 / &pound;5.50</span></div><p class="menu-item-description">Selection of Italian gelato (1 or 3 scoops)</p></div>
            </div>

            <!-- Coffee & Tea -->
            <div class="menu-grid reveal menu-content" id="coffee" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Espresso</span><span class="menu-item-price">&pound;2.75</span></div><p class="menu-item-description">Single shot of Italian espresso</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Double Espresso</span><span class="menu-item-price">&pound;3.50</span></div><p class="menu-item-description">Double shot of Italian espresso</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Americano</span><span class="menu-item-price">&pound;3.25</span></div><p class="menu-item-description">Espresso with hot water</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cappuccino</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Espresso with steamed milk foam</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Latte</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Espresso with steamed milk</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Macchiato</span><span class="menu-item-price">&pound;3.25</span></div><p class="menu-item-description">Espresso with a dash of milk</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Tea Selection</span><span class="menu-item-price">&pound;2.95</span></div><p class="menu-item-description">English Breakfast, Earl Grey, Green, Peppermint</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Hot Chocolate</span><span class="menu-item-price">&pound;3.95</span></div><p class="menu-item-description">Rich Italian hot chocolate with cream</p></div>
            </div>

            <!-- Liqueurs -->
            <div class="menu-grid reveal menu-content" id="liqueurs" style="display: none;">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Limoncello</span><span class="menu-item-price">&pound;4.50</span></div><p class="menu-item-description">Traditional Italian lemon liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Amaretto</span><span class="menu-item-price">&pound;4.50</span></div><p class="menu-item-description">Almond-flavoured liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Sambuca</span><span class="menu-item-price">&pound;4.50</span></div><p class="menu-item-description">Anise-flavoured Italian liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Frangelico</span><span class="menu-item-price">&pound;4.50</span></div><p class="menu-item-description">Hazelnut liqueur</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Grappa</span><span class="menu-item-price">&pound;5.50</span></div><p class="menu-item-description">Italian grape-based brandy</p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Baileys</span><span class="menu-item-price">&pound;4.50</span></div><p class="menu-item-description">Irish cream liqueur</p></div>
            </div>
        </div>

        <!-- CHRISTMAS MENU -->
        <div class="menu-panel" id="christmas-menu" style="display: none;">
            <div class="text-center" style="margin-bottom: var(--spacing-lg);">
                <p style="color: var(--color-text-secondary); font-style: italic;">Celebrate the festive season with our special Christmas menus</p>
            </div>

            <div class="menu-categories">
                <button class="menu-tab active" data-category="christmas-lunch"><?php esc_html_e('Christmas Lunch', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="christmas-party"><?php esc_html_e('Party Menu', 'portofino-modern'); ?></button>
                <button class="menu-tab" data-category="christmas-day"><?php esc_html_e('Christmas Day', 'portofino-modern'); ?></button>
            </div>

            <!-- Christmas Lunch -->
            <div class="menu-content" id="christmas-lunch">
                <div class="text-center" style="margin-bottom: var(--spacing-md);">
                    <h3 style="color: var(--color-secondary);">2 Courses &pound;19.95 | 3 Courses &pound;22.95</h3>
                    <p style="color: var(--color-text-secondary);">Available Monday - Friday (Lunch Only)</p>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Starters</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Minestrone Soup</span></div><p class="menu-item-description">Traditional Italian vegetable soup</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bruschetta</span></div><p class="menu-item-description">Toasted ciabatta with tomato, basil and garlic</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calamari</span></div><p class="menu-item-description">Deep fried squid rings with garlic mayo</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Polpetti Arrabiata</span></div><p class="menu-item-description">Meatballs in spicy tomato sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Insalata Caprese</span></div><p class="menu-item-description">Mozzarella, tomato and basil salad</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Mains</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Stroganoff De Pollo</span></div><p class="menu-item-description">Chicken breast in creamy mushroom sauce with rice</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Arrost Di Tacchino</span></div><p class="menu-item-description">Roast turkey with all the trimmings</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pizza Quattro Formaggi</span></div><p class="menu-item-description">Four cheese pizza</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Linguini Alla Pescatore</span></div><p class="menu-item-description">Seafood linguini in tomato sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lasagne Al Forno</span></div><p class="menu-item-description">Traditional baked lasagne</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cannelloni Fiorentina</span></div><p class="menu-item-description">Pasta tubes filled with spinach and ricotta</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Desserts</h4>
                <div class="menu-grid reveal">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Panna Cotta</span></div><p class="menu-item-description">Italian cream dessert with berry coulis</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cheesecake</span></div><p class="menu-item-description">Homemade with seasonal topping</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Tiramisu</span></div><p class="menu-item-description">Classic Italian coffee dessert</p></div>
                </div>
            </div>

            <!-- Party Menu -->
            <div class="menu-content" id="christmas-party" style="display: none;">
                <div class="text-center" style="margin-bottom: var(--spacing-md);">
                    <h3 style="color: var(--color-secondary);">3 Courses &pound;36.95 per person</h3>
                    <p style="color: var(--color-text-secondary);">Minimum 8 guests | Glass of Prosecco on arrival</p>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Starters</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Minestrone Soup</span></div><p class="menu-item-description">Traditional Italian vegetable soup</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bruschetta</span></div><p class="menu-item-description">Toasted ciabatta with tomato, basil and garlic</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Calamari</span></div><p class="menu-item-description">Deep fried squid rings with garlic mayo</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Polpetti Arrabiata</span></div><p class="menu-item-description">Meatballs in spicy tomato sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Insalata Caprese</span></div><p class="menu-item-description">Mozzarella, tomato and basil salad</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Prawn Cocktail</span></div><p class="menu-item-description">Classic with Marie Rose sauce</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Mains</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Arrost Di Tacchino</span></div><p class="menu-item-description">Roast turkey with all the trimmings</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pollo Milanese</span></div><p class="menu-item-description">Breaded chicken breast with spaghetti napoli</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Salmone Alla Griglia</span></div><p class="menu-item-description">Grilled salmon with vegetables</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lasagne Al Forno</span></div><p class="menu-item-description">Traditional baked lasagne</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Bistecca Di Manzo</span></div><p class="menu-item-description">8oz sirloin steak with peppercorn sauce (+&pound;3.95)</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Pizza Margherita</span></div><p class="menu-item-description">Classic tomato and mozzarella pizza</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Desserts</h4>
                <div class="menu-grid reveal">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Panna Cotta</span></div><p class="menu-item-description">Italian cream dessert with berry coulis</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cheesecake</span></div><p class="menu-item-description">Homemade with seasonal topping</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Tiramisu</span></div><p class="menu-item-description">Classic Italian coffee dessert</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Christmas Pudding</span></div><p class="menu-item-description">Traditional with brandy sauce</p></div>
                </div>
            </div>

            <!-- Christmas Day -->
            <div class="menu-content" id="christmas-day" style="display: none;">
                <div class="text-center" style="margin-bottom: var(--spacing-md);">
                    <h3 style="color: var(--color-secondary);">5 Courses &pound;74.95 per person</h3>
                    <p style="color: var(--color-text-secondary);">Children under 12: &pound;39.95 | Includes glass of Prosecco on arrival</p>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Canapes</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Selection of Canapes</span></div><p class="menu-item-description">Served on arrival with your Prosecco</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Starters</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lobster Bisque</span></div><p class="menu-item-description">Rich and creamy with brandy cream</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Smoked Salmon</span></div><p class="menu-item-description">With capers, lemon and horseradish cream</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Prawn Cocktail</span></div><p class="menu-item-description">Classic with Marie Rose sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Duck Liver Parfait</span></div><p class="menu-item-description">With red onion marmalade and toasted brioche</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Sorbet</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lemon Sorbet</span></div><p class="menu-item-description">A refreshing palate cleanser</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Mains</h4>
                <div class="menu-grid reveal" style="margin-bottom: var(--spacing-md);">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Arrost Di Tacchino</span></div><p class="menu-item-description">Roast turkey with all the trimmings</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Filetto Di Manzo</span></div><p class="menu-item-description">8oz fillet steak with peppercorn sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Salmone Alla Griglia</span></div><p class="menu-item-description">Grilled salmon with vegetables</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Lobster Thermidor</span></div><p class="menu-item-description">Half lobster with creamy cheese sauce</p></div>
                </div>
                <h4 style="color: var(--color-secondary); margin-bottom: var(--spacing-sm);">Desserts</h4>
                <div class="menu-grid reveal">
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Christmas Pudding</span></div><p class="menu-item-description">Traditional with brandy sauce</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Panettone</span></div><p class="menu-item-description">Italian Christmas cake with mascarpone</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Cheesecake</span></div><p class="menu-item-description">Homemade with seasonal topping</p></div>
                    <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name">Selection of Ice Creams</span></div><p class="menu-item-description">Ask your server for today's flavours</p></div>
                </div>
            </div>
        </div>

        <!-- KIDS MENU -->
        <div class="menu-panel" id="kids-menu" style="display: none;">
            <div class="text-center" style="margin-bottom: var(--spacing-lg);">
                <h3 style="color: var(--color-secondary);"><?php esc_html_e('All Items', 'portofino-modern'); ?> &pound;7.95</h3>
                <p style="color: var(--color-text-secondary); font-style: italic;"><?php esc_html_e('For children under 12', 'portofino-modern'); ?></p>
            </div>
            <div class="menu-grid reveal">
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name"><?php esc_html_e('Pasta Bolognese', 'portofino-modern'); ?></span></div><p class="menu-item-description"><?php esc_html_e('Spaghetti or Penne with meat sauce', 'portofino-modern'); ?></p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name"><?php esc_html_e('Pizza', 'portofino-modern'); ?></span></div><p class="menu-item-description"><?php esc_html_e('Cheese and tomato. Choose any three toppings: ham, pineapple, sweetcorn, prawns, salami or pepperoni', 'portofino-modern'); ?></p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name"><?php esc_html_e('Meatballs & Tomato Sauce', 'portofino-modern'); ?></span></div><p class="menu-item-description"><?php esc_html_e('Served with chips or spaghetti', 'portofino-modern'); ?></p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name"><?php esc_html_e('Chicken Goujons', 'portofino-modern'); ?></span></div><p class="menu-item-description"><?php esc_html_e('Served with chips', 'portofino-modern'); ?></p></div>
                <div class="menu-item"><div class="menu-item-header"><span class="menu-item-name"><?php esc_html_e('Fish and Chips', 'portofino-modern'); ?></span></div><p class="menu-item-description"><?php esc_html_e('Served with peas', 'portofino-modern'); ?></p></div>
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
