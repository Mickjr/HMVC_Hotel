<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hotel Services| Home</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

<style type="text/css">
		.body
        {
            background-image: url("<?php echo base_url('assets/images/background.jpg');?>") !important;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
            margin: 0px;
        }
       .thumbnail h2 .marquee
	       {
	       	min-height: 65px;
    		padding-top: 20px;
    		color: #03B2EC;
	       	font-family: 'Khmer OS Muol Light','Cuprum',Georgia,"Times New Roman",Times,Serif;
	       }
	    .thumbnail h2
	    	{
	    		margin: 0px;
	    		padding: 5px;
	    	}
</style>

<!-- script -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body class="body">
	<div class="container contain_background" >
		<div class="row rowheadtop">
			<div class="col-md-12 thumbnail">
				<img src="<?php echo base_url('assets/images/header.png'); ?>">
			</div>
		</div>
		<!-- <div  id="top" class=" shadowrow">
			<ul class="topmenu gprc">
				<li class="click0 active" id="act0"><a class="menu" href="<?php #echo base_url('home'); ?>"><i class=""></i>Home</a></li>
				<li class="click3" id="act3"><a class="menu" href="<?php #echo base_url('rooms'); ?>">Room</a></li>
				<li class="click4" id="act4"><a class="menu" href="<?php #echo base_url('contactus'); ?>">Contact</a></li>
				<li class="click5" id="act5"><a class="menu" href="<?php #echo base_url('about'); ?>">About</a></li>
			</ul>
		</div> -->
				<section class="ccblue">
					<div class="mainmenu">
					  <ul>
						<li><a href="<?php echo base_url('home'); ?>">Home<a></li>
						<li><a href="<?php echo base_url('room'); ?>">Room<a></li>
						<li><a href="<?php echo base_url('contactus'); ?>">Contact<a></li>
						<li><a href="<?php echo base_url('about'); ?>">About<a></li>
					  </ul>
					</div>
				</section>
		<!-- load content -->
		<div class="row contentcenter">
			<?php $this->load->view($content); ?>
		</div>

		<!-- load footer -->
		<div class="row rowfooter">
			<div class="row">
				<div class="col-md-12 thumbnail">
					<h2 class="text-left"><marquee class="marquee">HOTEL Service Booking Room</marquee></h2>
				</div>
			</div>
		</div>
	</div>
</body>


<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
<!-- <script type="text/javascript" src="<?php #echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
<script type="text/javascript" src="<?php #echo base_url('assets/js/jssor.slider.mini.js'); ?>"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- <script type="text/javascript" src="<?php #echo base_url('assets/js/jquery.easy-ticker.js'); ?>"></script>
<script type="text/javascript" src="<?php #echo base_url('assets/js/jquery.easy-ticker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php #echo base_url('assets/js/jquery.marquee.js'); ?>"></script> -->

    <!-- <script> -->
    <!-- // $(document).ready(function(){
    //     var pathArray = window.location.pathname.split( '/' );
    //     var secondLevelLocation = pathArray[2];
    //     //alert(secondLevelLocation);

    //     if (secondLevelLocation=='home') {
    //             $('ul li').removeClass('active');
    //             $('#act0').addClass('active');
    //         }else if(secondLevelLocation=='jobs'){
    //             $('ul li').removeClass('active');
    //             $('#act1').addClass('active');
    //         }else if(secondLevelLocation=='jobs'){
    //             $('ul li').removeClass('active');
    //             $('#act2').addClass('active');
    //         }else if(secondLevelLocation=='jobs'){
    //             $('ul li.').removeClass('active');
    //             $('#act3').addClass('active');
    //         }else if(secondLevelLocation=='contactus'){
    //             $('ul li').removeClass('active');
    //             $('#act4').addClass('active');
    //         }else if(secondLevelLocation=='abouts'){
    //             $('ul li').removeClass('active');
    //             $('#act5').addClass('active');
    //         };
    //     }); -->
    <!-- </script>

<script>
        $(document).ready(function () {


        });

    </script> -->

</html>

<?php
 // echo base_url().$loadsettingmd[0]->logo;
// echo"<pre>";
//  print_r($loadsettingmd);
 ?>
