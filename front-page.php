<?php get_header(); ?>
  <div class="hp-hero" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/city-hall-hero.jpg); background-position:center bottom;">
    <div class="container">
      <div class="tom-cutout">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tom-blalock.png" class="img-responsive" alt="Tom Blalock" />
      </div>
      <div class="caption-wrap">
        <div class="caption">
          <p><?php the_field('hero_slogan'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <section id="mission">
    <div class="container">
      <h1>MISSION</h1>
      <div class="mission-statement">
        <?php the_field('mission_statement'); ?>
      </div>
    </div>
  </section>
  <section id="icon-links" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/river-bridge.jpg); background-position:center center;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="<?php echo home_url('meet-tom'); ?>" class="icon-link icon-meet">
            <h2>Meet Tom</h2>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="<?php echo home_url('vision'); ?>" class="icon-link icon-vision">
            <h2>Our Vision</h2>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="<?php echo home_url('contact'); ?>" class="icon-link icon-contact">
            <h2>Contact</h2>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/contribute_volunteer', 'section'); ?>
  <section id="stayUpToDate">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5">
          <h1>Stay Up-To-Date as we Capture the Campaign</h1>
          <?php get_template_part('partials/social', 'section'); ?>
          <p class="see-more"><a href="<?php echo home_url('capturing-the-campaign'); ?>">Visit our Capturing the Campaign page to see more</a></p>
        </div>
        <div class="col-sm-7">
          <div class="instagram-feed">
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="quote">
    <div class="container">
      <div class="quote">
        <p><?php the_field('tom_blalock_quote'); ?><br />- Tom Blalock</p>
      </div>
    </div>
  </section>
<?php get_footer(); ?>