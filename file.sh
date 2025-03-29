
#!/bin/bash

# Update packages
sudo dnf update -y

# Install Apache
sudo dnf install -y  nginx
sudo systemctl start nginx
sudo systemctl enable nginx

# Install PHP
sudo dnf install -y php php-fpm
sudo systemctl start php-fpm
sudo systemctl enable php-fpm

# Install MariaDB
sudo dnf install -y mariadb105-server
sudo systemctl start mariadb
sudo systemctl enable mariadb

# Restart services properly
sudo systemctl restart nginx
sudo systemctl restart php-fpm
sudo systemctl restart mariadb
