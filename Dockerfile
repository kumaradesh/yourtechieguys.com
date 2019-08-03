FROM 594952790969.dkr.ecr.us-east-2.amazonaws.com/php:1
#USER root
#RUN yum remove -y httpd24-*
#RUN yum install -y php
#USER 1001
#RUN apt-get update
#RUN apt-get install -y php vim libapache2-mod-php php-mbstring
#RUN rm -rf /usr/local/apache2/htdocs/*

COPY . /var/www/html/
