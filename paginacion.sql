-- Proyecto: 02-paginacion
-- Base esperada por el codigo: prueba_d

CREATE DATABASE IF NOT EXISTS `prueba_d`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `prueba_d`;

CREATE TABLE IF NOT EXISTS `informacion` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `info` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `informacion` (`id`, `info`) VALUES
  (1, 'Introduccion a PHP'),
  (2, 'Variables y tipos de datos'),
  (3, 'Condicionales en PHP'),
  (4, 'Bucles y estructuras de control'),
  (5, 'Funciones reutilizables'),
  (6, 'Arreglos indexados'),
  (7, 'Arreglos asociativos'),
  (8, 'Manejo de formularios'),
  (9, 'Validacion de datos'),
  (10, 'Paginacion con MySQL'),
  (11, 'Conexiones PDO'),
  (12, 'Consultas preparadas'),
  (13, 'Seguridad basica'),
  (14, 'Organizacion de vistas'),
  (15, 'Buenas practicas en PHP');
