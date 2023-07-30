
 <!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Assistant:wght@200&family=Kaushan+Script&family=Lobster&family=Monoton&display=swap"
        rel="stylesheet">
    
   
    
    <style>
         body{
            font-family: Alata;
            color:grey;

        }
        .logo {
            font-size: 40px;
            text-align: center;
            color:red;
            font-family: Archivo Black;


        }
        .sideview{
            background-color:rgb(26,26,26);
          
        }

        .header a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }

        .header:hover {
            border-radius: 15px;
            font-weight:bold;
            background-color: rgb(10, 10, 10);
        }

        .content {
            background-color: black;
        }
        .adminlogo{
            height:43px;
            width:43px;
        }
        .error > input,.error > select {
            border:2px solid red;
        }
        .error > small{
            color:red;
        }
        .logoutlogo{
            height:26px;
            width:26px;
        }
        .form-field  > input ,.form-group > select,.form-field > textarea    {
            background-color:rgb(26,26,26); 
            border:none;
            color:grey;           
        }

    
        .form-field  > input:hover ,.form-group > select:hover,.form-field > textarea:hover    {
            background-color:rgb(26,26,26);

        }
    </style>

</head>

<body>
<div id="edit_company_table">
<?php
//  echo "<pre>";
//  print_r($result);
 $result_data =  $result;
    $this->load->database();
    $this->db->where('country_id',$result_data[0]->country);
    $query=$this->db->get('country');
    $result=$query->result();
       foreach($result as $row){
        $data=$row->country_name;
        }
        $this->db->where('state_id',$result_data[0]->state);
    $query=$this->db->get('state');
    $result=$query->result();
       foreach($result as $row){
        $data2=$row->state_name;
        }
    //     $this->db->where('city_id',$result_data[0]->city);
    // $query=$this->db->get('city');
    // $result=$query->result();
    //    foreach($result as $row){
    //     $data3=$row->city_name;
    //     }
        $this->db->where('company_id',$result_data[0]->company_id);

    $query=$this->db->get('quest');
    
    $resultt=$query->result();
   
    $this->db->where('company_id',$result_data[0]->company_id);
    $query=$this->db->get('rounds');
    $resulttt=$query->result();
    $this->db->where('company_id',$result_data[0]->company_id);
    $query=$this->db->get('image');
    $resultttt=$query->result();?>


    
 



    
<div class="container-fluid " >
        <div class="row " >
            <div class="sideview col-3  " >
            <div class="container">
                    <div class="logo row p-1 mt-3"><strong> BVM</strong></div>
                </div>
                <div class="container">
                    <div id="company1"class=" header row p-3 mt-3"><a href="<?php echo site_url('site/company_detail') ?>">Company Details </a></div>
                    <div id="student1"class="header row p-3 mt-3"><a href="<?php echo site_url('site/student_detail') ?>" >Student Details</a></div>
                </div>
            </div>
            <div class="content col-9">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-10"></div>
                       <div class="col-1 mt-4">
                        <a href="#" style="text-decoration:none" >Home</a>
                       </div>
                        <div class="col-1 p-3 dropdown ">
                            <img src="<?= base_url('assets/admin_logo.png') ?>" alt="admin logo" class="adminlogo rounded-circle dropdown-toggle" data-bs-toggle="dropdown">
                            <ul class="dropdown-menu" >
                                <!-- <li class="text-center"></li> -->
                                <li class="dropdown-devider m-2"><img src="<?= base_url('assets/admin_logo.png') ?>" alt="admin logo" class="adminlogo rounded-circle p-1" > Admin</li><hr>
                                <li><a href="<?php echo site_url('Site/logout'); ?>" class="dropdown-item "><img src="<?= base_url('assets/logout.jpg') ?>" alt="logout logo" class="logoutlogo rounded-circle mb-1 " ><strong>LOGOUT</strong></a></li>
                                <li><a href="<?php echo site_url('Site/changepass'); ?>" class="dropdown-item " id="pass"><img src="" alt="" class="rounded-circle mb-1 " ><strong>Change Password</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ">
                <!-- Company details -->

                <div id="Companydetails" class="container  p-3">
                <div class="text-center mt-3 p-2">
                      <h4 style="color:white">Company Details</h4>
         </div>

        <form action="<?php echo site_url('site/update_company_data'); ?>" class="needs-validation" method="post" id="login" enctype="multipart/form-data">
        <input type="hidden"  name="id" value="<?php echo  $result_data[0]->company_id; ?> ">
            <div class=" form-field form-floating  mt-3">
                <input class="form-control" type="text" name="company_name" id="company_name"
                    placeholder="Enter company_name" value="<?php echo $result_data[0]->Company_Name ; ?> ">
                <label for="company_name"> Company Name</label>
                <small></small>
            </div>
            <div class="form-group  ">
   <select name="country" id="country" class="form-control input-lg p-3 mt-4">
    <option value="<?php echo $result_data[0]->country; ?>"><?php echo $data; ?></option>
    <?php
    foreach($country as $row)
    {
     echo '<option value="'.$row->country_id.'">'.$row->country_name.'</option>';
    }
    ?>
   </select>
   <small></small>
  </div>
  <br />
  <div class="form-group ">
   <select name="state" id="state" class="form-control p-3">
   <option value="<?php echo $result_data[0]->state; ?> "><?php echo $data2; ?></option>
   </select>
   <small></small>
  </div>
  <br />
  <!-- <div class="form-group ">
   <select name="city" id="city" class="form-control input-lg p-3 ">
   <option value="<?php echo $result_data[0]->city; ?> "><?php echo $data3; ?></option>
   </select>
   <small></small>
  </div> -->

    <div class="form-field">
    <textarea class="form-control p-2 mt-3" name="addr" id="addr" cols="5" rows="3" placeholder="Enter main address" ><?php echo $result_data[0]->main_location; ?></textarea>
    <small></small>
    
</div>
 
           
  <div class="mt-3 p-2">Offers</div>
  <div id="offer">
            <?php foreach($result_data as $row){ ?>
                
                    <div class="row offerr" >
                        <div class="col form-field">  <input class="form-control mt-2 p-2" type="text" name="offers[]" 
                            placeholder="Enter Profile Name" id="offer_type" style="width:450px" value="<?php echo $row->Profile_Name ?>" >
                        <small></small></div>
                            <div class="col form-field">  <input class="form-control mt-2 p-2" type="text" name="offer[]" 
                            placeholder="Enter CTC " id="offer_ctc" style="width:450px"  value="<?php echo $row->CTC ?>" >
                        <small></small></div>
                        <div class="col"><button type="button" class="btn btn-outline-danger mt-2 p-2 " style="width:40px" onclick="remove(this)">-</button></div>
                    </div>
                
                
                <?php } ?>
                </div>
            <div class="row " id="add">
                <div class="col-11">
                </div>
                <div class="col-1 " ><button class="btn btn-outline-danger mt-3 end-20 " onclick="add()"  type="button" style="width:40px">+</button></div>
                <!-- <div class="col-1"><button class="btn btn-outline-danger mt-3 end-10     " onclick="remove()"  type="button" style="width:40px">-</button></div> -->
              
            </div>
            <div class="h5 mt-3">Question asked....</div>
            <div id="question">
            <?php foreach($resultt as $row){ ?>
               
            <div class="row questions">
                <div class="col-4 form-field">
                <select name="questions[]" class="form-control input-lg p-3 mt-4" id="question_type">
                <option value="<?php echo $row->question_type; ?>"><?php
                if($row->question_type == 1){
                    echo "Interview";
                }
                else if($row->question_type == 2){
                    echo "Programming";
                }else{
                    echo "select type";
                }
                ?></option>
                <option value="1">Interview</option>
                <option value="2">Programming</option>
                </select>
                <small></small>
                </div>
                <div class="col-7 form-field">
                    <input type="text" class="form-control p-3 mt-4" name="question[]" placeholder="Enter Question" id="questions" value="<?php echo $row->question; ?>">
                <small></small>
                </div>
                <div class="col-1">
                        <button class="btn btn-outline-danger mt-4 p-3 float-end " onclick="remove1(this)"  type="button" style="width:50px">-</button>
                    </div>
            </div>
           
                
                <?php } ?>
                </div>
           
            <div id="addquestion"></div>
            <div class="row ">
                <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="add1()"  type="button" style="width:40px">+</button></div>
                <!-- <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="remove1()"  type="button" style="width:40px">-</button></div> -->
              
            </div>

            <div class="h5 mt-3">Recruitment Process</div>
            <div id="company_round" class="form-field">
            <?php foreach($resulttt as $row){ ?>
               
                    <div class="row recruitment">
                        <div class="col-11"><input type="text" class="form-control mt-3 p-3" name="company_round[]" placeholder="Enter Round Type" id="recruitment" value="<?php echo $row->round_name; ?>">    
                        <small></small>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-outline-danger mt-3 p-3 float-end " onclick="remove3(this)"  type="button" style="width:50px">-</button>
                    </div>
            
            </div>
           
           
            
                
                <?php } ?>
                </div>
           
                <div class="round_type"></div>
            <div class="row ">
            <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3  float-end " onclick="add3()"  type="button" style="width:40px">+</button></div>
                <!-- <div class="col-1"><button class="btn btn-outline-danger mt-3  float-end " onclick="remove3()"  type="button" style="width:40px">-</button></div> -->
                </div>
            </div>
            <?php
                if (isset($error)){
                    echo $error;
                }
            ?>
            
             <input type="file" id="profile_image"  name="profile_image" size="33"  class="mt-3 p-4" >
         
            <div class="position-relative mt-4 mb-4 pb-3">
                <button class="position-absolute top-50 start-50 translate-middle btn btn-outline-danger"
                    type="submit">Submit</button>
            </div>
        </form>

    </div>


                </div>
            </div>

        </div>
    </div>

    <script>
        function add(){
           $('.offerr').last().after($('.offerr').first().clone().find('input').val('').end());  
    }
    function remove(element){
        if($('#offer').children().length == 1){
          alert("Company Should Give Atleast One Offer");
        }
        else{
            $(element).parentsUntil("#offer").remove();
        }
    }
    function add1(){
       // console.log('length ' + $('.questions').find('#questions').length);
        $('.questions').last().after($('.questions').first().clone().find('input,select').val('').end()); 
    }
    function remove1(element){
      //  console.log('length ' + $('.questions').find('#questions').length);
        if($('.questions').find('#questions').length == 1){
          alert("Company Should Ask Atleast One Question");
        }
        else{
            $(element).parentsUntil("#question").remove();
        }
    }
    function add3(){
        $('.recruitment').last().after($('.recruitment').first().clone().find('input').val('').end()); 
    }
    function remove3(element){
        // console.log("len"+$('.recruitment').find('#recruitment').length);
        if($('.recruitment').find('#recruitment').length == 1){
          alert("Company Should Take Atleast One round");
        }
        else{
            $(element).parentsUntil("#company_round").remove();
        }
    }
    
$(document).ready(function(){
   
   
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo site_url('Site/fetch_state'); ?>",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#city').html('<option value="">Select City</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo site_url('site/fetch_city'); ?>",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});


// validation part
const company_name=document.querySelector('#company_name');
const country=document.querySelector('#country');
const state=document.querySelector('#state');
const city=document.querySelector('#city');
const form = document.querySelector('#login');
const checkcompanyname = () => {
let valid = false;

const compname = company_name.value.trim();

if (!isRequired(compname)) {
    showError(company_name, 'cname cannot be blank.');
} 
else {
    showSuccess(company_name);
    valid = true;
}
return valid;
};

$('form').submit(function(){
showSuccess(country);

  if($('#country').val() == ''){
    showError(country, 'please select country');
}
});
$('form').submit(function(){
    showSuccess(state);

  if($('#state').val() == ''){
    showError(state, 'please select state');
}
});
$('form').submit(function(){
    showSuccess(city);

  if($('#city').val() == ''){
    showError(city, 'please select city');
}
});


const isRequired = value => value === '' ? false : true;
const showError = (input, message) => {
    const formField = input.parentElement;
    formField.classList.remove('success');
    formField.classList.add('error');
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    const formField = input.parentElement;
    formField.classList.remove('error');
    formField.classList.add('success');
    const error = formField.querySelector('small');
    error.textContent = '';
}

form.addEventListener('input', function (e) {
    switch (e.target.id) {
        case 'company_name':
            checkcompanyname();
            break;
    }
});

form.addEventListener('submit',function(e){
   
     let cname=checkcompanyname();
 let success=cname;
    if(!success){
        e.preventDefault();
    }
});
</script>





</body>

</html>




     