<?php
include ('config/connection.php')
?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Action</th>
            </tr>
        </thead>
        <?php include('Home/User/controller/controller-user.php') ?>
    </table>