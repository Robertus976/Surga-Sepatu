<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Produk Terkini
            </h2>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <!-- Gambar Produk -->
                    <div class="img-box">
                        <img src="{{ asset('products/' . $product->image) }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            {{ $product->title }}
                        </h6>
                        <h6>
                            Price
                            <span>
                                ${{ $product->price }}
                            </span>
                        </h6>
                    </div>
                    <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}" style="padding: 7px;">Detail</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn-box">
                View All Products
        </div>
    </div>
</section>
