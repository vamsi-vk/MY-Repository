<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Learn</title>

    <!-- css -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

      <style type="text/css">
body{margin-top:20px;
background-color:#eee;
}
.card {
    margin-bottom: 24px;
    box-shadow: 0 2px 3px #e4e8f0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eff0f2;
    border-radius: 1rem;
}
.avatar-md {
    height: 4rem;
    width: 4rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.img-thumbnail {
    padding: 0.25rem;
    background-color: #f1f3f7;
    border: 1px solid #eff0f2;
    border-radius: 0.75rem;
}
.avatar-title {
    align-items: center;
    background-color: #3b76e1;
    color: #fff;
    display: flex;
    font-weight: 500;
    height: 100%;
    justify-content: center;
    width: 100%;
}
.bg-soft-primary {
    background-color: rgba(59,118,225,.25)!important;
}
a {
    text-decoration: none!important;
}
.badge-soft-danger {
    color: #f56e6e !important;
    background-color: rgba(245,110,110,.1);
}
.badge-soft-success {
    color: #63ad6f !important;
    background-color: rgba(99,173,111,.1);
}
.mb-0 {
    margin-bottom: 0!important;
}
.badge {
    display: inline-block;
    padding: 0.25em 0.6em;
    font-size: 75%;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.75rem;
}




li:hover{
  background-color: #9dede2;
  cursor: pointer;
  padding-left: 6px;
  padding-right: 6px;
  border-radius: 10px;
}       .animate-charcter
{
   text-transform: uppercase;

  background-image: linear-gradient(
    -225deg,
    #f7f7f7 0%,
    #3746e9 29%,
    #17e2c7 67%,
    #e02460 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
} 
      .navbar li{
        margin-right: 60px;
      }
      .ani1{
        font-size: 5vw;

      }
      .vk{
        z-index: 50;
        background:linear-gradient(rgba(0,0,0,0) ,rgba(0,0,0,0.0)) ,url(images/5th.gif);
        background-size: cover;
        background-position: center;
height: 100vh;
   width: 100%;
      }
      .vk2{
      background:linear-gradient(rgba(0,0,0,0) ,rgba(0,0,0,0.0)) ,url(images/5th.gif);}
   
    </style>





    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

  <!-- navbar -->
    <div class="position-fixed " style="width: 100%; z-index: 100; " >
      <img src="images/header.jpg"  class='img-fluid' alt="" style="margin-top:-20px;">
    <nav class="navbar navbar-expand-lg bg-light  ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#Easylearn">Easy learn</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav justify-content-center w-100">
              <li class="nav-item" >
                <a class=" navlink btn btn-outline-primary" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#courses">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#about">Follow us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard/admin.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="register" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
             sign in 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2">Adimin</a></li>
                  <li><a class="dropdown-item"  style="padding-right: 10%;" data-bs-toggle="modal" data-bs-target="#exampleModal">Student</a></li>
  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#register" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Register
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="cmptn/registor_teachet.html">Adimin</a></li>
                  <li><a class="dropdown-item" href="cmptn/register.html" style="padding-right: 10%;">Student</a></li>
  
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
     <div style="background-color: orange; height: 2px;"></div>
</div><br><br>
   




<!-- navbar end -->


<!-- modals for aingup -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold h3">Admin's Sign in</h4>
        <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body mx-3">
      	<img src="cmptn/admin.png" width="150px" style="margin-left: 30%;">
      	<form>
      		<label class="h5">Enter Email</label>
	        <div class="md-form mb-5 input-group">
	          <span class="input-group-text bg-dark"><i class="bi bi-envelope text-white"></i></span>
	          <input type="email" id="defaultForm-email" class="form-control validate" placeholder="Enter Email...">
	          
	        </div>
	        <label class="h5">Enter Password</label>
	        <div class="md-form mb-4 input-group">
	          <span class="input-group-text bg-dark" ><i class="bi bi-lock text-white"></i></span>
	          <input type="password" id="defaultForm-pass" class="form-control validate" placeholder="Enter Password..">
	        </div>
    	</form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn px-5 text-white bg-dark">Sign in</button>
      </div>
    </div>
  </div>
</div>

    

<!-- moadal for ssign up -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold h3">Student's Sign in</h4>
        <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body mx-3">
      	<img src="cmptn/student.png" width="150px" style="margin-left: 30%;">
      	<form>
      		<label class="h5">Enter Email</label>
	        <div class="md-form mb-5 input-group">
	          <span class="input-group-text" style="background-color: rgb(99,215, 227);"><i class="bi bi-envelope text-white"></i></span>
	          <input type="email" id="defaultForm-email" class="form-control validate" placeholder="Enter Email...">
	          
	        </div>
	        <label class="h5">Enter Password</label>
	        <div class="md-form mb-4 input-group">
	          <span class="input-group-text" style="background-color: rgb(99,215, 227);" ><i class="bi bi-lock text-white"></i></span>
	          <input type="password" id="defaultForm-pass" class="form-control validate" placeholder="Enter Password..">
	        </div>
    	</form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn px-5 text-white" style="background-color: rgb(99,215, 227);">vk</button>
      </div>
    </div>
  </div>
</div>


<br><br>
<!-- head  -->




      <div class="contanier" id="home" >
        <div class="row">
            <div class="col">
              <img src="images/main.gif" alt="" style="width: 100%; margin-top: 20px;">
            </div>
            <div class="col-4">
              <h1  class="display-1 text-center" style="margin-top: 50%; font-size: 6vw; color: rgb(95,123,205);">Easy Learn</h1>
            <p class="text-center h4" style="margin-top: 2%; font-size: 2vw; color:#937324" >No resistance can drop our potential.</p>
            <p style="text-align: center ;color: black;">Try to learn new thisg today </p>
           <center> <a style="padding:5px"  class="btn btn-primary btn-sm" href="cmptn/register.html">sign in</a></center>
              
            </div>
            
        </div>
      </div>
      <br><br><br><br>
      <br><bR>

<div class="page-content container note-has-grid">
    <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active" id="all-category">
                <i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social"> <i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important"> <i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
        </li>
        <li class="nav-item ml-auto">
            <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes"> <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Notes</span></a>
        </li>
    </ul>
    <div class="tab-content bg-transparent">
        <div id="note-full-container" class="note-has-grid row">
            <div class="col-md-4 single-note-item all-category" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Book a Ticket for Movie <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">11 March 2009</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch">Go for lunch <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">01 April 2002</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">19 October 2020</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-business" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give Review for design">Give Review for design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">02 January 2000</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Nightout with friends">Nightout with friends <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">01 August 1999</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Launch new template">Launch new template <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">21 January 2015</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Change a Design">Change a Design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">25 December 2016</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-business" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give review for foods">Give review for foods <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">18 December 2020</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give salary to employee">Give salary to employee <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">15 Fabruary 2020</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add notes -->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white">Add Notes</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="notes-box">
                        <div class="notes-content">
                            <form action="javascript:void(0);" id="addnotesmodalTitle">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="note-title">
                                            <label>Note Title</label>
                                            <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="note-description">
                                            <label>Note Description</label>
                                            <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                    <button id="btn-n-add" class="btn btn-info" disabled="disabled">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
body{
    background: #edf1f5;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card {
    margin-bottom: 30px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.57rem;
}

 .note-has-grid .nav-link {
     padding: .5rem
 }

 .note-has-grid .single-note-item .card {
     border-radius: 10px
 }

 .note-has-grid .single-note-item .favourite-note {
     cursor: pointer
 }

 .note-has-grid .single-note-item .side-stick {
     position: absolute;
     width: 3px;
     height: 35px;
     left: 0;
     background-color: rgba(82, 95, 127, .5)
 }

 .note-has-grid .single-note-item .category-dropdown.dropdown-toggle:after {
     display: none
 }

 .note-has-grid .single-note-item .category [class*=category-] {
     height: 15px;
     width: 15px;
     display: none
 }

 .note-has-grid .single-note-item .category [class*=category-]::after {
     content: "\f0d7";
     font: normal normal normal 14px/1 FontAwesome;
     font-size: 12px;
     color: #fff;
     position: absolute
 }

 .note-has-grid .single-note-item .category .category-business {
     background-color: rgba(44, 208, 126, .5);
     border: 2px solid #2cd07e
 }

 .note-has-grid .single-note-item .category .category-social {
     background-color: rgba(44, 171, 227, .5);
     border: 2px solid #2cabe3
 }

 .note-has-grid .single-note-item .category .category-important {
     background-color: rgba(255, 80, 80, .5);
     border: 2px solid #ff5050
 }

 .note-has-grid .single-note-item.all-category .point {
     color: rgba(82, 95, 127, .5)
 }

 .note-has-grid .single-note-item.note-business .point {
     color: rgba(44, 208, 126, .5)
 }

 .note-has-grid .single-note-item.note-business .side-stick {
     background-color: rgba(44, 208, 126, .5)
 }

 .note-has-grid .single-note-item.note-business .category .category-business {
     display: inline-block
 }

 .note-has-grid .single-note-item.note-favourite .favourite-note {
     color: #ffc107
 }

 .note-has-grid .single-note-item.note-social .point {
     color: rgba(44, 171, 227, .5)
 }

 .note-has-grid .single-note-item.note-social .side-stick {
     background-color: rgba(44, 171, 227, .5)
 }

 .note-has-grid .single-note-item.note-social .category .category-social {
     display: inline-block
 }

 .note-has-grid .single-note-item.note-important .point {
     color: rgba(255, 80, 80, .5)
 }

 .note-has-grid .single-note-item.note-important .side-stick {
     background-color: rgba(255, 80, 80, .5)
 }

 .note-has-grid .single-note-item.note-important .category .category-important {
     display: inline-block
 }

 .note-has-grid .single-note-item.all-category .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite .more-options {
     display: block
 }

 .note-has-grid .single-note-item.all-category.note-business .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-business .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-important .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-social .more-options,
 .note-has-grid .single-note-item.all-category.note-important .more-options,
 .note-has-grid .single-note-item.all-category.note-social .more-options {
     display: none
 }

 @media (max-width:767.98px) {
     .note-has-grid .single-note-item {
         max-width: 100%
     }
 }

 @media (max-width:991.98px) {
     .note-has-grid .single-note-item {
         max-width: 216px
     }
 }
</style>

<script type="text/javascript">
$(function() {
    function removeNote() {
        $(".remove-note").off('click').on('click', function(event) {
          event.stopPropagation();
          $(this).parents('.single-note-item').remove();
        })
    }

    function favouriteNote() {
        $(".favourite-note").off('click').on('click', function(event) {
          event.stopPropagation();
          $(this).parents('.single-note-item').toggleClass('note-favourite');
        })
    }

    function addLabelGroups() {
        $('.category-selector .badge-group-item').off('click').on('click', function(event) {
          event.preventDefault();
          /* Act on the event */
          var getclass = this.className;
          var getSplitclass = getclass.split(' ')[0];
          if ($(this).hasClass('badge-business')) {
            $(this).parents('.single-note-item').removeClass('note-social');
            $(this).parents('.single-note-item').removeClass('note-important');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          } else if ($(this).hasClass('badge-social')) {
            $(this).parents('.single-note-item').removeClass('note-business');
            $(this).parents('.single-note-item').removeClass('note-important');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          } else if ($(this).hasClass('badge-important')) {
            $(this).parents('.single-note-item').removeClass('note-social');
            $(this).parents('.single-note-item').removeClass('note-business');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          }
        });
    }

    var $btns = $('.note-link').click(function() {
        if (this.id == 'all-category') {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        } if (this.id == 'important') {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        } else {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        }
        $btns.removeClass('active');
        $(this).addClass('active');  
    })

    $('#add-notes').on('click', function(event) {
        $('#addnotesmodal').modal('show');
        $('#btn-n-save').hide();
        $('#btn-n-add').show();
    })

    // Button add
    $("#btn-n-add").on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth()); //January is 0!
      var yyyy = today.getFullYear();
      var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
      today = dd + ' ' + monthNames[mm]  + ' ' + yyyy;

        var $_noteTitle = document.getElementById('note-has-title').value;
        var $_noteDescription = document.getElementById('note-has-description').value;

        $html =     '<div class="col-md-4 single-note-item all-category"><div class="card card-body">' +
                                '<span class="side-stick"></span>' +
                                '<h5 class="note-title text-truncate w-75 mb-0" data-noteHeading="'+$_noteTitle+'">'+$_noteTitle+'<i class="point fa fa-circle ml-1 font-10"></i></h5>' +
                                '<p class="note-date font-12 text-muted">'+today+'</p>' +
                                '<div class="note-content">' +
                                    '<p class="note-inner-content text-muted" data-noteContent="'+$_noteDescription+'">'+$_noteDescription+'</p>' +
                                '</div>' +
                                '<div class="d-flex align-items-center">' +
                                    '<span class="mr-1"><i class="fa fa-star favourite-note"></i></span>' +
                                    '<span class="mr-1"><i class="fa fa-trash remove-note"></i></span>' +
                                    '<div class="ml-auto">' +
                                          '<div class="category-selector btn-group">' +
                                                    '<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">' +
                                                        '<div class="category">' +
                                                            '<div class="category-business"></div>' +
                                                            '<div class="category-social"></div>' +
                                                            '<div class="category-important"></div>' +
                                                            '<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>'+
                                                        '</div>' +
                                                    '</a>' +
                                                    '<div class="dropdown-menu dropdown-menu-right category-menu">' +
                                                        '<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>' +
                                                        '<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>' +
                                                        '<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important</a>' +
                                                '</div>' +
                                         '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div></div> ';

        $("#note-full-container").prepend($html);
        $('#addnotesmodal').modal('hide');

        removeNote();
        favouriteNote();
        addLabelGroups();
    });

    $('#addnotesmodal').on('hidden.bs.modal', function (event) {
        event.preventDefault();
        document.getElementById('note-has-title').value = '';
        document.getElementById('note-has-description').value = '';
    })

    removeNote();
    favouriteNote();
    addLabelGroups();

    $('#btn-n-add').attr('disabled', 'disabled'); 
})

 $('#note-has-title').keyup(function() {
      var empty = false;
      $('#note-has-title').each(function() {
          if ($(this).val() == '') {
                  empty = true;
          }
      });

      if (empty) {
          $('#btn-n-add').attr('disabled', 'disabled'); 
      } else {
          $('#btn-n-add').removeAttr('disabled');
      }
});
</script>









<!-- 2nd div -->

  <div class="row" id="courses" >
    <div class="col-lg-4">
      <div class="continer" style="padding-top: 40px;">

    
      <br><Br><br>
        <p class="display-1 text-primary" style="font-size:50px;  text-align: center;">Download our syllbus books here </P>
          <p class="text-center">Available Courses check here</p>  
        </div>
        </div>

<div class="col-md-8" >
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-6 col-md-6 col-lg-6" >
    <div class="card">
      <img src="images/course1.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JAVA SCRIPT </h5>
        <p class="card-text">Javascript is used by programmers across the world to create dynamic and interactive web content like applications and browsers.  used as a client-side programming language by 97.0% of all websites</p>
        <a href="#buy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#js"> Details </a>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-6 col-lg-6 " >
    <div class="card">
      <img src="images/course2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Data Science</h5>
        <p class="card-text">Python is open source, interpreted, high level language and provides great approach for object-oriented programming. It is one of the best language used by data scientist for various data science projects/application.</p>
        <a href="#buy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#py"> Details </a>

      </div>
    </div>
  </div>
  
 
 
</div>
      </div>
      <div class="carousel-item">
            
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-6 col-md-6 col-lg-6" >
    <div class="card">
      <img src="images/course3.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Node JS</h5>
        <p class="card-text">Node. js is primarily used for non-blocking, event-driven servers, due to its single-threaded nature. It's used for traditional web sites and back-end API services, but was designed with real-time, push-based architectures in mind</p>
        <a href="#buy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#njs"> Details </a>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-6 col-lg-6" >
    <div class="card">
      <img src="images/course4.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">php and SQL</h5>
        <p class="card-text">PHP courses for beginners are suitable for anyone who does not have prior knowledge or experience working with PHP.</p>
      </p>
        <a href="#boy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%; "data-bs-toggle="modal" data-bs-target="#php"> Details </a>
      </div>
    </div>
  </div>
  
 
 
</div>
      </div>
      <div class="carousel-item">
            
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-6 col-md-6 col-lg-6" >
    <div class="card">
      <img src="images/course6.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Android</h5>
        <p class="card-text">Android software development is the process by which applications are created for devices running the Android operating system. Google states that "Android apps can be written using Kotlin, Java, and C++ languages" using the Android software development kit (SDK), while using other languages is also possible</p>
        <a href="#buy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#ad"> Details </a>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-6 col-lg-6" >
    <div class="card">
      <img src="images/course9.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">web Web Technologies</h5>
        <p class="card-text">Web Technology refers to the various tools and techniques that are utilized in the process of communication between different types of devices over the internet. A web browser is used to access web pages. Web browsers can be defined as programs that display text, data, pictures, animation, and video on the Internet.</p>
        <a href="#buy" class="btn btn-primary " > Buy Now </a>
        <a href="#details" class="btn btn-primary " style="margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#html"> Details </a>
      </div>
    </div>
  </div>
  
 
 
</div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div></div></div>

<br><b></b>

<!-- modals -->
<div class="modal fade" id="html" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">HTML</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<img src="images/htmlm.png" width="150px" style="margin-left: 30%;">
        <p class="h6 enumurate px-5">What is HTML used for?
        HTML (HyperText Markup Language) is the code that is used to structure a web page and its content.</p>
        <p class="h6 px-3">Real-World Benefits of HTML</p>
        <ul>
          <li>HTML allows you to browse the internet with ease. ...</li> 
           <li>  HTML allows you to create web documents. ...</li> 
            <li> HTML comes with cutting-edge features. ...</li> 
           <li>  HTML supports data entry. ...</li> 
            <li> HTML allows offline storage. ...</li> 
            <li> HTML allows game development. ...</li> 
           <li>  HTML allows you to use native APIs.</li> 
        </ul>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="php" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">PHP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/phpm.png" width="150px" style="margin-left: 30%;">
        <p class="h6 enumurate px-5">PHP courses for beginners are suitable for anyone who does not have prior knowledge or experience working with PHP.</p>
        
        <p class="h6 px-5">Advantages of PHP :
        It can be downloaded anywhere and is readily available to use for events or web applications. It is platform-independent. PHP-based applications can run on any OS like UNIX, Linux, Windows, etc. Applications can easily be loaded which are based on PHP and connected to the database.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="py" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">Data Science with Python</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/pym.png" width="200px" style="margin-left: 25%;">
        <p class="h6 enumurate px-5">Python is open source, interpreted, high level language and provides great approach for object-oriented programming. It is one of the best language used by data scientist for various data science projects/application.</p>
        
        <p class="h6 px-3">Advantages of DataScience</p>
        <ul>
          <li>Python is easy to learn. ...</li>
          <li>It's easy to read. ...</li>
          <li>It's popular. ...</li>
          <li>Huge Community of Pythonistas. ...</li>
          <li>Comprehensive set of data science libraries. ...</li>
          <li>Teaches the basics. ...</li>
          <li>Data cleaning is a breeze.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="js" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">JavaScript</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/jsm.png" width="200px" style="margin-left: 30%;">
        <p class="h6 enumurate px-3">Javascript is used by programmers across the world to create dynamic and interactive web content like applications and browsers. JavaScript is so popular that it's the most used programming language in the world, used as a client-side programming language by 97.0% of all websites</p>
        <p class="h6 px-3">Advantages of JS</p>
        <ul>
         <li>Client-side JavaScript is very fast because it can be run immediately within the client-side browser. ...</li>
          <li>Simplicity. JavaScript is relatively simple to learn and implement.</li>
          <li>Popularity. ...</li>
          <li>Interoperability. ...</li>
          <li>Server Load. ...</li>
          <li>Gives the ability to create rich interfaces.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">Android</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/adm.png" width="200px" style="margin-left: 30%;">
        <p class="h6 enumurate px-5">Android software development is the process by which applications are created for devices running the Android operating system. Google states that "Android apps can be written using Kotlin, Java, and C++ languages" using the Android software development kit (SDK), while using other languages is also possible.</p>
        <p class="h6 px-3">Benefits of Android Development</p>
        <ul>
           <li>High ROI with Lower Costs. One of the key advantages of Android app development is the easy availability of the Android SDK. ...</li>
          <li>Faster Deployment. ...</li>
          <li>Target Multiple Platforms. ...</li>
          <li>Versatility and Scalability. ...</li>
          <li>Enhanced Security. ...</li>
          <li>Customization.</li>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="njs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">NodeJS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/njsm.png" width="200px" style="margin-left: 30%;">
        <p class="h6 enumurate px-5">Node. js is primarily used for non-blocking, event-driven servers, due to its single-threaded nature. It's used for traditional web sites and back-end API services, but was designed with real-time, push-based architectures in mind.</p>
        <p class="h6 px-3">Benefits of NodeJs</p>
        <ul>
            <li>Efficient performance.</li>
            <li>Easier development process.</li>
            <li>Reusable code.</li>
            <li>Ability to handle multiple requests.</li>
            <li>Ability to scale smoothly.</li>
            <li>Prompt code execution.</li>
            <li>Asynchronous and event-driven.</li>
            <li>Supported by leading companies.</li>
          </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="wt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-dark" id="exampleModalLabel">WebTechnologies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/wtm.png" width="250px" style="margin-left: 20%;">
        <p class="h6 enumurate px-5">Web Technology refers to the various tools and techniques that are utilized in the process of communication between different types of devices over the internet. A web browser is used to access web pages. Web browsers can be defined as programs that display text, data, pictures, animation, and video on the Internet.</p>
        <p class="h6 px-3">Benefits of WebTechnologies</p>
        <ul>
          <li>Cross platform compatibility : Most web based applications are far more compatible across platforms than traditional installed software. ...</li>
          <li>More manageable : ...</li>
          <li>Highly deployable : ...</li>
          <li>Secure live data : ...</li>
          <li>Reduced costs :</li>
        
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-5" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- courses -->


<div class="row"  ID="pricing" style="margin-top: 50px;">
  <div class="col">
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Java</div>
Learn full Basics in 60 days
    </div>
    <span class="badge bg-success rounded-pill"> Rs 1999</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">WT</div>
      Learn full Basics in 90 days 
    </div>
    <span class="badge bg-success rounded-pill">Rs 2499</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Python</div>
     Full Course in 90 days 
    </div>
    <span class="badge bg-success rounded-pill">Rs 2999</span>
  </li>
</ol></div>
  <div class="col">
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">PHP</div>
     Scratch to advance  in 100 days
    </div>
    <span class="badge bg-success rounded-pill">Rs 2599</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">NODE JS</div>
  Full node js in 60 Days 
    </div>
    <span class="badge bg-success rounded-pill"> Rs 4999</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Data Science</div>
Data science for Biginners 
    </div>
    <span class="badge bg-success rounded-pill">Rs 2999</span>
  </li>
</ol></div>
</div>
<br><br><br>

<!-- courses -->


<!-- rating -->


<br><br>

<div class="row">

  <div class="col-4">
  <div class="card">
    <img src="images/rating1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title "> Vasu</h5>
      <p class="card-text">This is vasu from Mech background and this Easy Learn helps alot  .This is best platfrom .SIMPLY GOOD</p>
      <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill "></i>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div></div>
  <div class="col-4">
  <div class="card">
    <img src="images/rating2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title ">Srinu</h5>
      <p class="card-text">GOOD platfrom to learn and achive a job to me</p>
      <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi text-warning bi-star-fill"></i><i class="bi  text-warning bi-star-half"></i>
      
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div></div>
  <div class="col-4">
  <div class="card">
 
    <img src="images/rating3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title "> vk</h5>
      <p class="card-text">Best one I ever seen like platfrom  e .. Good aproch . well behaviour </p>
     <i class="bi bi-star-fill text-warning"></i><i class="bi text-warning bi-star-fill"></i><i class="bi  text-warning bi-star-fill"></i><i class="bi text-warning bi-star-half"></i>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>  </div>
</div></div>


<br><br>
<div class="container" style="background-color: rgb(215, 90, 48);">
  <h1 class=" display1 text-center" style="color: rgb(236, 217, 217);padding-top: 30px;"> Live Sale</h1>
 <p class="p text-center"> Come on Hurry up LIVE Sale is ends soon </p>
 <p class="display-2 text-center">OFF upto 50% on each course</p>
 <center><a class=" btn btn-dark " style="margin-bottom:10px ;" >Order Now</a><br></center>

</div>

  <br><br>




  <div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Teachers List </h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" href="#" class="router-link-active router-link-exact-active nav-link active" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                        </li>
                    </ul>
                </div>
               
                <div class="dropdown">
                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Phyllis Gatlin</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 070 2860 5375</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> PhyllisGatlin@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 52 Ilchester MYBSTER 9WX</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">James Nix</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 046 5685 6969</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> JamesNix@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 5 Boar Lane SELLING 2LG</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Darlene Smith</a></h5>
                            <span class="badge badge-soft-danger mb-0">UI/UX Designer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 012 6587 1236</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> DarleneSmith@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 57 Guildry Street GAMRIE</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="avatar-md">
                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>
                        </div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">William Swift</a></h5>
                            <span class="badge badge-soft-warning mb-0">Backend Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 012 6587 1236</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> WilliamSwift@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 80 South Street MONKW 7BR</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="avatar-md">
                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>
                        </div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Kevin West</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 052 6524 9896</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> KevinWest@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 88 Tadcaster PINCHBECK 6UB</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Tommy Hayes</a></h5>
                            <span class="badge badge-soft-warning mb-0">Backend Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 065 2563 6587</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> TommyHayes@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 5 Boar Lane SELLING 2LG</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Diana Owens</a></h5>
                            <span class="badge badge-soft-danger mb-0">UI/UX Designer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 087 6321 3235</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> DianaOwens@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 52 Ilchester MYBSTER 9WX</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 021 0125 5689</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> DianaOwens@spy.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 80 South Street MONKW 7BR</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0 align-items-center pb-4">
        <div class="col-sm-6">
            <div><p class="mb-sm-0">Showing 1 to 10 of 57 entries</p></div>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-end">
                <ul class="pagination mb-sm-0">
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="images/course1.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">javascript</h5>
       
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/course2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Data Science </h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/course3.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Node JS</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/course4.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">php</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/adm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Android</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/course9.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HTML</h5>
        
      </div>
    </div>
  </div>
</div>










<!-- about -->

  <div class="row bg-dark">
    <div class="col text-light">
<h1 class="display-6" style="padding-top:20%; padding-left: 10%;"> This is vamsi</h>
<p class="h6">Student of cse </p>
Skills<br>
  <p class="h6">Coding and problem Solving , Expect in Python , WT, Data Science </p><br>
  <p class="h6"></p>
    </div>
    
<div class="col">
<img src="images/vamsi.jpeg" class="img-fluid" alt="" >
</div>
  </div>

</div>

</div>

    </div>
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




















<!-- fotter -->


<!-- finial fotter -->

<br><br>

<div class="contianer bg-dark" style="color:gray;">



<!-- Footer -->
<footer class="text-center text-lg-start bg-successs text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
         
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-grayish"></i>Easy Learn
          </h6>
          <p>

          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">JS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">DATA SCIENCE </a>
          </p>
          <p>
            <a href="#!" class="text-reset">PHP</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Node JS</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
  
      
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-grayish"></i>Rgukt Nuzvid</p>
          <p>
            <i class="fas fa-envelope me-3 text-grayish"></i>
        N180017@rguktn.ac.in
    
          </p>
          <p>
            <i class="fas fa-envelope me-3 text-grayish"></i>
      

        N180380@rguktn.ac.in
          </p>
          <p><i class="fas fa-phone me-3 text-grayish"></i> +91 9398562687</p>
          <p><i class="fas fa-print me-3 text-grayish"></i> +91 9381103041</p>
        </div>
     
      </div>
   
    </div>
  </section>


  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" >Easy Learn.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


  
</body>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>







