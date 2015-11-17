# Console

## 
#### Generar codigo
Generar un bundle
```
$ php app/console generate:bundle
```
Generar una entidad
```
$ php app/console doctrine:generate:entity
```
Generar CRUD (Create Read Update Delete) de la entidad
```
$ php call/app/console generate:doctrine:crud --entity=GoogleApiBundle:GoogleUser --route-prefix=user --with-write --format=yml --no-interaction
```

Generar Sólo un formulario basado en una entidad
```
$ php app/console generate:doctrine:form AcmeBlogBundle:Post
```

#### Administración
Borrar cache
```
$ php app/console cache:clear --env=prod
```

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

#### Referencias
Bundles
http://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_bundle.html
