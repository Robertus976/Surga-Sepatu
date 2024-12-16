<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .detail-box{
            padding: 15px;
        }

        .shop_section {
            margin-bottom: 50px; /* Tambahkan margin bawah untuk memberikan ruang antara konten dan footer */
        }
        footer {
            width: 100%; /* Pastikan footer lebar penuh layar */
            background-color: #f8f9fa; /* Warna latar opsional untuk footer */
            padding: 20px 0; /* Tambahkan padding atas dan bawah pada footer */
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurgaSepatu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #fff;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 15px; /* Tambahkan jarak ke navbar */
        }

        .top-bar .logo-container {
            display: flex;
            align-items: center;
        }

        .top-bar .logo-container img {
            height: 60px; /* Perbesar ukuran logo */
            margin-right: 15px;
        }

        .top-bar .logo-container .logo-text {
            font-size: 24px; /* Perbesar ukuran font */
            font-weight: bold; /* Jadikan lebih tebal */
            color: #000; /* Warna hitam */
            letter-spacing: 2px; /* Tambahkan jarak antar huruf */
            text-transform: uppercase; /* Huruf kapital semua */
            font-family: 'Arial Black', Arial, sans-serif; /* Font lebih tegas */
            background: linear-gradient(45deg, #ff0000, #ffa500); /* Tambahkan gradasi warna */
    
            -webkit-text-fill-color: transparent; /* Efek teks berwarna */
        }

        .top-bar .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .top-bar .search-bar input[type="text"] {
            width: 300px; /* Perpanjang search bar */
            padding: 8px 12px; /* Tambahkan padding */
            font-size: 16px; /* Perbesar ukuran font */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .top-bar .search-bar button {
            padding: 8px 15px;
            background-color: #9e9999;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between; /* Align left and right sections */
            background-color: #575151;
            padding: 10px 20px; /* Remove unnecessary top and bottom padding */
            width: 100%;
            box-sizing: border-box; /* Make sure navbar fills full width */
        }

        .navbar a {
            text-decoration: none;
            color: #fbf8f8;
            font-size: 16px;
            padding-left: 10px; /* Add left padding to navbar links */
        }


        .navbar .left-links {
            display: flex;
            gap: 20px;
            flex-grow: 1; /* Makes the left links take up available space */
        }

        .navbar .right-links {
            display: flex;
            gap: 20px;
        }

        .user_option a {
            color: #000;
            text-decoration: none;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SurgaSepatu</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
            }

            .header {
                background-color: #fff;
                padding: 10px 20px;
                display: flex;
                flex-direction: column;
            }

            .top-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                margin-bottom: 15px; /* Tambahkan jarak ke navbar */
            }

            .top-bar .logo-container {
                display: flex;
                align-items: center;
            }

            .top-bar .logo-container img {
                height: 60px; /* Perbesar ukuran logo */
                margin-right: 15px;
            }

            .top-bar .logo-container .logo-text {
                font-size: 24px; /* Perbesar ukuran font */
                font-weight: bold; /* Jadikan lebih tebal */
                color: #000; /* Warna hitam */
                letter-spacing: 2px; /* Tambahkan jarak antar huruf */
                text-transform: uppercase; /* Huruf kapital semua */
                font-family: 'Arial Black', Arial, sans-serif; /* Font lebih tegas */
                background: linear-gradient(45deg, #ff0000, #ffa500); /* Tambahkan gradasi warna */

                -webkit-text-fill-color: transparent; /* Efek teks berwarna */
            }

            .top-bar .search-bar {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .top-bar .search-bar input[type="text"] {
                width: 300px; /* Perpanjang search bar */
                padding: 8px 12px; /* Tambahkan padding */
                font-size: 16px; /* Perbesar ukuran font */
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .top-bar .search-bar button {
                padding: 8px 15px;
                background-color: #9e9999;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                color: #fff;
                font-size: 16px;
            }

            /* Navbar styling */
            .navbar {
                display: flex;
                justify-content: space-between; /* Align left and right sections */
                background-color: #575151;
                padding: 4px 20px; /* Remove unnecessary top and bottom padding */
                width: 100%;
                box-sizing: border-box; /* Make sure navbar fills full width */
            }

            .navbar a {
                text-decoration: none;
                color: #fbf8f8;
                font-size: 16px;
                padding-left: 10px; /* Add left padding to navbar links */
            }


            .navbar .left-links {
                display: flex;
                gap: 20px;
                flex-grow: 1; /* Makes the left links take up available space */
            }

            .navbar .right-links {
                display: flex;
                gap: 20px;
            }

            .user_option a {
                color: #000;
                text-decoration: none;
                margin-left: 15px;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="top-bar">
                <div class="logo-container">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
                    <div class="logo-text">Surga Sepatu</div>
                </div>
                <div class="search-bar">
                <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Cari Produk" value="{{ request('query') }}">
                <button type="submit">Search</button>
            </form>
                </div>
            </div>
            <nav class="navbar">
                <div class="left-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('all.products') }}">Produk</a>
                    <a href="{{ route('why') }}">Kenapa Memilih Kami</a>
                    <a href="{{ route('contact') }}">Hubungi Kami</a>
                </div>
                <div class="right-links">
                    <div class="user_option">
                        @if (Route::has('login'))
                            @auth
                                <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                    @csrf
                                    <button class="btn btn-danger logout-button" type="submit">Logout</button>
                                </form>
                            @else
                                <a href="{{url('/login')}}"><i class="fa fa-user" aria-hidden="true"></i><span>Login</span></a>
                                <a href="{{url('/register')}}"><i class="fa fa-vcard" aria-hidden="true"></i><span>Register</span></a>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </header>
    </body>
    </html>
    </div>


    <!-- product details start -->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Detail Produk
                </h2>
            </div>
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <div class="box">
                        <!-- Gambar Produk -->
                        <div class="div_center">
                            <img width = "400" src="{{ asset('products/' . $data->image) }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $data->title }}
                            </h6>
                            <h6>
                                Harga
                                <span>
                                    Rp.{{ $data->price }}
                                </span>
                            </h6>
                        </div>
                        <div class="detail-box">
                            <h6>Jenis Kategori :
                                {{ $data->category }}
                            </h6>
                            <h6>
                                Produk yang Tersedia :
                                <span>
                                    {{ $data->quantity }}
                                </span>
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>Deskripsi :
                                {{ $data->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- info section -->
  <footer>
    @include('home.footer')
</footer>
</body>

</html>
