FROM debian:buster

RUN apt update 
ENV	DEBIAN_FRONTEND noninteractive
RUN	echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
RUN apt-get install -y nginx
RUN apt-get install  -y php-fpm php-mysql
RUN apt-get install -y wget
RUN apt-get install -y unzip
RUN wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
RUN apt install -y lsb-release
RUN apt install -y gnupg
RUN dpkg -i mysql-apt-config_0.8.13-1_all.deb
RUN apt update
RUN apt install -y mysql-server
RUN apt install -y php-mbstring php-zip php-gd
COPY srcs /tmp/
RUN sh tmp/run.sh
EXPOSE 80 443

CMD bash /tmp/start.sh && bash
