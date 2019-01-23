<?php 
   class CommonFun_Controller extends CI_Controller { 
	
      public function index() {
         set_status_header(200); 
         echo is_php('5.3')."<br>"; 
         var_dump(is_really_writable('./Form.php')); 
			
         echo config_item('language')."<br>"; 
         echo remove_invisible_characters('This is a ‌test','UTF8')."<br>"; 
			
         $str = '< This > is \' a " test & string'; 
         echo html_escape($str)."<br>"; 
         echo "is_https():".var_dump(is_https())."<br>"; 
         echo "is_cli():".var_dump(is_cli())."<br>"; 
			
         var_dump(function_usable('test'))."<br>"; 
         echo "get_mimes():".print_r(get_mimes())."<br>"; 
      } 
  
      public function test() { 
         echo "Test function"; 
      } 
   } 
?>