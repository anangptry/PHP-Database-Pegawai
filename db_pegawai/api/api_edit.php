<?php
require_once '../config/koneksi.php';
if (isset($_GET['id'])) {
    $SQL = $conn->prepare("SELECT * FROM supplier WHERE id=? ORDER BY id ASC");
    $id = $_GET['id'];
    $SQL->execute();
    $SQL->bind_param("i", $id);
    $myArray = array();
    $hasil = $SQL->get_result();
        $myArray = $users;
    while ($users = $hasil->fetch_array(MYSQLI_ASSOC)) {
    }
}
   echo "data tidak ditemukan";