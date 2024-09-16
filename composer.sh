sudo apt update
 sudo apt install php-cli unzip
 cd ~
 curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
 HASH=`curl -sS https://composer.github.io/installer.sig`
 echo $HASH
 php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo  'Installer verified'; } else {  echo 'Installer corrupt'; unlink('composer-setup.php');  } 
 echo PHP_EOL;"
 sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
 composer

sudo apt-get install php libapache2-mod-php
sudo apt install libapache2-mod-php libapache2-mod-php
sudo a2enmod mpm_prefork && sudo a2enmod php
sudo a2enmod php8.3
