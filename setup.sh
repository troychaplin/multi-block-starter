#!/bin/bash
# setup.sh - Multi-block starter setup script

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${BLUE}ℹ️  $1${NC}"
}

print_success() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

print_error() {
    echo -e "${RED}❌ $1${NC}"
}

# Function to check if command exists
command_exists() {
    command -v "$1" >/dev/null 2>&1
}

echo "🚀 Starting Multi-block Starter Setup..."
echo ""

# Check if we're in the right directory
if [ ! -f "package.json" ]; then
    print_error "package.json not found. Please run this script from the project root."
    exit 1
fi

if [ ! -f "composer.json" ]; then
    print_error "composer.json not found. Please run this script from the project root."
    exit 1
fi

print_success "Project structure verified"

# Check for .nvmrc file
if [ ! -f ".nvmrc" ]; then
    print_error ".nvmrc file not found. This project requires a specific Node.js version."
    exit 1
fi

NODE_VERSION=$(cat .nvmrc)
print_status "Required Node.js version: $NODE_VERSION"

# Check if nvm is available
print_status "Checking for nvm..."

# First try to source nvm and then check if it's available
if [ -f ~/.nvm/nvm.sh ]; then
    source ~/.nvm/nvm.sh
    if command_exists nvm; then
        print_success "nvm found and loaded"
    else
        print_error "nvm.sh found but nvm command is not available"
        exit 1
    fi
else
    print_error "nvm is not installed. Please install nvm first:"
    echo "   curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash"
    exit 1
fi

# Source nvm (already done above, but keeping for clarity)
print_status "Loading nvm..."
source ~/.nvm/nvm.sh
print_success "nvm loaded"

# Install Node.js version
print_status "Installing Node.js version $NODE_VERSION..."
if nvm install 2>/dev/null; then
    print_success "Node.js $NODE_VERSION installed and activated"
else
    print_error "Failed to install Node.js version $NODE_VERSION"
    exit 1
fi

# Verify Node.js version
CURRENT_NODE_VERSION=$(node --version)
if [[ "$CURRENT_NODE_VERSION" == "v$NODE_VERSION" ]]; then
    print_success "Node.js version verified: $CURRENT_NODE_VERSION"
else
    print_warning "Node.js version mismatch. Expected v$NODE_VERSION, got $CURRENT_NODE_VERSION"
fi

# Check if npm is available
if ! command_exists npm; then
    print_error "npm is not available. Please install npm."
    exit 1
fi

# Install npm dependencies
print_status "Installing npm dependencies..."
if npm install; then
    print_success "npm dependencies installed"
else
    print_error "Failed to install npm dependencies"
    exit 1
fi

# Check if composer is available
if ! command_exists composer; then
    print_error "composer is not available. Please install composer:"
    echo "   https://getcomposer.org/download/"
    exit 1
fi

# Install composer dependencies
print_status "Installing composer dependencies..."
if composer install; then
    print_success "composer dependencies installed"
else
    print_error "Failed to install composer dependencies"
    exit 1
fi

echo ""
print_success "Setup complete! 🎉"
echo ""
echo "Next steps:"
echo "  • Run 'npm start' to start development"
echo "  • Run 'npm run build' to build for production"
echo "  • Check the README.md for more information" 