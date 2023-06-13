<?php if(empty($_GET['act'])){ ?>
<!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DATA ABSENSI KARYAWAN</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Absensi Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php include('Home/data-absensi/controller/tabel-absensi.php') ?>
                            </div>
                        </div>
                    </div> 
                </div>
                <!--container-fluid -->
                <?php
    }else{
        switch($_GET['act']){
        case "detail-absensi":
        
        include ('config/connection.php');
        $detailid = "SELECT * from ettendences where id = '".$_GET['idemployment']."' order by id desc";
        $result = $db->query($detailid); 

        while ($row = $result->fetch_assoc()){
        ?>
        
        break;
        }?>
        <form action="<?php echo $aksi; ?>" method="POST">
            <div class="container-fluid">
                    <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">DATA ABSENSI KARYAWAN</h1>
                    <!-- Content 1 -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Karyawan</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Id Employment</td>
                                <td> : <?php echo $row['idemployment']; ?></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td> : </td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td> : </td>
                                </tr>
                            <tr>
                                <td> Alamat </td>
                                <td> : </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php } }?>
                <!-- End Off content 1 -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Absensi</h6>
                    </div>
                    <div class="card-body">
                    <!-- Table Absensi-->    
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Keluar</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        
                        <!-- END OF TABEL -->
                    </div>
                </div> 
            </div>
<?php }?>