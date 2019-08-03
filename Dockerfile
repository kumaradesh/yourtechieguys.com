FROM 594952790969.dkr.ecr.us-east-2.amazonaws.com/php:2
#RUN apt-get update
#RUN apt-get install -y php vim libapache2-mod-php php-mbstring
#RUN rm -rf /usr/local/apache2/htdocs/*

COPY . /usr/local/apache2/htdocs/
