<?php get_header(); ?>
  <section id="meetTom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
          <hr class="page-title-border" />
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tom-blalock-reverse.png" class="img-responsive center-block" alt="Tom Blalock" style="margin-top:25px;" />
        </div>
      </div>
    </div>
  </section>
  <section id="career">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php the_field('career_image'); ?>" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-6">
          <h1 class="page-title">Career</h1>
          <hr class="page-title-border" />
          <?php the_field('career_content'); ?>
        </div>
      </div>
    </div>
  </section>
  <section id="community">
    <div class="container">
      <h1 class="page-title">Community</h1>
      <hr class="page-title-border" />
      <div class="two-col-layout">
        <?php the_field('community_content'); ?>
      </div>
    </div>
  </section>
  <section id="personalLife">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="page-title">Personal Life</h1>
          <hr class="page-title-border" />
          <?php the_field('personal_life_content'); ?>
        </div>
        <div class="col-sm-6">
          <img src="<?php the_field('personal_life_image'); ?>" class="img-responsive center-block" alt="" />
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>