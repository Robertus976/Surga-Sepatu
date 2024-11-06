<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Kata Sandi - Surga Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-GLh1tQ8iRABdZL1603oVMWSktQOp6b7In1Z13/Jr59b6EGGoI1afkw7cmDA6j6g0"
          crossorigin="anonymous">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .form-container h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }
        .form-container p {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .form-container .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            text-align: center;
            display: block;
            margin-bottom: 5px;
        }
        .form-container .form-control {
            border-radius: 8px;
            font-size: 14px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .form-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px;
            font-weight: 500;
            transition: background-color 0.3s;
            width: 100%;
        }
        .form-container .btn-primary:hover {
            background-color: #b30024;
        }
        .alert {
            font-size: 14px;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif

        <h2>Lupa Kata Sandi Anda?</h2>
        <p>Silahkan masukkan email yang terdaftar untuk mereset kata sandi Anda.</p>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Minta Reset Kata Sandi</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-7gQnBSP2atwz5B8MdRGy6rC2SU6BOknQorxL0BD5wT7U64hnfvlWftoWj8N3Mb3w"
            crossorigin="anonymous"></script>
</body>
</html>
