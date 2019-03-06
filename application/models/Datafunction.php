<?php

class Datafunction extends CI_Model {
        private $jsonfile;
        function __construct() {
                
                parent::__construct();
                $this->load->model('datafunction');
                $this->load->helper('file');  
                $this->base = $this->config->item('base_url');
        
        }
        
        /**
         * Private Data function - Grab all Data on json File
         * 
         * change it to private on future - grab by other function get_Selected_data('all')
         * 
         * @return json
         */
        public function get_jsonfile_data(){
                $jsonfile=file_get_contents('assets/document-building.json');
                return json_decode($jsonfile,TRUE);
        }

        
        /**
         * get Data from Json file Grab by TAG index 
         *
         * @param [string] $search
         * @return json
         */
        public function get_Selected_data($search){
                $data = $this->get_jsonfile_data();
                $endSearchData=array();
                $counte=0;
                for ($x=0; $x < count($data); $x++) {//ALL DATA FOR()
                        if($data[$x]['tags']){//Tag Block of memmory
                                
                                for ($y=0; $y < count($data[$x]['tags']); $y++) {
                                        
                                        if(strtoupper($data[$x]['tags'][$y])==strtoupper($search)){// MATCH ADD ALL ELEMENT TO ARRAY
                                                //var_dump( json_encode($data[$x]));
                                                array_push($endSearchData,$data[$x]);
                                                $counte=$counte+1;
                                                continue;
                                                //echo json_encode($data[$x]);
                                        }
                                        
                                }

                        }
                        
                }
                if($counte>0){
                        
                        
                        return json_encode($endSearchData);
                        $counte=0;

                }else{
                        return NULL;
                };

        }
        
    

}
?>