<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DipSit | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/css/style.css">

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
    @include('partials.navbar')
    {{-- end of navbar --}}

    {{-- Content section --}}
    @yield('content')
    {{-- End of content section --}}

    {{-- Footer Section --}}
    @include('partials.footer')
    {{-- End of Footer Section --}}

    <script src="js/main.js"></script>
    {{-- SwiperJS CDN --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    {{-- IonIcons --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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