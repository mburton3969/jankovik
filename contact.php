<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
  <!-- Site Title-->
    <?php include 'global/sections/head.php';?>
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page preloader-->
      <?php include 'global/sections/page-loader.php';?>
     <!-- RD Navbar-->
     <?php include 'global/sections/nav.php';?>

     <!-- *** Page Content Goes Here *** -->
     
      <section class="section section-bredcrumbs bg-image-breadcrumbs-1">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xxl-8">
              <div class="breadcrumb-wrapper"><img src="images/image-icon-1-49x43.png" alt="" width="49" height="43"/>
                <h2>Registration</h2>
                <ol class="breadcrumbs-custom">
                  <li><a href="./">Home</a></li>
                  <li><a href="#">Pages</a></li>
                  <li>Registration
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Log in-->
      <section class="section section-lg bg-default">
        <div class="container text-center">
          <div class="row row-30 justify-content-sm-center">
            <div class="col-md-10 col-xl-8">
              <h1 class="heading-decorative"><span><img src="images/typography-image-1-83x72.png" alt="" width="83" height="72"/>Register</span></h1>
              <!-- RD Mailform-->
              <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                <div class="row justify-content-end row-10 row-horizontal-10">
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-register-name">First name</label>
                      <input class="form-input" id="forms-register-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-register-user-name">Last name</label>
                      <input class="form-input" id="forms-register-user-name" type="text" name="user-name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-register-email">E-mail</label>
                      <input class="form-input" id="forms-register-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-register-password">Password</label>
                      <input class="form-input" id="forms-register-password" type="password" name="password" data-constraints="@Required">
                    </div>
                  </div>
                </div>
                <div class="form-button text-center">
                  <button class="button button-primary" type="submit">Register</button>
                </div>
              </form>

              <!-- Contact form-->
      <section class="section section-lg section-lg-bottom-40 bg-default">
        <div class="container text-center">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-xl-6">
              <h5>Get in touch</h5>
              <!-- RD Mailform-->
              <form class="rd-mailform text-right" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                <div class="row justify-content-end row-10 row-horizontal-10">
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-name">First name</label>
                      <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-last-name">Last name</label>
                      <input class="form-input" id="forms-last-name" type="text" name="last-name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-email">E-mail</label>
                      <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-phone">Phone</label>
                      <input class="form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-message">Message</label>
                      <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-button">
                  <button class="button button-primary" type="submit">Send a message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

              <h6>or</h6>
              <ul class="group-button-sm">
                <li><a class="button button-steel-blue button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span><span class="button-text">Facebook</span></a></li>
                <li><a class="button button-cerulean button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span><span class="button-text">Twitter</span></a></li>
                <li><a class="button button-mandy button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span><span class="button-text">Google</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Newsletter-->
      <section class="section section-lg section-lg-bottom-40 bg-default">
        <div class="container text-center">
          <div class="row justify-content-sm-center">
            <div class="col-md-6 col-xl-4">
              <h5>Newsletter</h5>
              <!-- RD Mailform-->
              <form class="rd-mailform-inline rd-mailform-icon text-left rd-mailform" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="inline-email">info@demolink.org</label>
                  <input class="form-input" id="inline-email" type="email" name="email" data-constraints="@Email @Required">
                  <button class="button" type="submit"><span class="icon fa-envelope"></span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

     <!-- *** Page Content Ends Here *** -->

      <!-- Page Footer-->
     <?php include 'global/sections/footer.php';?>
    </div>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>