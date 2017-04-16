<?php 
class Pages extends CI_Controler {

	public function view($page = 'home')
	{
		if (! file exists(APPPATH.'views/pages'.$page.'.php'))
		{
			echo ("page does not exist");
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('');
		$this->load->
	}
}