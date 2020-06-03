<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; ?>

<article class="perfile">
  <div class="container py-5">

    <!--Section: Content-->
    <section class="team-section text-center dark-grey-text">

      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12 mb-4 mx-auto">
          <div class="perfile-picture mx-auto mb-4">
            <img src="<?php echo ROUTE_URL ?>img/users/author.jpg" class="z-depth-1 rounded-circle img-fluid" alt="smaple image">
          </div>

          <div class="row user">
            <div class="col-ms-12 user-icons mx-auto">
              <a class="user-icon">
                <ion-icon name="add-outline"></ion-icon><span>Seguir</span>
              </a>
              <a class="user-icon">
                <ion-icon name="people-outline"></ion-icon><span> 75 </span> Seguidores
              </a>
              <a class="user-icon">
                <ion-icon name="newspaper-outline"></ion-icon><span> 28 </span> Artículos
              </a>
              <a class="user-icon">
                <ion-icon name="heart-outline"></ion-icon><span> 230 </span> Reacciones
              </a>
            </div>
          </div>

          <h1 class="title-long">Alicia Deyns</h1>
          <h2 class="pre-title text-muted">Co-funder & CEO</h2>
          <p class="bio mt-3 mb-4 text-muted">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, aliquam?
            Facere, alias voluptatum inventore, error harum ipsum illo a neque molestias odit,
            ipsam distinctio atque accusamus reprehenderit? Quod, hic doloribus?
          </p>

          <hr>
          <div class="row">
            <div class="col-ms-12 social-icons mx-auto">
              <a class="social-icon">
                <ion-icon name="logo-codepen"></ion-icon>
              </a>
              <a class="social-icon">
                <ion-icon name="logo-github"></ion-icon>
              </a>
              <a class="social-icon social-icon--twitter">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
              <a class="social-icon">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
              <a class="social-icon">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
              <a class="social-icon">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </div>
          </div>
          <hr>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Content-->

  </div>

  <div class="container">
    <section class="row">
      <div class="perfile-navbar">
        <ul class="perfile-items">
          <li id="perfile" class="perfile-item selectItem">Perfil</li>
          <li id="setting" class="perfile-item">Configuración</li>
          <li id="comments" class="perfile-item">Comentarios</li>
          <li id="dashboard" class="perfile-item">Dashboard</li>
        </ul>
      </div>
    </section>
  </div>
</article>

<article class="mt-5">
  <section id="viewPerfile" class="blog-area text-center">
    <div class="container">
      <h1>ARTÍCULOS PUBLICADOS</h1>
      <div class="row">
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
      </div>
      <h1>ARTÍCULOS LEÍDOS</h1>
      <div class="row">
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
      </div>
      <h1>ARTÍCULOS FAVORITOS</h1>
      <div class="row">
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
      </div>
    </div>
  </section>
  <section id="viewSetting" class="text-center d-none">
    <h1>Configuración de usuario</h1>
    <div class="col-lg-6 col-md-12 mx-auto">
      <div class="single-post info-area ">
        <div class="subscribe-area">

          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your name">
            <button class="submit-btn">
              <ion-icon name="happy-outline"></ion-icon>
            </button>
          </div>
          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your lastname">
            <button class="submit-btn">
              <ion-icon name="happy-outline"></ion-icon>
            </button>
          </div>
          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your email">
            <button class="submit-btn">
              <ion-icon name="happy-outline"></ion-icon>
            </button>
          </div>
          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your nickname">
            <button class="submit-btn">
              <ion-icon name="sad-outline"></ion-icon>
            </button>
          </div>
          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your password">
            <button class="submit-btn">
              <ion-icon name="sad-outline"></ion-icon>
            </button>
          </div>
          <div class="form-group input-area">
            <input class="email-input" type="text" placeholder="Enter your new password">
            <button class="submit-btn">
              <ion-icon name="sad-outline"></ion-icon>
            </button>
          </div>

          <button class="btn btn-outline load-more-btn" type="submit">GUARDAR</button>

        </div><!-- subscribe-area -->
      </div><!-- info-area -->
    </div><!-- col-lg-4 col-md-12 -->
  </section>
  <section id="viewComments" class="text-center d-none">
    <!-- comments -->
    <div class="container">
      <h1>TUS COMENTARIOS</h1>
      <div class="row">

        <div class="col-lg-8 col-md-12 mx-auto">

          <div class="commnets-area text-left">
            <div class="comment">
              <h5 class="reply-for">Respondiste a <a href="#">Nombre del artículo</a></h5>

              <div class="post-info">

                <div class="left-area">
                  <a class="avatar" href="#"><img src="<?php echo ROUTE_URL; ?>img/post/avatar-1-120x120.jpg" alt="Profile Image"></a>
                </div>

                <div class="middle-area">
                  <a class="name" href="#">Katy Liu</a>
                  <h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
                </div>

                <div class="right-area">
                  <h5 class="reply-btn"><a href="#">DELETE</a></h5>
                </div>

              </div><!-- post-info -->

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                Ut enim ad minim veniam</p>

            </div>

          </div><!-- commnets-area -->

          <div class="commnets-area text-left">

            <div class="comment">

              <div class="post-info">

                <div class="left-area">
                  <a class="avatar" href="#"><img src="<?php echo ROUTE_URL; ?>img/post/avatar-1-120x120.jpg" alt="Profile Image"></a>
                </div>

                <div class="middle-area">
                  <a class="name" href="#">Katy Liu</a>
                  <h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
                </div>

                <div class="right-area">
                  <h5 class="reply-btn"><a href="#">DELETE</a></h5>
                </div>

              </div><!-- post-info -->

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                Ut enim ad minim veniam</p>

            </div>

          </div><!-- commnets-area -->

          <a class="more-comment-btn" href="#">VIEW MORE COMMENTS</a>

        </div><!-- col-lg-8 col-md-12 -->

      </div><!-- row -->

    </div><!-- container -->
  </section>
  <section id="viewDashboard" class="text-center d-none">
    <h1>Dashboard - en proceso</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit veniam hic velit nemo sapiente corrupti, consectetur neque adipisci, eaque, natus accusantium repudiandae earum explicabo distinctio. Beatae vero voluptatibus odit dignissimos.</p>
  </section>
</article>

<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>