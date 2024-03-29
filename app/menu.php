<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <ul class="nav navbar-nav navbar-left navbar-user">
      <a href="https://instagram.com/arditriheru">
        <img class="img-responsive" src="../images/logo2.png" width="100%" alt="RS Permata">
      </a>
    </ul>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar=-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-user-plus"></i> Registrasi <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="pendaftaran.php">Pendaftaran</a></li>
            <li><a href="laborat-tambah.php"> Poliklinik</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-plus"></i> Transaksi <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="laborat-tampil.php"> Hasil Lab</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs"></i> Referensi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="dokter-tambah.php">Dokter</a></li>
                <li><a href="psdi-petugas.php">Petugas</a></li>
                <li><a href="laborat-tarif.php">Tarif</a></li>
              </ul>
            </li>
            <!-- <li><a href="info.php"><i class="fa fa-question-circle"></i> Customer Service</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li>
              <a href="https://instagram.com/arditriheru" target="_blank">
                <span class="label label-success">ONLINE</span>
              </a>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle"></i> <?php echo $nama_login;?>&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                  <a href="logout.php"><i class="fa fa-power-off">
                  </i> Log Out</a>
                </li>
              </ul>
            </li>
          </ul>