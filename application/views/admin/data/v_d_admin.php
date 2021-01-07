 
 <!--Belum siap-->


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data ADMIN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('c_admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    TAMBAH DATA USER</button>
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Nama Lengkap</th>
                    <th>Nip</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->password ?></td>
                    <td><?php echo $u->status ?></td>
                    <td><?php echo $u->nama_lengkap ?></td>
                    <td><?php echo $u->nip ?></td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo site_url('c_admin/edit_admin/'.$u->id_admin);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo site_url('c_admin/hapus_admin/'.$u->id_admin);?>">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                    </td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Nama Lengkap</th>
                    <th>Nip</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">INSERT DATA DOSEN USER</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('c_admin/simpan_admin')?>" method="POST">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Dosen" name="username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama_lengkap" name="nama_lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP/NIK</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NIP" name="nip">
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Save changes</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->