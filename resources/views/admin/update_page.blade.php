<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1 {
            color: white;
        }

        label {
            display: inline-block;
            width: 200px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type='text'], input[type='number'], select {
            width: 350px;
            height: 50px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
        }
    </style>
</head>

<body>

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Update Produk</h1>

                <div class="div_deg">
                    <form action="{{ url('update_product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label>Nama Produk</label>
                            <input type="text" name="title" value="{{ $product->title }}" required>
                        </div>

                        <div class="input_deg">
                            <label>Deskripsi</label>
                            <textarea name="description" required>{{ $product->description }}</textarea>
                        </div>

                        <div class="input_deg">
                            <label>Harga</label>
                            <input type="text" name="price" value="{{ $product->price }}">
                        </div>

                        <div class="input_deg">
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{ $product->quantity }}">
                        </div>

                        <div class="input_deg">
                            <label>Kategori Produk</label>
                            <select name="category" required>
                                <option>Pilih Opsi</option>
                                @foreach($category as $category)
                                    <option value="{{ $category->category_name }}"
                                    {{ $category->category_name == $product->category ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input_deg">
                            <label>Gambar Produk</label>
                            <img height="200" width="200" src="{{ asset('products/' . $product->image) }}" alt="Product Image">
                        </div>

                        <div class="input_deg">
                            <label>Gambar Baru</label>
                            <input type="file" name="image">
                        </div>

                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Update Produk">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>
