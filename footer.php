<footer class="relative bg-black text-white overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-0">
        <!-- Subtle Grid Pattern -->
        <div class="absolute inset-0 opacity-8">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="footer-grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="#0ea5e9" stroke-width="0.1"/>
                        <circle cx="5" cy="5" r="0.3" fill="#0ea5e9" opacity="0.2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#footer-grid)" />
            </svg>
        </div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-10 left-16 w-24 h-24 bg-gradient-to-br from-purple-500/10 to-blue-500/10 rounded-full blur-xl animate-float-1"></div>
        <div class="absolute bottom-10 right-16 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-cyan-500/10 rounded-full blur-xl animate-float-2"></div>
        <div class="absolute top-1/2 left-1/2 w-20 h-20 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-full blur-xl animate-float-3"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Brand Section -->
            <div class="md:col-span-2">
                <h2 class="text-3xl font-bold mb-4">
                    <span class="bg-gradient-to-r from-purple-400 via-blue-400 to-cyan-400 bg-clip-text text-transparent">VYVO</span>
                </h2>
                <p class="text-xl text-gray-300 mb-6 leading-relaxed">
                    The Future of Health, AI, and Blockchain Technology
                </p>
                <p class="text-gray-400 leading-relaxed max-w-md">
                    Revolutionizing healthcare through cutting-edge artificial intelligence, secure blockchain infrastructure, and innovative wearable technology for a healthier tomorrow.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="<?php echo get_home_url(); ?>" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Home</a></li>
                    <li><a href="#features" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Features</a></li>
                    <li><a href="#technology" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Technology</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">About</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Contact</a></li>
                </ul>
            </div>
            
            <!-- Legal & Connect -->
            <div>
                <h3 class="text-xl font-bold mb-6 bg-gradient-to-r from-cyan-400 to-teal-400 bg-clip-text text-transparent">Legal & Connect</h3>
                <ul class="space-y-3 mb-8">
                    <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-all duration-300 hover:translate-x-1">Support</a></li>
                </ul>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="group bg-gradient-to-br from-purple-500/20 to-blue-500/20 p-3 rounded-xl border border-purple-500/30 hover:border-purple-400/60 transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(168,85,247,0.3)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-purple-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" class="group bg-gradient-to-br from-blue-500/20 to-cyan-500/20 p-3 rounded-xl border border-blue-500/30 hover:border-blue-400/60 transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.3)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-blue-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                    <a href="#" class="group bg-gradient-to-br from-cyan-500/20 to-teal-500/20 p-3 rounded-xl border border-cyan-500/30 hover:border-cyan-400/60 transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(6,182,212,0.3)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-cyan-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-4.484 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="mt-12 pt-8 border-t border-gray-800/50">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400 text-center md:text-left">
                    &copy; <?php echo date('Y'); ?> VYVO. All rights reserved. | Powered by AI, Secured by Blockchain
                </p>
                <div class="flex items-center space-x-2 text-gray-400">
                    <span class="text-sm">Made with</span>
                    <div class="w-4 h-4 bg-gradient-to-r from-red-500 to-pink-500 rounded-full animate-pulse"></div>
                    <span class="text-sm">for a healthier future</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
