<?php 
	include'koneksi.php';
	$nimz=$_GET['nim'];

	$query="DELETE FROM datamhs WHERE nim='$nimz'";
	 $hasil=mysqli_query($koneksi,$query);
	 echo"Data Kehapus";
 ?>