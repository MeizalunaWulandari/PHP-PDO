<?php 

$db_driver  = 'mysql';
$db_host    = 'localhost';
$db_user    = 'root';
$db_pass    = '';
$db_name    = 'bellshade_php';

/**
 * Menghubungkan ke database dan menyimpan `instance`
 * hasil dari koneksi ke variabel `$connect`
 * Perlu diperhatikan pada `new PDO("mysql:host=$db_host;dbname=$db_name",$db_user, $db_pass)`
 * Hanya driver, host, dan nama database saja yang ada dalam `" "`
 * Selebihnya untuk user dan password dipisahkan dengan `,` setelahnya
 * `catch (PDOException $e)` menandakan jika error tidak akan ditampilkan pesan errornya
 * Melainkan kita akan tampilkan errornya manual didalamnya agar pesan error lebih mudah dibaca
*/

try {
    $connect = new PDO("$db_driver:host=$db_host;dbname=$db_name",$db_user, $db_pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    
    /**
     * Jika gagal fungsi `$e->getMessage()` akan menampilkan kesalahannya dengan jelas
    */

    echo 'Tidak dapat terhubung dengan database : '. $e->getMessage();
}
