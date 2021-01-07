 
 <!--Belum siap-->


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
              <li class="breadcrumb-item active">Dosen</li>
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
                    TAMBAH DATA DOSEN</button>
              </div>
              <!-- /.card-header -->
               <!-- username 
  nip
pgkt
tugas lain
no hp
alamat
email
status-->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Dosen</th>
                    <th>NIP/NIK</th>
                    <th>PGKT</th>
                    <th>Tugas Lain</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->nip ?></td>
                    <td><?php echo $u->PGKT ?></td>
                    <td><?php echo $u->tugas_lain ?></td>
                    <td><?php echo $u->no_hp ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->email ?></td>
                    <td><?php echo $u->status ?></td>
                    
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo site_url('c_admin/edit_dosen/'.$u->id_dosen);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo site_url('c_admin/hapus_dosen/'.$u->id_dosen);?>">
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
                    <th>Nama Dosen</th>
                    <th>NIP/NIK</th>
                    <th>PGKT</th>
                    <th>Tugas Lain</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Status</th>
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
              <h4 class="modal-title">INSERT DATA DOSEN</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                         
<!-- username 
  nip
pgkt
tugas lain
no hp
alamat
email
status-->

            <div class="modal-body">
            <form action="<?php echo site_url('c_admin/simpan_dosen')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Dosen" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP/NIK</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NIP/NIK" name="nip">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PGKT</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter PGKT" name="PGKT">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tugas Lain</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tugas Lain" name="tugas_lain">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No HP" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Alamat" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option value="Tidak Memilih">--Enter Status--</option>
                          <option value="PNS">PNS</option>
                          <option value="Non PNS">Non PNS</option>
                        </select>
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