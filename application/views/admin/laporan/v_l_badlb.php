 <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan BADLB</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('c_admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Laporan BADLB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
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
  </div>