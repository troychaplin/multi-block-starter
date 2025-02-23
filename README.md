# Multi Block Starter Plugin

Supercharge your WordPress block development with this modern, production-ready starter plugin. Built for developers who need a robust foundation for creating multiple block types, this plugin combines the power of static, dynamic, and interactive blocks in one efficient setup. Say goodbye to juggling multiple plugins and hello to a streamlined development workflow with optimized asset loading, modern build tools, and best practices baked in.

This plugin serves as a foundational template for WordPress block development, uniquely combining different block types (dynamic, static, and interactive) into a single, efficient plugin structure.

## Table of Contents

-   [Core Features & Architecture](#core-features--architecture)
    -   [Block Architecture](#block-architecture)
        -   [Unified Block Management](#unified-block-management)
        -   [Efficient Asset Loading](#efficient-asset-loading)
    -   [Build System](#build-system)
        -   [Asset Management](#asset-management)
    -   [Technical Implementation](#technical-implementation)
    -   [Development Environment](#development-environment)
-   [Prerequisites](#prerequisites)
-   [Getting Setup](#getting-setup)
-   [Local WordPress Environment](#local-wordpress-environment)
    -   [Local Site Info](#local-site-info)
    -   [Troubleshooting](#troubleshooting)
-   [Development Commands](#development-commands)
-   [Coding Standards](#coding-standards)
-   [Project Structure](#project-structure)

## Core Features & Architecture

### Block Architecture

#### Unified Block Management

The plugin provides a structured approach to managing multiple block types:

-   Static Blocks: Traditional Gutenberg blocks rendered entirely in JavaScript
-   Dynamic Blocks: Server-side rendered blocks using PHP for dynamic content
-   Interactive Blocks: Client-side interactive blocks with JavaScript functionality

#### Efficient Asset Loading

Each block operates as an independent unit, similar to single-block plugins, with:

-   Isolated asset loading - scripts and styles load only when blocks are used
-   Separate frontend and editor bundles to optimize performance
-   Smart asset versioning through WordPress's build process (the asset.php files automatically track dependencies and versions based on content changes)

### Build System

#### Asset Management

The plugin uses WordPress's modern build system with some notable features:

-   Automatic version hashing through `.asset.php` files
-   The version numbers in `Enqueues.php` are dynamically generated during build, preventing cache issues and ensuring users always get the latest block versions
-   Dependencies are automatically tracked and included in the build process

The build process supports loading an additional script into the block editor for:

-   Block variations and modifications
-   Custom style variations
-   Custom block categories
-   Other block related functionality

### Technical Implementation

The plugin demonstrates modern WordPress development practices:

-   Proper namespacing and class structure
-   Clean separation of concerns between editor and frontend code
-   WordPress coding standards compliance
-   Development tooling for code quality (ESLint, PHP_CodeSniffer, Prettier)

### Development Environment

The plugin includes a complete development environment with:

-   Docker-based local WordPress setup through `wp-env`
-   Hot reloading for development
-   Automated build processes for production
-   Comprehensive linting and formatting tools

This structure provides a robust foundation for building complex block-based solutions while maintaining clean code organization and optimal performance.

---

## Prerequisites

Before you begin, ensure you have the following installed:

-   Node.js (v16 or higher)
-   Docker (if you intend to use `wp-en`)
-   Composer
-   Git

## Getting Setup

This plugin can be cloned into the plugins folder of an existing local WordPress installation, or cloned to any other location if you intend to use `wp-env` for local development.

```
git clone https://github.com/troychaplin/multi-block-starter.git
cd multi-block-starter
nvm install
npm install
```

## Local WordPress Environment

This project includes [@wordpress/env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) as an optional local development environment. You can run the following to start and stop the Docker container:

-   `npm run wp-env start`
-   `npm run wp-env stop`

### Local Site Info

-   Site: http://localhost:8888
-   Admin: http://localhost:8888/wp-admin
-   Login: `admin`
-   Password: `password`

### Troubleshooting

If wp-env issues occur try the following:

-   `npm run wp-env stop`
-   `npm run wp-env clean`
-   `npm run wp-env start`

## Development Commands

-   `npm start` - Start development mode with hot reloading
-   `npm run build` - Build production assets
-   `npm run lint:js` - Lint JavaScript files
-   `npm run lint:css` - Lint CSS files
-   `npm run format` - Format code using WordPress standards

## Coding Standards

This project follows WordPress coding standards using:

-   PHP_CodeSniffer with WordPress Coding Standards
-   ESLint with WordPress configuration
-   Prettier for code formatting

Required VS Code extensions:

-   PHP CodeSniffer
-   ESLint
-   Prettier

### Troubleshooting

For PHP_CodeSniffer issues:

```
composer dump-autoload
```

## Project Structure

```
wp-multi-block-starter/
├── build/                  # Compiled files
├── src/                    # Source files
│   └── blocks/             # Block components
│       └── dynamic/        # Dynamic blocks
│       └── interactive/    # Interactive blocks
│       └── static/         # Static blocks
├── Functions/              # PHP classes
├── vendor/                 # Composer dependencies
├── node_modules/           # Node dependencies
├── .eslintrc.json          # ESLint configuration
├── .wp-env.json            # WordPress environment config
├── composer.json           # PHP dependencies
├── package.json            # Node dependencies
└── README.md               # This file
```
