# Setup Website on VPS

```
  server {
    # Handle all the domain names
    server_name www.jpbgomes.com jpbgomes.com;

    # Redirect all HTTP traffic to HTTPS
    listen 80;
    listen [::]:80;
    return 301 https://$host$request_uri;  # Single redirect for all domains
  }

  server {
    # HTTPS server for all domains
    server_name www.jpbgomes.com jpbgomes.com;

    root /var/www/jpbgomes/public;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    # PHP handling
    location ~ \.php$ {
      include snippets/fastcgi-php.conf;
      fastcgi_pass unix:/var/run/php/php-fpm.sock;
      fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
      include fastcgi_params;
    }

    # Security for hidden files
    location ~ /\.ht {
      deny all;
    }

    gzip on;
    gzip_types text/plain application/xml text/css text/javascript application/json application/javascript;

    # SSL configuration
    listen [::]:443 ssl;
    listen 443 ssl;
    ssl_certificate /etc/letsencrypt/live/jpbgomes.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/jpbgomes.com/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;
  }
```

```
  sudo chown -R www-data:www-data /var/www/jpbgomes/storage
  sudo chown -R www-data:www-data /var/www/jpbgomes/bootstrap/cache

  sudo chmod -R 775 /var/www/jpbgomes/storage
  sudo chmod -R 775 /var/www/jpbgomes/bootstrap/cache

  sudo touch /var/www/jpbgomes/storage/logs/laravel.log
  sudo chown www-data:www-data /var/www/jpbgomes/storage/logs/laravel.log
  sudo chmod 664 /var/www/jpbgomes/storage/logs/laravel.log
```

```
  php artisan cache:clear
  php artisan view:clear
  php artisan config:clear
  php artisan optimize
```
