<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Assistant:wght@200&family=Kaushan+Script&family=Lobster&family=Monoton&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        *{
            position: relative;
        }
        .navbar {
            background-color: black;
            /* opacity: 0.7; */
        }

        #Home {
            background-image: url('<?= base_url('assets/h2.jpg') ?>');
            background-repeat: no-repeat;

            background-size: cover;
            height: 750px;
            width: 100%;
        }

        nav>ul>li>.nav-link,
        nav>ul>li>div>.nav-link {
            color: grey;
            font-size: large;
            text-decoration: none;

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



        img {

            width: 100px;
            height: 100px;
            margin-left: 25px;

        }

        #Festivals {

            height: 700px;
            position: relative;
            width: 100%;




        }

        #Festivals {
            
            background-color: black;
        }

        #Festivals>.header>h3 {
            
            font-size: 40px;
            color: white;

        }


        #Festivals>.row>.col-5>h5,
        #Festivals>.row>.col-5>p {

         

            text-align: justify;
            /* color:white; */

            font-family: Alata;
        }


        #Festivals>div>div>#knowhow {
          
            height: 550px;
            width: 650px;
            margin-left: 70px;
            margin-top: 70px;
        }

        #PlacementStastics {
            height: 700px;
            background-color: rgb(20, 20, 20);
            font-family: Alata;
            color:red;

        }

        #Alumni {
            height: 780px;
            background-color: black;
            font-family: Alata;

        }

        .dropdown-menu {
            background-color: rgb(236, 236, 236);

        }

        .dropdown-item:hover {
            background-color: rgb(187, 185, 185);
            font-weight: bold;
        }

        .image {
            height: 416px;
            width: 500px;
        }

        #recruiters {
            height: 600px;
            background-color: rgb(23,23,23);
        
        }

        /* .company>img {
            width: 915px;
            height: 418px;
        } */

        .card {
            width: 400px;
            height: 470px;
            margin: auto;
            background-color: rgb(26,26,26);
            color:grey;
            padding:25px;
            
        }

        .card-img-top {
            height: 230px;
            width: 300px;
            padding:20px;

        }

        .vision {
            color: white;
            font-weight: bold;
            
        }
    
        #global {
            height: 400px;
            background-color: #041E42;
            color: white;
        }

        #admin:hover {
            border: 1px solid white;
        }

        .show_navbar {
            display: none;
        }
        #recruiters > div > div > div > .company-logo > img{
            transform: scale(0.8,0.8);
           
        }
        #recruiters > div > div > div > .company-logo > img:hover{
            transform: scale(1,1);
        }
        .bi-building,.bi-award,.bi-currency-dollar  {
            height: 45px;
            width: 45px;
           
        }

    </style>
    <title>Information Form</title>
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
                <a href="#Home" class="nav-link">Home</a>
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
                <a href="<?php echo site_url('site/admin_login') ?>" class="nav-link" id="Admin">Admin</a>
            </li>
        </ul>

    </nav>
    <!-- <div  id="global" class="show_navbar container-fluid">
        <div class="h4 p-4">Companies</div>
        <div class="container">
        
        </div>
    </div> -->
    <!-- Home -->
    <div id="Home" class="container-fluid p-3 pt-5 pb-3 " >
        <div class="vision container " data-aos="fade-left"
    data-aos-offset="0"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
            <h1 class="text-capitalize float-end mt-5 p-5" >
                <pre style=" font-size:50px;font-family:Archivo Black;color:darkorange;top:100px">you become 
    what you believe<pre></h1>

        </div>
    </div>
    <!-- Festivals At BVM -->
    <div id="Festivals" class="container-fluid ">
<!-- 
        <div class="header p-5">
            <h3 class=" text-center">Festivals At BVM</h3>
        </div> -->
        <div class="row ">
            <div class="col-6" data-aos="fade-right"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
                <img src="<?= base_url('assets/1.jpg') ?>" alt="knowhow" class="rounded" id="knowhow">
            </div>
            <div class="col-5 p-5 mt-5"  data-aos="fade-left"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
                <h5 class="pb-4 pt-5 mt-5" style="font-size:50px;font-family:Archivo Black;color:white" >KNOW HOW</h5>

                <p class="text-capitalize ml-5 " >
                <h5 style="color:grey">KNOW HOW is the biggest soft skill development fest organized
                    by
                    “TRAINING & PLACEMENT CELL. It consists of various events aimed at giving students a unique
                    opportunity to showcase their talent, providing them with an elementary understanding of
                    placement procedure and ameliorating their skills so that they emulate the best in the corporate
                    world.</h5>
                </p>


            </div>

        </div>


    </div>
    <!-- Placement Stastics -->
    <div id="PlacementStastics" class="container-fluid">

        <div class="text-center p-5">
            <h3 class="mt-5" style="font-size:50px;font-family:Archivo Black;color:white" >Placement Statistics 2021-2022</h3>
            <!-- <i class='fas fa-user-graduate' style='font-size:48px;color:red'></i> -->
        </div>
        <div class="container-fluid ">
            <div class="row p-5 m-5">
                <div class="col-2 m-3 ml-3 bg-black" style="height:250px;width:270px">
              
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
                <div class="col-2 m-3 bg-black" style="height:250px;width:270px">
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
                <div class="col-2 m-3 bg-black" style="height:250px;width:270px">
                    <div class="counter  p-3 text-center">
                    <i class="bi bi-currency-dollar"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar mt-5" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>

                        <h2 data-target="6.5" class="count mt-4" style="color:white;font-family:Archivo Black">0</h2>
                        <h6 class="text-capitalize mt-1" style="color:grey">average LPA</h6>
                    </div>
                </div>
                <div class="col-2 m-3 bg-black" style="height:250px;width:270px">
                    <div class="counter  p-3 text-center" >
                    <i class="bi bi-currency-dollar"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar mt-5" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>

                        <h2 data-target="15" class="count mt-4" style="color:white;font-family:Archivo Black">0</h2>
                        <h6 class="text-capitalize mt-1" style="color:grey">maximum LPA</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Alumni -->
    <div id="Alumni" class="container-fluid">
        <div class="text-center p-5 " >
            <h2 style="font-size:50px;font-family:Archivo Black;color:white"    >Alumni</h2>
        </div>

        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators ">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-primary"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-primary"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-primary"></button>
            </div> -->

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            
                            
                            <div class="col">
                                <div class="card">
                                    <img src="<?= base_url('assets/a m naik.jpg') ?> " alt="" class="card-img-top mt-3">
                                    <div class="card-body">
                                        <h4 class="card-title text-white text-center">Dr. Anil M Naik</h4>
                                        <p class="card-text pb-5 pt-2">Class of 1963,<br> B.E. Mechanical <br> Group Chairman,<br>
                                            Larsen & Tubro
                                            <br> Ltd India
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col">
                                <div class="card">
                                    <img src="<?= base_url('assets/a m naik.jpg') ?> " alt="" class="card-img-top mt-3">
                                    <div class="card-body">
                                        <h4 class="card-title text-white text-center">Dr. Anil M Naik</h4>
                                        <p class="card-text pb-5 pt-2">Class of 1963,<br> B.E. Mechanical <br> Group Chairman,<br>
                                            Larsen & Tubro
                                            <br> Ltd India
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col">
                                <div class="card">
                                    <img src="<?= base_url('assets/a m naik.jpg') ?> " alt="" class="card-img-top mt-3">
                                    <div class="card-body">
                                        <h4 class="card-title text-white text-center">Dr. Anil M Naik</h4>
                                        <p class="card-text pb-5 pt-2">Class of 1963,<br> B.E. Mechanical <br> Group Chairman,<br>
                                            Larsen & Tubro
                                            <br> Ltd India
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <button type="button" class="carousel-control-prev" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button type="button" class="carousel-control-next " data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon "></span>
            </button>
        </div>


    </div>
    <!-- Major recruiters -->
    <div id="recruiters" class="container-fluid">
        <div class="text-center p-5">
            <h4 style="font-size:50px;font-family:Archivo Black;color:white" >Major recruiters</h4>
        </div>
        <div class="company container-fluid text-center p-3">
        <div class="row">
            <div class="col">
                <div class="company-logo m-3">
                    <img src="http://127.0.0.1/something/assets/tcs.png" alt="" >
                </div>
            </div>
            <div class="col">
            <div class="company-logo m-3">
                    <img src="http://127.0.0.1/something/assets/infostretch.png" alt="" style="width:200px">
                </div>
            </div>
            <div class="col">
            <div class="company-logo mt-4 pt-4">
                    <img src="http://127.0.0.1/something/assets/juspay.png" alt=""  style="width:250px;height: 50px">
                </div>
            </div>
            <div class="col">
            <div class="company-logo m-3">
                    <img src="http://127.0.0.1/something/assets/Crest-Logo.png" alt="" style="width:200px;height: 90px">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="company-logo m-4">
                    <img src="http://127.0.0.1/something/assets/torrent_power.png" class="float-end "alt="" style="width:200px;height: 50px">
                </div>
            </div>
            <!-- <div class="col">
            <div class="company-logo">
                    <img src="http://127.0.0.1/something/assets/juspay.png" alt="" style="width:250px;height: 50px">
                </div>
            </div> -->
            <div class="col">
            <div class="company-logo m-4">
                    <img src="http://127.0.0.1/something/assets/L&T.png" alt="" style="width:130px" >
                </div>
            </div>
            <div class="col">
            <div class="company-logo m-4">
                    <img src="http://127.0.0.1/something/assets/capgemini.png" class="float-start" alt="" style="width:200px;height: 50px">
                </div>
            </div>
        </div>
        
        </div>

    </div>
    <!-- footer -->
    <div id="footer" class="container-fluid">
        

    </div>



    <script>


        function myfunction() {
            var element = document.getElementById("global");
            element.classList.remove("show_navbar");
        }



        const counters = document.querySelectorAll(".count");
        const speed = 6;

        counters.forEach((counter) => {
            const updateCount = () => {
                const target = parseInt(+counter.getAttribute("data-target"));
                const count = parseInt(+counter.innerText);
                const increment = Math.trunc(target / speed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 1);
                } else {
                    count.innerText = target;
                }
            };
            updateCount();
        });


    </script>
  <!-- <script src="http://127.0.0.1/something/assets/skrollr.js"></script>
  <script type="text/javascript">
    var s = skrollr.init();
  </script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>