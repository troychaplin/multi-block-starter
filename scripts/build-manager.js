const { execSync } = require('child_process');

// Build regular blocks
execSync('npm run build', { stdio: 'inherit' });

// Build interactive blocks
execSync('npm run build:interactive', { stdio: 'inherit' }); 