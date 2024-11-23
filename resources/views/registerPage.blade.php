<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Surga Sepatu</title>
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
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.8rem;
            width: 100%;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .btn-register:hover {
            background-color: #CC0000;
            color: white;
        }

        .login-text {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .login-text a {
            color: #FF0000;
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
                <h1 class="register-title">Register</h1>

                <!-- Menampilkan pesan kesalahan -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                    </div>
                    <button type="submit" class="btn btn-register">Register</button>
                    <p class="login-text">
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
