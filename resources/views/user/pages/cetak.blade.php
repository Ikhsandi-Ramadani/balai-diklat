<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <img src="{{ public_path() . '/data-peserta/' . $peserta->nama . '/' . $peserta->peserta_detail->foto }}" width="150"
            height="150" alt="">
        <h3 class="bottom">{{ $peserta->nama }}</h3>
        <h4>{{ $peserta->email }}</h4>
        {{-- <img src="2.jpg" width="100" height="100" alt=""> --}}
    </center>
</body>

</html>
