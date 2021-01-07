<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Akademik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('c_admin')?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/c_d_akademik')?>">akademik</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Akademik</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->
              <?php foreach($user as $u){ ?>

              <form action="<?php echo site_url('c_admin/update_admin')?>" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Admin</label>
                    <input type="text" class="form-control" value="<?php echo $u->id_admin ?>" id="exampleInputEmail1" placeholder="Enter Nama Dosen" name="id_admin" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?php echo $u->username ?>" id="exampleInputEmail1" placeholder="Enter Nama Dosen" name="username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" value="<?php echo $u->password ?>" id="exampleInputEmail1" placeholder="Enter password" name="password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" value="<?php echo $u->nama_lengkap ?>" id="exampleInputEmail1" placeholder="Enter nama_lengkap" name="nama_lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP/NIK</label>
                    <input type="text" class="form-control" value="<?php echo $u->nip ?>" id="exampleInputEmail1" placeholder="Enter NIP" name="nip">
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
               <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>