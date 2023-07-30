<?php

class Site_model extends CI_Model{

    public function insert_data1(){
       
         $data=$this->input->post();
         
         $this->db->insert("users",$data);
    }
    public function insert_model(){
        $data=array(
            'name' => $this->input->post('name')
        );
        // echo  ;
        $this->db->insert("form",$data);
    }
    public function insert_company_data1($dat){
        
        $data=array(
            'Company_Name' => $this->input->post('company_name'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            // 'city' => $this->input->post('city'),
            'main_location' => $this->input->post('addr'),
            'year' => $this->input->post('year')

        );
        // print_r($this->input->post('company_name'));
        // die();
        $this->db->insert("companydetails",$data);
        
        $insertId = $this->db->insert_id();
        $arr1=$this->input->post('questions');
        $arr2=$this->input->post('question');
        $arr3=array_combine($arr1,$arr2);


        foreach($arr3 as $key=>$arr1)
        {
            $data=array(
                'company_id' => $insertId,
                'question_type' => $key,
                'question' => $arr1

            );
            $this->db->insert("quest",$data);
        }
        $arr4=$this->input->post('offers');
        $arr5=$this->input->post('offer');
        $arr6=array_combine($arr4,$arr5);
        // print_r($arr6);
        
        foreach($arr6 as $key=>$arr1)
        {
            $data=array(
                'company_id' => $insertId,
                'Profile_Name' => $key,
                'CTC' => $arr1

            );
            $this->db->insert("offers",$data);
        }
        $arr7=$this->input->post('company_round');
        $arr8=implode(",",$arr7);
        $data=array(
            'company_id' => $insertId,
            'round_name'=> $arr8
        );
        $this->db->insert("rounds",$data);
   

        $data=array(
            'company_id' => $insertId,
            'image_name' => $dat
        );
        $this->db->insert("image",$data);
    }
    function fetch_country()
    {
     $this->db->order_by("country_name", "ASC");
     $query = $this->db->get("country");
     return $query->result();
    }
    
   
    function fetch_state($country_id)
    {
     $this->db->where('country_id', $country_id);
     $this->db->order_by('state_name', 'ASC');
     $query = $this->db->get('state');
     $output = '<option value="">Select State</option>';
     foreach($query->result() as $row)
     {
      $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
     }
     return $output;
    }
   
    
   
    // function fetch_city($state_id)
    // {
    //  $this->db->where('state_id', $state_id);
    //  $this->db->order_by('city_name', 'ASC');
    //  $query = $this->db->get('city');
    //  $output = '<option value="">Select City</option>';
    //  foreach($query->result() as $row)
    //  {
    //   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
    //  }
    //  return $output;
    // }
   
    function fetch_company($year)
    {
        $this->db->where('year', $year);
        $this->db->order_by('Company_Name', 'ASC');
        $query = $this->db->get('companydetails');
        $output = '<option value="">Select Company</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->Company_Id.'">'.$row->Company_Name.'</option>';
        }
      
        return $output;
    }
    function fetch_profile($company_id)
    {
     $this->db->where('company_id', $company_id);
     $this->db->order_by('Profile_Name', 'ASC');
     $query = $this->db->get('offers');
     $output = '<option value="">Select profile</option>';
     foreach($query->result() as $row)
     {
       
      $output .= '<option value="'.$row->Profile_Id.'">'.$row->Profile_Name.'</option>';
     }
   
     return $output;
    }
    function fetch_ctc($Profile_Id){
        $this->db->where('Profile_Id', $Profile_Id);
        $query = $this->db->get('offers');
        $row=$query->result();
        return $row[0]->CTC;

    }
    public function insert_student_data1(){
        $data=array(
            'student_name' => $this->input->post('student_name'),
            'email' => $this->input->post('student_email'),
            'contact_no' => $this->input->post('student_contact'),
            'year' => $this->input->post('year'),
            'cpi' => $this->input->post('student_cpi')
           
        );
       
        $this->db->insert("studentdetails",$data);
       
        $insert_id = $this->db->insert_id();
         

        $data1=array(
            'student_id' => $insert_id,
            'company_id' => $this->input->post('company'),
            'profile_id' => $this->input->post('profile'),
            'ctc' => $this->input->post('student_ctc')

        );
        // die('vhjv');
        $this->db->insert("selected_stu",$data1);
        $arr1=$this->input->post('proj_name');
        $arr2=$this->input->post('sub_name');
        $arr3=array_combine($arr1,$arr2);
        print_r($arr3);

        foreach($arr3 as $key=>$arr)
        {
            $data=array(
                'student_id' => $insert_id,
                'project_name' => $key,
                'subject_name' => $arr

            );
            $this->db->insert("project",$data);
        }
    }

    public function update_pass(){
        $data=array(
        'password' => $this->input->post('new_pass')
        );
        $this->db->update('admin',$data,'id=1');
        
    }
    public function update_pass1(){
        $data=array(
        'password' => $this->input->post('password')
        );
        $this->db->update('admin',$data,'id=1');
        
    }

    public function update_data($dat){

        $data=array(
            'Company_Name' => $this->input->post('company_name'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'main_location' => $this->input->post('addr')
        );
        $this->db->where('company_id',$dat['id']);
        $this->db->update('companydetails',$data);

        $arr1=$this->input->post('questions');
        $arr2=$this->input->post('question');
        $arr3=array_combine($arr1,$arr2);
        $this->db->where('company_id',$dat['id']);
        $this->db->delete("quest");

        foreach($arr3 as $key=>$arr1)
        {
            $data=array(
                'company_id' => $dat['id'],
                'question_type' => $key,
                'question' => $arr1

            );
             $this->db->insert("quest",$data);
        }
        $arr4=$this->input->post('offers');
        $arr5=$this->input->post('offer');
        $arr6=array_combine($arr4,$arr5);
        // print_r($arr6);
        $this->db->where('company_id',$dat['id']);
        $this->db->delete("offers");
        foreach($arr6 as $key=>$arr1)
        {
            $data=array(
                'company_id' => $dat['id'],
                'Profile_Name' => $key,
                'CTC' => $arr1

            );
             $this->db->insert("offers",$data);
        }
        $arr7=$this->input->post('company_round');
        $arr8=implode(",",$arr7);
        $this->db->where('company_id',$dat['id']);
        $this->db->delete("rounds");
        $data=array(
            'company_id' => $dat['id'],
            'round_name'=> $arr8
        );
        $this->db->insert("rounds",$data);
   
        $this->db->where('company_id',$dat['id']);
        $this->db->delete("image");
        $data=array(
            'company_id' => $dat['id'],
            'image_name' => $dat['file_name']
        );
        $this->db->insert("image",$data);


    }

    public function update_student_data($dat){

        $data=array(
            'student_name' => $this->input->post('student_name'),
            'email' => $this->input->post('student_email'),
            'contact_no' => $this->input->post('student_contact'),
            'year' => $this->input->post('student_year'),
            'cpi' => $this->input->post('student_cpi')  
        );
        $this->db->where("student_id",$dat);
        $this->db->update("studentdetails",$data);
        $data1=array(
            'student_id' => $dat,
            'company_id' => $this->input->post('company'),
            'Profile_Id' => $this->input->post('profile'),
            'CTC' => $this->input->post('student_ctc')
        );
        $this->db->where("student_id",$dat);
        $this->db->update("selected_stu",$data1);
        // $this->db->insert("selected_stu",$data1);
        $arr1=$this->input->post('proj_name');
        $arr2=$this->input->post('sub_name');
        $arr3=array_combine($arr1,$arr2);
        // print_r($arr3);
       $this->db->where("student_id",$dat);
       $this->db->delete("project");
        foreach($arr3 as $key=>$arr)
        {
            $data=array(
                'student_id' => $dat,
                'proj_name' => $key,
                'sub_name' => $arr
            );
            $this->db->insert("project",$data);
        }
    }

    public function delete_table($id){
        $this->db->where('company_id',$id);
        $this->db->delete("companydetails");
    }
    public function delete_student_table($id){
        $this->db->where('student_id',$id);
        $this->db->delete("studentdetails");
    }
}


?>