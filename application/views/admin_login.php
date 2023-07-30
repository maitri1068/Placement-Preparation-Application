<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        #bg > #bg1 > div > img{
            position:relative;
            height: 82px;
            width: 82px;
          
        }
        #bg > #bg1 > #login > .input-group > .form-field {
            position:relative;
            width:300px;
            height:60px;
          
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
            <form action="<?php echo site_url('site/save_data') ?>" method="post" class="needs-validation "  id="login">
                <div class="input-group">
                <span class="intput-group-text mt-3"><img src="http://127.0.0.1/something/assets/user1.png" alt="" style="width:60px;height:60px"></span>
                <div class=" form-field form-floating mt-3 mb-2" >
                         <input type="text" class="form-control  " name="username" id="username"
                           placeholder="Enter Your Username"  autocomplete="off" style="width:300px">
                        <label for="username ">Username</label>       
                        <small class="pt-1 pb-1 "></small>
               </div>
                </div>
                
                <div class="input-group  ">
                <span toggle="#password" class="intput-group-text mt-3 view_field toggle-password"><img id="view_pass" src="http://127.0.0.1/something/assets/view_pass_icon.jpg" alt="" style="width:60px;height:60px"></span>
                <div class="form-field form-floating mt-3 ">
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter Your password" autocomplete="off" style="width:300px" >
                    <label for="password">Password</label>
                    <small class="pt-1 pb-1"></small>
                    <?php echo isset($message) ? $message : ''; ?> 
                    
                </div>
                
                </div>
                
               
                <div class="position-relative mt-5 pb-4 form-field">
                    <button class="position-absolute btn btn-outline-danger start-50 top-50 translate-middle"
                        type="submit">
                        Sign in
                    </button>
                </div>
                <div class="container-fluid text-center mt-3 ">
                <small><p><a href="<?php echo site_url('site/forgotpass'); ?>" style="text-decoration:none;color:blue"  class="forgot">Forgot Password?</a></p></small>
            </div>
              
            </form>
        </div>

    </div>
    <script>
    //    function myfun(){
    //         document.getElementById("password").setAttribute("type", "text"); 
    //         document.getElementById("view_pass").setAttribute("src", "http://127.0.0.1/ci4/assets/hidden_pass_icon.jpg"); 
    //     }
        $(".toggle-password").click(function() {
 
 $(this).toggleClass("view_field");
 var input = $($(this).attr("toggle"));
 if (input.attr("type") == "password") {
   input.attr("type", "text");
   $('#view_pass').attr("src","http://127.0.0.1/something/assets/hidden_pass_icon.jpg");

 } else {
   input.attr("type", "password");
   $('#view_pass').attr("src","http://127.0.0.1/something/assets/view_pass_icon.jpg");
 }
});    
        const usernameEl = document.querySelector('#username');
const passwordEl = document.querySelector('#password');
const form = document.querySelector('#login');
const checkUsername = () => {   

    let valid = false;

    const min = 3,
        max = 10;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`);
    } else {
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
        case 'username':
            checkUsername();
            break;
        case 'password':
            checkPassword();
            break;
    }
});

form.addEventListener('submit',function(e){
   
     let username=checkUsername(),
         password=checkPassword();
    let success=username && password;
    if(!success){
        e.preventDefault();
    }
});


    </script>
</body>
</html>