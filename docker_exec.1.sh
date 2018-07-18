#!/bin/bash

docker exec -it $(docker ps -q) "tail /var/log/httpd/error_log"