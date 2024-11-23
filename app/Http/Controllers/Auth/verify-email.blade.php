<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
</head>
<body>
    <h1>Verifikasi Email Anda</h1>
    <p>
        Terima kasih telah mendaftar! Sebelum melanjutkan, pastikan untuk memverifikasi email Anda dengan
        mengklik tautan yang baru saja kami kirimkan. Jika Anda tidak menerima email tersebut,
        klik tombol di bawah untuk meminta ulang tautan verifikasi.
    </p>

    @if (session('status') == 'verification-link-sent')
        <p>Link verifikasi baru telah dikirim ke alamat email Anda.</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Kirim Ulang Link Verifikasi</button>
    </form>
</body>
</html>
