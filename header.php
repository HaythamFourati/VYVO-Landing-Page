<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
    
  </head>
  <body <?php body_class(); ?>>
    <header class="fixed top-0 left-0 right-0 z-50 text-white bg-black/20 backdrop-blur-md border-b border-white/10">
    <div class="max-w-7xl container mx-auto flex items-center justify-between py-4 px-4">
        <div class="text-2xl font-bold">
            <a href="<?php echo get_home_url(); ?>"><span class="bg-gradient-to-r from-purple-500 to-blue-500 bg-clip-text text-transparent">VYVO</span></a>
        </div>
        <nav class="hidden md:flex items-center space-x-8">
            <a href="<?php echo get_home_url(); ?>#features" class="transition-colors duration-300 hover:text-purple-400 scroll-smooth">Features</a>
            <a href="<?php echo get_home_url(); ?>#technology" class="transition-colors duration-300 hover:text-purple-400 scroll-smooth">Technology</a>
            <a href="<?php echo get_home_url(); ?>#about" class="transition-colors duration-300 hover:text-purple-400 scroll-smooth">About</a>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="transition-colors duration-300 hover:text-purple-400">Blog</a>
            <a href="<?php echo get_home_url(); ?>#contact" class="transition-colors duration-300 hover:text-purple-400 scroll-smooth">Contact</a>
        </nav>
        <div>
            <a href="https://api.aiforbusiness.com/widget/bookings/linda-tighe-personal-calendar-dguyc-etk" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold py-2 px-6 rounded-lg">Book a Meeting</a>
        </div>
    </div>
</header>