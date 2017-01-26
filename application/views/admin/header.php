<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon_1.ico">

        <title>Saaya|Admin Panel</title>

        <!--Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="<?php echo base_url();?>resources/demos/style.css">
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        
        <script>     
    $("document").ready(function(){
	$("#btnchange").click(function(){
		if($("#old").val()=="")
		{
			alert("please enter old password");
			
			$("#Loginid").focus();
			return false;
		}
		if($("#new").val()=="")
		{
			alert("please enter new password");
			$("#Password").focus();
			return false;
		}
		if($("#confirm").val()=="")
		{
			alert("please enter confirm new password");
			$("#Password").focus();
			return false;
		}
               var q=$("#new").val();
               var r=$("#confirm").val();
                if(q != r)
                {
                                alert("new and confirm password do not match");
                                $("#Password").focus();
                                return false;
                }
                 if(q == r)
                 {
                                    $.ajax({
					type:'POST',
					url:"<?php echo site_url(); ?>"+"/Change_password/change",
					data:{
						'new_pass':$("#new").val(),
                                                'old_pass':$("#old").val(),
                                                'confirm_pass':$("#confirm").val()
					},
						 
					success: function(res)
					{
						if(res)
						{ 
							alert(res);
                                                        $("#old").val('');
                                                        $("#new").val('');
                                                        $("#confirm").val('');
						}
						else
						{
							alert("failed to update");
						}
					  },
					 
					error: function(res)
					{
						alert("failure");
					},
				});
                }
                
	});
});
</script>
        
     <style>
.available{
	color:#0f0;
}
.unavailable{
	color:#f00;
}
</style>   
    </head>
<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><span>SaaYa</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                         <!--   <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                 <input type="text" placeholder="Search..." class="form-control">
                                 <a href=""><i class="fa fa-search"></i></a>
                            </form>-->


                            <ul class="nav navbar-nav navbar-right pull-right">
                               
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><button type="button" class="btn btn" data-toggle="modal" data-target="#myModal" style="background-color:white;color:black;"><i class="ti-lock m-r-5"></i>Change Password</button></li>
                                        <li><a href="<?php echo site_url().'/Client/logout/';?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
                
            </div><div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="z-index:;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>  <h4 class="modal-title"><a href="#"><span>Change Password</span></a></h4></center>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="yourFormId"> 
              <input  type="hidden" name="member_id" value="<?php //echo $member_list[0]['int_member_id'];?>"/>
                                                        <div class="form-group"> 
							<label class="col-md-3 control-label">Old Password </label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" name="old" id="old">
                                                            <span id="message"></span>
	                                                </div>
	                                                <div class="col-md-3"> 
	                                                <?php echo form_error('old');?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-sm-3 control-label">New Password</label>
	                                                <div class="col-md-7">
                                                          <input type="text" class="form-control" name="new" id="new"> 
	                                                </div>
	                                              <div class="col-md-3">
	                                                <?php echo form_error('new');?>
	                                               </div>
													
	                                            </div>
                                                    <div class="form-group"> 
							<label class="col-md-3 control-label">Confirm New Password </label>
	                                                <div class="col-md-7">
	                                                    <input type="text" class="form-control" name="confirm_new" id="confirm">
	                                                </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('confirm_new');?>
	                                                </div>
	                                            </div>
	                                                 
												
	                                             <div class="form-group">
                                                 <div class="col-lg-10 col-lg-offset-2">
                                                     <input type="button" id="btnchange" Value="Change" name="Change" class="btn btn-primary" onClick="return(validate());">
                                                     
                                                 <button type="reset" class="btn btn-default">Cancel</button>
                                                
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
            <!-- Top Bar End -->


