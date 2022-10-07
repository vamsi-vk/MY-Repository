<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Learn</title>

    <!-- css -->
    <style>

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
    <div class="position-fixed " style="width: 100%; z-index: 100;" >
      <img src="images/header.jpg"  class='img-fluid'alt="">
    <nav class="navbar navbar-expand-lg bg-light  ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#Easylearn">EEE</a>
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
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#register" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
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
              <img src="images/main.png" alt="" style="width: 100%; margin-top: 20px;">
            </div>
            <div class="col-4">
              <h1  class="display-1 text-center" style="margin-top: 50%; font-size: 6vw; color: rgb(95,123,205);">EEE</h1>
            <p class="text-center h4" style="margin-top: 2%; font-size: 2vw; color:#937324" >No resistance can drop our potential.</p>
            <p style="text-align: center ;color: black;">Electrical and Electronics Engineering  </p>
           <center> <a style="padding:5px"  class="btn btn-primary btn-sm" href="cmptn/register.html">sign in</a></center>
              
            </div>
            
        </div>
      </div>
      <br><br><br><br>
      <br><bR>

<div class="container">


<div class="row">
  <div class="col-lg-6">

    <div class="container my-5" style="width:500px;">
      <ul class="list-group">
     <li class="list-group-item active" aria-current="true">An active item</li>
    
<?php

$name=$_POST['note'];
$fs=fopen("data/vk.text",'a+');
fwrite($fs,"$name.\n");

fclose($fs);



$file = fopen("data/vk.text", "r");

$file = file("data/vk.text");
$file = array_reverse($file);
foreach($file as $f){
    echo '<a href="#"><li class="list-group-item">'.$f.'</li><a>';
};



 
?>
</ul>


  </div>
</div>
</div>












<!-- 2nd div -->

  <div class="row" id="courses" >
    <div class="col-lg-4">
      <div class="continer" style="padding-top: 40px;">

    
        <p class="display-1 text-primary" style="font-size:50px;  text-align: center;">Come on lets learn in new way </P>
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
      Learn full Basics in 30 days 
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

<!-- about -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
     
<div class="container bg-dark" style="height:50% ;" id="about" >
  <div class="row">
    <div class="col text-light">
<h1 class="display-6" style="padding-top:20%; padding-left: 10%;"> This is vamsi</h>
<p class="h6">Student of cse </p>
Skills<br>
  <p class="h6">Coding and problem Solving , Expect in Python , WT, Data Science </p>Work Experience<br>
  <p class="h6">2 Years worked as a student in RGUKT in Eng Cse Dept</p>
    </div>
    
<div class="col">
<img src="images/vamsi.jpeg" class="img-fluid" alt="" >
</div>
  </div>

</div>

    </div>
    <div class="carousel-item" data-bs-interval="2000">
     
<div class="container bg-dark" style="height:50% ;" id="about" >
  <div class="row">
    <div class="col text-light">
<h1 class="display-6" style="padding-top:20%; padding-left: 10%;"> This is Ajith</h>
<p class="h6">Student of cse </p>
Skills<br>
  <p class="h6">English Comminication,HTML,CSS ,JS,BOOTSTRAP,MYSQL,DATASCIENCE WITH PYTHON,C LANGUAGE</p>Work Experience<br>
  <p class="h6">2 Years worked as a student in RGUKT in Eng Cse Dept</p>
    </div>
    
<div class="col">
<img src="images/IMG_0543.jpg" class="img-fluid" alt="" >
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
<footer class="text-center text-lg-start bg-white text-muted">
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







