# WordPress Multi Block Plugin

Coming soon...

## Prerequisites

Before you begin, ensure you have the following installed:

-   Node.js (v16 or higher)
-   Docker
-   Composer
-   Git

## Getting Setup

Add instructions.

```
git clone https://github.com/troychaplin/wp-multi-block-starter.git
cd wp-multi-block-starter
npm install
```

## Local WordPress Environment

This project uses @wordpress/env for local development:

-   `npm run wp-env start` - Start the local environment
-   `npm run wp-env stop` - Stop the local environment
-   Site: http://localhost:8888
-   Admin: http://localhost:8888/wp-admin
-   Login: admin
-   Password: password

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

## Code Standards

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
│       └── compiled/       # Compiled blocks
│       └── singular/       # Single self-contained blocks
├── Functions/              # PHP classes
├── vendor/                 # Composer dependencies
├── node_modules/           # Node dependencies
├── .eslintrc.json          # ESLint configuration
├── .wp-env.json            # WordPress environment config
├── composer.json           # PHP dependencies
├── package.json            # Node dependencies
└── README.md               # This file
```
