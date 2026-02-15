<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Intereses</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav class="navegacion">
        <div class="nav-container">
            <h1 class="logo">Mi Portafolio</h1>
            <ul class="menu">
                <li><a href="/perfil">Perfil</a></li>
                <li><a href="intereses" class="active">Intereses</a></li>
                <li><a href="habilidades">Habilidades</a></li>
                <li><a href="metas">Metas</a></li>
            </ul>
        </div>
    </nav>

    <main class="contenedor">
        <section class="seccion-titulo">
            <h1 class="titulo-principal">Mis Intereses</h1>
            <p class="subtitulo">Pasiones que me definen como creador</p>
        </section>

        <section class="seccion-contenido">
            <div class="tarjeta">
                <h2 class="titulo-seccion">Desarrollo de Videojuegos</h2>
                <div class="lista-intereses">
                    <div class="interes-item">
                        <span class="icono">🎮</span>
                        <div class="interes-texto">
                            <h3>Game Development</h3>
                            <p>Crear mundos interactivos y mecánicas de juego innovadoras que desafíen y entretengan a los jugadores</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">⚙️</span>
                        <div class="interes-texto">
                            <h3>Game Design</h3>
                            <p>Diseñar sistemas de juego equilibrados, narrativas envolventes y experiencias memorables</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🕹️</span>
                        <div class="interes-texto">
                            <h3>Indie Games</h3>
                            <p>Explorar y crear juegos independientes con conceptos únicos y narrativas experimentales</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🎯</span>
                        <div class="interes-texto">
                            <h3>Level Design</h3>
                            <p>Construir niveles que cuenten historias a través del diseño espacial y la jugabilidad</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <h2 class="titulo-seccion">Arte y Diseño</h2>
                <div class="lista-intereses">
                    <div class="interes-item">
                        <span class="icono">🎨</span>
                        <div class="interes-texto">
                            <h3>Pixel Art</h3>
                            <p>Crear sprites, tiles y animaciones pixel a pixel con estética retro y nostálgica</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🖌️</span>
                        <div class="interes-texto">
                            <h3>Arte Digital</h3>
                            <p>Ilustración digital, concept art y diseño de personajes para videojuegos</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">✨</span>
                        <div class="interes-texto">
                            <h3>Animación 2D</h3>
                            <p>Dar vida a personajes y elementos mediante animación frame por frame y tweening</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🎭</span>
                        <div class="interes-texto">
                            <h3>Character Design</h3>
                            <p>Diseñar personajes memorables con personalidades únicas y diseños visuales atractivos</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <h2 class="titulo-seccion">Creación de Contenido</h2>
                <div class="lista-intereses">
                    <div class="interes-item">
                        <span class="icono">📹</span>
                        <div class="interes-texto">
                            <h3>Video Content</h3>
                            <p>Crear videos sobre desarrollo de juegos, tutoriales de arte y devlogs de proyectos</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">📝</span>
                        <div class="interes-texto">
                            <h3>Documentación</h3>
                            <p>Escribir sobre el proceso creativo, compartir aprendizajes y técnicas de desarrollo</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🎙️</span>
                        <div class="interes-texto">
                            <h3>Streaming</h3>
                            <p>Transmitir sesiones de desarrollo en vivo, pixel art y game jams</p>
                        </div>
                    </div>
                    <div class="interes-item">
                        <span class="icono">🌐</span>
                        <div class="interes-texto">
                            <h3>Community Building</h3>
                            <p>Conectar con otros desarrolladores indie y artistas, compartir conocimiento y colaborar</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <h2 class="titulo-seccion">Herramientas y Tecnologías Favoritas</h2>
                <p class="texto-parrafo">
                    Me encanta explorar y dominar diferentes herramientas que me permiten dar vida a mis ideas creativas.
                </p>
                <div class="tags">
                    <span class="tag">Unity</span>
                    <span class="tag">Godot</span>
                    <span class="tag">Aseprite</span>
                    <span class="tag">Photoshop</span>
                    <span class="tag">Krita</span>
                    <span class="tag">Blender</span>
                    <span class="tag">Git</span>
                    <span class="tag">Itch.io</span>
                </div>
            </div>

            <div class="tarjeta">
                <h2 class="titulo-seccion">Inspiraciones</h2>
                <p class="texto-parrafo">
                    Me inspiro en juegos indie que han marcado la industria con su creatividad y originalidad. Títulos como Celeste, Hollow Knight, Undertale y Stardew Valley demuestran que un buen concepto y ejecución pueden crear experiencias inolvidables sin necesidad de presupuestos millonarios.
                </p>
                <p class="texto-parrafo">
                    En el ámbito del arte, admiro el trabajo de artistas pixel art que combinan nostalgia con técnicas modernas, creando obras que son tanto un homenaje al pasado como una visión del futuro del medio.
                </p>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 Johan Andrés Latorre Dulcey. Todos los derechos reservados.</p>
    </footer>
</body>
</html>