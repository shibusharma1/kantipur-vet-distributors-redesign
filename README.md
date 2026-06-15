# Kantipur Vet Website Redesign

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-CDN-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/Responsive-Yes-success?style=for-the-badge" />
  <img src="https://img.shields.io/badge/Status-Production_Ready-blue?style=for-the-badge" />
</p>

<p align="center">
  A modern, responsive, and professionally redesigned corporate website for <strong>Kantipur Vet</strong>, built to preserve brand identity while significantly improving UI, UX, responsiveness, and overall visual quality.
</p>

---

## Overview

This redesign focuses on enhancing the existing Kantipur Vet website without altering its core identity.

The primary objective was simple:

> **Upgrade the website professionally while preserving the original brand, structure, and content philosophy.**

The redesign improves:

* Visual hierarchy
* Typography
* Spacing and alignment
* Mobile responsiveness
* User experience
* Overall professionalism

While preserving:

* Existing brand colors
* Existing images
* Current content structure
* Original business identity

---

# Tech Stack

| Technology             | Purpose                       |
| ---------------------- | ----------------------------- |
| PHP                    | Page rendering                |
| HTML5                  | Structure                     |
| Tailwind CSS (CDN)     | Utility-first styling         |
| Custom CSS             | Advanced design customization |
| Vanilla JavaScript     | UI interactions               |
| Font Awesome           | Icons                         |
| Google Fonts (Poppins) | Typography                    |

---

# Project Structure

```bash
project-folder/
│
├── index.php
├── about.php
├── mission.php
├── blog.php
├── blog-detail.php
├── product-list.php
├── product-detail.php
├── contact.php
│
├── include/
│   ├── header.php
│   └── footer.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   ├── backtotop.js
│   │   ├── offcanvas-slider.js
│   │   ├── preloader.js
│   │   ├── scroll-animation.js
│   │   └── stickynavbar.js
│   │
│   ├── img/
│   │   ├── product/
│   │   ├── icon/
│   │   ├── commit/
│   │   └── ...
│   │
│   └── fonts/
│
└── README.md
```

---

# Setup Guide

## 1. Clone / Download Project

Place the project inside your local server:

* XAMPP → `htdocs`
* Laragon → `www`
* Live Server / Apache root

Example:

```bash
C:/xampp/htdocs/kantipur-vet/
```

---

## 2. Start Server

Run:

* Apache (XAMPP/Laragon)
* PHP local server

Then open:

```bash
http://localhost/kantipur-vet
```

---

## 3. Tailwind CSS

Tailwind is already connected via CDN in:

```bash
include/header.php
```

No installation or build process is required.

---

# Core Features

## Responsive Design

Fully optimized for:

* Mobile
* Tablet
* Laptop
* Large Desktop

---

## Sticky Navbar

Blurred sticky navbar activates automatically on scroll.

Controlled by:

```bash
assets/js/stickynavbar.js
```

---

## Reveal Animations

Reveal-on-scroll animations work automatically using:

```html
class="reveal"
```

Required script:

```bash
assets/js/scroll-animation.js
```

> Do not remove this script.

---

## Mobile Offcanvas Menu

Mobile navigation slider is handled by:

```bash
assets/js/offcanvas-slider.js
```

---

## Back to Top Button

Appears automatically after scrolling.

Controlled by:

```bash
assets/js/backtotop.js
```

---

## Typography

Font used:

### Poppins

Loaded via Google Fonts inside:

```bash
include/header.php
```

---

# Design Philosophy

This redesign intentionally avoids unnecessary complexity.

Key design principles:

* Professional corporate appearance
* Minimal yet premium UI
* Better readability
* Improved spacing
* Clean card layouts
* Strong visual hierarchy
* Smooth animations
* Modern responsive behavior

This ensures the website feels modern without looking overdesigned.

---

# Important Notes

## Existing Images Preserved

The redesign intentionally keeps all existing assets including:

* Product images
* Banner images
* Company visuals
* Brand color palette

No rebranding was performed.

---

## Brand Identity Maintained

This is **not a complete redesign from scratch**.

Instead, it is a professional upgrade that keeps:

* Company identity
* Existing layout logic
* User familiarity

---

# Recommended Future Improvements

## 1. Dynamic CMS Integration

Convert static pages into a dynamic system using:

* Laravel
* WordPress
* Custom Admin Panel

Benefits:

* Easier content updates
* Better scalability
* Admin control

---

## 2. Product Filtering

Add advanced product browsing:

* Category filters
* Search functionality
* Pagination
* Sorting

---

## 3. Blog System

Upgrade blog into a dynamic module:

* Dynamic posts
* Categories
* Comments
* SEO metadata

---

## 4. SEO Enhancements

Recommended additions:

* Meta descriptions
* Open Graph tags
* Structured schema
* XML sitemap
* Canonical URLs

---

## 5. Performance Optimization

Improve performance by adding:

* Image compression
* Lazy loading
* Caching
* Minification
* CDN delivery

---

# Final Result

The redesigned website delivers:

* Modern UI
* Premium minimal design
* Clean layout
* Better typography
* Responsive pages
* Improved user experience
* Smooth animations
* Professional visual appearance

While preserving:

* Original brand identity
* Existing company colors
* Website structure
* Content philosophy

---
