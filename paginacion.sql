-- PostgreSQL. Ejecutar dentro de la base definida por DATABASE_URL.
CREATE TABLE IF NOT EXISTS informacion (id BIGSERIAL PRIMARY KEY, info VARCHAR(255) NOT NULL);
INSERT INTO informacion (info) VALUES
('Introduccion a PHP'),('Variables y tipos de datos'),('Condicionales en PHP'),('Bucles y estructuras de control'),('Funciones reutilizables'),('Arreglos indexados'),('Arreglos asociativos'),('Manejo de formularios'),('Validacion de datos'),('Paginacion con PostgreSQL'),('Conexiones PDO'),('Consultas preparadas'),('Seguridad basica'),('Organizacion de vistas'),('Buenas practicas en PHP');
