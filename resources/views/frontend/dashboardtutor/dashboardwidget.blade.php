<div class="tg-widgetdashboard">
								<h3>dashboard <a class="tg-btndashboard" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a></h3>
								<time class="tg-currentdatetime" datetime="2011-01-12">
									<span>monday 27, 2017</span>
									<em>10:10 am</em>
								</time>
								<nav id="tg-dashboardnav" class="tg-dashboardnav">
									<ul>
										<li class="<?php if(Request::segment(2) == ""){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tutor">
												<i class="fa fa-line-chart"></i>
												<span>Insights</span>
											</a>
										</li>

										<li class="<?php if(Request::segment(2) == "profile-settings"){echo "tg-active";}else{echo "";}?>">
										<a href="/dashboard-tutor/profile-settings">
												<i class="fa fa-user"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "schedule"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tutor/schedule">
												<i class="fa fa-clock-o"></i>
												<span>My Schedules</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "favoritelisting"){echo "tg-active";}else{echo "";}?>">
											<a href="/dashboard-tutor/favoritelisting">
												<i class="fa fa-heart"></i>
												<span>Favorites Listing</span>
											</a>
										</li>
										
										</li>
										<li class="<?php if(Request::segment(2) == "upgradepackage"){echo "tg-active";}else{echo "";}?>">	<a href="/dashboard-tutor/upgradepackage">
												<i class="fa fa-arrow-up"></i>
												<span>Upgrade Package</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "securitysettings"){echo "tg-active";}else{echo "";}?>">
										<a href="/dashboard-tutor/securitysettings">
												<i class="fa fa-gears"></i>
												<span>Security Settings</span>
											</a>
										</li>
										<li class="<?php if(Request::segment(2) == "privacysettings"){echo "tg-active";}else{echo "";}?>"><a href="/dashboard-tutor/privacysettings">
												<i class="fa fa-eye"></i>
												<span>Privacy Settings</span>
											</a>
										</li>
										<li>
											<a href="/dashboard-tutor">
												<i class="fa fa-sign-out"></i>
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>