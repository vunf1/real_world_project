<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecontroller extends CI_Controller {

	/**
	 * Index controller.
	 */

    function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        
	    $this->load->helper('url');     
	    $this->base = $this->config->item('base_url');
	    //autoload.config -$this->load->library('unit_test');
		//autoload.config -$this->load->library('user_agent');//Check if is mobile or desktop interface, can give a lot of information, check docs for more information;
		
        //Load them in the constructor - Pre-Load
       	$this->load->model('datafunction');


       
        
        
    }




	public function index()
	{

		$this->load->view('welcome_message');
		$this->load->view('loadscript');



	}

	public function index_content()
	{
		
		//var_dump($this->agent->is_mobile());
		//var_dump($this->agent->is_browser());
		//$json=$this->Datafunction->get_jsonfile_data();
		$result['json']=$this->datafunction->get_jsonfile_data();
		//json inside result will be a variable on the view to be handle
		$this->load->view('load_content_index',$result);


	}
}
