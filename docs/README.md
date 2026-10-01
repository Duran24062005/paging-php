# paging-php

Ejemplo de paginación con PDO PostgreSQL. Configura `DATABASE_URL` usando `.env.example`, ejecuta `paginacion.sql` y despliega desde esta carpeta con `vercel.json`. Este proyecto no administra imágenes.

## Recursos estáticos en Vercel

La vista carga la hoja de estilos desde `/styles.css` y `vercel.json` incluye un build explícito con `@vercel/static` para ese archivo. Cuando se declara `builds`, Vercel solo incluye en el deployment los outputs de esos builders; por eso una ruta por sí sola no publica el CSS. Si se cambia la ubicación del proyecto o de la hoja, hay que actualizar ambas rutas.
