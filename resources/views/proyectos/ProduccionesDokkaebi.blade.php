<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producciones Dokkaebi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes gradientBG {
            0% { background-position: 0% 0%; }
            25% { background-position: 100% 0%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 0% 100%; }
            100% { background-position: 0% 0%; }
        }

        @keyframes colorShift {
            0% { filter: hue-rotate(0deg); }
            50% { filter: hue-rotate(30deg); }
            100% { filter: hue-rotate(0deg); }
        }

        .dynamic-bg {
            background: linear-gradient(-45deg,
                #2D1950,
                #4B2079,
                #5D2C8D,
                #6A3495,
                #7B3AAD,
                #4B2079
            );
            background-size: 400% 400%;
            animation: gradientBG 30s ease infinite, colorShift 15s infinite;
            position: relative;
        }

        .dynamic-bg::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%,
                rgba(147, 51, 234, 0.07) 0%,
                rgba(126, 34, 206, 0.05) 50%,
                rgba(88, 28, 135, 0.08) 100%
            );
            pointer-events: none;
        }

        .text-gradient-music {
            background: linear-gradient(135deg, #f0abfc 0%, #e879f9 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .glass {
            background: rgba(30, 20, 50, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(147, 51, 234, 0.1);
            transition: all 0.3s ease;
        }

        .glass:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
        }

        .music-card {
            transition: all 0.3s ease;
        }

        .music-card:hover {
            transform: translateY(-10px) scale(1.02);
        }
    </style>
</head>
<body class="dynamic-bg text-gray-100 min-h-screen">
    <!-- Navegación -->
    <nav class="fixed w-full z-50 bg-[#0f051d] shadow-lg border-b-2 border-purple-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-gradient-music group transition-all duration-300">
                    <i class="fas fa-chevron-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i>Volver
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="#servicios" class="text-white hover:text-purple-300 font-medium transition-colors">Servicios</a>
                    <a href="#nosotros" class="text-white hover:text-purple-300 font-medium transition-colors">Nosotros</a>
                    <a href="#eventos" class="text-white hover:text-purple-300 font-medium transition-colors">Eventos</a>
                    <a href="#contacto" class="text-white hover:text-purple-300 font-medium transition-colors">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-gradient-music animate-pulse">
                Producciones Dokkaebi
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8">
                Creamos experiencias musicales inolvidables
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#contacto" class="px-8 py-3 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition-colors">
                    Contáctanos
                </a>
                <a href="#servicios" class="px-8 py-3 bg-transparent border border-purple-500 text-purple-400 rounded-full hover:bg-purple-500/10 transition-colors">
                    Servicios
                </a>
            </div>
        </div>
    </div>

    <!-- Servicios -->
    <section id="servicios" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gradient-music mb-4">Nuestros Servicios</h2>
                <p class="text-xl text-gray-300">Soluciones completas para tu evento musical</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Producción Musical -->
                <div class="glass rounded-2xl p-6 music-card">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-music text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-purple-400 mb-4">Producción Musical</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Sonido profesional
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Iluminación de escenario
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Efectos especiales
                        </li>
                    </ul>
                </div>

                <!-- Gestión de Artistas -->
                <div class="glass rounded-2xl p-6 music-card">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-microphone text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-purple-400 mb-4">Gestión de Artistas</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Contratación de bandas
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            DJs profesionales
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Coordinación de shows
                        </li>
                    </ul>
                </div>

                <!-- Locaciones -->
                <div class="glass rounded-2xl p-6 music-card">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-purple-400 mb-4">Locaciones</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Venues exclusivos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Montaje completo
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-purple-400 mr-2"></i>
                            Logística integral
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nosotros -->
    <section id="nosotros" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-gradient-music">Sobre Nosotros</h2>
                    <p class="text-gray-300 text-lg">
                        Con más de 10 años de experiencia en la industria musical, MusicEvents se ha convertido en el referente
                        en la producción de eventos musicales de alto nivel.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="glass p-4 rounded-xl text-center">
                            <div class="text-3xl font-bold text-purple-400 mb-2">500+</div>
                            <div class="text-sm text-gray-400">Eventos Realizados</div>
                        </div>
                        <div class="glass p-4 rounded-xl text-center">
                            <div class="text-3xl font-bold text-purple-400 mb-2">100%</div>
                            <div class="text-sm text-gray-400">Clientes Satisfechos</div>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="px-4 py-2 bg-purple-500/20 rounded-full text-purple-400 text-sm">
                            Certificados ISO 9001
                        </span>
                        <span class="px-4 py-2 bg-purple-500/20 rounded-full text-purple-400 text-sm">
                            Premios Billboard
                        </span>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/music/team.jpg') }}" alt="Nuestro Equipo"
                         class="rounded-2xl floating"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1525130413817-d45c1d127c42?w=800&h=600&fit=crop'">
                </div>
            </div>
        </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gradient-music mb-4">Próximos Eventos</h2>
                <p class="text-xl text-gray-300">No te pierdas nuestros eventos destacados</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Evento 1 -->
                <div class="glass rounded-2xl overflow-hidden music-card">
                    <img src="{{ asset('img/music/event1.jpg') }}" alt="Festival de Verano"
                         class="w-full h-48 object-cover"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800&h=400&fit=crop'">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-purple-400">Festival de Verano</h3>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">
                                15 AGO
                            </span>
                        </div>
                        <p class="text-gray-300 mb-4">El festival más grande del año con los mejores artistas internacionales.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-400">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Estadio Nacional
                            </span>
                            <a href="#" class="text-purple-400 hover:text-purple-300">Más info →</a>
                        </div>
                    </div>
                </div>

                <!-- Evento 2 -->
                <div class="glass rounded-2xl overflow-hidden music-card">
                    <img src="{{ asset('img/music/event2.jpg') }}" alt="Concierto Rock"
                         class="w-full h-48 object-cover"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=800&h=400&fit=crop'">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-purple-400">Rock Night</h3>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">
                                22 AGO
                            </span>
                        </div>
                        <p class="text-gray-300 mb-4">Una noche de rock clásico con las mejores bandas tributo.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-400">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Teatro Municipal
                            </span>
                            <a href="#" class="text-purple-400 hover:text-purple-300">Más info →</a>
                        </div>
                    </div>
                </div>

                <!-- Evento 3 -->
                <div class="glass rounded-2xl overflow-hidden music-card">
                    <img src="{{ asset('img/music/event3.jpg') }}" alt="DJ Session"
                         class="w-full h-48 object-cover"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1571266866051-47d19543a14a?w=800&h=400&fit=crop'">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-purple-400">Electronic Night</h3>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">
                                29 AGO
                            </span>
                        </div>
                        <p class="text-gray-300 mb-4">Los mejores DJs internacionales en una noche inolvidable.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-400">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Club Platinum
                            </span>
                            <a href="#" class="text-purple-400 hover:text-purple-300">Más info →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="glass rounded-2xl p-8">
                    <h2 class="text-3xl font-bold text-gradient-music mb-6">Contáctanos</h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-300 mb-2">Nombre</label>
                            <input type="text" class="w-full px-4 py-3 bg-purple-500/10 border border-purple-500/20 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-purple-500/10 border border-purple-500/20 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Mensaje</label>
                            <textarea rows="4" class="w-full px-4 py-3 bg-purple-500/10 border border-purple-500/20 rounded-lg text-white focus:outline-none focus:border-purple-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="glass rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-purple-400 mb-4">Información de Contacto</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-phone text-purple-400 w-8"></i>
                                <span class="text-gray-300">+56 2 2234 5678</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-purple-400 w-8"></i>
                                <span class="text-gray-300">contacto@musicevents.cl</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-purple-400 w-8"></i>
                                <span class="text-gray-300">Av. Principal 1234, Santiago</span>
                            </div>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-purple-400 mb-4">Síguenos</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500/30 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500/30 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500/30 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center text-purple-400 hover:bg-purple-500/30 transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
