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

        .total-value {
            text-align: center;
            margin-top: 20px;
        }

        button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
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
            <form method="POST" action="{{ url('confirm_order') }}" id="order-form">
                @csrf
                <div>
                    <label for="name">Nama Penerima</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" id="name" required>
                </div>
                <div>
                    <label for="address">Alamat</label>
                    <textarea name="address" id="address" required>{{ Auth::user()->address }}</textarea>
                </div>
                <div>
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" value="{{ Auth::user()->phone }}" id="phone" required>
                </div>
                <input type="hidden" name="payment_method" id="payment_method">

                <!-- Tombol COD -->
                <button type="button" class="btn-primary" onclick="setPaymentMethod('cod')">Bayar Cash on Delivery</button>

                <!-- Tombol Midtrans -->
                <button type="button" class="btn-primary" id="pay-snap">Bayar Transfer</button>
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
                    @php $totalValue = 0; @endphp

                    @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->Product->title ?? 'Tidak Tersedia' }}</td>
                        <td>
                            @php
                            $price = str_replace('.', '', $item->Product->price);
                            @endphp
                            Rp.{{ is_numeric($price) ? number_format($price, 0, ',', '.') : 'Harga Tidak Tersedia' }}
                        </td>
                        <td>
                            @if (!empty($item->Product->image))
                            <img src="{{ asset('products/' . $item->Product->image) }}" alt="Gambar Produk">
                            @else
                            Tidak Ada Gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('delete.cart', $item->product_id) }}" class="btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @php
                    $totalValue += is_numeric($price) ? $price : 0;
                    @endphp
                    @endforeach
                </tbody>
            </table>

            <!-- Total Harga -->
            <div class="total-value">
                <h3>Total harga keranjang: Rp{{ number_format($totalValue, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('home.footer')

    <!-- Midtrans Snap -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Fungsi untuk pembayaran COD
            window.setPaymentMethod = function (method) {
                var name = document.getElementById("name").value;
                var address = document.getElementById("address").value;
                var phone = document.getElementById("phone").value;

                if (name === "" || address === "" || phone === "") {
                    alert("Pastikan semua kolom terisi sebelum melanjutkan!");
                    return false;
                }

                document.getElementById('payment_method').value = method;
                document.getElementById('order-form').submit();
            }

            // Fungsi untuk pembayaran Midtrans
            window.payWithMidtrans = function () {
                var name = document.getElementById("name").value;
                var address = document.getElementById("address").value;
                var phone = document.getElementById("phone").value;

                if (name === "" || address === "" || phone === "") {
                    alert("Pastikan semua kolom terisi sebelum melanjutkan!");
                    return false;
                }

                window.snap.pay("{{ $snapToken }}", {
                    onSuccess: function (result) {
                        console.log('Payment success:', result);
                        alert("Pembayaran berhasil!");
                        location.reload();
                    },
                    onPending: function (result) {
                        console.log('Payment pending:', result);
                        alert("Pembayaran tertunda. Silakan cek status pembayaran!");
                    },
                    onError: function (result) {
                        console.log('Payment error:', result);
                        alert("Pembayaran gagal. Silakan coba lagi!");
                    },
                    onClose: function () {
                        alert('Popup ditutup tanpa menyelesaikan pembayaran.');
                    }
                });
            }

            // Hubungkan fungsi ke tombol
            document.getElementById("pay-snap").onclick = payWithMidtrans;
        });
    </script>
</body>

</html>
