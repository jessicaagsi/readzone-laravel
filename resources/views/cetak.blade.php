<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Transaksi</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
  <table class="table-data">
    <thead>
    <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Kategori Buku</th>
            <th>Pengarang Buku</th>
            <th>Penerbit Buku</th>
                <th>Tahun Buku</th>
             
            </tr>
    </thead>
    <tbody>
    @foreach ($buku as $b)
        <td>{{$b->id}}</td>
        <td>{{$b->nama_buku}}</td>
        <td>{{$b->kategori}}</td>
        <td>{{$b->pengarang}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        @endforeach
    </tbody>
</body>

</html>
