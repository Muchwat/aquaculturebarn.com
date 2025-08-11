# Deploy Project

```bash
sudo composer clearcache && sudo rm -rf vendor &&  sudo composer install
```

```bash
sudo composer install --ignore-platform-reqs
```

```bash
sudo composer install --optimize-autoloader --no-dev
```

```bash
sudo php artisan cache:clear && sudo php artisan route:clear && sudo php artisan config:clear && sudo php artisan view:clear
```

```bash
sudo chmod -R 775 /etc/aqbn/storage/ &&  sudo chmod -R 775 /etc/aqbn/public/ && sudo chmod -R 775 /etc/aqbn/bootstrap/cache && sudo chown -R www-data:www-data /etc/aqbn/public/ && sudo chown -R www-data:www-data /etc/aqbn/storage/ && sudo chown -R www-data:www-data /etc/aqbn
```

```bash
sudo php artisan config:cache && sudo php artisan route:cache && sudo php artisan view:cache
```

Unlink storage symbolic link between public and storage by deleting folder
```bash
rm -rf /etc/aqbn/public/storage
```

Set symbolic link between public and storage
```bash
sudo php artisan storage:link
```

Build Assets
```bash
sudo npm run build
```

Set up Supervisor

```bash
[program:vmms-email]
process_name=%(program_name)s_%(process_num)02d
command=php /etc/aqbn/artisan queue:work --tries=3
autostart=true
autorestart=true
user=root
numprocs=2
redirect_stderr=true
stdout_logfile=/etc/aqbn/storage/logs/supervisord.log
```