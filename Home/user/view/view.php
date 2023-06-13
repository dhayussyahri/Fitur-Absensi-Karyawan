 <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if(empty($_GET['act'])){ ?>
                <?php if($_SESSION['role'] == 'admin'){ ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DATA USER</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="media.php?module=user&act=tambah" class="btn btn-primary">Add User Account</a>
                        </div>
                        <?php } ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php include('Table-user.php') ?>
                            </div>
                        </div>
                        <?php
            }else{
              switch($_GET['act']){
                case "tambah":
          ?>
            <?php Include ('Home/user/view/tambah-user.php')?>

          <?php
          break;
          case "edit":
          ?>
          <?php include('Home/user/view/edit-user.php') ?>
          <?php }} ?>
          </div>
          </div>
                <!-- /.container-fluid -->