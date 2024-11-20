<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Doa</th>
                <th>Ayat</th>
                <th>Latin</th>
                <th>Arti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $res)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $res['doa'] }}</td>
                    <td>{{ $res['ayat'] }}</td>
                    <td>{{ $res['latin'] }}</td>
                    <td>{{ $res['artinya'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
