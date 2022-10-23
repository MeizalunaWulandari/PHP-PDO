<?php 

echo "<pre>";

/**
 * Memanggil file koneksi ke database 
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_koneksi.php');

$tabel = '12_database_dasar_prosedural_buku';
$id = 1; // ID dari baris yang akan dihapus

echo 'ID yang akan dihapus: ' . $id;

# Eksekusi query SQL Insert
$sql = "DELETE $tabel WHERE id = '$id'";
$result  = $connect->query($sql);
echo 'Baris yang terpengaruh: ' . $result . ' baris', PHP_EOL;