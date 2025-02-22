# WordPress Multi Block Plugin

Coming soon...

## Prerequisites

Before you begin, ensure you have the following installed:

-   Node.js (v16 or higher)
-   Docker
-   Composer
-   Git

## Initial Setup

1. Clone the repository:

    ```
    git clone https://github.com/troychaplin/image-multi-block.git
    cd image-multi-block
    ```

2. Install Node dependencies:
    ```
    npm install
    ```

## Local WordPress Environment

This project uses @wordpress/env for local development:

1. Start the WordPress environment:

    ```
    npm run wp-env start
    ```

2. Access WordPress:

    - Site: http://localhost:8888
    - Admin: http://localhost:8888/wp-admin
    - Login: admin
    - Password: password

3. Stop the environment:
    ```
    npm run wp-env stop
    ```

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

## Build Commands

1. Create production build:

    ```
    npm run build
    ```

2. Run a watch task:
    ```
    npm run start
    ```

## Troubleshooting

If wp-env issues occur:

```
npm run wp-env stop
npm run wp-env clean
npm run wp-env start
```

For PHP_CodeSniffer issues:

```
composer dump-autoload
```

## Project Structure

```
wp-multi-block/
├── build/               # Compiled files
├── src/                 # Source files
│   └── blocks/          # Block components
├── Functions/           # PHP classes
├── vendor/              # Composer dependencies
├── node_modules/        # Node dependencies
├── .eslintrc.json       # ESLint configuration
├── .wp-env.json         # WordPress environment config
├── composer.json        # PHP dependencies
├── package.json         # Node dependencies
└── README.md            # This file
```
