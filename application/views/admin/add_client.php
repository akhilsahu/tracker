 
<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Add Client</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Client/insert_client')?>" method="post">                                    
	                                            <div class="form-group"> <div class="form-group">
	                                                <label class="col-sm-2 control-label">Type</label>
	                                                <div class="col-sm-7">
	                                                    <select class="form-control" name="txt_type">        
														<option value="Personal">Personal</option>
	                                                        <option value="Commercial">Commercial</option>
	                                                    </select>
	                                                   
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_gender');?>
	                                                </div>
													
	                                            </div>
	                                                <label class="col-md-2 control-label">Client Name </label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="client_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('client_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Plan Of CLient</label>
	                                                <div class="col-sm-7">
	                                                    <select class="form-control" name="plan_of_client">
	                                                         <?php foreach($plan_of_client_val as $each){ ?>
                           <option value="<?php echo $each['int_plan_id']; ?>"><?php echo $each['txt_plan_name']; ?></option>
    <?php } ?>

	                                                        
	                                                    </select>
	                                                   
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('plan_of_client');?>
	                                                </div>
													
	                                            </div>
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_client_email">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_client_email');?>
	                                                </div>
	                                            </div>  
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Phone</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="client_phone">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('client_phone');?>
	                                                </div>
	                                            </div>  
	                                                
												
													 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">No. Of Member</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="no_of_member">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('no_of_member');?>
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
	                                             <label class="col-md-2 control-label">Logo</label>
												        <div class='col-md-7'>
												            <div class="form-group">
												                <div class='input-group'>
												                    <input type='file' class="form-control" name="file" onchange="readURL(this);" />
																	<img alt="logo" class="form-control" name="file" id="image1" height="200px" width="200px" />
												                   
												                </div>												           
												        	</div>
												        </div>
												        <div class="col-md-3">
			                                                <?php echo form_error('date');?>
			                                            </div>
												       
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
