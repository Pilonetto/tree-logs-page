<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model('Welcome_model'); // carregamos o model
        $this->load->library('session');        
        $this->load->library('form_validation');
		$this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['users'] = $this->Welcome_model->get_all_logs();	
		$this->load->view('logs',$data);
	}
}
