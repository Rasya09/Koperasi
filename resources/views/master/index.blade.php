<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('assetslp/img/favicon.png')}}" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assetslp/css/swiper-bundle.min.css')}}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assetslp/css/styles.css')}}">

    <title>Starbak</title>
    <style>
        /*Penghalang*/
        .penghalang {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        /*Modal */
        .modal-content {
            /* background-color: #fefefe; */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15% auto;
            padding: 20px;
            /* border: 1px solid #888; */
            width: 80%;
        }

        /*Tombol X*/
        #tutup {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        #tutup:hover,
        #tutup:focus {
            color: black;
            cursor: pointer;
        }

        .card {
            width: 85%;
            height: 45%;
            border-radius: 10px;
            padding: 70px 40px;
            /* padding-top: 26px; */
            box-sizing: border-box;
            background: #162527;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .card-body {
            display: flex;
            align-items: start;
            gap: 75px;
        }

        .modal-image-cont {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 15px;
            align-items: center;
        }

        .modal-image {
            width: 300px;
            background: lightgrey;
            height: 200px;
            border-radius: 5px;
        }

        .modal-images {
            display: flex;
            align-items: center;
            gap: 15px
        }

        .modal-image-prev {
            width: 60px;
            height: 40px;
            border-radius: 3px;
            background: lightgrey;
        }

        .info {
            margin-top: 20px;
            width: 400px;
        }

        .info-title {
            font-size: 30px;
            color: lightgrey;
            font-weight: 500;
            margin: 0
        }

        .info-desc {
            font-size: 14px;
            margin: 0;
            margin-top: 30px;
            margin-bottom: 45px;
            color: lightgrey;
            opacity: 0.9
        }

        .info-addons {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .info-price {
            font-size: 18px;
            color: lightgrey;
        }

        .amount-btn {
            display: flex;
            align-items: center;
        }

        .amo-btn {
            background: lightgrey;
            border: 1px solid;
            width: 20px;
            height: 20px;
            border-radius: 1px;
            font-size: 10px;
            font-weight: 600;
            cursor: pointer;
        }

        .amount {
            width: 20px;
            height: 20px;
            background: lightgrey;
            text-align: center;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 1px;
            font-size: 10px;
        }

        .amount:focus {
            outline: none;
        }

        .add-btn {
            width: 100%;
            height: 28px;
            border-radius: 15px;
            background: lightgrey;
            text-transform: uppercase;
            font-size: 11px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    @include('master.navabar')

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="{{  asset('assetslp/img/tbsmk.jpg') }}" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    {{-- <span class="home__data-subtitle">Discover your place</span> --}}
                    <h1 class="home__data-title">It's not <b>Starbucks</b> <br> But this is <b>Starbhak</b></h1>
                    {{-- <a href="#" class="button">Explore</a> --}}

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

                {{-- <div class="home__info">
                        <div>
                            <span class="home__info-title">5 best places to visit</span>
                            <a href="" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="{{  asset('assetslp/img/home2.jpg') }}" alt="" class="home__info-img">
            </div>
            </div> --}}
            </div>
        </section>


        <!--==================== PLACES ====================-->
        {{-- Ini Pilih Minuman --}}
        <section class="place section" id="place">
            <h2 class="section__title">Select Drink</h2>

            <div class="place__container container grid">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card">
                    <img src="{{  asset('assetslp/img/minuman/mizone.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Mizone</h3>
                            <span class="place__subtitle">Rasa Lycee Lemon</span>
                            <span class="place__price">Rp 5.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place__card">
                    <img src="{{  asset('assetslp/img/minuman/Pucuk.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Teh Pucuk Harum</h3>
                            <span class="place__subtitle">Rasa Teh Melati</span>
                            <span class="place__price">Rp 4.000 </span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place__card">
                    <img src="{{  asset('assetslp/img/minuman/Nii.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Nii</h3>
                            <span class="place__subtitle">Rasa Milk Tea</span>
                            <span class="place__price">Rp 9.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div class="place__card">
                    <img src="{{  asset('assetslp/img/minuman/fruit.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Fruit Tea</h3>
                            <span class="place__subtitle">Rasa Blackcurrant</span>
                            <span class="place__price">Rp 5.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div class="place__card">
                    <img src="{{  asset('assetslp/img/minuman/ultra.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Ultra Milk</h3>
                            <span class="place__subtitle">Rasa Taro</span>
                            <span class="place__price">Rp 8.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>
        </section>

        {{-- Ini Pilih Makanan --}}

        <section class="place section" id="place">
            <h2 class="section__title">Select Food</h2>

            <div class="place__container container grid">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card">
                    <img src="{{  asset('assetslp/img/makanan/Sponge.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Sponge</h3>
                            <span class="place__subtitle">Rasa Cokla</span>
                            <span class="place__price">Rp 15.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button" id="tombolku">
                        <i class="ri-arrow-right-line"></i>
                    </button>

                </div>

                <div class="place__card">
                    <img src="{{  asset('assetslp/img/makanan/Aoka.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">AOKA</h3>
                            <span class="place__subtitle">Roti rasa coklat</span>
                            <span class="place__price">Rp 3.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place__card">
                    <img src="{{  asset('assetslp/img/makanan/tanggo.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Tanggo</h3>
                            <span class="place__subtitle">Rasa Coklat</span>
                            <span class="place__price">Rp 5.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div class="place__card">
                    <img src="{{  asset('assetslp/img/makanan/Lays.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Lays</h3>
                            <span class="place__subtitle">Rasa Madu Mentega</span>
                            <span class="place__price">Rp 3.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div class="place__card">
                    <img src="{{  asset('assetslp/img/makanan/Ahh.png') }}" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Ahh</h3>
                            <span class="place__subtitle">Rasa Keju</span>
                            <span class="place__price">Rp 3.000</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>

        </section>


        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">More Information <br> About SMK Taruna Bhakti</h2>
                    {{-- <p class="about__description">You can find the most beautiful and pleasant places at the best
                            prices with special discounts, you choose the place we will guide you all the way to wait, get your
                            place now.
                        </p> --}}
                    <a href="#" class="button">More Infomation </a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="{{  asset('assetslp/img/about1.jpg') }}" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="{{  asset('assetslp/img/about2.jpg') }}" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== DISCOVER ====================-->
        {{-- <section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>

                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="{{  asset('assetslp/img/discover1.jpg') }}" alt="" class="discover__img">
        <div class="discover__data">
            <h2 class="discover__title">Bali</h2>
            <span class="discover__description">24 tours available</span>
        </div>
        </div>

        <!--==================== DISCOVER 2 ====================-->
        <div class="discover__card swiper-slide">
            <img src="{{  asset('assetslp/img/discover2.jpg') }}" alt="" class="discover__img">
            <div class="discover__data">
                <h2 class="discover__title">Hawaii</h2>
                <span class="discover__description">15 tours available</span>
            </div>
        </div>

        <!--==================== DISCOVER 3 ====================-->
        <div class="discover__card swiper-slide">
            <img src="{{  asset('assetslp/img/discover3.jpg') }}" alt="" class="discover__img">
            <div class="discover__data">
                <h2 class="discover__title">Hvar</h2>
                <span class="discover__description">18 tours available</span>
            </div>
        </div>

        <!--==================== DISCOVER 4 ====================-->
        <div class="discover__card swiper-slide">
            <img src="{{  asset('assetslp/img/discover4.jpg') }}" alt="" class="discover__img">
            <div class="discover__data">
                <h2 class="discover__title">Whitehaven</h2>
                <span class="discover__description">32 tours available</span>
            </div>
        </div>
        </div>
        </div>
        </section> --}}

        <!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

            <div class="experience__container container grid">
                {{-- <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Complete <br> tours</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">650+</h2>
                            <span class="experience__description">Tourist <br> Destination</span>
                        </div>
                    </div> --}}

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="{{  asset('assetslp/img/experience1.jpg') }}" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="{{  asset('assetslp/img/experience2.jpg') }}" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VIDEO ====================-->
        <section class="video section">
            <h2 class="section__title">Video Tour</h2>

            <div class="video__container container">
                <p class="video__description">Find out more with our videos about places and fun for you.
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="{{  asset('assetslp/video/video.mp4') }}" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        {{-- <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a
                            special 30% discount.
                        </p>

                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">

                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section> --}}

        <!--==================== SPONSORS ====================-->
        <section class="sponsor section">
            <div class="sponsor__container container grid">
                <div class="sponsor__content">
                    <img src="{{  asset('assetslp/img/sponsors1.png') }}" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="{{  asset('assetslp/img/sponsors2.png') }}" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="{{  asset('assetslp/img/sponsors3.png') }}" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="{{  asset('assetslp/img/sponsors4.png') }}" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="{{  asset('assetslp/img/sponsors5.png') }}" alt="" class="sponsor__img">
                </div>
            </div>
        </section>
    </main>

    <div id="myModal" class="penghalang">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <span id="tutup">&times;</span>
                    <div class="modal-image-cont">
                        <div class="modal-image"></div>
                        <div class="modal-images">
                            <div class="modal-image-prev"></div>
                            <div class="modal-image-prev"></div>
                            <div class="modal-image-prev"></div>
                        </div>
                    </div>
                    <div class="info">
                        <p class="info-title">Nama Produk</p>
                        <p class="info-desc">Minuman keras rasa paling enak di taruna bhakti</p>
                        <div class="info-addons">
                            <p class="info-price">Rp.10.000</p>
                            <div class="amount-btn">
                                <button onclick="min()" id="minbtn" class="amo-btn">-</button>
                                <input id="amount" class="amount" type="num" value="1">
                                <button onclick="plus()" class="amo-btn">+</button>
                            </div>
                        </div>
                        <button class="add-btn">add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Starbhak</h3>
                    <p class="footer__description">SMK Taruna Bhakti <br> adalah salah satu SMK di Kota Depok <br>
                        dengan status Terakreditasi “ A “
                    </p>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">About</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">New & Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Company</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Plan y Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Become a member</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Support Center</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2021 SMK Taruna Bhakti. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>



    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="{{  asset('assetslp/js/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{  asset('assetslp/js/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{  asset('assetslp/js/main.js') }}"></script>

</body>
<script>
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("tombolku");
    var span = document.getElementById("tutup");

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    }

    var amount = document.getElementById("amount")
    var minbtn = document.getElementById("minbtn")

    function min() {
        amount.value -= 1
    }

    function plus() {
        amount.value++
    }
</script>

</html>
