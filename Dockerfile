# może from alpine
FROM ubuntu:latest
# ta env jest do wylaczenia interaktywnych opcji zeby bral z plikow czy cos takiego
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y && apt-get upgrade -y
# jebane gówno tzdata wymaga interakcji
RUN echo "tzdata tzdata/Areas select Europe" > /tmp/preseed.txt; \
    echo "tzdata tzdata/Zones/Europe select Warsaw" >> /tmp/preseed.txt; \
    debconf-set-selections /tmp/preseed.txt && \
    apt-get install -y tzdata
# instalacja PHP w wersji 8.1 i wymaganych rozszerzeń przez swoole \
RUN apt-get install -y --no-install-recommends php8.1 \
    && apt-get install -y php8.1-curl php8.1-mysql php8.1-common  php8.1-bcmath php8.1-gd php8.1-intl php8.1-mbstring php8.1-opcache php8.1-xml php8.1-zip php8.1-dev
# instalacja nano do edycji plikow \
RUN apt-get install -y nano
# install pecl -> php pear a potem przez http inotify do htc i dopisać do ini
RUN apt-get install php-pear
RUN pecl install http://pecl.php.net/get/inotify-3.0.0.tgz
RUN echo "extension=inotify.so" >> /etc/php/8.1/cli/php.ini
# get composer -> trzeba przez curl więc get curl first
RUN apt-get install -y curl
RUN curl --silent --show-error -o composer-setup.php http://getcomposer.org/installer \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
# instalacja swoole \
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:openswoole/ppa -y
RUN apt-get install -y php8.1-openswoole
RUN phpenmod -s cli openswoole
RUN apt-get install -y php-codesniffer
# kopiowanie plików
WORKDIR /var/www/mezzioswoole
COPY . .
# odpalanie apki
RUN composer install
RUN composer update
RUN chmod u+x /var/www/mezzioswoole/
# port 5000 otwieram dla świata
EXPOSE 80
# odpalam to żeby mi się kontener nie zamykał od razu
CMD ["./vendor/bin/laminas", "mezzio:swoole:start"]