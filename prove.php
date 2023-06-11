<?php
session_start();

if(empty($_SESSION)){
  header("Location:in.php");
}
require 'functions.php';
$query = "SELECT * FROM siswa order by id_siswa desc limit 1";
$data_siswa = query($query);

$get1 = mysqli_query($conn, "Select * from data_laptop");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($conn, "Select * from data_laptop where keterangan='Tersedia'");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($conn, "Select * from data_laptop where keterangan='Tidak Tersedia'");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($conn, "Select * from user");
$count4 = mysqli_num_rows($get4);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Siswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Barc<span class="text-primary">Ware</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Form</a></li>
          <li><a class="nav-link scrollto" href="#prove">Bukti Peminjaman</a></li>
          <li><a class="nav-link scrollto" href="#services">Laptop</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Teachers</a></li>
          <li><a class="nav-link scrollto" href="#contact">about</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="out.php" class="appointment-btn scrollto">Logout</a>
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Barc<span class="text-primary">Ware</span></h1>
      <h2>Mau pinjam laptop? <span class="text-primary">BarcWare Solusinya!</span></h2>
      <a href="#about" class="btn-get-started scrollto">Pinjam sekarang!</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa itu Barc<span>Ware</span></h3>
              <p class="align-">
                BarcWare adalah sebuah aplikasi peminjaman laptop berbasis web yang ditujukan khususnya untuk siswa jurusan Rekayasa Perangkat Lunak dan umumnya untuk seluruh siswa SMK Negeri 4 Padalarang
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Isi form</h4>
                    <p>Isi form untuk mengisi data peminjaman</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Dapatkan bukti peminjaman</h4>
                    <p>Dapatkan bukti peminjaman untuk mengkonfirmasi peminjaman kepada admin </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Ambil laptop</h4>
                    <p> Tunjukan bukti peminjaman kepada admin atau guru yang bersangkutan</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">


          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Form peminjaman</h3>

            <form action=""  method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
              </div>

              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" aria-describedby="kelas">
              </div>

              <div class="mb-3">
                <label for="nohp" class="form-label">No Handphone</label>
                <input type="text" class="form-control" id="nohp" name="nohp" aria-describedby="nohp">
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamat">
              </div>
              <br>

            <button class="btn btn-primary" type="submit" name="submit">Pinjam</button>

            <?php 
            if(isset($_POST['submit'])){
                mysqli_query($conn, "INSERT INTO siswa SET 
                nama = '$_POST[nama]',
                kelas = '$_POST[kelas]',
                nohp = '$_POST[nohp]',
                alamat = '$_POST[alamat]'");
            
                echo '<script>
                        alert("Data Added!!");
                        document.location.href="prove.php#prove"
                    </script>
                ';
            }
            
            ?>

            </form>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Prove ======= -->
    <section id="prove" class="about align-item-center">
      <div class="container-fluid align-item-center">
            <h3 style="text-align: center;">Bukti peminjaman</h3>
            <br>
            <table border = "1" cellpadding="15" style="margin-left: auto; margin-right: auto;">
              <tr>
                  <th>Id Siswa</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>No Handphone</th>
                  <th>Alamat</th>
              </tr>
              <?php foreach( $data_siswa as $ds) :?>
              <tr>
                  <td><?= $ds["id_siswa"]; ?></td>
                  <td><?= $ds["nama"];?></td>
                  <td><?= $ds["kelas"];?></td>
                  <td><?= $ds["nohp"];?></td>
                  <td><?= $ds["alamat"];?></td>
              </tr>
              <?php endforeach;?>
          </table>
          </div>
          <button type="button" class="btn btn-primary m-lg-5"><a href="exp.php"  style="color: white;">Export</a></button>
        </div>
        </div>
    </section><!-- End About Prove -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $count4 ;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengguna</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $count1 ;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Laptop</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-sharp fa-solid fa-laptop"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $count2 ;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laptop Tersedia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-sharp fa-solid fa-laptop-slash"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $count3 ;?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laptop Dipinjam</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Library Laptop</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Lenovo ideapad 100-15 IBY 80 MJ</a></h4>
              <p></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Teachers Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Teachers</h2>
          <p>Bukti Peminjaman dapat diserahkan kepada salah satu guru atau admin yang terdapat pada daftar dibawah ini.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Irlan Maulana</h4>
                <span>Penanggung Jawab</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Inggit Sumirah</h4>
                <span>Produktif RPL</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Erik Pratama</h4>
                <span>Produktif RPL</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Cahyadi</h4>
                <span>Produktif RPL</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Tamam Puadi</h4>
                <span>Produktif RPL</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/comingsoon.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rita Sangra</h4>
                <span>Produktif RPL</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Barcware</h3>
            <p>
              Jln. Warungawi Pasirhaur <br>
              Kp. Parakan RT 02/08<br>
              Desa Bojong Koneng, Kecamatan Ngamprah <br>
              Kabupaten Bandung Barat, Jawa Barat<br>
              Kode Pos 40552 <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Project Manager : RD.Galih Rakasiwi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Analisis Data : M. Aby Pahrul</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">DBMS  : Zahra Putri Zaihan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Programmer  : Syahidah Nur Rahmah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dokumentasi  :  Rifdah Jamilatun Hasanah</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Group</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>BarcWare</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BarcWare</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>