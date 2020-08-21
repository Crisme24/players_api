# API REST con symfony 5

### Objetivo
**API REST** *que permite gestionar los jugadores y equipos a los que pertenecen.*

### Descripción
Esta API gestionará jugadores que relacionaremos con sus equipos. Para ello implementamos las operaciones CRUD correspondientes.

### Cambios de moneda
Para obtener el cambio de moneda [podemos usar] (https://exchangeratesapi.io) En la página está documentada la API.

### Base de Datos MariaDB

### Nombre de las tablas

1. Players
2. Position
3. Team

### Request de la tabla Players

**Crear** _POST_ http://127.0.0.1:8000/api/v1/player

**Actualizar** _POST_ http://127.0.0.1:8000/api/v1/player/{id}

**Obtener por ID** _GET_ http://127.0.0.1:8000/api/v1/player/{id}

**Obtener todos** _GET_ http://127.0.0.1:8000/api/v1/players

**Eliminar** _DELETE_ http://127.0.0.1:8000/api/v1/player/{id}

### Request de la tabla Position

**Crear** _POST_ http://127.0.0.1:8000/api/v1/position

**Actualizar** _POST_ http://127.0.0.1:8000/api/v1/position/{id}

**Obtener por ID** _GET_ http://127.0.0.1:8000/api/v1/position/{id}

**Obtener todos** _GET_ http://127.0.0.1:8000/api/v1/positions

**Eliminar** _DELETE_ http://127.0.0.1:8000/api/v1/position/{id}

### Request de la tabla Team

**Crear** _POST_ http://127.0.0.1:8000/api/v1/team

**Actualizar** _POST_ http://127.0.0.1:8000/api/v1/team/{id}

**Obtener por ID** _GET_ http://127.0.0.1:8000/api/v1/team/{id}

**Obtener todos** _GET_ http://127.0.0.1:8000/api/v1/teams

**Eliminar** _DELETE_ http://127.0.0.1:8000/api/v1/team/{id}
