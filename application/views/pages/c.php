<div class="max-w-[400px] w-full bg-white rounded-md shadow-xl px-6 py-8">
	<a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>
	<h3 class="my-6 text-2xl leading-normal font-medium text-center">Get in touch !</h3>

	<form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
		<p class="mb-0" id="error-msg"></p>
		<div id="simple-msg"></div>
		<div class="grid lg:grid-cols-12 lg:gap-6">
			<div class="lg:col-span-6 mb-5">
				<div class="text-left">
					<label for="name" class="font-semibold">Your Name:</label>
					<div class="form-icon relative mt-2">
						<i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
						<input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
					</div>
				</div>
			</div>

			<div class="lg:col-span-6 mb-5">
				<div class="text-left">
					<label for="email" class="font-semibold">Your Email:</label>
					<div class="form-icon relative mt-2">
						<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
						<input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
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
						<input name="subject" id="subject" class="form-input pl-11" placeholder="Subject :">
					</div>
				</div>
			</div>

			<div class="mb-5">
				<div class="text-left">
					<label for="comments" class="font-semibold">Your Comment:</label>
					<div class="form-icon relative mt-2">
						<i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
						<textarea name="comments" id="comments" class="form-input pl-11 textarea" placeholder="Message :"></textarea>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" id="submit" name="send" class="btn btn-primary rounded-md w-full justify-center flex items-center">Send Message</button>
	</form>
</div>
