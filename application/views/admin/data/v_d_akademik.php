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
              <li class="breadcrumb-item active">Akademik</li>
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
                    TAMBAH DATA AKADEMIK</button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>MataKuliah</th>
                    <th>Jurusan</th>
                    <th>SKS</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                     <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->matakuliah ?></td>
                    <td><?php echo $u->jurusan ?></td>
                    <td><?php echo $u->sks ?></td>
                     <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo site_url('c_admin/edit_akademik/'.$u->id_akademik);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo site_url('c_admin/hapus_akademik/'.$u->id_akademik);?>">
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
                    <th>MataKuliah</th>
                    <th>Jurusan</th>
                    <th>SKS</th>
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
              <h4 class="modal-title">INSERT AKADEMIK</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!--`id_akademik`, `matakuliah`, `jurusan`, `semester`, `kelas`, `sks`SELECT * FROM `akademik`-->
            <div class="modal-body">
             <form action="<?php echo site_url('c_admin/simpan_akademik')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">MataKuliah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter MataKuliah" name="matakuliah">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                          <option>--Enter Semester--</option>
                          <option value="Sif">SIF</option>
                          <option value="Tif">TIF</option>
                          <option value="Te">TE</option>
                          <option value="Mater">Mater</option>
                        </select>
                  </div>
                  <!-- <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="semester">
                          <option>--Enter Semester--</option>
                          <option value="1">Semester 1</option>
                          <option value="2">Semester 2</option>
                          <option value="3">Semester 3</option>
                          <option value="4">Semester 4</option>
                          <option value="5">Semester 5</option>
                          <option value="6">Semester 6</option>
                          <option value="7">Semester 7</option>
                          <option value="8">Semester 8</option>
                          <option value="9">Semester 9</option>
                          <option value="10">Semester 10</option>
                          <option value="11">Semester 11</option>
                          <option value="12">Semester 12</option>
                          <option value="13">Semester 13</option>
                          <option value="14">Semester 14</option>
                        </select>
                  </div> -->

                      <!--<div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                          <option>--Enter Kelas--</option>
                          <option value="Kelas A">Kelas A</option>
                          <option value="Kelas B">Kelas B</option>
                          <option value="Kelas C">Kelas C</option>
                          <option value="Kelas D">Kelas D</option>
                          <option value="Kelas E">Kelas E</option>
                          <option value="Kelas F">Kelas F</option>
                          <option value="Kelas G">Kelas G</option>
                          <option value="Kelas H">Kelas H</option>
                          <option value="Kelas I">Kelas I</option>
                          <option value="Kelas J">Kelas J</option>
                          <option value="Kelas K">Kelas K</option>
                          <option value="Kelas L">Kelas L</option>
                          <option value="Kelas M">Kelas M</option>
                          <option value="Kelas N">Kelas N</option>
                          <option value="Kelas O">Kelas O</option>
                        </select>
                      </div>-->
                      <div class="form-group">
                    <label for="exampleInputEmail1">SKS</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter SKS" name="sks">
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