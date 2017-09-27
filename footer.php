<?php if(!is_front_page()){ get_template_part('partials/contribute_volunteer', 'section'); } ?>

  <footer>
    <div class="container-fluid">
      <div class="footer-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" class="img-responsive" alt="Tom Blalock Logo" />
      </div>
      <?php get_template_part('partials/social', 'section'); ?>
      <div class="footer-menu">
        <a href="#" class="menu-open">MENU</a>
      </div>
      <div class="clearfix"></div>
      <div class="contact-info">
        <p>540-226-1990 &bull; Tom@blalockforcommissioner.com</p>
        <p>1000 Lindsay Court<br />Fredericksburg, VA 22401</p>
        <p class="copyright">Paid for by Blalock for Commissioner of the Revenue &bull; Designed by <a href="#" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>