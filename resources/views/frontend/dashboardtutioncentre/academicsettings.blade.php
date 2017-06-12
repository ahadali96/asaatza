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
									<a href="dashboard-tuition-centres-academics-settings.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-centres-academics-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-centres-academics-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-centres-academics-settings.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-centres-academics-settings.html#">2212 view</a></li>
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
							@include('frontend.dashboardtutioncentre.dashboardwidget')
							<div class="tg-widgetdashboard">
								<a class="tg-customerviewpage" href="dashboard-tuition-centres-academics-settings.html#">
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
									<a href="dashboard-tuition-centres-academics-settings.html#"><img src="/images/thumbnails/img-21.jpg" alt="image description"></a>
									<figcaption>
										<a class="tg-usericon tg-iconfeatured" href="dashboard-tuition-centres-academics-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-bolt"></i>
												<span>featured</span>
											</em>
										</a>
										<a class="tg-usericon tg-iconvarified" href="dashboard-tuition-centres-academics-settings.html#">
											<em class="tg-usericonholder">
												<i class="fa fa-shield"></i>
												<span>varified</span>
											</em>
										</a>
									</figcaption>
								</figure>
								<div class="tg-tutorinfo">
									<a class="tg-btnadd" href="dashboard-tuition-centres-academics-settings.html#"><i>+</i></a>
									<div class="tg-jobhead">
										<h2>Success Road Academy</h2>
										<div class="tg-subjects">Arts &amp; Design Academy</div>
										<ul class="tg-jobsmetadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="dashboard-tuition-centres-academics-settings.html#">2212 view</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tg-contentbox">
								<h2>Academics Settings</h2>
								<div class="tg-dashboarddepartments">
									<div class="tg-dashboarddepartment tg-academics tg-active">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-academics">
											<h3>Academics</h3>
											<span>07 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-craftsandart">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-craftsandarts">
											<h3>Crafts &amp; Arts</h3>
											<span>0 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-languages">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-languages">
											<h3>Languages</h3>
											<span>08 Items Selected</span>
										</a>
									</div>
									<div id="tg-academics" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-craftsandarts" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-languages" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div class="tg-dashboarddepartment tg-religioneducation">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-religioneducation">
											<h3>Religion Education</h3>
											<span>0 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-itandtechnology">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-itandtechnology">
											<h3>IT &amp; Technology</h3>
											<span>05 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-professional">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-professional">
											<h3>Professional</h3>
											<span>02 Items Selected</span>
										</a>
									</div>
									<div id="tg-religioneducation" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-itandtechnology" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-professional" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div class="tg-dashboarddepartment tg-lifestyle">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-lifestyle">
											<h3>Life Style</h3>
											<span>0 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-healthfitnesssports">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-healthfitnesssports">
											<h3>Health, Fitness, Sports</h3>
											<span>0 Items Selected</span>
										</a>
									</div>
									<div class="tg-dashboarddepartment tg-others">
										<a href="dashboard-tuition-centres-academics-settings.html#" data-related="tg-others">
											<h3>Others</h3>
											<span>0 Items Selected</span>
										</a>
									</div>
									<div id="tg-lifestyle" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-healthfitnesssports" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
									<div id="tg-others" class="tg-settingcontentarea">
										<div class="tg-settingbox">
											<h3>Pre School</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolall" name="preschool[]" value="all">
													<label for="preschoolall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschooldrawing" name="preschool[]" value="drawing">
													<label for="preschooldrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolenglish" name="preschool[]" value="english">
													<label for="preschoolenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolmath" name="preschool[]" value="math">
													<label for="preschoolmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="preschoolreligionknowledge" name="preschool[]" value="religion knowledge">
													<label for="preschoolreligionknowledge">religion knowledge</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Basic Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationall" name="basiceducation[]" value="all">
													<label for="basiceducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdrawing" name="basiceducation[]" value="drawing" checked>
													<label for="basiceducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationenglish" name="basiceducation[]" value="english">
													<label for="basiceducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationreligionknowledge" name="basiceducation[]" value="religion knowledge">
													<label for="basiceducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationsocialstudies" name="basiceducation[]" value="Social Studies">
													<label for="basiceducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology" name="basiceducation[]" value="Biology" checked>
													<label for="basiceducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationcomputer2" name="basiceducation[]" value="Computer">
													<label for="basiceducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationchemistry2" name="basiceducation[]" value="Chemistry">
													<label for="basiceducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationscience" name="basiceducation[]" value="Science" checked>
													<label for="basiceducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationbiology2" name="basiceducation[]" value="Biology">
													<label for="basiceducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationphysics2" name="basiceducation[]" value="Physics">
													<label for="basiceducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationdance2" name="basiceducation[]" value="Dance">
													<label for="basiceducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="basiceducationmath" name="basiceducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Secondary Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationall" name="secondaryeducation[]" value="all">
													<label for="secondaryeducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdrawing" name="secondaryeducation[]" value="drawing">
													<label for="secondaryeducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationenglish" name="secondaryeducation[]" value="english" checked>
													<label for="secondaryeducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationreligionknowledge" name="secondaryeducation[]" value="religion knowledge">
													<label for="secondaryeducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer2" name="secondaryeducation[]" value="Computer" checked>
													<label for="secondaryeducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationchemistry2" name="secondaryeducation[]" value="Chemistry">
													<label for="secondaryeducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationscience" name="secondaryeducation[]" value="Science">
													<label for="secondaryeducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationbiology2" name="secondaryeducation[]" value="Biology">
													<label for="secondaryeducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationphysics2" name="secondaryeducation[]" value="Physics">
													<label for="secondaryeducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationdance2" name="secondaryeducation[]" value="Dance">
													<label for="secondaryeducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationmath" name="secondaryeducation[]" value="math" checked>
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationsocialstudies2" name="secondaryeducation[]" value="Social Studies">
													<label for="secondaryeducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="secondaryeducationcomputer3" name="secondaryeducation[]" value="Computer">
													<label for="secondaryeducationcomputer3">Computer</label>
												</span>
											</div>
										</div>
										<div class="tg-settingbox">
											<h3>Higher Education</h3>
											<div class="tg-settingoption">
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationall" name="highereducation[]" value="all">
													<label for="highereducationall">all</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish" name="highereducation[]" value="english">
													<label for="highereducationenglish">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology" name="highereducation[]" value="Biology">
													<label for="highereducationbiology">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics" name="highereducation[]" value="Physics">
													<label for="highereducationphysics">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance" name="highereducation[]" value="Dance">
													<label for="highereducationdance">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationscience" name="highereducation[]" value="Science">
													<label for="highereducationscience">Science</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdance2" name="highereducation[]" value="Dance">
													<label for="highereducationdance2">Dance</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationmath" name="highereducation[]" value="math">
													<label for="basiceducationmath">math</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer3" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer3">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationdrawing2" name="highereducation[]" value="drawing">
													<label for="highereducationdrawing2">drawing</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationenglish2" name="highereducation[]" value="english">
													<label for="highereducationenglish2">english</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationreligionknowledge2" name="highereducation[]" value="religion knowledge">
													<label for="highereducationreligionknowledge2">religion knowledge</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationsocialstudies2" name="highereducation[]" value="Social Studies">
													<label for="highereducationsocialstudies2">Social Studies</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationcomputer2" name="highereducation[]" value="Computer">
													<label for="highereducationcomputer2">Computer</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationchemistry2" name="highereducation[]" value="Chemistry">
													<label for="highereducationchemistry2">Chemistry</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationbiology2" name="highereducation[]" value="Biology">
													<label for="highereducationbiology2">Biology</label>
												</span>
												<span class="tg-skillcheckbox">
													<input type="checkbox" id="highereducationphysics2" name="highereducation[]" value="Physics">
													<label for="highereducationphysics2">Physics</label>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tg-contentbox">
								<button class="tg-btn" type="submit">Update All Changes</button>
								<span class="tg-notice">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
							</div>
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