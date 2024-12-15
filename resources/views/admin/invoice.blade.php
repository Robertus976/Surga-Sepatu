<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
    </head>
    <body>

        <center>

            <h3>Nama Kostumer: {{$data->name}}</h3>

            <h3>Nama Alamat: {{$data->rec_address}}</h3>

            <h3>Phone: {{$data->phone}}</h3>

            <h2>Judul Produk : {{$data->product->title}}</h2>

            <h2>Harga : {{$data->product->price}}</h2>

            <img height="250" width="300" src="products/{{$data->product->image}}">
        </center>

        


    </body>
</html>