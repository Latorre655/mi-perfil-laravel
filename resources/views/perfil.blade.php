<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav class="navegacion">
        <div class="nav-container">
            <h1 class="logo">Mi Portafolio</h1>
            <ul class="menu">
                <li><a href="/perfil" class="active">Perfil</a></li>
                <li><a href="/intereses">Intereses</a></li>
                <li><a href="/habilidades">Habilidades</a></li>
                <li><a href="/metas">Metas</a></li>
            </ul>
        </div>
    </nav>

    <main class="contenedor">
        <section class="seccion-hero">
            <div class="avatar">
                <img src="https://via.placeholder.com/200" alt="Foto de perfil">
            </div>
            <h1 class="titulo-principal">Johan Andrés Latorre Dulcey</h1>
            <p class="subtitulo">Estudiante de Ingeniería de Sistemas</p>
        </section>

        <section class="seccion-contenido">
            <div class="tarjeta">
                <h2 class="titulo-seccion">Información Personal</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="etiqueta">Nombre Completo:</span>
                        <span class="valor">Johan Andrés Latorre Dulcey</span>
                    </div>
                    <div class="info-item">
                        <span class="etiqueta">Edad:</span>
                        <span class="valor">20 años</span>
                    </div>
                    <div class="info-item">
                        <span class="etiqueta">Email:</span>
                        <span class="valor">jlatorre655@unab.edu.co</span>
                    </div>
                    <div class="info-item">
                        <span class="etiqueta">Universidad:</span>
                        <span class="valor">Universidad Autónoma de Bucaramanga</span>
                    </div>
                    <div class="info-item">
                        <span class="etiqueta">Carrera:</span>
                        <span class="valor">Ingeniería de Sistemas</span>
                    </div>
                    <div class="info-item">
                        <span class="etiqueta">Ubicación:</span>
                        <span class="valor">Bucaramanga, Colombia</span>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <h2 class="titulo-seccion">Sobre Mí</h2>
                <p class="texto-parrafo">
                    Soy un estudiante apasionado de Ingeniería de Sistemas con un gran interés en el desarrollo de videojuegos y el arte digital. Me fascina la intersección entre la tecnología y la creatividad, donde el código se transforma en experiencias interactivas y mundos virtuales cautivadores.
                </p>
                <p class="texto-parrafo">
                    Mi objetivo es dedicarme profesionalmente al desarrollo de videojuegos, combinando mis habilidades de programación con mi pasión por el arte y el diseño. Me emociona la idea de crear experiencias que no solo entretengan, sino que también cuenten historias memorables y generen conexiones emocionales con los jugadores.
                </p>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 Johan Andrés Latorre Dulcey. Todos los derechos reservados.</p>
    </footer>
</body>
</html>