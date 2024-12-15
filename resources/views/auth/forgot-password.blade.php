<x-guest-layout>
    <x-slot name="title">Forgot Password</x-slot>

    <!-- Menampilkan Pesan Sukses jika Ada -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group mt-4">
            <!-- Tombol dengan warna oranye dan teks hitam -->
            <button style="background-color: orange; color: black; border: none; padding: 10px 20px; border-radius: 5px;" type="submit">
                Kirim Link Reset Password
            </button>
        </div>

        <p class="login-text mt-3">
            <a href="{{ route('login') }}">Kembali ke halaman login</a>
        </p>
    </form>
</x-guest-layout>
