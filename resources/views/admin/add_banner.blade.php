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

        input[type='text'] {
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
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Tambah Banner</h1>

                <div class="div_deg">

                    <form action="{{url('upload_banner')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input_deg">
                            <label>Judul Banner</label>
                            <input type="text" name="title" required>
                        </div>

                        <div class="input_deg">
                            <label>Deskripsi</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Gambar Banner</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Tambah Banner">
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
