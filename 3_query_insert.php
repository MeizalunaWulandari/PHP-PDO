<?php 

echo "<pre>";

/**
 * Memanggil file koneksi ke database 
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_koneksi.php');

$tabel = '12_database_dasar_prosedural_buku';

$judul = 'Sebuah Rasa';
$deskripsi = 'Sebuah rasa yang pernah ada';
$penulis = 'Anissa Fakhira';
$penerbit = 'Erlangga';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;

# Eksekusi query SQL Insert
$sql = "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')";
$result  = $connect->exec($sql);
echo 'Baris data yang terpengaruh: ' . $result . ' baris', PHP_EOL;

$judul = 'Mulai Dengan bismillah';
$deskripsi = 'Apapun kerjanya mulailah dengan bismillah';
$penulis = 'Hanan Ahmad';
$penerbit = 'Elex Media Computindo';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;

# Eksekusi query SQL Insert
$sql = "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')";
$result  = $connect->exec($sql);
echo 'Baris data yang terpengaruh: ' . $result . ' baris', PHP_EOL;

echo "</pre>";