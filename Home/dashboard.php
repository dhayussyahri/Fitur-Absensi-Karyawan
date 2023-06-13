<?php
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    header("location:../index.php?messege=Silahkan Login terlebih dahulu !");
}
if (isset($_POST['logout'])){
    session_destroy();
    header("location:../index.php?messege=anda telah logout !");
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DASHBOARD</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List Absensi</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
        <section>
        <!-- Message -->
        <?php if (isset($_GET['message'])){
        ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php echo $_GET['message'];  ?>
        </div>
        <?php }?>
        <!-- table absen -->
        <?php include("absensi.php");?>
        </br>
        </section>
                </div>
                </div>
            </div>
</div>