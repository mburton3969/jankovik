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
      <section class="section">
        <div class="swiper-custom-container">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider-custom" data-loop="true" data-autoplay="4500" data-simulate-touch="false">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="images/jankovic/caro-1.jpg">
                <div class="swiper-slide-caption"></div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/jankovic/caro-3.jpg">
                <div class="swiper-slide-caption"></div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/jankovic/caro-2.jpg">
                <div class="swiper-slide-caption"></div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button swiper-button-prev">
              <div class="swiper-button__arrow">
                <div class="icon mdi mdi-keyboard-backspace"></div>
              </div>
              <div class="preview">
                <div class="preview__img"></div>
              </div>
            </div>
            <div class="swiper-button swiper-button-next">
               <div class="swiper-button__arrow">  
                <div class="icon icon-inverse mdi mdi-keyboard-backspace"></div>
              </div>
              <div class="preview">
                <div class="preview__img"></div>
              </div>
            </div>
          </div> 
          <div class="jumbotron-custom-wrapper">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9 col-xl-8">
                  <div class="jumbotron-custom">
                    <div class="light-box" style="opacity: 0.8;"><img src="images/jankovic/logos/logo.jpg"/>
                      <!-- <h2 class="title"></h2>
                       <div class="exeption">100% Natural and Active ingredients, without water, mineral oils, propylene glycol and other petrochemicals, phthalates, perfumes, dyes, triethanolamine, parabens etc.</div> 
                    </div>
                    <div class="primary-box"><a class="button button-white" href="products.html">View products</a></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Company overview-->
      <section class="section section-lg bg-default">
        <div class="container text-center">
          <h1 class="heading-decorative"><span><img src="images/typography-image-1-83x72.png" alt="" width="83" height="72"/>Company overview</span></h1>
          <p class="subtitle">about our company</p>
          <div class="row row-20 justify-content-around number-counter">
            <div class="col-md-6 text-left cushycms" title="overview-one">
              <p class="big">At Jankovic Chiropractic & Wellness, Dr. Steve Jankovic provides both gentle chiropractic treatments and holistic health services. During each patient visit, he combines several holistic health modalities including chiropractic manipulation, kinesiology, nutrition evaluation, and a stress/emotional evaluation to optimize healing.</p>
            </div>
            <div class="col-md-6 text-left cushycms" title="overview-two">
              <p class="big">In addition to delivering comprehensive chiropractic care, the health professionals at Jankovic Chiropractic offer a full scope of complementary services, ranging from massage therapy, allergy treatment and management, to health coaching, weight loss management, and nutrition counseling. Our goal is to optimize your overall health and well-being, ultimately improving your quality of life.
              </p>
            </div>
            <!--
            <div class="col-md-3 text-gray">
              <div class="blurb-center">
                <h2 class="index-counter"></h2>
                <h4 class="blurb-title">Organic Products</h4>
                <p class="blurb-content">The products available at our store are 100% organic and healthy for you.</p>
              </div>
            </div>
            <div class="col-md-3 text-gray">
              <div class="blurb-center">
                <h2 class="index-counter"></h2>
                <h4 class="blurb-title">Savings</h4>
                <p class="blurb-content">Our beauty and skin care products can save you a lot of money</p>
              </div>
            </div>
            <div class="col-md-3 text-gray">
              <div class="blurb-center">
                <h2 class="index-counter"></h2>
                <h4 class="blurb-title">Realism</h4>
                <p class="blurb-content">Our advertisements do not include unreasonable promises</p>
              </div>
            </div>-->
          </div>
          <div class="button-custom-wrapper"><a class="button button-primary" href="about-us.php">Read more about us</a></div> 
        </div>
      </section>
      <!-- Chiropractic Section -->
      <section class="section section-lg bg-default">
        <div class="container text-center">
          <div class="row justify-content-center row-0">
            <div class="col-md-8 col-lg-6 column-image">
              <div class="column-image-wrap"><img src="images/jankovic/chiro.jpg" alt="" width="300" height="403"/>
              </div>
            </div>
            <div class="col-md-8 col-lg-6 section-xs-1">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h1 class="heading-decorative"><span><img class="image-center" src="images/typography-image-2-58x60.png" alt="" width="58" height="60"/>Chiropractic Services</span></h1>
                  <p class="cushycms" title="chiropractic">Chiropractic helps your body heal naturally by using spinal adjustments to correct vertebral misalignments in the spine. Dr. Jankovic uses many different techniques to correct vertebral subluxations, most of which are gentile, low force techniques.</p><a class="button button-primary" href="chiropractic.php">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Massage Section -->
      <section class="section section-lg bg-default">
        <div class="container text-center">
          <div class="row justify-content-center row-0 flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 column-image">
              <div class="column-image-wrap"><img src="images/jankovic/massage.jpg" alt="" width="300" height="403"/>
              </div>
            </div>
            <div class="col-md-8 col-lg-6 section-xs-1">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h1 class="heading-decorative"><span><img class="image-center" src="images/typography-image-3-57x60.png" alt="" width="57" height="60"/>Massage Services</span></h1>
                  <p class="cushycms" title="massage">We offer a wide range of massage services, including Myofascial release, swedish, deep tissue, and trigger point therapy,.</p><a class="button button-primary" href="massage.php">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Nutrition & Allergy Feature-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-6 d-flex">
              <div class="cta bg-image bg-cta-1">
                <div class="cta-inner">
                  <h3 class="title">Advanced <a href="allergy.php">Allergy</a> Therapeutics</h3>
                  <h6 class="exeption">A highly effective, alternative therapy in treating allergies and sensitivities.</h6><a class="button button-primary" href="allergy.php">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="cta bg-image bg-cta-2">
                <div class="cta-inner">
                  <h3 class="title">Nutrition Assessment</h3>
                  <h6 class="exeption">Based on blood work analysis, organ and endocrine system evaluation.</h6><a class="button button-primary" href="nutrition.php">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Change your lifestyle-->
      <section class="section section-lg bg-image bg-image-8 context-dark">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8">
              <div class="row justify-content-center">
                <div class="col-md-10">
                  <h2 class="heading-decorative"><span><img src="images/typography-image-5-83x72.png" alt="" width="83" height="72"/>Change Your Lifestyle</span></h2>
                  <p class="big">Jankovic Chiropractic will educate and support people on their journeys toward health and well-being by introducing them to natural, gentle, noninvasive treatments.</p>
                </div>
              </div>
              <div class="highlited-box offset-top-1">
                <h1>Providing both gentle chiropractic treatments and holistic health services!</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      
     <!-- Testimonials-->
     <?php include 'sections/testimonials.php';?>
     
     
      <!-- Social Media-->
      <section class="section section-lg bg-default">
        <div class="container text-center">
          <h1 class="heading-decorative"><span><img src="images/typography-image-2-58x60.png" alt="" width="58" height="60"/>Social Media</span></h1>
          <h2>Coming Soon</h2>
          <!-- Owl Carousel-->
          <!-- <div class="owl-carousel" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-dots="true" data-nav="true" data-stage-padding="28" data-xxl-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/jankovic/sunflower.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">
                <div class="title"><a href="blog.html">Blog Post Example</a></div>
                <p class="exeption">This is an example blog post caption</p>
                <a class="button button-primary" href="#">Blog Page</a>
              </div>
            </div>
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/jankovic/plants.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">
                <div class="title"><a href="blog.html">Instagram Post Example</a></div>
                <p class="exeption">This is an example social media post caption</p>
                <a class="button button-primary" href="#">Instagram Profile</a>
              </div>
            </div>
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/jankovic/welcome.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">
                <div class="title"><a href="blog.html">Facebook Post Example</a></div>
                <p class="exeption">This is an example social media post caption</p>
                <a class="button button-primary" href="#">Facebook Page</a>
              </div>
            </div>
            <!--
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/product-category-7-370x270.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">_
                <div class="title"><a href="single-product.html">Handmade Soap</a></div>
                <p class="exeption">A true beauty, each piece of this handmade soap will put a smile on your face with the refreshing tingle of peppermint and the aroma of lemongrass.</p>
                <p class="price">$25.90</p><a class="button button-primary" href="#">Buy on amazon</a>
              </div>
            </div>
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/product-category-8-370x270.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">
                <div class="title"><a href="single-product.html">Organic Makeup Set</a></div>
                <p class="exeption">This set for makeup and skin care is considered the most popular and affordable beauty product, which can be ordered on the Web.Try it out!</p>
                <p class="price">$35.80</p><a class="button button-primary" href="#">Buy on amazon</a>
              </div>
            </div>
            <div class="price-box">
              <div class="figure"><a href="single-product.html"><img src="images/product-category-9-370x270.jpg" alt="" width="370" height="270"/></a></div>
              <div class="caption">
                <div class="title"><a href="single-product.html">Beeswax Lip Balm</a></div>
                <p class="exeption">Flavored with a hint of a citrusy tangerine oil, this rich balm serves up a matte finish that protects lips against the elements and has a sweet summer flavor.</p>
                <p class="price">$12.90</p><a class="button button-primary" href="#">Buy on amazon</a>
              </div>
            </div>
          </div> -->
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