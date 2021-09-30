# About this project
This is a test project for image crop/resize in ProcessWire with PHP 8.

# Instructions

* install XAMPP to `c:\xampp_php8`
* enable gd in php.ini (see https://write.corbpie.com/how-to-enable-gd-library-with-xampp-php-8-on-windows/
* example vhost config for `apache/conf/extra/httpd-vhosts.conf` to serve via  `https://dev.cropfocus8:8099/` or `https://127.0.0.1:8099/`:

```
    Listen 8099 https
    <VirtualHost dev.cropfocus8:8099>
    ServerName dev.cropfocus8
    DocumentRoot "C:\Users\Michael Jaros\Desktop\jaromic.github.com\2021-09-30_crop-and-focus-in-php8"
    
    SSLEngine on
    SSLCertificateFile "conf/ssl.crt/server.crt"
    SSLCertificateKeyFile "conf/ssl.key/server.key"
    
    <Directory "C:\Users\Michael Jaros\Desktop\jaromic.github.com\2021-09-30_crop-and-focus-in-php8">
    AllowOverride All
    Require all granted
    Options Indexes FollowSymLinks
    </Directory>
    
    ErrorLog "logs/dev.cropfocus8.log"
    CustomLog "logs/dev.cropfocus8.log" common
    </VirtualHost>
```

* in `localhost/phpmyadmin`, do:

```
    CREATE DATABASE `2021-crop-focus-php8` /*!40100 DEFAULT CHARACTER SET utf8mb4 */ 
    CREATE USER '2021-crop-focus-php8'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO '2021-crop-focus-php8'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `2021-crop-focus-php8`.* TO '2021-crop-focus-php8'@'localhost';
```

* import db dump from `/.db-dumps` directory
* user/pw for backend is `processwire`/`processwire`

	
