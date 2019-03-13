<!DOCTYPE html>
<html>
	<head>
		<title>Form Create</title>
	</head>
	<body>
		<h1><b>Tambah Data Dosen</b></h2>
		<form action = "create.php" method = "POST">
			<table>
				<tr>
					<td>Nama dosen</td>
					<td>:</td>
					<td><input type="text" id="a" name="nama_dosen"></td>
				</tr>
				<tr>
					<td>No.Telepon</td>
					<td>:</td>
					<td><input type="text" id="b" name="telp"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
					<input type="submit" value="Simpan" name="btnSimpan">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>