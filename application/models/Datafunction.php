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

}
?>