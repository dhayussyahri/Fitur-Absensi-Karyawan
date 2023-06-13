<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ADD USER ACCOUNT</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Account Detail</h6>
        </div>
    <div class="card-body">
                    <form action="<?php echo $aksi; ?>" method="POST">
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                    <!-- Form Group (ID EMPLOYMENT)-->
                        <div class="col-md-2">
                            <label class="small mb-1" for="inputFirstName">ID Employment</label>
                            <input type="text" class="form-control" name="idemployment" required="required" placeholder="Enter Id Employment">
                        </div>                          
                    </div>
                    <div class="row gx-3 mb-3">
                    <!-- Form Group (Full Name)-->
                        <div class="col-md-4">
                            <label class="small mb-1" for="inputLastName">Name</label>
                            <input type="text" class="form-control" name="name" required="required" placeholder="Enter Your Name">
                        </div>
                    <!-- Form Group (Password)-->
                        <div class="col-md-4">
                            <label class="small mb-1" for="inputLastName">Password</label>
                            <input type="password" class="form-control" name="password" required="required" placeholder="Enter Your Password">
                        </div>
                        <div class="col-md-4">
                            <label>Role</label>
                            <select class="form-control" name="role">
                                <option value="admin">Administrator</option>
                                <option value="kasir">kasir</option>
                                <option value="mekanik">Mekanik</option>
                    </select>
                        </div>`
                    </div>
                    <!-- Submit button-->
                        <button class="btn btn-primary" type="submit" tittle="simpan">Save</button>
                        <button class="btn btn-warning" type="button" onclick="window.history.back();">Back</button>
                    </form>
                </div>
</div>
