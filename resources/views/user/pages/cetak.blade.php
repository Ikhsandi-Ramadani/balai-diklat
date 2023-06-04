<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <img src="{{ public_path() . '/data-peserta/' . $peserta->peserta->nama . '/' . $peserta->foto }}" width="150"
            height="150" alt="">
        <h3 class="bottom">{{ $peserta->peserta->nama }}</h3>
        <h4>{{ $peserta->peserta->email }}</h4>
        <img
            src="data:image/png;base64, {{ base64_encode(
                QrCode::format('png')->size(150)->generate($data),
            ) }} ">
    </center>
</body>

</html>
