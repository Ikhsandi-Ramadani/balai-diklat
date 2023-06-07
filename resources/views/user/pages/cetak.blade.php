<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <img src="{{ public_path() . '/data-peserta/' . $peserta->peserta->nama . '/' . $peserta->foto }}" width="150"
            height="150" alt="">
        <table style="margin-top: 20px;margin-bottom:15px">
            <tr>
                <td style="width: 30%">Nama </td>
                <td>: {{ $peserta->peserta->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Asal </td>
                <td>: {{ $peserta->asal }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Pelatihan </td>
                <td>: {{ $peserta->pelatihan->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%">No. Kamar</td>
                <td>: {{ $kamar }}</td>
            </tr>
            <tr>
                <td style="width: 30%">No. Kursi </td>
                <td>: {{ $kursi }}</td>
            </tr>
        </table>
        {{-- <h3 class="bottom">{{ $peserta->peserta->nama }}</h3>
        <h4>{{ $peserta->peserta->email }}</h4> --}}
        <img
            src="data:image/png;base64, {{ base64_encode(
                QrCode::format('png')->size(125)->generate($data),
            ) }} ">
    </center>
</body>

</html>
