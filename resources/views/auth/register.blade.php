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
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name"
                placeholder="Masukan Nama" value="{{ old('name') }}" required>
        </div>

        <!-- Input untuk Email -->
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Masukan Email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No Hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp"
                placeholder="Masukan No HP" value="{{ old('no_hp') }}" required>
        </div>

        <!-- Input untuk Alamat -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
                placeholder="Masukan Alamat" value="{{ old('alamat') }}" required>
        </div>

        <!-- Input untuk Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Masukan Sandi" required>
        </div>

        <!-- Input untuk Konfirmasi Password -->
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Tulis Ulang Sandi" required>
        </div>

        <!-- Tombol Register -->
        <button type="submit" class="btn btn-register">Register</button>

        <!-- Link untuk Login -->
        <p class="login-text">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </form>
</x-guest-layout>
