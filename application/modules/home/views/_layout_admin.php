<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hotel Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.gritter.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleback.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-responsive.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php #echo base_url('assets/css/jquery.dataTables.min.css'); ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/chart-master/Chart.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" class="include" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.form.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/zabuto_calendar.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/datepickertime/bootstrap-datepicker.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/datepickertime/bootstrap-timepicker.min.js'); ?>"></script>
  
  <style type="text/css">
      div.DTTT { margin-bottom: 0.5em; float: right; }
      div.dataTables_wrapper { clear: both; }
      
  </style>

</head>
<body>
	<section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>DASHGUM Hotel Sevices</b></a>
            <!--logo end-->
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <div class="empty">
              	
              </div>
              <ul class="navmenu">
		        <li id="menuadmin" class="active" style="width: 100%"><a href=" <?php echo base_url('dashboard'); ?>" target="" class="text-left menupaddingleft"> <i class="fa fa-dashboard"> </i> Dashoard</a></li>

		        <li id="menuadmin" style="width: 100%"><a href="<?php echo base_url('rooms'); ?>" target="" class="text-left menupaddingleft"> <i class="fa fa-desktop"> </i>  Room</a></li>

		        <li id="menuadmin"  style="width: 100%"><a href=" <?php echo base_url('roomtypes'); ?>" target="" class="text-left menupaddingleft"> <i class="fa fa-th"> </i>  Room Type</a></li>

		        <li id="menuadmin" style="width: 100%"><a href="<?php echo base_url('booking'); ?>" target="" class="text-left menupaddingleft"> <i class="fa fa-book"> </i> Booking</a></li>

		        <li id="menuadmin" style="width: 100%"><a href="<?php echo base_url('users'); ?>" target="" class="text-left menupaddingleft"> <i class="fa fa-users"> </i>  Users</a></li>

		        <li id="menuadmin" style="width: 100%"><a href="" target="" class="text-left menupaddingleft"> <span class="glyphicon glyphicon-off"> </span> Logout</a></li>
		    </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <?php $this->load->view($content); ?>
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  
              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <!-- <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  </section>
</body>
</html>

	<script type="text/javascript">
	// $(document).ready(function(){
 //        var pathArray = window.location.pathname.split( '/' );
 //        var secondLevelLocation = pathArray[2];
 //        // alert(secondLevelLocation);
	//         if (secondLevelLocation=='rooms') {
	//             document.getElementById('titlefunction').innerHTML = "Room";
	//         }else if(secondLevelLocation=='dashboard'){
	//             document.getElementById('titlefunction').innerHTML = "Dashoard";
	//         }else if(secondLevelLocation=='roomtypes'){
 //            document.getElementById('titlefunction').innerHTML = "Room Type";
 //          }else if(secondLevelLocation=='users'){
 //            document.getElementById('titlefunction').innerHTML = "Users";
 //          }
 //        });
    </script>
  
  <script type="application/javascript">
        $(document).ready(function () {

            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "<?php echo base_url('0'); ?>",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        // -------------------datatable-----------------------
       $(document).ready(function() {
		    $('#example').DataTable();
		} );
        // --------------------------end datable-----------------
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>