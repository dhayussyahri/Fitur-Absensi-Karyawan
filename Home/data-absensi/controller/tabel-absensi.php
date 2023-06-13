<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr>
    <th> ID Employment </th>
    <th> Nama </th>
    <th> Role </th>
    </tr>
</thead>
    <?php 
            $sql="SELECT * FROM users WHERE idemployment";
            $result = $db->query($sql); 

            while ($row = $result->fetch_assoc()){
?>
        <tr>
            <td><a href="media.php?module=data-absensi&act=detail-absensi" class="text-primary"><?php echo $row['idemployment']; ?></a></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['role'] ?></td>
        </tr>

<?php }?>
</table>
