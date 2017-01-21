<?php// print_r($device_list);die;?>
<!--<script src="<?php echo base_url();?>/assets/js/model.js"></script>
<script src="<?php echo base_url();?>/assets/js/model1.js"></script>-->
<link href="<?php echo base_url();?>/assets/css/css.css" rel="stylesheet" type="text/css" />


<script>
        function delete_record(id)
    {
    var r = confirm("Are you sure to Delete!");

        if (r == true) {
        var id = id;
        $.ajax({
            url:"<?php echo site_url().'/Member/delete_member/';?>"+id,
            success:function(data)
            {           
            $('#delrow'+id).remove();
            }});
        }
    }
</script> 


<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                                            <center><h4 class="m-t-0 header-title"><b>Our Member(s)</b></h4></center>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                                            <table class="table">
									<thead>
										<th>Member Name </th>
										<th>Designation</th>
										<th>Gender</th>
										<th>Relation</th>
										<th>Email </th>
										<th>Phone Number</th>
										<th>Pan no.</th>
                                                                                <th style="text-align: center">Action</th>
									</thead>
									<tbody>
									<?php if(count($member_list)){
									foreach($member_list as $each){ ?>
									<tr id="delrow<?php echo $each['int_member_id']?>">
									<td><?php echo $each['txt_name']; ?></td>
									<td><?php echo $each['txt_designation']; ?></td>
									<td><?php echo $each['txt_gender']; ?></td>
									<td><?php echo $each['txt_relation']; ?></td>
									<td><?php echo $each['txt_email']; ?></td>
									<td><?php echo $each['txt_phone']; ?></td>
									<td><?php echo $each['txt_pan_no']; ?></td>
									<td><a href="<?php echo site_url().'/Member/edit_member/'.$each['int_member_id'] ?>" class="btn btn-primary">Edit</a> <a href="javascript:void(0)" class="btn btn-primary" onclick="delete_record(<?php echo $each['int_member_id'] ;?>)">Delete</a> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Device Assign</button></td>
									</tr>
									<?php }} else{ ?>
									<tr>
									<td colspan="3">
									No Records Found
									</td>
									</tr>
									<?php }  ?>
									</tbody>
									</table>
                        			
                        	</div>
        </div>
        </div>
        </div>

    
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>  <h4 class="modal-title"><a href="#" ><span>SAAYA</span></a></h4></center>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" action="<?php echo site_url('Member/assign')?>" method="post"> 
              <input  type="hidden" name="member_id" value="<?php echo $member_list[0]['int_member_id'];?>"/>
                                                        <div class="form-group"> 
							<label class="col-md-2 control-label">Member Name </label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $member_list[0]['txt_name']; ?>" name="member_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('member_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Device Id</label>
	                                                <div class="col-md-7">
                                                            <select class="form-control" name="device_id">
                                                                <option>Select Device</option>
                                                                  <?php foreach($device_list as $each){ ?>
                           <option value="<?php echo $each['int_device_id']; ?>"><?php echo $each['txt_manufacturer_name']."|".$each['txt_imei']; ?></option>
    <?php } ?>

                                                            </select>
	                                                  <!--  <input type="text" class="form-control" value="" name="txt_designation">-->
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_designation');?>
	                                               </div>
													
	                                            </div>
	                                                 
												<div class="form-group">
	                                             <label class="col-md-2 control-label">Date</label>
												        <div class='col-md-7'>
												            <div class="form-group">
												                <div class='input-group date'>	
												                    <input type='text' class="form-control" id="datepicker1" name="date" />
												                    <span class="input-group-addon">
												                        <span class="glyphicon glyphicon-calendar"></span>
												                    </span>
												                </div>												           
												        	</div>
												        </div>
												        <div class="col-md-3">
                                                                                                            <?php echo form_error('date');?>
                                                                                                        </div>
												        <script>
												  $(function() {
												    $( "#datepicker1" ).datepicker();
												  });
												  </script>
												    </div>
              
	                                             <div class="form-group">
                                                 <div class="col-lg-10 col-lg-offset-2">
                                                 <button type="reset" class="btn btn-default">Cancel</button>
                                                 <button type="submit" class="btn btn-primary" >Submit</button>
                                                 </div>
                                                 </div>
	                                            
	     
	                           
	                                        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
