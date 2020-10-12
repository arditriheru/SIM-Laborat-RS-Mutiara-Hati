<?php include "views/header.php"; ?>
<nav>
  <div id="wrapper">
    <?php include "menu.php"; ?>
  </div><!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Hasil <small>Laboratorium</small></h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-check-square-o"></i> Hasil Lab</li>
      </ol>  
      <?php include "../config/welcome.php";?>
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped tablesorter">
              <thead>
                <tr>
                  <th><center>#</center></th>
                  <th><center>No.Reg</center></th>
                  <th><center>Registrasi</center></th>
                  <th><center>No.RM</center></th>
                  <th><center>Nama Pasien</center></th>
                  <th><center>Tempat, Tgl Lahir</center></th>
                  <th><center>Asal</center></th>
                  <th><center>Nama Dokter</center></th>
                  <th colspan='2'><center>Menu</center></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                $data = mysqli_query($koneksi,
                  "SELECT *, mr_pendaftaran.id_mr_pendaftaran, mr_pasien.nama_pasien, mr_dokter.nama_dokter, mr_unit.nama_unit, lab_trn.selesai AS status
                  FROM lab_trn
                  INNER JOIN mr_pendaftaran
                  ON lab_trn.id_mr_pendaftaran = mr_pendaftaran.id_mr_pendaftaran
                  INNER JOIN mr_pasien
                  ON mr_pendaftaran.id_catatan_medik = mr_pasien.id_catatan_medik
                  INNER JOIN mr_dokter
                  ON mr_pendaftaran.id_dokter = mr_dokter.id_dokter
                  INNER JOIN mr_unit
                  ON mr_dokter.id_unit = mr_unit.id_unit
                  ORDER BY lab_trn.id_lab_trn ASC;");
                while($d = mysqli_fetch_array($data)){
                  $tanggal    = $d['tanggal'];
                  $tgl_lahir  = $d['tgl_lahir'];
                  ?>
                  <tr>
                    <td><center><?php echo $no++; ?></center></td>
                    <td><center><?php echo $d['id_mr_pendaftaran']; ?></center></td>
                    <td><center><?php echo date('d-m-Y', strtotime($tanggal)).' ('.$d['jam'].')'; ?></center></td>
                    <td><center><?php echo $d['id_catatan_medik']; ?></center></td>
                    <td><center><?php echo $d['nama_pasien']; ?></center></td>
                    <td><center><?php echo $d['tempat'].', '.date('d F Y', strtotime($tgl_lahir)); ?></center></td>
                    <td><center><?php echo $d['nama_unit']; ?></center></td>
                    <td><center><?php echo $d['nama_dokter']; ?></center></td>
                    <?php
                    if($d['status']=='1'){ ?>
                      <td><center><button type="button" class="btn btn-primary"><i class='fa fa-check'></center></td>
                      <?php }else{ ?>
                        <td><center><button type="button" class="btn btn-danger"><i class='fa fa-times'></center></td>
                        <?php }
                        ?>
                        <td>
                          <div align="center">
                            <a href="trn-detail.php?id=<?php echo $d['id_lab_trn']; ?>"
                              <button type="button" class="btn btn-success"><i class='fa fa-file-text'></i></button></a>
                            </div>
                          </td>
                          </tr><?php } ?>
                        </tbody>
                      </table>
                    </div><!-- col-lg-12 -->
                  </div>
                </div>
              </div>
            </div><!-- /.row -->
          </div><!-- /#page-wrapper -->
          <?php include "views/footer.php"; ?>