mv /tmp/php.ini /etc/php/7.3/fpm/
mv /tmp/default /etc/nginx/sites-available/

chown -R mysql: /var/lib/mysql

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.zip

unzip phpMyAdmin-4.9.2-all-languages.zip

mkdir  var/www/html/phpmyadmin

mv phpMyAdmin-4.9.2-all-languages/* var/www/html/phpmyadmin

wget  https://wordpress.org/latest.zip
unzip latest.zip
mv wordpress/* /var/www/html
cp -f /tmp/wp-config.php  /var/www/html
chown -R mysql:mysql /var/lib/mysql
service mysql start

mysql --user=root -e "CREATE DATABASE wordpress; USE wordpress; source /tmp/mydb.sql;"
mysql --user=root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY '1234'; GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'; FLUSH PRIVILEGES;"

apt-get update && \
apt-get install -y openssl && \
openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key -x509 -days 365 -out /etc/ssl/certs/cer.crt -subj "/C=MA/ST=BENGUERIR/L=1337/O=ael-ghem/OU=IT Department/CN=Archi"

service nginx start
service mysql start
