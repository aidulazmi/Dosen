<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit BADLB</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('c_admin')?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/c_d_badlb')?>">BAD LB</a></li>
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
                <h3 class="card-title">Edit BADLB</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              <form action="<?php echo site_url('c_admin/update_badlb')?>" method="post">
                 <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">ID BAD LB</label>
                    <input type="text" class="form-control" value="<?php echo $u->id_bad_lb ?>" id="badlb" placeholder="BADLB" name="id_bad_lb" readonly>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" value="<?php echo $u->nip ?>" id="NIP" placeholder="NIP" name="nip" readonly>
                  </div>

                  <div class="form-group">
                        <label>MataKuliah</label>
                        <select class="form-control" name="matakuliah" id="matakuliah">
                          <option value="<?php echo $u->matakuliah ?>"><?php echo $u->matakuliah ?></option>
                          <option value="">No Selected</option>
                        <?php                                
                                                   foreach ($dd_bidang1 as $row) {  

                                                      echo "<option value='".$row->matakuliah."'>".$row->matakuliah."</option>";
                                                }
                                                ?>
                        </select>
                  </div>
<div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="semester">
                          <option value="<?php echo $u->semester ?>"><?php echo $u->semester ?></option>
                          <option>--Enter Semester--</option>
                          <option value="1">Semester 1</option>
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
                  </div>
                  <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                          <option value="<?php echo $u->kelas ?>"><?php echo $u->kelas ?></option>
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
                      </div>
                </div>
                <!-- /.card-body -->
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