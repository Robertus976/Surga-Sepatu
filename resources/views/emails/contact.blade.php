<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari {{ $data['name'] }}</title>
</head>
<body>
    <h2>Pesan Baru dari {{ $data['name'] }}</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Pesan:</strong> {{ $data['message'] }}</p>
</body>
</html>
