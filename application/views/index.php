<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PP Notes - Dashboard</title>
        <meta name="description" content="PP Notes is a Web App for Pre-Production Meeting">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/favicon-16x16.png"> -->
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon2.ico">        
        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">        
        <script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>                       
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl-carousel/owl.theme.min.css"> -->
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="<?php echo base_url() ?>" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="<?php echo base_url() ?>assets/img/logo-big2.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            <!-- Search -->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                            <!-- End Search -->                           
                            <!-- User -->
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?php echo base_url() ?>assets/img/square.png" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="#" class="edit-profil"><i class="la la-user"></i></a>  
                                        <img src="<?php echo base_url() ?>assets/img/square.png" alt="..." class="rounded-circle">
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item text-danger"> 
                                            Hello <?php echo $this->session->userdata('employee_name'); ?> !
                                        </a>
                                    </li>
                                    <li><a href="#" class="dropdown-item"><?php echo $this->session->userdata('department'); ?></a></li>                                    
                                    <li class="separator"></li>                                    
                                    <li>
                                        <a href="<?php echo base_url('setting') ?>" class="dropdown-item no-padding-bottom"> 
                                            Settings
                                        </a>
                                    </li>                                    
                                    <li><a rel="nofollow" href="<?php echo base_url('login/logout') ?>" onclick="return confirm('Are You Sure ?')" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <!-- <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li> -->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                      <ul class="list-unstyled">                            
                            <li><a href="<?php echo base_url() ?>"><i class="la la-columns"></i><span>Dashboard</span></a></li>
                            <?php 
                              // $id = $this->session->userdata('iduser'); 
                              if (!empty($this->uri->segment(1))) {
                                  $uri = $this->uri->segment(1);
                              }else{ $uri = ""; }
                              $role = $this->session->userdata('level');
                              echo "<span class='heading'>".$role."</span>";
                              $query = $this->db->query("SELECT * FROM modul WHERE modul_parent='0' AND modul_role='$role' ORDER BY modul_id ASC");
                                  foreach ($query->result() as $main) {
                                      if ($main->modul_level == "1") {
                                          echo "<li><a href='".base_url($main->modul_url)."'><i class='".$main->modul_icon."'></i><span>".$main->modul_span."</span></a></li>";
                                      }elseif($main->modul_level == "0"){
                                          $c_act = $this->db->get_where('modul', array('modul_url' => $uri))->num_rows();
                                          if ($c_act > 0) {
                                              # code...
                                            $c_act = $this->db->get_where('modul', array('modul_url' => $uri))->row();
                                              if ($main->modul_id == $c_act->modul_parent) {
                                                  $mact = "class='active'";
                                                  $cact = "show";
                                              }else{
                                                $mact = "";
                                                $cact = "";  
                                              }
                                          }else{
                                              $mact = "";
                                              $cact = "";
                                          }
                                          $parent = $this->db->get_where('modul', array('modul_parent' => $main->modul_id));
                                          echo "<li ".$mact."><a href='#".$main->modul_url."' aria-expanded='false' data-toggle='collapse'><i class='".$main->modul_icon."''></i><span>".$main->modul_span."</span></a>
                                            <ul id='".$main->modul_url."' class='collapse list-unstyled pt-0 ".$cact."'>";
                                          foreach ($parent->result() as $sub) {
                                            if($this->uri->segment(1) == $sub->modul_url){ $act = "class='active'"; }else{ $act = "";}
                                            echo "<li><a ".$act." href='".base_url($sub->modul_url)."'>".$sub->modul_span."</a></li>";
                                          }
                                          echo "</ul></li>";
                                      }
                                  }
                              ?>
                        </ul>  
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <?php $this->load->view($content); ?>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer" >
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Developed By MAS Sumbiri Autonomation &copy;2019</p>
                            </div>
                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->                    
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

<div id="wait" style="display:none;width:auto;height:89px;position:absolute;top:50%;left:43%;padding:2px;"><img src='<?php echo base_url() ?>assets/ring.gif'/><br></div>

        <!-- <script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>                -->
        <script src="<?php echo base_url() ?>assets/vendors/js/base/core.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/bootstrap-select/bootstrap-select.min.js"></script>        
        <script src="<?php echo base_url() ?>assets/vendors/js/app/app.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/noty/noty.min.js"></script>                
        <script src="<?php echo base_url()?>assets/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/css/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/dp/dp.js"></script>
        <script src="<?php echo base_url()?>assets/js/dp/dp2.js"></script>
        <!-- <script src="<?php echo base_url() ?>assets/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/components/wizard/form-wizard.min.js"></script> -->
        <script>
            $(document).ajaxStart(function(){
                $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function(){
                $("#wait").css("display", "none");
            });
            $('.bst-select').on('change', function() {
                // alert( this.value );
                 var id = $(this).val();
                 $.ajax({
                    url : "<?php echo site_url('index.php/scheduling/get_style')?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data){
            
                        $('.item-style').text(data.style_item);
                        $('.customer-style').text(data.customer_name);
                        $('.desc-style').text(data.remarks);
                        // console.log(data);                                               
                    }
                  });
            });             
        </script>
    </body>
</html>
