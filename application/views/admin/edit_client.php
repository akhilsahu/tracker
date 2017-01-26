 <?php //print_r($edit_clients);exit; ?>
<div class="content">
		<div class="container">
		<div class="row"></div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Edit Client</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" action="<?php echo site_url('Client/update_client')?>" method="post" enctype="multipart/form-data">                                    
	                                            <div class="form-group"> <div class="form-group">
	                                                <label class="col-sm-2 control-label">Type</label>
                                                        <?php if($edit_clients['txt_client_type']=="Commercial"){ ?>
	                                                <div class="col-sm-7">
                                                            <select class="form-control" name="txt_type">
                                                                <option  value="0">Select</option>
                                                                <option value="Personal">Personal</option>
                                                                <option value="Commercial" Selected>Commercial</option>
	                                                    </select>
	                                                   
	                                                </div>
                                                        <?php }else if($edit_clients['txt_client_type']=="Personal") { ?>
                                                        <div class="col-sm-7">
                                                            <select class="form-control" name="txt_type">
								<option  value="0">Select</option>
                                                                <option value="Personal" Selected>Personal</option>
                                                                <option value="Commercial">Commercial</option>
	                                                    </select>
	                                                   
	                                                </div>
                                                        <?php } else { ?>
                                                         <div class="col-sm-7">
                                                            <select class="form-control" name="txt_type">
								<option  value="0">Select</option>
                                                                <option value="Personal">Personal</option>
                                                                <option value="Commercial">Commercial</option>
	                                                    </select>
	                                                   
	                                                </div>
                                                        <?php } ?>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_type');?>
	                                                </div>
													
	                                            </div>
	                                                <label class="col-md-2 control-label">Client Name </label>
	                                                <div class="col-md-7">
													<input type="hidden" id="user_id" name="user_id" value="<?php echo $edit_clients['int_client_id']; ?>">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_client_name']?>" name="txt_client_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('txt_client_name');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Plan Of CLient</label>
	                                                <div class="col-sm-7">
	                                                    <select class="form-control" name="plan_of_client">
	                                                         <option value="">Select Plan</option>
															  <?php
																 foreach($plan_of_client_val as $plan)
																 
																{?>
																	<option value="<?php echo $plan['int_plan_id'];?>"  <?php echo ($edit_clients['txt_plan_of_client']==$plan['int_plan_id'])?'selected="selected"':''?>   ><?php echo $plan['txt_plan_name'];?></option>
																<?php }
																 ?>
	                                                    </select>
	                                                   
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('plan_of_client');?>
	                                                </div>
													
	                                            </div>
	                                                  <div class="form-group">
	                                                <label class="col-md-2 control-label">Email</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_client_email']; ?>" name="txt_client_email">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_client_email');?>
	                                                </div>
	                                            </div>  
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Phone</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_mobile']; ?>" name="client_phone">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('client_phone');?>
	                                                </div>
	                                            </div>  
	                                                
												
													 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">No. Of Member</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_no_of_member']; ?>" name="no_of_member">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('no_of_member');?>
	                                                </div>
	                                            </div>
																								
	                                                     <div class="form-group">
	                                                <label class="col-md-2 control-label">Client Address</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_client_address']; ?>" name="txt_address">
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php //echo //form_error('txt_address');?>
	                                                </div>
	                                            </div>                                                               
	                                             <?php 
												if($edit_clients['txt_gender']=='Male'){
												?>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-7">
													<select class="form-control" name="txt_gender">
													<option value="">Select</option>
													<option Value="Male" selected>Male</option>
													<option Value="Female">Female</option>
	                                                </select>
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php //echo form_error('txt_gender');?>
	                                                </div>
	                                            </div>  
												<?php 
													}else if($edit_clients['txt_gender']=='Female'){
												?>
												 <div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-7">
													<select class="form-control" name="txt_gender">
													<option value="">Select</option>
													<option Value="Male" >Male</option>
													<option Value="Female" selected>Female</option>
	                                                    </select>
	                                                </select>
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php// echo form_error('txt_gender');?>
	                                                </div>
	                                            </div>  
												<?php 
													}else{
														
													
												?>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Gender</label>
	                                                <div class="col-md-7">
													<select class="form-control" name="txt_gender">
													<option value="">Select</option>
													<option Value="Male" >Male</option>
													<option Value="Female">Female</option>
	                                                </select>
	                                                </select>
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php //echo form_error('txt_gender');?>
	                                                </div>
	                                            </div> 
												<?php 
													}
												?> 
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Client Logo</label>
	                                                <div class="col-md-7">
	                                                    <input type="file" id="fileUpload" class="form-control" name="txt_logo" ><br/>
	                                                    <div id="image-holder">
                                                            <img src="<?php echo base_url().$edit_clients['txt_client_logo']; ?>" height="150px" width="200px"/>
                                                       </div>
	                                                </div>
	                                            	<!--<div class="col-md-3">
	                                                
	                                                </div>-->
													<script>
												 
		 $("#fileUpload").on('change', function () {

        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image",
                    "style":"height:150px;width:200px"
                }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });
												  </script>
	                                            </div>                                                            
	                                             
	                                             <div class="form-group">
	                                             <label class="col-md-2 control-label">Date</label>
												        <div class='col-md-7'>
												            <div class="form-group">
												                <div class='input-group date'>
												                    <input type='text' class="form-control" value="<?php echo $edit_clients['dt_date']; ?>" id="datepicker" name="date" />
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
	                                             
												       
												        <div class="col-md-3">
			                                                <?php echo form_error('date');?>
			                                            </div>
												       
												    </div>

	                                             <div class="form-group">
                                                 <div class="col-lg-10 col-lg-offset-2">
                                                 <button type="reset" class="btn btn-default">Cancel</button>
                                                 <button type="submit" name="submit" id="submit" class="btn btn-primary" >Update</button>
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
 

