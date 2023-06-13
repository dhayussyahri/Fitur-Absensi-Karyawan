<?php
include("config/connection.php");

date_default_timezone_set("Asia/Jakarta");
$tgl = date('Y-m-d');
$chekin = date('H:i:s');
$idemployment = $_SESSION['idemployment'];

if (isset($_POST['absensi'])){
    $chek_absensi = "SELECT tanggal FROM ettendences WHERE idemployment = $idemployment AND tanggal='$tgl'";
    
    $chek = $db->query($chek_absensi);
    
    if ($chek->num_rows > 0) {
        header("location:media.php?message=Hari ini anda sudah absen !");
    } else {
       $sql = "INSERT INTO ettendences (id, idemployment, tanggal, checkin, chekout) VALUES (null, $idemployment, '$tgl', '$chekin',null)";
    
        $result = $db->query($sql);
        if ($result === TRUE){
           header("location:media.php?message=Anda Berhasil Absen !");
        } else {
            header("location:media.php?message=Absen Gagal !");
        }
    }
}