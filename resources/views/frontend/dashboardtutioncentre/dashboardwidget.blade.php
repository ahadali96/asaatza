<div class="tg-widgetdashboard">
								<h3>dashboard <a class="tg-btndashboard" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a></h3>
								<time class="tg-currentdatetime" datetime="2011-01-12">
									<span>monday 27, 2017</span>
									<em>10:10 am</em>
								</time>
								<nav id="tg-dashboardnav" class="tg-dashboardnav">
									<ul>
										<li class="<?php if(Request::segment(2) == ""){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre">
												<i class="fa fa-line-chart"></i>
												<span>Insights</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "post-job"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/post-job">
												<i class="fa fa-briefcase"></i>
												<span>Post a Job</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "academic-settings"){echo "tg-active tg-infomessage";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/academic-settings">
												<i class="fa fa-graduation-cap"></i>
												<span>Academics Settings</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "profile-settings"){echo "tg-active tg-warningmessage";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/profile-settings">
												<i class="fa fa-user"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "schedules"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/schedules">
												<i class="fa fa-clock-o"></i>
												<span>My Schedules</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "favourites-listing"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/favourites-listing">
												<i class="fa fa-heart"></i>
												<span>Favorites Listing</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "invoices"){echo "tg-active tg-successmessage";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/invoices">
												<i class="fa fa-clone"></i>
												<span>Invoices</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "upgrade-package"){echo "tg-active tg-errormessage";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/upgrade-package">
												<i class="fa fa-arrow-up"></i>
												<span>Upgrade Package</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "security-settings"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/security-settings">
												<i class="fa fa-gears"></i>
												<span>Security Settings</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "privacy-settings"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tution-centre/privacy-settings">
												<i class="fa fa-eye"></i>
												<span>Privacy Settings</span>
											</a>
										</li>
										<li>
											<a href="dashboard-tuition-Schedule.html#">
												<i class="fa fa-sign-out"></i>
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>