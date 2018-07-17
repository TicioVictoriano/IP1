Authors: Ticio, Kone, Andrew, Eli, Abel

### Installation
* git clone 
* cd projectname
* composer install
* php artisan key:generate to regenerate secure key
* create new database and edit .env file for DB settings
* php artisan migrate —seed
* edit .env file for APP configuration and Google API Configuration
* storage, bootstrap/cache and public/cache directories should be writable
* php artisan storage:link
* php artisan serve
