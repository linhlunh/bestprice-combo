<?php
     class combo_controller extends CI_Controller {
        function __construct()
        {
            parent ::__construct();
        }
        public function load_view_combo_KS_VMB(){
            $this->load->view('combo/combo-index/Combo-Detail-Dynamic-KS_VMB');   
                                 
        }
        public function load_view_combo_KS_KS_VMB(){
            $this->load->view('combo/combo-index/Combo-Detail-KS_KS_Vemaybay');
        }
        public function load_view_combo_KS_KS(){
            $this->load->view('combo/combo-index/Combo-Detail-KS_KS');                              
        }
        public function LoadListImg(){
            $this->load->view('list-img.php');
        }
    }
    