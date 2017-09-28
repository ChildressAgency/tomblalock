<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
      <hr class="page-title-border" />
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <div class="donate-link">
      <a href="<?php the_field('paypal_donate_link'); ?>" class="btn-donate">DONATE</a>
      <?php the_field('paypal_donate_disclaimer'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>