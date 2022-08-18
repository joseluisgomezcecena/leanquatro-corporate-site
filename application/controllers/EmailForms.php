<?php

class Forms extends CI_Controller{

	public function create()
	{
		$data['title'] = 'Send Email';


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');


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

			//$this->FormModel->create_sup();
			$this->FormModel->sendMail();

			//session message
			$this->session->set_flashdata('sent', 'Email has been sent.');

			redirect(base_url() . 'contact');
		}

	}


	public function request($id = NULL)
	{
		$data['title'] = 'Request';
		$data['sup'] = $this->FormModel->get_single_sup($id);
		$data['details'] = $this->FormModel->get_single_sup_details($id);

		$this->form_validation->set_rules('id', 'ID', 'required');
		$this->form_validation->set_rules('contador', 'Seleccion de partes', 'required');
		$this->form_validation->set_rules('checked', 'Insertos seleccionados', 'required|greater_than[0]');
		$this->form_validation->set_rules('location', 'Planta', 'required');


		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('forms/request', $data);
			$this->load->view('templates/footer');
		}
		else
		{

			$this->FormModel->request();

			//session message
			$this->session->set_flashdata('pedido', 'Se ha pedido el molde.');



			//email test

			$this->load->library('email');

			$subject = 'This is a test';
			$message = '<p>This message has been sent for testing purposes.</p>';

			$result = $this->email
				->from('jgomez@martechmedical.com')
				->reply_to('noreply@martechmedical.com')    // Optional, an account where a human being reads.
				->to('jgomez@martechmedical.com')
				->subject($subject)
				->message($message)
				->send();

			var_dump($result);
			echo '<br />';
			echo $this->email->print_debugger();

			exit;


			//email test end

			//redirect(base_url() . 'forms/request');
			redirect(base_url());
		}

	}



	public function get_insert_details()
	{
		// POST data
		$postData = $this->input->post();

		// load model
		$this->load->model('FormModel');

		// get data
		$data = $this->FormModel->get_insert_details($postData);
		echo json_encode($data);
	}





}
