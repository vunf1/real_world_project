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
		
		$this->load->library('form_validation');
	    //autoload.config -$this->load->library('unit_test');
		//autoload.config -$this->load->library('user_agent');//Check if is mobile or desktop interface, can give a lot of information, check docs for more information;
		5
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
		//$this->load->view('load_content_index',$result);
	}
    
    
	public function index_contentNavCam()
	{
		
		
		$result['json']=$this->datafunction->get_jsonfile_data();
		//json inside result will be a variable declared json on the view to be handle.
		$this->load->view('navigateCampus',$result);


	}

    //function called to connect with the model to send the data inserted in the buildings search bar
    public function searchBuildings() {
		//At moment is looking for the BuildCode on the file, searching bar need to be the Code
		$search=$this->input->post('searchTxT');//getRequestData
		
		$data=$this->datafunction->get_jsonfile_data();

		for ($x=0; $x < count($data); $x++) { 
			if($data[$x]['buildCode']==strtoupper($search)){
				echo json_encode($data[$x]);
			}
		}
		

	}


	


}
