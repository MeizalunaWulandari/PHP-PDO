<?php 

echo "<pre>";
/**
 * Memanggil file koneksi ke database 
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_koneksi.php');

$tabel = '12_database_dasar_prosedural_buku';

/**
 * fetch()
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai angka index
 * dan juga direpresentasikan sebagai nama kolom sebenarnya
 */

echo '<h2 id="mysqli-fetch-row">fetch(PDO::FETCH_NUM)</h2>', PHP_EOL;

# Menyiapkan variable berisi kode SQL
$sql = ("SELECT * FROM $tabel");
echo 'Kode SQL yang dijalankan: <strong>' . $sql . '</strong>', PHP_EOL;


# Eksekusi query SQL
$query = $connect->query($sql);
$row = $query->fetch();

echo PHP_EOL;
echo 'Hasil print_r(): ', PHP_EOL;
print_r($row);
echo PHP_EOL;

/**
 * fetch(PDO::FETCH_NUM)
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai angka index
 */

echo '<h2 id="mysqli-fetch-row">fetch(PDO::FETCH_NUM)</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$sql = ("SELECT * FROM $tabel");
$query = $connect->query($sql);

echo 'Kode SQL yang dijalankan: <strong>' . $sql . '</strong>', PHP_EOL;

# Eksikusi query SQL
$query = $connect->query($sql);
$row = $query->fetch(PDO::FETCH_NUM);


echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row[0], PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row[1], PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row[2], PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row[3], PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row[4], PHP_EOL;


/**
 * fetch(PDO::FETCH_ASSOC)
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai nama kolom sebenarnya
 */

echo '<h2 id="mysqli-fetch-row">fetch(PDO::FETCH_ASSOC)</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$sql = ("SELECT * FROM $tabel");

echo 'Kode SQL yang dijalankan: <strong>' . $sql . '</strong>', PHP_EOL;

# Eksikusi query SQL
$query = $connect->query($sql);
$row = $query->fetch(PDO::FETCH_ASSOC);


echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row['id'], PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row['judul'], PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row['deskripsi'], PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row['penulis'], PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row['penerbit'], PHP_EOL;


/**
 * fetch(PDO::FETCH_OBJ)
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * sebuah object yang atributnya memiliki nama kolom dengan data sebenarnya didalam
 */

echo '<h2 id="mysqli-fetch-row">fetch(PDO::FETCH_OBJ)</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL

$sql = ("SELECT * FROM $tabel");

echo 'Kode SQL yang dijalankan: <strong>' . $sql . '</strong>', PHP_EOL;

# Eksikusi query SQL
$query = $connect->query($sql);
$row = $query->fetch(PDO::FETCH_OBJ);


echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row->id, PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row->judul, PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row->deskripsi, PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row->penulis, PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row->penerbit, PHP_EOL;

echo '</pre>';

/**
 * Menampilkan banyak data sekaligus
 * --------------------------
 * Untuk menampilkan data, perlu dilakukan perulangan
 * yang dapat menjalankan kembali `mysqli_fetch` selama
 * ada baris data yang tersisa
 */
echo '<h2 id="table">Menampilkan seluruh isi tabel users ke tabel</h2>', PHP_EOL;

$sql = ("SELECT * FROM $tabel");
$query = $connect->query($sql);


echo "<table border=1 style='border-collapse: collapse'>";

echo "<tr>";
echo "<td>ID</td>";
echo "<td>Judul</td>";
echo "<td>Deskripsi</td>";
echo "<td>Penulis</td>";
echo "<td>Penerbit</td>";
echo "</tr>";

while ($row = $query->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['penulis'] . "</td>";
    echo "<td>" . $row['penerbit'] . "</td>";
    echo "<tr/>";
}