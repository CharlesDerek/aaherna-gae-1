<?php
function navBar() {
    global $connection;
    
    ?>
    
    <div data-collapse="all" data-animation="over-right" data-duration="400" class="nav-bar-section w-nav"><a href="index.php" class="brand w-nav-brand"><img src="images/AH-Photography_Main-Logo.png" width="80" srcset="images/AH-Photography_Main-Logo.png 500w, images/AH-Photography_Main-Logo.png 600w" sizes="80px" alt="" class="mainlogo" data-ix="logoload"></a>
      <div class="hamburger-icon w-nav-button">
        <div class="spring-1"></div>
        <div class="spring-2"></div>
        <div class="spring-3"></div><a href="#" class="hamburger-icon w-inline-block" data-ix="show-navigation-menu-on-click"></a></div>
      <nav role="navigation" class="nav-sidebar w-nav-menu">
        <div class="nav-menu">
          
          <a href="index.php" data-ix="underline" class="nav-link w-inline-block">
            <div>Home</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="blog.php" data-ix="underline" class="nav-link w-inline-block w--current">
            <div>Blog</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="login.php" data-ix="underline" class="nav-link w-inline-block">
            <div>log In</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="works.php" data-ix="underline" class="nav-link w-inline-block">
            <div>Works</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="gallery.php" data-ix="underline" class="nav-link w-inline-block">
            <div>Gallery</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="services.php" data-ix="underline" class="nav-link w-inline-block">
            <div>Services</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="contact.php" data-ix="underline" class="nav-link w-inline-block">
            <div>Conact Us</div>
            <div class="underline nav-link-underline"></div>
          </a>
          <a href="about.php" data-ix="underline" class="nav-link w-inline-block">
            <div>About Us</div>
            <div class="underline nav-link-underline"></div>
          </a>
        </div>
      </nav>
    </div>
    <?php 
}
function infoCards($infoCText, $infoCCatName, $infoCDate="June 15, 2017") {
    global $connection;
    ?>
    <div class="info-card" data-ix="cardfloat">
            <a href="p.php" class="w-inline-block">
              <div class="new_post_card" data-ix="show-split-arrow-on-hover">
                <div class="arrow-center-wrapper-2"><img src="../images/Lens-Icon_1Lens-Icon.png" width="48" alt="" class="gallery-hover-icon">
                  <div class="gallery-arrow normal" data-ix="split-arrow-first-app"></div>
                </div>
                <div class="backgroundimage"></div>
                <div class="new_post_c_info">
                  <div class="post-card-date-and-category">
                    <div class="post-card-date">June 15, 2017</div>
                    <div class="dot-separator post-card-separator">
                      <div>•</div>
                    </div>
                    <div class="cat_name">Tutuorial</div>
                  </div>
                  <div class="custom-btn"><strong><em class="italic-text">12 Tips for Indoor Natural Light Photography</em></strong></div>
                </div>
              </div>
            </a>
          </div>
          <div class="info-card" data-ix="cardfloat">
            <a href="p.php" class="w-inline-block">
              <div class="new_post_card" data-ix="show-split-arrow-on-hover">
                <div class="arrow-center-wrapper-2"><img src="images/Lens-Icon_1Lens-Icon.png" width="48" alt="" class="gallery-hover-icon">
                  <div class="gallery-arrow normal" data-ix="split-arrow-first-app"></div>
                </div>
                <div class="backgroundimage"></div>
                <div class="new_post_c_info">
                  <div class="post-card-date-and-category">
                    <div class="post-card-date"><?php echo $infoCDate; ?></div>
                    <div class="dot-separator post-card-separator">
                      <div>•</div>
                    </div>
                    <div class="cat_name"><?php echo $infoCCatName; ?></div>
                  </div>
                  <div class="custom-btn"><strong><em class="italic-text"><?php echo $infoCText; ?></em></strong></div>
                </div>
              </div>
            </a>
          </div>
    <?php
}

function pathDepth($pathParam){
  global $connection;
  return $pathParam;
}

?>