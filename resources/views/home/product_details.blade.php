<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    @include('home.header')
</head>

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
