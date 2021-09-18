<?php include "views/header.php"; ?>
<nav>
  <div id="wrapper">
    <?php include "menu.php"; ?>
  </div><!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Detail <small>Pasien</small></h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-check-square-o"></i> Pasien</li>
      </ol>  
      <?php include "../config/welcome.php"?>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-6">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tablesorter">
          <tbody>
            <?php 
            $id_catatan_medik = $_GET['id'];
            $data = mysqli_query($koneksi,
              "SELECT *, IF (sex='1', 'Laki-laki', 'Perempuan') AS jekel FROM mr_pasien WHERE id_catatan_medik = '$id_catatan_medik';");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td align="right" colspan="2">
                  <img class="img-responsive" src="../images/imagesbarcode/<?php echo $d['id_catatan_medik']; ?>.png" width="15%" alt="imagesbarcode">
                </td>
              </tr>
              <tr>
                <td><left><b>Nomor RM</b></left></td>
                <td><left><?php echo $d['id_catatan_medik']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>Nama Pasien</b></left></td>
                <td><left><?php echo $d['nama_pasien']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>TTL</b></left></td>
                <td><left><?php echo $d['tempat'].', '.$d['tgl_lahir']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>Gender</b></left></td>
                <td><left><?php echo $d['jekel']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>Alamat</b></left></td>
                <td><left><?php echo $d['alamat'].', '.$d['kelurahan'].', '.$d['kecamatan'].', '.$d['kabupaten']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>Kontak</b></left></td>
                <td><left><?php echo $d['telp']; ?></left></td>
              </tr>
              <tr>
                <td><left><b>Email</b></left></td>
                <td><left><?php echo $d['email']; ?></left></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div><!-- col-lg-12 -->
    </div>
  </div>
</div><!-- /#page-wrapper -->
<?php include "views/footer.php"; ?>