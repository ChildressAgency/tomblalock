<?php get_header(); ?>
<main id="main">
  <div class="container">
    <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
    <hr class="page-title-border" />
    <section class="instagram-feed">
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </section>
    <?php get_template_part('partials/social', 'section'); ?>
  </div>
</main>
<section class="signup">
  <div class="container">
    <div class="signup-form">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>