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
              <form action="<?php echo site_url('c_admin/update_akademik')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Akademik</label>
                    <input type="text" name="id_akademik" value="<?php echo $u->id_akademik ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter ID Akademik" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MataKuliah</label>
                    <input type="text" name="matakuliah" value="<?php echo $u->matakuliah ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter MataKuliah">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                          <option value="<?php echo $u->jurusan ?>"><?=$u->jurusan;?></option>
                          <option value="Sif">SIF</option>
                          <option value="Tif">TIF</option>
                          <option value="Te">TE</option>
                          <option value="Mater">Mater</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SKS</label>
                    <input type="text" name="sks" value="<?php echo $u->sks ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter MataKuliah">
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