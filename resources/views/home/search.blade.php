<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag Dasar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hasil Pencarian</title>

    <!-- Link CSS -->
    @include('home.css')
</head>

<body>
    <!-- Header -->
    @include('home.header')

    <!-- Konten -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Hasil Pencarian: "{{ $query }}"</h1>

        @if ($products->isEmpty())
            <p class="text-center">Tidak ada produk yang ditemukan dengan nama "{{ $query }}"</p>
        @else
            <div class="row">
                 @foreach ($products as $product)
                <div class="col-md-4 col-lg-3 mb-4"> <!-- Membagi kolom menjadi 4 produk per baris -->
                    <div class="box">
                        <!-- Product Image -->
                        <div class="div_center">
                            <img src="{{ asset('products/' . $product->image) }}" alt="Product Image">
                        </div>
                        <!-- Product Details -->
                        <div class="detail-box">
                            <h6>
                                {{ $product->title }}
                            </h6>
                            <h6>
                                Harga:
                                <span>
                                    Rp.{{ $product->price }}
                                </span>
                            </h6>
                        </div>
                        <!-- Detail Button -->
                        <div class="button-container">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </div>

    @include('home.footer')

</body>

</html>
<style>
    /* Styling untuk container */
    .container {
        padding-left: 20px;
        padding-right: 20px;
    }

    /* Styling judul hasil pencarian */
    .heading_container h2 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        letter-spacing: 1px;
        margin-bottom: 30px;
        text-align: center;
    }

    /* Highlight teks pada judul */
    .heading_container h2 .highlight-text {
        color: #ff5722;
        font-style: italic;
    }

    /* Flexbox untuk produk */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    /* Responsif kolom produk */
    .col-md-4,
    .col-lg-3 {
        flex: 1 0 21%;
        max-width: 25%;
    }

    /* Styling gambar produk */
    .box img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    /* Efek hover pada gambar */
    .box img:hover {
        transform: scale(1.05);
    }

    /* Styling kotak produk */
    .box {
        border: 1px solid #ddd;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        height: 380px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Efek hover pada kotak produk */
    .box:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    }

    /* Styling detail produk */
    .detail-box h6 {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .detail-box h6 span {
        font-weight: bold;
        color: #ff5722;
    }

    /* Styling tombol detail */
    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .button-container .btn {
        padding: 10px 25px;
        font-size: 14px;
        font-weight: bold;
        background-color: #ff5722;
        color: #fff;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Efek hover pada tombol */
    .button-container .btn:hover {
        background-color: #e64a19;
        transform: scale(1.05);
    }

    /* Responsif untuk perangkat kecil */
    @media (max-width: 768px) {
        .col-md-4,
        .col-lg-3 {
            flex: 1 0 45%;
            max-width: 45%;
        }
    }

    @media (max-width: 576px) {
        .col-md-4,
        .col-lg-3 {
            flex: 1 0 100%;
            max-width: 100%;
        }
    }
</style>
