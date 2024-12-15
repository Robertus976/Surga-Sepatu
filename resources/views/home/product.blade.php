<!-- resources/views/home/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    <!-- Header -->
    @include('home.header')
    </body>
    </html>
    </div>

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    <span class="highlight-text">Semua</span> Produk
                </h2>
            </div>
            <div class="row">
                @foreach ($Products as $product)
                <div class="col-md-4 col-lg-3 mb-4"> <!-- Menggunakan col-md-4 untuk 3 kolom di layar medium -->
                    <div class="box">
                        <!-- Product Image -->
                        <div class="div_center">
                            <img src="{{ asset('products/' . $product->image) }}" alt="Product Image">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $product->title }}
                            </h6>
                            <h6>
                                Harga
                                <span>
                                    Rp.{{ $product->price }}
                                </span>
                            </h6>
                        </div>
                        <!-- Button Detail - Disusun ke kiri -->
                        <div class="button-container">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}" style="padding: 7px;">Lihat Detail</a>
                            <a class="btn btn-primary" href="{{ url('add_cart', $product->id) }}">Tambah Keranjang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- info section -->
    <footer>
        @include('home.footer')
    </footer>

<style>
    /* Tambahkan padding di container untuk jarak ke kiri dan kanan */
    .container {
        padding-left: 20px;
        padding-right: 20px;
    }

    /* Styling judul "Semua Produk" */
    .heading_container h2 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        letter-spacing: 1px;
        margin-bottom: 30px;
        text-align: center;
    }

    .heading_container h2 .highlight-text {
        color: #ff5722;
        font-style: italic;
    }

    /* Menggunakan Flexbox untuk mengatur layout baris produk */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    /* Mengatur kolom produk agar responsif dan lebih besar */
    .col-md-4, .col-lg-3 {
        flex: 1 0 30%; /* Menurunkan persentase untuk membuat lebih besar */
        max-width: 30%; /* Ukuran kolom lebih besar */
    }

    /* Mengatur gambar agar tetap memiliki ukuran konsisten dan berjejer dalam baris */
    .box img {
        width: 100%;
        height: 250px; /* Meningkatkan tinggi gambar */
        object-fit: cover;
        border-radius: 8px;
    }

    /* Memberikan gaya pada kotak produk dengan ukuran lebih besar */
    .box {
        border: 1px solid #ddd;
        padding: 15px; /* Menambah padding untuk ruang lebih banyak di dalam kotak */
        background-color: #fff;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1); /* Menambah bayangan agar kotak lebih jelas */
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
        height: 450px; /* Meningkatkan tinggi kotak */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Menambahkan efek hover pada kotak produk */
    .box:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
    }

    /* Memberikan jarak antar nama produk dan harga */
    .detail-box h6 {
        font-size: 14px;
        color: #333;
        margin-bottom: 10px;
    }

    .detail-box h6 span {
        font-weight: bold;
        color: #ff5722;
    }

    /* Styling tombol Detail */
    .button-container {
    display: flex;
    justify-content: space-between; /* Memastikan tombol berada di kiri dan kanan */
    margin-top: 15px; /* Memberikan jarak lebih banyak antara tombol dan kotak */
    gap: 15px;
}

    .button-container .btn {
        padding: 8px 20px;
        font-size: 14px;
        background-color: #ff5722;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    /* Efek hover pada tombol */
    .button-container .btn:hover {
        background-color: #e64a19;
    }
</style>
