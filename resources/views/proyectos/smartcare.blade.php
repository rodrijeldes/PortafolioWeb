<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartCare - Sistema de Gestión Médica</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .dynamic-bg {
            background: linear-gradient(-45deg, #1a1f35, #14242d, #1a2c34, #162438);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        .medical-gradient {
            background: linear-gradient(135deg, rgba(45,212,191,0.1) 0%, rgba(56,178,172,0.1) 100%);
            backdrop-filter: blur(12px);
        }

        .text-gradient-medical {
            background: linear-gradient(135deg, #2dd4bf 0%, #38b2ac 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass {
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }

        .glass:hover {
            backdrop-filter: blur(16px);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="dynamic-bg text-gray-100 min-h-screen">
    <!-- Navegación -->
    <nav class="fixed w-full z-50 bg-gray-900 border-b border-teal-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-gradient-medical">
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
                <span class="inline-block px-4 py-2 bg-teal-500/10 text-teal-400 rounded-full text-sm mb-4">
                    <i class="fas fa-shield-heart mr-2"></i>Healthcare Tech
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-gradient-medical mb-4">SmartCare</h1>
                <p class="text-xl text-teal-300 mb-6">Plataforma Integral de Salud Digital</p>

                <!-- Estadísticas -->
                <div class="max-w-3xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <div class="medical-gradient glass px-4 py-3 rounded-xl">
                        <div class="text-2xl font-bold text-teal-400">150+</div>
                        <div class="text-sm text-gray-400">Centros Médicos</div>
                    </div>
                    <div class="medical-gradient glass px-4 py-3 rounded-xl">
                        <div class="text-2xl font-bold text-teal-400">2.5M+</div>
                        <div class="text-sm text-gray-400">Pacientes</div>
                    </div>
                    <div class="medical-gradient glass px-4 py-3 rounded-xl">
                        <div class="text-2xl font-bold text-teal-400">15k+</div>
                        <div class="text-sm text-gray-400">Profesionales</div>
                    </div>
                    <div class="medical-gradient glass px-4 py-3 rounded-xl">
                        <div class="text-2xl font-bold text-teal-400">99.99%</div>
                        <div class="text-sm text-gray-400">Uptime</div>
                    </div>
                </div>

                <!-- Certificaciones -->
                <div class="flex items-center justify-center gap-6 text-sm">
                    <span class="flex items-center text-teal-400">
                        <i class="fas fa-certificate mr-2"></i>HIPAA Compliant
                    </span>
                    <span class="flex items-center text-teal-400">
                        <i class="fas fa-shield-check mr-2"></i>ISO 27001
                    </span>
                    <span class="flex items-center text-teal-400">
                        <i class="fas fa-award mr-2"></i>HL7 FHIR
                    </span>
                </div>
            </div>

            <!-- Demo Interactivo -->
            <div class="mb-16">
                <div class="glass rounded-2xl overflow-hidden">
                    <div class="p-4 border-b border-blue-500/20 flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="text-sm text-gray-400">smartcare.app/dashboard</div>
                    </div>
                    <div class="relative">
                        <img src="https://via.placeholder.com/1200x600/0066cc/ffffff?text=SmartCare+Dashboard" alt="SmartCare Dashboard" class="w-full">
                        <!-- Puntos interactivos -->
                        <div class="absolute top-1/4 left-1/4 pulse-dot">
                            <div class="relative">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-blue-500 rounded-full animate-ping opacity-20"></div>
                                <!-- Tooltip -->
                                <div class="absolute left-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Monitor de Signos Vitales en Tiempo Real
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-1/2 right-1/4 pulse-dot">
                            <div class="relative">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <div class="absolute -inset-2 bg-green-500 rounded-full animate-ping opacity-20"></div>
                                <!-- Tooltip -->
                                <div class="absolute right-6 top-0 hidden group-hover:block bg-gray-900 text-white p-2 rounded-lg text-sm w-48">
                                    Sistema de Alertas Inteligentes
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
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-hospital-user text-3xl text-white"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-blue-400">SmartCare Enterprise</h2>
                            <p class="text-gray-400">v3.5.2 - Healthcare Suite</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-blue-400 flex items-center gap-2">
                                <i class="fas fa-stethoscope"></i>
                                Atención Médica
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">98% reducción en errores médicos</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">+500k consultas mensuales</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">Diagnóstico IA con 95% precisión</span>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-blue-400 flex items-center gap-2">
                                <i class="fas fa-shield-alt"></i>
                                Seguridad
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">Encriptación AES-256</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">Autenticación biométrica</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-blue-400 mt-1"></i>
                                    <span class="text-gray-300">Auditoría 24/7</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl p-6 mb-6">
                        <h3 class="text-xl font-bold text-white mb-4">Métricas de Impacto</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-400">45%</div>
                                <div class="text-sm text-gray-400">Reducción de Espera</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-400">92%</div>
                                <div class="text-sm text-gray-400">Satisfacción</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-400">30%</div>
                                <div class="text-sm text-gray-400">Ahorro Operativo</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-orange-400">24/7</div>
                                <div class="text-sm text-gray-400">Disponibilidad</div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-blue-400 mb-3">Módulos Integrados:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-blue-500/10 p-4 rounded-lg">
                                <h4 class="font-bold text-blue-300 mb-2">Gestión Clínica</h4>
                                <ul class="text-sm text-gray-400 space-y-1">
                                    <li>• Expedientes Electrónicos</li>
                                    <li>• Gestión de Citas</li>
                                    <li>• Historial Médico</li>
                                </ul>
                            </div>
                            <div class="bg-blue-500/10 p-4 rounded-lg">
                                <h4 class="font-bold text-blue-300 mb-2">Telemedicina</h4>
                                <ul class="text-sm text-gray-400 space-y-1">
                                    <li>• Consultas Virtuales HD</li>
                                    <li>• Chat Médico 24/7</li>
                                    <li>• Recetas Digitales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass p-8 rounded-2xl">
                    <h2 class="text-2xl font-bold text-blue-400 mb-6">Stack Tecnológico</h2>
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-code text-blue-400"></i>
                                <h3 class="font-bold text-blue-400">Frontend</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Next.js 13</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">React Native</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">TailwindCSS</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">WebRTC</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-server text-blue-400"></i>
                                <h3 class="font-bold text-blue-400">Backend</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">FastAPI</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">PostgreSQL</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Redis</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">RabbitMQ</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <i class="fas fa-brain text-blue-400"></i>
                                <h3 class="font-bold text-blue-400">IA & Analytics</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">TensorFlow</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">scikit-learn</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">OpenCV</span>
                                <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">Apache Spark</span>
                            </div>
                        </div>

                        <div class="mt-6 pt-6 border-t border-blue-500/20">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Tiempo de Respuesta</span>
                                        <span class="text-sm text-blue-400">120ms</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-blue-500 rounded-full" style="width: 92%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm text-gray-400">Precisión IA</span>
                                        <span class="text-sm text-blue-400">95.5%</span>
                                    </div>
                                    <div class="h-2 bg-gray-700 rounded-full">
                                        <div class="h-2 bg-blue-500 rounded-full" style="width: 95.5%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vista del Sistema -->
            <div class="mb-16">
                <div class="glass rounded-2xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="col-span-2">
                            <div class="bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <div>
                                        <h3 class="text-xl font-bold text-blue-400">Panel de Control</h3>
                                        <p class="text-gray-400 text-sm">Monitor en Tiempo Real</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="px-3 py-1 rounded-lg bg-green-500/20 text-green-400 text-sm">
                                            <i class="fas fa-circle text-xs mr-1"></i>Online
                                        </span>
                                        <button class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center text-blue-400 hover:bg-blue-500/30 transition-colors">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Panel de Monitoreo -->
                                <div class="space-y-6">
                                    <!-- Estadísticas Vitales -->
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="bg-blue-500/10 rounded-lg p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="text-sm text-gray-400">Pacientes Activos</span>
                                                <i class="fas fa-user-plus text-blue-400"></i>
                                            </div>
                                            <div class="text-2xl font-bold text-blue-400">1,247</div>
                                            <div class="text-xs text-green-400">+12% vs. ayer</div>
                                        </div>
                                        <div class="bg-blue-500/10 rounded-lg p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="text-sm text-gray-400">Tiempo de Espera</span>
                                                <i class="fas fa-clock text-blue-400"></i>
                                            </div>
                                            <div class="text-2xl font-bold text-blue-400">8.5m</div>
                                            <div class="text-xs text-green-400">-15% vs. media</div>
                                        </div>
                                        <div class="bg-blue-500/10 rounded-lg p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="text-sm text-gray-400">Satisfacción</span>
                                                <i class="fas fa-smile text-blue-400"></i>
                                            </div>
                                            <div class="text-2xl font-bold text-blue-400">92%</div>
                                            <div class="text-xs text-green-400">+5% vs. mes</div>
                                        </div>
                                    </div>

                                    <!-- Gráfico de Actividad -->
                                    <div class="bg-blue-900/20 rounded-lg p-4 h-48 relative">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="text-center">
                                                <i class="fas fa-chart-area text-4xl text-blue-400 mb-2"></i>
                                                <p class="text-gray-400">Gráfico de Actividad del Hospital</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-blue-400">Alertas</h3>
                                    <span class="px-3 py-1 bg-blue-500/20 rounded-full text-sm text-blue-300">
                                        Últimas 24h
                                    </span>
                                </div>

                                <div class="space-y-4">
                                    <!-- Alerta Urgente -->
                                    <div class="bg-red-500/10 border border-red-500/20 rounded-lg p-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                            <span class="text-red-400 text-sm font-bold">Urgente</span>
                                        </div>
                                        <p class="text-sm text-gray-300">Nivel de ocupación UCI > 85%</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-xs text-gray-400">Hace 5 min</span>
                                            <button class="text-red-400 text-sm">Ver detalles</button>
                                        </div>
                                    </div>

                                    <!-- Alerta Normal -->
                                    <div class="bg-yellow-500/10 border border-yellow-500/20 rounded-lg p-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                            <span class="text-yellow-400 text-sm font-bold">Atención</span>
                                        </div>
                                        <p class="text-sm text-gray-300">Stock de medicamentos < 20%</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-xs text-gray-400">Hace 15 min</span>
                                            <button class="text-yellow-400 text-sm">Ver detalles</button>
                                        </div>
                                    </div>

                                    <!-- Alerta Informativa -->
                                    <div class="bg-blue-500/10 border border-blue-500/20 rounded-lg p-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                            <span class="text-blue-400 text-sm font-bold">Info</span>
                                        </div>
                                        <p class="text-sm text-gray-300">Mantenimiento programado: 22:00</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-xs text-gray-400">Hace 1h</span>
                                            <button class="text-blue-400 text-sm">Ver detalles</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Galería de Imágenes -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-4">Interfaz Médica Inteligente</h2>
                    <p class="text-teal-400 max-w-2xl mx-auto">Diseñada por médicos para médicos, nuestra interfaz combina usabilidad y eficiencia clínica</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Dashboard Médico -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/medical/dashboard.jpg') }}" alt="Dashboard Médico"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-laptop-medical text-teal-400"></i>
                                        <h3 class="text-lg font-bold text-white">Dashboard Médico</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Sistema centralizado de monitoreo de pacientes con alertas en tiempo real</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">Tiempo Real</span>
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">IA Asistida</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Telemedicina -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/medical/telemedicine.jpg') }}" alt="Telemedicina HD"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-video text-teal-400"></i>
                                        <h3 class="text-lg font-bold text-white">Telemedicina HD</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Consultas virtuales en alta definición con herramientas de diagnóstico remoto</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">HD Quality</span>
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">Multi-Device</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expedientes Digitales -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/medical/records.jpg') }}" alt="Expedientes Digitales"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1583912267550-d44c9c77f47b?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-file-medical text-teal-400"></i>
                                        <h3 class="text-lg font-bold text-white">Expedientes Digitales</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Gestión completa de historiales médicos con búsqueda inteligente</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">HL7 FHIR</span>
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">HIPAA Compliant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Diagnóstico IA -->
                    <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('img/medical/ai-diagnostic.jpg') }}" alt="Diagnóstico IA"
                                 class="w-full h-[300px] object-cover"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=300&fit=crop'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end">
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-brain text-teal-400"></i>
                                        <h3 class="text-lg font-bold text-white">Diagnóstico IA</h3>
                                    </div>
                                    <p class="text-sm text-gray-300">Asistencia diagnóstica con IA y procesamiento de imágenes médicas</p>
                                    <div class="flex gap-2 mt-3">
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">95% Precisión</span>
                                        <span class="px-2 py-1 bg-teal-500/20 rounded-full text-xs text-teal-300">Deep Learning</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Highlights -->
                <div class="grid grid-cols-3 gap-6 mt-8">
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-shield-virus text-2xl text-teal-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Protección Total</p>
                        <p class="text-xs text-teal-400">HIPAA & GDPR</p>
                    </div>
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-hand-holding-medical text-2xl text-teal-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Atención 24/7</p>
                        <p class="text-xs text-teal-400">Soporte Médico</p>
                    </div>
                    <div class="glass rounded-lg p-4 text-center">
                        <i class="fas fa-mobile-alt text-2xl text-teal-400 mb-2"></i>
                        <p class="text-sm text-gray-400">Multi-Dispositivo</p>
                        <p class="text-xs text-teal-400">iOS & Android</p>
                    </div>
                </div>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="glass rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-blue-400 mb-6 text-center">Recursos del Proyecto</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- GitHub -->
                    <a href="https://github.com/usuario/smartcare" target="_blank"
                       class="group bg-gradient-to-br from-blue-500/10 to-purple-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-blue-500/20 hover:to-purple-500/20 transition-all transform hover:scale-105">
                        <i class="fab fa-github text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-blue-400 mb-2">Código Fuente</h3>
                        <p class="text-sm text-gray-400 text-center">Explora y contribuye al desarrollo</p>
                    </a>

                    <!-- Documentación -->
                    <a href="#" target="_blank"
                       class="group bg-gradient-to-br from-blue-500/10 to-purple-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-blue-500/20 hover:to-purple-500/20 transition-all transform hover:scale-105">
                        <i class="fas fa-book-medical text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-blue-400 mb-2">Documentación</h3>
                        <p class="text-sm text-gray-400 text-center">Guías técnicas y protocolos médicos</p>
                    </a>

                    <!-- API -->
                    <a href="#" target="_blank"
                       class="group bg-gradient-to-br from-blue-500/10 to-purple-500/10 p-6 rounded-xl flex flex-col items-center justify-center hover:from-blue-500/20 hover:to-purple-500/20 transition-all transform hover:scale-105">
                        <i class="fas fa-code text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-lg font-bold text-blue-400 mb-2">API REST</h3>
                        <p class="text-sm text-gray-400 text-center">Documentación de integración HL7 FHIR</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
