<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecontroller extends CI_Controller {

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



    function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        
	    $this->load->helper('url');     
	    $this->base = $this->config->item('base_url');
        //$this->load->model('tionmodel');
        // $this->load->database();
        //Load them in the constructor
        
        
    }




	public function index()
	{

		$this->load->view('welcome_message');
		$this->load->view('loadscript');
	}

	public function index_content()
	{
		$this->load->view('load_content_index');

	}
}
