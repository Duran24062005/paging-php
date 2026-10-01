# Desarrollo con Docker

1. Copia `.env.example` a `.env`.
2. Inicia los servicios: `docker compose up --build`.
3. Abre `http://localhost:8083`.

PostgreSQL queda disponible en `localhost:5435`. El esquema de paginación se ejecuta automáticamente al crear el volumen por primera vez.

Para reinicializar la base después de modificar el SQL, ejecuta `docker compose down -v` y vuelve a levantar los servicios.
