<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/db_pegawai/api/api_tampil.php");
$data = json_decode($data, TRUE); ?>
   <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="dist/favicon.ico">

    <title>UAS PEMROGRAMAN 3</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3 bg-secondary">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Blog Saya</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-white" href="#">Client</a>
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
          <a class="p-2 text-muted " href="../db_pegawai/index.html">Home</a>
          <a class="p-2 text-muted" href="../db_pegawai/supplier.php">Supplier</a>
          <a class="p-2 text-muted" href="../db_pegawai/about.html">About</a>
        </nav>
      </div>
      </div>
        <div class="container">
                <div class="content">
                <div class="alert alert-secondary" role="alert">
                    <p>DATA SUPPLIER</p><a href="../db_pegawai/tambah.php" class="btn btn-outline-primary">Tambah Data</a>
                </div>
                    <div class="table table-striped">
                    <table style="width:100%">
                        <tr>
                            <td>id</td>
                            <td>nama_supplier</td>
                            <td>hp</td>
                            <td>alamat</td>
                            <td>Aksi</td>
                        </tr>
                        <?php foreach ($data as $data) { ?>
                            <tr>
                                <td>
                                    <?= $data["id"] ?>
                                </td>
                                <td>
                                    <?= $data["nama_supplier"] ?>
                                </td>
                                <td>
                                    <?= $data["hp"] ?>
                                </td>
                                <td>
                                    <?= $data["alamat"] ?>
                                </td>
                               
                                <td colspan="2"> <div class="btn btn-outline-warning">
                                <a href="http://localhost/db_pegawai/edit.php?=<?= $data['id'] ?>">Edit</a>  </div>
                                <div class="btn btn-outline-danger">
                                <a href="http://localhost/db_pegawai/api/api_hapus.php?id=<?= $data ['id'] ?>">Hapus</a> </td> </div>
                               
                              </tr>
                            <?php } ?>
                    </table>
                    
                </div>
      <footer class="blog-footer bg-light">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p> <div class="btn btn-outline-primary">
        <a href="#">Back to top</a>
      </div>
      </p>
    </footer>
            </div>
    </body>
    </html>