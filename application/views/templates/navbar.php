<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
	<div class="container">
		<!-- Logo container-->
		<a class="logo" href="<?php echo base_url() ?>">
                    <span class="logo-light-mode">
                        <img src="<?php echo base_url() ?>assets/images/app/logoweb-dark-01.png" class="l-dark" height="24" alt="">
                        <img src="<?php echo base_url() ?>assets/images/app/light-01.png" class="l-light" height="24" alt="">
                    </span>
			<img src="images/logo-light.png" height="24" class="logo-dark-mode" alt="">
		</a>

		<!-- End Logo container-->
		<div class="menu-extras">
			<div class="menu-item">
				<!-- Mobile menu toggle-->
				<a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
					<div class="lines">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				<!-- End mobile menu toggle-->
			</div>
		</div>

		<!--Login button Start-->
		<ul class="buy-button list-none mb-0">
			<!--
			 <li class="inline mb-0">
				 <a href="">
					 <div class="login-btn-primary"><span class="btn btn-icon btn-primary btn-soft">Login<i data-feather="users" class="h-4 w-4"></i></span></div>
				 </a>
			 </li>
			 -->

			<!--
			<li class="inline pl-1 mb-0">
				<a href="#" target="_blank">
					<div class="login-btn-primary"><span class="btn btn-icon rounded-full btn-primary"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
					<div class="login-btn-light"><span class="btn btn-icon rounded-full btn-light"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
				</a>
			</li>
			-->
		</ul>
		<!--Login button End-->

		<div id="navigation">
			<!-- Navigation Menu-->
			<ul class="navigation-menu nav-light">
				<li><a href="<?php echo base_url() ?>" class="sub-menu-item">Home</a></li>

				<!--
				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>

					<ul class="submenu megamenu">
						<li>
							<ul>
								<li><a href="index-saas.html" class="sub-menu-item">Saas</a></li>
								<li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
								<li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
								<li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
								<li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
								<li><a href="index-job.html" class="sub-menu-item">Job</a></li>
								<li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
								<li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
								<li><a href="index-gym.html" class="sub-menu-item">Gym</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
								<li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
								<li><a href="index-business.html" class="sub-menu-item">Business</a></li>
								<li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency</a></li>
								<li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
								<li><a href="index-portfolio.html" class="sub-menu-item">Portfolio</a></li>
								<li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
								<li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
								<li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
								<li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
							</ul>
						</li>
					</ul>
				</li>
				-->
				<!--
				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Andon App</a><span class="menu-arrow"></span>
					<ul style="" class="submenu">

						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
							<ul style="" class="submenu text-black">
								<li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
								<li><a href="page-services.html" class="sub-menu-item">Services</a></li>
								<li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
								<li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
							</ul>
						</li>

						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
								<li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
								<li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
								<li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
								<li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
								<li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
								<li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
								<li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
								<li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
								<li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
								<li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
								<li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
								<li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
								<li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
								<li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
								<li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
								<li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
								<li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
								<li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
								<li><a href="page-error.html" class="sub-menu-item">Error</a></li>
								<li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
								<li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
								<li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
							</ul>
						</li>
						<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
							<ul class="submenu">
								<li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
								<li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
									<ul class="submenu">
										<li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
										<li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-submenu parent-parent-menu-item">
					<a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
					<ul class="submenu megamenu">
						<li>
							<ul>
								<li class="megamenu-head">Modern Portfolio</li>
								<li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Classic Portfolio</li>
								<li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Creative Portfolio</li>
								<li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Masonry Portfolio</li>
								<li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
								<li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
								<li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
								<li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
								<li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
							</ul>
						</li>

						<li>
							<ul>
								<li class="megamenu-head">Portfolio Detail</li>
								<li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
								<li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
								<li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
								<li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
							</ul>
						</li>
					</ul>
				</li>
				-->
				<li class="has-submenu parent-menu-item">
					<a href="javascript:void(0)">The App</a><span class="menu-arrow"></span>
					<ul class="submenu">
						<li><a href="<?php echo base_url() ?>#howwedoit" class="sub-menu-item">How we do it</a></li>
						<li><a href="<?php echo base_url() ?>#whatwedo" class="sub-menu-item">What we do</a></li>
					</ul>
				</li>

				<li><a href="<?php echo base_url() ?>contact" class="sub-menu-item">Contact</a></li>

				<li><a href="http://app.leanquatro.com" class="sub-menu-item">Login</a></li>

			</ul><!--end navigation menu-->
		</div><!--end navigation-->
	</div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
