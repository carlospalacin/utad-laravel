# Práctica Laravel PHP Framework

Recursos HTML para nuestros primeros pasos con Laravel

## Presentación

Enlace al keynote [Ver presentación](https://docs.google.com/presentation/d/1Bp_xoEUuJ_C1zbUxTAEo-epg__v-nv3TIS-I8Bb4zjg/edit?usp=sharing).

## Pasos para instalar el proyecto-blog

Antes de empezar, recordar que necesitáis:

- Composer
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


**1 - Clonamos el proyecto con el siguinte comando en nuestro directorio de publicación en nuestro servidor web**
```
git clone https://github.com/carlospalacin/utad-laravel.git
```

**2 - Accedemos al directorio htdocs/utad-laravel/proyecto-blog y ejecutamos**
```
composer install
```
Esta operación la realizamos para que laravel instale todos los paquetes de terceros necesarios, ya que no están subidos en el repositorio de github, cosa que nunca se debe de hacer.

**3 - Crear fichero .env**<br>
Dentro del directorio htdocs/utad-laravel/proyecto-blog buscamos el fichero .env.example y lo renombramos a .env
 
**4 - Configuramos la conexión a nuestra badse de datos dentro de nuestro fichero .env recien renombrado**
```
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=password
```
Poner los datos de vuestro usuario y la base de datos debe de existir, pero vacía.<br>
Recordar que en Mac los .env, son archivos ocultos.

**5 - Configuración del APP_KEY**<br>
Como hemos descargado la aplicación del git y el fichero .env no se ha configurado, laravel necesita generar una APP KEY para el campo APP_KEY de nuestro .env, para ello ejecutamos en htdocs/utad-laravel/proyecto-blog
```
php artisan key:generate
```

**4 - Ejecutar las migraciones para crear la base de datos, desde consola, desde la carpeta htdocs/utad-laravel/proyecto-blog**
```
php artisan migrate
```
nos debe de salir por consola estos datos

```
Migrated: 2014_10_12_000000_create_users_table
Migrated: 2014_10_12_100000_create_password_resets_table
Migrated: 2017_01_14_165819_create_table_posts
Migrated: 2017_01_14_171502_create_table_comments
```
y con esto con llamar por url a nuestro proyecto sería suficiente, recuerda de apuntar a la carpeta public, sería algo así:<br>

**http://localhost/utad-laravel/proyecto-blog/public**


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