<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>

<body>
    <!-- Header -->
    @include('home.header')
    </body>
    </html>
    </div>
    <head>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tentang Kami - Surga Sepatu</title>
            <style>
                body {
                    font-family: 'Poppins', Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background: linear-gradient(to right, #f9f9f9, #e9ecef);
                    color: #333;
                }

                .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 30px;
                    background-color: #fff;
                    border-radius: 12px;
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                }

                h1 {
                    font-size: 36px;
                    color: #ff5722;
                    text-align: center;
                    margin-bottom: 30px;
                }

                section {
                    margin: 20px 0;
                }

                section h2 {
                    font-size: 28px;
                    color: #444;
                    margin-bottom: 15px;
                    border-bottom: 2px solid #ff5722;
                    display: inline-block;
                    padding-bottom: 5px;
                }

                section p {
                    font-size: 18px;
                    line-height: 1.8;
                    text-align: justify;
                    margin-bottom: 20px;
                }

                .features {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                    gap: 20px;
                }

                .feature-item {
                    background: #fff;
                    border: 1px solid #ddd;
                    border-radius: 12px;
                    padding: 20px;
                    text-align: center;
                    width: 270px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .feature-item:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
                }

                .feature-item img {
                    width: 120px;
                    height: 120px;
                    margin-bottom: 15px;
                    border-radius: 50%;
                    border: 2px solid #ff5722;
                    background-color: #f9f9f9;
                }

                .feature-item h3 {
                    font-size: 20px;
                    margin-bottom: 10px;
                    color: #333;
                }

                .feature-item p {
                    font-size: 16px;
                    color: #666;
                    line-height: 1.5;
                }

                footer {
                    text-align: center;
                    margin-top: 30px;
                    font-size: 16px;
                    color: #777;
                    padding: 15px;
                    background: #ff5722;
                    color: #fff;
                    border-radius: 12px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Tentang Kami</h1>
                <section>
                    <h2>Visi dan Misi</h2>
                    <p><strong>Visi:</strong> Menjadi toko sepatu online terpercaya yang menghadirkan kemudahan belanja sepatu berkualitas untuk semua kalangan.</p>
                    <p><strong>Misi:</strong> Memberikan pengalaman belanja yang nyaman, produk terbaik, dan pelayanan pelanggan yang luar biasa.</p>
                </section>
                <section>
                    <h2>Keunggulan Kami</h2>
                    <div class="features">
                        <div class="feature-item">
                            <img src="{{ asset('image/customer-service.jpg') }}" alt="Layanan Pelanggan">
                            <h3>Layanan Pelanggan</h3>
                            <p>Kami selalu siap membantu kebutuhan belanja Anda dengan layanan pelanggan yang responsif.</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('image/kualitas.jpg') }}" alt="Kualitas Terjamin">
                            <h3>Kualitas Terjamin</h3>
                            <p>Semua produk yang kami tawarkan dijamin original dan berkualitas terbaik.</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('image/ongkir.jpeg') }}" alt="Gratis Ongkir">
                            <h3>Gratis Ongkir dan Bisa COD</h3>
                            <p>Nikmati pengiriman gratis ke seluruh Indonesia dengan pembelian minimum tertentu dan berbagai cara pembayaran.</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('image/Pembayaran.jpeg') }}" alt="Pembayaran Aman">
                            <h3>Pembayaran Aman</h3>
                            <p>Metode pembayaran kami terjamin aman, mulai dari transfer bank hingga Cash On Delivery.</p>
                        </div>
                    </div>
                </section>
            </div>
            <footer>
                &copy; 2024 Surga Sepatu. Semua Hak Dilindungi.
            </footer>
        </body>
        </html>
