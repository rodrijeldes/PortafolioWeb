<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTech Pro - Sistema Financiero</title>
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
                <span class="inline-block px-4 py-2 bg-orange-500/10 text-orange-400 rounded-full text-sm mb-4">
                    <i class="fas fa-chart-line mr-2"></i>Finanzas & Trading
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-gradient mb-4">FinTech Pro</h1>
                <p class="text-xl text-blue-300 mb-6">Plataforma Financiera Avanzada</p>
                <div class="flex items-center justify-center gap-4 text-sm">
                    <span class="flex items-center text-green-400">
                        <i class="fas fa-circle text-xs mr-2"></i>99.99% Uptime
                    </span>
                    <span class="flex items-center text-blue-400">
                        <i class="fas fa-users mr-2"></i>50k+ Traders
                    </span>
                    <span class="flex items-center text-purple-400">
                        <i class="fas fa-globe mr-2"></i>$2.5B+ Transacciones
                    </span>
                </div>
            </div>

            <!-- Dashboard Demo -->
            <div class="mb-16">
                <div class="glass rounded-2xl overflow-hidden">
                    <div class="p-4 border-b border-orange-500/20 flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="text-sm text-gray-400">pro.fintech.io/dashboard</div>
                    </div>
                    <div class="p-6 space-y-6">
                        <!-- Market Overview -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-green-500/10 to-blue-500/10 rounded-xl p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-green-400 font-bold">BTC/USD</h3>
                                    <span class="text-green-400 text-sm">+2.45%</span>
                                </div>
                                <div class="text-2xl font-bold text-white">$43,521.65</div>
                                <p class="text-gray-400 text-sm">Volume: 1.2B</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-xl p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-blue-400 font-bold">ETH/USD</h3>
                                    <span class="text-red-400 text-sm">-0.82%</span>
                                </div>
                                <div class="text-2xl font-bold text-white">$2,245.30</div>
                                <p class="text-gray-400 text-sm">Volume: 458M</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500/10 to-orange-500/10 rounded-xl p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-purple-400 font-bold">S&P 500</h3>
                                    <span class="text-green-400 text-sm">+1.23%</span>
                                </div>
                                <div class="text-2xl font-bold text-white">4,782.65</div>
                                <p class="text-gray-400 text-sm">Volume: 3.5B</p>
                            </div>
                            <div class="bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-xl p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-orange-400 font-bold">NASDAQ</h3>
                                    <span class="text-green-400 text-sm">+0.95%</span>
                                </div>
                                <div class="text-2xl font-bold text-white">15,923.45</div>
                                <p class="text-gray-400 text-sm">Volume: 2.8B</p>
                            </div>
                        </div>

                        <!-- Chart Demo -->
                        <div class="relative">
                            <img src="https://via.placeholder.com/1200x400/cc6600/ffffff?text=Trading+View+Chart" alt="Trading Chart" class="w-full rounded-xl">
                            <!-- Puntos interactivos -->
                            <div class="absolute top-1/4 left-1/4 pulse-dot group">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-green-500 rounded-full animate-ping opacity-20"></div>
                                <div class="absolute left-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Análisis Técnico en Tiempo Real
                                </div>
                            </div>
                            <div class="absolute top-1/2 right-1/4 pulse-dot group">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-blue-500 rounded-full animate-ping opacity-20"></div>
                                <div class="absolute right-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Predicciones basadas en IA
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
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-chart-pie text-3xl text-white"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-orange-400">FinTech Pro Suite</h2>
                            <p class="text-gray-400">Versión Enterprise 3.2.1</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        FinTech Pro es una plataforma líder en trading y gestión financiera, procesando más de $2.5B en transacciones diarias.
                        Utilizada por más de 50,000 traders activos y 200+ instituciones financieras, nuestra plataforma combina tecnología blockchain,
                        IA avanzada y análisis predictivo para ofrecer insights precisos y operaciones seguras.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-orange-400 flex items-center gap-2">
                                <i class="fas fa-robot"></i>
                                Trading Inteligente
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">Predicción con 94.5% de precisión</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">+2.5M operaciones diarias</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">Latencia < 50ms</span>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-orange-400 flex items-center gap-2">
                                <i class="fas fa-shield-alt"></i>
                                Seguridad
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">Certificación ISO 27001</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">Encryption AES-256</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-orange-400 mt-1"></i>
                                    <span class="text-gray-300">2FA & Biometric Auth</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-orange-500/10 to-red-500/10 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-white mb-4">Rendimiento 2024-2025</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-orange-400">$2.5B+</div>
                                <div class="text-sm text-gray-400">Vol. Diario</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-400">94.5%</div>
                                <div class="text-sm text-gray-400">Precisión IA</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-400">50ms</div>
                                <div class="text-sm text-gray-400">Latencia</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-400">200+</div>
                                <div class="text-sm text-gray-400">Integraciones</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-orange-400 mb-6">Stack Tecnológico</h2>
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-code text-orange-400"></i>
                                <h3 class="font-bold text-orange-400">Frontend</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">Next.js 13</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">TypeScript 5.0</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">TailwindCSS</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">TradingView</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-database text-orange-400"></i>
                                <h3 class="font-bold text-orange-400">Backend</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">Rust</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">gRPC</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">TimescaleDB</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">Redis</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-brain text-orange-400"></i>
                                <h3 class="font-bold text-orange-400">IA & Analytics</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">TensorFlow</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">PyTorch</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">CUDA</span>
                                <span class="px-3 py-1 bg-orange-500/20 rounded-full text-sm text-orange-300">Apache Kafka</span>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-orange-500/20">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Rendimiento</span>
                                        <span class="text-sm text-orange-400">50ms</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-orange-500 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Disponibilidad</span>
                                        <span class="text-sm text-orange-400">99.999%</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-orange-500 rounded-full" style="width: 99.999%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vista del Mercado -->
            <section class="mb-16">
                <div class="glass rounded-2xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="col-span-2">
                            <div class="bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <div>
                                        <h3 class="text-xl font-bold text-orange-400">Vista del Mercado</h3>
                                        <p class="text-gray-400 text-sm">Actualizado hace 2 minutos</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="px-3 py-1 rounded-lg bg-orange-500/20 text-orange-400 text-sm hover:bg-orange-500/30 transition-colors">
                                            1D
                                        </button>
                                        <button class="px-3 py-1 rounded-lg bg-orange-500/20 text-orange-400 text-sm hover:bg-orange-500/30 transition-colors">
                                            1S
                                        </button>
                                        <button class="px-3 py-1 rounded-lg bg-orange-500/20 text-orange-400 text-sm hover:bg-orange-500/30 transition-colors">
                                            1M
                                        </button>
                                    </div>
                                </div>

                                <!-- Gráfico Interactivo -->
                                <div class="relative">
                                    <div class="bg-gradient-to-b from-orange-500/5 to-transparent rounded-lg p-4 h-64">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="text-center">
                                                <i class="fas fa-chart-line text-4xl text-orange-400 mb-2"></i>
                                                <p class="text-gray-400">Gráfico Interactivo de Precios</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Indicadores de Trading -->
                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                        <div class="bg-orange-500/10 rounded-lg p-3">
                                            <div class="text-sm text-gray-400">Volumen 24h</div>
                                            <div class="text-lg font-bold text-orange-400">$1.2B</div>
                                            <div class="text-xs text-green-400">+5.2%</div>
                                        </div>
                                        <div class="bg-orange-500/10 rounded-lg p-3">
                                            <div class="text-sm text-gray-400">RSI</div>
                                            <div class="text-lg font-bold text-orange-400">62.5</div>
                                            <div class="text-xs text-orange-400">Neutral</div>
                                        </div>
                                        <div class="bg-orange-500/10 rounded-lg p-3">
                                            <div class="text-sm text-gray-400">MACD</div>
                                            <div class="text-lg font-bold text-green-400">Compra</div>
                                            <div class="text-xs text-green-400">Señal Fuerte</div>
                                        </div>
                                        <div class="bg-orange-500/10 rounded-lg p-3">
                                            <div class="text-sm text-gray-400">Volatilidad</div>
                                            <div class="text-lg font-bold text-orange-400">3.2%</div>
                                            <div class="text-xs text-yellow-400">Moderada</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-orange-400">Mercados</h3>
                                    <i class="fas fa-sync text-orange-400 cursor-pointer hover:rotate-180 transition-transform duration-500"></i>
                                </div>

                                <div class="space-y-4">
                                    <!-- Bitcoin -->
                                    <div class="bg-orange-500/10 rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center gap-3">
                                                <i class="fab fa-bitcoin text-orange-400"></i>
                                                <div>
                                                    <div class="text-gray-300">BTC/USD</div>
                                                    <div class="text-xs text-gray-500">Bitcoin</div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-gray-300">$45,123.45</div>
                                                <div class="text-xs text-green-400">+2.45%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ethereum -->
                                    <div class="bg-orange-500/10 rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center gap-3">
                                                <i class="fab fa-ethereum text-orange-400"></i>
                                                <div>
                                                    <div class="text-gray-300">ETH/USD</div>
                                                    <div class="text-xs text-gray-500">Ethereum</div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-gray-300">$2,890.12</div>
                                                <div class="text-xs text-red-400">-1.23%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- NASDAQ -->
                                    <div class="bg-orange-500/10 rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center gap-3">
                                                <i class="fas fa-chart-line text-orange-400"></i>
                                                <div>
                                                    <div class="text-gray-300">NASDAQ</div>
                                                    <div class="text-xs text-gray-500">Índice</div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-gray-300">15,234.67</div>
                                                <div class="text-xs text-green-400">+0.89%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Orden Book -->
                                    <div class="mt-6">
                                        <h4 class="text-sm font-bold text-orange-400 mb-3">Orden Book BTC/USD</h4>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-gray-400">45,150.00</span>
                                                <span class="text-green-400">0.5421 BTC</span>
                                            </div>
                                            <div class="flex justify-between text-xs">
                                                <span class="text-gray-400">45,125.50</span>
                                                <span class="text-green-400">1.2314 BTC</span>
                                            </div>
                                            <div class="flex justify-between text-xs">
                                                <span class="text-gray-400">45,100.00</span>
                                                <span class="text-red-400">0.8891 BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Galería de Imágenes -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-4">Plataforma en Acción</h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">Explora las características avanzadas de nuestra plataforma de trading y gestión financiera</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Trading View -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/fintech/trading-view.jpg') }}" alt="Trading View Dashboard"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-chart-line text-orange-400"></i>
                                        <h3 class="text-lg font-bold text-white">Trading View Pro</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Análisis técnico avanzado con más de 100+ indicadores y herramientas de dibujo personalizables</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Tiempo Real</span>
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Multi-Mercado</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Analytics -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/fintech/portfolio-analytics.jpg') }}" alt="Portfolio Analytics"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-chart-pie text-orange-400"></i>
                                        <h3 class="text-lg font-bold text-white">Portfolio Analytics</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Gestión integral de portafolios con análisis de riesgo y optimización automatizada</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">ML Optimizado</span>
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Risk Management</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- AI Predictions -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/fintech/ai-predictions.jpg') }}" alt="AI Predictions"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-brain text-orange-400"></i>
                                        <h3 class="text-lg font-bold text-white">IA Predictiva</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Modelos de deep learning para predicción de tendencias y análisis de sentimiento</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Neural Networks</span>
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">94.5% Precisión</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Risk Management -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/fintech/risk-management.jpg') }}" alt="Risk Management"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1543286386-2e659306cd6c?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-shield-alt text-orange-400"></i>
                                        <h3 class="text-lg font-bold text-white">Risk Management</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Control avanzado de riesgos con alertas automatizadas y límites dinámicos</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Auto-Hedging</span>
                                        <span class="px-2 py-1 bg-orange-500/20 rounded-full text-xs text-orange-300">Stop Loss IA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Highlights -->
                <div class="grid grid-cols-3 gap-6 mt-8">
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-bolt text-2xl text-orange-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Ejecución Ultra Rápida</p>
                        <p class="text-xs text-orange-400">Latencia < 50ms</p>
                    </div>
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-lock text-2xl text-orange-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Seguridad Avanzada</p>
                        <p class="text-xs text-orange-400">ISO 27001 Certified</p>
                    </div>
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-clock text-2xl text-orange-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Soporte 24/7</p>
                        <p class="text-xs text-orange-400">Tiempo respuesta < 5min</p>
                    </div>
                </div>
            </div>

            <!-- Enlaces -->
            <div class="glass rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-orange-400 mb-6 text-center">¿Listo para Empezar?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- GitHub -->
                    <a href="https://github.com/usuario/fintech-pro" target="_blank"
                       class="group bg-gradient-to-br from-orange-500/10 to-red-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-orange-500/20 hover:to-red-500/20 transition-all transform hover:scale-105">
                        <i class="fab fa-github text-4xl text-orange-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-orange-400 mb-2">Código Fuente</h3>
                        <p class="text-sm text-gray-400 text-center">Explora el repositorio y contribuye al proyecto</p>
                    </a>

                    <!-- Documentación -->
                    <a href="#" target="_blank"
                       class="group bg-gradient-to-br from-orange-500/10 to-red-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-orange-500/20 hover:to-red-500/20 transition-all transform hover:scale-105">
                        <i class="fas fa-book text-4xl text-orange-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-orange-400 mb-2">Documentación</h3>
                        <p class="text-sm text-gray-400 text-center">Guías detalladas y referencias técnicas</p>
                    </a>

                    <!-- Demo -->
                    <a href="#" target="_blank"
                       class="group bg-gradient-to-br from-orange-500/10 to-red-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-orange-500/20 hover:to-red-500/20 transition-all transform hover:scale-105">
                        <i class="fas fa-rocket text-4xl text-orange-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-orange-400 mb-2">Demo en Vivo</h3>
                        <p class="text-sm text-gray-400 text-center">Prueba la plataforma con datos en tiempo real</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
