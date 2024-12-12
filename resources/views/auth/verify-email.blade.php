<x-guest-layout>
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">
            {{ __('Verifikasi Email Anda') }}
        </h1>
        <p class="mb-4 text-sm text-gray-600">
            {{ __('Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi email Anda dengan mengklik tautan yang telah kami kirimkan. Jika Anda tidak menerima email, kami dapat mengirimkan ulang.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
                {{ __('Tautan verifikasi baru telah dikirim ke email Anda.') }}
            </div>
        @endif

        <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <!-- Tombol Resend Email -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn-register">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            <!-- Tombol Log Out -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-register">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
