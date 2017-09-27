<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Tom Blalock for Commissioner</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="masthead hidden-xs">
    <div class="container-fluid">
      <div class="contribute">
        <a href="<?php echo home_url('contribute'); ?>">Contribute</a>
      </div>
      <div class="volunteer">
        <a href="<?php echo home_url('our-team'); ?>">Volunteer</a>
      </div>
      <?php get_template_part('partials/social', 'section'); ?>
    </div>
  </div>
  <header class="page-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-8 col-sm-10">
          <div class="row">
            <div class="col-sm-7">
              <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Tom Blalock Logo" /></a>
            </div>
            <div class="col-sm-5">
              <a href="<?php echo home_url(); ?>" class="for-commissioner"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/for-commissioner.png" class="img-responsive center-block" alt="For Commissioner of the Revenue" /></a>              
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="menu-open">
            <span class="sr-only">Toggle Navigation</span>
            <span class="menui top-menu"></span>
            <span class="menui mid-menu"></span>
            <span class="menui bottom-menu"></span>
            <span class="menu-label">MENU</span>
          </a>          
        </div>
      </div>
    </div>
  </header>
  <nav class="mobilenav">
    <div class="container-fluid">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block mobilenav-logo" alt="Tom Blalock Logo" />
      <div class="nav-menu">
        <h1>MENU</h1>
        <ul class="list-unstyled">
          <li<?php if(is_front_page()){ echo ' class="active"'; } ?>><a href="<?php echo home_url(); ?>">Home</a></li>
          <li<?php if(is_page('meet-tom')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('meet-tom'); ?>">Meet Tom</a></li>
          <li<?php if(is_page('vision')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('vision'); ?>">Vision</a></li>
          <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('news-and-events'); ?>">News and Events</a></li>
          <li<?php if(is_page('capturing-the-campaign')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('capturing-the-campaign'); ?>">Capturing the Campaign</a></li>
          <li<?php if(is_page('our-team')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('our-team'); ?>">Our Team</a></li>
          <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
        </ul>
        <?php get_template_part('partials/social', 'section'); ?>
      </div>
      <?php get_template_part('partials/contribute_volunteer', 'section'); ?>
    </div>
  </nav>
