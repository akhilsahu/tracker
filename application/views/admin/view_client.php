<script>
        function delete_record(id)
    {
    var r = confirm("Are you sure to Delete!");

        if (r == true) {
        var id = id;
        $.ajax({
            url:"<?php echo site_url().'/Client/delete_client/';?>"+id,
            success:function(data)
            {           
            $('#delrow'+id).remove();
            }});
        }
    }
</script> 


<div class="content">
		<div class="container">
		<div class="row">

						</div>
		<div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>View Client</b></h4>
                        			<!-- <p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p> -->
									<table class="table">
									<thead>
										<th>Client Name </th>
										<th> Plan Of Client</th>
										<th>Email </th>
										<th>Phone Number</th>
										<th>Gender</th>
										<th>Address</th>
										<th>No of member</th>
										<th> Date</th>
									</thead>
									<tbody>
									<?php if(count($client_list)){
									foreach($client_list as $each){ ?>
									<tr id="delrow<?php echo $each['int_client_id']?>">
									<td><?php echo $each['txt_client_name']; ?></td>
									<td><?php echo $each['txt_client_email']; ?></td>
									<td><?php echo $each['txt_client_phone']; ?></td>
									<td><?php echo $each['txt_client_gender']; ?></td>
									<td><?php echo $each['txt_client_address']; ?></td>
									<td><?php echo $each['int_no_of_members']; ?></td>
									<td><?php echo $each['dt_date']; ?></td>
									<td><a href="<?php echo site_url().'/Client/edit_client/'.$each['int_client_id'] ?>" class="btn btn-primary">Edit</a> <a href="javascript:void(0)" class="btn btn-primary" onclick="delete_record(<?php echo $each['int_client_id'] ;?>)">Delete</a></td>
									</tr>
									<?php }} else{ ?>
									<tr>
									<td colspan="3">
									No Records Forund
									</td>
									</tr>
									<?php }  ?>
									</tbody>
									</table>
                        			
                        	</div>
        </div>
        </div>
        </div>
