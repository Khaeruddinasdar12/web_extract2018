<?php
require_once"fungsi.php";
$link  = mysqli_connect("localhost","root","","web");

if(!isset($_COOKIE['ambil']) )
{ 
header('location:login.php');
}
$user		= $_COOKIE['ambil'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>KD</b>CW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KeDai</b>ComputerWorks</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         

          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="profil.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo '<p>'.$user.'</p>'; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">

                <p>
                 <?php echo '<p>'.$user.'</p>'; ?>
                 
                </p>
              </li>
             
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php echo '<p>'.$user.'</p>'; ?>
          
        </div>
      </div>
      <!-- search form -->
      <form action="home.php" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari nama admin">
          <span class="input-group-btn">
                <button type="submit" name="search" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><a href="home.php">BERANDA</a></li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-edit"></i> <span>PENGINPUTAN</span>
			 <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			</a>
		<ul class="treeview-menu">
            <li><a href="databuku.php"><i class="fa fa-circle-o"></i> Input Data Buku</a></li>
            <li class="active"><a href="kategori.php"><i class="fa fa-circle-o"></i> Input Kategori Buku</a></li>
          </ul>
 
        </li>
        <li class="treeview">
          <a href="data.php">
            <i class="fa fa-table"></i> <span>DATA BUKU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			</a>
		<ul class="treeview-menu">
            <li><a href="data.php"><i class="fa fa-circle-o"></i> Data-data buku</a></li>
            <li ><a href="datakategori.php"><i class="fa fa-circle-o"></i> Data kategori</a></li>
          </ul>
        </li>
		
		</ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="content-wrapper">
	<section class="content-header">
     <BR></BR>
	  </section>
	

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h2>SELAMAT DATANG DI PERPUSTAKAAN KEDAI</h2>

      <br>
      <br>
      <br>
      </div>

    </section>
   <section class="content">
   <div class="row">
   <div class="col-xs-12">  
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Administrator</h3>
            </div>
            <!-- /.box-header -->
          
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama admin</th>
                  <th>No. Hp</th>
                  
                </tr>
                </thead>
                <tbody>
				<?Php 


$link = mysqli_connect("localhost", "root", "", "web") or die(mysqli_error());
	if(isset($_POST['search'])) {
		$nama = $_POST['q'];
		$query = "SELECT * FROM admin WHERE nama LIKE '%".$nama."%'";
		$kirim = mysqli_query($link, $query) or die(mysqli_error());
	}else {$query 		= " select * from admin order by id asc";
		
	$kirim		= mysqli_query($link, $query);}
	while ($namapengguna = mysqli_fetch_array($kirim)){
		echo '<tr>
	<td> '.$namapengguna['id'] .' 		</td>
	<td> '.$namapengguna['nama'] .'		</td>
	<td> '.$namapengguna['no_telp'].'  	</td>
	
	
	</tr>';}
     ?>
             
                </tbody>
             
              </table>
          
            <!-- /.box-body -->
          </div>
 </div>     
 </div>   
</section> 
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
