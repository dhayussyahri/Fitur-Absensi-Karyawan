<?php
ob_start();
session_start();
include('config/connection.php');
if(empty($_SESSION['idemployment'])){
	header('Location:index.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('layouts/style.php') ?>
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include('layouts/side-navbar.php') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include('layouts/top-navbar.php') ?>
                <?php include('content.php') ?>
            </div>
                <?php include('layouts/footer.php') ?>    
        </div>
    </div>
    <?php include('layouts/script.php') ?>
</body>
</html>
<?php } ?>