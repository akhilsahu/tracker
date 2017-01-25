<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>SAAYA| Admin Panel</title>

        <!--Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/morris/morris.css">

        <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="/resources/demos/style.css">
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
     <!--   <script src="<?php echo base_url();?>/assets/js/valid.js"></script>-->
       <!--  <script src="<?php echo base_url();?>/assets/js/valid1.js"></script>-->
        <script src="<?php echo base_url();?>/assets/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
    </head>
<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="fa fa-map-marker"></i><span>SAAYA</span></a>
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

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                 <input type="text" placeholder="Search..." class="form-control">
                                 <a href=""><i class="fa fa-search"></i></a>
                            </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group nicescroll notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog fa-2x text-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                     <!-- list item-->  
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                     <em class="fa fa-cog fa-2x text-custom"></em>
                                                    </div>
                                                    <div class="media-body">
                                                      <h5 class="media-heading">New settings</h5>
                                                      <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                    </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url().'/profile/edit_profile/';?>"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li> <button type="button" class="btn" style="background-color: white;" data-toggle="modal" data-target="#myModal1"><i class="ti-settings m-r-5"></i>Change Password</button></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="<?php echo site_url().'/Member/logout/';?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            
             <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>  <h4 class="modal-title"><a href="#" ><span>Change Password</span></a></h4></center>
        </div>
          <div class="modal-body">
          <form class="form-horizontal" id="password_form" role="form" action="<?php echo site_url('Client/change_password')?>" method="post"> 
              <input  type="hidden" name="member_id" value="<?php ?>"/>
                                                        <div class="form-group"> 
                                                            <label class="col-md-4 control-label">Old Password<span style="color: red;">*</span> </label>
	                                                <div class="col-md-7">
	                                                    <input type="password" class="form-control" id="old_password"  name="old_password" placeholder="Enter Your old Password">
	                                                  <p id="msg1"></p>
                                                        </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('old_password');?>
	                                                </div>
	                                            </div>
              <div class="form-group"> 
							<label class="col-md-4 control-label">New Password <span style="color: red;">*</span> </label>
	                                                <div class="col-md-7">
	                                                    <input type="password" class="form-control"  name="new_password" id="new_password" placeholder="Enter Your New Password">
	                                                 <p id="msg2"></p>
                                                        </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('new_password');?>
	                                                </div>
	                                            </div>
              <div class="form-group"> 
							<label class="col-md-4 control-label" >Confirm Password <span style="color: red;">*</span> </label>
	                                                <div class="col-md-7" id="confirm_password">
	                                                    <input type="password" class="form-control" id="confirm_new_password"  name="confirm_new_password" placeholder="Enter Your New Password">
                                                            <p id="msg3"></p>
                                                        </div>
	                                                <div class="col-md-3">
	                                                <?php echo form_error('new_password');?>
	                                                </div>
	                                            </div>
	                                   
              
	                                             <div class="form-group">
                                                 <div class="col-lg-10 col-lg-offset-2">
                                                 <button type="reset" class="btn btn-default">Cancel</button>
                                                 <button type="button" id="btn_password" onclick="change_password()" class="btn btn-primary" >Submit</button>
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
  
</div>
        

    <script >
      
   $("#btn_password").click(function() {
       if($("#old_password").val() == "")
       {
                $("#msg1").css("color", "red");
                 $("#msg1").html("Enter old password.!!");
                 $("#old_password").focus();
                 return false;
       }
       else
       {
           
              $("#msg1").empty();
       }
        if($("#new_password").val() == "")
       {
                $("#msg2").css("color", "red");
                 $("#msg2").html("Enter new password.!!");
                 $("#new_password").focus();
                 return false;
       }
        else
       {
              $("#msg2").empty();
       }
       
       if($("#confirm_new_password").val() == "")
       {
                $("#msg3").css("color", "red");
                 $("#msg3").html("Enter confirm password.!!");
                 $("#confirm_new_password").focus();
                 return false;
       }
        else
       {
              $("#msg3").empty();
       }
        // alert($("#new_password").val() +"  " + $("#confirm_new_password").val());
            var New_password=$("#new_password").val();
            var Confirm_new_password=$("#confirm_new_password").val();
           // alert(New_password + " " + Confirm_new_password);
            if ( New_password != Confirm_new_password )
            {
                 // alert($("#new_password").val());
                    $("#confirm_new_password").css("border-color", "red");
                   // $("#confirm_new_password").append("password does not Match");
                   $("#msg3").css("color", "red");

                    $("#confirm_new_password").focus();
                    $("#msg3").append("password do not matches");
                    return false;
                    $("#msg3").empty();
                    
            } 
            else { 
                     $("#msg3").empty();
                     $.ajax({
					type:'POST',
					url:"<?php echo site_url(); ?>"+"/Change_password/change",
					data:{
						'new_pass':$("#new_password").val(),
                                                'old_pass':$("#old_password").val(),
                                                'confirm_pass':$("#confirm_new_password").val()
					},
						 
					success: function(res)
					{
						if(res)
						{ 
							alert(res);
                                                        $("#old_password").val('');
                                                        $("#new_password").val('');
                                                        $("#confirm_new_password").val('');
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
                
                     return true;
                 }
            });
 /*function change_password()
    {
   
        $.ajax({
            url:"<?php //echo site_url().'/Client/change_password/';?>",
            success:function(data)
            {           
                
            }
        });
        }
    }*/
/*$('#password_form').submit(function() {
    var id1 = $('#id1').text(); //if #id1 is input element change from .text() to .val() 
    var id2 = $('#id2').text(); //if #id2 is input element change from .text() to .val()
    if (id1 == id2) {
        alert('Error, cant do that');
        return false;
    }
    else
    {
        return true;
    }*/
    

        </script>

        
        /*********script**/
      <!--  <script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});
	</script>-->
        /****script end*************/