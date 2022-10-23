<?php 

echo "<pre>";

/**
 * Memanggil file koneksi ke database 
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_koneksi.php');

$tabel = '12_database_dasar_prosedural_buku';
$id = 1; // ID dari baris yang akan diupdate
$judul = "Sebuah Seni Bersikap Bodo Amat";
$pengarang = "Mark Manson";


echo 'ID buku yang akan update: ' . $id, PHP_EOL;
echo 'judul yang akan diganti dengan: ' . $judul, PHP_EOL;
echo 'pengarang yang akan diganti dengan: ' . $judul, PHP_EOL;
echo 'Sedang mengupdate ...', PHP_EOL;

# Eksekusi query SQL Insert
$sql = "UPDATE $tabel SET judul = '$judul' WHERE id = '$id'";
$result  = $connect->exec($sql);
echo 'Baris yang terpengaruh: ' . $result . ' baris', PHP_EOL;

echo '</pre>';