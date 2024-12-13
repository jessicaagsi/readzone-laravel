<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <div id="sidebar">
      <h2>Dashboard</h2>
    </div>
    <div class="div1">
      <ul>
      <li><a href="#reports">Home</a></li>
        <li><a href="buku.php">Buku</a></li>
        <li><a href="kategori.php">Kategori</a></li>
        <li><a href="#analytics">Analytics</a></li>
        <li><a onclick="showTable()">Reports</a></li>
        <li>
          <a href="logout.php" onclick="myFunction()">Log Out</a>
          <script>
            function myFunction() {
              let pil = confirm("apakah anda yakin untuk logout?");
            }
          </script>
        </li>
      </ul>
    </div>

    <div id="main-content">
      <h1>Buku</h1>
      <section id="overview">
        <div class="card">
            <button>
            <a href="tambah-buku">Tambah Buku +</a>
            </button>
            <button>
            <a href="cetak">Cetak Buku</a>
            </button>
            <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    table {
        width: 80%;
        margin: 30px auto;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    thead {
        background-color: #333;
        color: white;
    }

    th, td {
        padding: 12px 20px;
        text-align: left;
        font-size: 14px;
    }

    th {
        text-transform: uppercase;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    td {
        color: #555;
    }

    td, th {
        border-bottom: 1px solid #ddd;
    }

    td[colspan="5"] {
        text-align: center;
        font-style: italic;
        color: #888;
    }

    /* Responsiveness */
    @media screen and (max-width: 768px) {
        table {
            width: 95%;
        }

        th, td {
            font-size: 12px;
            padding: 10px;
        }
    }

    /* Optional: Add some styling for the table container */
    .table-container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
</style>

          <table>
        <thead>
            <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Kategori Buku</th>
            <th>Pengarang Buku</th>
            <th>Penerbit Buku</th>
                <th>Tahun Buku</th>
                <th>Aksi</th>
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
        <td><a href="/buku/delete/{{$b->id}}">
          <button>Delete</button>
        </a></td>
        @endforeach
        </tbody>
    </table>
        </div>
      </section>
    </div>
  </body>
</html> 
