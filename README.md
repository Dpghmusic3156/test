# SageTheme - vDentalLab WordPress Theme

Modern WordPress theme for vDentalLab dental laboratory management software website, built with Sage 10, Tailwind CSS, and Laravel Blade.

## About vDentalLab

vDentalLab is a specialized business management solution designed for dental laboratories in Vietnam. This theme powers the marketing website showcasing the software's features and capabilities.

## Tech Stack

- **Framework**: [Sage 10](https://roots.io/sage/) - Advanced WordPress starter theme
- **Backend**: [Laravel Acorn](https://github.com/roots/acorn) - Laravel components for WordPress
- **Templating**: [Laravel Blade](https://laravel.com/docs/blade) - Elegant templating engine
- **Build Tool**: [Bud](https://bud.js.org/) - Modern frontend build tool
- **Styling**: [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- **Icons**: Font Awesome 6, Google Material Symbols
- **Animations**: AOS (Animate On Scroll), custom CSS animations
- **JavaScript**: Alpine.js, vanilla JS

## Features

### Design System

- **Brand Colors**:
  - Primary (Teal): `#14b8a6`
  - Secondary (Cyan): `#06b6d4`
  - Accent (Amber): `#f59e0b`
- **Typography**: Modern, responsive typography with custom Google Fonts
- **Components**: Reusable Blade components and partials

### Modern UI/UX

- ✨ Gradient backgrounds and glassmorphism effects
- 🎨 Smooth animations and transitions
- 📱 Fully responsive design
- 🌙 Professional color palette
- 💫 Micro-interactions and hover effects

### Key Pages & Sections

- **Front Page**: Hero section with video, features showcase, testimonials
- **About**: Giới thiệu (Introduction) with benefits and solutions
- **Features**: Chức năng (Features) modal with 15+ key features
- **Contact**: Liên hệ (Contact) form with API integration
- **Free Trial**: Phần mềm dental lab miễn phí registration page

### Mobile Experience

- Modern sidebar menu with gradient background
- Smooth cubic-bezier animations
- Staggered menu item animations
- Enhanced backdrop blur effects

## Project Structure

```
SageTheme/
├── app/                    # Theme logic (PHP)
│   ├── filters.php        # WordPress filters and actions
│   └── setup.php          # Theme setup and configuration
├── resources/
│   ├── scripts/           # JavaScript files
│   │   └── app.js        # Main JS with Alpine.js
│   ├── styles/            # CSS/SCSS files
│   │   └── app.css       # Main stylesheet with Tailwind
│   └── views/             # Blade templates
│       ├── layouts/       # Layout templates
│       ├── sections/      # Header, footer components
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       ├── partials/      # Reusable components
│       │   ├── gioi-thieu.blade.php
│       │   ├── chuc-nang.blade.php
│       │   ├── lien-he.blade.php
│       │   ├── khach-hang.blade.php
│       │   └── phan-mem-dental-lab-mien-phi.blade.php
│       └── front-page.blade.php
├── public/                # Compiled assets (generated)
├── bud.config.js          # Bud build configuration
├── tailwind.config.js     # Tailwind CSS configuration
└── package.json           # Node dependencies
```

## Development

### Requirements

- PHP >= 8.0
- Composer 2.x
- Node.js >= 16
- WordPress >= 6.0

### Installation

1. Clone the theme into your WordPress themes directory:

```bash
cd wp-content/themes
git clone [repository-url] SageTheme
cd SageTheme
```

2. Install dependencies:

```bash
composer install
npm install
```

3. Build assets:

```bash
# Development
npm run dev

# Production
npm run build

# Watch mode
npm run dev -- --watch
```

### Color Customization

Colors can be customized via WordPress Customizer or in `tailwind.config.js`:

```javascript
colors: {
  primary: { /* Teal shades */ },
  secondary: { /* Cyan shades */ },
  accent: { /* Amber shades */ }
}
```

### Adding New Pages

Create new Blade templates in `resources/views/`:

```php
{{-- resources/views/my-page.blade.php --}}
@extends('layouts.app')

@section('content')
  <div class="container">
    <!-- Your content -->
  </div>
@endsection
```

## Deployment

1. Build production assets:

```bash
npm run build
```

2. Ensure compiled assets are in `public/` directory

3. Deploy to server via FTP, Git, or deployment tool

## API Integration

The theme integrates with external APIs:

- **Contact Form**: `https://lapi.dentalso.com/api/v1/public/callme`
- **Free Trial Registration**: JSON payload with company details

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Credits

### Built With

- [Sage](https://roots.io/sage/) by Roots
- [Tailwind CSS](https://tailwindcss.com/)
- [Alpine.js](https://alpinejs.dev/)
- [AOS Library](https://michalsnik.github.io/aos/)
- [Font Awesome](https://fontawesome.com/)

### Developer

Theme developed for vDentalLab by Vision Software Company Limited

## License

Proprietary - All rights reserved

---

**vDentalLab** - Phần mềm Quản lý Labo Nha khoa chuyên nghiệp
