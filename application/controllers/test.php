<?php
class Test extends CI_Controller {
     // $this->load->model('mtest'); // загрузили модель
      public function __construct()
        {
                parent::__construct();
                $this->load->model('mtest'); // загрузили модель
                // $this->load->helper('url_helper');
        }
	
    public function index(){
        echo "Test is worked!";
    }

    function  mydb()
    {
        // $this->load->model('mtest'); // загрузили модель
        $data['test'] = $this->mtest->get_data_fromtest();
        $this->load->view('vtest',$data);   //загрузили вид
    }
}