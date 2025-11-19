# Portofino Modern WordPress Theme

A modern, elegant WordPress theme designed for Portofino Italiana restaurant, featuring contemporary design with classic Italian influences.

## Features

- **Modern Design**: Clean, minimalist aesthetic with smooth animations
- **Fully Responsive**: Works beautifully on all devices
- **Customizer Options**: Easy-to-use theme options for restaurant information
- **Multiple Page Templates**: Menu, Gallery, Reservations, Contact
- **Reservation System**: Built-in AJAX reservation form
- **SEO Optimized**: Clean markup and proper heading structure
- **Accessibility Ready**: ARIA labels and keyboard navigation support

## Installation

1. Upload the `portofino-theme` folder to `/wp-content/themes/`
2. Activate the theme through 'Appearance > Themes' in WordPress
3. Configure theme options in 'Appearance > Customize'

## Theme Setup

### Required Pages

Create the following pages and assign their respective templates:

1. **Home** - Set as front page (uses front-page.php automatically)
2. **Menu** - Template: Menu
3. **Reservations** - Template: Reservations
4. **Gallery** - Template: Gallery
5. **Contact** - Template: Contact

### Navigation Menus

- **Primary Menu**: Main site navigation (header)
- **Footer Menu**: Footer links

### Customizer Options

Navigate to 'Appearance > Customize' to configure:

#### Restaurant Information
- Phone number
- Email address
- Physical address
- Opening hours

#### Social Media
- Facebook URL
- Instagram URL
- Twitter URL
- TripAdvisor URL

#### Hero Section
- Background image
- Title
- Subtitle
- Description

## Required Images

Add these images to `/images/` directory or set via Customizer:

- `hero-placeholder.jpg` - Hero background (1920x1080)
- `about-placeholder.jpg` - About section image
- `cta-placeholder.jpg` - Call-to-action background
- `page-header-placeholder.jpg` - Default page headers
- `gallery-placeholder-1.jpg` through `gallery-placeholder-8.jpg` - Gallery placeholders

## Recommended Plugins

- **Contact Form 7** or **WPForms**: For advanced contact forms
- **Yoast SEO**: For search engine optimization
- **WP Super Cache**: For performance optimization
- **Smush**: For image optimization

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- IE 11 (basic support)

## Customization

### Colors

Edit CSS variables in `style.css`:

```css
:root {
    --color-primary: #1a1a1a;
    --color-secondary: #c9a96e;
    --color-accent: #8b0000;
    /* ... */
}
```

### Fonts

The theme uses Google Fonts:
- **Playfair Display**: Headings
- **Montserrat**: Body text
- **Cormorant Garamond**: Accents

## File Structure

```
portofino-theme/
├── css/
├── images/
├── inc/
│   └── template-tags.php
├── js/
│   └── main.js
├── template-parts/
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── page-contact.php
├── page-gallery.php
├── page-menu.php
├── page-reservations.php
├── single.php
├── style.css
└── README.md
```

## Changelog

### 1.0.0
- Initial release

## Credits

- Fonts: [Google Fonts](https://fonts.google.com/)
- Icons: SVG icons included inline

## License

GNU General Public License v2 or later
