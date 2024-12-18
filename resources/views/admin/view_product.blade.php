<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
        }

        .tabel_deg {
            border: 5px solid blanchedalmond;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        input[type='search'] {
            width: 500px;
            height: 60px;
            margin-left: 50px;

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


                <form action="{{url('cari_product')}}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="Cari">

                </form>


                <div class="div_deg">

                    <table class="tabel_deg">

                        <tr>
                            <th>Nama Produk</th>

                            <th>Deskripsi</th>

                            <th>Kategori</th>

                            <th>Harga</th>

                            <th>Quantity</th>

                            <th>Gambar Produk</th>

                            <th>Edit</th>

                            <th>Hapus</th>



                        </tr>

                        @foreach($product as $products)

                        <tr>
                            <td>{{$products->title}}</td>

                            <td>{{$products->description}}</td>

                            <td>{{$products->category}}</td>

                            <td>{{$products->price}}</td>

                            <td>{{$products->quantity}}</td>

                            <td>

                                <img height="200" width="200" src="{{ asset('products/' . $products->image) }}">


                            </td>

                            <td>
                                <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                            </td>

                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('hapus_product',$products->id)}}">Hapus</a>
                            </td>



                        </tr>

                        @endforeach




                    </table>






                </div>
                <div class="div_deg">
                    {{$product->onEachSide(1)->links()}}
                </div>


            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js')

</body>

</html>
