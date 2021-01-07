<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('c_admin')?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/c_d_akademik')?>">Dosen</a></li>
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
                <h3 class="card-title">Edit Dosen</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              <form action="<?php echo site_url('c_admin/update_dosen')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Dosen</label>
                    <input type="text" class="form-control" value="<?php echo $u->id_dosen ?>" id="exampleInputEmail1" readonly placeholder="Enter MataKuliah" name="id_dosen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" value="<?php echo $u->username ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP/NIK</label>
                    <input type="text" class="form-control" value="<?php echo $u->nip ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="nip">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PGKT</label>
                    <input type="text" class="form-control" value="<?php echo $u->PGKT ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="PGKT">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tugas Lain</label>
                    <input type="text" class="form-control" value="<?php echo $u->tugas_lain ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="tugas_lain">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" class="form-control" value="<?php echo $u->no_hp ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $u->alamat ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" value="<?php echo $u->email ?>" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="email">
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option value="<?php echo $u->status ?>"><?php echo $u->status ?></option>
                          <option value="Belum Isi">--Enter Status--</option>
                          <option value="PNS">PNS</option>
                          <option value="Non PNS">Non PNS</option>
                        </select>
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