<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <style>
        /* Mengatur lebar kontainer */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Mengurangi jarak lebar di section hero */
        .hero_area {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Mengurangi jarak lebar pada section header dan footer */
        .header_section, .footer_section {
            padding: 10px 0;
        }

        /* Mengatur padding section lainnya */
        .slider_section, .contact_section {
            padding: 30px 15px;
        }

        /* Mengatur lebar kolom dalam row */
        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-lg-4, .col-md-6 {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->
        @include('home.slider')
        <!-- end slider section -->
        @include('home.recent_product')


    <!-- contact section -->
    @include('home.contact_home')
    <!-- end contact section -->
</div>
<!-- end hero area -->

    <!-- info section -->
    @include('home.footer')
</body>
</html>
