	<style type="text/css">
	.col-md-12 .rowlabel
		{
			padding:0px;
		}
	.col-md-12 .form-group
		{
			margin:0px;
		}
	.col-md-12 .form-group .rowlabel
		{
			padding: 0px !important;
		}
	.col-md-12 .form-group .rowlabel label
		{
			padding: 0px !important;
			margin: 0px !important;
			font-size: 12px;
			line-height: 20px;
		}
	.col-md-12 .form-group .rowlabel .col-md-8
		{
			margin: 0px !important;
		}
	.col-md-12 ul
		{
			padding-left: 0px;
		}
	.col-md-12 a:hover
		{
			text-decoration: none !important;
			list-style-type: none;
			background-color: #eee !important;
		}
	.col-md-12 ul li
		{
			list-style-type: none;
			display: inline-block;
			min-width: 35px;
		}
	.labeldetail
		{
			color: #03B2EC;
			font-size: 13px !important;
			font-weight: bold;
		}
	.col-md-12 ul li a
		{
			font-size: 20px;
			text-align: center;
		}
	.col-md-12 ul li:hover
		{
			background-color: #fff;
		}
	.col-md-12 ul
		{
			border-left: 2px solid #03B2EC;
			margin: 0px;
			text-align: center;
		}
	i{background-color: #fff;}

	.col-md-12 ul a:hover
		{
			background-color: #fff !important;
		}
	</style>


<!-- show form booking -->
<br><div class="row">
	<div class="col-md-12 thumbnail">
		<h4 class="bookingtitle text-left">Booking Room</h4>
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-2">
					<select class="form-control">
						<option>Select bed...</option>
						<?php foreach ($rtype as $key) {?>
						<option value="<?php echo $key->tid; ?>"><?php echo $key->tname; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control">
						<option>Select type...</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control">
						<option>Select room...</option>
						<option>R001</option>
						<option>R002</option>
						<option>R003</option>
						<option>R004</option>
						<option>R005</option>
						<option>R006</option>
						<option>R007</option>
						<option>R008</option>
						<option>R009</option>
					</select>
				</div>
				<div class="col-md-2">
					<input type="date"  class="form-control"></input>
				</div>
				<div class="col-md-2">
					<input type="date" class="form-control"></input>
				</div>
				<div class="col-md-2">
					<input type="button" class="btn btn-info btnsubmit" value="Book Now"></input><br>
				</div>
			</div>
		</form>

	</div>
</div><br>
<!-- full image show welcome -->
<div class="row">
	<div class="thumbnail">
		<img src="<?php echo base_url('assets/images/homepage.png'); ?>">
	</div>
</div><br>

<div class="col-md-12">
	<div class="thumbnail hoteltitle">
		<h4>HOTEL Services</h4>
	</div>
	<div class="row thumbnail roomshow">
		<?php if (is_array($roomdata))
					{
						foreach ($roomdata as $key) {?>
		<div class="col-md-4 thumbnail">
			<div class="col-md-12 thumbnail">
				<img src="<?php echo base_url('assets/uploads/rooms').'/'.$key->iconpath; ?>">
			</div>
			<div class="col-md-12">
	        	<div class="form-group row">
	          		<div class="col-md-10">
	          			<div class="row rowlabel">
	          				<label class="col-md-2 control-label text-right control-label">Type :</label>
		                    <div class="col-md-8">
		                        <label class="col-md-12 control-label text-left control-label labeldetail"><?php echo $key->tname; ?> | <i class="fa fa-check-circle-o"></i></label>
		                    </div>
	          			</div>


	          			<div class="row rowlabel">
	          				<label class="col-md-2 control-label text-right control-label">Room :</label>
		                    <div class="col-md-8">
		                        <label class="col-md-12 control-label text-left control-label labeldetail"><?php echo $key->rname; ?> | <i class="fa fa-bank"></i></label>
		                    </div>
	          			</div>


	          			<div class="row rowlabel">
	          				<label class="col-md-2 control-label text-right control-label">Bed :</label>
		                    <div class="col-md-8">
		                        <label class="col-md-12 control-label text-left control-label labeldetail"><?php echo $key->bed; ?> | <i class="fa fa-bed"></i></label>
		                    </div>
	          			</div>

	          			<div class="row rowlabel">
	          				<label class="col-md-2 control-label text-right control-label">Prive :</label>
		                    <div class="col-md-8">
		                        <label class="col-md-12 control-label text-left control-label labeldetail"><?php echo $key->price; ?> <i class="fa fa-usd"> </i></label>
		                    </div>
	          			</div>
	          		</div>
	          		<div class="col-md-2">
	          			<ul>
	          				<li><a href="" title="Like"><i class="fa fa-thumbs-up"></i></a></li>
	          				<li><a href="" title="Share with Facebook"><i class="fa fa-share-alt-square"></i></a></li>
	          				<li><a href="" title="Share with Linkedin"><i class="fa fa-linkedin-square"></i></a></li>
	          				<li><a href="" title="Share with Google+"><i class="fa fa-google-plus"></i></a></li>
	          			</ul>
	          		</div>
	          	</div>
			</div>
		</div>
		<?php }
		}?>
	</div><br>
</div>
