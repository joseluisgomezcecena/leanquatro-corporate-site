<?php

class EmailForms extends CI_Controller{

	public function send()
	{
		$data['title'] = 'Send Email';


		$name = $this->form_validation->set_rules('name', 'Name', 'required');
		$email = $this->form_validation->set_rules('email', 'Email', 'required');
		$subject = $this->form_validation->set_rules('subject', 'Subject', 'required');
		$message = $this->form_validation->set_rules('message', 'Message', 'required');


		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);


		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('pages/contact' , $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			$to = "info@leanquatro.com, info@nexussoftwaresolutions.com";
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
