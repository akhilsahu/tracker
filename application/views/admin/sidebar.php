========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
							<li class="has_sub">
							<a href="#" class="waves-effect active"><i class="ti-user"></i> <span> Client </span> </a>
								<ul class="list-unstyled">
									<li>
										<a href="<?php echo site_url('Client/add') ?>" class="waves-effect">Add Client</a>
									</li>
									<li>
										<a href="<?php echo site_url('Client/list_clients') ?>" class="waves-effect">View Clients </a>
									</li>
								</ul>
							</li>
                           

						   <li class="has_sub">
							<a href="#" class="waves-effect active"><i class="ti-notepad"></i> <span> Plans </span> </a>
								<ul class="list-unstyled">
									<li>
										<a href="<?php echo site_url('Plan/add_plan') ?>" class="waves-effect">Add Plan </a>
									</li>

									<li>
										<a href="<?php echo site_url('Plan/view_plan') ?>" class="waves-effect">View Plan </a>
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