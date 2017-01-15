# Práctica Laravel PHP Framework

Recursos HTML para nuestros primeros pasos con Laravel

## Presentación

Enlace al keynote [Ver presentación](https://docs.google.com/presentation/d/1Bp_xoEUuJ_C1zbUxTAEo-epg__v-nv3TIS-I8Bb4zjg/edit?usp=sharing).

## Base de datos de la práctica

##### Tabla posts
 - id
 - title
 - article
 
##### Tabla comments
  - id
  - post_id
  - comment
  
## Comandos usados en la práctica

Creación de proyecto Laravel con Composer
```
composer create-project --prefer-dist laravel/laravel nombre_proyecto
```

Creación de migraciones
```
php artisan make:migration nombre_migracion
```

Creación de modelos
```
php artisan make:model nombre_modelo
```

Creación de controladores
```
php artisan make:controller nombre_controlador --resource
```

Ejecución de las migraciones
```
php artisan migrate
```

Rollback de las migraciones
```
php artisan migrate:rollback
```

Cambiar de modo live a mantenimiento e inversa
```
php artisan down
php artisan up
```

Instalar package con Composer
```
composer require nombre_vendor/nombre_package
```

Borrar compilación de las vistas
```
php artisan view:clear
```