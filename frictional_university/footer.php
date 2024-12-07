<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
          <p><a class="site-footer__link" href="#">555.555.5555</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
            <?php
                wp_nav_menu(array(
                  'theme_location' => 'headerMenuLocationOne'
                ));
                ?>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocationTwo'
              ));
              ?>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocationThree'
            ));
            ?>
          </nav>
        </div>
      </div>

    </div>
  </footer>
  <div class="search-overlay">
    <div class="search-overlay__top">
      <div class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="false"></i>
        <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
</body>
</html>