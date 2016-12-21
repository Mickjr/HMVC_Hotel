<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

<div class="col-lg-12 main-chart">
<div class="col-md-12">
          	<h4> Add New Type</h4>
	<div class="box box-info col-md-12 thumbnail">
		<!-- /.box-header -->
		<form class="form-horizontal row-border form_validation" id="form_validation" action="<?php echo base_url('roomtypes/save'); ?>" method="post">
			<div class="box-body pad">	
            	<div class="form-group">
              		<label class="col-md-2 control-label text-right">Type Name <em>*</em> : </label>
              		<div class="col-md-9">
       					<input type="hidden" value="<?php echo @$rows[0]->tid; ?>" name="roomt_id">
                		<input name="typename" class="form-control" type="text" value=" <?php echo @$rows[0]->tname; ?>" placeholder="Please enter type name"  data-rule-required="true" data-msg-required="Enter the type Name.">
              		</div>
            	</div>
				<div class="box-footer">
	    			<div class="col-md-12">
			            <div class="col-md-1"></div>
			            <div class="col-md-11">
			              <input type="submit" class="ui blue submit button btn btn-primary" value="Save">
			              <a href="<?php echo base_url('roomtypes'); ?>" class="btn btn-primary"></i> Cancel</a>
			            </div>
			         </div>
			        <div class="col-md-12"></div>
	  			</div>
			</div>
  		</form>
	<!-- /.box -->
	</div>
</div>
</div>
<!-- Row end -->
<script type="text/javascript">
  	$(document).ready(function() {
	//Validation form
  		$("#form_validation").validate();
	});

  </script>

