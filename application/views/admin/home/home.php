 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HOME</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM akademik")->result();
                                foreach ($jumlah as $jow) {
                echo "<h3>$jow->jumlah_data</h3>";                }
                                ?>

                <p>DATA AKADEMIK</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-chalkboard"></i>
              </div>
              <a href="<?php echo site_url('c_admin/c_d_akademik')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM dosen")->result();
                                foreach ($jumlah as $jow) {
                echo "<h3>$jow->jumlah_data</h3>";                }
                                ?>
                <p>DATA DOSEN</p>
              </div>
              <div class="icon">
               <i class="nav-icon fas fa-chalkboard-teacher"></i>
              </div>
              <a href="<?php echo site_url('c_admin/c_d_dosen')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM badlb")->result();
                                foreach ($jumlah as $jow) {
                echo "<h3>$jow->jumlah_data</h3>";                }
                                ?>
                <p>DATA BADLB</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-bookmark"></i>
              </div>
              <a href="<?php echo site_url('c_admin/c_d_badlb')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM tbad")->result();
                                foreach ($jumlah as $jow) {
                echo "<h3>$jow->jumlah_data</h3>";                }
                                ?>
                <p>DATA TBAD</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="<?php echo site_url('c_admin/c_d_tbad')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!--BAD LB-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary">BADLB</button>
              </div>
                  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Total SKS</th>
                    <th>Kelengkapan SKS</th>
                    <th>Status SKS</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->nip ?></td>
                    <td><?php echo $u->sks ?></td>
                    <td><?php
                    $k = 12;
                    echo $u->sks-$k ?></td>
                    <td class="project-state">
                      <?php
                      $x =$u->sks;
                      if ($x < '12' ) 
                          echo '<span class="badge badge-danger">SKS Kurang</span>';
                        elseif($x > '12' ){
                           echo '<span class="badge badge-warning">SKS Berlebih</span>';
                        }else
                        {
                          echo '<span class="badge badge-success">SKS PAS</span>';
                        }
                      ?>
                      </td>
                     <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="<?php echo site_url('c_admin/c_d_badlb')?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                        </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Total SKS</th>
                    <th>Kelengkapan SKS</th>
                    <th>Status SKS</th>
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


    <!--BAD T-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary">BADT</button>
              </div>

                  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Total SKS</th>
                    <th>Kelebihan SKS</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach($ddf as $u){ ?>
                  <tr>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->nip ?></td>
                    <td><?php echo $u->sks ?></td>
                    <td><?php
                    $k = 12;
                    echo $u->sks-$k ?></td>
                    <td class="project-state">
                      <?php
                      $x =$u->sks;
                      if ($x < '12' ) 
                          echo '<span class="badge badge-danger">SKS Kurang</span>';
                        elseif($x > '12' ){
                           echo '<span class="badge badge-success">SKS Berlebih</span>';
                        }else
                        {
                          echo '<span class="badge badge-success">SKS PAS</span>';
                        }
                      ?>
                      </td>
                     <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="<?php echo site_url('c_admin/c_d_tbad')?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                        </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Total SKS</th>
                    <th>Kelebihan</th>
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