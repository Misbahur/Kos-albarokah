<!DOCTYPE html>
<html>
<head>
    <title>Kos Albarokah</title>
</head>
<body>
    <h1>{{ $mailData['nama'] }}</h1>
    <p>{{ $mailData['jatuh_tempo'] }}</p>
  
    <p>Hallo {{ $mailData['nama'] }}, 3 Hari lagi jatuh tempo sewa kos waktunya untuk perpanjang kos.</p>
     
    <p>Thank you</p>
</body>
</html>