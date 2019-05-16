
<?php
$link  		= mysqli_connect("localhost","root","","web");
$ni			= $_GET['ni'];

$query_hapus= "select pdf from judul where kode_buku='$ni' ";
$hapus_pdf	= mysqli_query($link,$query_hapus);
$get_pdf_name= mysqli_fetch_assoc($hapus_pdf);
// die($get_pdf_name['pdf']);
$target		= "../image/".$get_pdf_name['pdf'];
unlink($target);

$query	 	= "delete from judul where kode_buku='$ni' ";
mysqli_query($link,$query);
header('location: data.php');
?>
