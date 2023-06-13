<!-- Validasi Absen Keluar -->
<?php
if (isset($_POST['keluar'])){
    $update = "UPDATE ettendences SET chekout = '$time' WHERE idemployment = $idemployment AND tanggal = '$tgl' ";

    $clock_out = $db->query($update);
        if ($clock_out=== TRUE){
            session_destroy();
            header("location:index.php");
        }
}
?>
<!-- END VALIDASI Keluar -->