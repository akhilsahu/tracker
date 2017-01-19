 <?php $abc=$this->user;
 //print_r($abc[0]['int_user_id']);exit; ?>
<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                                            <center>	<h4 class="m-t-0 header-title"><b>Add Member</b></h4></center>
                        			
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Member/insert_member')?>" method="post">                                    
	                                            <div class="form-group"> 
												
	                                                <label class="col-md-2 control-label">Member Name </label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="member_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('member_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Designation</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_designation">
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_designation');?>
	                                               </div>
													
	                                            </div>
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_gender">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_gender');?>
	                                                </div>
	                                            </div>  
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Relation</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="member_relation">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('member_relation');?>
	                                                </div>
	                                            </div>  
	                                              	 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_email">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_email');?>
	                                                </div>
	                                            </div>
																								
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Mobile No.</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_phone">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_phone');?>
	                                                </div>
	                                            </div> 
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">PAN No.</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_pan">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_pan');?>
	                                                </div>
	                                            </div> 
												<div class="form-group">
	                                             <label class="col-md-2 control-label">Date</label>
												        <div class='col-md-7'>
												            <div class="form-group">
												                <div class='input-group date'>	
												                    <input type='text' class="form-control" id="datepicker" name="date" />
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
												  $( function() {
												    $( "#datepicker" ).datepicker();
												  } );
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
                        				
                        				
                        				
                        			</div>
                        		</div>
                        	</div>
        </div>
        </div>
        </div>
