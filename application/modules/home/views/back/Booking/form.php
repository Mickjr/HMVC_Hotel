<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

<div class="col-lg-12 main-chart">
<div class="col-md-12">
          	<h4> Booking Room</h4>
	<div class="box box-info col-md-12 thumbnail">
		<!-- /.box-header -->
		<form class="form-horizontal row-border form_validation" id="form_validation" action="<?php echo base_url('roomtypes/save'); ?>" method="post">
			<div class="box-body pad">
            	<div class="form-group">
              		<label class="col-md-2 control-label">Customer Name <em>*</em> : </label>
              		<div class="col-md-9">
                		<select class="form-control" name="type_name">
                			<option value="0">select Customer</option>
                      <?php foreach ($bookingquery as $keyroom) {?>
                			<option value="<?php echo $keyroom->tid; ?>"><?php echo $keyroom->tname; ?></option>
                      <?php } ?>
                		</select>
              		</div>
            	</div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Type Name <em>*</em> : </label>
                  <div class="col-md-9">
                    <select class="form-control" name="type_name">
                      <option value="0">select type</option>
                      <?php foreach ($bookingquery as $keyroom) {?>
                      <option value="<?php echo $keyroom->tid; ?>"><?php echo $keyroom->tname; ?></option>
                      <?php } ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Guest <em>*</em> : </label>
                  <div class="col-md-9">
                    <select class="form-control" name="type_name">
                      <option value="0">select type</option>
                      <?php foreach ($bookingquery as $keyroom) {?>
                      <option value="<?php echo $keyroom->tid; ?>"><?php echo $keyroom->tname; ?></option>
                      <?php } ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Room Name <em>*</em> : </label>
                  <div class="col-md-9">
                    <select class="form-control" name="type_name">
                      <option value="0">select type</option>
                      <?php foreach ($bookingquery as $keyroom) {?>
                      <option value="<?php echo $keyroom->tid; ?>"><?php echo $keyroom->tname; ?></option>
                      <?php } ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Price <em>*</em> : </label>
                  <div class="col-md-9">
                <input type="hidden" value="" name="roomid">
                    <input name="roomname" class="form-control" type="text" placeholder="Room Price"  data-rule-required="true" data-msg-required="Room Price." disabled>
                  </div>
              </div>
              <div class="form-group">
            <label for="datestart" class="col-sm-2 control-label">Date Start<em>*</em></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="datestart" name="datestart" data-rule-required="true" data-msg-required="This field is required" placeholder="Enter Date Start" value="<?php echo @$rows[0]->datestart; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="dateend" class="col-sm-2 control-label">Date End<em>*</em></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="dateend" data-rule-required="true" data-msg-required="This field is required" name="dateend" placeholder="Enter Date End" value="<?php echo @$rows[0]->date_end; ?>">
            </div>
          </div>
				</div>
      <div class="box-footer">
          <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-11">
              <input type="submit" class="ui blue submit button btn btn-primary" value="Save">
              <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary"></i> Cancel</a>
              <br><br>
            </div>
          </div>
        </div>
			</div>
  		</form>
	<!-- /.box -->
	</div>
</div>
</div>
<!-- Row end -->

<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">
  	$(document).ready(function() {
      var checkin = $('#datestart').datepicker({
        format: 'yyyy/mm/dd',
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() );
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dateend')[0].focus();
      }).data('datepicker');

      var checkout = $('#dateend').datepicker({
        format: 'yyyy/mm/dd',
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function(ev) {
          checkout.hide();
      }).data('datepicker');
      //-----------End Date Rang ----------
      $('#timestart').timepicker({showMeridian: false});
      $('#timeend').timepicker({showMeridian: false});
  //Validation form
      $("#form_validation").validate();
  });

  </script>
