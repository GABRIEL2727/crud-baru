<?php
$koneksi = new mysqli('localhost', 'root', '', 'crud_native') or die(mysqli_error($koneksi));

     // Menyimpan data //
if (isset($_POST['simpan'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idpasien, nmpasien, jk, alamat) VALUES ('$idpasien', '$nmpasien', '$jk', '$alamat')");

    header('Location: pasien.php');
    exit();
}

      // Menghapus data //
if (isset($_GET['idpasien'])) {
    $idpasien = $_GET['idpasien'];
    $koneksi->query("DELETE FROM pasien WHERE idpasien = '$idpasien'");
    header("Location: pasien.php");
    exit();
}

// Mengedit data //
if (isset($_POST['edit'])) {
    // Ambil data dari form
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    
    if ($koneksi) {
        
        $stmt = $koneksi->prepare("UPDATE pasien SET nmpasien=?, jk=?, alamat=? WHERE idpasien=?");
        $stmt->bind_param("ssss", $nmpasien, $jk, $alamat, $idpasien);
       
        if ($stmt->execute()) {
           
            header("Location: pasien.php");
            exit();
        }}}
