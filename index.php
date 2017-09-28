<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): ?>
      <?php if(!is_archive()): ?>

        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <hr class="page-title-border" />
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>

      <?php else: ?>

        <?php while(have_posts()): the_post(); ?>
          <div class="row blog-loop-item">
            <div class="col-sm-4">
              <?php 
                if(has_post_thumbnail()){
                  the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => ''));
                }
                else{
                  echo '<img src="' . get_stylesheet_directory_uri() . '/images/blog-placeholder.png" class="img-responsive center-block" alt="" />';
                }
              ?>
            </div>
            <div class="col-sm-8">
              <div class="blog-summary">
                <h3><?php the_title(); ?></h3>
                <p class="event-date"><?php echo get_the_date('l, F j, Y'); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      <?php endif; ?>
    <?php endif; wp_pagenavi(); ?>
  </div>
</main>
<?php get_footer(); ?>