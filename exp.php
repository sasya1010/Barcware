<?php 
require 'functions.php';
$query = "SELECT * FROM siswa order by id_siswa desc limit 1";
$data_siswa = query($query);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Bukti Peminjaman.xls");
?>


<p>Bukti Peminjaman</p>

<table border = "1" cellpadding="15">
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