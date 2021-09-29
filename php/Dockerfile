FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

ARG USERNAME=watari
ARG GROUPNAME=watari
ARG UID=1000
ARG GID=1000

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  groupadd -g $GID $GROUPNAME && \
    useradd -m -s /bin/bash -u $UID -g $GID $USERNAME

USER $USERNAME

COPY ./php.ini /usr/local/etc/php/php.ini

COPY . /work

WORKDIR /work