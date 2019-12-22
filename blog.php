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
                <h2>Blog & Social Media</h2>
                <ol class="breadcrumbs-custom">
                  <li><a href="./">Home</a></li>
                  <li>Blog
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
     
     <!-- Coming Soon -->
     <?php include 'sections/coming-soon.php';?>
     
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