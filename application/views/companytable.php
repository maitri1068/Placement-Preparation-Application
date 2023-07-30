
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
        <form action="<?php echo site_url('site/insert_company_data'); ?>" class="needs-validation" method="post" id="login" enctype="multipart/form-data">
       
            <div class=" inputfield form-field form-floating  mt-3">
                <input class="form-control" type="text" name="company_name" id="company_name"
                    placeholder="Enter company_name" >
                <label for="company_name"> Company Name</label>
                <small></small>
                <?php echo isset($error)?$errorr:'';?>
            </div>
            <div class="form-group  ">
   <select name="country" id="country" class="form-control input-lg p-3 mt-4">
    <option value="">Select Country</option>
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
    <option value="">Select State</option>
   </select>
   <small></small>
  </div>
  <br />
  <!-- <div class="form-group ">
   <select name="city" id="city" class="form-control input-lg p-3 ">
    <option value="">Select City</option>
   </select>
   <small></small>
  </div> -->

    <div class="form-field">
    <textarea class="form-control p-2 mt-3" name="addr" id="addr" cols="5" rows="3" placeholder="Enter main address" style="color:grey"></textarea>
    <small></small>
    </div>
      
    <div class="form-group">
        <select name="year" id="year" class="form-control input-lg p-3 mt-3 " >
            <option value="">Select Year</option>
            <option value="2018">2018-2019</option>
            <option value="2019">2019-2020</option>
            <option value="2020">2020-2021</option>
        </select>
    </div>
 
           
  <div class="mt-3 p-2" style="color:white">Offers</div>
            <div id="offer">
            <div class="row" >
                <div class="col form-field">  <input class="form-control mt-2 p-2" type="text" name="offers[]" 
                    placeholder="Enter Profile Name" id="offer_type" style="width:500px" >
                <small></small></div>
                    <div class="col form-field">  <input class="form-control mt-2 p-2" type="text" name="offer[]" 
                    placeholder="Enter CTC " id="offer_ctc" style="width:500px"  >
                <small></small></div>
            </div>
            </div>
           
           <div id="demo"></div>
            <div class="row " id="add">
                <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="add()"  type="button" style="width:40px">+</button></div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="remove()"  type="button" style="width:40px">-</button></div>
              
            </div>
            <div class="h5 mt-3" style="color:white">Question asked....</div>
            <div id="question">
            <div class="row">
                <div class="col-4 form-group">
                <select name="questions[]" class="form-control input-lg p-3 mt-4" id="question_type">
                <option value="">Select type</option>
                <option value="1">Interview</option>
                <option value="2">Programming</option>
                </select>
                <small></small>
                </div>
                <div class="col-8 form-field">
                    <input type="text" class="form-control p-3 mt-4" name="question[]" placeholder="Enter Question" id="questions">
                <small></small>
                </div>
            </div>
            </div>
            <div id="addquestion"></div>
            <div class="row ">
                <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="add1()"  type="button" style="width:40px">+</button></div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3 float-end " onclick="remove1()"  type="button" style="width:40px">-</button></div>
              
            </div>

            <div class="h5 mt-3" style="color:white">Recruitment Process</div>
            <div id="company_round" class="form-field">
            <input type="text" class="form-control mt-3 p-3" name="company_round[]" placeholder="Enter Round Type" id="recruitment" >    
            <small></small>
            </div>
            <div class="round_type"></div>
            <div class="row ">
            <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3  float-end " onclick="add3()"  type="button" style="width:40px">+</button></div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3  float-end " onclick="remove3()"  type="button" style="width:40px">-</button></div>
                </div>
            </div>
            <?php
                if (isset($error)){
                    echo $error;
                }
            ?>
            
             <input type="file" id="profile_image"  name="profile_image" size="33"  class="mt-3 p-4">
         
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
        $('#offer').clone().find('input').val('').end().appendTo('#demo'); 
    }
    function remove(){
        $('#demo #offer').last().remove();
    }
    function add1(){
        $('#question').clone().find('input').val('').end().appendTo('#addquestion'); 
    }
    function remove1(){
        $('#addquestion #question').last().remove();
    }
    function add3(){
        $('#company_round').clone().find('input').val('').end().appendTo('.round_type'); 
    }
    function remove3(){
        $('.round_type #company_round ').last().remove();
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
    //  $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
//    $('#city').html('<option value="">Select City</option>');
  }
 });

//  $('#state').change(function(){
//   var state_id = $('#state').val();
//   if(state_id != '')
//   {
//    $.ajax({
//     url:"<?php echo site_url('site/fetch_city'); ?>",
//     method:"POST",
//     data:{state_id:state_id},
//     success:function(data)
//     {
//      $('#city').html(data);
//     }
//    });
//   }
//   else
//   {
//    $('#city').html('<option value="">Select City</option>');
//   }
//  });
 
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




    