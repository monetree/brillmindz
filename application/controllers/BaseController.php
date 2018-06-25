<?php
class BaseController extends CI_controller {

public function __construct(){
    parent::__construct();
        $this->load->model('BaseModel','bm');
        $this->load->helper(array('form','url'));
    }
    public function index(){
        $this->load->view('index.php');
    }
    public function signup(){
        extract($_POST);
        if(isset($signup)){
            $user_data = array(
                'name'     => $name,
                'email'    => $email,
                'password' => $password,
                'dob'      => $dob,
                'gender'   => $gender
            );
            print_r($user_data);
            echo count($hobby);
        }
        $this->load->view('signup.php');
    }
    public function signin(){
        $this->load->view('signin.php');
    }
    public function records(){
        $this->load->view('records.php');
    }
}
?>