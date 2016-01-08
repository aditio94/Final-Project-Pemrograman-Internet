<?php
// memasukkan koneksi
include "session.php";
// memanggil variable dan nilai – nilai nya .
$user = $_POST['user']; // $nama : variable $_POST : method yang kita pakai di form. [‘nama’] : name=”nama” yang tadi kita panggil
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat']; // 
$jeniskelamin = $_POST['jeniskelamin'];

$in = mysql_query("INSERT INTO user VALUES(NULL, '$user', '$password', '$nama', '$alamat', '$jeniskelamin')");
                                        if($in){
                                            echo '<div class="ok">SUCCESS: File berhasil di Upload! </div>';
                                            
                                        }else{
                                            echo '<div class="error">ERROR: Gagal upload file!</div>';
                                        }

?>

