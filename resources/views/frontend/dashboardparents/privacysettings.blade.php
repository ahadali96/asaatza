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
									<a href="dashboard-tuition-centres-privacy-settings.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-centres-privacy-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-centres-privacy-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-centres-privacy-settings.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-centres-privacy-settings.html#">2212 view</a></li>
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
					<div id="tg-content" class="tg-content tg-dashboard tg-tuitiondashboard">
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
							@include('frontend.dashboardparents.dashboardwidget')
							<div class="tg-widgetdashboard">
								<a class="tg-customerviewpage" href="dashboard-tuition-centres-privacy-settings.html#">
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
									<a href="dashboard-tuition-centres-privacy-settings.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-centres-privacy-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-centres-privacy-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-centres-privacy-settings.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-centres-privacy-settings.html#">2212 view</a></li>
										</ul>
									</div>
								</div>
							</div>
							<form class="tg-formtheme">
								<div class="tg-formhead">
									<h3>Privacy Settings</h3>
									<span class="tg-iosstylcheckbox">
										<input type="checkbox" id="allsetting" name="allsetting" value="allsetting" checked>
										<label for="allsetting"></label>
									</span>
								</div>
								<fieldset>
									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Profile Picture</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="profilepicture" name="profilepicture" value="profilepicture">
														<label for="profilepicture"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Timeline Picture</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="timelinepicture" name="timelinepicture" value="timelinepicture" checked>
														<label for="timelinepicture"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Social Detail</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="socialdetail" name="socialdetail" value="socialdetail" checked>
														<label for="socialdetail"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Location</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="location" name="location" value="location">
														<label for="location"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>About Me</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="aboutme" name="aboutme" value="aboutme" checked>
														<label for="aboutme"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Schedule</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="schedule" name="schedule" value="schedule">
														<label for="schedule"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Contact Form</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="contactform" name="contactform" value="contactform" checked>
														<label for="contactform"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Skills</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="skills" name="skills" value="skills">
														<label for="skills"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Experience</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="experience" name="experience" value="experience" checked>
														<label for="experience"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Qualification</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="qualification" name="qualification" value="qualification" checked>
														<label for="qualification"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Honour &amp; Awards</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="honourawards" name="honourawards" value="honourawards">
														<label for="honourawards"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Presentation Video</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="presentationvideo" name="presentationvideo" value="presentationvideo" checked>
														<label for="presentationvideo"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Photo Gallery</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="photogallery" name="photogallery" value="photogallery">
														<label for="photogallery"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Review &amp; Rating</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="reviewrating" name="reviewrating" value="reviewrating" checked>
														<label for="reviewrating"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Price Per Hour</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="priceperhour" name="priceperhour" value="priceperhour">
														<label for="priceperhour"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Language</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="language" name="language" value="language">
														<label for="language"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Gender</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="gender" name="gender" value="gender" checked>
														<label for="gender"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Age Range</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="agerange" name="agerange" value="agerange">
														<label for="agerange"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Public URL</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="publicurl" name="publicurl" value="publicurl" checked>
														<label for="publicurl"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Contact Details</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="contactdetails" name="contactdetails" value="contactdetails" checked>
														<label for="contactdetails"></label>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<div class="tg-optionbox">
													<span>Views</span>
													<span class="tg-iosstylcheckbox">
														<input type="checkbox" id="views" name="views" value="views">
														<label for="views"></label>
													</span>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
							</form>
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