# 🎮 Taller Básico Laravel - Portafolio Personal

**Asignatura:** Desarrollo Backend  
**Docente:** Fabián Enrique Suárez Carvajal  
**Universidad:** Universidad Autónoma de Bucaramanga (UNAB)  
**Estudiante:** Johan Andrés Latorre Dulcey  
**Email:** jlatorre655@unab.edu.co  
**Fecha:** 17 de Febrero del 2026

## 📋 Descripción

Proyecto de portafolio personal desarrollado con Laravel como parte del taller básico de introducción al framework. El sitio presenta información profesional, intereses en desarrollo de videojuegos, habilidades técnicas y objetivos profesionales, con un diseño completamente personalizado sin uso de frameworks CSS como Bootstrap.

## 🎯 Objetivos del Taller Cumplidos

- ✅ Configurar entorno de desarrollo con Laravel
- ✅ Crear un proyecto funcional desde cero
- ✅ Desarrollar rutas y vistas dinámicas
- ✅ Diseñar interfaz con CSS propio (sin Bootstrap)
- ✅ Aplicar control de versiones con Git
- ✅ Publicar correctamente en GitHub

## 🛠️ Requisitos del Sistema

### Software Necesario
- **PHP:** >= 8.1
- **Composer:** >= 2.0
- **Laravel:** >= 10.x
- **XAMPP** o servidor local equivalente
- **Git:** Para control de versiones
- **Navegador Web:** Cualquier navegador moderno

### Conocimientos Previos
- HTML y CSS básico
- PHP fundamentals
- Git básico

## 📦 Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/TU_USUARIO/taller-basico-laravel.git
cd taller-basico-laravel
```

### 2. Instalar dependencias de Composer
```bash
composer install
```

### 3. Configurar el archivo de entorno
```bash
# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la clave de aplicación
php artisan key:generate
```

### 4. Verificar la estructura de archivos

Asegúrate de tener esta estructura:

```
taller-basico-laravel/
├── public/
│   ├── css/
│   │   └── estilos.css
│   └── images/
│       └── perfil.jpg
├── resources/
│   └── views/
│       ├── perfil.blade.php
│       ├── intereses.blade.php
│       ├── habilidades.blade.php
│       └── metas.blade.php
├── routes/
│   └── web.php
└── README.md
```

## 🚀 Cómo Ejecutar el Proyecto

### Iniciar el servidor de desarrollo

```bash
php artisan serve
```

La aplicación estará disponible en: **http://127.0.0.1:8000/perfil**

### Limpiar caché (si es necesario)

```bash
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan config:clear
```

## 📄 Estructura de Rutas

Las rutas del proyecto están configuradas en `routes/web.php`:

```php
Route::get('/', function () {
    return redirect('/perfil');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil/intereses', function () {
    return view('intereses');
});

Route::get('/perfil/habilidades', function () {
    return view('habilidades');
});

Route::get('/perfil/metas', function () {
    return view('metas');
});
```

### Páginas Disponibles

| Ruta | Vista | Descripción |
|------|-------|-------------|
| `/perfil` | perfil.blade.php | Información personal y contacto |
| `/perfil/intereses` | intereses.blade.php | Pasatiempos y gustos (videojuegos, arte) |
| `/perfil/habilidades` | habilidades.blade.php | Skills técnicas (Unity, C#, Python, etc.) |
| `/perfil/metas` | metas.blade.php | Objetivos profesionales a corto, mediano y largo plazo |

## 🎨 Diseño y Estilos

### CSS Personalizado (Sin Bootstrap)

El proyecto utiliza CSS puro ubicado en `public/css/estilos.css` con las siguientes características:

- ✅ **Menú de navegación funcional** entre todas las páginas
- ✅ **Paleta de colores personalizada** (azul #2563eb y morado #7c3aed)
- ✅ **Espaciado y márgenes consistentes** usando variables CSS
- ✅ **Tipografía legible y profesional** (Segoe UI)
- ✅ **Diseño responsive** adaptable a móvil, tablet y desktop
- ✅ **Animaciones suaves** en hover y transiciones
- ✅ **Gradientes personalizados** para fondos y botones

### Enlace del CSS en las vistas

```html
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
```

## 📊 Historial de Commits

El proyecto sigue la estructura de commits requerida por el taller:

1. ✅ **Commit 1:** Proyecto Laravel recién instalado
2. ✅ **Commit 2:** Configuración del entorno y archivos base
3. ✅ **Commit 3:** Rutas creadas en web.php
4. ✅ **Commit 4:** Vista perfil.blade.php creada
5. ✅ **Commit 5:** Vista intereses.blade.php creada
6. ✅ **Commit 6:** Vista habilidades.blade.php creada
7. ✅ **Commit 7:** Vista metas.blade.php creada
8. ✅ **Commit 8:** Hoja de estilos CSS implementada
9. ✅ **Commit 9:** Mejoras de diseño y ajustes visuales
10. ✅ **Commit 10:** README.md final con documentación

> **Nota:** Cada vista y cambio significativo tiene su propio commit independiente, cumpliendo con los requisitos del taller.

## 🔧 Tecnologías Utilizadas

- **Backend:** Laravel 10.x
- **Template Engine:** Blade
- **Frontend:** HTML5, CSS3 (sin frameworks)
- **Control de Versiones:** Git & GitHub
- **Servidor Local:** PHP Built-in Server / XAMPP

## ✨ Características del Proyecto

### Sección Perfil
- Información personal completa
- Fotografía de perfil
- Datos de contacto (email UNAB)
- Descripción profesional enfocada en desarrollo de videojuegos

### Sección Intereses
- Desarrollo de videojuegos (Unity, Godot)
- Arte digital y pixel art
- Animación 2D
- Creación de contenido
- Herramientas favoritas (Aseprite, Photoshop, Krita)

### Sección Habilidades
- Lenguajes de programación: C#, Python, Java, Kotlin, SQL
- Motores de juegos: Unity, Godot, GameMaker
- Herramientas de arte: Aseprite, Photoshop, Krita, Blender
- Bases de datos: MySQL, SQLite, PostgreSQL
- Barras de progreso animadas

### Sección Metas
- Objetivos a corto plazo (6-12 meses)
- Objetivos a mediano plazo (1-3 años)
- Objetivos a largo plazo (3-5 años)
- Timeline visual con diseño profesional

## 📱 Diseño Responsive

El sitio está optimizado para múltiples dispositivos:

- 📱 **Móviles:** < 480px
- 📱 **Tablets:** 768px - 1024px
- 💻 **Desktop:** > 1024px

## 👨‍💻 Autor

**Johan Andrés Latorre Dulcey**
- 📧 **Email:** jlatorre655@unab.edu.co
- 🎓 **Carrera:** Ingeniería de Sistemas
- 🏫 **Universidad:** Universidad Autónoma de Bucaramanga (UNAB)
- 📅 **Fecha de Entrega:** Febrero 2024
- 🎯 **Asignatura:** Desarrollo Backend

## 📝 Notas Importantes

### Para el Docente
- ✅ Todos los commits están realizados de forma independiente
- ✅ No se utilizó Bootstrap ni ningún framework CSS
- ✅ El CSS es 100% personalizado y escrito desde cero
- ✅ Las rutas siguen la estructura solicitada en el taller
- ✅ Cada vista tiene su propio commit en el historial
- ✅ El README incluye toda la información requerida

### Cumplimiento de Requisitos
- ✅ Menú de navegación funcional
- ✅ Paleta de colores personalizada
- ✅ Espaciado y márgenes consistentes
- ✅ Tipografía legible y profesional
- ✅ Diseño responsive implementado

## 🤝 Entrega en TEMA

Este proyecto fue entregado en la plataforma TEMA de la UNAB con:

1. 🔗 Link del repositorio de GitHub
2. 🔗 Link del perfil de GitHub
3. 📸 Captura del historial de commits
4. 📄 README.md completo

## 📄 Licencia

Este proyecto es de uso académico para la asignatura de Desarrollo Backend de la UNAB.

---

**Desarrollado con 💜 como parte del Taller Básico de Laravel**  
**Universidad Autónoma de Bucaramanga - Facultad de Ingeniería**

---

⭐ **Gracias por revisar este proyecto**