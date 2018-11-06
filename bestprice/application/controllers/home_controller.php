<?php
     class home_controller extends CI_Controller {
        function __construct()
        {
            parent ::__construct();
        }
        public function load_view_home(){
            $this->load->view('homepage');                                 
        }
    }
    