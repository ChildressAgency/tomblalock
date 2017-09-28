<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1 class="page-title">Contact</h1>
      <hr class="page-title-border" />
      <section class="contact-info">
        <div class="row">
          <div class="col-sm-4">
            <div class="contact-icon email">
              <p>tom@blalockforcommissioner.com</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contact-icon mail">
              <p>Blalock for Commissioner of the Revenue<br />1000 Lindsay Court<br />Fredericksburg, VA 22401</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contact-icon phone">
              <p>540.226.1990</p>
            </div>
          </div>
        </div>
      </section>
      <section id="contactForm">
        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
      </section>
      <?php get_template_part('partials/social', 'section'); ?>
    </div>
  </main>
<?php get_footer(); ?>