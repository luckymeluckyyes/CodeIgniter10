<?php 
   class Email_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         // $this->load->library('session'); 
         // $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->view('email_form'); 
      } 
  
      public function send_mail() {

         $this->form_validation->set_rules('user_email', 'User Email', 'required');
         $this->form_validation->set_rules('user_password', 'User Password', 'required');
         $this->form_validation->set_rules('to_email', 'To', 'required');
         $this->form_validation->set_rules('subject', 'Subject', 'required');
         $this->form_validation->set_rules('message', 'Message', 'required');

         if($this->form_validation->run() == FALSE) {

            $this->load->view('email_form');
         } else {

            $sender_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');
            $receiver_email = $this->input->post('to_email');
            $username = $this->input->post('name');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = $sender_email;
            $config['smtp_pass'] = $user_password;

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('pkrock00@gmail.com', $username);
            $this->email->to($receiver_email);
            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()) {
               $data['message_display'] = 'Email successfully send!';
            } else {
               $data['message_display'] = '<p class="error_msg">Invalid Email or Password!</p>';
            }

            $this->load->view('email_form', $data);
         }
      } 
   } 
?>