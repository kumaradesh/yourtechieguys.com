#FROM centos:latest
#MAINTAINER  "DEVOPS" <devops@yourtechieguys.com>

#RUN yum -y update
#RUN yum install -y telnet \
#	coreutils \
#	less \
#	traceroute \
#	vim \
#	ntp \
#	net-tools \
#	epel-release \
#	httpd \
#	httpd mod_ssl \
#	php \
#	php-common \
#	php-mysql \	
#	php-mbstring

#RUN echo '%wheel ALL=(ALL) NOPASSWD: ALL' >> /etc/sudoers && \
#sed -i 's/.*requiretty$/Defaults !requiretty/' /etc/sudoers
#RUN chown -R apache:apache /var/www
#ENV APACHE_LOG_DIR /var/log/httpd
#ENV SET_CONTAINER_TIMEZONE=true
#ENV CONTAINER_TIMEZONE=Asia/Kolkata
#RUN mv /etc/localtime /etc/localtime.bak
#RUN ln -s /usr/share/zoneinfo/Asia/Kolkata /etc/localtime
#EXPOSE 80
#CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]

FROM 594952790969.dkr.ecr.us-east-2.amazonaws.com/php:1.0
COPY . /var/www/html/
