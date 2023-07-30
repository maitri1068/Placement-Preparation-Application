

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Assistant:wght@200&family=Kaushan+Script&family=Lobster&family=Monoton&display=swap"
        rel="stylesheet">
    <style>
        body{
            font-family: Alata;

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
        .logoutlogo{
            height:26px;
            width:26px;
        }
        .list-table {
        background-color:rgb(23,23,23);
        color:grey;
        border:none;
     }
    </style>

</head>

<body>


    <div class="container-fluid">
        <div class="row" style="height: 710px">
            <div class="sideview col-3  ">
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
                    <div class="col-11">
                        <h4 class="text-capitalize mt-5 m-4" style="color:white">List of Students:</h4>
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
                <div class="container-fluid " style="height: 630px;">
                <div class="row p-4 mt-3 ">
                    <div class="col-8">
                                <form action="">
                                    <input type="text" class="form-control p-2" name="search" id="search"
                                        placeholder="Search" style="background-color:rgb(23,23,23);border:none;color:white;width: 600px">
                                </form>
                    </div>
                    <div class="col-2">
                    <div class="dropdown">
                        
                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Year</button>

                    <ul class="dropdown-menu" style="width:100%">
                        <li><a class="dropdown-item" href="">2018-2019</a></li>
                        <li><a class="dropdown-item" href="">2019-2020</a></li>
                        <li><a class="dropdown-item" href="">2020-2021</a></li>

                    </ul>

                </div>
                    </div>
                    <div class="col-2"><a href="<?php echo site_url('site/student_table') ?>"><button class="btn btn-outline-danger ">+ Add</button></a></div>
                
                </div><div class="container mt-3 mb-4">
<div class="col-lg-11 mt-4 mt-lg-0">
    <div class="row">
    <div class="col-md-12">
        <div class="list-table table-responsive mb-0  p-4 shadow-sm">
          <table class="table  table-borderless   mb-0">
            <thead>
              <tr style="color:white; border-bottom:1px solid grey" >
              <th class="pb-3">Student Name<a href="" ><i class="bi bi-caret-up-fill" style="color:blue"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
  <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
</svg></a> <a href="" ><i class="bi bi-caret-down-fill" style="color:blue"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></a></th>
              <th class=" text-center pb-3">Action</th>
             
              </tr>
            </thead>
            <tbody id="table-body">
               

            </tbody>
          </table>
          <div class="container text-center mt-3">
    <div id="pagination-wrapper"></div>
                    </div>
       
        </div>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>

        </div>
    </div>


<script>
    function myfun(){
        const xmlhttp = new XMLHttpRequest();
          
          xmlhttp.onload = function () {
              let data = JSON.parse(this.responseText);
        
              let tableData = [];
            
              let c = 0;
              
                   for(let i of data){
                      tableData[c] =  {'name' : i.Student_Name , 'id' : i.student_id};
                      c++;
                   }
                  
             var state = {
                      'querySet': tableData,
                      'page': 1,
                      'rows': 3,
                      'window': 5,
                      }

                      buildTable()

                      function pagination(querySet, page, rows) {

                      var trimStart = (page - 1) * rows
                      var trimEnd = trimStart + rows

                      var trimmedData = querySet.slice(trimStart, trimEnd)

                      var pages = Math.ceil(querySet.length / rows);

                      return {
                          'querySet': trimmedData,
                          'pages': pages,
                      }
                      }

                      function pageButtons(pages) {
                      var wrapper = document.getElementById('pagination-wrapper')

                      wrapper.innerHTML = ``
                     // console.log('Pages:', pages)

                      var maxLeft = (state.page - Math.floor(state.window / 2))
                      var maxRight = (state.page + Math.floor(state.window / 2))

                      if (maxLeft < 1) {
                          maxLeft = 1
                          maxRight = state.window
                      }

                      if (maxRight > pages) {
                          maxLeft = pages - (state.window - 1)

                          if (maxLeft < 1) {
                          maxLeft = 1
                          }
                          maxRight = pages
                      }

                     

                      for (var page = maxLeft; page <= maxRight; page++) {
                          
                          wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-outline-primary m-1">${page}</button>`
                      }

                      if (state.page != 1) {
                          wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-outline-primary m-1">&#171; First</button>` + wrapper.innerHTML
                      }

                      if (state.page != pages) {
                          wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-outline-primary m-1">Last &#187;</button>`
                      }

                      $('.page').on('click', function() {
                          $('#table-body').empty()

                          state.page = Number($(this).val())

                          buildTable()
                      })

                      } 


                      function buildTable() {
                      var table = $('#table-body').empty()

                      var data = pagination(state.querySet, state.page, state.rows);
                      var myList = data.querySet;
                      console.log(myList);
                      for (var i=1 in myList) {
                          
                          var row = ` <tr class='candidates-list' style='color:grey'>
                          <td class='title'> <div class='candidate-list-details'>
                              <div class='candidate-list-primary'>   
                              <div class='candidate-list-title'>
                                  <h5 class='m-3'>${myList[i].name}</h5>
                                  </div>
                              </div>
                              </div>
                          </td>
                  
                          <td>
                              <ul class='list-unstyled mb-0 d-flex justify-content-center mt-3'>
                              <li><a href='#' class='text-primary m-2' data-toggle='tooltip' title='' data-original-title='view' ><i class='far fa-eye'></i></a></li>
                              <li><a href='edit_student_table/${myList[i].id}' class='text-info m-2' data-toggle='tooltip' title='' data-original-title='Edit'><i class='fas fa-pencil-alt'id='update'></i></a></li>
                              <li><a href='delete_student_table/${myList[i].id}' class='text-danger m-2' data-toggle='tooltip' title='' data-original-title='Delete'><i class='far fa-trash-alt'></i></a></li>
                              </ul>
                          </td>
                          </tr>`
                                      
                          table.append(row)
                      }

                      pageButtons(data.pages)
                      }

          }
          
          

          xmlhttp.open("GET", "http://localhost/something/index.php/site/student_data1");
          xmlhttp.send();

      
       }
        
       document.getElementById("table-body").innerHTML=myfun();
  
        
        document.getElementById("search").addEventListener("keyup", (event) => {
            let val = event.target.value;
            if(val != ''){
                document.getElementById("table-body").innerHTML='';
                const xmlhttp = new XMLHttpRequest();
          
            xmlhttp.onload = function () {
                let data = JSON.parse(this.responseText);
                
                let tableData = [];
                let c = 0;
                     for(let i of data){
                        tableData[c] = {'name' : i.Student_Name , 'id' : i.student_id};
                        c++;
                     }
                    //   alert(tableData);
               var state = {
                        'querySet': tableData,

                        'page': 1,
                        'rows': 5,
                        'window': 5,
                        }

                        buildTable()

                        function pagination(querySet, page, rows) {

                        var trimStart = (page - 1) * rows
                        var trimEnd = trimStart + rows

                        var trimmedData = querySet.slice(trimStart, trimEnd)

                        var pages = Math.ceil(querySet.length / rows);

                        return {
                            'querySet': trimmedData,
                            'pages': pages,
                        }
                        }

                        function pageButtons(pages) {
                        var wrapper = document.getElementById('pagination-wrapper')

                        wrapper.innerHTML = ``
                       // console.log('Pages:', pages)

                        var maxLeft = (state.page - Math.floor(state.window / 2))
                        var maxRight = (state.page + Math.floor(state.window / 2))

                        if (maxLeft < 1) {
                            maxLeft = 1
                            maxRight = state.window
                        }

                        if (maxRight > pages) {
                            maxLeft = pages - (state.window - 1)

                            if (maxLeft < 1) {
                            maxLeft = 1
                            }
                            maxRight = pages
                        }

                       

                        for (var page = maxLeft; page <= maxRight; page++) {
                            
                            wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-outline-primary m-1">${page}</button>`
                        }

                        if (state.page != 1) {
                            wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-outline-primary m-1">&#171; First</button>` + wrapper.innerHTML
                        }

                        if (state.page != pages) {
                            wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-outline-primary m-1">Last &#187;</button>`
                        }

                        $('.page').on('click', function() {
                            $('#table-body').empty()

                            state.page = Number($(this).val())

                            buildTable()
                        })

                        }


                        function buildTable() {
                        var table = $('#table-body').empty()

                        var data = pagination(state.querySet, state.page, state.rows);
                        var myList = data.querySet;
                        console.log(myList);
                        for (var i=1 in myList) {
                            //Keep in mind we are using "Template Litterals to create rows"
                            var row = ` <tr class='candidates-list' style='color:grey'>
                            <td class='title'>
                            
                            <div class='candidate-list-details'>
                                <div class='candidate-list-primary'>   
                                <div class='candidate-list-title'>
                                    <h5 class='m-3'>${myList[i].name} </h5>
                                    </div>
                                </div>
                                </div>
                            </td>
                    
                            <td>
                                <ul class='list-unstyled mb-0 d-flex justify-content-center mt-3'>
                                <li><a href='#' class='text-primary m-2' data-toggle='tooltip' title='' data-original-title='view'><i class='far fa-eye'></i></a></li>
                                <li><a href='edit_student_table/${myList[i].id}' class='text-info m-2' data-toggle='tooltip' title='' data-original-title='Edit'><i class='fas fa-pencil-alt'></i></a></li>
                                <li><a href='delete_student_table/${myList[i].id}' class='text-danger m-2' data-toggle='tooltip' title='' data-original-title='Delete'><i class='far fa-trash-alt'></i></a></li>
                                </ul>
                            </td>
                            </tr>`
                                        
                            table.append(row)
                        }

                        pageButtons(data.pages)
                        }

            }
            
            

            xmlhttp.open("GET", "http://localhost/something/index.php/site/student_data?q="+val);
            xmlhttp.send();

            }else{
                document.getElementById("table-body").innerHTML=myfun();
  
            }
            
            
        })
</script>



</body>

</html>

