# Proyecto de encuesta de redes sociales

[![N|Solid](https://laravel.com/img/logomark.min.svg)](https://laravel.com/img/logomark.min.svg)

Este proyecto es una pequeña encuesta que tiene como finalidad poder optener metricas y estadisticas de las mismas

### Tecnologias utilizadas.
- [Laravel]
- [Livewire]
- [Alpinejs]
- [Tailwindcss]

## Dependencias
Para este proyecyo se necesita que se tenga instalados los siguentes programas: PHP en su version 8.0 o superior, Node en su version LTS o superior, Composer para gestionar las dependencias de PHP

## Installation

Clonar repositorio.
```sh
git clone https://github.com/Jbustamante666/Encuesta.git
```

Instalar dependencias de composer
```sh
composer install
```
Copiar archivo .env
```sh
cp .env-example .env
```
Generar Api Key
```sh
php artisan key:generate
```
Instalar depondencias de node
```sh
npm install
```

Compilar assets css y js
```sh
npm build
```

Correr migraciones:
Asegurarse de colocar los datos de la conexión de la Base de Datos por defecto en el archivo .env, el proyecto trabaja con MySql pero puede utilizar opcionalmente PostgreSql
```sh
php artisan migrate --seed
```

Inicializar servidor
```sh
php artisan serve
```

[Laravel]: <https://laravel.com/>
[Livewire]: <https://laravel-livewire.com/>
[Alpinejs]: <https://alpinejs.dev/>
[Tailwindcss]: <https://tailwindcss.com>
