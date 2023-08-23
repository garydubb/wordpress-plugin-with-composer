# WP Plugin Development Using Composer

This repository provides a starter template for WordPress plugin development using Composer. It demonstrates the use of PSR-4 standards for organizing your code into namespaces and includes the BrowserSync plugin to enable automatic webpage reloading when any file in the plugin folder is changed.

## Prerequisites

Before you begin, make sure you have the following prerequisites installed:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [PSR-4 Read Documentation](https://www.php-fig.org/psr/psr-4/)

## Features

- Organize plugin code using PSR-4 namespaces for improved maintainability.
- Use Composer for managing PHP dependencies.
- Integrate BrowserSync to automatically reload the webpage when files are changed.

## Getting Started
1. Clone this repository to your local development environment:
```
   git clone https://github.com/your-username/wp-plugin-development-composer.git
```

2. Navigate to the plugin directory:
```
cd wp-plugin-development-composer
```

3. Install Composer dependencies:
```
composer install
```

4. Install Node.js dependencies:
```
npm install
```

5. Run BrowserSync to enable automatic webpage reloading:
```
npm run start:bs
```
6. Start developing your plugin using the PSR-4 namespace structure within the src folder.

## Customization
- Modify the plugin name, description, author, and other details in the composer.json file.
- Customize the PSR-4 namespace in the composer.json file to match your plugin's namespace.
- Adjust the BrowserSync configuration in the bs-config.js file as needed.

## Usage
- Add your plugin code within the src directory, following the PSR-4 namespace structure.
- Use the provided BrowserSync setup to automatically reload the webpage during development.

## Contributions
Contributions to this project are welcome! If you have suggestions, improvements, or bug fixes, feel free to open an issue or submit a pull request.

## License
This project is licensed under the MIT License. 

