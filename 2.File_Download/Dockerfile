FROM centos:6

# yum LAMP
RUN yum -y install httpd php mysql-server php-mysql php-mbstring

ADD ./php_files /var/www/html

RUN mkdir /var/www/uploads

WORKDIR /app

ADD ./scripts /app

CMD ["/bin/bash", "/app/run_script.sh"]

EXPOSE 80
#이후
#/usr/bin/mysql_secure_installation
#\n y\n root\n root\n y\n n\n y\n 입력하고 docker commit