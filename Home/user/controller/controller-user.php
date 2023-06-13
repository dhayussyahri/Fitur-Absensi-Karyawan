<?php 
    if($_SESSION['role']=='admin'){
    $sql="SELECT * FROM users WHERE idemployment";
    $result = $db->query($sql); 

    while ($row = $result->fetch_assoc()){
?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['role']; ?></td>
    <td>
        <a href="media.php?module=user&act=edit" class="btn btn-primary">Edit <a>
        <a herf="media.php?module=user&act=delete" class="btn btn-warning">Delete</a>
    </td>
    </tr>
<?php }}?>