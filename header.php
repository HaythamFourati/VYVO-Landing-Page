<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="sticky top-0 z-50 bg-[#1a1a2e]/80 backdrop-blur-lg text-white">
    <div class="max-w-7xl container mx-auto flex items-center justify-between p-4">
        <div class="text-2xl font-bold">
            <a href="<?php echo get_home_url(); ?>"><span class="bg-gradient-to-r from-purple-500 to-blue-500 bg-clip-text text-transparent">VYVO</span></a>
        </div>
        <nav class="hidden md:flex items-center space-x-8">
            <?php $features_page = get_page_by_path('features'); ?>
            <a href="<?php echo $features_page ? get_permalink($features_page) : '#'; ?>" class="transition-colors duration-300 hover:text-purple-400">Features</a>
            <a href="#" class="transition-colors duration-300 hover:text-purple-400">Technology</a>
            <a href="<?php echo get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/'); ?>" class="transition-colors duration-300 hover:text-purple-400">Blog</a>
            <a href="#" class="transition-colors duration-300 hover:text-purple-400">About</a>
            <a href="#" class="transition-colors duration-300 hover:text-purple-400">Contact</a>
        </nav>
        <div>
            <a href="#" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold py-2 px-6 rounded-lg">Get Started</a>
        </div>
    </div>
</header>