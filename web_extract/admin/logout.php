<?php
session_start();

?><script> result= confirm("Yakin Akan Logout ??");

if (result == true){
<?php	
session_destroy();

setcookie('ambil','',time()-3600);
header ('Location: login.php');?>
}
else return false;
</script>';






<script type="text/javascript">
			function konfirmasi(){
				result = confirm("Apakah yakin akan menghapus data ini?");


if (result == true)
return true ;
else
return false ;
			
				}
				
		</script>