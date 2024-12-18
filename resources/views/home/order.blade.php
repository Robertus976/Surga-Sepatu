<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Orders</title>

    @include('home.css')

    <style type="text/css">
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid skyblue;
            background-color: black;
            color: white;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }

        td {
            border: 1px solid skyblue;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        @include('home.header')
        <!-- Header section ends -->

        <div class="div_center">
            <table>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Status Pengiriman</th>
                    <th>Gambar</th>
                </tr>

                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->product->title }}</td>
                        <td>{{ $order->product->price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <img height="200" width="300" src="products/{{ $order->product->image }}" alt="{{ $order->product->title }}">
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- Info section -->
    <footer>
        @include('home.footer')
    </footer>
</body>

</html>
