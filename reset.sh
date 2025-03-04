#!/bin/bash
DB_USER='root'
DB_PASS='09071995'
DB='ph_holidays'

echo "logging into db $DB as $DB_USER"
mysql -u "$DB_USER" --password="$DB_PASS" -e "DROP DATABASE $DB"
mysql -u "$DB_USER" --password="$DB_PASS" -e "CREATE DATABASE $DB"
php artisan migrate --force
php artisan optimize
php artisan storage:link
php artisan db:seed --class=HolidaySeeder  --force


# https://ph-holidays.laravel.cloud/api/holidays?year=2025