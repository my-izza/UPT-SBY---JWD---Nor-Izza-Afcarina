<?php
include "../function/db_conn.php";
if (isset($_GET['id'])) {
    if ($_GET['id'] != "") {

        $id = $_GET['id'];

        $query = mysqli_query($conn, "SELECT * FROM teknisi WHERE id_teknisi='$id'");
        $row = mysqli_fetch_array($query);
    } else {
        header("location:teknisi.php");
    }
} else {
    header("location:teknisi.php");
}

?>

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
    <title>Edit Data</title>
</head>

<body>

    <div class="container mt-5 ">
        <center class="mb-5">
            <h2>Edit Data</h2>
        </center>
        <hr>
        <form action="../function/ubah.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap Teknisi</label>
                <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $row['nama']; ?>">
                <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_teknisi']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Keahlian</label>
                <input type="text" name="keahlian" class="form-control" value="<?php echo $row['keahlian']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"><?php echo $row['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Pas Foto</label>
                <input type="file" name="pas_foto" class="form-control">
                <br>
                <?php
                if ($row['foto'] == "") { ?>
                    <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO" style="width:100px;height:100px;">
                <?php } else { ?>
                    <img src="foto/<?php echo $row['foto']; ?>" style="width:100px;height:100px;">
                <?php } ?>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="teknisi.php" class="btn btn-danger">Kembali</a>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>