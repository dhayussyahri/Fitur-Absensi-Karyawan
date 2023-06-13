<!-- Validasi Absen Masuk -->
<?php
    include("config/connection.php");

    //set time zone
    date_default_timezone_set("Asia/Jakarta");

    $tgl = date('Y-m-d');
    $time = date('H:i:s');
    $idemployment = $_SESSION['idemployment'];

    $sql = "SELECT * FROM ettendences WHERE idemployment = $idemployment";
    $result = $db->query($sql); 

    while ($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['tanggal'] . "</td>";
    echo "<td>" . $row['checkin'] . "</td>";
    
    if (empty($row['chekout']) && !empty($row['checkin']) && $tgl == $row['tanggal'] ){
        echo "<td>
        <form action ='' method='POST' onsubmit='return alert(`Terimakasih sudah bekerja hari ini !`)'>
        <button class='btn btn-primary' type='submit' name='keluar'>Keluar</button>
        </form>
        </td>";
    } else {
        echo "<td>" . $row['chekout'] . "</td>";
    }
        echo "<td></td>";
    }
?>
<!-- END VALIDASI MASUK -->
