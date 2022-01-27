# Prueba Técnica Mundo - Backend

##### Autor: Xavier Canales Carvajal -- 19.335.616-8

## Requisitos

1. PHP 7.3.0 o superior
2. Composer 2.2.0 o superior
3. Base de datos MySQL previamente creada

## Clonar el repositorio

#### Opcion 1

1. Abrir una terminal git bash
2. Ejecutar el comando:

        git clone https://github.com/kusuasdf/mundo-Back.git

#### Opcion 2

1. Descargar el repositorio directamente desde github
2. Descomprimir el repositorio en la carpeta deseada

## Instalar dependencias y configurar el entorno

1. Desde una terminal de comandos navegar a la carpeta del repositorio (en el caso de usar la opción 1 al momento de clonar el repositorio, esta debería es "C:/Users/(tu usuario)/mundo-Back")
2. Ejecutar el comando:

        composer install
    Para instalar las dependencias del sistema

3. Crear una copia de .env.example y nombrarla .env
4. Abrir el archivo .env y reemplazar la información de Base de datos por los datos de tu base de datos (linea 11 a 16)
5. Ejecutar el comando:

        php artisan key:generate
    Para generar la llave de encriptación de la aplicación
6. Ejecutar el comando:

        php artisan migrate

    En caso de que la Base de datos no esté vacía, se ejecuta en su lugar el siguiente comando:

        php artisan migrate:fresh 

    Esto nos crear la Base de Datos y las tablas necesarias para el funcionamiento del sistema

7. Ejecutar el comando:

        php artisan db:seed
    Esto nos crear los datos de prueba para el sistema


## Ejecutar el programa

1. Desde una terminal de comandos navegar a la carpeta del repositorio (en el caso de usar la opción 1 al momento de clonar el repositorio, esta debería es "C:/Users/(tu usuario)/mundo-Back")
2. Ejecutar el comando:

        php artisan serve
    Para ejecutar el servidor de la aplicación
3. El sistema estará funcionando en la siguiente dirección:

        http://localhost:8000/