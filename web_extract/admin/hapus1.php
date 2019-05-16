
<?php
$link  		= mysqli_connect("localhost","root","","web");
$ni			= $_GET['ni'];

$query	 	= "delete from kategori where id='$ni' ";
mysqli_query($link,$query);
header('location: inputkategori.php');
?>
