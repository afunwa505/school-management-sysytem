
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::SMS::</title>
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- Bootstrap Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- ICON FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
     <link rel="stylesheet" href="/CSS/style.css">

     <!-- JS -->
      <link rel="stylesheet" href="/JS/script.js">
</head>
<body style="background: gainsboro;">
        <!-- HEADER -->
    <!-- Topbar Start -->
<div class="card container rounded-0">
    <div class="card-body d-flex justify-content-between align-items-center" style="background:white;" >
        <!-- LOGO -->
        <div>
            <a href="/index.html" class="topnav-logo">
                <span class="topnav-logo-lg">
                    <img src="logo3.png" alt="" height="30">
                </span>
            </a>
        </div>

        <li class="dropdown notification-list">
           <a class="nav-link dropdown-toggle nav-user arrow-none me-0 d-flex justify-content-centeralign-items-center" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar d-flex justify-content-center align-items-center">
                <img src="/image/hero1.jpg" alt="user-image" height="30" width="30" class="rounded-pill shadow-sm me-2">
                </span>
                <span class="fs-7 text-muted fw-bold">
                    <span>John Doe</span>
                    <br>
                    <span>Superadmin</span> 
                </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown ">
            <!-- item-->
          <div class=" dropdown-header noti-title">
             <h6 class="text-overflow m-0 fs-7 text-muted fw-bold">Welcome !</h6>
          </div>
                <!-- item-->
                <a href="https://demo.creativeitem.com/ekattor/superadmin/profile" class="dropdown-item notify-item fs-7 text-muted fw-bold">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My account</span>
                </a>
                <!-- item-->
                <a href="https://demo.creativeitem.com/ekattor/superadmin/system_settings" class="dropdown-item notify-item fs-7 text-muted fw-bold">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Settings</span>
                </a>
                    
                <!-- item-->
                <a href="https://demo.creativeitem.com/ekattor/superadmin/system_settings" class="dropdown-item notify-item fs-7 text-muted fw-bold">
                    <i class="mdi mdi-lifebuoy me-1"></i>
                    <span>Support</span>
                </a>
                    
                <!-- item-->
                <a href="https://demo.creativeitem.com/ekattor/superadmin/system_settings" class="dropdown-item notify-item fs-7 text-muted fw-bold">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </div>
</div>  

            <!-- BEGIN CONTENT -->
<div class="container">
                <!-- SIDEBAR -->  
<!-- ========== Left Sidebar Start ========== -->
    <div class="row justify-content-start align-items-center">
        <div class="col-md-3">
            <div class=" card mt-2 bg-white rounded-0 border-0">
                <div class="card-header">
                    <a href="" class="nav-link text-muted fs-7 fw-bold">
                        <img src="/image/hero1.jpg" alt="user-image" height="30" width="30" class="rounded-pill shadow-sm mt-2">
                        <p>John Doe</p>
                    </a>
                </div>
                <div class="card-body ">
                    <span class="">Navigation</span>
                    <div class="card border-0 m-0">
                        <a href="superadmin.html" class="text-decoration-none d-flex ms-2 my-3 fs-7 fw-bold text-muted">
                            <i class="fa-solid fa-gauge me-2"></i>
                             <p class="m-0 p-0">Dashboard</p>
                        </a>
                    </div> 
                    <!--- Sidemenu -->
                    <div class="accordion border-0" id="item">
                        <!-- Items -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                            <button class="accordion-button bg-white fs-7 text-muted fw-bold m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-user mx-2"></i>
                                Users
                            </button>
                            </div>
                            <div id="item1" class="accordion-collapse collapse show border-0" data-bs-parent="#item">
                            <ul class=" accordion-body border-0 bg-white">
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Admin </a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Student</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Admision</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Teacher</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Teacher permission</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Parents</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Accountant</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Librarian</a></li>
                            </ul>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="accordion-item my-4">
                            <div class="accordion-header">
                            <button class="accordion-button bg-white fs-7 text-muted fw-bold m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-user mx-2"></i>
                                Alumi
                            </button>
                            </div>
                            <div id="item2" class="accordion-collapse collapse show border-0" data-bs-parent="#item">
                            <ul class=" accordion-body border-0 bg-white">
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Manage alumni </a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Events</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Gallary</a></li>
                            </ul>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                            <button class="accordion-button bg-white fs-7 text-muted fw-bold m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-user mx-2"></i>
                                Academic
                            </button>
                            </div>
                            <div id="item3" class="accordion-collapse collapse show border-0" data-bs-parent="#item">
                            <ul class=" accordion-body border-0 bg-white">
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Daily attendance </a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Biometric attendance</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Class routine</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Subject</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Syllabus</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Class</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Class room</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted my-2" href="#">Department</a></li>
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Event calender</a></li>
                            </ul>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="accordion-item my-4">
                            <div class="accordion-header">
                            <button class="accordion-button bg-white fs-7 text-muted fw-bold m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-user mx-2"></i>
                                Live class
                            </button>
                            </div>
                            <div id="item4" class="accordion-collapse collapse show border-0" data-bs-parent="#item">
                            <ul class=" accordion-body border-0 bg-white">
                                <li><a class="dropdown-item fs-7 fw-bold text-muted" href="#">Live class Settings</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
         <!-- DASHBOARD -->
        <div class="col-md-9 container">
            <div class="card mt-1">
                <div class="card-body d-flex text-muted">
                    <i class="fa-solid fa-gauge mx-2"></i>
                <p class="p-0 m-0 fs-7 fw-bold">Dashboard</p>
                </div>
            </div>
            <!-- STUDENT, TEACHER, PARENTS, AND  STAFF CONTAINER -->
            <div class="container my-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="row justify-content-start align-items-center">
                            <div class="col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <h5 class="d-flex fs-7 fw-bold text-muted">
                                            <i class="fa-solid fa-gauge"></i>
                                            <p class="p-0 m-0 ms-2 ">Student</p>
                                        </h5>
                                        <h3 class="mt-3 mb-3 fs-7 fw-bold text-muted">12</h3>
                                        <p class="mb-0 text-muted fs-7 fw-bold">
                                            <span class="text-nowrap">Total number of student</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <h5 class="d-flex fs-7 fw-bold text-muted">
                                            <i class="fa-solid fa-gauge"></i>
                                            <p class="p-0 m-0 ms-2 ">Teacher</p>
                                        </h5>
                                        <h3 class="mt-3 mb-3 fs-7 fw-bold text-muted">5</h3>
                                        <p class="mb-0 text-muted fs-7 fw-bold">
                                            <span class="text-nowrap">Total number of teachers</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-start align-items-center my-3">
                            <div class="col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <h5 class="d-flex fs-7 fw-bold text-muted">
                                            <i class="fa-solid fa-gauge"></i>
                                            <p class="p-0 m-0 ms-2">Parents</p>
                                        </h5>
                                        <h3 class="mt-3 mb-3 fs-7 fw-bold text-muted">12</h3>
                                        <p class="mb-0 text-muted fs-7 fw-bold">
                                            <span class="text-nowrap">Total number of student</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <h5 class="d-flex fs-7 fw-bold text-muted">
                                            <i class="fa-solid fa-gauge"></i>
                                            <p class="p-0 m-0 ms-2">Staff</p>
                                        </h5>
                                        <h3 class="mt-3 mb-3 fs-7 fw-bold text-muted">5</h3>
                                        <p class="mb-0 text-muted fs-7 fw-bold">
                                            <span class="text-nowrap">Total number of teachers</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h4 class="header-title text-white mb-2 fs-7 fw-bold">Todays attendance</h4>
                                <div class="text-center">
                                <h3 class="font-weight-normal text-white mb-2 fs-7 fw-bold">0</h3>
                                <p class="text-light text-uppercase font-13 font-weight-bold fs-7 fw-bold">0 Students are attending today</p>
                                <a href="#" class="btn btn-outline-light btn-sm mb-1 fs-7 fw-bold">Go to attendance                <i class="mdi mdi-arrow-right ml-1"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2 mb-4">
                        <div class="card-body text-muted">
                            <h4 class="header-title fs-7 fw-bold">Recent events<a href="https://demo.creativeitem.com/ekattor/superadmin/event_calendar" style="color: #6c757d;"><i class = "mdi mdi-export"></i></a>
                            </h4>
                            <div class="slimscroll" style="max-height: 171px;">
                                <div class="timeline-alt pb-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ACCOUNTING -->
            <div class="row justify-content-around align-items-center">
                <div class="col-md-12">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fs-7 fw-bold">ACCOUNTS OF JUNE</h4>
                                     <table id="basic-datatable" class="fs-7 fw-bold text-muted nowrap" width="100%">
                                        <thead style="font-size: 8px;">
                                            <tr>
                                                <th>Student <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                                <th>Class <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                                <th>Invoice title <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                                <th>Total amount <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                                <th>Paid amount <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                                <th>Status <i class="fa-solid fa-up-right-and-down-left-from-center"></i></th>
                                            </tr>
                                        </thead>
                                        <div class="row justify-content-around align-items-center">
                                            <div class="col-md-5 d-flex justify-content-center align-items-center my-2">
                                                <label for="" class="fs-7 fw-bold text-muted">Show</label>
                                                <select name="" id="" class="fw-bold fs-7 text-muted mx-2">
                                                    <option value="">10</option>
                                                    <option value="">20</option>
                                                    <option value="">30</option>
                                                    <option value="">40</option>
                                                </select>
                                                <label for="" class="fs-7 fw-bold text-muted">entries</label>
                                            </div>
                                            <div class="col-md-5 d-flex justify-content-center align-items-center my-2">
                                                <label for="" class="fs-7 fw-bold text-muted">Search:</label>
                                                <input type="search" class="w-100 ms-1 fs-7 text-muted fw-bold">
                                            </div>
                                        </div>
                                        <tbody>
                                            <tr class="bg-white opacity-75 text-center text-white">
                                                <td colspan="6">nothing is here</td>
                                            </tr>
                                            <tr class="bg-secondary opacity-75 text-muted text-center">
                                                <td colspan="6">No data found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title fs-7 fw-bold text-muted mb-3"> Expense of June <a href="" style="color: #6c757d"><i class = "mdi mdi-export"></i></a></h4>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped table-centered table-bordered mb-0 table-responsive fs-7 fw-bold text-muted">
                                            <thead>
                                              <tr>
                                                <th width = "60%" class="fs-7 fw-bold text-muted">Expense</th>
                                                <th width = "40%" class="fs-7 fw-bold text-muted">Amount</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <td colspan="2" class="fs-7 fw-bold text-muted">No data found</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
         <!-- Footer -->
        <!-- Footer Start -->
         <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 fs-7 fw-bold">
                    © <a href="digitx4.com/" class="fs-7 fw-bold text-decoration-none" target = "_blank">By Digitx4-Code</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->   
    </div>
</div> 
</div>
     
      <!-- Bootstrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>