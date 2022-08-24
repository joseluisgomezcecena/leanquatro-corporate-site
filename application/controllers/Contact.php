<?php

class Contact extends CI_Controller{

	public function index()
	{
		$data['title'] = 'Send Email';


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[5]');
		$this->form_validation->set_rules('message', 'Message', 'required|min_length[5]');


		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('pages/contact',$data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{

			$to = "info@leanquatro.com";
			$subject = "Contact Form Message";
			$message = $this->input->post('message') . "\r\n\r\n" . "From: " . $this->input->post('name') . " <" . $this->input->post('email') . ">";
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
