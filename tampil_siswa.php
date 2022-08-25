<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Tampilan Data</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PerPus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="tambah_kelas.php">Tambah Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_siswa.php">Tambah Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_siswa.php">Tampil</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br>


    <div class="container">
        <div class="container-sm">
        <h3>Tampil Siswa</h3>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA SISWA</th>
                        <th>TANGGAL LAHIR</th>
                        <th>ALAMAT</th>
                        <th>GENDER</th>
                        <th>USERNAME</th>
                        <th>KELAS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_siswa=mysqli_query($conn, 'select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas');
                    $no=0;
                    while ($data_siswa=mysqli_fetch_array($qry_siswa)) {
                        $no++;
                        ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_siswa['nama_siswa']?></td>
                        <td><?=$data_siswa['tanggal_lahir']?></td>
                        <td><?=$data_siswa['alamat']?></td>
                        <td><?=$data_siswa['gender']?></td>
                        <td><?=$data_siswa['username']?></td>
                        <td><?=$data_siswa['nama_kelas']?></td>
                        <td>
                            <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_kelas']?>" class="btn btn-success">Ubah</a> |
                            
                            <a href="hapus.php?id_siswa=<?=$data_siswa['id_kelas']?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="fixed-bottom">
        <footer class="p-3 bg-light text-dark d-flex justify-content-center"><p>Copyright &copy; <b>Perpustakaan Telkom</b> All right reserved</p>.</footer>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>