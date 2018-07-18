#!/bin/bash

chmod o+w /var/www/html/uploads

service httpd start
service mysqld start

chkconfig httpd on
chkconfig mysqld on

tail -f /dev/null