@include('frontend.header')	
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div id="tg-innerbanner" class="tg-innerbanner tg-dashboardinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-12.jpg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="tg-innerbannercontent">
							<div class="tg-pagehead">
								<figure class="tg-tutordp">
									<a href="dashboardtutor-favorites-listing.html#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboardtutor-favorites-listing.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboardtutor-favorites-listing.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnedit" href="dashboardtutor-favorites-listing.html#"><i class="fa fa-pencil"></i></a>
									<div class="tg-jobhead">
										<h2>Lawrence Troutman</h2>
										<div class="tg-subjects">Mathematics &amp; Statistics</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboardtutor-favorites-listing.html#">1509 view</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content tg-dashboard tg-tutordashboard">
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
							@include('frontend.dashboardtutor.dashboardwidget')
							<div class="tg-widgetdashboard">
								<a class="tg-customerviewpage" href="dashboardtutor-favorites-listing.html#">
									<i class="fa fa-tv"></i>
									<span>What do my customers see?</span>
								</a>
							</div>
							<div class="tg-widgetdashboard">
								<div class="tg-dashboardnotification tg-jobsposted"><span>06</span>Total Job Posted</div>
								<div class="tg-dashboardnotification tg-jobsremaining"><span>02</span>Total Job Remaining</div>
								<div class="tg-dashboardnotification tg-pkgexpirey"><span>13 days</span>silver package Expire in</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
							<div class="tg-pagehead">
								<figure class="tg-tutordp">
									<a href="dashboardtutor-favorites-listing.html#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboardtutor-favorites-listing.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboardtutor-favorites-listing.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnedit" href="dashboardtutor-favorites-listing.html#"><i class="fa fa-pencil"></i></a>
									<div class="tg-jobhead">
										<h2>Lawrence Troutman</h2>
										<div class="tg-subjects">Mathematics &amp; Statistics</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboardtutor-favorites-listing.html#">1509 view</a></li>
										</ul>
									</div>
								</div>
							</div>
							<form class="tg-formtheme">
								<fieldset>
									<h3>Favorites Listing</h3>
									<table class="table table-striped tg-dashboardtable">
										<thead>
											<tr>
												<th>title</th>
												<th>category</th>
												<th>action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="title">Chartered Certified Accountant</td>
												<td data-category="category">Jobs</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Manchester Sun Light</td>
												<td data-category="category">Tuition Centres</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Jenna Strope</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Success Road Academy</td>
												<td data-category="category">Tuition Centres</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">State College Of Sydney</td>
												<td data-category="category">Tuition Centres</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Ahmad Carstensen</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Dustin Mckillop</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Female Home Tutor Required</td>
												<td data-category="category">Jobs</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Manchester University</td>
												<td data-category="category">Tuition Centres</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Dolores Mcreynolds</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Ahmad Carstensen</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Teaching A-Levels Psychology</td>
												<td data-category="category">Jobs</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Gracia Peluso</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Denae Maclachlan</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Freeman Cannon</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Adrianne Klopfenstein</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Maryalice Lundholm</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Karey Runnels</td>
												<td data-category="category">Tutors</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
											<tr>
												<td data-title="title">Teaching A-Levels Psychology</td>
												<td data-category="category">Jobs</td>
												<td data-action="action"><i class="fa fa-close"></i></td>
											</tr>
										</tbody>
									</table>
								</fieldset>
							</form>
							<nav class="tg-pagination">
								<ul>
									<li class="tg-prevpage"><a href="dashboardtutor-favorites-listing.html#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="dashboardtutor-favorites-listing.html#">1</a></li>
									<li><a href="dashboardtutor-favorites-listing.html#">2</a></li>
									<li><a href="dashboardtutor-favorites-listing.html#">3</a></li>
									<li class="tg-active"><a href="dashboardtutor-favorites-listing.html#">4</a></li>
									<li><a href="dashboardtutor-favorites-listing.html#">5</a></li>
									<li>...</li>
									<li><a href="dashboardtutor-favorites-listing.html#">10</a></li>
									<li class="tg-nextpage"><a href="dashboardtutor-favorites-listing.html#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		@include('frontend.footer')	