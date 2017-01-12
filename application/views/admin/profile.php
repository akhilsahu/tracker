 <?php 
 //print_r($user);exit;
 ?>
<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>User Panel</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Client/insert_client')?>" method="post">                                    
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">User Name</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $user['txt_user_name'];?>" name="user_name" readonly="true">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('client_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">User's Email</label>
	                                                <div class="col-sm-7">
                                                             <input type="text" class="form-control" value="<?php echo $user['txt_user_email'];?>" name="user_email" readonly="true">
                                                        </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('plan_of_client');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">User's Mobile</label>
	                                                <div class="col-sm-7">
	                                                   <input type="text" class="form-control" value="<?php echo $user['txt_user_phone'];?>" name="user_email" readonly="true"> 
	                                                   
	                                                   
	                                                </div>
	                                            <div class="col-md-3">
	                                                <?php echo form_error('client_type');?>
	                                                </div>
	                                            </div>
	                                                                     
	                                             <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control" name="gender">
                                                                <option>Select</option>
                                                                 <?php foreach($user['txt_gender'] as $user){ ?>
                                                                    <option value="<?php echo $user['txt_gender']; ?>"><?php echo $user['txt_gender']; ?></option>
                                                                <?php } ?>

                                                            </select>
                                                          
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
