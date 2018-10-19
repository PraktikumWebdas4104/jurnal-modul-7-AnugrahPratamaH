<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length =25></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length=10></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki&nbsp;<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="MBTI">MBTI</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
					<option value="DKV">DKV</option>
					<option value="Administrasi Bisnis">Administrasi Bisnis</option>
			</select></td>
		</tr>	
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" length=25></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name ="moto"cols=20 rows=10></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="submit" name="daftar" value="Inputkan Data"></td>
		</tr>

	</table>

</form>
<?php 
		if(isset($_POST['daftar'])){
			include'koneksi.php';

			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$jeniskelamin=$_POST['jeniskelamin'];
			$prodi=$_POST['prodi'];
			$fakultas=$_POST['fakultas'];
			$asal=$_POST['asal'];
			$moto=$_POST['moto'];


			$query="INSERT INTO `datamhs` (`nama`,`nim`,`jenis_kelamin`,`prodi`,`fakultas`,`asal`,`moto`) VALUES ('$nama','$nim','$jeniskelamin','$prodi','$fakultas','$asal','$moto')";

			$hasil=mysqli_query($koneksi,$query);
			echo "Data Berhasil Ditambah, silahkan <a href='datamhs.php'>klik</a> untuk lanjut";
		}
 ?>