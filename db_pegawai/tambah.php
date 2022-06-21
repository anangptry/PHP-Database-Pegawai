<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$data = http_request("http://localhost/db_pegawai/api/api_tambah.php");
$data = json_decode($data, TRUE);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="dist/favicon.ico">

    <title>Tambah Data</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>

  <div class="container">
      <header class="blog-header py-3 bg-secondary">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Blog Saya</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-white" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="../db_pegawai/index.html">Home</a>
          <a class="p-2 text-muted" href="../db_pegawai/supplier.php">Supplier</a>
          <a class="p-2 text-muted" href="#">About</a>
        </nav>
      </div>
    <div class="content">
     <div class="alert alert-secondary" role="alert">
                <p>Tambah Supplier</p> <a href="../db_pegawai/supplier.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>Tambah Supplier</h1>
                    <p>Form tambah data supplier</p>
                    <form action="../db_pegawai/api/api_tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">nama supplier</label>
                            <input type="text" name="nama_supplier" id="nama_supplier" placeholder="nama_suplier" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="">hp</label>
                            <input type="text" name="hp" id="hp" placeholder="hp" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="">alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="alamat" aria-describedby="helpId"> </div>
                        <div class="form-group"> 
                            <button type="submit" class="btn btn-warning">Simpan</button> </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
    </div>
</body>
</html>