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
                <form class="d-flex nav_btn" role="search">
                  <a href="sign.php" class="btn btn-primary"><?= $lang['Connect'] ?></a>
                </form>
                
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