<?php 
   class Cache_controller extends CI_Controller { 
	
      public function index() { 
         $this->output->cache(2); 
         $this->load->view('test'); 
      }
		
      public function delete_file_cache() { 
         $this->output->delete_cache('Cache_controller '); 
      } 
   } 
?>