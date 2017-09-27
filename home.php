<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
      <hr class="page-title-border" />
      <?php 
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $events = new WP_Query(array(
          'paged' => $paged,
          'posts_per_page' => 5,
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order' => 'DESC'
        ));
      if($events->have_posts()): while($events->have_posts()): $events->the_post(); ?>
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
              <?php
                $event_date = get_field('event_date', false false);
                $event_date = new DateTime($event_date);
              ?>
              <p class="event-date"><?php echo $event_date->format('l, F j, Y'); ?><?php if(get_field('event_time')){ echo ' -- <span>' . get_field('event_time') . '</span>'; } ?></p>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
            </div>
          </div>
        </div>
      <?php endwhile; endif; wp_pagenavi(array('wp_query' => $events)); ?>
    </div>
  </main>
<?php get_footer(); ?>