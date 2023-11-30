If you want to run our Laravel application, you must complete the following steps:

1. Import the Northwind database into MySQL: https://code.google.com/archive/p/northwindextended/downloads
2. Run cp .env.example .env
3. In .env file configure DB_DATABASE=northwind
4. Run composer install
5. Run php artisan key:generate
6. Run php artisan serve

Before being able to load http://localhost:8000/login, you need to execute these commands as well:

1. npm install --save-dev vite laravel-vite-plugin
2. npm run build



