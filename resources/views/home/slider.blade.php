<section class="slider_section">
    <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banners as $key => $banner)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Left Side (Text: Title & Description) -->
                                <div class="col-md-7 d-flex flex-column justify-content-center">
                                    <div class="detail-box">
                                        <h1>
                                            {{ $banner->title }}
                                        </h1>
                                        <p>
                                            {{ $banner->description }}
                                        </p>
                                        <!-- "Buy Now" Button -->
                                        <a href="#" class="btn btn-danger">Beli Sekarang</a>
                                    </div>
                                </div>

                                <!-- Right Side (Image) -->
                                <div class="col-md-5">
                                    <div class="img-box">
                                        <img src="{{ asset('banners/' . $banner->image) }}" class="d-block w-100" alt="{{ $banner->title }}" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
