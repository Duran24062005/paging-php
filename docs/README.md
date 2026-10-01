# paging-php

Ejemplo de paginación con PDO PostgreSQL. Configura `DATABASE_URL` usando `.env.example`, ejecuta `paginacion.sql` y despliega desde esta carpeta con `vercel.json`. Este proyecto no administra imágenes.

## Recursos estáticos en Vercel

La vista carga la hoja de estilos desde `/styles.css` y `vercel.json` incluye una ruta explícita para ese archivo. El builder `vercel-php` procesa los archivos PHP como funciones, pero la hoja CSS debe permanecer disponible como recurso estático. Si se cambia la ubicación del proyecto o de la hoja, hay que actualizar ambas rutas.
