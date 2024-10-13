# Aplicativo de Gestión de Tareas en Laravel

Este proyecto es un aplicativo web para la gestión de tareas, desarrollado en Laravel. Permite a los usuarios gestionar sus tareas de manera eficiente, incluyendo funcionalidades para crear, leer, actualizar y eliminar tareas.

## Tabla de Contenidos

- [Características](#características)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Uso](#uso)


## Características

- **Autenticación de Usuarios**: Sistema de inicio de sesión para el usuario administrador.
- **CRUD de Tareas**: Crear, leer, actualizar y eliminar tareas.
- **Interfaz Intuitiva**: Diseño sencillo y fácil de usar.
- **Gestión de Permisos**: Uso de Laravel Permission para la gestión de roles.

## Tecnologías Utilizadas

- [Laravel](https://laravel.com/): Framework PHP para aplicaciones web.
- [XAMPP](https://www.apachefriends.org/index.html): Herramienta para el desarrollo local que incluye Apache, MySQL y PHP.
- [Laravel Permission](https://github.com/spatie/laravel-permission): Paquete para la gestión de roles y permisos.

## Instalación

Sigue estos pasos para instalar y configurar el proyecto en tu máquina local:

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/tu-usuario/tu-repositorio.git


2. **Instala las dependencias:**

    ```bash

    composer install

3. **Copia el archivo de configuración:**

    ```bash
    .env.example .env

4. **Configura la base de datos en el archivo .env:**

    Modifica las variables relacionadas con la base de datos según tu configuración de XAMPP.

5. **Ejecuta las migraciones y los seeders:**

    ```bash
    php artisan migrate --seed

## Configuración
    Asegúrate de tener XAMPP en ejecución y de haber creado una base de datos para tu aplicación. Actualiza las configuraciones en el archivo .env para que coincidan con tu entorno local.

## Uso
    Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
**Accede a la aplicación en tu navegador: http://localhost:8000**

    Inicia sesión con las credenciales del usuario administrador:
    Email: superadmin@gmail.com
    Contraseña: supersecret
