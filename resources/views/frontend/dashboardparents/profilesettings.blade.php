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
									<a href="dashboard-tuition-profile-setting.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-profile-setting.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-profile-setting.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-profile-setting.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-profile-setting.html#">2212 view</a></li>
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
								<a class="tg-customerviewpage" href="dashboard-tuition-profile-setting.html#">
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
									<a href="dashboard-tuition-profile-setting.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-profile-setting.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-profile-setting.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-profile-setting.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-profile-setting.html#">2212 view</a></li>
										</ul>
									</div>
								</div>
							</div>
							<form class="tg-formtheme">
								<fieldset>
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<h3>Upload Profile Photo</h3>
												<div class="tg-fileupload tg-uploaddp tg-uploading">
													<div class="tg-dragfiles">
														<label for="file1">
															<span class="tg-filetype">.jpg</span>
															<span class="tg-text">Drag &amp; Drop</span>
															<span>Your files here, or <span>Browse</span> <i class="fa fa-exclamation-circle"></i></span>
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<input id="file1" type="file" name="file" class="form-control">
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<h3>Upload Timeline Photo</h3>
												<div class="tg-timelinedp">
													<figure>
														<img src="/images/img-03.jpg" alt="image description">
														<figcaption><i class="fa fa-close"></i></figcaption>
													</figure>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Personal Details</h3>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="tuitionname" class="form-control" placeholder="Tuition Centre Name *">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="tagline" class="form-control" placeholder="Tag line">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Email *">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="contact" class="form-control" placeholder="Contact *">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="Fax" class="form-control" placeholder="Fax">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="skype" class="form-control" placeholder="Skype *">
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="form-group">
											<span class="tg-select">
												<select data-placeholder="Languages" class="chosen-select form-control" multiple tabindex="2">
													<option value="English">English</option>
													<option value="Arabic">Arabic</option>
													<option value="Chinese">Chinese</option>
													<option value="Urdu">Urdu</option>
													<option value="Hindi">Hindi</option>
													<option value="German">German</option>
												</select>
											</span>
										</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" name="url" class="form-control" placeholder="URL">
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Add Your Location</h3>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<span class="tg-select">
													<select>
														<option>Country *</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<span class="tg-select">
													<select>
														<option>State *</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<span class="tg-select">
													<select>
														<option>City *</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</span>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<span class="tg-geolocationicon">
													<input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
												</span>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<div id="tg-addressmap" class="tg-addressmap"></div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Social Details</h3>
										</div>
										<div class="col-sm-12 col-xs-12">
											<input type="text" class="tg-url form-control" placeholder="Add Facebook URL">
											<input type="text" class="tg-url form-control" placeholder="Add Twitter URL">
											<input type="text" class="tg-url form-control" placeholder="Add Linkedin URL">
											<input type="text" class="tg-url form-control" placeholder="Add Google Plus URL">
											<input type="text" class="tg-url form-control" placeholder="Add Facebook URL">
											<input type="text" class="tg-url form-control" placeholder="Add Youtube URL">
											<div class="tg-addinputfield">
												<span class="tg-select">
													<select>
														<option>Select Social</option>
														<option>Facebook</option>
														<option>Twitter</option>
														<option>Linkedin</option>
														<option>Rss</option>
														<option>dribbble</option>
														<option>Google+</option>
														<option>YouTube</option>
														<option>LinkedIn Pulse</option>
														<option>Tumblr</option>
														<option>Pinterest</option>
														<option>Instagram</option>
													</select>
												</span>
												<a class="tg-btn" href="javascript:void(0);">add now</a>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>About Tuition Centre</h3>
										</div>
										<div class="col-sm-12 col-xs-12">
											<div class="form-group">
												<textarea class="form-control" placeholder="Description"></textarea>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Add Your Honour &amp; Awards</h3>
											<ul class="tg-list tg-experiencelist">
												<li>
													<i class="fa fa-close"></i>
													<div class="tg-experiencetitle">
														<h4>Best Speech On Parent Meeting (Mar, 2015)</h4>
													</div>
													<div class="tg-subjects">MUniversity of Manchester</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
													</div>
												</li>
											</ul>
											<div class="tg-addexperience">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
														<input type="text" name="awardtitle" class="form-control" placeholder="Award Title">
													</div>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12">
													<div class="form-group">
														<input type="text" name="occasion" class="form-control" placeholder="Occasion">
													</div>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12">
													<div class="form-group tg-inputicon">
														<input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
														<span class="fa fa-calendar-check-o"></span>
													</div>
												</div>
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
														<textarea class="form-control" placeholder="Description"></textarea>
													</div>
												</div>
												<div class="col-sm-12 col-xs-12">
													<button type="submit" class="tg-btn">Add now</button>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Add Presentation Video Link</h3>
											<ul class="tg-videos">
												<li>
													<figure><a href="dashboard-tuition-profile-setting.html#"><img src="/images/videos/img-01.jpg" alt="image description"></a></figure>
													<div class="tg-description">
														<a href="dashboard-tuition-profile-setting.html#"><i class="fa fa-pencil"></i></a>
														<span class="tg-videolink"><a href="dashboard-tuition-profile-setting.html#">www.youtube.com/tutortutortutortutortutortutortutortutor</a></span>
														<a class="tg-btndelete" href="dashboard-tuition-profile-setting.html#"><i class="fa fa-close"></i></a>
													</div>
												</li>
												<li>
													<figure><a href="dashboard-tuition-profile-setting.html#"><img src="/images/videos/img-02.jpg" alt="image description"></a></figure>
													<div class="tg-description">
														<a href="dashboard-tuition-profile-setting.html#"><i class="fa fa-pencil"></i></a>
														<span class="tg-videolink"><a href="dashboard-tuition-profile-setting.html#">www.youtube.com/tutortutortutortutortutortutortutortutor</a></span>
														<a class="tg-btndelete" href="dashboard-tuition-profile-setting.html#"><i class="fa fa-close"></i></a>
													</div>
												</li>
												<li>
													<figure><a href="dashboard-tuition-profile-setting.html#"><img src="/images/videos/img-03.jpg" alt="image description"></a></figure>
													<div class="tg-description">
														<a href="dashboard-tuition-profile-setting.html#"><i class="fa fa-pencil"></i></a>
														<span class="tg-videolink"><a href="dashboard-tuition-profile-setting.html#">www.youtube.com/tutortutortutortutortutortutortutortutor</a></span>
														<a class="tg-btndelete" href="dashboard-tuition-profile-setting.html#"><i class="fa fa-close"></i></a>
													</div>
												</li>
											</ul>
											<div class="tg-addinputfield">
												<span class="tg-select">
													<select>
														<option>Video Link</option>
														<option>Video Link</option>
														<option>Video Link</option>
													</select>
												</span>
												<a class="tg-btn" href="javascript:void(0);">add now</a>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<h3>Upload Photo Gallery</h3>
										</div>
										<div class="col-sm-5 col-xs-12">
											<div class="form-group">
												<div class="tg-fileupload tg-uploading">
													<div class="tg-dragfiles">
														<label for="file">
															<span class="tg-filetype">.jpg</span>
															<span class="tg-text">Drag &amp; Drop</span>
															<span>Your files here, or <span>Browse</span> <i class="fa fa-exclamation-circle"></i></span>
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<input id="file" type="file" name="file" class="form-control">
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-7 col-xs-12">
											<div class="form-group">
												<div class="tg-gallery">
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-07.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-08.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-09.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-10.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-11.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-12.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-13.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-14.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-15.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg">
														<figure>
															<img src="/images/thumbnails/img-16.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
													</div>
													<div class="tg-galleryimg tg-uploading">
														<figure>
															<img src="/images/thumbnails/img-17.jpg" alt="image description">
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<span class="tg-uploadingbar"></span>
														</figure>
													</div>
													<div class="tg-galleryimg tg-uploading">
														<figure>
															<img src="/images/thumbnails/img-18.jpg" alt="image description">
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<span class="tg-uploadingbar"></span>
														</figure>
													</div>
													<div class="tg-galleryimg tg-uploading">
														<figure>
															<img src="/images/thumbnails/img-19.jpg" alt="image description">
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<span class="tg-uploadingbar"></span>
														</figure>
													</div>
													<div class="tg-galleryimg tg-uploading">
														<figure>
															<img src="/images/thumbnails/img-20.jpg" alt="image description">
															<span class="tg-loader"><i class="fa fa-spinner"></i></span>
															<span class="tg-uploadingbar"></span>
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<a class="tg-btn" href="dashboard-tuition-profile-setting.html#">update all changes</a>
									<span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
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