<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit Member</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Member/update_member')?>" method="post">                                    
	                                            <div class="form-group"> 
												
	                                                <label class="col-md-2 control-label">Member Name </label>
	                                                <div class="col-md-7">
													<input type="hidden" class="form-control" value="<?php echo $edit_member['int_member_id'] ?>" name="id">
													<input type="hidden" class="form-control" value="<?php echo $edit_member['txt_added_by'] ?>" name="id_added">
	                                                <input type="text" class="form-control" value="<?php echo $edit_member['txt_name']; ?>" name="member_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('member_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Designation</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_member['txt_designation']; ?>" name="txt_designation">
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_designation');?>
	                                               </div>
													
	                                            </div>
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-7">
	                                                    <select type="text" class="form-control" name="txt_gender">
														<option value="Male">Male</option>
														<option value="Female">Female</option></select>
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_gender');?>
	                                                </div>
	                                            </div>  
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Relation</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_member['txt_relation']; ?>" name="member_relation">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('member_relation');?>
	                                                </div>
	                                            </div>  
	                                                
												
													 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_member['txt_email']; ?>" name="txt_email">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_email');?>
	                                                </div>
	                                            </div>
																								
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Mobile No.</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_member['txt_phone']; ?>" name="txt_phone">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_phone');?>
	                                                </div>
	                                            </div> 
												
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">PAN No.</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_member['txt_pan_no']; ?>" name="txt_pan">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_pan');?>
	                                                </div>
	                                            </div> 
												
	                                             <div class="form-group">
                                                 <div class="col-lg-10 col-lg-offset-2">
                                                 <button href="<?php echo site_url('Member/list_member')?>" class="btn btn-default">Cancel</button>
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
