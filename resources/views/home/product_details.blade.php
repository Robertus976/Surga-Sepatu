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
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
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
                            <img width = "400" src="{{ asset('/products/' . $data->image) }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $data->title }}
                            </h6>
                            <h6>
                                Harga
                                <span>
                                    ${{ $data->price }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- product details end -->

    <!-- info section -->
    <footer>
        @include('home.footer')
    </footer>
</body>

</html>
