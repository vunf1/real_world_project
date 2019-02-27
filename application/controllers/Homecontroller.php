<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecontroller extends CI_Controller {

	/**
	 * Index controller.
	 */

    function __construct(){
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        
	    $this->load->helper('url');     
		$this->base = $this->config->item('base_url');
		
		$this->load->library('form_validation');
	    //autoload.config -$this->load->library('unit_test');
		//autoload.config -$this->load->library('user_agent');//Check if is mobile or desktop interface, can give a lot of information, check docs for more information;
       	$this->load->model('datafunction');
    }




	public function index(){
		
		$this->load->view('welcome_message');
		$this->load->view('loadscript');//if put frist create a bug



	}

	public function index_content(){
		
		//var_dump($this->agent->is_mobile());
		//var_dump($this->agent->is_browser());
		//$json=$this->Datafunction->get_jsonfile_data();
		$result['json']=$this->datafunction->get_jsonfile_data();
		//json inside result will be a variable on the view to be handle
		$this->load->view('load_content_index',$result);
		//$this->load->view('load_content_index',$result);
	}
    
   
	public function index_contentNavCam(){
	 /*
	 * 
	 * 
		*json inside result will be a variable declared 'json' on the view to be handle/manipulated.
	 */	
		
		$result['json']=$this->datafunction->get_jsonfile_data();
		$this->load->view('navigateCampus',$result);


	}

	public function index_loadScanPage(){
	 /*
	 * 
	 * 
		*json inside result['json'] will be a variable declared 'json' on the view to be handle/manipulated.

		*to access the variable only need to open a php cube on the html/js code <?php <loop for $json> ?>

		*Code snippets on view page(application/view/load_content_index.php)
	 */	

		
		$result['json']=$this->datafunction->get_jsonfile_data();
		
		$this->load->view('qr-Code',$result);
		
		


	}




    //function called to connect with the model to send the data inserted in the buildings search bar
    public function searchBuildings() {
		//At moment is looking for the BuildCode on the file, searching bar need to be the Code
		
		
		//Multi 'Build' Data SEND
		$search=$this->input->post('searchTxT');//POST variable sended
		
		$data=$this->datafunction->get_jsonfile_data();//Model call
		$endSearchData=array();
		$counte=0;
		for ($x=0; $x < count($data); $x++) {
			if($data[$x]['tags']){
				//var_dump( $data[$x]['tags'][0],"OK");
				
				for ($y=0; $y < count($data[$x]['tags']); $y++) {
					
					if($data[$x]['tags'][$y]==strtoupper($search)){
						//var_dump( json_encode($data[$x]));
						array_push($endSearchData,$data[$x]);
						$counte=$counte+1;
						//echo json_encode($data[$x]);
						
					};
					
				}

			}
			
		}
		if($counte>=1){
			
			
			echo json_encode($endSearchData);
			$counte=0;

		};

	}
	

}


	


