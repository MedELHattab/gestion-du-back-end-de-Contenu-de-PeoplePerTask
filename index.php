<?php
include("languages/language.php");
include("dashboard/cnx.php");
session_start();
if (isset($_SESSION["id"])) {
    unset($_SESSION['id']);
}
$loggedIn = isset($_SESSION["id"]);

$data = mysqli_query($cnx, "SELECT * FROM testimonials");
// $testimonials = mysqli_fetch_assoc($data);
// $data = mysqli_query($cnx, "SELECT * FROM freelancers ORDER BY Freelancer_ID DESC");
$freelancers = mysqli_query($cnx, "SELECT * FROM freelancers ORDER BY Freelancer_ID DESC");
$projects = mysqli_query($cnx, "SELECT * FROM projects");
$offers = mysqli_query($cnx, "SELECT * FROM offers");
$categories = mysqli_query($cnx, "SELECT * FROM categories ORDER BY Categorie_ID DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header_footer.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>PeoplePerTask</title>

</head>

<body>

    <style>
        .swiper {
            padding: 0px 0px 54px 1px;
        }

        .icons_languages {
            width: 30px;
        }

        .languages {
            margin-left: 2rem;
        }

        .languages a {
            text-decoration: none;
            margin-right: 0.5rem;
        }
    </style>

    <button class="back-to-top" type="button"></button>
    <!-- header -->
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
                        <a class="nav-link active" aria-current="page" href="index.php"><?= $lang['Home'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><?= $lang['About'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="search.php"><?= $lang['Searsh'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?= $lang['Contact'] ?></a>
                    </li>
                </ul>

                <!-- <?php
                if (!$loggedIn) {
                    echo '<form class="d-flex nav_btn" role="search">';
                    echo '<a href="sign.php" class="btn btn-primary">' . $lang['Connect'] . '</a>';
                    echo '</form>';
                } else {
                    echo '<form class="d-flex nav_btn" role="search">';
                    echo '<a href="./dashboard/logout.php" class="btn btn-primary">' . $lang['Logout'] . '</a>';
                    echo '</form>';
                }
                ?> -->

                <div class="languages">
                    <a href="index.php?lg=fr">
                        <img src="images/france.png" class="icons_languages" alt="france">
                    </a>
                    <a href="index.php?lg=eng">
                        <img src="images/england.png" class="icons_languages" alt="england">
                    </a>
                </div>
                <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
            </div>
        </div>
    </nav>
</header>
    <!-- end hero -->
    <!-- hero section -->
    <div class="container-fluid banner">
        <div class="row text-center pb-4">
            <div class="col-lg-9 p-5 mx-auto text-center">
                <h1 style="color: #6298f3;"><?= $lang['Find Your Perfect'] ?><span style="color: #f39c12;"><?= $lang['Freelance'] ?></span> <?= $lang['Match'] ?></h1>
                <p class="mt-5"><?= $lang['Welcome to PeoplePerTask'] ?></p>
                <a href="sign.html" class="mt-5 btn btn-primary"><?= $lang['Sign in'] ?></a>
            </div>
        </div>
    </div>

    <!-- Filter des projects -->
    <section class="portfolio section">
        <div class="container">
            <div class="top-side">
                <h2 class="title"><?= $lang['Categories Filter'] ?></h2>
            </div>

            <div class="filters">
                <ul>
                    <li class="active" data-filter="*"> All</li>
                    <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
                        <li data-filter=".<?php echo explode(' ', $category['Categorie_Name'])[0]; ?>"><?= $category['Categorie_Name'] ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <?php while ($project = mysqli_fetch_assoc($projects)) { ?>
                        <div class="col-md-4 mb-4 all <?php echo explode(' ', $project['Title'])[0]; ?>">
                            <div class="card">
                                <img src="images/<?= $project['image'] ?>" class="card-img-top" alt="<?= $project['Title'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $project['Title'] ?></h5>
                                    <p class="card-text"><?= $project['Project_Description'] ?></p>
                                    <i class="fa-solid fa-star"></i> <span> 55</span> (62) <br>
                                    <i class="fa-solid fa-eye"></i><span> 122</span> <br><br>
                                    <a href="project_details.php?id=<?= $project['Project_ID'] ?>" class="btn btn-primary btn_projet">Details</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>

 <!-- Les freelencers les Plus Populaires -->
<section class="container mb-5 mt-3">
    <div class="row">
        <h2 class="mb-5 text-center"><?= $lang['Most Popular Freelancers'] ?></h2>

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php while ($freelancer = mysqli_fetch_assoc($freelancers)) { ?>
                    <div class="swiper-slide">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img">
                                <img src="images/<?= $freelancer['image'] ?>" alt="<?= $freelancer['Freelancer_Name'] ?>" class="img-responsive" />
                            </div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span><?= $freelancer['Freelancer_Name'] ?></span>
                                </div>
                                <div class="title-product">
                                    <h3><?= $freelancer['Freelancer_Name'] ?></h3>
                                </div>
                                <div class="description-prod">
                                    <p><?= $freelancer['Competances'] ?></p>
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
                <?php } ?>
            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

    <!-- Les Catégories les Plus Populaires -->
    <section class="container mb-5 mt-3">
        <div class="row">
            <h2 class="mb-5 text-center"><?= $lang['Most Popular Categories'] ?></h2>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
                        <div class="swiper-slide">
                            <div class="snip1543">
                                <img src="images/<?= $category['image'] ?>" alt="<?= $category['Categorie_Name'] ?>" />
                                <div>
                                    <h3><?= $category['Categorie_Name'] ?></h3>
                                </div>
                                <a href="#"></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- The Most Popular Offers -->
    <section class="container mb-5 mt-3">
        <div class="row">
            <h2 class="mb-5 text-center"><?= $lang['The Most Popular Offers'] ?></h2>
            <?php while ($offre = mysqli_fetch_assoc($offers)) { ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="col_offres">
                        <img src="images/<?= $offre['image'] ?>" width="100%" alt="<?= $project['Amount'] ?>">
                        <div class="p-4">
                            <h3><?= $project['Amount'] ?></h3>
                            <p class="p_offres mt-3"><?= $project['Deadline'] ?> </p>
                            <div class="categories_offres d-grid">
                                <span>Développement FullStack</span>
                                <span>Développement Web</span>
                                <span>Frontend & Backend</span>
                            </div>
                            <a href="details_project?id=<?= $project['id_project'] ?>" class="btn btn-primary btn_projet mt-3">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- testimonial -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <h2 class="mb-5 text-center"><?= $lang['Testimonials'] ?></h2>
                <div class="col-sm-12 col-md-6 text-md-end text-sm-center">
                    <img src="images/<?= $testimonials['image'] ?>" class="image_testimonial me-md-5 me-sm-0" style="width: 26rem;" alt="<?= $testimonials['name'] ?>">
                </div>
                <div class="col-sm-12 col-md-6 pt-md-5 pt-sm-0 mx-sm-5 mx-md-0">
                    <div class="info_testimonial mt-3">
                        <p>"<?= $testimonials['Comment'] ?>"</p>
                        <h4 class="mt-md-5 mt-sm-0"><?= $testimonials['User_ID'] ?></h4>
                        <span><?= $testimonials['email'] ?></span>
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
                                <h4><?= $lang['Find us'] ?></h4>
                                <span><?= $lang['adress'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fas fa-phone" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4><?= $lang['Call us'] ?></h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fa-solid fa-envelope" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4><?= $lang['Mail us'] ?></h4>
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
                                <p><?= $lang['description footer'] ?></p>
                            </div>
                            <div class="footer-social-icon">
                                <span><?= $lang['Follow us'] ?></span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget ps-lg-5">
                            <div class="footer-widget-heading">
                                <h3><?= $lang['Links'] ?></h3>
                            </div>
                            <ul>
                                <li><a href="index.html"><?= $lang['Home'] ?></a></li>
                                <li><a href="about.html"><?= $lang['About'] ?></a></li>
                                <li><a href="searsh.html"><?= $lang['Searsh'] ?></a></li>
                                <li><a href="contact.html"><?= $lang['Contact'] ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><?= $lang['Subscribe'] ?></h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p><?= $lang['subscribe_footer'] ?></p>
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
                            <p><?= $lang['copyright'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 3,
            centeredSlides: false,
            spaceBetween: 10,
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
                waitForTransition: true,
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
    });
</script>
   
</body>
</html>
