- скачать с репы - запустить команду из пустой нужной папки `git clone https://github.com/ruphp/laravel_intervals.git .`
- запустить композер `composer install` или если есть composer.lock то  `composer update`
- создать из копии .env.example  и заполнить файлик .env доступами к бд 
- запустить миграцию   `php artisan migrate`
- выполнить наполнение  `php artisan db:seed`     

примеры
- найти отрезки и лучи `php artisan intervals:list --left=500 --right=1000`
- найти только лучи `php artisan intervals:list --left=56`
  
