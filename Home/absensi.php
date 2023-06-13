<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr>
    <th> Tanggal </th>
    <th> Jam Masuk  </th>
    <th> Jam Keluar </th>
    <th> Performance </th>
    </tr>
</thead>    
<?php include("Home/controller-absen/absen-masuk.php") ?>
</table>
<form action="media.php?module=action" method="POST">
    <button class="btn btn-primary" type="submit" name="absensi">ABSEN SEKARANG</button>
</form>
<?php include("Home/controller-absen/absen-keluar.php") ?>