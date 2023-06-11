<?php
	session_start();

  if(empty($_SESSION)){
    header("Location:index.php");
  }
  elseif($_SESSION['tingkat'] != 'admin'){
    header("Location:admin.php");
  }

    require 'functions.php';

    $getlap = mysqli_query($conn, "SELECT * FROM data_laptop");
    $lap = mysqli_fetch_array($getlap);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
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
          <li><a class="nav-link scrollto" href="#confirm">Confirm</a></li>
          <li><a class="nav-link scrollto" href="#about">Pengembalian</a></li>
          <li><a class="nav-link scrollto" href="#data-pm">Data</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Teachers</a></li>
          <li><a class="nav-link scrollto" href="#contact">About</a></li>
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
    <section id="confirm" class="about align-item-center   ">
      <div class="container-fluid align-item-center">
        <?php 
        $query = "SELECT * FROM siswa order by id_siswa desc limit 5";
        $confirm = query($query);
        ?>          
        <br>
        <h3 style="text-align: center;"> Konfirmasi</h3>
        <br>
        <div class="container d-flex align-item-center">
          <table border = "1" cellpadding="15 " style="margin-left: auto; margin-right: auto;">
              <tr>
                  <th>Id Siswa</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>No Hp</th>
                  <th>Alamat</th>
                  <th>Id laptop</th>
                  <th>Kofirmasi</th>
              </tr>
              <?php foreach( $confirm as $cf) :?>
              <tr>
              <form action="" method="post">
                  <td>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="id_siswa" id="id_siswa">
                        <?php 
                        $qry = $conn->query("SELECT * FROM siswa");
                        while($data = $qry->fetch_assoc()){?>
                          <option disabled value=""></option>
                          <option value="<?= $data['id_siswa'];?>"><?= $data['id_siswa'];?></option>
                        <?php } ?>
                      </select>
                  </td>
                  <td><?= $cf["nama"];?></td>
                  <td><?= $cf["kelas"];?></td>
                  <td><?= $cf["nohp"];?></td>
                  <td><?= $cf["alamat"];?></td>
                  <td>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="id_laptop" id="id_laptop">
                      <?php 
                      $qry = $conn->query("SELECT * FROM data_laptop where keterangan='Tersedia'");
                      while($data = $qry->fetch_assoc()){?>
                        <option disabled value=""></option>
                        <option value="<?= $data['id_laptop'];?>"><?= $data['id_laptop'];?></option>
                      <?php } ?>
                      </select>
                  </td>
                  <td>
                  <button type="submit" class="btn btn-outline-primary" name="ya" id="ya">Ya</button>
                  <button type="submit" class="btn btn-outline-danger" name="tidak" id="tidak">Tidak</button>
                  </form>
                  </td>
              </tr>
              <?php endforeach;?>
          </table>
        </div>
        <?php 
            $nilai = "Ya";
            if (isset($_POST['ya'])){
              mysqli_query($conn, "INSERT INTO peminjaman SET
              id_siswa = '$_POST[id_siswa]',
              id_laptop = '$_POST[id_laptop]',
              izin_guru = '$nilai'");

              $result = mysqli_query($conn, "SELECT * FROM peminjaman");
              while ($row = mysqli_fetch_assoc($result)) {
                $tanggal_pinjam = $row['tanggal_pinjam'];
                $tanggal_kembali = date('Y-m-d', strtotime($tanggal_pinjam . '+3 days'));

                $sql = "UPDATE peminjaman SET tanggal_kembali = '$tanggal_kembali' WHERE id_pinjam = " . $row['id_pinjam'];
                mysqli_query($conn, $sql);
              }

              mysqli_query($conn, "UPDATE data_laptop SET keterangan='Tidak Tersedia' WHERE id_laptop='$_POST[id_laptop]'");
              echo '<script>
                    alert("Laptop dipinjamkan");
                    document.location.href="admin.php#about";
                    </script>
              ';
            }
            $nilai1 = "Tidak";
            if(isset($_POST['tidak'])){
            mysqli_query($conn, "INSERT INTO peminjaman SET
              id_siswa = '$_POST[id_siswa]',
              id_laptop = '$_POST[id_laptop]',
              tanggal_pinjam = '',
              tanggal_kembali = '',
              izin_guru = '$nilai1'");

              echo '<script>
                    alert("Data Dimasukkan");
                    document.location.href="admin.php#about";
                    </script>
              ';
            }
        ?>

        </body>
        </html>
      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about align-item-center   ">
      <div class="container-fluid align-item-center">
        <?php 
        $query = 'SELECT * FROM vpeminjaman';
        $peminjaman = query($query);
        ?>          
        <br>
        <h3 style="text-align: center;"> Pengembalian</h3>
        <br>
        <div class="container d-flex align-item-center">
            <table border = "1" cellpadding="15" style="margin-left: auto; margin-right: auto;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Id Laptop</th>
                    <th>Kelas</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Izin</th>
                    <th>Pengembalian</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach( $peminjaman as $pm) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $pm["nama"];?></td>
                    <td>
                      <form action="" method="post">
                          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="id_laptop" id="id_laptop">
                          <?php 
                          $qry = $conn->query("SELECT * FROM data_laptop where keterangan='Tidak Tersedia'");
                          while($data = $qry->fetch_assoc()){?>
                            <option disabled value=""></option>
                            <option value="<?= $data['id_laptop'];?>"><?= $data['id_laptop'];?></option>
                          <?php } ?>
                          </select>
                    </td>
                    <td><?= $pm["kelas"];?></td>
                    <td><?= $pm["tanggal_pinjam"];?></td>
                    <td><?= $pm["tanggal_kembali"];?></td>
                    <td><?= $pm["izin_guru"];?></td>
                    <td>
                        <button type="submit" class="btn btn-success" name="done" id="done">Selesai</button>
                      </form>
                    </td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>
            </table>
        </div>
        <?php 
        if(isset($_POST['done'])){
          mysqli_query($conn, "UPDATE data_laptop SET keterangan='Tersedia' WHERE id_laptop='$_POST[id_laptop]'");
          echo "
            <script> 
              alert('Laptop Dikembalikan');
              document.location.href='admin.php#data-pm';
            </script>
          ";
        }
        ?>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="data-pm" class="about align-item-center   ">
      <div class="container-fluid align-item-center">
        <?php 
        $query = 'SELECT * FROM vpeminjaman';
        $peminjaman = query($query);
        ?>          
        <br>
        <h3 style="text-align: center;"> Data Peminjaman</h3>
        <br>
        <div class="container d-flex align-item-center">
            <table border = "1" cellpadding="15" style="margin-left: auto; margin-right: auto;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Id Laptop</th>
                    <th>Kelas</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Izin</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach( $peminjaman as $pm) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $pm["nama"];?></td>
                    <td><?= $pm["id_laptop"];?></td>
                    <td><?= $pm["kelas"];?></td>
                    <td><?= $pm["tanggal_pinjam"];?></td>
                    <td><?= $pm["tanggal_kembali"];?></td>
                    <td><?= $pm["izin_guru"];?></td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>
            </table>
        </div>
        <?php 
        ?>

      </div>
    </section><!-- End About Section -->


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