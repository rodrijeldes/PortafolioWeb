<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio - Desarrollador Full Stack</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="bg-gray-900 text-gray-100">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-gray-900 border-b border-blue-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="text-2xl font-bold text-gradient">
                    <i class="fas fa-terminal mr-2"></i>DevPortafolio
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="nav-link text-gray-300 hover:text-blue-400">
                        <i class="fas fa-home mr-1"></i>Inicio
                    </a>
                    <a href="#sobre-mi" class="nav-link text-gray-300 hover:text-blue-400">
                        <i class="fas fa-user mr-1"></i>Sobre Mí
                    </a>
                    <a href="#proyectos" class="nav-link text-gray-300 hover:text-blue-400">
                        <i class="fas fa-code mr-1"></i>Proyectos
                    </a>
                    <a href="#contacto" class="nav-link text-gray-300 hover:text-blue-400">
                        <i class="fas fa-envelope mr-1"></i>Contacto
                    </a>
                </div>
                <button class="md:hidden text-gray-300 hover:text-blue-400" onclick="toggleMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        <!-- Menú móvil -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-900/95 backdrop-blur-sm border-t border-blue-500/20">
                <a href="#inicio" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-md">
                    <i class="fas fa-home mr-2"></i>Inicio
                </a>
                <a href="#sobre-mi" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-md">
                    <i class="fas fa-user mr-2"></i>Sobre Mí
                </a>
                <a href="#proyectos" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-md">
                    <i class="fas fa-code mr-2"></i>Proyectos
                </a>
                <a href="#contacto" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-md">
                    <i class="fas fa-envelope mr-2"></i>Contacto
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="min-h-screen flex items-center relative overflow-hidden pt-16">
        <div class="absolute inset-0 custom-gradient opacity-20"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+')] opacity-20"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center space-y-6">
                <div class="animate__animated animate__fadeInDown">
                    <h1 class="text-4xl md:text-6xl font-bold inline-flex flex-col md:flex-row items-center justify-center gap-3">
                        <span class="text-gradient">Desarrollador</span>
                        <span class="text-white">Full Stack</span>
                    </h1>
                </div>
                <p class="text-lg md:text-xl text-blue-300 max-w-2xl mx-auto animate__animated animate__fadeInUp animate__delay-1s leading-relaxed">
                    Transformando ideas en experiencias digitales extraordinarias
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 sm:space-x-4 animate__animated animate__fadeIn animate__delay-2s">
                    <a href="#proyectos" class="group px-6 py-2.5 bg-blue-600 text-white text-base rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 flex items-center justify-center">
                        <i class="fas fa-code mr-2 group-hover:rotate-12 transition-transform"></i>Ver Proyectos
                    </a>
                    <a href="#contacto" class="group px-6 py-2.5 border-2 border-blue-500 text-base text-blue-400 rounded-full hover:bg-blue-500 hover:text-white transition-all transform hover:scale-105 flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2 group-hover:translate-x-1 transition-transform"></i>Contactar
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Mí -->
    <section id="sobre-mi" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-blue-900/20 to-gray-900"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-gradient">Sobre Mí</span>
            </h2>
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-blue-500 blur-3xl opacity-20 transform rotate-6"></div>
                        <img src="{{ asset('images/profile-anime.jpg') }}" alt="Perfil" class="rounded-2xl shadow-2xl relative floating">
                    </div>
                </div>
                <div class="md:w-1/2 space-y-6">
                    <p class="text-xl text-gray-300 leading-relaxed">
                        Soy un desarrollador web apasionado por crear soluciones digitales innovadoras y experiencias únicas.
                        Mi enfoque combina creatividad y tecnología para dar vida a ideas extraordinarias.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="gradient-border p-4">
                            <h3 class="font-bold text-xl text-blue-400 mb-2">Frontend</h3>
                            <ul class="space-y-2 text-gray-300">
                                <li><i class="fab fa-html5 mr-2 text-blue-500"></i>HTML/CSS</li>
                                <li><i class="fab fa-js mr-2 text-blue-500"></i>JavaScript</li>
                                <li><i class="fab fa-react mr-2 text-blue-500"></i>React</li>
                                <li><i class="fab fa-vuejs mr-2 text-blue-500"></i>Vue.js</li>
                            </ul>
                        </div>
                        <div class="gradient-border p-4">
                            <h3 class="font-bold text-xl text-blue-400 mb-2">Backend</h3>
                            <ul class="space-y-2 text-gray-300">
                                <li><i class="fab fa-php mr-2 text-blue-500"></i>PHP/Laravel</li>
                                <li><i class="fab fa-node mr-2 text-blue-500"></i>Node.js</li>
                                <li><i class="fas fa-database mr-2 text-blue-500"></i>MySQL</li>
                                <li><i class="fab fa-aws mr-2 text-blue-500"></i>AWS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyectos -->
    <section id="proyectos" class="py-20 relative">
        <div class="absolute inset-0 custom-gradient opacity-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-gradient">Mis Proyectos</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- SmartCare - Sistema de Gestión Médica -->
                <div class="glass rounded-xl overflow-hidden card-hover transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative group">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Activo</span>
                        </div>
                        <img src="https://via.placeholder.com/600x400/0066cc/ffffff?text=SmartCare" alt="SmartCare" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h4 class="text-lg font-bold text-white">Tecnologías Principales</h4>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">React</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Node.js</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">MongoDB</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">WebSockets</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-400 mb-2">SmartCare</h3>
                        <p class="text-gray-300 mb-4">Sistema integral de gestión médica con características avanzadas de telemedicina, gestión de citas y expedientes electrónicos en tiempo real.</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('proyecto.smartcare') }}" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors">
                                Ver Proyecto Completo
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            <a href="https://github.com/usuario/smartcare" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- MusicEvents - Eventos Musicales -->
                <div class="glass rounded-xl overflow-hidden card-hover transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative group">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Activo</span>
                        </div>
                        <img src="https://via.placeholder.com/600x400/00cc66/ffffff?text=EcoTrack" alt="MusicEvents" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h4 class="text-lg font-bold text-white">Tecnologías Principales</h4>
                                <div class="flex flex-wrap gap-2 mt-2">
                                       <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Laravel</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">TailwindCSS</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Alpine.js</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-400 mb-2">Producciones Dokkaebi</h3>
                        <p class="text-gray-300 mb-4">Plataforma profesional para la gestión y producción de eventos musicales, con sistema de reservas, gestión de artistas y locaciones.</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('proyecto.produccionesdokkaebi') }}" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors">
                                Ver Proyecto Completo
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            <a href="https://github.com/usuario/musicevents" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FinTech Pro - Sistema Financiero -->
                <div class="glass rounded-xl overflow-hidden card-hover transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative group">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Activo</span>
                        </div>
                        <img src="https://via.placeholder.com/600x400/cc6600/ffffff?text=FinTech+Pro" alt="FinTech Pro" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h4 class="text-lg font-bold text-white">Tecnologías Principales</h4>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Next.js</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">TypeScript</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Prisma</span>
                                    <span class="px-2 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">AWS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-400 mb-2">FinTech Pro</h3>
                        <p class="text-gray-300 mb-4">Plataforma financiera avanzada con análisis predictivo, gestión de inversiones y dashboard personalizado para seguimiento de portafolios.</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('proyecto.fintech') }}" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors">
                                Ver Proyecto Completo
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            <a href="https://github.com/usuario/fintech-pro" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <!-- MusicEvents - Eventos Musicales
                <div class="glass rounded-xl overflow-hidden card-hover transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative group">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Activo</span>
                        </div>
                        <img src="https://via.placeholder.com/600x400/8B5CF6/ffffff?text=MusicEvents" alt="MusicEvents" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h4 class="text-lg font-bold text-white">Tecnologías Principales</h4>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Laravel</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">TailwindCSS</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Alpine.js</span>
                                    <span class="px-2 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-purple-400 mb-2">MusicEvents</h3>
                        <p class="text-gray-300 mb-4">Plataforma profesional para la gestión y producción de eventos musicales, con sistema de reservas, gestión de artistas y locaciones.</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('proyecto.musicevents') }}" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                                Ver Proyecto Completo
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            <a href="https://github.com/usuario/musicevents" target="_blank" class="text-gray-400 hover:text-purple-400 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Estadísticas -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center p-6 glass rounded-xl">
                    <div class="text-3xl font-bold text-blue-400 mb-2">
                        <span class="counter" data-target="50">0</span>+
                    </div>
                    <p class="text-gray-300">Proyectos Completados</p>
                </div>
                <div class="text-center p-6 glass rounded-xl">
                    <div class="text-3xl font-bold text-blue-400 mb-2">
                        <span class="counter" data-target="30">0</span>k
                    </div>
                    <p class="text-gray-300">Líneas de Código</p>
                </div>
                <div class="text-center p-6 glass rounded-xl">
                    <div class="text-3xl font-bold text-blue-400 mb-2">
                        <span class="counter" data-target="100">0</span>%
                    </div>
                    <p class="text-gray-300">Clientes Satisfechos</p>
                </div>
                <div class="text-center p-6 glass rounded-xl">
                    <div class="text-3xl font-bold text-blue-400 mb-2">
                        <span class="counter" data-target="5">0</span>
                    </div>
                    <p class="text-gray-300">Años de Experiencia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-blue-900/10 to-gray-900"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-gradient">Contáctame</span>
            </h2>
            <div class="glass p-8 rounded-2xl">
                <form class="space-y-6">
                    <div>
                        <label for="nombre" class="block text-blue-400 mb-2">Nombre</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full px-4 py-3 bg-gray-800/50 border border-blue-500/20 rounded-lg focus:outline-none focus:border-blue-500 text-gray-300"
                            placeholder="Tu nombre">
                    </div>
                    <div>
                        <label for="email" class="block text-blue-400 mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 bg-gray-800/50 border border-blue-500/20 rounded-lg focus:outline-none focus:border-blue-500 text-gray-300"
                            placeholder="tu@email.com">
                    </div>
                    <div>
                        <label for="mensaje" class="block text-blue-400 mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4"
                            class="w-full px-4 py-3 bg-gray-800/50 border border-blue-500/20 rounded-lg focus:outline-none focus:border-blue-500 text-gray-300"
                            placeholder="Tu mensaje"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-all transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-blue-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 mb-4 md:mb-0">
                    © 2025 Mi Portafolio. Todos los derechos reservados.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-2xl text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-2xl text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-2xl text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Animación de contadores
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const inc = target / speed;

            const updateCount = () => {
                if (count < target) {
                    count += inc;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        };

        // Observador de intersección para activar las animaciones
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });

        // Observar los contadores
        counters.forEach(counter => observer.observe(counter));

        // Animación suave del scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Cerrar menú móvil si está abierto
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        toggleMenu();
                    }
                }
            });
        });
    </script>
</body>
</html>
