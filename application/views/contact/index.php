<!-- Start Section-->
<section class="bg-green2 relative md:py-24 py-16 overflow-hidden" style="background: url('<?php echo base_url() ?>assets/images/app/bg.png') top no-repeat fixed;">
	<div class="absolute inset-0 bg-green opacity-80"></div>


	<div  class="alerts   grid grid-cols-4 sm:grid-cols-1  gap-4 items-center justify-center container mb-5">
			<?php if($this->session->flashdata('sent')): ?>

				<div id="success-msg" class=" green-text mt-12 w-full  black-background rounded-md shadow-xl px-6 py-8">

					<h2 class="font-semibold text-gray-800">Message Sent</h2>
					<p class="mt-2 text-sm text-gray-600 leading-relaxed">Your message was sent we'll get back to you ASAP.</p>
					<br/>
					<button id="success-btn" class="btn bg-white text-dark hover:text-white hover:bg-success-600 rounded-md w-full justify-center flex items-center">Ok</button>
				</div>
			<?php endif; ?>

			<?php if($this->session->flashdata('error')): ?>
				<div id="error-msg" class="mt-12 w-full text-white black-background rounded-md shadow-xl px-6 py-8">

					<h2 class="font-semibold text-white">There was an error.</h2>
					<p class="mt-2 text-sm text-white leading-relaxed">
						<?php echo $this->session->flashdata('error'); ?>
					</p>
					<br/>
					<button id="error-btn" class="btn bg-danger-600 text-white hover:text-danger-600 hover:bg-white rounded-md w-full justify-center flex items-center">Ok</button>

					<?php

					?>
				</div>
			<?php endif; ?>
	</div>







	<div class="grid grid-cols-4 sm:grid-cols-1  gap-4 items-center justify-center container mb-5">
		<div class="mt-12 w-full  bg-white rounded-md shadow-xl px-6 py-8">




			<a href="index.html"><img src="<?php  echo base_url() ?>assets/images/app/favicon-01.png" class="mx-auto" alt=""></a>
			<h3 class="my-6 text-2xl leading-normal font-medium text-center">Get in touch !</h3>

			<?php echo form_open(base_url() . 'contact') ?>
			<!--
			<form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
			-->
				<p class="mb-0" id="error-msg"></p>
				<div id="simple-msg"></div>
				<div class="grid lg:grid-cols-12 lg:gap-6">
					<div class="lg:col-span-6 mb-5">
						<div class="text-left">
							<label for="name" class="font-semibold">Your Name:</label>
							<div class="form-icon relative mt-2">
								<i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
								<input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :" required>
							</div>
						</div>
					</div>

					<div class="lg:col-span-6 mb-5">
						<div class="text-left">
							<label for="email" class="font-semibold">Your Email:</label>
							<div class="form-icon relative mt-2">
								<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
								<input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :" required>
							</div>
						</div>
					</div>
				</div>

				<div class="grid grid-cols-1">
					<div class="mb-5">
						<div class="text-left">
							<label for="subject" class="font-semibold">Your Question:</label>
							<div class="form-icon relative mt-2">
								<i data-feather="book" class="w-4 h-4 absolute top-3 left-4"></i>
								<input name="subject" id="subject" class="form-input pl-11" placeholder="Subject :" required>
							</div>
						</div>
					</div>

					<div class="mb-5">
						<div class="text-left">
							<label for="comments" class="font-semibold">Your Comment:</label>
							<div class="form-icon relative mt-2">
								<i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
								<textarea name="message" id="comments" class="form-input pl-11 textarea" placeholder="Message :"></textarea>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" id="submit" name="send" class="btn bg-black text-white rounded-md w-full justify-center flex items-center">Send Message</button>
			<!--
			</form>
			-->
			<?php echo form_close() ?>
		</div>

	</div>
</section>

<div class="relative">
	<div class="shape overflow-hidden z-1 text-light-900">
		<svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
		</svg>
	</div>
</div>
<!-- End Section-->
<script
		src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
<script>

	$( "#success-btn" ).click(function() {
		$("#success-msg").fadeOut(500);
	});

	$( "#error-btn" ).click(function() {
		$("#error-msg").fadeOut(500);
	});
</script>
