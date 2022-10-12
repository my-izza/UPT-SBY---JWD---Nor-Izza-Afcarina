<?php
include "../function/db_conn.php";
if (isset($_GET['id'])) {
    if ($_GET['id'] != "") {

        // Mengambil ID diURL
        $id = $_GET['id'];

        // Mengambil data foto didalam table teknisi
        $get_foto = "SELECT foto FROM teknisi WHERE id_teknisi='$id'";
        $data_foto = mysqli_query($conn, $get_foto);
        // Mengubah data yang diambil menjadi Array
        $foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
        unlink("foto/" . $foto_lama['foto']);

        // Mengapus data teknisi berdasarkan ID
        $query = mysqli_query($conn, "DELETE FROM teknisi WHERE id_teknisi='$id'");
        if ($query) {
            header("location:../form/teknisi.php?pesan=hapus");
        } else {
            header("location:../form/teknisi.php?pesan=gagalhapus");
        }
    } else {
        // Apabila ID nya kosong maka akan dikembalikan kehalaman teknisi
        header("location:../form/teknisi.php");
    }
} else {
    // Jika tidak ada Data ID maka akan dikembalikan kehalaman teknisi
    header("location:../form/teknisi.php");
}
