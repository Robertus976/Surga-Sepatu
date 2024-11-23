<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
</head>
<body>
    <h1>Verifikasi Email Anda</h1>
    <p>Terima kasih telah mendaftar! Sebelum melanjutkan, silakan verifikasi email Anda dengan mengklik tautan yang telah kami kirimkan. Jika Anda tidak menerima email, klik tombol di bawah untuk mengirim ulang.</p>

    @if (session('status') == 'verification-link-sent')
        <p>Link verifikasi baru telah dikirim ke email Anda.</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Kirim Ulang Link Verifikasi</button>
    </form>
</body>
</html>
