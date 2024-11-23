<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Surga Sepatu</title>
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

        .login-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-color: white;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 1.5rem;
        }

        .login-title {
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

        .btn-login {
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.8rem;
            width: 100%;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .btn-login:hover {
            background-color: #CC0000;
            color: white;
        }

        .forgot-password {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 1rem;
            text-decoration: none;
        }

        .signup-text {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .signup-text a {
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

            .login-box {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="image-section"></div>
        <div class="login-section">
            <div class="login-box">
                <div class="text-center">
                    <img src="{{ asset('image/logo.jpg')}}" alt="Surga Sepatu Logo" class="logo">
                </div>
                <h1 class="login-title">Login</h1>

                <!-- Menampilkan pesan sukses -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

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

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-login">Login</button>
                    <a href="{{ route('password.request') }}" class="forgot-password d-block">Forgot Password?</a>
                    <p class="signup-text">
                        Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
