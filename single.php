<?php

get_header(); ?>

<main class="bg-[#1a1a2e] text-white">
  <article class="pb-16">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <header class="bg-[#111122]">
        <div class="max-w-7xl container mx-auto px-4 py-10 text-center">
          <div class="flex items-center justify-center gap-3 text-sm text-gray-400 mb-3">
            <span><?php echo get_the_date(); ?></span>
            <span class="text-gray-600">•</span>
            <span><?php echo the_category(', ', ''); ?></span>
            <span class="text-gray-600">•</span>
            <span><?php echo get_the_author(); ?></span>
          </div>
          <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            <?php the_title(); ?>
          </h1>
        </div>
        <?php if (has_post_thumbnail()) : ?>
          <div class="max-w-7xl container mx-auto px-4">
            <?php the_post_thumbnail('large', ['class' => 'w-full h-80 md:h-[28rem] object-cover rounded-2xl']); ?>
          </div>
        <?php endif; ?>
      </header>

      <div class="max-w-6xl mx-auto px-4 mt-10">
        <div class="prose prose-invert max-w-none">
          <?php the_content(); ?>
        </div>
        <div class="mt-8 flex flex-wrap gap-2 text-sm text-gray-400">
          <?php the_tags('', ' ', ''); ?>
        </div>
      </div>

      <?php $prev = get_previous_post(); $next = get_next_post(); ?>
      <nav class="max-w-7xl container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <?php if ($prev): ?>
            <a href="<?php echo get_permalink($prev); ?>" class="group relative overflow-hidden rounded-2xl ring-1 ring-white/5 hover:ring-purple-400/30 transition">
              <div class="absolute inset-0">
                <?php echo get_the_post_thumbnail($prev->ID, 'medium_large', ['class' => 'w-full h-full object-cover opacity-40 group-hover:opacity-60 transition']); ?>
                <div class="absolute inset-0 bg-gradient-to-r from-[#2a2a3e] to-[#1a1a2e] opacity-80"></div>
              </div>
              <div class="relative p-6">
                <span class="text-xs text-gray-300">Previous</span>
                <h3 class="mt-1 text-lg font-semibold text-white group-hover:text-purple-300 line-clamp-2"><?php echo esc_html(get_the_title($prev)); ?></h3>
                <div class="mt-3 inline-flex items-center text-purple-300">
                  Read previous
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-1">
                    <path fill-rule="evenodd" d="M20.25 12a.75.75 0 0 1-.75.75H6.31l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 1 1 1.06 1.06l-4.72 4.72H19.5a.75.75 0 0 1 .75.75Z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </a>
          <?php else: ?>
            <div class="hidden md:block"></div>
          <?php endif; ?>

          <?php if ($next): ?>
            <a href="<?php echo get_permalink($next); ?>" class="group relative overflow-hidden rounded-2xl ring-1 ring-white/5 hover:ring-blue-400/30 transition">
              <div class="absolute inset-0">
                <?php echo get_the_post_thumbnail($next->ID, 'medium_large', ['class' => 'w-full h-full object-cover opacity-40 group-hover:opacity-60 transition']); ?>
                <div class="absolute inset-0 bg-gradient-to-r from-[#2a2a3e] to-[#1a1a2e] opacity-80"></div>
              </div>
              <div class="relative p-6 text-right md:text-left">
                <span class="text-xs text-gray-300">Next</span>
                <h3 class="mt-1 text-lg font-semibold text-white group-hover:text-blue-300 line-clamp-2"><?php echo esc_html(get_the_title($next)); ?></h3>
                <div class="mt-3 inline-flex items-center text-blue-300">
                  Read next
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-1">
                    <path fill-rule="evenodd" d="M3.75 12a.75.75 0 0 1 .75-.75h13.19l-4.72-4.72a.75.75 0 1 1 1.06-1.06l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </a>
          <?php endif; ?>
        </div>
      </nav>
    <?php endwhile; endif; ?>
  </article>
</main>

<?php get_footer();