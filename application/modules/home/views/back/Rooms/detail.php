<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

<div class="col-lg-12 main-chart">
<div class="col-md-12">
          	<h4> Room Detail</h4>
	<div class="box box-info col-md-12 thumbnail">
		<!-- /.box-header -->
		<form class="form-horizontal row-border form_validation" id="form_validation" action="<?php echo base_url('rooms/save'); ?>" method="post">
			<div class="box-body pad">
            	<fieldset disabled>
				<div class="form-group">
              		<label class="col-md-2 control-label">Room <em>*</em> : </label>
              		<div class="col-md-9">
       					<input type="hidden" value="" name="roomid">
                		<input name="roomname" class="form-control" type="text" value="<?php echo $rows[0]->rname; ?>" placeholder="Please enter room name"  data-rule-required="true" data-msg-required="Enter the room Name.">
              		</div>
            	</div>

            	<div class="form-group">
              		<label class="col-md-2 control-label">Bed <em>*</em> : </label>
              		<div class="col-md-9">
       					<input type="hidden" value="" name="roomid">
                		<input name="roomname" class="form-control" type="text" value="<?php echo $rows[0]->bed; ?>" placeholder="Please enter room name"  data-rule-required="true" data-msg-required="Enter the room Name.">
              		</div>
            	</div>

            	<div class="form-group">
              		<label class="col-md-2 control-label">Price <em>*</em> : </label>
              		<div class="col-md-9">
       					<input type="hidden" value="" name="roomid">
                		<input name="roomname" class="form-control" type="text" value="<?php echo $rows[0]->price; ?>" placeholder="Please enter room name"  data-rule-required="true" data-msg-required="Enter the room Name.">
              		</div>
            	</div>

            	<div class="form-group">
              		<label class="col-md-2 control-label">Type <em>*</em> : </label>
              		<div class="col-md-9">
       					<input type="hidden" value="" name="roomid">
                		<input name="roomname" class="form-control" type="text" value="<?php echo $rows[0]->tname; ?>" placeholder="Please enter room name"  data-rule-required="true" data-msg-required="Enter the room Name.">
              		</div>
            	</div>
            	<!-- logo -->
            	<div class="form-group">
                  <label for="short_description" class="col-sm-2 control-label">Photo</label>
                  <div class="col-sm-10">
                      <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div id="wrapper-tmp_logo">
                              <?php
                                $path = isset($rows[0]->iconpath)? "assets/uploads/rooms/".@$rows[0]->iconpath:'';
                                $serverPath = $path;

                              ?>
                                <?php if(file_exists($path)&& strlen($rows[0]->iconpath)) {
                                // $path   = $path.'?dummy='.rand();
                                $img = "<img src='".base_url()."/$path' class='img-thumbnail img-gallery' />";
                              }
                              else{
                                $path = '';
                                $img = "<img src='".base_url()."assets/images/default.png?"."' class='img-thumbnail img-gallery' />"; ;
                              }
                              ?>
                            <?php echo $img; ?>
                          </div>
                        </div>
                      </div>
                    <br>
                    <div class="clearfix"></div>
                    <a id="btn-gallery1" href="#" class="btn btn-info browse btn-sm" data-pro="tmp_logo" style="vertical-align: top;" onclick="return false;">
                        <i class="glyphicon glyphicon-folder-close"></i> Browse
                        <img id="ajax-tmp_logo" style="display:none;" src="<?php echo base_url('assets/images/progress-small.gif'); ?>">
                    </a>
                  <a href="javascript:void(0);" class="btn btn-primary btn-remove btn-sm" style="vertical-align: top;" data-field="iconpath" data-path="<?php echo $serverPath; ?>"  data-tmp="hidden_tmp_logo">
                        <i class="glyphicon glyphicon-remove-sign"></i> Remove
                  </a><br><br>
                </div>
				</div>
			</div>
			<div class="box-footer">
    			<div class="col-md-12">
            <div class="col-md-1"></div>
  		</fieldset>
            <div class="col-md-11">
              <a href="<?php echo base_url('rooms'); ?>" class="btn btn-primary"></i> Cancel</a>
            	<br><br>
            </div>
          </div>
  			</div>

  			<input type="hidden" name="exist_tmp_logo" value="<?php echo @$rows[0]->iconpath; ?>">
			<input type="hidden" name="tmp_logo" value="<?php echo @$rows[0]->iconpath; ?>" id="hidden_tmp_logo">
  		</form>
      <form class="ajaxForm"  style="display:none;" method="post" action="<?php echo back_url('rooms/uploadimage');?>">
        <input type="file" name="file" id="file">
        <input type="hidden" name="fileName" data-pro="" id="hidden-file-id">
      </form>
	<!-- /.box -->
	</div>
</div>
</div>
<!-- Row end -->

<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">
  	$(document).ready(function() {

      var noImage = '<img src="<?php echo base_url("assets/images/default.png"); ?>" class="img-thumbnail img-gallery">';
      // CKEDITOR.replace('content');
    $('.browse').click(function(){
      var fileId = $(this).attr('data-pro');
      $('#hidden-file-id').val(fileId);
      $('#file').click();
    });
    $('input[type="file"]').change(function(){
      $(this).parent().submit();
    });
    $('.ajaxForm').submit(function(e){
      e.preventDefault();
      var fileName  =   $(this).find('#hidden-file-id').val();
      // var ldata=$(this).find('#file').val();
      // alert(ldata);

      $(this).ajaxSubmit({
          dataType:'json',
          success:function(data) {
          /*$('#'+ajaxLoaderId).hide(); */
          //alert('hello');
        },
        complete: function(response) {
          var rp = $.parseJSON (response.responseText);
          if(rp.error==false){
            var tmpId  = rp.tmp_name;
            $('#wrapper-tmp_logo').find(".img-thumbnail").attr('src',rp.file_name);
            $('#hidden_tmp_logo').val(rp.file_path);
            /*var countImage = $('#wrapper-'+tmpId).find('img.img-poster').length;
            console.log("count:"+countImage);
            if(countImage==0){
              var image =$('<img class="img-thumbnail" src="'+rp.file_name+'">');
              console.log(image);
              console.log(tmpId);
              $('#wrapper-'+tmpId).find('.img-thumbnail').remove();

              $('#wrapper-'+tmpId).find('.clearfix').before(image);
            } else {
              $('#wrapper-'+tmpId).find('.img-thumbnail').attr('src',rp.file_name);
            }*/
            //$('#ajax-'+fileName).hide();
            $('.btn-remove').attr('data-path',"assets/uploads/rooms/"+rp.file_path);
          }else {
            //show_notification(rp.errorMsg);
          }
          //$('#ajax-'+fileName).hide();
        },
        error:function(error){
          //$('#ajax-'+fileName).hide();
        }
          });
    });
    var confirmMessage = 'Are you sure ?';
    $('.btn-remove').click(function(){
      var fieldName = $(this).attr('data-field');
      var path    = $(this).attr('data-path');
      var tmp     = $(this).attr('data-tmp');
      var that    = this;
      var id      = $('#hd_id').val();
      function clearImageData()
      {
        $('#'+tmp).val('delete');
        $(that).parent().find('img').remove();
        var count = $(that).parent().find('div.img-thumbnail').length;
        if(count==0)
        {
          $(that).parent().find('#wrapper-tmp_logo').append(noImage);
        }
      }
      if(confirm(confirmMessage)) {
        clearImageData();
      }
    });

  //Validation form
      $("#form_validation").validate();
  });

  </script>
