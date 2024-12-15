<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('admincss/img/logo.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Surga Sepatu</h1>
                <p>Toko Sepatu Jogja</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">

            <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
            <li>
                <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Kategori </a>
            </li>
            <li><a href="#productDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Produk </a>
                <ul id="productDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Tambah Produk</a></li>
                    <li><a href="{{url('view_product')}}">View Produk</a></li>
                    <li><a href="#">Page</a></li>
                </ul>

            <li>
                <a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Order </a>
            </li>
            <!-- Menambahkan Menu Banner -->
            <li><a href="#bannerDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa-image"></i>Banner </a>
                <ul id="bannerDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ route('add_banner') }}">Tambah Banner</a></li>
                    <li><a href="{{ route('view_banner') }}">View Banner</a></li>
                </ul>
            </li>
        </ul>
    </nav>
