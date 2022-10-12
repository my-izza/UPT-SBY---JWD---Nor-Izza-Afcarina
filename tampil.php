<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <title>Aplikasi Service</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/bootstrap-grid.css">
        <link rel="stylesheet" href="./custom/fontawesome/css/all.css">
        <link rel="stylesheet" href="./custom/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="./custom/style.css">
        <link rel="stylesheet" href="css/tampil.css">
    </head>

    <body>
        <div class="container-fluid bg-utama py-4 d-none d-sm-block">
            <a class="navbar-brand" href="#">
                <img src="./assets/home/Logo.svg" id="logo" width="200" alt="">
            </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top py-3 shadow-sm">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
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
                        <a href="function/logout.php" class="tbl-login">keluar</a>
                    </li>
                </ul>
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </div>
            </div>
        </nav>

        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="content">
                <h6>Temukan teknisi profesional disekitarmu</h6> <br><br>
                <p>Memberi kemudahan untuk Anda memilih teknisi terfavorit disekitar
                    untuk melakukan perbaikan dan menggunakan jasa mereka dengan
                    menghubungi teknisi langsung dari rumah.</p>
                <a href="#about" class="btn">Cari Tau Kami</a>
            </div>

        </section>

        <!-- home section ends -->

        <!-- about section starts  -->

        <section class="about" id="about">

            <h1 class="heading"> <span>Tentang</span> Kami </h1>

            <div class="row">

                <div class="image">
                    <img src="assets/home/layanan.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Apa itu Servis-In ??</h3>
                    <p>Servis-In merupakan platform yang mempunyai misi sosial untuk menyejahterakan pekerja service dan juga memudahkan konsumen atau pemakai jasa service agar mudah mendapatkan tukang service yang terpercaya. Maka Servis-In hadir untuk menciptakan mobilitas jasa yang mudah, dan praktis. Kami membuat sebuah platform yang menawarkan jasa teknisi terpercaya, mudah, serta pelayanannya yang cepat. Yang mana Servis-In akan menjembatani antara konsumen dan tukang service. Servis-In juga bertujuan untuk mampu mewujudkan sistem keuangan yang tumbuh secara berkelanjutan dan stabil dan mampu melindungi kepentingan konsumen dan juga masyarakat.</p>
                    <a href="#" class="btn">Kenali Kami</a>
                </div>

            </div>

        </section>

        <!-- about section ends -->

        <!-- layanan section starts  -->

        <section class="layanan" id="layanan">

            <h1 class="heading"> Layanan <span>Kami</span> </h1>

            <div class="box-container">

                <div class="box ">
                    <img class="rounded-circle mb-3" src="assets/pelayanan/konsultasi.png" alt="">
                    <h3>Konsultasi</h3>
                    <div class="deskripsi">Ingin konsultasi masalah? Konsultasikan masalah dengan teknisi kami</div>
                    <a href="#" class="btn">Cari Teknisi</a>
                </div>

                <div class="box">
                    <img src="assets/pelayanan/maintenance.png" alt="">
                    <h3>Teknisi Mesin</h3>
                    <div class="deskripsi">Kendaraan bermasalah? hubungi kami dari mana saja, cari teknisi sekitar</div>
                    <a href="#" class="btn">Cari Teknisi</a>
                </div>

                <div class="box">
                    <img src="assets/pelayanan/listrik.png" alt="">
                    <h3>Teknisi Listrik</h3>
                    <div class="deskripsi">Terdapat masalah listrik? Hubungi kami dari mana saja, cari teknisi sekitar</div>
                    <a href="#" class="btn">Cari Teknisi</a>
                </div>

                <div class="box">
                    <img src="assets/pelayanan/contruksi.png" alt="">
                    <h3>Teknisi Bangunan</h3>
                    <div class="deskripsi">Terdapat masalah bangunan? Hubungi kami dari mana saja, cari teknisi sekitar</div>
                    <a href="#" class="btn">Cari Teknisi</a>
                </div>

                <div class="box">
                    <img src="assets/pelayanan/shop.png" alt="">
                    <h3>Toko Teknisi</h3>
                    <div class="deskripsi">Cari kebutuhan Anda</div>
                    <a href="#" class="btn">Kunjungi Toko</a>
                </div>

                <div class="box">
                    <a href="#" class="btn" id="next"><input type="image" src="assets/home/right.png" id="img"></a>
                    <h4>Lihat Layanan Lainnya</h4>
                </div>


            </div>

        </section>

        <!-- layanan section ends -->

        <!-- Pelatihan section stars -->

        <section class="pelatihan" id="pelatihan">

            <h1 class="heading"> Pelatihan <span>Kami</span> </h1>

            <div class="box-container">

                <div class="box">
                    <h3>Pelatihan Teknisi Listrik</h3>
                    <div class="image">
                        <img src="assets/pelatihan/teknisi listrik.jpeg" alt="">
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                        <a href="#" class="btn">Ikuti Pelatihan</a>
                    </div>
                </div>

                <div class="box">
                    <h3>Pelatihan Teknisi Ac</h3>
                    <div class="image">
                        <img src="assets/pelatihan/teknisiac.jpg" alt="">
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                        <a href="#" class="btn">Ikuti Pelatihan</a>
                    </div>
                </div>

                <div class="box">
                    <h3>Pelatihan Teknisi Mesin</h3>
                    <div class="image">
                        <img src="assets/pelatihan/teknisipel.jpeg" alt="">
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                        <a href="#" class="btn">Ikuti Pelatihan</a>
                    </div>
                </div>

            </div>

            <div class="container" align="center">
                <a href="#" class="btn" align="center" id="next">Lihat Pelatihan Lainnya</a>
            </div>

        </section>

        <!-- Pelatihan section ends -->

        <!-- Profile Section  -->
        <!-- Visi Misi -->
        <section class="about" id="visi">

            <h1 class="heading"> <span>Visi Misi</span> Kami </h1>

            <div class="row">

                <div class="image">
                    <img src="assets/home/layanan.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Visi Misi Kami</h3>
                    <p>Servis-In merupakan platform yang mempunyai misi sosial untuk menyejahterakan pekerja service dan juga memudahkan konsumen atau pemakai jasa service agar mudah mendapatkan tukang service yang terpercaya. Maka Servis-In hadir untuk menciptakan mobilitas jasa yang mudah, dan praktis. Kami membuat sebuah platform yang menawarkan jasa teknisi terpercaya, mudah, serta pelayanannya yang cepat. Yang mana Servis-In akan menjembatani antara konsumen dan tukang service. Servis-In juga bertujuan untuk mampu mewujudkan sistem keuangan yang tumbuh secara berkelanjutan dan stabil dan mampu melindungi kepentingan konsumen dan juga masyarakat.</p>
                </div>

            </div>

        </section>


        <section class="about" id="client">

            <h1 class="heading"> <span>Client</span> Kami </h1>

            <div class="box-container">
                <!-- Client -->
                <div class="row pt-4 gx-4 gy-4">
                    <div class="col-md-4 text-center tim">
                        <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" class="rounded-circle mb-3" />
                        <h4>John Doe</h4>
                        <p>Web Designer</p>
                        <p>
                            <a href="" class="social"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center tim">
                        <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg" class="rounded-circle mb-3" />
                        <h4>Michael Dell</h4>
                        <p>Data Scientist</p>
                        <p>
                            <a href="" class="social"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center tim">
                        <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg" class="rounded-circle mb-3" />
                        <h4>Paul</h4>
                        <p>Network Engineer</p>
                        <p>
                            <a href="" class="social"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile Section End -->

        <!-- review section starts  -->

        <section class="review" id="review">

            <h1 class="heading"> Review <span>Konsumen</span> </h1>

            <div class="box-container">

                <div class="box">
                    <img src="assets/home/quote-img.png" alt="" class="quote">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                    <img src="assets/home/boy.png" class="user" alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/home/quote-img.png" alt="" class="quote">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                    <img src="assets/home/girl.png" class="user" alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/home/quote-img.png" alt="" class="quote">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                    <img src="assets/home/man.png" class="user" alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

            <div class="container" align="center">
                <a href="#" class="btn" align="center" id="next">Lihat Review Lainnya</a>
            </div>

        </section>

        <!-- review section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading"> <span>Kontak</span> Kami </h1>

            <div class="row">

                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8113274.347731632!2d104.79533618403227!3d-6.823275443334457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da393f79feeb5c5%3A0x1030bfbca7cb850!2sEast%20Java!5e0!3m2!1sen!2sid!4v1663713077850!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <form action="">
                    <h3>Hubungi Kami</h3>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" placeholder="name">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-phone"></span>
                        <input type="number" placeholder="number">
                    </div>
                    <input type="submit" value="contact now" class="btn">
                </form>

            </div>

        </section>

        <!-- contact section ends -->

        <!-- blogs section starts  -->

        <section class="blogs" id="blogs">

            <h1 class="heading"> Artikel <span>Kami</span> </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="assets/home/mitra.JPG" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="title">Menjalin Kerja Sama Baik</a>
                        <span>by admin / 21st may, 2022</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="assets/home/pelatihan.JPG" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="title">Bagaimana Tim Yang Baik</a>
                        <span>by admin / 22st Jun, 2022</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="assets/home/background - Copy.jpg" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="title">Pentingnya K3 BAgi Teknisi</a>
                        <span>by admin / 21st Augst, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

            <div class="container" align="center">
                <a href="#" class="btn" align="center" id="next">Lihat Artikel Lainnya</a>
            </div>

        </section>

        <!-- blogs section ends -->

        <!-- footer section starts  -->

        <section class="footer">

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>

            <div class="links">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#layanan">Layanan</a>
                <a href="#pelatihan">Pelatihan</a>
                <a href="#review">review</a>
                <a href="#contact">Kontak</a>
                <a href="#blogs">Artikel</a>
            </div>

            <div class="credit">created by <span>Izza</span> | Uji Kompetensi </div>

        </section>

        <!-- footer section ends -->

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.bundle.js"></script>
        <script src="./custom/fontawesome/js/all.js"></script>
        <script src="./custom/fontawesome/js/fontawesome.min.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>