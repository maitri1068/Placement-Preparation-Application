
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
        .error > input,.error > select{
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
    <?php

   //  print_r($result[0]->Student_Id);
    //  die();
    $this->db->where('student_id',$result[0]->Student_Id);
    $query=$this->db->get('project');
    $res=$query->result();

    $this->db->where('student_id',$result[0]->Student_Id);
    $query=$this->db->get('selected_stu');
    $ress=$query->result();
        //print_r($ress); 
       
    $this->db->where('company_id',$ress[0]->company_id);
    $query=$this->db->get('companydetails');
    $resss=$query->result();

    $this->db->where('profile_id',$ress[0]->profile_id);
    $query=$this->db->get('offers');
    $ressss=$query->result();
   // print_r($ressss); 
   
    ?>
   <div class="container-fluid " >
        <div class="row " >
            <div class="sideview col-3  " >
                <div class="container">
                    <div class="logo row p-1 mt-3"><strong> BVM</strong></div>
                </div>
                <div class="container">
                    <div class="header row p-3 mt-3"><a href="<?php echo site_url('site/company_detail'); ?>">Company Details </a></div>
                    <div class="header row p-3 mt-3"><a href="<?php echo site_url('site/student_detail'); ?>">Student Details</a></div>
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
                <!-- Student details -->
<div id="Studentdetails" class="container  p-3">
        <div class="text-center mt-3">
            <h4>Student Details</h4>
        </div>
        <form action="<?php echo site_url('site/update_student_data'); ?>" class="needs-validation" method="post" id="login">
        <input type="hidden" name="id" value="<?php echo $result[0]->Student_Id; ?>">
            <div class="form-floating mt-3 form-field">
                <input class="form-control" type="text" name="student_name" id="student_name"
                    placeholder="Enter student_name" value="<?php echo $result[0]->student_name; ?>">
                <label for="student_name"> Student Name</label>
                <small></small>
            </div>
            <div class="form-field form-floating mt-3">
                <input class="form-control" type="text" name="student_email" id="student_email"
                    placeholder="Enter emailid"  value="<?php echo $result[0]->email; ?>">
                    <label for="student_email"> EmailId</label>
                    <small></small>
                </div>
            <div class="form-field form-floating mt-3">
                <input class="form-control" type="text" name="student_contact" id="student_contact"
                    placeholder="Enter student_contact"  value="<?php echo $result[0]->contact_no; ?>">
                <label for="student_contact"> Contact No.</label>
                <small></small>
            </div>
          
            <div class="form-floating mt-3">
                <input class="form-field form-control" type="text" name="student_year" id="student_year"
                    placeholder="Enter student_year"  value="<?php echo $result[0]->year; ?>">
                <label for="student_year"> Year</label>
                <small></small>
            </div>
            <div class="form-floating mt-3">
                <input class="form-field form-control" type="text" name="student_cpi" id="student_cpi"
                   placeholder="Enter CPI"  value="<?php echo $result[0]->cpi; ?>">
                <label for="student_cpi">CPI</label>
                <small></small>
            </div>
            <div id="Project">
                <?php  foreach($res as $row){?>

                    <div class="row projectt">
                <div class="col">
                    <div class="form-floating mt-3">
                        <input class="form-control" type="text" name="proj_name[]" id="proj_name"
                        placeholder="Enter proj_name" style="width:450px" value="<?php echo $row->project_name; ?>">
                         <label for="proj_name">Proj_Name</label>
               
                      </div>
                </div>
                <div class="col">
                    <div class=" form-floating mt-3">
                         <input class="form-control" type="text" name="sub_name[]" id="sub_name"
                        placeholder="Enter sub_name"style="width:450px" value="<?php echo $row->subject_name; ?>">
                        <label for="sub_name">Sub_Name</label>
                     </div>
                </div>
                <div class="col"><button class="btn btn-outline-danger mt-3 p-3 float-end " onclick="remove(this)"  type="button" style="width:50px">-</button></div>
            </div>

              <?php  }
                 
                ?>
           
            </div>
            
            <div class="row ">
            <div class="col-10">
                </div>
                <div class="col-1"><button class="btn btn-outline-danger mt-3  float-end " onclick="add()"  type="button" style="width:40px">+</button></div>
                
                </div>
            </div>
            <div class="company form-group form-field">
   <select name="company" id="company" class="form-control input-lg p-3 mt-4">
    <option value="<?php echo $ress[0]->company_id; ?>"><?php echo $resss[0]->Company_Name; ?></option>
    <?php
    foreach($company as $row)
    {
     echo '<option value="'.$row->company_id.'">'.$row->Company_Name.'</option>';
    }
    ?>
   </select>
   <small class="small"></small>

  </div>
    <br>
  <div class="form-group profile ">
   <select name="profile" id="profile" class="form-control p-3">
    <option value="<?php echo $ress[0]->profile_id; ?>"><?php echo $ressss[0]->Profile_Name; ?></option>
   </select>
   <small class="small1"></small>
  </div>
  <div id="ctc">
    <div class="form-floating mt-3">
       
        <input class="form-control" type="number" name="student_ctc" id="student_ctc" value="<?php echo $ressss[0]->CTC; ?>"
                    placeholder="Enter student_ctc" readonly >
                <label for="student_ctc">CTC</label>
        </div>
               
            </div>

            <div class="position-relative mt-4 mb-4 pb-3 form-field">
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
        
       
       const stu_name = document.querySelector('#student_name');
const stu_email = document.querySelector('#student_email');
const stu_contact = document.querySelector('#student_contact');
const stu_year=document.querySelector('#student_year');
const stu_cpi=document.querySelector('#student_cpi');
const company=document.querySelector('#company');

const form = document.querySelector('#login');
const checkstuname = () => {

   let valid = false;
   const sname = stu_name.value.trim();

   if (!isRequired(sname)) {
       showError(stu_name, 'name cannot be blank.');
   } else if (!isvalidname(sname) ) {
       showError(stu_name, `name contain only alphabats and space.`)
   } else {
       showSuccess(stu_name);
       valid = true;
   }
   return valid;
};
const checkstuemail = () => {
   let valid = false;


   const semail = stu_email.value.trim();

   if (!isRequired(semail)) {
        showError(stu_email, 'email cannot be blank.');
   }  else if (!isvalidemail(semail) ) {
       showError(stu_email, `enter valid email.`);
   } 
    else {
       showSuccess(stu_email);
       valid = true;
   }

   return valid;
};
const checkcontact = () => {
   let valid = false;

    const min=10,max=10;
   const scontact = stu_contact.value.trim();

   if (!isRequired(scontact)) {
        showError(stu_contact, 'contact cannot be blank.');
   } else if (!isvalidcontact(scontact)) {
       showError(stu_contact, 'contact only contain digits and of length 10');
   }
  else {
       showSuccess(stu_contact);
       valid = true;
   }

   return valid;
};
const checkyear = () => {
   let valid = false;

    
   const syear = stu_year.value.trim();

   if (!isRequired(syear)) {
        showError(stu_year, 'year cannot be blank.');
   } else if (!isvalidyear(syear)) {
       showError(stu_year, 'enter valid year');
   }
  else {
       showSuccess(stu_year);
       valid = true;
   }
   

   return valid;
};
const checkcpi = () => {
   let valid = false;
   const scpi = stu_cpi.value.trim();
    if (!isRequired(scpi)) {
        showError(stu_cpi, 'cpi cannot be blank.');
   } else if(!isvalidcpi(scpi)){
    showError(stu_cpi, 'enter valid cpi');
   }
  else {
       showSuccess(stu_cpi);
       valid = true;
   }
   

   return valid;

};

$('form').submit(function(){
   
    $('.small').text("");
    $('.company').removeClass("error");
   if($('#company').val() == ''){
    //    alert($('#company').val());
//    alert("error");
     $('.small').text("error");
     $('.company').addClass("error");
}
});

$('form').submit(function(){
   
   $('.small1').text("");
   $('.profile').removeClass("error");

  if($('#profile').val() == ''){
 
    $('.small1').text("error");
    $('.profile').addClass("error");
}
});


const isvalidyear= (syear) => {
    const re = new RegExp("^([0-9]{4})$");
   const d = new Date();
   let year = d.getFullYear();
 
   if(year < syear){
    return false;
   }else if(!(re.test(syear))){
    return false;
   }
   else{
    return true;
   }
};
const isvalidcpi = (scpi) => {
 
    let temp = Number(scpi);
    if (temp.toString() == 'NaN' || temp < 0 || temp > 10) {
        return false;
    }
    else{
        return true;
    }


 };

const isvalidemail = (semail) => {

   const re = new RegExp("^([a-zA-Z0-9_\.]+)@bvmcollege.in$");
   
   return re.test(semail);
};
const isvalidname = (sname) => {
   const re = new RegExp("^([a-zA-Z ]+)$");
   return re.test(sname);
};
const isvalidcontact = (scontact) => {
   const re = new RegExp("^([0-9]{10})$");
   return re.test(scontact);
};

document.getElementById("company").addEventListener("change", (event) => {
   

    
    
})

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
        case 'student_name':
            checkstuname();
            break;
           case 'student_email':
               checkstuemail();
               break;
            case 'student_contact':
            checkcontact();
            break;
            case 'student_year':
            checkyear();
            break;
            case 'student_cpi':
            checkcpi();
            break;
            case 'company':
            checkcompany();
            break;
            
    }
    });

form.addEventListener('submit',function(e){
   
    let name=checkstuname(),
        email=checkstuemail(),
        contact=checkcontact(),
        year=checkyear(),
        cpi=checkcpi();
   let success=name &&  contact && year && cpi && email;
   if(!success){
       e.preventDefault();
   }
});


   
function add(){
           $('.projectt').last().after($('.projectt').first().clone().find('input').val('').end());  
    }
    function remove(element){
        console.log('length'+$('.projectt').find('#proj_name').length);
        if($('.projectt').find('#proj_name').length == 1){
          alert("student have atleast one project");
        }
        else{
            $(element).parentsUntil("#project").remove();
        }
    }
    $(document).ready(function(){
   
   
   $('#company').change(function(){
    var company_id = $('#company').val();
    if(company_id != '')
    {
     $.ajax({
      url:"<?php echo site_url('Site/fetch_profile'); ?>",
      method:"POST",
      data:{company_id:company_id},
      success:function(data)
      {
      
       $('#profile').html(data);
       $('#student_ctc').val(0);
      }
     });
    }
    else
    {
     $('#profile').html('<option value="">Select profile</option>');
     $('#student_ctc').val(0);
    }
   });
    $('#profile').change(function(){
    var Profile_Id = $('#profile').val();
   
    if(Profile_Id != '')
        {
    $.ajax({
      url:"<?php echo site_url('site/fetch_ctc'); ?>",
      method:"POST",
      data:{Profile_Id:Profile_Id},
      success:function(data)
      {
       $('#student_ctc').val(data);

      }
     });
    }
    else
    {
        $('#student_ctc').val(0);
    }
   });
   
  });
</script>





</body>

</html>




    