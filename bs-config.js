module.exports = {
    files: [
        './**/*.php',        // Watch for changes in PHP files
        './build/**/*.js',   // Watch for changes in your build JS files
        './build/**/*.css',  // Watch for changes in your build CSS files
    ],
    proxy: 'http://localhost/fomagoma', // Replace with your local WordPress URL
    port: 3000, // BrowserSync will run on this port
    open: false, // Prevents BrowserSync from automatically opening a new browser tab
};