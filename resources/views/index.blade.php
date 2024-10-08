<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain</title>
</head>
<body>
    <a href="{{ ('pemain/create') }}" class="btn btn-primary float-end">Tambah Buku</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $index =>$pemain)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$pemain->NamaPemain}}</td>
                <td>{{$pemain->NoPunggung}}</td>
                <td>{{$buku->Posisi}}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>