<x-guest-layout>
    <x-slot name="title">Login</x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                required>
        </div>

        <button type="submit" class="btn btn-register btn-block">Login</button>

        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}" class="text-sm text-primary">
                Lupa Password?
            </a>
        </div>

        <p class="login-text mt-3 text-center">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </p>
    </form>
</x-guest-layout>
