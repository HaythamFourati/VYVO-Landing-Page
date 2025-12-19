<?php

get_header(); ?>

<main class="bg-[#1a1a2e] text-white">
  <section class="py-16">
    <div class="max-w-7xl container mx-auto px-4">
      <header class="mb-10 text-center">
        <h1 class="text-4xl font-bold">Our <span class="bg-gradient-to-r from-purple-500 to-blue-500 bg-clip-text text-transparent">Blog</span></h1>
        <p class="text-gray-400 mt-2">News and insights on AI, Blockchain, and Digital Health</p>
      </header>

      <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="bg-[#222238] rounded-2xl overflow-hidden ring-1 ring-white/5 hover:ring-white/10 transition hover:-translate-y-1 hover:shadow-2xl hover:shadow-purple-500/10 duration-300 card-glow">
              <a href="<?php the_permalink(); ?>" class="block">
                <div class="relative">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'w-full aspect-[16/9] object-cover']);
                  } else { ?>
                    <div class="w-full aspect-[16/9] bg-gradient-to-r from-purple-500/20 to-blue-500/20"></div>
                  <?php } ?>
                  <?php $cats = get_the_category(); if ($cats) : $cat = $cats[0]; ?>
                    <span class="absolute top-3 left-3 text-xs px-2.5 py-1 rounded-full bg-purple-500/20 text-purple-300 ring-1 ring-purple-400/30"><?php echo esc_html($cat->name); ?></span>
                  <?php endif; ?>
                </div>
                <div class="p-6">
                  <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                    <span><?php echo get_the_date(); ?></span>
                    <span class="text-gray-600">•</span>
                    <span><?php echo get_the_author(); ?></span>
                  </div>
                  <h2 class="text-xl font-semibold mb-2 leading-snug hover:text-purple-400 transition-colors"><?php the_title(); ?></h2>
                  <p class="text-gray-300 line-clamp-3 mb-5"><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
                  <div class="flex items-center text-sm text-purple-400 font-medium">
                    Read article
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-1">
                      <path fill-rule="evenodd" d="M3.75 12a.75.75 0 0 1 .75-.75h13.19l-4.72-4.72a.75.75 0 1 1 1.06-1.06l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <div class="mt-12 flex justify-center">
          <?php the_posts_pagination([
            'mid_size' => 1,
            'prev_text' => __('« Prev'),
            'next_text' => __('Next »'),
          ]); ?>
        </div>
      <?php else : ?>
        <p class="text-center text-gray-400">No posts found.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();
