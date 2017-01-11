 
<div class="content">
		<div class="container">
		
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Add Plan</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" role="form" action="<?php echo site_url('Plan/insert_plan')?>" method="post" enctype="multipart/form-data">                                    
~	                                            <div class="form-group">
	                                                <label class="col-md-4 control-label">Plan Name </label>
	                                                <div class="col-md-8">
	                                                    <input type="text" class="form-control" value="" name="txt_plan_name">
	                                                </div>
	                                                <div class="col-md-6">
	                                                <?php echo form_error('txt_plan_name');?>
	                                                </div>
	                                            </div>

	                                             <div class="form-group">
	                                                <label class="col-md-4 control-label">Plan Description </label>
	                                                <div class="col-md-8">
	                                                    <textarea row="5"  class="form-control" value="" name="txt_plan_desc"></textarea>
	                                                </div>
	                                                <div class="col-md-6">
	                                                <?php echo form_error('txt_plan_desc');?>
	                                                </div>
	                                            </div>

	                                             <div class="form-group">
	                                                <label class="col-md-4 control-label">Plan Cost </label>
	                                                <div class="col-md-8">
	                                                    <input type="text" class="form-control" value="" name="dbl_cost">
	                                                </div>
	                                                <div class="col-md-6">
	                                                <?php echo form_error('dbl_cost');?>
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-md-4 control-label">Plan Logo </label>
	                                                <div class="col-md-8">
	                                                    <input type="file" id="fileUpload" class="form-control" value="" name="txt_logo" /><br/>
	                                                    <div id="image-holder"> </div>
	                                                </div>
	                                                <div class="col-md-6">
	                                                <?php echo form_error('txt_logo');?>
	                                                </div>
	                                            </div>
	                                            
	                                                   
            <div class="form-group">
             <label class="col-md-4 control-label">Date </label>
                <div class='col-md-8'>
                    <input type='text' class="form-control" id="datepicker" value="" name="date" />
                    <!-- <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span> -->
                </div>
                <div class="col-md-6">
            <?php echo form_error('date')?>
              </div>
	                                           
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
