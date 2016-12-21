<style type="text/css">
    .info
        {
            background-color: rgba(123, 229, 183,2) !important;
            width: 400px;
            display: inline-block;
            margin-left: 300px;
            padding-top: 7px;
            height: 40px;

            /*float: right;*/
        }
</style>

<div class="col-lg-12 main-chart">
<div class="col-md-12">
    <h4 id="titlefunction">User</h4>
<br>
    <a href="<?php echo base_url('users/add'); ?>" class="btn btn-primary"> Add New</a>
    <?php if($this->session->flashdata('message')){?>

        <div class="alert alert-success text-center info">      
          <?php echo $this->session->flashdata('message')?>
        </div>
      <?php } ?>
<br>
<br>
</div>
<div class="col-lg-12 thumbnail">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="2%">No</th>
                <th width="20%">Customer Name</th>
                <th width="5%">E-Mail</th>
                <th width="20%">Phone</th>
                <th width="5%">National ID</th>
                <th width="5%">Passport</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $i='1'; ?>
            <?php foreach ($queryusers as $key) {?>
            <tr>
                <td width="10%"><?php echo $i++; ?></td>
                <td width="15%"><?php echo $key->uName; ?></td>
                <td width="5%"><?php echo $key ->email; ?></td>
                <td width="5%"><?php echo $key ->phone; ?></td>
                <td width="5%"><?php echo $key ->national_ID; ?></td>
                <td width="5%"><?php echo $key ->passport; ?></td>
                <td width="10%">
                    <a href="<?php echo base_url('users/detail').'/'.$key->uid; ?>" role="button" class="card_remove tableicon" title="view page"><input type="text" name="view"></input><i class="fa fa-search-plus"></i></a> | 
                    <a href="<?php echo base_url('users/edit').'/'.$key->uid; ?>" class="action tableicon" title="Edit room type"><input type="text" name="edit"></input><i class="fa fa-pencil-square-o"></i></a> | 
                    <a href="#" class="action delectclick tableicon"  data-id="<?php echo $key->uid; ?>" title="Delete room type"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- load popup message -->
<input type="text" name="pageid" id="id">
   <div class="modal fade modal_delete in" aria-hidden="false" style="display: none;">
        <div class="modal-dialog" style="width:450px; margin-top:260px;">
            <div class="modal-content">
                  <div class="modal-header" style="padding: 10px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>                  
                    <h4 class="modal-title" style="color:#c9302c;"><i class="glyphicon glyphicon-trash"></i> Delete Partner</h4>
                  </div>
                  <div class="modal-body" style="padding: 10px;">
                    <p>Are you sure?</p>
                  </div>
                  <div class="modal-footer" style="padding: 10px;">
                    <a class="btn btn-danger" id="btn_delete"><span class="glyphicon glyphicon-ok"></span> Delete </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove-circle"></i> Cancel</button>
                  </div> 
            </div>
        </div>
    </div>


<script type="text/javascript">
    // ----------------message timeout---------
      setTimeout(function(){ 
        $('.info').fadeOut();}, 4000);

      $('.delectclick').click(function(){
            var roomtypeid = $(this).attr('data-id');
            // alert(roomtypeid);
            $("#id").val(roomtypeid);
            $('.modal_delete').modal();
          });
          $("#btn_delete").click(function(){
            var id = $("#id").val();
            // alert(id);
            $.ajax({
               url: "<?php echo base_url('back/users/delete'); ?>",
               data: {"id":id},
               type: 'POST',
               success: function(result) {
                  location.reload();
              }
            })
          });
</script>