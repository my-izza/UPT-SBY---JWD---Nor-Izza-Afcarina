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
    <title>Tambah Data</title>
</head>

<body>

    <div class="container mt-5 ">
        <center class="mb-5">
            <h2>Tambah Data</h2>
        </center>
        <hr>
        <?php if (isset($_GET['pesan'])) { ?>
            <?php if ($_GET['pesan'] == "berhasil") { ?>
                <div class="alert alert-primary" role="alert">
                    Berhasil Menambahkan Data Teknisi
                </div>
            <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                <div class="alert alert-danger" role="alert">
                    Gagal Menambahkan Data Teknisi
                </div>
            <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>
                <div class="alert alert-warning" role="alert">
                    Ekstensi File Harus PNG Dan JPG
                </div>
            <?php } elseif ($_GET['pesan'] == "size") { ?>
                <div class="alert alert-warning" role="alert">
                    Size File Tidak Boleh Lebih Dari 2 MB
                </div>
            <?php } ?>
        <?php } ?>
        <br>

        <form action="../function/tambah.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap Teknisi</label>
                <input type="text" name="nama_lengkap" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Keahlian</label>
                <input type="text" name="keahlian" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Pas Foto</label>
                <input type="file" name="pas_foto" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="../form/teknisi.php" class="btn btn-danger">Kembali</a>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>