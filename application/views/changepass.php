<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
        
        .error > input{
            border:2px solid red;
        }
        .error > small{
            color:red;
        }
        #bg{
            height: 713px;
            position: relative;
            width: 100%;
            /* font-family: cursive; */
        }

        body{
            content: "";
            background-image: url('http://localhost/something/assets/m.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity:1;
        }
        
        #bg::before{
            content: "";
            /* background-image: url('http://localhost/ci4/assets/m.jpg');
            background-repeat: no-repeat;
            background-size: cover; */
            background-color:black;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity:0.7;
          
        }
        #bg > #bg1{
            position:relative;
            top:80px;
          
        }
    </style>
</head>
<body>
<div id="bg" class=" container-fluid p-2 ">
       
        <div id="bg1" class="container mt-5 p-4 bg-white" style="width:435px">
        
            <form action="<?php echo site_url('site/update_data'); ?>" method="post" class="needs-validation " id="login" >
                <div class="form-field form-floating mt-3" >
                    <input type="text" class="form-control  " name="old_pass" id="old_pass"
                        placeholder="Enter Your old_pass"  autocomplete="off">
                    <label for="old_pass">Old Password</label>
                    <small><?php if(isset($error)){
                        echo $error;} ?></small>
                </div>
                <div class="form-field form-floating mt-3" >
                    <input type="text" class="form-control  " name="new_pass" id="new_pass"
                        placeholder="Enter Your new_pass"  autocomplete="off">
                    <label for="new_pass">New Password</label>
                    <small></small>
                </div>
                <div class="form-field form-floating mt-3" >
                    <input type="text" class="form-control  " name="confirm_pass" id="confirm_pass"
                        placeholder="Enter Your confirm_pass"  autocomplete="off">
                    <label for="confirm_pass">Confirm Password</label>
                    <small><?php if(isset($errorr)){
                        echo $errorr;} ?></small>
                    
                </div>
               
                <div class="position-relative mt-4 pb-4 form-field">
                    <button class="position-absolute btn btn-outline-danger start-50 top-50 translate-middle"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>

    </div>

    <script>
       
        const oldpass = document.querySelector('#old_pass');
const newpass = document.querySelector('#new_pass');
const confirmpass = document.querySelector('#confirm_pass');
const form = document.querySelector('#login');


const checkoldpass = () => {
let valid = false;

const old_pass = oldpass.value.trim();

if (!isRequired(old_pass)) {
    showError(oldpass, 'oldpass cannot be blank.');
} 

else {
    showSuccess(oldpass);
    valid = true;
}
return valid;
};



const checknewpass = () => {
let valid = false;

const new_pass = newpass.value.trim();

if (!isRequired(new_pass)) {
    showError(newpass, 'newpass cannot be blank.');
}else if(!isPasswordSecure(new_pass))
{
    showError(newpass, 'newpass incorrect');
}
else {
    showSuccess(newpass);
    valid = true;
}
return valid;
};
const checkconfirmpass = () => {
let valid = false;

const confirm_pass = confirmpass.value.trim();
const newpp=newp;
if (!isRequired(confirm_pass)) {
    showError(confirmpass, 'confirmpass cannot be blank.');
} 
else{
    showSuccess(confirmpass);
    valid = true;
}
return valid;
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})");
    return re.test(password);
};

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
        case 'old_pass':
            checkoldpass();
            break;
        case 'new_pass':
            checknewpass();
            break;
         case 'confirm_pass':
            checkconfirmpass();
            break;
        
            
    }
    });
    form.addEventListener('submit',function(e){
   
   let oldpass=checkoldpass(),
   newpass=checknewpass(),
   confirmpass=checkconfirmpass();
let success=oldpass && newpass && confirmpass;
  if(!success){
      e.preventDefault();
  }
});


    </script>
</body>
</html>