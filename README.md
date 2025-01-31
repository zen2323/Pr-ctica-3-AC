# Práctica de AC - Laravel

## 1. Descripción del problema

Un cliente nos ha solicitado implementar un sistema para la gestión de restaurantes, donde pueda realizar las siguientes tareas:

- Gestionar los datos de los restaurantes, incluyendo su dirección, horario y teléfono.
- Registrar clientes y permitir que puedan ser referidos por otros clientes.
- Gestionar menús de los restaurantes y los platos disponibles.
- Permitir la realización de reservas por parte de los clientes indicando el restaurante, fecha, hora y número de personas.

El sistema también debe soportar la gestión de relaciones entre entidades como menús, platos, y reservas.

## 2. Modelo E-R

A continuación se muestra el modelo E-R de la aplicación:

![Captura de pantalla 2025-01-31 194434](https://github.com/user-attachments/assets/9acbb882-b17e-4b76-8611-90a03a5124a2)

### Criterios del modelo:
- Todas las tablas tienen claves primarias (PK).
- Se representan las claves foráneas (FK) con las cardinalidades correspondientes.
- Relación ternaria representada para las reservas (cliente, restaurante y horario).
- Uso de relaciones N:M para los menús y platos.

## 3. Implementación

El sistema se ha desarrollado utilizando Laravel, asegurando el cumplimiento de los criterios solicitados:

### Características
- Todas las tablas creadas con migraciones.
- Modelos implementados para cada tabla.
- Datos de prueba generados mediante Seeders.
- Relaciones entre las tablas correctamente implementadas usando Eloquent ORM.
- 10 endpoints implementados en el fichero `api.php` con soporte para los verbos HTTP (GET, POST, PUT, DELETE).

### Endpoints principales:
1. **GET /api/restaurantes**: Obtiene la lista de restaurantes.
2. **POST /api/restaurantes**: Crea un nuevo restaurante.
3. **PUT /api/restaurantes/{id}**: Actualiza los datos de un restaurante.
4. **DELETE /api/restaurantes/{id}**: Elimina un restaurante.
5. **GET /api/clientes**: Obtiene la lista de clientes.
6. **POST /api/clientes**: Registra un nuevo cliente.
7. **GET /api/menus**: Lista los menús disponibles.
8. **POST /api/reservas**: Crea una nueva reserva.
9. **GET /api/reservas**: Lista las reservas existentes.
10. **DELETE /api/reservas/{id}**: Elimina una reserva.

### Validaciones
- Validación exhaustiva en los `Request` para asegurar la consistencia de los datos.

### Postman
Se incluye en la raíz del proyecto un fichero de exportación de Postman con ejemplos de peticiones a todos los endpoints publicados.

## 4. Contribuciones

Si deseas contribuir, haz un fork del proyecto, crea una rama con tu función y envía un pull request.

## 5. Licencia

Este proyecto está bajo la licencia MIT.
