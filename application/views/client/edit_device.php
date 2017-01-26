<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                                            <center><h4 class="m-t-0 header-title"><b>Edit Device</b></h4></center>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Device/update_device')?>" method="post">                                    
												<div class="form-group">
	                                                <label class="col-md-2 control-label">IMEI Number</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_device['txt_imei']; ?>" name="txt_imei">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_imei');?>
	                                                </div>
	                                            </div>  
	                                            <div class="form-group"> 
												
	                                                <label class="col-md-2 control-label">Manufacturer Name</label>
	                                                <div class="col-md-7">
													<input type="hidden" class="form-control" value="<?php echo $edit_device['int_device_id']; ?>" name="int_id">
													<!--<input type="hidden" class="form-control" value="" name="id_client">-->
	                                                    <input type="text" class="form-control" value="<?php echo $edit_device['txt_manufacturer_name']; ?>" name="txt_manufacturer_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('txt_manufacturer_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Owner</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_device['txt_device_owner']; ?>" name="txt_device_owner">
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_device_owner');?>
	                                               </div>
													
	                                            </div>    
                                                                    				
                                                      <div class="form-group">
	                                             <label class="col-md-2 control-label">Date</label>
                                                       <div class='col-md-7'>
							 <div class="form-group">
									  <div class='input-group date'>	
									  <input id="datepicker" type="text" class="form-control" value="<?php echo $edit_device['dt_date']; ?>" name="dt_date">
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
                                                 <a href="<?php echo site_url('Device/list_device')?>" class="btn btn-default">Cancel</a>
                                                 <button type="submit" class="btn btn-primary" >Update</button>
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
