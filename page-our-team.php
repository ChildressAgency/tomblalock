<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1 class="page-title">Our Team</h1>
      <hr class="page-title-border" />
      <div class="row">
        <?php if(have_rows('team_members')): $i=0; while(have_rows('team_members')): the_row(); ?>
          <?php if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-4">
            <div class="team-member">
              <img src="<?php echo get_sub_field('team_member_image') ? get_sub_field('team_member_image') : get_stylesheet_directory_uri() . '/images/profile_placeholder.png'; ?>" class="img-responsive center-block" alt="<?php the_sub_field('team_member_name'); ?>" />
              <h4><?php the_sub_field('team_member_name'); ?></h4>
              <p><?php the_sub_field('team_member_position'); ?></p>
            </div>
          </div>
        <?php $i++; endwhile; endif; ?>
      </div>
    </div>
  </main>
  <section id="joinTeam">
    <h1><span>Join Our Team Today!</span></h1>
    <p>Help lead us to victory!</p>
    <a href="<?php echo home_url('contact'); ?>" class="btn-clear">Sign Up Now</a>
  </section>
<?php get_footer(); ?>