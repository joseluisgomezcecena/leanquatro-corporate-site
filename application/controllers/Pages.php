<?php

class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH . 'views/pages/' . $page . '.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);


		if($page == "contact")
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('pages/' . $page, $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/hero');
			$this->load->view('pages/' . $page, $data); //loading page and data
			$this->load->view('templates/footer');

		}
	}



}
