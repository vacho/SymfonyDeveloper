# Console

## 

#### Doctrine
Generamos script de actualización de base de datos conforme Entidades
```
$ php app/console doctrine:schema:update --dump-sql
```
Generar getters an setters
```
$ php app/console doctrine:generate:entities Taron/ProductBundle/Entity/ProductType
```

#### Programación
## Generar un comando personalizado
http://symfony.com/doc/current/cookbook/console/console_command.html
