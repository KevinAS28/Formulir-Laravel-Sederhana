#!/bin/sh


#install laravel
sudo apt update #internet ~ 10mb
sudo apt install composer #internet ~ 10mb
sudo composer global require laravel/installer #internet ~ 20mb
sudo npm install

#membuat projek laravel
sudo laravel new /opt/lampp/htdocs/lara_saya #lara_saya adalah nama projek
sudo php /opt/lampp/htdocs/lara_saya/artisan make:controller Formulir
sudo php /opt/lampp/htdocs/lara_saya/artisan make:model Models/ModelForm
