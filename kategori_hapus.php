<?php include'koneksi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_kategori where kode='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);
		header('location: kategori_add.php');

}

?>