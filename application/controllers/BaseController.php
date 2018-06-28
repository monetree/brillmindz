<?php
class BaseController extends CI_controller {

public function __construct(){
    parent::__construct();
        $this->load->model('BaseModel','bm');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('index.php');
    }
    public function signup(){
        $this->load->view('signup.php');
    }
    public function read_user_data(){
  $this->load->library('form_validation');
  $form_data = array(
    array(
    'field' => 'name',
    'label' => 'username',
    'rules' => 'trim|required|alpha_numeric_spaces|min_length[5]',
    'errors' => array(
          'required' => 'name is required',
          'alpha' => 'invalid name',
          'min_length' => 'username is too short'
                      )
          ),
    array(
          'field' => 'email',
          'label' => 'email',
          'rules' => 'trim|required|valid_email',
          'errors' => array(
              'required' => 'email is required',
              'valid_email' => 'invalid email',
              // 'is_unique' => 'email already exist'
                      )
          ),
    array(
          'field' => 'dob',
          'label' => 'mobile',
          'rules' => 'trim|required',
          'errors' => array(
                  'required' => 'mobile is required',
                  'numeric' => 'number must be numeric',
                  'min_length' => 'invalid mobile',
                  'max_lenth' => 'Invalid mobile',
                  'is_unique' => 'number is already exist'
                          )
                ),
    array(
          'field' => 'password',
          'label' => 'password',
          'rules' => 'trim|required|min_length[5]|matches[password]|regex_match[/^[a-zA-Z0-9~!#$%^&*()_+>.,<]+$/]',
          'errors' => array(
                  'required' => 'password is required',
                  'min_length' => 'password is too short',
                  'regex_match' => 'Invalid password'
                            )
                )
  );
  $this->form_validation->set_rules($form_data);
  if($this->form_validation->run()==false){
    $this->load->view('signup');
  }else{

    extract($_POST);
    $udata = array(
      'name'=>$name,
      'email'=>$email,
      'dob'=>$dob,
      'password'=>$password,
      'gender'=>$gender
    );
    print_r

    $resp = $this->bm->common_insert($udata,'user');
    if($resp == 3){
      echo "Email Already Exist";
    }else if($resp == 1){
      $last_id = $this->db->insert_id();
      $count_hobby = count($hobby);
      for($i=0;$i<$count_hobby;$i++){
          $data = array(
            'user_id' => $last_id,
            'hobby' =>   $hobby[$i]
          );
          $resp = $this->bm->insert_hobby($data,'hobby');
        }
        if($resp){
          redirect('BaseController/signin');exit;
        }else{
          $message ="registeration failed";
        }
      $msg= $message;
    }else{
    $msg = "Registration Failed";
    }
      $rdata = array(
        'ret' => $msg
    );
      $this->load->view('signup',$rdata);
}
}
    public function signin(){
      $user_id = $this->session->userdata('user_id');
      if(!empty($user_id)){
        redirect('BaseController/records');
      }
      extract($_POST);
        if(isset($signin)){
          $cond = array(
            'email' => $email,
            'password' => $password
          );
          $resp=$this->bm->common_select('user','count',$cond);
          if($resp > 0){
            $resp=$this->bm->common_select('user','',$cond);
            $email = $resp->row()->email;
            $user_id = $resp->row()->user_id;
            $set_session = array(
              'email' => $email,
              'user_id' => $user_id
            );
            $this->session->set_userdata($set_session);
            redirect('BaseController/records');
          }else{
            $msg = array(
              'message' => "login Failed !!"
            );
            $this->load->view('signin.php',$msg);
          }
        }else{
          $this->load->view('signin.php');
          }

    }
    public function records(){
      $user_id = $this->session->userdata('user_id');
      extract($_POST);
      if(isset($search_btn)){

         $resp['records']=$this->bm->search_records('after','user',$search);
         $resp['user_id']=$user_id;
         $resp['total'] = $this->bm->common_select('user','total','');
      }else{
        $user_id = $this->session->userdata('user_id');
        if(empty($user_id)){
          redirect('BaseController/signin');
        }
        $this->load->library('pagination');
        $config['base_url'] =  site_url()."/BaseController/records/";
        $config['total_rows'] = $this->bm->common_select('user','total','');
        $config['per_page'] = 5;
        $config['attributes'] = array('class' => 'plinks');
        $config['use_page_numbers'] = true;
        $config['cur_tag_open'] = "<b class='curpage'>";
        $config['cur_tag_close'] = "</b>";
        $config['next_link'] = ">>";
        $config['prev_link'] = "<<";

        $this->pagination->initialize($config);
        $links = $this->pagination->create_links();
        $seg = $this->uri->segment(3);
          if(empty($seg))
            $si = 0;
          else
            $si = $seg;
        $rs = $this->bm->pagination($config['per_page'],$si);
        $resp['paginations']=$links;
        $resp['user_id']=$user_id;
        $resp['records'] = $rs;
        $resp['total'] = $this->bm->common_select('user','total','');

      }
        $this->load->view('records.php',$resp);

    }
    public function hobby(){

        $cond = array(
          'user_id' => $seg = $this->uri->segment(3),
        );
        $resp['rec']=$this->bm->common_select('hobby','',$cond);
        $this->load->view('hobby.php',$resp);
    }
    public function update(){
      extract($_POST);
      $id=$this->uri->segment(3);
      if(isset($update)){
          $data = array(
            'name'=>$name,
            'email'=>$email,
            'dob'=>$dob
          );
          $resp=$this->bm->common_update($id,$data,'user');
          if($resp){
            redirect('BaseController/records');
          }
      }else{
      $cond = array(
        'user_id' => $id
      );
      $resp['rec']=$this->bm->common_select('user','',$cond);
      $this->load->view('update.php',$resp);
    }
    }
    public function delete(){
      $cond = array(
        'user_id' => $id=$this->uri->segment(3)
      );
      $resp=$this->bm->common_delete($cond,'user');
      if($resp){
          redirect('BaseController/records');
      }
    }
      public function logout(){
        $this->load->library('session');
        $del_session_data = array(
          'user_id' => $this->session->userdata('user_id'),
          'email' => $this->session->userdata('email')
        );
        unset(
        $_SESSION['user_id'],
        $_SESSION['email']
        );
          redirect('BaseController/records');
      }
}
?>
