<?php get_header(); ?>
  <main id="main">
    <section id="visionStatement">
      <div class="container">
        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <h2><?php the_field('vision_intro'); ?></h2>
      </div>
    </section>
    <section id="visionItems">
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-md-4 col-sm-height">
            <a href="<?php echo home_url('meet-tom'); ?>" class="vision-item access">
              <h1>Access</h1>
              <p><?php the_field('access_block_text'); ?></p>
            </a>
          </div>
          <div class="col-md-4 col-sm-height">
            <a href="<?php echo esc_url(home_url('meet-tom/#career')); ?>" class="vision-item experience">
              <h1>Experience</h1>
              <p><?php the_field('experience_block_text'); ?></p>
            </a>
          </div>
          <div class="col-md-4 col-sm-height">
            <a href="<?php echo esc_url(home_url('meet-tom/#community')); ?>" class="vision-item community">
              <h1>Community</h1>
              <p><?php the_field('community_block_text'); ?></p>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <section id="slogan" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bridge-river.jpg);">
    <div class="caption-wrapper">
      <div class="caption">
        <h1><?php the_field('slogan'); ?></h1>
      </div>
    </div>
  </section>
<?php get_footer(); ?>