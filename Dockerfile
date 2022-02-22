FROM registry.access.redhat.com/ubi7/ubi:latest
MAINTAINER Tomas Moreno <tmorenop@nuup.ninja>
RUN yum install -y httpd; yum clean all
USER apache
COPY index.php /var/www/html/
EXPOSE 80
ENTRYPOINT [ "/usr/sbin/httpd","-D","FOREGROUND" ]
