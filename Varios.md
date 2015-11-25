# Varios

## Google API

#### 
Instalar en el proyecto el API de google para php
```
$ composer require google/apiclient:^2.0.0@RC
```
https://github.com/google/google-api-php-client


## Depurar contenido de variables

#### 
Bajar con composer
```
composer global require symfony/var-dumper
```
Incluir codigo para depurar
```
require '/var/www/html/devllamadas/vendor/autoload.php';
....

dump($result);

```
http://symfony.com/doc/current/components/var_dumper/introduction.html
