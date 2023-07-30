<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
            /* background-image: url('http://localhost/something/assets/m.jpg');
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
        #bg > #bg1 > div > img{
            position:relative;
            height: 82px;
            width: 82px;
          
        }
       
    </style>
    <body>
       
  
         <!--Login Form-->
    <div id="bg" class=" container-fluid p-2 ">
        <!-- <div class="text-center p-2 mt-5">
            <h4>Login Form</h4>
        </div> -->
        <div id="bg1" class="container mt-5 p-4 bg-white" style="width:435px">
        <div class="container text-center">
            <img src="http://127.0.0.1/something/assets/user.png" class="rounded-circle"alt="logo">
        </div>
            <form action="<?php echo site_url('site/update_data1') ?>" method="post" class="needs-validation "  id="login">
            
                <div class="form-field form-floating mt-3" >
                         <input type="text" class="form-control  " name="name" id="name"
                            placeholder="Enter Your name"  autocomplete="off">
                         <label for="name ">Username</label>       
                         <small></small>
                         <small><?php if(isset($error)){
                        echo $error;} ?></small>
                </div>
                <div class="form-field form-floating mt-3">
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter Your password" autocomplete="off" >
                    <label for="password">Password</label>
                    <small></small>
                </div>
                <div class="form-field form-floating mt-3">
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"
                        placeholder="Enter Your confirmpassword" autocomplete="off" >
                    <label for="confirmpassword">Confirm Password</label>
                    <small></small>
                    <small><?php if(isset($errorr)){
                        echo $errorr;} ?></small>
                    
                </div>
                <div class="position-relative mt-4 pb-4 form-field">
                    <button class="position-absolute btn btn-outline-danger start-50 top-50 translate-middle"
                        type="submit">
                        submit
                    </button>
                </div>
                
            </div>
            </form>
        </div>

    </div>
    <script>
       
        const usernameEl = document.querySelector('#name');
const passwordEl = document.querySelector('#password');
const confirm = document.querySelector('#confirmpassword');
const form = document.querySelector('#login');
const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 10;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    }
     else {
        showSuccess(usernameEl);
        
valid = true;
    }
    return valid;
};
const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
         showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must have Ab@3 format and length should be greater than 6');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};
const checkconfirmpass = () => {
let valid = false;

const confirm_pass = confirm.value.trim();
const newpp=newp;
if (!isRequired(confirm_pass)) {
    showError(confirm, 'confirmpass cannot be blank.');
} 
else{
    showSuccess(confirm);
    valid = true;
}
return valid;
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


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
        case 'name':
            checkUsername();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirmpassword':
            checkconfirmpass();
            break;
    }
});

form.addEventListener('submit',function(e){
   
     let username=checkUsername(),
         password=checkPassword(),
         confirmpass=checkconfirmpass();
    let success=username && password && confirmpass;
    if(!success){
        e.preventDefault();
    }
});


    </script>
</body>
</html>