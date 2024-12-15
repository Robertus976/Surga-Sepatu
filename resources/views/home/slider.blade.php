<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Styling untuk slider/banner */
        .slider_section {
            background-color: #f5f5f5;
            padding: 30px 0;
        }

        .slider_container {
            position: relative;
        }

        .carousel-inner {
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
        }

        .carousel-item {
            display: none;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 400px;  /* Menetapkan tinggi minimum */
        }

        .carousel-item.active {
            display: flex;  /* Menampilkan hanya item yang aktif */
        }

        .carousel-item .detail-box {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            color: #fff;
        }

        .detail-box h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .detail-box p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .detail-box .btn {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            width: 250px;
            margin-top: 20px;
        }

        .img-box img {
            border-radius: 5px;
            width: 100%;
            height: auto;
            object-fit: cover;  /* Agar gambar tidak terdistorsi */
        }

        /* Styling untuk tombol next dan previous */
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%; /* Vertically center the buttons */
            transform: translateY(-50%); /* Adjust the position to truly center */
            background-color: transparent;
            border: none;
            font-size: 30px;
            color: #333;
            z-index: 10;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        /* Styling untuk memastikan tampilan responsif */
        @media (max-width: 768px) {
            .carousel-item {
                flex-direction: column;
                justify-content: center;
            }

            .carousel-item .img-box img {
                order: 1;
                max-width: 100%;
                object-fit: cover;  /* Agar gambar tetap proporsional di layar kecil */
            }

            .carousel-item .detail-box {
                order: 2;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Carousel -->
    <section class="slider_section">
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($banners as $key => $banner)
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($banners as $key => $banner)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Left Side (Text: Title & Description) -->
                                    <div class="col-md-6 d-flex flex-column justify-content-center">
                                        <div class="detail-box">
                                            <h1>{{ $banner->title }}</h1>
                                            <p>{{ $banner->description }}</p>
                                            <a href="all-products" class="btn">Cek di Produk</a>
                                        </div>
                                    </div>

                                    <!-- Right Side (Image) -->
                                    <div class="col-md-5">
                                        <div class="img-box">
                                            <img src="{{ asset('banners/' . $banner->image) }}" alt="{{ $banner->title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
