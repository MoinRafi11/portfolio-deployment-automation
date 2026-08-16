#!/bin/bash
# 1. Stop the running services
sudo systemctl stop apache2 postgresql

# 2. Completely uninstall the packages and their configurations (purge)
sudo apt-get purge -y apache2* postgresql* php*

# 3. Remove leftover dependencies that are no longer needed
sudo apt-get autoremove -y

# 4. Force delete the leftover data, web files, and config directories
sudo rm -rf /etc/apache2 /var/www/html /etc/postgresql /var/lib/postgresql /etc/php /var/log/apache2 /var/log/postgresql
