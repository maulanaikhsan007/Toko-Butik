<?php
$server= 'localhost'; 
$user= 'root';
$password= ''; 
$database= 'butix';
$konek= mysqli_connect($server,$user,$password,$database);
if ($konek){
		echo "";
	}else
		{							
		echo "GAGAL KONEK KE DATABASE";
}
?>
