<html>
<head>
<title>My App | Edit Pasien</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Edit Data Pasien</h3>
<?php
include 'koneksi.php';
$panggil = $koneksi->query("SELECT * FROM pasien WHERE idpasien='$_GET[edit]'");
while ($row = $panggil->fetch_assoc()) {
?>
<form action="koneksi.php" method="POST">
    <div class="form-group">
        <label for="idpasien">ID Pasien</label>
        <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien" value="<?= $row['idpasien'] ?>">
    </div>
    <div class="form-group">
        <label for="nmpasien">Nama Pasien</label>
        <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien" value="<?= $row['nmpasien'] ?>">
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?= ($row['jk'] === "Perempuan") ? "checked" : "" ?>> Perempuan
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?= ($row['jk'] === "Laki-laki") ? "checked" : "" ?>> Laki-laki
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"><?= $row['alamat'] ?></textarea>
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="edit" value="Simpan" class="form-control btn btn-primary">
    </div>
</form>
<?php } ?>
</div>
</div>
</div>
</body>
</html>
