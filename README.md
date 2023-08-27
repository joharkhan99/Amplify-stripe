<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Amplify | Headphone Shop

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 7.3
- Composer installed ([Download Composer](https://getcomposer.org/download/))
- MySQL database server
- Web server (e.g., Apache, Nginx)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repo.git

2. Navigate to the project directory:
    ```bash
    cd your-repo

3. Install project dependencies using Composer:
    ```bash
    composer install

4. Copy the .env.example file to .env:
    ```bash
    cp .env.example .env

5. Change MYSQL Database Credentials like db name, password, username, port, etc.
5. Generate an application key:
    ```bash
    php artisan key:generate

6. Create a new database for your application in your localhost MYSQL manager like phpMyAdmin, MYSQL Workbench, etc.
7. Run database migrations to create tables:
    ```bash
    php artisan migrate

8. Run the Application:
    ```bash
    php artisan serve
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
