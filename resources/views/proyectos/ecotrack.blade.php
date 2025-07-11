<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoTrack - Plataforma de Sostenibilidad</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-gray-900 text-gray-100">
    <!-- Navegación -->
    <nav class="fixed w-full z-50 bg-gray-900 border-b border-blue-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-gradient">
                    <i class="fas fa-chevron-left mr-2"></i>Volver
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido del Proyecto -->
    <div class="pt-20 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Encabezado del Proyecto -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-green-500/10 text-green-400 rounded-full text-sm mb-4">
                    <i class="fas fa-leaf mr-2"></i>Sostenibilidad Empresarial
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-gradient mb-4">EcoTrack</h1>
                <p class="text-xl text-blue-300 mb-6">Plataforma de Sostenibilidad Empresarial</p>
                <div class="flex items-center justify-center gap-4 text-sm">
                    <span class="flex items-center text-green-400">
                        <i class="fas fa-circle text-xs mr-2"></i>En Producción
                    </span>
                    <span class="flex items-center text-blue-400">
                        <i class="fas fa-building mr-2"></i>150+ Empresas
                    </span>
                    <span class="flex items-center text-purple-400">
                        <i class="fas fa-globe mr-2"></i>12 Países
                    </span>
                </div>
            </div>

            <!-- Dashboard Demo -->
            <div class="mb-16">
                <div class="glass rounded-2xl overflow-hidden">
                    <div class="p-4 border-b border-green-500/20 flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="text-sm text-gray-400">app.ecotrack.io/dashboard</div>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <!-- Tarjeta de Huella de Carbono -->
                            <div class="bg-gradient-to-br from-green-500/10 to-blue-500/10 rounded-xl p-4">
                                <h3 class="text-green-400 font-bold mb-2">Huella de Carbono</h3>
                                <div class="text-3xl font-bold text-white mb-2">-25.8%</div>
                                <p class="text-green-400 text-sm flex items-center">
                                    <i class="fas fa-arrow-down mr-1"></i>vs mes anterior
                                </p>
                            </div>
                            <!-- Tarjeta de Energía Renovable -->
                            <div class="bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-xl p-4">
                                <h3 class="text-blue-400 font-bold mb-2">Energía Renovable</h3>
                                <div class="text-3xl font-bold text-white mb-2">78.5%</div>
                                <p class="text-blue-400 text-sm flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i>del consumo total
                                </p>
                            </div>
                            <!-- Tarjeta de Reciclaje -->
                            <div class="bg-gradient-to-br from-purple-500/10 to-green-500/10 rounded-xl p-4">
                                <h3 class="text-purple-400 font-bold mb-2">Tasa de Reciclaje</h3>
                                <div class="text-3xl font-bold text-white mb-2">92.3%</div>
                                <p class="text-purple-400 text-sm flex items-center">
                                    <i class="fas fa-check mr-1"></i>objetivo cumplido
                                </p>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="https://via.placeholder.com/1200x400/00cc66/ffffff?text=Dashboard+Interactivo" alt="EcoTrack Dashboard" class="w-full rounded-xl">
                            <!-- Puntos interactivos -->
                            <div class="absolute top-1/4 left-1/4 pulse-dot group">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-green-500 rounded-full animate-ping opacity-20"></div>
                                <div class="absolute left-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Monitoreo en tiempo real de emisiones CO2
                                </div>
                            </div>
                            <div class="absolute top-1/2 right-1/4 pulse-dot group">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-blue-500 rounded-full animate-ping opacity-20"></div>
                                <div class="absolute right-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Análisis predictivo de consumo energético
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descripción del Proyecto -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="md:col-span-2 glass p-8 rounded-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-leaf text-3xl text-white"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-blue-400">EcoTrack Platform</h2>
                            <p class="text-gray-400">Versión 2.8.5 Enterprise</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        EcoTrack es la plataforma líder en gestión de sostenibilidad empresarial, utilizada por más de 150 empresas en 12 países.
                        Nuestra solución ha ayudado a reducir más de 500,000 toneladas de CO2 en 2024, generando ahorros promedio del 28% en costos energéticos para nuestros clientes.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-green-400 flex items-center gap-2">
                                <i class="fas fa-chart-line"></i>
                                Métricas Clave
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-400 mt-1"></i>
                                    <span class="text-gray-300">Reducción promedio de 32% en huella de carbono</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-400 mt-1"></i>
                                    <span class="text-gray-300">Más de $10M en ahorros energéticos</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-400 mt-1"></i>
                                    <span class="text-gray-300">98.5% de precisión en predicciones</span>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-blue-400 flex items-center gap-2">
                                <i class="fas fa-award"></i>
                                Certificaciones
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-medal text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">ISO 14001:2024 Certified</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-medal text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">Carbon Trust Standard</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-medal text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">ESG Excellence Award 2024</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-white mb-4">Impacto Ambiental 2024</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-400">500k</div>
                                <div class="text-sm text-gray-400">Ton. CO2 Reducidas</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-400">45M</div>
                                <div class="text-sm text-gray-400">kWh Ahorrados</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-400">850k</div>
                                <div class="text-sm text-gray-400">m³ Agua Ahorrada</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-yellow-400">92%</div>
                                <div class="text-sm text-gray-400">Residuos Reciclados</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="glass p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-blue-400 mb-6">Stack Tecnológico</h2>
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-layer-group text-green-400"></i>
                                <h3 class="font-bold text-green-400">Frontend & UI</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-500/20 rounded-full text-sm text-green-300">Vue.js 3.0</span>
                                <span class="px-3 py-1 bg-green-500/20 rounded-full text-sm text-green-300">Vuex 4.0</span>
                                <span class="px-3 py-1 bg-green-500/20 rounded-full text-sm text-green-300">TailwindCSS</span>
                                <span class="px-3 py-1 bg-green-500/20 rounded-full text-sm text-green-300">D3.js</span>
                                <span class="px-3 py-1 bg-green-500/20 rounded-full text-sm text-green-300">WebGL</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-server text-blue-400"></i>
                                <h3 class="font-bold text-blue-400">Backend & API</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Laravel 10</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">PostgreSQL 15</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">GraphQL</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Redis</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">WebSockets</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-microchip text-purple-400"></i>
                                <h3 class="font-bold text-purple-400">IoT & Hardware</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Arduino</span>
                                <span class="px-3 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Raspberry Pi</span>
                                <span class="px-3 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">MQTT</span>
                                <span class="px-3 py-1 bg-purple-500/20 rounded-full text-sm text-purple-300">Sensores IoT</span>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-blue-500/20">
                            <h3 class="font-bold text-blue-400 mb-3">Métricas de Rendimiento</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Tiempo de Respuesta</span>
                                        <span class="text-sm text-green-400">120ms</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-green-500 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Uptime</span>
                                        <span class="text-sm text-green-400">99.99%</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-green-500 rounded-full" style="width: 99.99%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Demo Interactiva -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-blue-400 mb-8 text-center">Demo Interactiva</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="glass rounded-xl overflow-hidden group relative">
                        <img src="https://via.placeholder.com/600x400/00cc66/ffffff?text=Dashboard+Ambiental" alt="Dashboard Ambiental" class="w-full transform group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-xl font-bold text-white mb-2">Dashboard Ambiental</h3>
                                <p class="text-gray-300 mb-4">Monitoreo en tiempo real de emisiones de CO2, consumo energético y recursos naturales.</p>
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-green-500/20 text-green-300 rounded-full text-sm">Real-time</span>
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glass rounded-xl overflow-hidden group relative">
                        <img src="https://via.placeholder.com/600x400/00cc66/ffffff?text=Análisis+Predictivo" alt="Análisis Predictivo" class="w-full transform group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-xl font-bold text-white mb-2">Análisis Predictivo</h3>
                                <p class="text-gray-300 mb-4">IA y Machine Learning para predecir tendencias y optimizar recursos.</p>
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-purple-500/20 text-purple-300 rounded-full text-sm">AI/ML</span>
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Predicción</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glass rounded-xl overflow-hidden group relative">
                        <img src="https://via.placeholder.com/600x400/00cc66/ffffff?text=IoT+Monitoring" alt="IoT Monitoring" class="w-full transform group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-xl font-bold text-white mb-2">Monitoreo IoT</h3>
                                <p class="text-gray-300 mb-4">Red de sensores inteligentes para monitoreo ambiental continuo.</p>
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded-full text-sm">IoT</span>
                                    <span class="px-2 py-1 bg-green-500/20 text-green-300 rounded-full text-sm">Sensores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glass rounded-xl overflow-hidden group relative">
                        <img src="https://via.placeholder.com/600x400/00cc66/ffffff?text=Reportes+ESG" alt="Reportes ESG" class="w-full transform group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-xl font-bold text-white mb-2">Reportes ESG</h3>
                                <p class="text-gray-300 mb-4">Generación automatizada de informes de sostenibilidad y cumplimiento ESG.</p>
                                <div class="flex gap-2">
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Reportes</span>
                                    <span class="px-2 py-1 bg-green-500/20 text-green-300 rounded-full text-sm">ESG</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enlaces y CTA -->
            <div class="text-center space-y-6">
                <div class="flex justify-center gap-4">
                    <a href="https://github.com/usuario/ecotrack" target="_blank"
                       class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-full hover:bg-green-700 transition-all transform hover:scale-105">
                        <i class="fab fa-github mr-2"></i>Ver en GitHub
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 border-2 border-green-500 text-green-400 rounded-full hover:bg-green-500 hover:text-white transition-all transform hover:scale-105">
                        <i class="fas fa-play mr-2"></i>Ver Demo en Vivo
                    </a>
                </div>
                <p class="text-gray-400 text-sm">
                    <i class="fas fa-shield-alt mr-1"></i>
                    ISO 27001 Certified - Seguridad de Nivel Empresarial
                </p>
            </div>
        </div>
    </div>
</body>
</html>
