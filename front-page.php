<?php get_header(); ?>

<main class="bg-[#1a1a2e] text-white">
    <div class="relative h-[90vh] bg-black overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 z-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-20">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="#0ea5e9" stroke-width="0.2"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid)" />
                </svg>
            </div>
            
            <!-- Animated Video Background -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="relative w-[600px] h-[600px] flex items-center justify-center">
                    <!-- Background Video -->
                    <video 
                        class="absolute z-0 inset-0 w-full h-full object-cover opacity-80" 
                        autoplay 
                        loop 
                        muted 
                        playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/2.mov" type="video/mp4">
                        <!-- Fallback for browsers that don't support the video -->
                        <div class="w-[600px] h-[600px] rounded-full border-4 border-blue-400 shadow-[0_0_50px_#3b82f6,0_0_100px_#3b82f6,0_0_150px_#3b82f6] animate-pulse"></div>
                    </video>
                    
                    
                </div>
            </div>
            
            <!-- Floating particles -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400 rounded-full opacity-60 animate-float-1"></div>
                <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-cyan-300 rounded-full opacity-80 animate-float-2"></div>
                <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-purple-400 rounded-full opacity-50 animate-float-3"></div>
                <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-blue-300 rounded-full opacity-70 animate-float-4"></div>
            </div>
        </div>
        
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-black/40 z-5"></div>
        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - Text Content -->
                    <div class="text-center lg:text-left">
                        <h1 class="text-5xl md:text-6xl pt-16 sm:pt-20 font-bold">Seeking Leaders <br> In All 50 States</h1>
                        <p class="mt-4 text-lg">Secure your spot at the top and earn from the next big thing: AI. This is your opportunity to be among the first in the US to monetize cutting-edge AI technology.</p>
                        
                        <!-- Opportunity Highlights -->
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold text-cyan-400 mb-3"><?php esc_html_e('Opportunity Highlights:', 'vyvo'); ?></h3>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center gap-2">
                                    <span class="text-purple-400">✓</span>
                                    <?php esc_html_e('Monetize AI Technology', 'vyvo'); ?>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-purple-400">✓</span>
                                    <?php esc_html_e('Utilize AI Tech With Any MLM', 'vyvo'); ?>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-purple-400">✓</span>
                                    <?php esc_html_e('Be Among the First in the US', 'vyvo'); ?>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="mt-6">
                            <a href="https://joinsocialfi.com/PCA2LYZK3/vai" target="_blank" class="inline-block bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-300 hover:from-purple-600 hover:to-blue-600">
                                <?php esc_html_e('Secure Your Spot Now!', 'vyvo'); ?>
                            </a>
                        </div>
                        
                        <p class="mt-6 text-gray-300">
                            <?php esc_html_e('Become an affiliate and spread the word. Join our rapidly growing team today.', 'vyvo'); ?>
                        </p>
                        
                        <!-- Contact Info -->
                        <div class="mt-4 flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center lg:justify-start text-sm text-gray-400">
                            <a href="tel:+14438521000" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                (443) 852-1000
                            </a>
                            <a href="https://www.copilotprivateai.com" target="_blank" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                                copilotprivateai.com
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Column - Video Container -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-lg aspect-video bg-black/30 backdrop-blur-md rounded-2xl border border-purple-500/50 flex items-center justify-center overflow-hidden">
                            <iframe 
                                class="w-full h-full rounded-2xl" 
                                src="https://www.youtube.com/embed/ZXpxrreqgVI?controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0" 
                                title="VYVO Video" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- VAI OS Section -->
    <section id="features" class="relative bg-black py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="vai-grid" width="8" height="8" patternUnits="userSpaceOnUse">
                            <path d="M 8 0 L 0 0 0 8" fill="none" stroke="#0ea5e9" stroke-width="0.15"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#vai-grid)" />
                </svg>
            </div>
            
            <!-- Floating Orbs -->
            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-xl animate-float-1"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-cyan-500/10 rounded-full blur-xl animate-float-2"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-purple-500/10 rounded-full blur-xl animate-float-3"></div>
        </div>
        
        <div class="relative z-10 max-w-5xl container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent mb-6">
                Meet VAI OS: Your Intelligent Health Companion
            </h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-12">
                A revolutionary Web3 operating system that transforms how you manage wellness, <br>combining AI intelligence with blockchain security for complete data ownership.
            </p>
            
            <!-- Video -->
            <div class="max-w-3xl mx-auto mb-16">
                <div class="relative rounded-2xl overflow-hidden border border-blue-500/30 shadow-[0_0_40px_rgba(59,130,246,0.2)]">
                    <video 
                        class="w-full aspect-video object-cover"
                        controls
                        playsinline
                        preload="metadata">
                        <source src="<?php echo esc_url(get_template_directory_uri()); ?>/src/vid/VIDEO-2025-12-07-20-38-14.mov.mov" type="video/mp4">
                        <?php esc_html_e('Your browser does not support the video tag.', 'vyvo'); ?>
                    </video>
                </div>
            </div>
            
            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Card 1: AI-Powered Health Insights -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-purple-500/30 p-8 transition-all duration-500 hover:border-purple-400/60 hover:shadow-[0_0_40px_rgba(168,85,247,0.3)] hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-blue-500/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.847a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.847.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4 group-hover:text-purple-300 transition-colors">Predictive Health Analytics</h4>
                    <p class="text-gray-400 leading-relaxed">Advanced algorithms analyze your biometric patterns to predict health trends and suggest proactive wellness strategies.</p>
                </div>
                
                <!-- Card 2: Blockchain Security -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-blue-500/30 p-8 transition-all duration-500 hover:border-blue-400/60 hover:shadow-[0_0_40px_rgba(59,130,246,0.3)] hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-blue-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4 group-hover:text-blue-300 transition-colors">Data Sovereignty</h4>
                    <p class="text-gray-400 leading-relaxed">Own and control your health information with military-grade encryption and decentralized storage that puts you in charge.</p>
                </div>
                
                <!-- Card 3: Smart Wearable Integration -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-cyan-500/30 p-8 transition-all duration-500 hover:border-cyan-400/60 hover:shadow-[0_0_40px_rgba(6,182,212,0.3)] hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-cyan-500/20 to-teal-500/20 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-cyan-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 21v-1.5M15.75 3v1.5M19.5 8.25h1.5M19.5 12h1.5m-15 3.75h1.5m15 3.75h1.5m-18 0h1.5M15.75 21v-1.5m-6-10.5a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM15.75 12a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4 group-hover:text-cyan-300 transition-colors">Ecosystem Connectivity</h4>
                    <p class="text-gray-400 leading-relaxed">Unified platform connecting VYVO devices, third-party wearables, and health apps for comprehensive wellness tracking.</p>
                </div>
            </div>
            
            <!-- CTA Button -->
            <div>
                <a href="https://api.aiforbusiness.com/widget/bookings/linda-tighe-personal-calendar-dguyc-etk" target="_blank" class="inline-block bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-4 px-8 rounded-2xl transition-all duration-300 hover:scale-105 shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:shadow-[0_0_40px_rgba(59,130,246,0.5)]">
                    Discover VAI OS
                </a>
            </div>
        </div>
    </section>

    <!-- Revolutionary Features Section -->
    <section class="relative bg-black py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="features-grid" width="8" height="8" patternUnits="userSpaceOnUse">
                            <path d="M 8 0 L 0 0 0 8" fill="none" stroke="#0ea5e9" stroke-width="0.15"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#features-grid)" />
                </svg>
            </div>
            
            <!-- Floating Orbs -->
            <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/10 rounded-full blur-xl animate-float-1"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500/10 rounded-full blur-xl animate-float-2"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-pink-500/10 rounded-full blur-xl animate-float-3"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl container mx-auto px-4 text-center">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                Revolutionary <span class="bg-gradient-to-r from-purple-400 via-blue-400 to-cyan-400 bg-clip-text text-transparent">Features</span>
            </h2>
            <p class="max-w-4xl mx-auto text-xl text-gray-300 mb-16 leading-relaxed">
                Experience the convergence of artificial intelligence, blockchain technology, <br> and health monitoring in one seamless ecosystem.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-purple-500/30 overflow-hidden transition-all duration-500 hover:border-purple-400/60 hover:shadow-[0_0_40px_rgba(168,85,247,0.3)] hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1694747660463-2d5ab46625d1?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Health Wearables" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4 text-purple-400 group-hover:text-purple-300 transition-colors">Health Wearables</h3>
                        <p class="text-gray-400 leading-relaxed">
                            Advanced biosensors and AI-powered health monitoring that tracks your vitals, sleep patterns, and wellness metrics in real-time.
                        </p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-blue-500/30 overflow-hidden transition-all duration-500 hover:border-blue-400/60 hover:shadow-[0_0_40px_rgba(59,130,246,0.3)] hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1697577418970-95d99b5a55cf?q=80&w=996&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="AI Intelligence" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4 text-blue-400 group-hover:text-blue-300 transition-colors">AI Intelligence</h3>
                        <p class="text-gray-400 leading-relaxed">
                            Machine learning algorithms that adapt to your lifestyle, providing personalized health insights and predictive wellness analytics.
                        </p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="group bg-black/30 backdrop-blur-md rounded-3xl border border-pink-500/30 overflow-hidden transition-all duration-500 hover:border-pink-400/60 hover:shadow-[0_0_40px_rgba(236,72,153,0.3)] hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Blockchain Privacy" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4 text-pink-400 group-hover:text-pink-300 transition-colors">Blockchain Privacy</h3>
                        <p class="text-gray-400 leading-relaxed">
                            Your health data is secured with military-grade encryption and stored on a decentralized blockchain network you control.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cutting-Edge Technology Section -->
    <section id="technology" class="relative bg-[#0a0a0f] py-24 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Different Grid Pattern -->
            <div class="absolute inset-0 opacity-8">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="tech-grid" width="12" height="12" patternUnits="userSpaceOnUse">
                            <circle cx="6" cy="6" r="0.5" fill="#0ea5e9" opacity="0.3"/>
                            <path d="M 12 0 L 0 0 0 12" fill="none" stroke="#0ea5e9" stroke-width="0.1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#tech-grid)" />
                </svg>
            </div>
            
            <!-- Glowing Geometric Shapes -->
            <div class="absolute top-16 right-16 w-48 h-48 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 rounded-full blur-2xl animate-float-4"></div>
            <div class="absolute bottom-16 left-16 w-64 h-64 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-full blur-2xl animate-float-1"></div>
            <div class="absolute top-1/3 left-1/2 w-32 h-32 bg-gradient-to-br from-green-500/10 to-teal-500/10 rounded-full blur-xl animate-float-3"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl container mx-auto px-4 text-center">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                Cutting-Edge <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">Technology</span>
            </h2>
            <p class="max-w-4xl mx-auto text-xl text-gray-300 mb-16 leading-relaxed">
                Our platform leverages the latest advancements in AI, blockchain, and IoT to deliver unparalleled health monitoring and privacy protection.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Tech Card 1: Neural Networks -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-pink-500/20 transition-all duration-500 hover:border-pink-400/50 hover:shadow-[0_0_30px_rgba(236,72,153,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-pink-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 21v-1.5M15.75 3v1.5M19.5 8.25h1.5M19.5 12h1.5m-15 3.75h1.5m15 3.75h1.5m-18 0h1.5M15.75 21v-1.5m-6-10.5a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM15.75 12a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-pink-400 group-hover:text-pink-300 transition-colors">Neural Networks</h3>
                    <p class="text-gray-400 leading-relaxed">Deep learning models trained on health data to provide accurate predictions and insights.</p>
                </div>
                
                <!-- Tech Card 2: Blockchain Security -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-blue-500/20 transition-all duration-500 hover:border-blue-400/50 hover:shadow-[0_0_30px_rgba(59,130,246,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-blue-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-400 group-hover:text-blue-300 transition-colors">Blockchain Security</h3>
                    <p class="text-gray-400 leading-relaxed">Immutable data storage with cryptographic protection ensuring complete privacy.</p>
                </div>
                
                <!-- Tech Card 3: IoT Integration -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-cyan-500/20 transition-all duration-500 hover:border-cyan-400/50 hover:shadow-[0_0_30px_rgba(6,182,212,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-teal-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-cyan-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-cyan-400 group-hover:text-cyan-300 transition-colors">IoT Integration</h3>
                    <p class="text-gray-400 leading-relaxed">Seamless connectivity with smart devices and health monitoring equipment.</p>
                </div>
                
                <!-- Tech Card 4: Real-time Processing -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-orange-500/20 transition-all duration-500 hover:border-orange-400/50 hover:shadow-[0_0_30px_rgba(249,115,22,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-orange-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-orange-400 group-hover:text-orange-300 transition-colors">Real-time Processing</h3>
                    <p class="text-gray-400 leading-relaxed">Instant analysis and feedback for immediate health insights and alerts.</p>
                </div>
                
                <!-- Tech Card 5: Zero-Knowledge Proofs -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-yellow-500/20 transition-all duration-500 hover:border-yellow-400/50 hover:shadow-[0_0_30px_rgba(234,179,8,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-amber-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-yellow-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-yellow-400 group-hover:text-yellow-300 transition-colors">Zero-Knowledge Proofs</h3>
                    <p class="text-gray-400 leading-relaxed">Advanced cryptographic techniques that verify data without exposing it.</p>
                </div>
                
                <!-- Tech Card 6: Decentralized Network -->
                <div class="group bg-black/40 backdrop-blur-md p-8 rounded-3xl border border-teal-500/20 transition-all duration-500 hover:border-teal-400/50 hover:shadow-[0_0_30px_rgba(20,184,166,0.2)] hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500/20 to-green-500/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-teal-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c.34 0 .672-.015 1-.042M12 21c-.34 0-.672-.015-1-.042M12 3a9.004 9.004 0 0 0-8.716 6.747M12 3a9.004 9.004 0 0 1 8.716 6.747M12 3c.34 0 .672.015 1 .042M12 3c-.34 0-.672-.015-1-.042M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-teal-400 group-hover:text-teal-300 transition-colors">Decentralized Network</h3>
                    <p class="text-gray-400 leading-relaxed">Distributed architecture ensuring no single point of failure or control.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative bg-black py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="about-grid" width="8" height="8" patternUnits="userSpaceOnUse">
                            <path d="M 8 0 L 0 0 0 8" fill="none" stroke="#0ea5e9" stroke-width="0.15"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#about-grid)" />
                </svg>
            </div>
            
            <!-- Floating Orbs -->
            <div class="absolute top-20 right-20 w-32 h-32 bg-purple-500/10 rounded-full blur-xl animate-float-1"></div>
            <div class="absolute bottom-20 left-20 w-40 h-40 bg-blue-500/10 rounded-full blur-xl animate-float-2"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl container mx-auto px-4 text-center">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                About <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 bg-clip-text text-transparent">VYVO</span>
            </h2>
            <p class="max-w-4xl mx-auto text-xl text-gray-300 mb-16 leading-relaxed">
                VYVO is pioneering the future of healthcare through the convergence of artificial intelligence, blockchain technology, and innovative wearable devices.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Mission -->
                <div class="text-left space-y-6">
                    <h3 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Our Mission</h3>
                    <p class="text-gray-300 leading-relaxed">
                        To democratize healthcare by putting the power of advanced AI and secure blockchain technology directly into the hands of individuals, enabling them to take control of their health data and wellness journey.
                    </p>
                    <p class="text-gray-300 leading-relaxed">
                        We believe that healthcare should be personal, private, and powered by cutting-edge technology that adapts to your unique needs.
                    </p>
                </div>
                
                <!-- Right Column - Vision -->
                <div class="text-left space-y-6">
                    <h3 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Our Vision</h3>
                    <p class="text-gray-300 leading-relaxed">
                        A world where every individual has access to personalized, AI-driven health insights while maintaining complete ownership and privacy of their health data through blockchain technology.
                    </p>
                    <p class="text-gray-300 leading-relaxed">
                        We're building the infrastructure for the next generation of healthcare - one that's intelligent, secure, and truly centered around you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative bg-[#0a0a0f] py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Different Grid Pattern -->
            <div class="absolute inset-0 opacity-8">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="contact-grid" width="12" height="12" patternUnits="userSpaceOnUse">
                            <circle cx="6" cy="6" r="0.5" fill="#0ea5e9" opacity="0.3"/>
                            <path d="M 12 0 L 0 0 0 12" fill="none" stroke="#0ea5e9" stroke-width="0.1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#contact-grid)" />
                </svg>
            </div>
            
            <!-- Floating Orbs -->
            <div class="absolute top-16 left-16 w-48 h-48 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 rounded-full blur-2xl animate-float-4"></div>
            <div class="absolute bottom-16 right-16 w-64 h-64 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-full blur-2xl animate-float-1"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl container mx-auto px-4 text-center">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                Get in <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">Touch</span>
            </h2>
            <p class="max-w-3xl mx-auto text-xl text-gray-300 mb-16 leading-relaxed">
                Ready to revolutionize your health journey? Connect with our team to learn more about VYVO's cutting-edge technology and how it can transform your wellness experience.
            </p>
            
            <div class="space-y-8">
                <!-- CTA Button -->
                <div>
                    <a href="https://api.aiforbusiness.com/widget/bookings/linda-tighe-personal-calendar-dguyc-etk" target="_blank" class="inline-block bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white font-bold py-4 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-[0_0_30px_rgba(6,182,212,0.3)] hover:shadow-[0_0_40px_rgba(6,182,212,0.5)] text-lg">
                        Schedule a Consultation
                    </a>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
