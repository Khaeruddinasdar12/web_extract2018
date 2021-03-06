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
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
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
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo '<p>'.$user.'</p>'; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/avatar.png" class="img-circle" alt="User Image">

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
    
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><a href="home.php">BERANDA</a></li>
    
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-edit"></i> <span>PENGINPUTAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="databuku.php"><i class="fa fa-circle-o"></i> Input Data Buku</a></li>
            <li><a href="kategori.php"><i class="fa fa-circle-o"></i> Input Kategori Buku</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>DATA BUKU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data.php"><i class="fa fa-circle-o"></i> Data-data buku</a></li>
            <li><a href="datakategori.php"><i class="fa fa-circle-o"></i> Data kategori</a></li>
          </ul>
        </li>
		</ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INPUT DATA BUKU
      </h1>
  
    </section>

    <!-- Main content -->
    <section class="content">
<form role="form" method="post" action="databuku.php" enctype="multipart/form-data">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" class="form-control" maxlength="5" placeholder="Kode Buku" name="kodebuku" required>
                 
              </div>
       
              <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" placeholder="Judul Buku"  name="judulbuku" required>
                  
              </div>
			   <div class="form-group">
                <label>Nama Pengarang</label>
                <input type="text" class="form-control" placeholder="Nama Pengarang" name="namapengarang" required>
                  
              </div>
            
			   <div class="form-group">
                <label>Penerbit</label>
                <input type="text" class="form-control" placeholder="Penerbit"  name="kodepenerbit" required>
                  
              </div>
			  
			     
			   <div class="form-group">
                <label>Kategori</label>
				<select class="form-control" name="kategori"><?php
	$link = mysqli_connect("localhost", "root", "", "web") or die(mysqli_error());
	$kategori 	= "select id, nama_kategori from kategori";
	$data		= mysqli_query($link, $kategori);
	while($row= mysqli_fetch_array($data)){ 
    echo '<option value="'.$row['id'].'">  '.$row['nama_kategori'].'</option>';
	}?>
	</select>
                  
              </div>
			    
			   <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" class="form-control" placeholder="*Angka" maxlength="4" min="1990" name="thnterbit" required>
                    </div>
					
					
				<div class="form-group">
                <label>Input Pdf</label>
                <input type="file"  name="pdf" accept=".pdf" required>
              </div>
					  <div class="form-group">
                 <button type="submit" name="submit"class="btn btn-default">Submit</button>
              </div>
            </div> 
              </div>
            </div>
     
          </div>
   
        </div>
       
      </div>
     
 </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<?php
 if( isset($_POST['submit']) ){

	$kodebuku 	= $_POST['kodebuku'];
	$judul		= $_POST['judulbuku'];
	$nmpengarang= $_POST['namapengarang'];
	$penerbit 	= $_POST['kodepenerbit'];
	$kategori 	= $_POST['kategori'];
	$thnterbit	= $_POST['thnterbit'];
	$gambar		= $_FILES['pdf']['name'];
	
	move_uploaded_file($_FILES['pdf']['tmp_name'],"../image/".$gambar);
	 
	$query		= " insert into judul values('','$kodebuku', '$judul', '$nmpengarang', '$penerbit','$kategori', '$thnterbit','$gambar') "  ;
	if(!empty(trim($kodebuku)) && !empty(trim($judul)) && !empty(trim($nmpengarang)) && !empty(trim($penerbit)) 
		&& !empty(trim($kategori)) && !empty(trim($thnterbit) )){
	
	if (mysqli_query($link,$query)) {
		
	echo '<script> alert("Berhasil Menginput Data");
	window.location.href= "data.php";</script>';
	
		}
	else echo '<script> alert("Gagal Menginput Data");</script>';
		}
}

 if( isset($_POST['update']) ){
	$link 		= mysqli_connect("localhost", "root", "", "web") or die(mysqli_error());
	$data   	= $_SESSION['ambil'];
	$kodebuku 	= $_POST['kode'];
	$judul		= $_POST['judul'];
	$nmpengarang= $_POST['pengarang'];
	$penerbit 	= $_POST['penerbit'];
	$kategori 	= $_POST['kategorii'];
	$thnterbit	= $_POST['terbit'];
	$gambar		= $_FILES['pdf']['name'];
	move_uploaded_file($_FILES['pdf']['tmp_name'],"../image/".$gambar);
	$query		= "update judul set kode_buku='".$kodebuku."', judulbuku='".$judul."', namapengarang='".$nmpengarang."',
				kodepenerbit='".$penerbit."', kategori='".$kategori."', thn_terbit='".$thnterbit."' ,pdf='".$gambar."' 
				where kode_buku='".$data."'  ";
	$queryupdategambar = "update judul set kode_buku='".$kodebuku."', judulbuku='".$judul."', namapengarang='".$nmpengarang."',
				kodepenerbit='".$penerbit."', kategori='".$kategori."', thn_terbit='".$thnterbit."'  
				where kode_buku='".$data."'  ";
				
	if(!empty(trim($kodebuku)) && !empty(trim($judul)) && !empty(trim($nmpengarang)) && !empty(trim($penerbit)) 
		&& !empty(trim($kategori)) && !empty(trim($thnterbit) ) && !empty(trim($gambar) ) ){
	 
			if (mysqli_query($link,$query)){
				echo '<script>  alert("Berhasil Mengupdate Data"); 
				window.location.href="data.php" ;</script> ' ;
					}
		
		else echo '<script> alert("Gagal Mengupdate Data");</script>';}
		
	else if (!empty(trim($kodebuku)) && !empty(trim($judul)) && !empty(trim($nmpengarang)) && !empty(trim($penerbit)) 
		&& !empty(trim($kategori)) && !empty(trim($thnterbit) )  ){
		if (mysqli_query($link,$queryupdategambar)){
				echo '<script>  alert("Berhasil Mengupdate Data"); 
				window.location.href="data.php" ;</script> ' ;
					}
		
		else echo '<script> alert("Gagal Mengupdate Data");</script>';}
		
				
}
?>
</body>
</html>
