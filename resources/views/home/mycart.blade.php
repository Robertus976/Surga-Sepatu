<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <!-- Include CSS -->
    @include('home.css')

    <style>
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 40px auto;
            width: 90%;
            gap: 20px;
        }

        .form-container {
            flex: 1;
            max-width: 30%;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .table-container {
            flex: 2;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #fdffff;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #528486;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0 12px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
            width: 100%;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }

        .total-value {
            text-align: center;
            margin-top: 20px;
        }

        .payment-buttons {
            display: flex;
            gap: 10px;
            /* Jarak antar tombol */
            justify-content: space-between;
            /* Untuk memastikan tombol terpisah dengan jarak yang rata */
        }

        .payment-buttons .btn {
            padding: 5px 10px;
            /* Ukuran padding tombol lebih kecil */
            font-size: 14px;
            /* Ukuran teks tombol lebih kecil */
            width: auto;
            /* Pastikan tombol tidak memanjang */
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        @include('home.header')
        <!-- Header section ends -->
    </div>

    <div class="content-wrapper">
        <!-- Formulir Pemesanan -->
        <div class="form-container">
            <form method="POST" action="{{ url('confirm_order') }}">
                @csrf
                <div>
                    <label for="name">Nama Penerima</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div>
                    <label for="address">Alamat</label>
                    <textarea name="address">{{Auth::user()->address}}</textarea>
                </div>
                <div>
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="payment-buttons">
                    <!-- Tombol COD (Cash On Delivery) -->
                    <input class="btn btn-primary" type="submit" value="Cash On Delivery">

                    <!-- Tombol Bayar Dengan Transfer -->
                    <a class="btn btn-success" id="pay-button">Bayar Dengan Transfer</a>
                </div>

            </form>
        </div>

        <!-- Tabel Keranjang -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Judul Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $totalValue = 0; // Inisialisasi nilai total
                    @endphp

                    @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->Product->title ?? 'Tidak Tersedia' }}</td>
                        <td>
                            @php
                            // Menghapus titik pemisah ribuan dan memeriksa apakah harga valid
                            $price = str_replace('.', '', $item->Product->price);
                            @endphp
                            Rp.{{ is_numeric($price) ? number_format($price, 0, ',', '.') : 'Harga Tidak Tersedia' }}
                        </td>
                        <td>
                            @if (!empty($item->Product->image))
                            <img src="{{ asset('produks/' . $item->Product->image) }}" alt="Gambar Produk">
                            @else
                            Tidak Ada Gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('delete.cart', $item->product_id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @php
                    // Menghapus pemisah ribuan jika harga menggunakan titik
                    $price = str_replace('.', '', $item->Product->price);

                    // Pastikan harga valid dan tambahkan ke total
                    $totalValue += is_numeric($price) ? $price : 0;
                    @endphp
                    @endforeach
                </tbody>
            </table>

            <!-- Total Value -->
            <div class="total-value">
                <h3>Total harga keranjang: Rp{{ number_format($totalValue, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('home.footer')
</body>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function() {
        snap.pay("{{ $snapToken }}", {
            onSuccess: function(result) {
                console.log(result);
                window.location.href = '/payment/success';
            }
        });
    };
</script>

</html>