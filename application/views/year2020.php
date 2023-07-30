<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Assistant:wght@200&family=Kaushan+Script&family=Lobster&family=Monoton&display=swap"
        rel="stylesheet">
    <style>
       nav>ul>li>.nav-link,
        nav>ul>li>div>.nav-link {
            color: grey;
            font-size: large;
            text-decoration: none;

        }
        .navbar {
            background-color: black;
            /* opacity: 0.7; */
        }
        nav>ul>.bvm {
            font-family: Archivo Black;
            color: red;
            font-size: 40px;
            margin-left: 50px;
            width: 130px;
        }

        nav>ul>li>.nav-link:visited,
        nav>ul>li>div>.nav-link:visited {
            color: white;
            font-weight: bold;
        }

        nav>ul>li>.nav-link:hover,
        nav>ul>li>div>.nav-link:hover {
            color: white;
            font-weight: bold;
        }

        nav>ul>li>.nav-link:active,
        nav>ul>li>div>.nav-link:active {
            color: red;
            font-weight: bold;
        }



        .heading{
            height: 400px;
            background-color:rgb(23,23,23);
        }
       

        .box{
            height:250px;
            width:250px;
            padding:50px;
            margin:5px;
        }
        tr{
            width:100%;
            display:table;
            table-layout:fixed;
        }
        table {
            display: flex;
            flex-flow: column;
            width: 100%;
        }

        thead {
             flex: 0 0 auto;
        }

        tbody {
            flex: 1 1 auto;
            display: block;
            overflow-y: auto;
    
}

.display{
height: auto;
background-color:rgb(23,23,23);

}
.statistics > div > div > p{
    color:grey;
}
.bi-building,.bi-award,.bi-currency-dollar  {
            height: 45px;
            width: 45px;
           color:red;
        }

        .plcm{
            backgroundcolor:black;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-sm  container-fluid sticky-top">
        <!-- <div class="img m-1 ">
            <img src=" BVM Logo-1.png" alt="logo image">
        </div> -->
        <ul class="navbar-nav ">
            <li class="nav-item bvm">BVM</li>
        </ul>
        <ul class="navbar-nav navbar-danger container-fluid justify-content-center">

            <li class="nav-item">
                <a href="<?php echo site_url('site'); ?>" class="nav-link">Home</a>
            </li>
            <li class=" nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Placement Details</a>

                    <ul class="dropdown-menu" style="width:100%">
                        <li><a class="dropdown-item" href="<?php echo site_url('site/year2018'); ?>">2018-2019</a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('site/year2019'); ?>">2019-2020</a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('site/year2020'); ?>">2020-2021</a></li>

                    </ul>

                </div>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="myfunction()">Company Preparation</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
                <a href="<?php echo site_url('Site/admin_login') ?>" class="nav-link" id="Admin">Admin</a>
            </li>
        </ul>

    </nav>

    <div class=" heading container-fluid p-5" >
        <div class="text-center p-5">
            <p class="h1 p-5 text-white ">Placement 2020-2021</p>
        </div>
    </div>
    <div class="container-fluid bg-black"  >
            <div class="row p-5   bg-black "   >
                <div class="col m-3 ml-3 bg-black" style="height:250px;width:270px">
              
                    <div class="counter p-3 text-center ">
                    <i class="bi bi-building"  ></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building mt-5" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>
                   
                        <h2 data-target="300" class="count mt-4" style="color:white;font-family:Archivo Black">0</h2>
                        <h6 class="text-capitalize mt-1" style="color:grey">Total number of compnies</h6>
                    </div>
                </div>
                <div class="col m-3 bg-black" style="height:250px;width:270px">
                    <div class="counter p-3 text-center">
                    <i class="bi bi-award"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award mt-5" viewBox="0 0 16 16">
  <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>
                        <h2 data-target="500" class="count mt-4" style="color:white;font-family:Archivo Black">0</h2>
                        <h6 class="text-capitalize mt-1" style="color:grey">Total number of placed</h6>
                    </div>
                </div>
                <div class="col m-3 bg-black" style="height:250px;width:270px">
                    <div class="counter  p-3 text-center">
                    <i class="bi bi-currency-dollar"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar mt-5" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>

                        <h2 data-target="6.5" class="count mt-4" style="color:white;font-family:Archivo Black">0</h2>
                        <h6 class="text-capitalize mt-1" style="color:grey">average LPA</h6>
                    </div>
                </div>
               
            </div>

        </div>    </div>
    <div class=" display container-fluid">  
    <img src="<?= base_url('assets/placement files/2018.png') ?>" alt="2018" style="height:1400px;width:1500px" >
    </div>

    



</body>
</html>