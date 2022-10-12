<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="css/tampil.css">
    <title>Teknisi</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top py-3 shadow-sm">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link active" href="../tampil.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#about">About</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle active " href="#layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" style="background-color: #FF7366;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#layanan">Konsultasi</a></li>
                        <li><a class="dropdown-item" href="#layanan">Teknisi Mesin</a></li>
                        <li><a class="dropdown-item" href="#layanan">Teknisi Listrik</a></li>
                        <li><a class="dropdown-item" href="#layanan">Teknisi Bangunan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#pelatihan">Pelatihan</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle active " href="#layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" style="background-color: #FF7366;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#visi">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="#galeri">Galeri Kegiatan</a></li>
                        <li><a class="dropdown-item" href="#client">Daftar Client</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="#review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#blogs">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="form/teknisi.php">Teknisi</a>
                </li>
                <li>
                    <a href="../function/logout.php" class="tbl-login">keluar</a>
                </li>
            </ul>
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
        </div>
    </nav>

    <form action="" enctype="multipart/form-data">
        <div class="container mt-5 ">
            <center class="mb-5">
                <h2> Teknisi </h2>
            </center>
            <hr>
            <?php if (isset($_GET['pesan'])) { ?>
                <?php if ($_GET['pesan'] == "berhasil") { ?>
                    <div class="alert alert-primary" role="alert">
                        Berhasil Mengubah Data Teknisi
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal Mengubah Data Teknisi
                    </div>
                <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>
                    <div class="alert alert-warning" role="alert">
                        Ekstensi File Harus PNG Dan JPG
                    </div>
                <?php } elseif ($_GET['pesan'] == "size") { ?>
                    <div class="alert alert-warning" role="alert">
                        Size File Tidak Boleh Lebih Dari 2 MB
                    </div>
                <?php } elseif ($_GET['pesan'] == "hapus") { ?>
                    <div class="alert alert-primary" role="alert">
                        Berhasil Menghapus Data Teknisi
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagalhapus") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal Menghapus Data Teknisi
                    </div>
                <?php } ?>
            <?php } ?>
            <br>
            <a href="insert.php" class="btn btn-primary mb-2">Tambah Data</a>
            <table class="table table-bordered mt-" id="myTable">
                <thead>
                    <tr>
                        <th scope="col" width="1%">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Keahlian</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" width="20%">Foto</th>
                        <th scope="col" width="20%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../function/db_conn.php";

                    $no = 1;
                    $get_data = mysqli_query($conn, "SELECT * FROM teknisi");
                    while ($data = mysqli_fetch_array($get_data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['keahlian']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td>
                                <?php
                                if ($data['foto'] == "") { ?>
                                    <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO" style="width:100px;height:100px;">
                                <?php } else { ?>
                                    <img src="foto/<?php echo $data['foto']; ?>" style="width:100px;height:100px;">
                                <?php } ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id_teknisi'] ?>" class="btn btn-warning text-white">Edit</a>
                                <a href="../function/hapus.php?id=<?php echo $data['id_teknisi'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')" class=" btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>