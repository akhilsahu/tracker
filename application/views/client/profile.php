 <?php $abc=$this->user;
 //print_r($abc[0]['int_user_id']);exit; ?>
<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Profile</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-12">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Member/insert_member')?>" method="post">                                    
	                                            <div class="form-group"> 
												
	                                                <label class="col-md-2 control-label">Client Name</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="client_name">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('client_name');?>
	                                                </div>
	                                            </div>
                                                    <div class="form-group"> 					
	                                                <label class="col-md-2 control-label">Client Email</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="client_email">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('client_email');?>
	                                                </div>
	                                            </div>
                                                    <div class="form-group"> 					
	                                                <label class="col-md-2 control-label">Client Mobile Number</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="client_mobile">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('client_mobile');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-2 control-label">Client Address</label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" value="" name="txt_address">
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('txt_address');?>
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
	                                                <label class="col-md-2 control-label">Plan Logo</label>
	                                                <div class="col-md-7">
	                                                    <input type="file" id="fileUpload" class="form-control" value="" name="txt_logo"><br/>
	                                                    <div id="image-holder">
                                                            <img/>
                                                       </div>
	                                                </div>
	                                            	<div class="col-md-3">
	                                                <?php echo form_error('txt_gender');?>
	                                                </div>
	                                            </div>  
												  
	                                              	 
												<div class="form-group">
	                                             <label class="col-md-2 control-label">Date of Purchase</label>
												        <div class='col-md-7'>
												            <div class="form-group">
												                <div class='input-group date'>	
												                    <input type='text' class="form-control" id="datepicker" name="date_of_purchase" />
												                    <span class="input-group-addon">
												                        <span class="glyphicon glyphicon-calendar"></span>
												                    </span>
												                </div>												           
												        	</div>
												        </div>
												        <div class="col-md-3">
			                                                <?php echo form_error('date_of_purchase');?>
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
												  $("#fileUpload").on('change', function () {

        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
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
