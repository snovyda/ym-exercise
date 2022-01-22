# Lumen Test Exercise (Something like REST API)


## Installation

1) git clone git@github.com:snovyda/ym-exercise.git <FOLDER_NAME>
2) composer install
3) Create database and user in PostgreSQL
4) Update .env file with PostgreSQL database name and credentials
5) php artisan key:generate
6) php artisan migrate
7) php artisan db:seed
8) php artisan jwt:secret
9) Update .env file with MAIL_MAILER=log string
10) php artisan serve

That's all! Now you can navigate to http://127.0.0.1:8000/ and test application endpoints.

