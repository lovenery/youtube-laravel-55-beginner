# Youtube video: Laravel 5.5 for beginner

- Video url：https://youtu.be/BIqXE1hXYs4

## How to download this project

```shell
# Open command line or git-bash
git clone https://github.com/lovenery/youtube-laravel-55-beginner.git
cd youtube-laravel-55-beginner

# Install dependencies
composer install

# copy .env
cp .env.example .env

# create database and migrate
php artisan migrate

# Generate application key
php artisan key:generate

# start server
php artisan serve
```