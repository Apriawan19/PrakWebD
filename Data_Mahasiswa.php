<html>

<head>
    <title>SISKA UBG</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SISKA UBG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_mhs.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="Data_Nilai.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Nilai
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h4 style="text-align: center">DAFTAR MAHASISWA</h4>
        <div class="table-responsive">
            <a href="tambah_mhs.php" style="float: right" class="btn btn-success">Tambah Mahasiswa</a>
            <!-- <button type="button" class="btn btn-success"> -->
            <!-- Tambah Mahasiswa -->

            </button>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>Smester</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Status Mahasiswa</th>
                        <th>Foto</th>
                        <th>Tols</th>
                    </tr>
                </thead>
                </tbody>
                <?php
                include "koneksi.php";
                $tampil = "SELECT * FROM tb_mhs";
                $mhs = mysqli_query($koneksi, $tampil);
                $no = 1;
                foreach ($mhs as $mahasiswa){
                    ?>
                    <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $mahasiswa['nim_mahasiswa']; ?></td>
                    <td><?php echo $mahasiswa['nama_mahasiswa']; ?></td>
                    <td><?php echo $mahasiswa['semester']; ?></td>
                    <td><?php echo $mahasiswa['jurusan']; ?></td>
                    <td><?php echo $mahasiswa['alamat']; ?></td>
                    <td><?php echo $mahasiswa['no_hp']; ?></td>
                    <td><?php echo $mahasiswa['email']; ?></td>
                    <td><?php echo $mahasiswa['jenis_kelamin']; ?></td>
                    <td><?php echo $mahasiswa['status_mahasiswa']; ?></td>
                    <td> <img width="150" height="100" src="<?php echo $mahasiswa['foto']; ?>" >
                    <td>
                    <a href="hapus_mhs.php?nim=<?php echo $mahasiswa
                    ['nim_mahasiswa']; ?>" onclick="return confirm('Anda yakin ingin hapus?')" type= "button" class= "btn btn-danger btn-sm">Hapus</a>
                    <a href="ubah_mhs.php?nim=<?php echo $mahasiswa
                    ['nim_mahasiswa']; ?>" type= "button" class= "btn btn-warning btn-sm">Ubah</a></td>
                   </tr>
                   <?php
                   $no++;
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>