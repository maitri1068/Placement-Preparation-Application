<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Site extends CI_Controller{

    public function index(){
      //  $this->load->helper("form");
        $this->load->view("site");

    }
    public function form(){
        $this->load->view('form');
    }
    public function insert_model(){
        $this->load->model("Site_model");
        $this->Site_model->insert_model();
        // redirect('site/p');
    }
   public function form_data(){
    $this->load->view('form_data');
   }

    public function insert_data(){
       
         $this->load->model("Site_model");
         $this->Site_model->insert_data1();
    }

    public function admin_login(){
        $this->load->library('session');
        if(!$this->session->userdata('logged_in')){
           
            $this->load->view('admin_login');
        }else{
            redirect('site/company_detail');
        }
        
      
    }
    public function save_data(){
       $this->load->library('session');
        $data=array(
            'user_name' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'logged_in' => true
            );
            
            $query=$this->db->get("admin");
      
            foreach($query->result() as $row){
               
              
                if(($row->user_name ==  $data['user_name']) && ($row->password ==$data['password'] ) ){
                    $this->session->set_userdata($data);
                    redirect('site/company_detail');
                }
                else{
                    // $data['error'] = 'user is  invalid'; 
                    
                    $this->session->set_flashdata('message', 'user is invalid!');
                    $this->data['message'] = $this->session->flashdata('message'); 
                    $this->load->view('admin_login',$this->data);
                    // $data['error'] = '';
                }
            }
            
        
       
            
    }
    public function company_detail(){
        $this->load->view('company_detail');
    }

    public function student_detail(){
     
        $this->load->view('student_detail');
    }
    public function logout(){
        $this->load->library('session');
         $this->session->sess_destroy();
        redirect('site/admin_login');
    }


    public function company_table(){
        $this->load->model("Site_model");
        $loc['country'] = $this->Site_model->fetch_country();
        $this->load->view('companytable',$loc);
    }
   
    function fetch_state()
    {
        $this->load->model("Site_model");
     if($this->input->post('country_id'))
     {
      echo $this->Site_model->fetch_state($this->input->post('country_id'));
     }
    }
   
    // function fetch_city()
    // {
    //     $this->load->model("Site_model");
    //  if($this->input->post('state_id'))
    //  {
    //   echo $this->Site_model->fetch_city($this->input->post('state_id'));
    //  }
    // }

    public function student_table(){
        
        $this->load->view('studenttable');
    }
    function fetch_profile()
    {
        $this->load->model("Site_model");
     if($this->input->post('company_id'))
     {
      echo $this->Site_model->fetch_profile($this->input->post('company_id'));
     }
    }
    function fetch_company()
    {
        $this->load->model("Site_model");
     if($this->input->post('year'))
     {
      echo $this->Site_model->fetch_company($this->input->post('year'));
     }
    }
    public function fetch_ctc()
    {
        // die("cxvxcv");
    $this->load->model("Site_model");
    $Profile_Id=$this->input->post('Profile_Id');
    // $this->Site_model->fetch_ctc($Profile_Id);
   
   echo $this->Site_model->fetch_ctc($Profile_Id);
    }
  
   
   
   
    public function insert_company_data(){
        $config['upload_path'] = './assets/logo/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);
        $company_name=$this->input->post('company_name');
        $year=$this->input->post('year');
        $query=$this->db->query('SELECT Company_Name,year FROM companydetails');
        $results=$query->result();
        foreach($results as $rows){
            if(($company_name == $rows->Company_Name) && ($year == $rows->year)){
                $errormsg="company is alreay exists";
                break;
            }
            else{
                $errormsg='';
            }
            
        }
        if ((!$this->upload->do_upload('profile_image')) || $errormsg != '') {
            $this->load->model("Site_model");
        
            $error = array('error' => $this->upload->display_errors(),
        'errorr' => $errormsg,
        'country' => $this->Site_model->fetch_country()
        );

            $this->load->view('companytable', $error);
        } else {
            $dat = array('image_metadata' => $this->upload->data());
            $data=$dat['image_metadata'];
            $dataa=$data['file_name'];
            $this->load->model('Site_model');
        $this->Site_model->insert_company_data1($dataa);
        redirect('site/company_detail');
            
        }
        
    }
    public function insert_student_data(){
        $this->load->model('Site_model');
        $this->Site_model->insert_student_data1();
        redirect('site/student_detail');

    }

    public function store() {
       
                $config['upload_path'] = './assets/logo/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('companytable', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            // $this->load->view('img_success', $data);
           
            redirect('site/insert_company_data'); 
            
        }
    }
    public  function calc(){
        $this->load->view("calc");
    }  
    public function company_data(){
        $this->load->view("company_data");
    }
    public function company_data1(){
        $this->load->view("company_data1");
    }

    public function changepass(){
        $this->load->view('changepass');
    }
    public function update_data(){
        $query=$this->db->query('SELECT password,user_name FROM admin');
        $data=$query->result();
        foreach($data as $rows){
            $pass=$rows->password;
            $user_name=$rows->user_name;
        }
        if(($pass == $this->input->post('old_pass')) && ($this->input->post('new_pass') == $this->input->post('confirm_pass')) ){
            $this->load->model('Site_model');
            $this->Site_model->update_pass();
            redirect('site/logout');
            redirect('site/admin_login');
        }
        else{
            if($pass != $this->input->post('old_pass')){
                $error='old pass incorrect';
            }
            else{
                $error='';
            }
            if($this->input->post('new_pass') != $this->input->post('confirm_pass')){
                $errorr='confirm pass incorret';
            }else{
                $errorr='';
            }
            $data=array(
                'error' => $error,
                'errorr' => $errorr
            );
            $this->load->view('changepass',$data);
        }
       
  }
  public function update_data1(){
    $query=$this->db->query('SELECT user_name FROM admin');
    $data=$query->result();
    foreach($data as $rows){
        $user_name=$rows->user_name;
    }
    if(($user_name == $this->input->post('name')) && ($this->input->post('password') == $this->input->post('confirmpassword')) ){
        $this->load->model('Site_model');
        $this->Site_model->update_pass1();
        redirect('site/logout');
        redirect('site/admin_login');
    }
    else{
        if($user_name != $this->input->post('name')){
            $error='username incorrect';
        }
        else{
            $error='';
        }
        if($this->input->post('password') != $this->input->post('confirmpassword')){
            $errorr='confirm pass incorret';
        }else{
            $errorr='';
        }
        $data=array(
            'error' => $error,
            'errorr' => $errorr
        );
        $this->load->view('forgotpass',$data);
    }
   
}
  public function sign_up(){
    $this->load->view('sign_up');
  }

  public function student_data(){
    $this->load->view('student_data');
  }
  public function student_data1(){
    $this->load->view('student_data1');
  }
  public function forgotpass(){
    $this->load->view('forgotpass');
  }
public function update_company_data(){
    $config['upload_path'] = './assets/logo/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;

    $this->load->library('upload', $config);
    if (!($this->upload->do_upload('profile_image'))) {
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('edit_table', $error);
    }
     else {
        $dat = array('image_metadata' => $this->upload->data());
        // print_r($dat['image_metadata']);
        $data=$dat['image_metadata'];
        $dat=[];
        $dat['file_name']=$data['file_name'];
        $dat['id']=$this->input->post('id');
        // die();
        // // $this->load->view('img_success', $data);
       
        // redirect('site/insert_company_data');
        $this->load->model('Site_model');
        $this->Site_model->update_data($dat);
        redirect('site/company_detail');
        
    }
}
public function edit_table($id){
    $this->load->model("Site_model");
    $this->db->select('*');
    $this->db->from('companydetails');
    $this->db->where('companydetails.Company_Id',$id);
    $this->db->join('offers','offers.company_id = companydetails.Company_Id');
    $this->db->join('quest','quest.company_id = companydetails.Company_Id');
    $this->db->join('rounds','rounds.company_id = companydetails.Company_Id');
     $query = $this->db->get();
    
     $result=$query->result();
        // print_r($result);
        // die();
     $data = [];
       $data['result'] = $result;
       
      
       $data['country']= $this->Site_model->fetch_country();
       // print_r($data['result']);
     //  print_r($data);
   $this->load->view('edit_table',$data);
    
    }

    public function edit_student_table($id){
    //  print_r($id);
        $this->load->model("Site_model");
    $this->db->select('*');
    $this->db->from('studentdetails');
    $this->db->where('studentdetails.student_id',$id);
     $query = $this->db->get();
    $result=$query->result();
    // print_r($result[0]->year);
    $data = [];
       $data['result'] = $result;
         $data['company']= $this->Site_model->fetch_company($result[0]->year);
        // print_r($data);
     $this->load->view('edit_student_table',$data);
    }

    public function update_student_data(){
        $dat=$this->input->post('id');
        $this->load->model('Site_model');
        $this->Site_model->update_student_data($dat);
        redirect('site/student_detail');
    }

    public function delete_table($id){
        $this->load->model('Site_model');
        $this->Site_model->delete_table($id);
        redirect('site/company_detail');
    }
    public function delete_student_table($id){
        $this->load->model('Site_model');
        $this->Site_model->delete_student_table($id);
        redirect('site/student_detail');
    }

    public function year2018(){
        $this->load->view('year2018');
    }
    public function year2019(){
        $this->load->view('year2019');
    }
    public function year2020(){
        $this->load->view('year2020');
    }


}



?>