  <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>Sistem Informasi Lab (SILAB)</title>

          <!-- Bootstrap Core CSS -->
          <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

          <!-- MetisMenu CSS -->
          <link href="<?=base_url();?>assets/css/metisMenu.min.css" rel="stylesheet">

          <!-- Timeline CSS -->
          <link href="<?=base_url();?>assets/css/timeline.css" rel="stylesheet">

          <!-- Custom CSS -->
          <link href="<?=base_url();?>assets/css/startmin.css" rel="stylesheet">

          <!-- Morris Charts CSS -->
          <link href="<?=base_url();?>assets/css/morris.css" rel="stylesheet">

          <!-- Custom Fonts -->
          <link href="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
      </head>

      <body>

          <div id="wrapper">

              <!-- Navigation -->
              <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="<?=base_url();?>index.html">Sistem Informasi Lab (SILAB)</a>
                  </div>


                  <ul class="nav navbar-right navbar-top-links">
                      <li class="dropdown navbar-inverse">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="<?=base_url();?>#">
                              <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu dropdown-alerts">
                              <li>
                                  <a href="<?=base_url();?>#">
                                      <div>
                                          <i class="fa fa-comment fa-fw"></i> New Comment
                                          <span class="pull-right text-muted small">4 minutes ago</span>
                                      </div>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="<?=base_url();?>#">
                              <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="<?=base_url();?>#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                              </li>
                              <li><a href="<?=base_url();?>#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="<?=site_url('login/index')?>"><i class="fa fa-user">&nbsp;&nbsp;Logout</i></a></li>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <!-- /.navbar-top-links -->

                  <div class="navbar-default sidebar" role="navigation">
                      <div class="sidebar-nav navbar-collapse">
                          <ul class="nav" id="side-menu">
                              <li class="sidebar-search">
                                  <div class="input-group custom-search-form">
                                      <input type="text" class="form-control" placeholder="Search...">
                                      <span class="input-group-btn">
                                          <button class="btn btn-primary" type="button">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                  </div>
                                  <!-- /input-group -->
                              </li>
                              <li class="active"><a href="<?=site_url('data/index')?>"><i class="fa fa-home">&nbsp;&nbsp;Menu Utama</i></a></li>
                              <li class="active"><a href="<?=site_url('data/data_user')?>"><i class="fa fa-key">&nbsp;&nbsp;Master Data User</i></a></li>
                              <li class="active"><a href="<?=site_url('data/data_lokasi')?>"><i class="fa fa-key">&nbsp;&nbsp;Master Data Lokasi</i></a></li>
                              <li class="active"><a href="<?=site_url('data/data_prodi')?>"><i class="fa fa-key">&nbsp;&nbsp;Master Data Prodi</i></a></li>
                              <li class="active"><a href="<?=site_url('data/data_lapor')?>"><i class="fa fa-search">&nbsp;&nbsp;Data Pelaporan</i></a></li>
                              <li class="active"><a href="<?=site_url('data/data_aset')?>"><i class="fa fa-camera">&nbsp;&nbsp;Data Aset</i></a></li>
                          </ul>
                      </div>
                  </div>
              </nav>

              <div id="page-wrapper">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-lg-12">
                          </div>
                          <!-- /.col-lg-12 -->
                      </div>
                      <!-- /.row -->
                      <!-- /.row -->
                          <!-- /.panel-body -->
                          <div id="beranda">
                  <?php $this->load->view($beranda);?>
                  </div>
                  <div class="main-content"></div>
                      </div>
                      <!-- /.panel -->
                  </div>
                  <!-- /.col-lg-8 -->
              </div>

              <!-- /.panel-heading -->
              <!-- /.panel-body -->
          </div>
          <!-- /.panel-footer -->
          </div>
          <!-- /.panel .chat-panel -->
          </div>
          <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
          </div>
          <!-- /#page-wrapper -->

          </div>
          <!-- /#wrapper -->

          <!-- jQuery -->
          <script src="<?=base_url();?>assets/js/jquery.min.js"></script>

          <!-- Bootstrap Core JavaScript -->
          <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

          <!-- Metis Menu Plugin JavaScript -->
          <script src="<?=base_url();?>assets/js/metisMenu.min.js"></script>

          <!-- Morris Charts JavaScript -->
          <script src="<?=base_url();?>assets/js/raphael.min.js"></script>
          <script src="<?=base_url();?>assets/js/morris.min.js"></script>
          <script src="<?=base_url();?>assets/js/morris-data.js"></script>

          <!-- Custom Theme JavaScript -->
          <script src="<?=base_url();?>assets/js/startmin.js"></script>
          <script type="text/javascript">
      $(document).ready(function() {

        return false;
      });
    </script>
    <script type="application/javascript">
      $(document).ready(function() {
        $("#date-popover").popover({
          html: true,
          trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
          $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
          action: function() {
            return myDateFunction(this.id, false);
          },
          action_nav: function() {
            return myNavFunction(this.id);
          },
          ajax: {
            url: "show_data.php?action=1",
            modal: true
          },
          legend: [{
              type: "text",
              label: "Special event",
              badge: "00"
            },
            {
              type: "block",
              label: "Regular event",
            }
          ]
        });
      });

      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
    </script>
      </body>

      </html>