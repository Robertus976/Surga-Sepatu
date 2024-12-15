<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Surga Sepatu' }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: white;
        }

        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: row;
        }

        .image-section {
            flex: 1;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset('image/gambar1.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .register-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-color: white;
        }

        .register-box {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 1.5rem;
        }

        .register-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-group label {
            color: #666;
            font-size: 14px;
        }

        .form-control {
            border-radius: 8px;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
        }

        .btn-register {
            background-color: #FF4500; /* Oren terang */
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.8rem;
            width: 100%;
            font-weight: 500;
            margin-bottom: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-register:hover {
            background-color: #e04e00; /* Oren lebih gelap */
            color: white;
        }

        .login-text {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .login-text a {
            color: #FF4500;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .image-section {
                height: 30vh;
            }

            .register-box {
                padding: 1rem;
            }
        }

        /* Footer Styles */
        .footer {
            background-color: #f8f9fa;
            color: #333;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .footer a {
            color: #FF4500;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer .social-links a {
            margin: 0 10px;
            color: #333;
        }

        .footer .social-links a:hover {
            color: #FF4500;
        }

        .footer-text {
            font-size: 14px;
            color: #666;
        }

        .footer-text a {
            color: #FF4500;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="image-section"></div>
        <div class="register-section">
            <div class="register-box">
                <div class="text-center">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Surga Sepatu Logo" class="logo">
                </div>
                <h1 class="register-title">{{ $title ?? 'Surga Sepatu' }}</h1>
                {{ $slot }}
            </div>
        </div>
    </div>

