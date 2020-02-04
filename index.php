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
          <br /><br />
          <div>
          	
          	<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B8AByKpnUis/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B8AByKpnUis/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B8AByKpnUis/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Chiropractic care is a safe, non-invasive approach to healing that works with your body to restore balance. Some of the many benefits of chiropractic care include: • ✔️ Increased mobility- by realigning your spine, joints and tissues are freed up, inflammation is decreased, and blood flow is restored to optimize organ and body function • ✔️ Reduced stress and anxiety- spinal alignment relaxes the nervous system reducing heart rate, and blood pressure, therefore leading to a greater overall feeling of well-being • ✔️ Eased back pain, headaches and migraines- spinal adjustments relieve lower back tension, neck and shoulder tension by naturally increasing blood flow, releasing connective tissue, and decreasing nerve irritation. • • • Please visit our office website for more information about chiropractic care and the many other health and wellness services we offer (link in bio) • • • #jankovicchiropractic #healthylifestyle #chiropractic #healthandwellness</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/jankovicchiropractic/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Jankovic Chiropractic Wellness</a> (@jankovicchiropractic) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-01-31T22:15:29+00:00">Jan 31, 2020 at 2:15pm PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
          	
          	</div>
          
          <!-- Owl Carousel-->
          <!--<div class="owl-carousel" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-dots="true" data-nav="true" data-stage-padding="28" data-xxl-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
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