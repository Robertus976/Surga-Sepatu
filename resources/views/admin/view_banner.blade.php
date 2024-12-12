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


                <form action="{{url('search_banner')}}" method="get">
                    @csrf
                    <input type="search" name="search" placeholder="Cari Banner">
                    <input type="submit" class="btn btn-secondary" value="Cari">
                </form>

                <div class="div_deg">

                    <table class="tabel_deg">

                        <tr>
                            <th>Judul Banner</th>
                            <th>Deskripsi</th>
                            <th>Gambar Banner</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>

                        @foreach($banners as $banner)
                        <tr>
                            <td>{{$banner->title}}</td>
                            <td>{{$banner->description}}</td>
                            <td>
                                <img height="200" width="200" src="banners/{{$banner->image}}" alt="Banner Image">
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{url('update_banner', $banner->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_banner', $banner->id)}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>

                </div>
                <div class="div_deg">
                    {{$banners->onEachSide(1)->links()}}
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    @include('admin.js')

</body>

</html>
