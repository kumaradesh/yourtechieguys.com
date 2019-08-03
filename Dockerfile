FROM centos/httpd-24-centos7
#RUN apt-get update
#RUN apt-get install -y php vim libapache2-mod-php php-mbstring
#RUN rm -rf /usr/local/apache2/htdocs/*

COPY . /var/www/html/
