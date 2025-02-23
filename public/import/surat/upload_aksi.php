

<?php 
// menghubungkan dengan koneksi
include "../conf/config.php";
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filesiswa']['name']) ;
move_uploaded_file($_FILES['filesiswa']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filesiswa']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filesiswa']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nisn     = $data->val($i, 2);
	$no_peserta   = $data->val($i, 3);
	$namasiswa  = $data->val($i, 4);
	$thn_ajaran  = $data->val($i, 1);
	$ttl  = $data->val($i, 5);
	$kelas  = $data->val($i, 6);
	$jurusan  = $data->val($i, 7);
	$status  = $data->val($i, 8);
	{
		// input data ke database (table kelulusan)
		mysqli_query($mysqli,"INSERT INTO kelulusan values('','$thn_ajaran','$nisn','$no_peserta','$namasiswa','$ttl','$kelas','$jurusan','$status','','')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filesiswa']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>