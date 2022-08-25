<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Tambah Data Siswa</title>
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
            <h3>Tambah Siswa</h3>
            <form action="proses_tambah_siswa.php" method="post">
                Nama Siswa :
                <input type="text" name="nama_siswa" value="" class="form-control">

                Tanggal Lahir :
                <input type="date" name="tanggal_lahir" value="" class="form-control">

                Gender :
                <select name="gender" class="form-control">
                    <option value="Lainnya">Lainnya..</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                Alamat :
                <textarea name="alamat" class="form-control" rows="4"></textarea>

                Kelas :
                <select name="id_kelas" class="form-control">
                    <option value=""></option>
                    <?php
                    include "koneksi.php";
                    $qry_kelas=mysqli_query($conn, "select * from kelas");
                    while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                        echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                    }
                    ?>
                </select>

                Username :
                <input type="text" name="username" value="" class="form-control">

                Password : 
                <input type="password" name="password" value="" class="form-control">

                <br>

                <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="fixed-bottom">
        <footer class="p-3 bg-light text-dark d-flex justify-content-center"><p>Copyright &copy; <b>Perpustakaan Telkom</b> All right reserved</p>.</footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>