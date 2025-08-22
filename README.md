# Deploy Project

```bash
sudo composer clearcache && sudo rm -rf vendor &&  sudo composer install --ignore-platform-reqs  &&  sudo composer upgrade && sudo composer install --optimize-autoloader --no-dev && composer dump-autoload -o
```

```bash
php artisan optimize:clear
```

```bash
sudo npm run build
```

Set symbolic link between public and storage
```bash
sudo php artisan storage:link
```

```bash
sudo chmod -R 775 /etc/aqbn/storage/ &&  sudo chmod -R 775 /etc/aqbn/public/ && sudo chmod -R 775 /etc/aqbn/bootstrap/cache && sudo chown -R www-data:www-data /etc/aqbn/public/ && sudo chown -R www-data:www-data /etc/aqbn/storage/ && sudo chown -R www-data:www-data /etc/aqbn
```

```bash
php artisan optimize
```

Image max upload:

#### Tweak the PHP fpm config file:

php.ini

; Maximum allowed size for uploaded files.
```bash
upload_max_filesize = 40M
```

; Must be greater than or equal to upload_max_filesize

```bash
post_max_size = 40M
```

#### Publish the Livewire config

```bash
php artisan livewire:publish --config
```

In ```config/livewire.php```, modify the validation rules for temporary file uploads:
```bash
'temporary_file_upload' => [
    ...
    'rules' => 'file|max:102400',
],
```

#### Finally modify nginx config file:

```bash
server {
    client_max_body_size 64M;
    // ...
}
```

If it does not work try:

```bash
FileUpload::make('image')
        ->maxSize(102400)
        ->label('Featured Image')
        ->image()
```


Set up Supervisor:

```bash
[program:aqbn-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /etc/aqbn/artisan queue:work --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/etc/aqbn/storage/logs/worker.log
```
