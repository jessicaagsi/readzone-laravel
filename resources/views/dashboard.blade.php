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
        <li><a href="/dashboard.php">Home</a></li>
        <li><a href="./buku/buku.php">Buku</a></li>
        <li><a href="./buku/kategori.php">Kategori</a></li>
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
      <h1>Welcome To Dashboard</h1>
     
     <section id="overview">
  <div class="card">
    <h2>Jumlah Buku</h2>
    <h2></h2> 
</section>

      <section id="analytics">
        <div class="card">
          <h2>Jumlah Kategori</h2>
    <h2></h2> 

        </div>
      </section>

      <section id="reports">
        <div class="card">
          <h2>Laporan Atau Cetak Buku</h2>
          <button>
            <a href="cetak-buku.php">Cetak Buku</a>
            </button>
        </div>
       
        
      </section>
    </div>
  </body>
</html> 
