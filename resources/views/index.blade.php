<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DipSit | Home</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="https://pramukasmapang.herokuapp.com/css/style.css">

    {{-- Iconscout CDN --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    {{-- Google Fonts (Montserrat)--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins&display=swap" rel="stylesheet">
    {{-- SwiperJS CDN --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    {{-- navbar --}}
    <nav>
        <div class="container nav__container">
            <a href="#"><h4>DIPSIT</h4></a>
            <ul class="nav__menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    {{-- end of navbar --}}

    {{-- header --}}
    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Beranilah, ambil risiko. Tidak ada yang bisa menggantikan pengalaman.</h1>
                <p>Tinggi moral kuat mental. Manusia pantang menyerah. Tegar jiwanya berpegang teguh pada satya dan dharmanya. Pramuka mengajarkan kebersamaan, kedisiplinan, kemandirian, jiwa korsa dan semangat pantang menyerah. Pramuka merekatkan bukan meretakan.
                </p>
                <a href="#" class="btn btn-primary">Join Us</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="{{asset('images/image-header1.svg')}}">
                </div>
            </div>
        </div>
    </header>
    {{-- end of header --}}

    {{-- categories --}}
    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Categories</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,commodo consequat. 
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>

            <div class="categories__right">
                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image" src="{{ asset('images/knowledge.png') }}">
                        <h5>Pengetahuan Umum Kepramukaan</h5>
                        <p>Pengetahuan umum mengenai pendidikan kepramukaan.</p>
                    </span>
                </article>
                
                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image" src="{{ asset('images/rope(1).png') }}">
                        <h5>Tali temali (Knotting)</h5>
                        <p>Seni untuk menyambung tali dengan menggunakan simpul-simpul.</p>
                    </span>
                </article>
                
                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image sandi" src="{{ asset('images/decryption.png') }}">
                        <img class="category__icon-image semaphore" src="{{ asset('images/semaphore.png') }}">
                        <h5 class="category__head">Sandi & Semaphore</h5>
                        <p>Seni mengirim pesan rahasia menggunakan kode dan insyarat dalam pramuka.</p>
                    </span>
                </article>
                
                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image" src="{{ asset('images/soldier.png') }}">
                        <h5>Peraturan Baris Berbaris (PBB)</h5>
                        <p>Peraturan tata cara baris berbaris yang ada di dalam pramuka.</p>
                    </span>
                </article>
                
                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image" src="{{ asset('images/map.png') }}">
                        <h5>Pemetaan (Mapping)</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </span>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <img class="category__icon-image" src="{{ asset('images/ruler.png') }}">
                        <h5>Menaksir</h5>
                        <p>Seni mengira-ngira tinggi, lebar, berat, kecepatan, dan jarak dari suatu benda dalam pramuka.</p>
                    </span>
                </article>
            </div>
        </div>
    </section>
    {{-- end of categories --}}

    {{-- hall of achievement --}}
    <section class="achievements">
        <h2>Hall of Achievements</h2>
        <div class="container achievement__container">
            <article class="achievement">
                <div class="achievement__image">
                    <img src="{{ asset('images/juara4.jpg')}}">
                </div>
                <div class="achievement__info">
                    <h4>Juara Umum LKBB 2017</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum explicabo earum est libero eius ipsa enim.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </article>

            <article class="achievement">
                <div class="achievement__image">
                    <img src="{{ asset('images/juara2.jpg')}}">
                </div>
                <div class="achievement__info">
                    <h4>Juara Umum LKBB 2017</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum explicabo earum est libero eius ipsa enim.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </article>

            <article class="achievement">
                <div class="achievement__image">
                    <img src="{{ asset('images/juara3.jpg')}}">
                </div>
                <div class="achievement__info">
                    <h4>Juara Umum LKBB 2017</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum explicabo earum est libero eius ipsa enim.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </article>
        </div>
    </section>
    {{-- end of hall of achievement --}}

    {{-- FAQs --}}
    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right course for me?</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam, quidem, accusantium beatae libero harum cum odit a voluptatibus nemo corporis quisquam est. Incidunt hic earum vero quibusdam rerum dicta.
                    </p>
                </div>
            </article>
        </div>
    </section>
    {{-- End of FAQs --}}

    {{-- Pengurus Harian --}}
    <section class="container troops__container mySwiper">
        <h2>Pengurus Harian Ambalan DIPSIT</h2>
        <div class="swiper-wrapper">
            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>

            <article class="troop swiper-slide">
                <div class="avatar">
                    <img src="{{ asset('images/avatar/diponegoro.png') }}">
                </div>
                <div class="troop__info">
                    <h5>Widies Ade Priyanto</h5>
                    <small>Pemangku Adat</small>
                </div>
                <div class="troop__body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum qui saepe a explicabo ut, repellat reiciendis culpa voluptatum, laboriosam est dicta magnam. Ad totam repellendus possimus excepturi distinctio architecto hic.
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    {{-- End of Pengurus Harian --}}

    {{-- Footer Section --}}
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="/" class="footer__logo"><h4>DIPSIT</h4></a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ducimus deleniti alias eaque soluta cum dolore totam dignissimos aspernatur. Harum ex, vel consequatur nesciunt porro ad vero voluptatibus. Consectetur, nulla?
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
    
            <div class="footer__4">
                <h4>Kontak kami</h4>
                <div>
                    <p>+62-813-9367-7013</p>
                    <p>dipsit@gmail.com</p>
                </div>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </li>
                </ul>
            </div>
    
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; DIPSIT 2022</small>
        </div>
    </footer>
    {{-- End of Footer Section --}}

    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    <script src="https://pramukasmapang.herokuapp.com/js/main.js"></script>
    {{-- SwiperJS CDN --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // when window width more than 600px
            breakpoints: {
                600 : {
                    slidesPerView: 2
                }
            }
        });
    </script>
</body>
</html>