# vDentalLab Sage 10 Theme Documentation

## Overview
This documentation covers the `test` theme for vDentalLab, built on the **Sage 10** starter theme framework. It utilizes **Laravel Acorn** for PHP logic, **Blade** for templating, **Tailwind CSS** for styling, and **Bud.js** for building assets.

## Architecture

### Directory Structure
- **`app/`**: Contains the PHP logic (Models, Controllers, Providers, Setup).
  - `setup.php`: Theme configuration, support, and asset enqueuing.
  - `filters.php`: WordPress hooks, customizer settings, and query modifications.
  - `post-types.php`: Custom Post Type (CPT) and Taxonomy definitions.
  - `rest-api.php`: Custom REST API endpoints.
  - `View/Composers/`: Data providers for Blade views (e.g., `App.php`).
- **`resources/`**: Source files for views, styles, and scripts.
  - `views/`: Blade templates (`.blade.php`).
  - `scripts/`: JS files (entry point `app.js`).
  - `styles/`: CSS/SCSS files (entry point `app.css`).
- **`public/`**: Compiled assets (do not edit directly).

## Key Components

### Custom Post Types (CPTs)
Defined in `app/post-types.php`:

| Slug | Singular Name | Supports | Description |
|------|---------------|----------|-------------|
| `lab_logo` | Lab Logo | Title, Thumbnail, Custom Fields | Partner/client logos. |
| `customer` | Customer | Title, Thumbnail, Custom Fields | Customer profiles/testimonials. |
| `warranty` | Warranty | Title, Editor, Excerpt, Custom Fields | Warranty lookup/info. |
| `price` | Bảng giá | Title, Editor, Excerpt, Thumbnail | Pricing tables. |
| `docs` | Tài liệu | Title, Editor, Excerpt, Page Attrs | Documentation articles (Hierarchical). |

### Taxonomies
- **`doc_category`**: Categorization for `docs` post type.

### Navigation & Sidebars
**Menus** (Registered in `app/setup.php`):
- `primary_navigation`: Main header menu.
- `dentallab_navigation`: Navigation for Lab pages.
- `dentalclinic_navigation`: Navigation for Clinic pages.
- `warranty_navigation`: Footer links for warranty section.

**Sidebars**:
- `sidebar-primary`: Standard sidebar.
- `sidebar-footer`: Footer widget area.

### REST API Endpoints
Defined in `app/rest-api.php` under namespace `custom/v1`:

#### 1. Filter Documentation
- **Endpoint**: `GET /wp-json/custom/v1/filter-docs`
- **Returns**: Filtered list of documentation based on category and search query.

#### 2. Recent Documentation
- **Endpoint**: `GET /wp-json/custom/v1/recent-docs`
- **Returns**: 5 most recent posts in a specific category.

## Theme Configuration & Customization

### WordPress Customizer
Defined in `app/filters.php` and `app/customizer.php`, the theme adds customizable sections:

#### 1. Site Identity & Contact
- **Logo**: Standard `logo` and `logo_full`.
- **Contact Info**: `address`, `address_link`, `phone`, `phoneus`, `email1`, `email2`.
- **Social Media**: `facebook`, `youtube`, `skype`, `zalo`.

#### 2. Theme Colors
- **Primary Colors**: `primary1_color`, `primary2_color`, `primary3_color`.
- **Logo Size**: `logo_width` slider.

#### 3. Homepage Settings (`panel_trang_chu`)
- **Banner 1**: `trang_chu.banner.hinh_1`, `trang_chu.banner.hinhnen_1`, `trang_chu.banner.title1`, `trang_chu.banner.content1`.
- **Banner 2**: `trang_chu.banner.hinh_2`, `trang_chu.banner.hinhnen_2`, `trang_chu.banner.title2`, `trang_chu.banner.content2`.

These settings are accessible via `get_theme_mod()` and some are injected as CSS variables in `app/filters.php`.

## Documentation System
The theme includes a complete Knowledge Base/Documentation system built on the `docs` Custom Post Type.

### Templates
- **Archive (`resources/views/archive-docs.blade.php`)**:
  - Displays a grid of documentation categories (`doc_category`).
  - Shows the count of articles in each category.
  - Lists the first 3 parent posts of each category.
- **Taxonomy (`resources/views/taxonomy-doc_category.blade.php`)**:
  - Displays all parent posts within a specific category.
  - Shows the number of child posts for each parent post.
  - Uses a banner image defined in the template.
- **Single Post (`resources/views/single-docs.blade.php`)**:
  - Displays the documentation content.
  - **Sidebar**:
    - Sticky sidebar with a list of all categories.
    - Accordion-style navigation for the current category's posts.
    - Auto-expands the current post and its children.
  - **Content**:
    - Renders content using standard WordPress filters.
    - Lists "Related Documents" (child posts) at the bottom.

### Search Functionality (`partials/search-docs.blade.php`)
- **UI**: A modern "Command Palette" style search bar.
- **Technology**: Built with **Alpine.js** (`x-data="commandPalette()"`).
- **Behavior**:
  - Filters by category via a dropdown.
  - Performs AJAX search requests to `GET /wp-json/custom/v1/filter-docs`.
  - Debounces input and displays results in a dropdown list.
  - Supports keyboard navigation (Ctrl/Meta + K to open).

## Frontend Development

### Tech Stack
- **Styling**: Tailwind CSS with custom configuration (`tailwind.config.js`) defining brand colors (Teal, Cyan, Amber) and typography ('Be Vietnam Pro').
- **Build Tool**: Bud.js (Webpack wrapper).

### JavaScript Libraries (`resources/scripts/app.js`)
- **Alpine.js**: Handles reactive UI components like Modals, Tabs, and the Vietnam Map interactive regions.
- **Swiper.js**: Powered sliders for Testimonials and Feature showcases.
- **AOS (Animate On Scroll)**: Handles scroll-triggered entry animations.
- **GSAP (GreenSock)**: Advanced scroll effects (ScrollTrigger, ScrollSmoother).
- **Zoomist**: Image zooming functionality for feature details.

### External Integrations
- **Contact Form**: The contact form in `lien-he.blade.php` submits data via AJAX to an external CRM API:
  - **URL**: `https://api.voffice.online/api/v1/public/callme`
  - **Payload**: Name, Email, Phone, Company, Company Size, Note.

### Key Templates
- **`front-page.blade.php`**: The main landing page. It aggregates several sections:
  - Hero Section (Gradient background, floating elements).
  - Testimonials (Swiper carousel).
  - Feature Introduction (V2 interface showcase).
  - Interactive Map (SVG map of Vietnam filtering customers by region).
- **Page Templates**:
  - `template-thu-vien.blade.php`: "Thư Viện Template". Renders the documentation archive view.
  - `template-custom.blade.php`: "Custom Template". A basic example template.
- **Partials** (`resources/views/partials/`):
  - `chuc-nang.blade.php`: Detailed grid of software modules (Ordering, Production, Finance, etc.).
  - `gioi-thieu.blade.php`: Introduction and benefits section.
  - `lien-he.blade.php`: Contact form section.
  - `khach-hang.blade.php`: Customer showcase.
  - `search-docs.blade.php`: Documentation search bar.
  - `content-*.blade.php`: Standard loop content parts.

## Common Development Tasks

### 1. Adding a New Page
1.  Create a Blade template in `resources/views/`. Example: `page-about.blade.php`.
2.  Extend the layout:
    ```php
    @extends('layouts.app')
    @section('content')
      <!-- Your content here -->
    @endsection
    ```
3.  (Optional) Create a specific controller in `app/View/Composers/` if you need to pass dynamic data.

### 2. Modifying the Documentation System
- **Add Categories**: Go to WP Admin > Tài liệu > Chuyên mục tài liệu.
- **Add Articles**: Go to WP Admin > Tài liệu > Add New. Supports hierarchy (Parent/Child pages).
- **Customize Search**: Edit `resources/views/partials/search-docs.blade.php` for UI or `app/rest-api.php` for search logic.

### 3. Updating Styles
- Edit `resources/styles/app.css` for global styles or Tailwind @layer utilities.
- Use Tailwind utility classes directly in Blade templates.
- Run `npm run dev` to see changes immediately.

### 4. Translation
The theme supports localization.
- Run `npm run translate` to update the POT file.
- Edit PO files in `resources/lang/`.
- Run `npm run translate:compile` to compile to MO/JSON.

## Development Commands
Run from theme root (`wp-content/themes/test/`):
```bash
# Install dependencies
composer install
npm install

# Start dev server (Hot Module Replacement)
npm run dev

# Build for production
npm run build
```

> **Note for Windows Users**: It is recommended to run build commands (`npm run build` or `yarn build`) within a **WSL (Windows Subsystem for Linux)** environment to avoid path and compatibility issues.
