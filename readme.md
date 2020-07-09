## Setup Laravel Project

1. composer install
2. CHECK .env FILE (IF FILE NOT EXIST THEN COPY FROM ".env.example" AND SET DATABASE CONFIGURATION)
3. RUN COMMAND "php artisan key:generate"
4. HOW To CONFIGURE DATABASE CONNECTION
    - CREATE DATABASE 'my_db' IN MYSQL
    - RUN COMMAND "php artisan migrate"
5. RUN COMMAND "php artisan config:cache"

