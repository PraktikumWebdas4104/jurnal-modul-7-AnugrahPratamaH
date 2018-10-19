<form method="POST"><center>Cari : &nbsp;<input type="text" name="cari" length=10>&nbsp;<input type="submit" name="nyari"></center></form>
<br><br><br>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto Hidup</th>
		<th>Aksi</th>
	</tr>

<?php 
		if(isset($_POST['nyari'])){
			
			include 'koneksi.php';
			$nim=$_POST['cari'];


			$query="SELECT nama,nim FROM datamhs WHERE nim =$nim";

			$hasil=mysqli_query($koneksi,$query);	
			$no=1;
			while($row=mysqli_fetch_array($hasil)){
		
			echo"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href='delete.php'>Delete</a></td>
			</tr>";
			$no++;			
		}


		}else{
		
			echo"<center>";
		include'koneksi.php';
		$query="SELECT * FROM datamhs ";
		$hasil=mysqli_query($koneksi,$query);
		$no=1;
		while($row=mysqli_fetch_array($hasil)){
		
		echo"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
				<td>$row[5]</td>
				<td>$row[6]</td>
				<td><a href='delete.php'>Delete</a></td>
			</tr>";
			$no++;			
		} 
		echo "</center>";
		}  
?>
</table>