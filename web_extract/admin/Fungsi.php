<?php
session_start();


function fungsi($kategori, $rak){
	global $link;
	$query		= " insert into kategori values ('','$kategori', '$rak') "  ;
	 
		if (mysqli_query($link,$query)) return true;
		else return false;
	
}



function cek_nama($kategori){
	global $link;
	$query 		= "select * from kategori where nama_kategori ='$kategori'";
	
	
	if ($hasil=mysqli_query($link,$query)){
		if (mysqli_num_rows($hasil) == 0){
			return true;
				}
			}
else return false;}



function barang($kodebuku,$judul,$nmpengarang,$penerbit,$kategori,$thnterbit,$pdf){
	global $link;
	
	$query		= " insert into judul values ('','$kodebuku', '$judul', '$nmpengarang', '$penerbit','$kategori', '$thnterbit','$pdf') "  ;
	
if (mysqli_query($link,$query)) 
		return true;
	
else return false;

}

?>
	  <script type="text/javascript">
			function konfirmasilogout(){
				 var result = confirm("Apakah yakin Logout?");


if (result ){
 window.location.href= "logout.php";
}
			}	


			
			function konfirmasihapus(){
				var result = confirm("Yakin Ingin Menghapus Data ?");


if (result){
 return true;
}
else return false;
			}
			
			</script>
			
			
			