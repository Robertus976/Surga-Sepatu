<!DOCTYPE html>
<html lang="id">

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
            margin-bottom: 15px;
        }

        /* Container untuk logo dan teks */
        .top-bar .logo-container {
            display: flex;
            align-items: center; /* Menyusun logo dan teks secara horizontal */
        }

        .top-bar .logo-container img {
            height: 60px;
            margin-right: 15px; /* Memberikan jarak antara logo dan teks */
        }

        .top-bar .logo-container .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-family: 'Arial Black', Arial, sans-serif;
            background: linear-gradient(45deg, #ff0000, #ffa500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .top-bar .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .top-bar .search-bar input[type="text"] {
            width: 300px;
            padding: 8px 12px;
            font-size: 16px;
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
            justify-content: space-between;
            background-color: #575151;
            padding: 4px 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .navbar a {
            text-decoration: none;
            color: #fbf8f8;
            font-size: 16px;
            padding-left: 10px;
        }

        .navbar .left-links {
            display: flex;
            gap: 20px;
            flex-grow: 1;
        }

        .navbar .right-links {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-right: 20px;
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
                <img src="image/logo.jpg" alt="Logo">
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
                <a href="{{ route('why') }}">Tentang Kami</a>
                <a href="{{ route('contact') }}">Hubungi Kami</a>
            </div>
            <div class="right-links">
                <div class="user_option">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url ('myorders') }}">Pesananku</a>
                            <a href="{{ url ('mycart') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> [{{$count ?? 0}}]</a>
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
