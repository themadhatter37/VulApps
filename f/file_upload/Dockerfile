FROM madhatter37/vulapps:lamp

RUN rm -rf /var/www/html/*
RUN mkdir /var/www/html/file_upload
RUN mkdir /var/www/html/file_upload/form
RUN mkdir /var/www/html/uploads
COPY src/index.php /var/www/html/index.php
COPY src/upload.php /var/www/html/file_upload/upload.php

#Allow override of .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html/

ENV ldconfig /usr/local/lib

RUN rm -f /bin/sh \
    && ln -s /bin/bash /bin/sh \
    && rm -rf /tmp/*

COPY src/start.sh /start.sh
RUN chmod a+x /start.sh

EXPOSE 80
CMD ["/start.sh"]