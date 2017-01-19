========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
						<li class="has_sub">
							<a href="#" class="waves-effect"><i class="ti-user"></i> <span> Member </span> </a>
							<ul class="list-unstyled">
								<li>
									<a href="<?php echo site_url('Member/add_member') ?>" class="waves-effect active">Add Member</a>
									
								</li>

								<li>
									<a href="<?php echo site_url('Member/list_member') ?>" class="waves-effect">View Member </a>
								   
								</li>
							</ul>
					    </li>
						
						<li class="has_sub">
						<a href="#" class="waves-effect"><i class="ti-mobile"></i> <span> Device </span> </a>
						<ul class="list-unstyled">
                            <li >
                                <a href="<?php echo site_url('Device/add_device') ?>" class="waves-effect">Add Device </a>
                            </li>

                            <li >
                                <a href="<?php echo site_url('Device/list_device') ?>" class="waves-effect">View Device</a>
                            </li>
						</ul>
					    </li>
                                            
                                            <li class="has_sub">
						<a href="#" class="waves-effect"><i class="ti-mobile"></i> <span> Assigned Device </span> </a>
						<ul class="list-unstyled">
                            <li >
                                <a href="<?php echo site_url('Device/add_device') ?>" class="waves-effect">  </a>
                            </li>

                            
						</ul>
					    </li>
                        </ul>
						
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End-->
            <div class="content-page">