<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BootService - Desarrollo de Software, Venta de Equipos de Cómputo y Soporte Técnico</title>
    <meta name="description" content="BootService - Soluciones tecnológicas integrales: desarrollo de software a medida, venta de equipos de cómputo, y soporte técnico profesional.">

    @fonts

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-gray-50 via-white to-gray-50 dark:from-gray-950 dark:via-gray-900 dark:to-gray-950 text-gray-900 dark:text-gray-100 font-sans antialiased transition-colors duration-300">
    <!-- Header -->
    <header class="fixed top-0 w-full bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl border-b border-gray-200/50 dark:border-gray-800/50 shadow-sm z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <a href="#inicio" class="flex-shrink-0 flex items-center gap-3 group">
                        <img src="{{ asset('logo.png') }}" alt="BootService Logo" class="h-12 w-auto group-hover:scale-105 transition-transform duration-300">
                        <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-400 dark:to-blue-500 bg-clip-text text-transparent">BootService</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#inicio" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200 font-medium">Inicio</a>
                    <a href="#servicios" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200 font-medium">Servicios</a>
                    <a href="#nosotros" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200 font-medium">Nosotros</a>
                    <a href="#contacto" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200 font-medium">Contacto</a>
                    <button id="theme-toggle" class="ml-4 p-2.5 rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 shadow-sm">
                        <span class="material-symbols-outlined text-gray-700 dark:text-gray-300 text-xl leading-none">dark_mode</span>
                    </button>
                </div>
                <div class="md:hidden flex items-center gap-2">
                    <button id="theme-toggle-mobile" class="p-2.5 rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200">
                        <span class="material-symbols-outlined text-gray-700 dark:text-gray-300 text-xl leading-none">dark_mode</span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-400/10 dark:bg-blue-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-400/10 dark:bg-purple-600/10 rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <div class="flex justify-center mb-10">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full blur-2xl opacity-20 animate-pulse"></div>
                        <img src="{{ asset('logo.png') }}" alt="BootService Logo" class="relative h-28 w-auto md:h-36 drop-shadow-2xl">
                    </div>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 dark:text-white mb-6 tracking-tight">
                    Soluciones Tecnológicas
                    <span class="block mt-2 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-700 dark:from-blue-400 dark:via-purple-400 dark:to-blue-500 bg-clip-text text-transparent">Integrales</span>
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-gray-600 dark:text-gray-400 mb-10 max-w-4xl mx-auto leading-relaxed">
                    Desarrollo de software a medida, venta de equipos de cómputo y soporte técnico profesional para impulsar el crecimiento de tu negocio
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#servicios" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/40 transition-all duration-300 font-semibold text-lg">
                        <span class="material-symbols-outlined mr-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        Ver Servicios
                    </a>
                    <a href="#contacto" class="group inline-flex items-center justify-center px-8 py-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-700 hover:border-blue-600 dark:hover:border-blue-400 hover:bg-white dark:hover:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 font-semibold text-lg">
                        <span class="material-symbols-outlined mr-2">mail</span>
                        Contáctanos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="py-20 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-900/50 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-50/50 to-transparent dark:via-gray-950/50"></div>
        <div class="max-w-7xl mx-auto relative">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 dark:bg-blue-900/30 rounded-full mb-4">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-sm mr-2">settings</span>
                    <span class="text-sm font-semibold text-blue-700 dark:text-blue-300">Nuestros Servicios</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4 tracking-tight">¿Qué podemos hacer por ti?</h2>
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto leading-relaxed">
                    Ofrecemos soluciones tecnológicas completas e integradas para cubrir todas las necesidades de tu empresa
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Desarrollo de Software -->
                <div class="group relative bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-400 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/25 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <span class="material-symbols-outlined text-white text-3xl">code</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Desarrollo de Software</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Aplicaciones web, móviles y de escritorio a medida. Soluciones personalizadas con arquitectura escalable y las últimas tecnologías.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Sitios web y aplicaciones web responsivas</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Aplicaciones móviles nativas e híbridas</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Sistemas ERP, CRM y empresariales</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Venta de Equipos -->
                <div class="group relative bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 dark:border-gray-700 hover:border-purple-500 dark:hover:border-purple-400 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-transparent rounded-bl-full"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/25 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <span class="material-symbols-outlined text-white text-3xl">computer</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">Venta de Equipos de Cómputo</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Equipos nuevos, seminuevos y reacondicionados de las mejores marcas. Asesoría personalizada para elegir la mejor solución.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>PCs de escritorio, Laptops y Workstations</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Servidores, NAS y equipamiento de red</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Monitores, accesorios y periféricos</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Soporte Técnico -->
                <div class="group relative bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-400 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-500/10 to-transparent rounded-bl-full"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-green-500/25 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <span class="material-symbols-outlined text-white text-3xl">build</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">Soporte Técnico</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                            Mantenimiento preventivo y correctivo, reparación de equipos, infraestructura de red y consultoría en seguridad informática.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Mantenimiento preventivo y correctivo</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Redes, cableado estructurado y WiFi</span>
                            </li>
                            <li class="flex items-start text-gray-700 dark:text-gray-300">
                                <span class="material-symbols-outlined text-green-500 text-xl mr-2 mt-0.5 flex-shrink-0">check_circle</span>
                                <span>Soporte remoto y presencial 24/7</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/2 left-0 w-72 h-72 bg-blue-400/10 dark:bg-blue-600/10 rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-purple-100 dark:bg-purple-900/30 rounded-full mb-4">
                        <span class="material-symbols-outlined text-purple-600 dark:text-purple-400 text-sm mr-2">groups</span>
                        <span class="text-sm font-semibold text-purple-700 dark:text-purple-300">Sobre Nosotros</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 tracking-tight">
                        ¿Por qué elegir <span class="bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">BootService</span>?
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                        Somos un equipo de profesionales apasionados por la tecnología, comprometidos en brindar soluciones innovadoras, confiables y personalizadas que impulsen el crecimiento y la transformación digital de tu negocio.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-blue-500/25 group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-white">verified</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Experiencia y Calidad Garantizada</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Años de experiencia entregando proyectos exitosos con los más altos estándares de calidad y profesionalismo.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-green-500/25 group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-white">support_agent</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Soporte Personalizado y Ágil</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Atención cercana, respuesta rápida y soluciones adaptadas a las necesidades específicas de cada cliente.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-purple-500/25 group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-white">rocket_launch</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Innovación y Tecnología de Vanguardia</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Utilizamos las últimas tecnologías y mejores prácticas para ofrecer soluciones modernas, eficientes y escalables.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl blur-2xl opacity-20"></div>
                    <div class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-blue-700 rounded-3xl p-1 shadow-2xl">
                        <div class="bg-white dark:bg-gray-900 rounded-[22px] p-8 space-y-6">
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-blue-50 to-blue-100/50 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl">
                                <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-4xl">terminal</span>
                                <div class="flex-1">
                                    <p class="text-lg font-bold text-gray-900 dark:text-white">Desarrollo Ágil</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Metodologías Scrum y Kanban</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-green-50 to-green-100/50 dark:from-green-900/20 dark:to-green-800/20 rounded-xl">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-4xl">shield</span>
                                <div class="flex-1">
                                    <p class="text-lg font-bold text-gray-900 dark:text-white">Seguridad Garantizada</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Protección y mejores prácticas</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-purple-50 to-purple-100/50 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl">
                                <span class="material-symbols-outlined text-purple-600 dark:text-purple-400 text-4xl">speed</span>
                                <div class="flex-1">
                                    <p class="text-lg font-bold text-gray-900 dark:text-white">Alto Rendimiento</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Soluciones optimizadas y eficientes</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-orange-50 to-orange-100/50 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl">
                                <span class="material-symbols-outlined text-orange-600 dark:text-orange-400 text-4xl">update</span>
                                <div class="flex-1">
                                    <p class="text-lg font-bold text-gray-900 dark:text-white">Soporte Continuo</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Mantenimiento y actualizaciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contacto" class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-700"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%220.05%22%3E%3Ccircle cx=%2230%22 cy=%2230%22 r=%222%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        </div>
        <div class="max-w-4xl mx-auto text-center relative">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">
                ¿Listo para transformar tu negocio?
            </h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 leading-relaxed">
                Contáctanos hoy y descubre cómo nuestras soluciones tecnológicas pueden impulsar el crecimiento de tu empresa
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:contacto@bootservice.com" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 hover:bg-gray-100 rounded-xl shadow-2xl hover:shadow-white/25 transition-all duration-300 font-semibold text-lg">
                    <span class="material-symbols-outlined mr-2 group-hover:scale-110 transition-transform">email</span>
                    Enviar Correo
                </a>
                <a href="tel:+1234567890" class="group inline-flex items-center justify-center px-8 py-4 bg-blue-700/80 backdrop-blur-sm hover:bg-blue-800 text-white border-2 border-white/30 rounded-xl shadow-2xl hover:shadow-blue-900/50 transition-all duration-300 font-semibold text-lg">
                    <span class="material-symbols-outlined mr-2 group-hover:scale-110 transition-transform">phone</span>
                    Llamar Ahora
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('logo.png') }}" alt="BootService Logo" class="h-12 w-auto">
                        <span class="text-2xl font-bold">BootService</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md leading-relaxed text-lg">
                        Soluciones tecnológicas integrales para impulsar tu negocio. Desarrollo de software a medida, venta de equipos de cómputo y soporte técnico profesional.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-xl">link</span>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Servicios</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#servicios" class="hover:text-white hover:translate-x-1 inline-block transition-all">Desarrollo de Software</a></li>
                        <li><a href="#servicios" class="hover:text-white hover:translate-x-1 inline-block transition-all">Venta de Equipos de Cómputo</a></li>
                        <li><a href="#servicios" class="hover:text-white hover:translate-x-1 inline-block transition-all">Soporte Técnico</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Empresa</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#nosotros" class="hover:text-white hover:translate-x-1 inline-block transition-all">Nosotros</a></li>
                        <li><a href="#contacto" class="hover:text-white hover:translate-x-1 inline-block transition-all">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} BootService. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Theme toggle
        function updateThemeIcons(isDark) {
            const icons = document.querySelectorAll('#theme-toggle .material-symbols-outlined, #theme-toggle-mobile .material-symbols-outlined');
            icons.forEach(icon => {
                icon.textContent = isDark ? 'light_mode' : 'dark_mode';
            });
        }
        
        function initTheme() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');
            updateThemeIcons(isDark);
        }
        
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeIcons(isDark);
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            initTheme();
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleMobile = document.getElementById('theme-toggle-mobile');
            if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
            if (themeToggleMobile) themeToggleMobile.addEventListener('click', toggleTheme);
        });
    </script>
</body>
</html>
