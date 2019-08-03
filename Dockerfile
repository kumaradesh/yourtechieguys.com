FROM 594952790969.dkr.ecr.us-east-2.amazonaws.com/php:1
#RUN apt-get update
#RUN apt-get install -y php vim
COPY . /usr/local/apache2/htdocs/
