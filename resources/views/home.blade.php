<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  <body class="index-page">

    <main class="main">
      <!-- Hero Section -->
        <x-hero></x-hero>
      <!-- /Hero Section -->

      <!-- Clients Section -->
        <x-clients></x-clients>
      <!-- /Clients Section -->

      <!-- About Section -->
        <x-about></x-about>
      <!-- /About Section -->

      <!-- Why Us Section -->
      {{-- <section id="why-us" class="section why-us" data-builder="section">
        <div class="container-fluid">
          <div class="row gy-4">
            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
              <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit</p>
              </div>

              <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-item faq-active">
                  <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                  <div class="faq-content">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                      dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->

                <div class="faq-item">
                  <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                  <div class="faq-content">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna
                      duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <!-- End Faq item-->
              </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
              <img src="/images/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" />
            </div>
          </div>
        </div>
      </section> --}}
      <!-- /Why Us Section -->

      <!-- Skills Section -->
      {{-- <section id="skills" class="skills section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
              <img src="/images/skills.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
              <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <div class="skills-content skills-animation">
                <div class="progress">
                  <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                  <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                  <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                  <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- End Skills Item -->
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- /Skills Section -->

      <!-- Services Section -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Sed ut perspici</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Call To Action Section -->
      {{-- <section id="call-to-action" class="call-to-action section">
        <img src="/images/cta-bg.jpg" alt="" />

        <div class="container">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- /Call To Action Section -->

      <!-- Portfolio Section -->
      {{-- <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Card</li>
              <li data-filter=".filter-branding">Web</li>
            </ul>
            <!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="/images/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="/images/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="/images/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="/images/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="/images/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="/images/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="/images/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="/images/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="/images/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="/images/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
          </div>
        </div>
      </section> --}}
      <!-- /Portfolio Section -->

      <!-- Team Section -->
      {{-- <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="/images/team/team-1.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="/images/team/team-2.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="/images/team/team-3.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="/images/team/team-4.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->
          </div>
        </div>
      </section> --}}
      <!-- /Team Section -->

      <!-- Pricing Section -->
      {{-- <section id="pricing" class="pricing section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Free Plan</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item featured">
                <h3>Business Plan</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Developer Plan</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                  <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                  <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
            <!-- End Pricing Item -->
          </div>
        </div>
      </section> --}}
      <!-- /Pricing Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>info@example.com</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 270px"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>

            <div class="col-lg-7">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <label for="name-field" class="pb-2">Your Name</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="" />
                  </div>

                  <div class="col-md-6">
                    <label for="email-field" class="pb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="" />
                  </div>

                  <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="" />
                  </div>

                  <div class="col-md-12">
                    <label for="message-field" class="pb-2">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="newsletter-form"><input type="email" name="email" /><input type="submit" value="Subscribe" /></div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="d-flex align-items-center">
              <span class="sitename">Arsha</span>
            </a>
            <div class="footer-contact pt-3">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12">
            <h4>Follow Us</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links d-flex">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <a href="#" class="media d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
  </body>
</x-layout>

