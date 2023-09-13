<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="/css/styles.css">

        <title>Responsive landing page</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">PPLG</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#share" class="nav__link">Information</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Materi</a></li>
                        <li class="nav__item"><a href="#accessory" class="nav__link">CV</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="/img/pplg.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Company Profile PPLG</h1>
                        <p class="home__description">Website ini ditujukan untuk mengenal lebih lanjut mengenai jurusan PPLG dan juga memberikan informasi dan juga materi mengenai jurusan PPLG.</p>
                    </div>   
                </div>
            </section>

            <!--========== INFORMATION ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                    <div class="share__data">
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <h2 class="section-title">Apa Itu <br> PPLG?</h2>
                        <p class="share__description">PPLG atau Pengembangan Perangkat Lunak dan Gim adalah sebuah jurusan di SMK (Sekolah Menengah Kejuruan). Jurusan ini mempelajari dan mendalami cara-cara mengembangkan perangkat lunak. Mulai dari pembuatan, pemeliharaan, manajemen kualitas, dan manajemen organisasi pengembangan perangkat lunak. Selain itu, jurusan PPLG juga berhubungan dengan software komputer seperti pembuatan aplikasi, website, game dan semua yang berhubungan dengan pemrograman. Singkatnya, jurusan PPLG erat kaitannya dengan coding, desain, dan algoritma.</p>
                    </div>

                </div>
            </section>

            <!--========== DECORATION ==========-->
            <section class="decoration section bd-container" id="decoration">
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <h2 class="section-title">Give Christmas Decorations <br> For Your Home</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <img src="/img/icon1.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Christmas Bells</h3>
                    </div>

                    <div class="decoration__data">
                        <img src="/img/icon2.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Christmas Candies</h3>>
                    </div>

                    <div class="decoration__data">
                        <img src="/img/icon3.png" alt="" class="decoration__img">
                    </div>
                </div>
            </section>

            <!--========== ACCESSORIES ==========-->
            <section class="accessory section bd-container" id="accessory">
                <h2 class="section-title">New Christmas <br> Accessories</h2>

                <div class="accessory__container bd-grid">
                    <div class="accessory__content">
                        <img src="assets/img/accessory1.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Snow Globe</h3>
                        <span class="accessory__category">Accessory</span>
                        <span class="accessory__preci">$9.45</span>
                        <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/accessory2.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Candy</h3>
                        <span class="accessory__category">Accessory</span>
                        <span class="accessory__preci">$2.52</span>
                        <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/accessory3.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Angel</h3>
                        <span class="accessory__category">Accessory</span>
                        <span class="accessory__preci">$13.15</span>
                        <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/accessory4.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Sphere</h3>
                        <span class="accessory__category">Accessory</span>
                        <span class="accessory__preci">$4.25</span>
                        <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/accessory5.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Surprise gift</h3>
                        <span class="accessory__category">Accessory</span>
                        <span class="accessory__preci">$7.99</span>
                        <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
                    </div>
                </div>
            </section>

            <!--========== SEND GIFT ==========-->
            <section class="send section">
                <div class="send__container bd-container bd-grid">
                    <div class="send__content">
                        <h2 class="section-title-center send__title">Send Gift Now</h2>
                        <p class="send__description">Start giving away before the holidays are over. Write the home address of the person who will send the gift.</p>
                        <form action="">
                            <div class="send__direction">
                                <input type="text" placeholder="House address" class="send__input">
                                <a href="#" class="button">Send</a>
                            </div>
                        </form>
                    </div>

                    <div class="send__img">
                        <img src="assets/img/send.png" alt="">
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                
                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src=""></script>
    </body>
</html>