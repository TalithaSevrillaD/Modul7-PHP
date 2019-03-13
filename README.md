# Modul7-PHP
# 1. Berikan contoh kode koneksi untuk ke database pd php?
$connect = mysqli_connect($host, $uname, $pass, $db);
# 2. Bagaimana cara anda membuat database pada phpMySQl!
- Buka halaman web PHPMyAdmin dengan mengetikkan 'localhost/PHPMyAdmin/'
- Klik new
- Ketikkan nama database yang akan dibuat
- Klik create
# 3. Berikan code query untuk menampilkan sebuah data yang ada pada ke database?
$query = "SELECT * FROM dosen" dimana dosen merupakan nama database
# 4.Berikan code query untuk mengupdate sebuah data yang ada pada ke database?
$query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = $id_dosen";
# 5. Berikan code query untuk menghapus sebuah data yang ada pada ke database?
$query = "DELETE FROM dosen WHERE id_dosen = $id_dosen";
# Screenshot Connect
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/connect.JPG?raw=true)
# Screenshot Form-create
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/form-create.JPG?raw=true)
# Screenshot Create
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/form-create2.JPG?raw=true)
# Screenshot setelah ditambahkan data
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/read-create.JPG?raw=true)
# Screenshot Form-update
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/form-update.JPG?raw=true)
# Screenshot Update
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/form-update2.JPG?raw=true)
# Screenshot setelah update data
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/read-edit.JPG?raw=true)
# Screenshot Delete
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/delete.JPG?raw=true)
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/delete1.JPG?raw=true)
# Screenshot setelah delete data
![alt](https://github.com/TalithaSevrillaD/Modul7-PHP/blob/master/read-hapus.JPG?raw=true)
