<header class="banner">
  <div class="nav-siteinfo">
    <nav class="clearfix">
      <div class="container">
        <ul class="pull-left nav-siteinfo--details">
          <li><i class="fa fa-envelope"></i> <a href="#" mailto:"contact@divorceanswered.com"><span class="hidden-xs">contact@divorceanswered.com</span></a></li>
          <li><i class="fa fa-phone"></i> <a href="tel:+613423234923"><span class="hidden-xs">+61 (342)-(323)-4923 </span></a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="#"><span>English</span> <i class="fa fa-angle-down"></i></a></li>
          <li><a href="twitter" class="social-media"><i class="fa fa-twitter"></i></a></li>
          <li><a href="instagram" class="social-media"><i class="fa fa-instagram"></i></a></li>
          <li><a href="Facebook" class="social-media"><i class="fa fa-facebook"></i></a></li>
          <li><a href="Gplus" class="social-media"><i class="fa fa-google-plus "></i></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="main-header">
    <div class="container">
      <div class="clearfix">
        <nav class="nav-primary clearfix">
          <div class="logo pull-left">
          <a href="/">
            <img src="/wp-content/themes/sage-master/assets/images/logo.png" alt="">
          </a>
          </div>
          <div class="pull-right">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>