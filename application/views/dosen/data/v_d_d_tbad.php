<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Si Dosen</title>
        <link rel="icon" type="image/png" href="<?=base_url();?>/asset/login/images/uin1.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/style.css">

    <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/disc/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/asset/disc/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/asset/disc/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/disc/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/disc/dist/css/adminlte.min.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="<?=base_url();?>/asset/login/images/uin3.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('c_dosen')?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('c_dosen/dosen')?>">Data Dosen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('c_dosen/badlb')?>">BADLB Dosen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('c_dosen/tbad')?>">TBAD Dosen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('c_login/logout')?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Data TBAD Dosen</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Dosen TBAD</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Total SKS</th>
                    <th>Kelebihan SKS</th>
                    <th>Status</th>
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
                           echo '<span class="badge badge-warning">SKS Berlebih</span>';
                        }else
                        {
                          echo '<span class="badge badge-success">SKS PAS</span>';
                        }
                      ?>
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

    <!-- jquery -->
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/custom.js"></script>

    <!-- DataTables  & Plugins -->
<script src="<?=base_url();?>/asset/disc/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url();?>/asset/disc/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>