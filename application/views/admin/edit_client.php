 
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
                        				<div class="col-md-6">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Client/update_client')?>" method="post">                                    
	                                           <input type="hidden" name ="update_id" value="<?php echo $edit_clients['int_client_id'];?>">
                                                    <div class="form-group"> 
	                                            
	                                                <label class="col-md-4 control-label">Client Name </label>
	                                                <div class="col-md-8">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_client_name']; ?>" name="client_name">
	                                                </div>
	                                                <div class="col-md-6">
	                                                <?php echo form_error('client_name')?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-md-4 control-label">Plan Of CLient</label>
	                                              <div class="col-md-8">
	                                                    <select class="form-control" name="plan_of_client" >
	                                                         <?php foreach($plan_of_client_val as $each){ ?>
                           <option value="<?php echo $each['int_plan_id']; ?>" <?php echo ($each['int_plan_id']==$edit_clients['txt_plan_of_client'])?'selected':"";?>><?php echo $each['txt_plan_name']; ?></option>
    <?php } ?>

	                                                        
	                                                    </select>
	                                                   
	                                                </div>
	                                              <div class="col-md-6">
	                                                <?php echo form_error('plan_of_client')?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-md-4 control-label">Client Type</label>
	                                              <div class="col-md-8">
	                                                    <select class="form-control" name="client_type">
	                                                       
	                                                        <?php foreach($client_type_val as $each){ ?> 
                           <option value="<?php echo $each['int_group_id']; ?>" <?php echo ($each['int_group_id']== $edit_clients['txt_client_type'])? 'selected':"";?>><?php echo $each['txt_user_group']; ?></option>
    <?php } ?>
	                                                    </select>
	                                                   
	                                                </div>
	                                            <div class="col-md-6">
	                                                <?php echo form_error('client_type')?>
	                                                </div>
	                                            </div>
	                                                                     
	                                             <div class="form-group">
	                                                <label class="col-md-4 control-label">No. Of Member</label>
	                                                <div class="col-md-8">
	                                                    <input type="text" class="form-control" value="<?php echo $edit_clients['txt_no_of_member']?>" name="no_of_member">
	                                                </div>
	                                                                                                                  
	                                             <div class="col-md-6">
	                                                <?php echo form_error('no_of_member')?>
	                                                </div>
	                                          </div> 
	                                             <div class="form-group">
	                                             <label class="col-md-4 control-label">Date</label>

                                                       <div class="col-md-8 input-group date">
                                                             <input type='text' class="form-control" id="datepicker" value="<?php echo $edit_clients['dt_date']?>" name="date" />
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                       </div>            </span>
                                                    
                                                           <div class="col-md-6">
                                                                 <?php echo form_error('date')?>
                                                          </div>
                                                        </div>
                                                           </div>
                                                    </div>
        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    

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
        </div>
