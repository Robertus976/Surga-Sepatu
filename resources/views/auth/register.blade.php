<x-guest-layout>
    <x-slot name="title">Register</x-slot>

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
        <!-- Input untuk Name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                placeholder="Enter your name" value="{{ old('name') }}" required>
        </div>

        <!-- Input untuk Email -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Enter your email" value="{{ old('email') }}" required>
        </div>

        <!-- Input untuk Alamat -->
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address"
                placeholder="Enter your address" value="{{ old('address') }}" required>
        </div>

        <!-- Input untuk Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Enter your password" required>
        </div>

        <!-- Input untuk Konfirmasi Password -->
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Confirm your password" required>
        </div>

        <!-- Tombol Register -->
        <button type="submit" class="btn btn-register">Register</button>

        <!-- Link untuk Login -->
        <p class="login-text">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </form>
</x-guest-layout>
