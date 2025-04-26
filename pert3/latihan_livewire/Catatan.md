docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
rm -rf *
rm -rf .*
chown -R www-data:www-data storage/*
edit env:
APP_NAME="PemWeb"
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd


php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 bootstrap/*

root@pemweb:/var/www/html# chown -R www-data:www-data storage/
root@pemweb:/var/www/html# chown -R www-data:www-data storage/*
root@pemweb:/var/www/html# chown -R www-data:www-data bootstrap/
root@pemweb:/var/www/html# chown -R www-data:www-data bootstrap/*

buka localhost dengan browser
Username : admin@admin.com
Password : password


php artisan make:livewire ShowHomePage

- app/Model (class)
- app/http/Controler (controler)
- app/filament (panel admin)
- app/livewire (mounted render view)
- public (css/img) tapi upload nya di folder storage 
- database/migration (buat bikin db)
- database/seeder (buat bikin data dumy)
- resource/view
- route (link)