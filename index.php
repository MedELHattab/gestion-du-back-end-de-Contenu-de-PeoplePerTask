<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>PeoplePerTask</title>
</head>
<body>

  <style>
    .swiper{
      padding: 0px 0px 54px 1px;
    }
  </style>

    <button class="back-to-top" type="button"></button>
    
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="images/PeoplePerTask.png" style="width: 12rem;" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #6298f3;"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 auto;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="search.html">Searsh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
                <form class="d-flex nav_btn" role="search">
                  <a href="sign.html" class="btn btn-primary">Connect</a>
                 
                </form>
                <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
              </div>
            </div>
          </nav>
    </header>

    <!-- hero section -->
    <div class="container-fluid banner">
        <div class="row text-center pb-4">
            <div class="col-lg-9 p-5 mx-auto text-center">
                <h1 style="color: #6298f3;">Find Your Perfect <span style="color: #f39c12;">Freelance</span> Match</h1>
                <p class="mt-5">Welcome to PeoplePerTask, your go-to destination for connecting with skilled professionals for all your project needs. Our user-friendly platform simplifies the process of finding the perfect freelancer, whether you require a creative designer, a proficient virtual assistant, or a tech-savvy developer. With our commitment to transparency and excellence, we ensure that every task is completed to the highest standard. Join our community today and discover how PeoplePerTask can help bring your projects to life</p>
                <a href="sign.html" class="mt-5 btn btn-primary">Sign in</a>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid banner" >
      <div class="row text-center pb-4" style="position: relative;">
          <div style="background-color: black;position: absolute;top: 0;left: 0;height: 100%;width: 100%;opacity: 0.4;" class="div_overley"></div>
          <div class="col-lg-9 p-5 mx-auto text-center" style="position: absolute;top: 0;">
              <h1 style="color: #6298f3;">Find Your Perfect <span style="color: #f39c12;">Freelance</span> Match</h1>
              <p class="mt-5">Welcome to PeoplePerTask, your go-to destination for connecting with skilled professionals for all your project needs. Our user-friendly platform simplifies the process of finding the perfect freelancer, whether you require a creative designer, a proficient virtual assistant, or a tech-savvy developer. With our commitment to transparency and excellence, we ensure that every task is completed to the highest standard. Join our community today and discover how PeoplePerTask can help bring your projects to life</p>
              <a href="#" class="mt-5 btn btn-primary">Sign in</a>
          </div>
      </div>
    </div> -->

   <!-- Filter des categories -->
    <section class="portfolio section">
        <div class="container">
        <div class="top-side">
            <h2 class="title">Categories Filter</h2>
        </div>
    
        <div class="filters">
            <ul>
                <li class="active" data-filter="*"> All</li>
                <li data-filter=".graphic">Graphic & Design</li>
                <li data-filter=".prog">Programming</li>
                <li data-filter=".marketing">Digital Marketing</li>
                <li data-filter=".write">Writing Translation</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row grid">
            <!-- front-end projects start -->
            <div class="col-md-4 mb-4 all prog">
                <div class="card">
                    <img src="images/devweb.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">website development ecommerce</h5>
                      <p class="card-text">If you are looking for a Professional WordPress HTML CSS Website Developer to develop your business website then you are in the right place.</p>
                      <i class="fa-solid fa-star"></i> <span>  55</span> (62) <br>
                      <i class="fa-solid fa-eye"></i><span>  122</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>120 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all prog">
                <div class="card">
                    <img src="images/mobile.webp" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">develop mobile app</h5>
                      <p class="card-text">Hello! I'm Mubeen Nisar, CEO of Algoace. With a team of 25 dedicated professionals, we specialize in AI-powered websites, mobile app development</p>
                      <i class="fa-solid fa-star"></i> <span>  20</span> (13) <br>
                      <i class="fa-solid fa-eye"></i><span>  70</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>100 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all prog">
                <div class="card">
                    <img src="images/php.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">develop php laravel websites </h5>
                      <p class="card-text">Hello I am an expert in management of information systems, I have a diploma of state engineer in computer science, </p>
                      <i class="fa-solid fa-star"></i> <span>  22</span> (40) <br>
                      <i class="fa-solid fa-eye"></i><span>  250</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>200 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all prog">
                <div class="card">
                    <img src="images/php1.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">develop php laravel, vuejs</h5>
                      <p class="card-text">Since beginning my journey as a freelance web developer started nearly 8 years ago, I've done remote work for agencies, consulted for startups.</p>
                      <i class="fa-solid fa-star"></i> <span>  15</span> (8) <br>
                      <i class="fa-solid fa-eye"></i><span>  11</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>300 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all prog">
                <div class="card">
                    <img src="images/siteweb.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">develop and produce a web site</h5>
                      <p class="card-text">Development and production of sites of any complexity, analytics, testing of work and full service maintenance.with responsive</p>
                      <i class="fa-solid fa-star"></i> <span>  45</span> (56) <br>
                      <i class="fa-solid fa-eye"></i><span>  340</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>180 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all graphic">
                <div class="card">
                    <img src="images/design.avif" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">design a timeless logo</h5>
                      <p class="card-text">Hi there! I'm a graphic designer with 5 years of experience in a leading London-based Logo agency. As your logo designer and Brand Specialist.</p>
                      <i class="fa-solid fa-star"></i> <span>  34</span> (29) <br>
                      <i class="fa-solid fa-eye"></i><span>  139</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>60 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all graphic">
                <div class="card">
                    <img src="images/design2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">design and redesign godaddy website</h5>
                      <p class="card-text">As an experienced web designer, I am equipped with the necessary skills and expertise to design a website that is not only aesthetically.</p>
                      <i class="fa-solid fa-star"></i> <span>  38</span> (22) <br>
                      <i class="fa-solid fa-eye"></i><span>  79</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>85 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all graphic">
                <div class="card">
                    <img src="images/design3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">design vector enamel pin in 24 hours</h5>
                      <p class="card-text">Hey friends, my name is Ditha a.k.a dsbeon, this gig is different from another my gig. In this gig I will focused only in enamel pin.</p>
                      <i class="fa-solid fa-star"></i> <span>  69</span> (60) <br>
                      <i class="fa-solid fa-eye"></i><span>  251</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>55 $</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 all marketing">
                <div class="card">
                    <img src="images/digital.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">complete digital marketing, google ads, facebook ads</h5>
                      <p class="card-text">I am currently working as a Digital Marketing Consultant with McDonald's to run their campaign on Google Adwords and have multiple international clients</p>
                      <i class="fa-solid fa-star"></i> <span>  53</span> (48) <br>
                      <i class="fa-solid fa-eye"></i><span>  164</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>45 $</strong>
                    </div>
                </div>
            </div>
            <!-- end of frontend projects -->
    
            <div class="col-md-4 mb-4 all write">
                <div class="card">
                    <img src="images/translate.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">translate english to portuguese</h5>
                      <p class="card-text">I will flawlessly translate your English document(s), Audios/Videos to Brazilian/European Portuguese, English to Spanish.</p>
                      <i class="fa-solid fa-star"></i> <span>  72</span> (58) <br>
                      <i class="fa-solid fa-eye"></i><span>  340</span> <br><br>
                      <a href="#" class="btn btn-primary btn_projet">Details</a>
                      <strong>40 $</strong>
                    </div>
                </div>
            </div>
    
            </div>
        </div>
    
        </div>
    </section>
  
    <!-- Les Catégories les Plus Populaires -->
    <section class="container mb-5 mt-3">
        <div class="row">
            <h2 class="mb-5 text-center">Most Popular Categories</h2>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"> 
                        <div class="snip1543">
                            <img src="images/design2.jpg" alt="sample108" />
                            <div>
                                <h3>Graphic Design</h3>
                                <p>Graphic design is a practical art which helps in communication.</p>
                            </div>
                            <a href="#"></a>
                        </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                        <div class="snip1543">
                            <img src="images/programation.png" alt="sample108" />
                            <div>
                                <h3>Programming</h3>
                                <p>Programming is the process of giving a set of instructions to a computer.</p>
                            </div>
                            <a href="#"></a>
                        </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                        <div class="snip1543">
                            <img src="images/marketing_digi.webp" alt="sample108" />
                            <div>
                                <h3>Digital Marketing</h3>
                                <p>Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet.</p>
                            </div>
                            <a href="#"></a>
                        </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                        <div class="snip1543">
                            <img src="images/trans.png" alt="sample108" />
                            <div>
                                <h3>Writing Translation</h3>
                                <p>Translation is the communication of the meaning of a source-language text by means of an equivalent target-language text.</p>
                            </div>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

           
        </div>
    </section>

    <!-- Les freelencers les Plus Populaires -->
    <section class="container mb-5 mt-3">
        <div class="row">
            <h2 class="mb-5 text-center">Most Popular Categories</h2>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"> 
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img">
                              <img src="images/prof.jpg" alt="Product" class="img-responsive" />
                            </div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                  <span>Developpeur Web</span>
                                </div>
                                <div class="title-product">
                                  <h3>Alex Smith</h3>
                                </div>
                                <div class="description-prod">
                                  <p>Expert des langages informatiques, le développeur informatique traduit la demande d'un client en lignes de code informatique</p>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center social_card">
                                        <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                      <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                          <img src="images/prof1.jpg" alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                              <span>Graphic Designe</span>
                            </div>
                            <div class="title-product">
                              <h3>Chris Stoof</h3>
                            </div>
                            <div class="description-prod">
                              <p>Le design graphique est une discipline qui consiste à utiliser une composition visuelle pour résoudre un problème</p>
                            </div>
                            <div class="card-footer">
                                <div class="text-center social_card">
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                      <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                          <img src="images/prof3.jpg" alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                              <span>Digital Marketing</span>
                            </div>
                            <div class="title-product">
                              <h3>Stephanie Martey</h3>
                            </div>
                            <div class="description-prod">
                              <p>Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet and other forms of digital communication. </p>
                            </div>
                            <div class="card-footer">
                                <div class="text-center social_card">
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Slides -->
                    <div class="swiper-slide">  
                      <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                          <img src="images/prof2.jpg" alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                              <span>Writing Translation</span>
                            </div>
                            <div class="title-product">
                              <h3>Lina Amerth</h3>
                            </div>
                            <div class="description-prod">
                              <p>Translation is the process of rendering written content from one language into another language.</p>
                            </div>
                            <div class="card-footer">
                                <div class="text-center social_card">
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <!-- The Most Popular Offers --> 
    <section class="container mb-5 mt-3">
      <div class="row">
          <h2 class="mb-5 text-center">The Most Popular Offers</h2>
          <div class="col-md-6 col-xl-4 mb-4">
            <div class="col_offres">
                <img src="images/offre.png" width="100%" alt="Offre">
                <div class="p-4">
                    <h3>Développeur FullStack</h3>
                    <p class="p_offres mt-3">Votre spécialité consiste à développer des logiciels au profit du ministère des Armées au sein d’un centre de développement. </p>
                    <div class="categories_offres d-grid">
                      <span>Développement FullStack</span>
                      <span>Développement Web</span>
                      <span>Frontend & Backend</span>
                    </div>
                    <a href="#" class="btn btn-primary btn_projet mt-3">Details</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
            <div class="col_offres">
                <img src="images/offre1.jpeg" width="100%" alt="Offre">
                <div class="p-4">
                    <h3>Photographe Designer</h3>
                    <p class="p_offres mt-3">Vous travaillez sur une base aérienne où vous effectuez des reportages photographiques et où vous pouvez être amené à travailler sur des projets infographiques  </p>
                    <div class="categories_offres d-grid">
                      <span>Photographe</span>
                      <span>Infographiste</span>
                      <span>Designer graphique</span>
                    </div>
                    <a href="#" class="btn btn-primary btn_projet mt-3">Details</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 mb-4">
            <div class="col_offres">
                <img src="images/offre3.jpg" width="100%" alt="Offre">
                <div class="p-4">
                    <h3>Développeur PHP</h3>
                    <p class="p_offres mt-3">Vous développez des applications informations, administrez des bases de données et réalisez les architectures des sites web des armées, directions et différents services. </p>
                    <div class="categories_offres d-grid">
                      <span>Développement PHP</span>
                      <span>Backend</span>
                      <span>Laravel</span>
                    </div>
                    <a href="#" class="btn btn-primary btn_projet mt-3">Details</a>
                </div>
            </div>
          </div>
          
      </div>
    </section>
    
    <!-- testimonial -->
    <section class="mb-5">
        <div class="container">
          <div class="row">
            <h2 class="mb-5 text-center">Testimonials</h2>
            <div class="col-sm-12 col-md-6 text-md-end text-sm-center">
                <img src="images/ghofran.svg" class="image_testimonial me-md-5 me-sm-0" style="width: 26rem;" alt="">
            </div>
            <div class="col-sm-12 col-md-6 pt-md-5 pt-sm-0 mx-sm-5 mx-md-0">
              <div class="info_testimonial mt-3">
                <p>" As a freelancer, this platform has opened up countless opportunities for me. I've connected with numerous clients, built lasting relationships, and expanded my portfolio significantly. The user-friendly interface and reliable support make it a go-to platform for any freelancer looking to grow their career. "</p>
                <h4 class="mt-md-5 mt-sm-0">Mohammed Ghoufrane</h4>
                <span>Ingénieur réseau</span>
              </div>
            </div>
            <div class="text-center btn_testimonial mt-sm-5 mt-md-0">
              <a href="#" class="btn btn-primary btn_projet" style="width: 8rem;">More</a>
            </div>
          </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fa-solid fa-map" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fas fa-phone" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fa-solid fa-envelope" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="images/PeoplePerTask.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>At PeoplePerTask, we foster a thriving community of skilled professionals and businesses, seamlessly facilitating the connection between talent and tasks. With a commitment to excellence and user satisfaction, our platform serves as a dynamic hub for collaboration, enabling individuals and companies to achieve their goals efficiently and effectively.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget ps-lg-5">
                            <div class="footer-widget-heading">
                                <h3>Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="searsh.html">Searsh</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center mx-auto">
                        <div class="copyright-text">
                            <p>© 2023 PeoplePerTask. All rights reserved </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: 3,
        centeredSlides: false,
        spaceBetween: 10,
        autoplay:{
            delay:1200,
            disableOnInteraction:false,
            waitForTransition:true,
        },
        initialSlide: 0, 

        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
		    320: {
		        slidesPerView: 1,
		        spaceBetween: 10,
		    },
		    580: {
		        slidesPerView: 2,
		        spaceBetween: 10,
		    },
		    768: {
		        slidesPerView: 3,
		        spaceBetween: 10,
		    },
		    992: {
		        slidesPerView: 3,
		        spaceBetween: 10,
		    },
		} 
});
    
    </script>

</body>
</html>
