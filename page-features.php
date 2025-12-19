<?php
/*
Template Name: Features
*/
get_header(); ?>

<main class="bg-[#1a1a2e] text-white">
  <!-- Hero -->
  <section class="relative h-[50vh] md:h-[56vh] flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1527443224154-c4f2a620a8ac?q=80&w=1600&auto=format&fit=crop');">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="relative z-10 px-4">
      <h1 class="text-4xl md:text-5xl font-bold">Powerful <span class="bg-gradient-to-r from-purple-500 to-blue-500 bg-clip-text text-transparent">Features</span></h1>
      <p class="mt-4 text-gray-300 max-w-3xl mx-auto">A professional suite of AI, blockchain, and health tech features designed to deliver secure, real-time insights.</p>
    </div>
  </section>

  <!-- Core Features Grid -->
  <section class="py-16">
    <div class="max-w-7xl container mx-auto px-4">
      <header class="mb-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold">Core Capabilities</h2>
        <p class="text-gray-400 mt-2">Built for performance, privacy, and reliability</p>
      </header>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card: Health Wearables -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Health Wearables</h3>
            <p class="text-gray-300">Advanced biosensors and AI-powered monitoring to track vitals, sleep, and wellness in real time.</p>
          </div>
        </div>

        <!-- Card: AI Intelligence -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-6m0 0V6m0 6h6m-6 0H6" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">AI Intelligence</h3>
            <p class="text-gray-300">Predictive models and smart recommendations powered by privacy-preserving machine learning.</p>
          </div>
        </div>

        <!-- Card: Blockchain Privacy -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-pink-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6a4.5 4.5 0 10-9 0v4.5m-.75 3.75h10.5A2.25 2.25 0 0021 12V9.75A2.25 2.25 0 0018.75 7.5H5.25A2.25 2.25 0 003 9.75V12a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Blockchain Privacy</h3>
            <p class="text-gray-300">Encrypted, immutable records with zero-knowledge verification for maximum confidentiality.</p>
          </div>
        </div>

        <!-- Card: Real-time Insights -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Real-time Insights</h3>
            <p class="text-gray-300">Instant feedback loops with event-driven processing and alerting.</p>
          </div>
        </div>

        <!-- Card: IoT Integrations -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-teal-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">IoT Integrations</h3>
            <p class="text-gray-300">Seamless device connectivity with secure protocols and automated pairing.</p>
          </div>
        </div>

        <!-- Card: Zero-Knowledge Proofs -->
        <div class="bg-[#2a2a3e] rounded-2xl overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 card-glow">
          <div class="p-6">
            <div class="w-12 h-12 bg-yellow-500/20 rounded-lg flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Zero-Knowledge Proofs</h3>
            <p class="text-gray-300">Verify without revealing. Prove authenticity while preserving privacy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 border-t border-white/5">
    <div class="max-w-5xl container mx-auto px-4 text-center">
      <h3 class="text-2xl md:text-3xl font-bold">Ready to experience Vyvo?</h3>
      <p class="text-gray-400 mt-3">Get started today and unlock secure, AI-powered health insights.</p>
      <div class="mt-6">
        <a href="#" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold py-3 px-8 rounded-lg inline-block">Get Started</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
