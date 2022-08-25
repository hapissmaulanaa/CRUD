<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Kelas</title>
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
            <h3>Tambah Kelas</h3>
            <form action="proses_tambah_kelas.php" method="post">
                nama kelas :
                <input type="text" name="nama_kelas" value="" class="form-control"> 

                kelompok :
                <input type="text" name="kelompok" value="" class="form-control">

                Angkatan :
                <input type="text" name="angkatan" value="" class="form-control">

                <br>

                <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="fixed-bottom">
        <footer class="p-3 bg-light text-dark d-flex justify-content-center"><p>Copyright &copy; <b>Perpustakaan Telkom</b> All right reserved</p>.</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>