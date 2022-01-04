FROM registry.access.redhat.com/ubi8/php-74

LABEL description="custom httpd"
MAINTAINER AA

run yum install -y httpd
# RUN yum-config-manager --enable remi-php73
# RUN yum -y install php php-common php-opcache php-cli php-gd php-curl php-mysqlnd
RUN yum -y install php 
RUN yum -y install git
RUN yum clean all
# RUN php -v 
ADD run-httpd.sh /run-httpd.sh
RUN chmod -v +x /run-httpd.sh
#USER root
RUN chmod 777 /run/httpd/ && \
    chmod 777 /etc/httpd/logs/ && \
    rm -rf /run/httpd/* /tmp/httpd* 

RUN sed -i 's/Listen 80$/Listen 8080/' /etc/httpd/conf/httpd.conf
RUN sed -i 's#/usr/share/httpd/noindex/index.html#/var/www/html/index.php#g' /etc/httpd/conf.d/welcome.conf
EXPOSE 8080
#ENV LogLevel "info"
COPY index.php /var/www/html
COPY add.php /var/www/html
COPY edit.php /var/www/html
COPY delete.php /var/www/html
COPY config.php /var/www/html

CMD ["/run-httpd.sh"]

