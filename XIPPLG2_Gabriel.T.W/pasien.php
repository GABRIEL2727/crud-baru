<html>
    <head>
        <title>
            Daftar pasien
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">My App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-expanded="false" aria-label="Toogle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb--lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Pasien</a>
                            </li>
                            <li>
                                <a href="kunjungan.html" class="navbar-brand">Kunjungan</a>
                            </li>
                            <li>
                                <a href="Dokter.html" class="navbar-brand">Dokter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row nt-3">
                <div class="col-sm">
                    <h3>Tabel Pasien</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="tambahpasien.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
                </div>
            </div>
            
<div class="row_mt-3">
<div class="col">
<table class="table table-striped table-hover tabel-sm">
<tr>
<th>No</th>
<th>ID Pasien</th>
<th>Nama Pasien</th> <th>Jenis Kelamin</th> <th>Alamat</th>
<th>Action</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$hasil = $koneksi->query("SELECT * FROM pasien");
while ($row = $hasil->fetch_assoc()) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row['idpasien']; ?></td>
<td><?= $row['nmpasien']; ?></td> 
<td><?= $row['jk']; ?></td>
<td><?= $row['alamat']; ?></td>
<td>
<a href="editpasien.php?edit=<?= $row['idpasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="koneksi.php?idpasien=<?= $row['idpasien']; ?>" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger btn-sm">Hapus</a></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>