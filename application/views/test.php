<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	<?php $this->benchmark->mark('code_start'); ?>
   <body> 
      CodeIgniter View Example 
      <?php $this->benchmark->mark('code_end'); 
      echo $this->benchmark->elapsed_time('code_start', 'code_end'); 
      ?>
      <br>
      <?php
      echo $this->benchmark->memory_usage(); 
      ?>
   </body>
	
</html>