<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        table {
            border: 2px solid skyblue;
            text-align: center;
        }

        th {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
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

                <div class="table_center">
                    <table>
                        <tr>
                            <th>Nama Kostumer</th>
                            <th>Alamat</th>
                            <th>Phone</th>
                            <th>Judul Produk</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Ganti Status</th>
                            <th>Print PDF</th>
                        </tr>

                        @foreach($data as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->rec_address}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product->title}}</td>
                            <td>{{$order->product->price}}</td>
                            <td>
                                <img width="150" src="products/{{$order->product->image}}">
                            </td>

                            <td>
                                @if($order->status == 'Dalam Perjalanan')
                                    <span style="color: red;">{{$order->status}}</span>
                                @elseif($order->status == 'Terkirim')
                                    <span style="color: green;">{{$order->status}}</span>
                                @else
                                    <span style="color: yellow;">{{$order->status}}</span>
                                @endif
                            </td>

                            <td>
                                @if($order->status != 'Terkirim')
                                    <a class="btn btn-primary" href="{{url('dalam_perjalanan',$order->id)}}">Dalam Perjalanan</a>
                                    <a class="btn btn-success" href="{{url('terkirim',$order->id)}}">Terkirim</a>
                                @else
                                    <span>Sudah Terkirim</span>
                                @endif
                            </td>

                            <td>
                                <a class="btn btn-secondary" href="{{url('print_pdf',$order->id)}}">Print PDF</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
