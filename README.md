# Naruto One Page Web

Mi primer proyecto web: una one page en español dedicada a Naruto Shippuden. La página conserva la idea original de explorar el universo ninja por secciones, pero ahora tiene una experiencia más fluida, visual y usable en desktop, tablet y móvil.

## Arquitectura

- `index.html`: versión estática de la one page.
- `views/index.php`: versión dinámica que reutiliza los contenidos de `includes/`.
- `includes/`: consultas y fallback local para personajes, jutsus y aldeas.
- `assets/css/styles.css`: sistema visual responsive, fondos por sección, capas, tarjetas y estados de foco.
- `assets/js/app.js`: navegación activa con `IntersectionObserver`, menú móvil, lazy loading y tarjetas accesibles con teclado/touch.
- `assets/img/`: fondos, personajes, iconografía y recursos visuales originales del proyecto.

## Funcionalidades

- Hero renovado con llamada a la exploración y mejor jerarquía visual.
- Ambiente visual distinto por sección con parallax/fondos adaptados a viewport pequeño.
- Navegación sticky con estado activo según la sección visible.
- Menú móvil integrado, sin depender de `:hover`.
- Cartas de aldeas accionables con click, touch, Enter y Espacio.
- Foco visible, skip link, alt text mejorado y `prefers-reduced-motion`.
- Imágenes no críticas con lazy loading y `decoding="async"`.
- Favicon, metadata, color de tema y enlaces sociales conservados.

## Ejecución local

### Versión estática

Abre `index.html` desde un servidor local para que los recursos se resuelvan de forma consistente.

### Versión PHP

Requiere PHP 8.1+ y, opcionalmente, MySQL/PDO MySQL:

```powershell
php -S localhost:8000
```

Después visita `http://localhost:8000/views/index.php`.

La conexión se configura mediante variables `NARUTO_DB_*`. Copia `.env.example` a `.env` y añade valores únicamente en tu máquina. Si no hay base de datos configurada o disponible, la página utiliza un fallback de presentación para no romper el recorrido visual.

## Seguridad y configuración

Las credenciales que existían en el primer proyecto fueron retiradas del código. `.env` está ignorado por Git y `.env.example` documenta las variables necesarias sin incluir secretos.

## Mejoras realizadas

Se corrigieron anchos fijos, desbordamientos, rutas de includes, navegación móvil, contraste, capas de fondo, estados activos, interacción de tarjetas, carga de imágenes y compatibilidad con movimiento reducido. Se mantuvieron la temática, los contenidos principales, los recursos visuales y la personalidad de Naruto del proyecto original.
