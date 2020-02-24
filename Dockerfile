FROM php:7.4-cli
COPY myapp /usr/src/myapp
WORKDIR /usr/src/myapp
CMD php -S 0.0.0.0:2323 index.php
