<?php

class EmailForms extends CI_Controller{

	public function send()
	{
		$data['title'] = 'Send Email';


		$name = $this->form_validation->set_rules('name', 'Name', 'required');
		$email = $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$subject = $this->form_validation->set_rules('subject', 'Subject', 'required|min_length[5]');
		$message = $this->form_validation->set_rules('message', 'Message', 'required|min_length[5]');


		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url() . 'contact');

		}
		else
		{

			$to = "info@leanquatro.com";
			$subject = "$subject";
			$message = "$message  <br>$name<br>$email";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <info@leanquatro.com>' . "\r\n";

			mail($to,$subject,$message,$headers);

			//session message
			$this->session->set_flashdata('sent', 'Email has been sent.');

			redirect(base_url() . 'contact');
		}

	}



}
