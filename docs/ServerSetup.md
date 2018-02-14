# Server Setup

## Fork Repository

1. Fork the Repository First

## Prerequisites

Pull PHP Repository from Launchpad
```bash
sudo add-apt-repository ppa:ondrej/php
```

Pull NGINX Repository from Launchpad
```bash
sudo add-apt-repository ppa:nginx/stable
```

Update Your System
```bash
sudo apt-get update
```

## Installation

Installing All Required Softwares
```bash
sudo apt install git
sudo apt install composer
sudo apt install nginx
sudo apt install redis-server
sudo apt install libapache2-mod-php
sudo apt install curl
sudo apt install php
sudo apt install php7.1-fpm
sudo apt install php7.1-curl
sudo apt install php7.1-mbstring
sudo apt install php7.1-ldap
sudo apt install php7.1-mcrypt
sudo apt install php7.1-tidy
sudo apt install php7.1-xml
sudo apt install php7.1-zip
sudo apt install php7.1-gd
sudo apt install php7.1-mysql
sudo apt install mysql-server-5.7
sudo apt install mcrypt
```
## Database Creation

Creating Database in **MySQL**
```bash
mysql -p -u root
CREATE DATABASE docspen;
GRANT ALL PRIVILEGES ON docspen.* TO 'root'@'localhost' IDENTIFIED BY "<enter your password here>";
FLUSH PRIVILEGES;
```

## Clone the Repository

```bash
sudo chmod -R 777 /var/www
cd /var/www
sudo rm -rf html
git clone git@github.com:<GITHUB_USERNAME>/Platform.git html
```

## Configuration

Configuring the **DocsPen** Server

### NGINX Conf

Creating **DocsPen** NGINX Configuration File
```bash
cd /etc/nginx/sites-available
sudo nano docspen
```

Copy this Configuration in `docspen` file
```bash
server {
  listen 80;
  listen [::]:80;

  server_name docspen.com;

  root /var/www/html/public;
  index index.php index.html;

  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }

  location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/run/php/php7.1-fpm.sock;
  }
}
```
Final Touch for the configuration
```bash
sudo ln -s /etc/nginx/sites-available/docspen /etc/nginx/sites-enabled/docspen
sudo rm /etc/nginx/sites-enabled/default
sudo service nginx restart
```

### Apache Conf (_If you use Apache Server_)

Creating **DocsPen** NGINX Configuration File
```bash
cd /etc/apache2/sites-available
sudo nano docspen.conf
```

Copy this Configuration in `docspen` file
```bash
<VirtualHost *:80>
    ServerName DocsPen

    ServerAdmin docspen@docspen.com
    DocumentRoot /var/www/html/public

    <Directory /var/www/html>
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
Final Touch for the configuration
```bash
sudo a2dissite 000-default.conf
sudo a2ensite docspen.conf
sudo a2enmod rewrite
sudo service apache2 restart
```

## Installing DocsPen

1. Navigate to your Root directory
2. Install PHP Dependencies by `composer install`
3. Install Node Dependencies by `npm install`
4. Generate Application key by `php artisan key:generate`
5. Migrate to database `php artisan migrate`
6. Visit http://localhost
