<?php

class Datafunction extends CI_Model {
        public $jsonfile;
        function __construct() {
                
                parent::__construct();
                
                    $this->load->helper('file');     
                    $this->base = $this->config->item('base_url');
                
                
            }
        

        public function get_jsonfile_data(){
                $jsonfile=file_get_contents('assets/document-building.json');
                return json_decode($jsonfile,TRUE);
        }
    
        //function to get the buildings data from the json file
        function getSearchBuildings($searchBuilding) {
            if(empty($searchBuilding))
               return array();
        //make here the connection to the jsonfile
        //$result = $this->db->like('title', $searchBuilding)
            // ->or_like('author', $searchBuilding)
             //->get('books');

        return $result->result();
} 
    

}
?>