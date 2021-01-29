<!DOCTYPE html>
<html>
<head>
<title>TFC</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include 'menu.php'; ?> 
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/r1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/r2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/r3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section class="my-5">
   <div class="py-5"> 
   <h2 class="text-center"> About Us </h2>
   </div>

   <div class="container-fluid">
   <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
      <img src="images/r4.jpg"class="img-fluid aboutimg">
      </div>

      <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4"> Team Future Creator </h2>
      <p class="py-2"> HackDroid is the leading and fastest growing IT company in India. we are offering excellent and affordable service for Website Designing, Domain Registration, Web Hosting, Software Development, School ERP System, Bulk SMS, Mobile Application Development, Data Recovery, Bio Matrix Machine, CCTV System, Computer Sales, AMC, Printer Sales, Cartridge Refilling, Antivirus Sales, Laptop Sales and much more. 
      </p>
      <a href="aboutus.php" class="btn btn-success"> More info </a>
      </div>
    </div>
 </div> 
</section>
<section class="my-5">
    <div class="py-5"> 
      <h2 class="text-center"> Our Gallery </h2>
    </div>
        <div class="container-fluid">
           <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <img src="images/r4.jpg" class="img-fluid pb-4">
           </div>
           </div>
        </div>

</section>
<section class="my-5">
    <div class="py-5"> 
      <h2 class="text-center"> Our Gallery </h2>
    </div>
                <div class="w-50 m-auto"> 
                  <form action="userinfo.php" method="post">
                    <div class="form-group">
                      <lable>username</lable> 
                      <input type="text" name="user" autocomplate="off" class="form-control"> 

                    </div>
                    <div class="form-group">
                      <lable>email Id</lable> 
                      <input type="text" name="email" autocomplate="off" class="form-control"> 

                    </div>
                    <div class="form-group">
                      <lable>Mobile</lable> 
                      <input type="text" name="mobile" autocomplate="off" class="form-control"> 

                    </div>
                    <div class="form-group">
                      <lable>Comments</lable> 
                      <textarea class="form-control" name="comments">

                      </textarea>
                      

                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>



                  </form> 
                </div>

</section>
<footer>
  <h3 class="p-3 bg-dark text-white text-center ">@teamfuturecrater</h3>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>