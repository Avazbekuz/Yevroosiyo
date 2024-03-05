<!DOCTYPE html>
<html lang="en">
<head>
    <title>YevroOsiyo</title>
    <link rel="icon" type="image/x-icon" href="storage/img/IMG_6171.PNG">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="@yield('path')styles/bootstrap4/bootstrap.min.css">
    <link href="@yield('path')plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="@yield('path')plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="@yield('path')plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="@yield('path')plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" @yield('link')>
    <link rel="stylesheet" @yield('link2')>
</head>

<body>
<div class="super_container">
    <!-- Header -->
    <header class="header trans_300">

        <div class="main_nav_container">
            <div class="container">
                <div class="row justfiy-content-centr">
                    <div class="col-lg-12" style="text-align: center;">
                        <div class="logo">
                            <a href="/"><img src="storage/img/IMG_6171.PNG" alt="rasm" class="rasm"></a>
                            <br>
                            <a href="/">YevroOsiyo<span>Mebel</span></a>
                        </div>
{{--                        <nav class="navbar">--}}
{{--                            <ul class="navbar_menu">--}}
{{--                                <li><a href="#">Biz haqimizda</a></li>--}}
{{--                            </ul>--}}
{{--                            <div class="hamburger_container">--}}
{{--                                <i class="fa fa-bars" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </nav>--}}
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times cl" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">
                <li class="menu_item"><a href="#">Biz haqimizda</a></li>
            </ul>
        </div>
    </div>
    @yield('main')

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row d-flex justify-content-center ">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>YETKAZIB BERISH Xizmati</h6>
                            <p>Farg'ona va Marg'ilon shaharlar ichida mutloqo bepul</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Ish vaqtlari</h6>
                            <p>8:30 dan 19:00 gacha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Raqamingizni qo'ldiring</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="post" action="{{route('massage.store')}}">
                        @method("POST")
                        @csrf
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="tel" placeholder="Telefon raqam" required="required"
                                   data-error="Valid email is required." pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" name="phone">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                    value="Submit">jo'natish
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1091.2860820409896!2d71.71481364616919!3d40.44103015424278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1704879657139!5m2!1sru!2s" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <div class="phone">
                            <p class="phone">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                                    <path
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                </svg>
                                +998-93-971-55-33
                            </p>
                            <p class="phone">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                                    <path
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                </svg>
                                +998-91-107-55-33
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                        <ul>
                            <li><a href="https://instagram.com/yevroosiyo.margilan?utm_source=qr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </a></li>
                            <li><a href="https://t.me/YEVROOSIYOMEBEL">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav_container">
                        <div class="cr">©2023 Barcha huquqlar himoyalangan. <a href="#">Rtm</a> tomonidan ishlab
                            chiqarilgan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
<script src="@yield('path')main/jquery-3.2.1.min.js"></script>
<script src="@yield('path')styles/bootstrap4/popper.js"></script>
<script src="@yield('path')styles/bootstrap4/bootstrap.min.js"></script>
<script src="@yield('path')plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="@yield('path')plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="@yield('path')plugins/easing/easing.js"></script>
<script src="@yield('path')main/custom.js"></script>
<script src="@yield('path')main/show.js"></script>
</html>

