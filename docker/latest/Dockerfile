FROM quay.io/presslabs/wordpress-runtime:bedrock as builder

WORKDIR /src

COPY --chown=www-data:www-data composer.json composer.lock /src/
RUN composer install
COPY --chown=www-data:www-data . /src
RUN composer install

FROM quay.io/presslabs/wordpress-runtime:bedrock

COPY --from=builder --chown=www-data:www-data /src /app
