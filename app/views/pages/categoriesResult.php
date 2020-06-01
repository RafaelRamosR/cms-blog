<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; ?>
<div class="slider display-table center-text">
  <h1 class="display-table-cell title--slider"><?php echo $data['category']; ?></h1>
</div><!-- slider -->

<section class="blog-area section">
  <div class="container">
    <div class="row">

          <!-- principal card -->
          <div class="col-md-8 col-sm-12">
            <div class="card h-100">
              <div class="single-post post-style-2">
                <div class="blog-image">
                  <img src="<?php echo ROUTE_URL; ?>img/post/brooke-lark-194251.jpg" alt="Blog Image">
                </div>

                <div class="blog-info">
                  <h1 class="pre-title">
                    <a href="#">HEALTH</a>
                  </h1>
                  <h1 class="title">
                    <a href="#">How Did Van Gogh's Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                  </h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                  <div class="avatar-area">
                    <a class="avatar" href="#"><img src="<?php echo ROUTE_URL; ?>img/post/icons8-team-355979.jpg" alt="Profile Image"></a>
                    <div class="right-area">
                      <a class="name" href="#">Lora Plamer</a>
                      <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                    </div>
                  </div>

                  <ul class="post-footer">
                    <li><a href="#">
                        <ion-icon name="heart-outline"></ion-icon>57
                      </a></li>
                    <li><a href="#">
                        <ion-icon name="chatbubble-outline"></ion-icon>6
                      </a></li>
                    <li><a href="#">
                        <ion-icon name="eye-outline"></ion-icon>138
                      </a></li>
                  </ul>

                </div><!-- blog-right -->
              </div><!-- single-post extra-blog -->
            </div><!-- card -->
          </div>
          <!-- regular card -->
          <div class="col-md-4 col-sm-12">
            <div class="card h-100">
              <div class="single-post post-style-1">
                <div class="blog-image">
                  <img src="<?php echo ROUTE_URL; ?>img/post/marion-michele-330691.jpg" alt="Blog Image">
                </div>

                <a class="avatar" href="#">
                  <img src="<?php echo ROUTE_URL; ?>img/post/icons8-team-355979.jpg" alt="Profile Image">
                </a>

                <div class="blog-info">
                  <h1 class="title">
                    <a href="#">How Did Van Gogh's Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                  </h1>

                  <ul class="post-footer">
                    <li>
                      <a href="#">
                        <ion-icon name="heart-outline"></ion-icon>57
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="chatbubble-outline"></ion-icon>6
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="eye-outline"></ion-icon>138
                      </a>
                    </li>
                  </ul>

                </div><!-- blog-info -->
              </div><!-- single-post -->
            </div><!-- card -->
          </div>
          <!-- regular card -->
          <div class="col-md-4 col-sm-12">
            <div class="card h-100">
              <div class="single-post post-style-1">
                <div class="blog-image">
                  <img src="<?php echo ROUTE_URL; ?>img/post/audrey-jackson-260657.jpg" alt="Blog Image">
                </div>

                <a class="avatar" href="#">
                  <img src="<?php echo ROUTE_URL; ?>img/post/icons8-team-355979.jpg" alt="Profile Image">
                </a>

                <div class="blog-info">
                  <h1 class="title">
                    <a href="#">How Did Van Gogh's Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                  </h1>

                  <ul class="post-footer">
                    <li>
                      <a href="#">
                        <ion-icon name="heart-outline"></ion-icon>57
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="chatbubble-outline"></ion-icon>6
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="eye-outline"></ion-icon>138
                      </a>
                    </li>
                  </ul>

                </div><!-- blog-info -->
              </div><!-- single-post -->
            </div><!-- card -->
          </div>
          <!-- regular card -->
          <div class="col-md-4 col-sm-12">
            <div class="card h-100">
              <div class="single-post post-style-1">
                <div class="blog-image">
                  <img src="<?php echo ROUTE_URL; ?>img/post/audrey-jackson-260657.jpg" alt="Blog Image">
                </div>

                <a class="avatar" href="#">
                  <img src="<?php echo ROUTE_URL; ?>img/post/icons8-team-355979.jpg" alt="Profile Image">
                </a>

                <div class="blog-info">
                  <h1 class="title">
                    <a href="#">How Did Van Gogh's Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                  </h1>

                  <ul class="post-footer">
                    <li>
                      <a href="#">
                        <ion-icon name="heart-outline"></ion-icon>57
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="chatbubble-outline"></ion-icon>6
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <ion-icon name="eye-outline"></ion-icon>138
                      </a>
                    </li>
                  </ul>

                </div><!-- blog-info -->
              </div><!-- single-post -->
            </div><!-- card -->
          </div>

    </div><!-- row -->

    <a class="load-more-btn" href="#">LOAD MORE</a>

  </div><!-- container -->
</section><!-- section -->
<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>