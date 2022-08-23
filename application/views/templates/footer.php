
<!-- Footer Start -->
<footer class="footer">
	<div class="container">
		<div class="grid grid-cols-12">
			<div class="col-span-12">
				<div class="footer-py-60">
					<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
						<div class="lg:col-span-4 md:col-span-12">
							<a href="#" class="logo-footer">
								<img src="<?php echo base_url() ?>assets/images/app/light-01.png" alt="">
							</a>
							<p class="mt-6 text-gray-300">Get the Lean Quatro App and start minimizing downtimes!</p>
							<ul class="list-none social-icon foot-social-icon mt-6">
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-success-600 bg-green"><i data-feather="facebook" class="h-4 w-4 text-black"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-success-600 bg-green"><i data-feather="instagram" class="h-4 w-4 text-black"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-success-600 bg-green"><i data-feather="twitter" class="h-4 w-4 text-black"></i></a></li>
								<li class="inline"><a href="" class="btn btn-icon btn-sm border icon-border rounded-md hover:border-success-600 bg-green"><i data-feather="linkedin" class="h-4 w-4 text-black"></i></a></li>
							</ul><!--end icon-->
						</div><!--end col-->

						<div class="lg:col-span-2 md:col-span-4">
							<h5 class="footer-head">Company</h5>
							<ul class="list-none footer-list mt-6">
								<li><a href="#" class="text-gray-300 hover:text-gray-400"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
							</ul>
						</div><!--end col-->

						<div class="lg:col-span-3 md:col-span-4">
							<h5 class="footer-head">Usefull Links</h5>
							<ul class="list-none footer-list mt-6">
								<li><a href="http://app.leanquatro.com" class="text-gray-300 hover:text-gray-400"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
							</ul>
						</div><!--end col-->

						<div class="lg:col-span-3 md:col-span-4">
							<h5 class="footer-head">Newsletter</h5>
							<p class="mt-6">Sign up and receive the latest tips via email.</p>
							<form method="post">
								<div class="grid grid-cols-1">
									<div class="foot-subscribe my-3">
										<label class="form-label">Write your email <span class="text-danger-600">*</span></label>
										<div class="form-icon relative mt-2">
											<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
											<input type="email" class="form-input pl-12" placeholder="Email" name="email" required="">
										</div>
									</div>

									<button type="submit" id="submitsubscribe" name="send" class="btn btn-primary rounded-md">Subscribe</button>
								</div>
							</form>
						</div><!--end col-->
					</div><!--end grid-->
				</div><!--end col-->
			</div>
		</div><!--end grid-->
	</div><!--end container-->





	<div class="footer-py-30 footer-bar">
		<div class="container text-center">
			<div class="grid md:grid-cols-2 items-center">
				<div class="md:text-left text-center">
					<p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Lean Quatro. App developed by <a href="https://nexussoftwaresolutions.com" target="_blank" class="text-reset">Nexus Software Solutions</a>.</p>
				</div>

				<ul class="list-none md:text-right text-center mt-6 md:mt-0">

				</ul>
			</div><!--end grid-->
		</div><!--end container-->
	</div>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Start Cookie Popup -->
<div class="cookie-popup fixed max-w-lg bottom-3 right-3 left-3 sm:left-0 sm:right-0 mx-auto bg-white shadow rounded-md py-5 px-6 z-10">
	<p class="text-muted-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-success-600 font-semibold">use of cookies</a></p>
	<div class="cookie-popup-actions text-right">
		<button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2"><i class="uil uil-times text-dark text-2xl"></i></button>
	</div>
</div><!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-green text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="<?php echo base_url() ?>assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="<?php echo base_url() ?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins.init.js"></script>
<script src="<?php echo base_url() ?>assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
