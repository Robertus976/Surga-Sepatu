<!-- resources/views/home/recent_product.blade.php -->
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                <span class="highlight-text">Produk</span> Terkini
            </h2>
        </div>
            <!-- Link "Lihat Semua Produk" -->
            <div class="see-all-products">
                <a href="{{ url('/all-products') }}" class="btn btn-primary">Lihat Semua Produk</a>
            </div>
        </div>

        <!-- Product Cards -->
        <div class="row">
            @foreach ($Recent_Products as $product)
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
                                Harga
                            <span class="product-price">
                                <span class="currency">Rp.</span>{{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            </h6>
                        </div>
                        <!-- Detail Button -->
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

<style>
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

        /* Mengatur kolom produk agar responsif */
        .col-md-4, .col-lg-3 {
            flex: 1 0 21%;
            max-width: 25%;
        }

        /* Mengatur gambar agar tetap memiliki ukuran konsisten dan berjejer dalam baris */
        .box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Memberikan gaya pada kotak produk */
        .box {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Menambahkan efek hover pada kotak produk */
        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
        }

        .detail-box h6 {
            font-size: 14px;
            color: #333;
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

