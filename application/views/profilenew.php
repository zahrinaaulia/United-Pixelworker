<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <script src="<?php echo base_url()?>assets/js/bootstrap.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


  <style>

    .btn-default{
      color: red;
      border: 0px;
      width:50px;
      height: 50px;

    }

    .navbar-default{
      background: white;

    }

    #nav-id{
      font-color: red;
    }


#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: black;
    color: #fff;
    transition: all 0.3s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
}

#sidebar.active {
    left: 0;
}

#dismiss {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: black;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

#dismiss:hover {
    background: #fff;
    color: #7386D5;
}

.overlay {
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    opacity: 0;
    transition: all 0.5s ease-in-out;
}
.overlay.active {
    display: block;
    opacity: 1;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: black;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: black;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: black;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: black;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #000 !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

.nav-link{
  margin-left: 20px;
  float: left;
}

.container_3{

  width: 1600px;
  margin-left: 20px;


}
.active{
  background-color: black:
}


.container{
 width: 300px;
 height: 2100px;
 border-right: 1px solid rgb(247, 243, 243);
 border-right-width: 0px 500px;
 background-color:rgb(247, 244, 244);

}

.container1{
    margin-left: 50px;
    margin-right: 10px;
}

.container2{
  margin-top: 100px;
  margin-right: 10px;

}

#navbar-id {
  background-color: red;
  height: 500px;
}

#search {
    margin-top: 30px;
  width: 30px;
  height: 30px;
}

.container0 {
  background-color: white;
  width: 250px;
  height: 50px;
}
#nav4 {
  font-size: 15px;
  padding-left: 20px;
  padding-top: 15px;
}
.container4 {
  padding-left: 0px;
  padding-top: 0px;
  margin-top: 10px;
  background-color: rgb(241, 240, 240);
  border: 1px solid rgb(250, 247, 247) ;
  width: 250px;
  height: 200px;
}
.container5 {
  border-bottom: 1px solid gainsboro;
  padding-left: 20px;
  padding-top: 15px;
  width: 250px;
  height: 50px;
  margin-right: 50px;
}

.container6 {
  padding-left: 20px;
  padding-top: 15px;
  margin-top: 10px;
  background-color: rgb(241, 240, 240);
  border: 1px solid rgb(250, 247, 247) ;
  width: 250px;
  height: 100px;
}

#img {
  margin-left: 110px;
  margin-right: 150px;
}

#img1 {
  margin-top: 110px;


  margin-bottom: 20px;
}

.col-lg-2 {
  margin-right: 25px;
}

h6 {
  margin-right: 150px;
  margin-left: 200px;
  width: 5000;
  height: 20px;
}

.container7 {
  border-bottom: 1px solid gainsboro;
  margin-top: 0px;
  width: 250px;
  margin-left: 110px;
}

#navbar-id {
  background-color: red;
  height: 500px;
}

#img2 {
  margin-top: 40px;
  margin-bottom: 20px;
}


footer{
    background: #2b2d31;
    height: 700px;

  }

.container8{
  padding-top: 100px;
  padding-bottom: 50px;

}

h3{
    font-family: canada-type-gibson,Avenir Next,Avenir,sans-serif;
    font-weight: 500px;
    font-style: normal;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-size: 15px;
    color: rgb(255, 255, 255);
    line-height: 1.3;
    text-align: center;
  }

  .email_input{
  width: 250px;
  height: 50px;
  border: 0px;
  background: transparent;
  color: white;
  font-weight: bold;
}

.tempat{
  margin-top: 0px;
  border: 1px groove white;
  width: 300px;
}

.col-lg-5 {
  height: 5%;
  width: 400px;
  margin-left: 400px;
}

.container_1{
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 50px;
  padding-top: 20px;
  padding-left: 10px;
  padding-right: 10px;
  border :0px;


}
li{
  line-height: 2.1;
  font-size: 15px;
  color: white;
  font-weight: lighter;

}

h4,h5{
  padding-top: 20px;
  color: white;
  padding-bottom: 20px;
  font-size: 15px;
  border-top: 1px solid grey;
  font-weight: bold;

}

.btn1 {
  position: absolute;
  width: 250px;
  height: 300px;
  margin-top: 30px;
  margin-left: 105px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn2 {
  position: absolute;
  width: 250px;
  height: 300px;
  margin-left: 105px;
  top: 49%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;

}

#nav1 {
  padding-left: 50px;
  font-size: 25px;
}

#nav2 {
 padding-left: 50px;
 font-size: 15px;
}

#nav3 {
 padding-left: 50px;
 font-size: 15px;
}

#pr {
 padding-top: 100px;
 padding-bottom: 10px;
 padding-left: 100px;
 font-size: 50px;
 }
#hr1 {
 margin-left: 25px;
 width: 200px

}

#hr2 {
 margin-left: 25px;
 width: 200px
}

#hrpr {
 width: 1100px;
 margin-left: 375px;
}

#name1 {
 padding-left: 50px;
 padding-top: 50px;
 padding-bottom: 0px;
 font-size: 15px;
}

#text {
 padding-bottom: 0px;
 padding-left: 50px;
 font-size: 15px;

}


#input {
 margin-left: 50px;
 width: 500px;
 height: 40px;
 padding-bottom: 0px;
}

.container2{
  margin-top: 100px;
  margin-right: 10px;

}

.container_3{
    margin-left: 50px;
    margin-right: 10px;
}

.container_4{
 width: 300px;
 height: 1000px;
 border-right: 1px solid gainsboro;
 border-right-width: 0px 500px;
 padding-top: 200px;
 padding-right: 100px;
 margin-left: 5px;
}

.flex-container>div {
 background-color: #f1f1f1;
 color: white;
 width: 500px;
 height: 500px;
 margin-top: 100px;
}

#flex {
  padding-top: 50px;
  font-size: 15px;
 color: black;
 padding-left: 50px;
 }

#tulisan {
 font-size: 15px;
 color: grey;
 padding-left: 50px;
}

#input1 {
 margin-left: 50px;
 padding-bottom: 60px;
 width: 400px;
 height: 100px;
 color: black;
}



  </style>
</head>
<body>


  <div class="overlay fixed-top"></div>

            <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>

                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="row" >
                      <div class="container_3">
                          <ul class="nav navbar-nav">
                            <li class="col-md-2" >
                              <form id="search" style="width: 600px; align:center; padding-top: 10px;">
                                <img src="<?php echo base_url();?>assets/search.png " style="width: 30px;">
                                <input type="search" name="search" placeholder="search" style="background-color: transparent; border-style: none;">
                              </form>
                            </li>
                            <li class="col-md-8">
<<<<<<< HEAD
                                <a class="nav-link" href="<?php echo site_url();?>/login_controller/home" style="margin-left: 500px;">
                                  <img src=" <?php echo base_url('assets/logo.jpeg') ?> " style="width: 40px; align:center;">
=======
                                <a class="nav-link" href="#" style="margin-left: 500px;">
                                  <img src="<?php echo base_url();?>assets/search.png" style="width: 40px; align:center;">
>>>>>>> a1249943c80fbb15efc32d20a11129e13b65618e
                                </a>
                            </li>
                            <li class="nav-item">

                            </li>
                            <li class="col-md-2">
                              <div style="margin-left: 70px; padding-top: 10px;">
                                <a href="<?php echo site_url();?>/login_controller/index"><button style="font-size:24px; color: red; border: 0px; background-color: transparent;">Sign In <i class="fa fa-user"></i></button></a>
                                 <button style="font-size:24px; color: red; border: 0px; background-color: transparent;"><i class="fa fa-shopping-cart"></i></button>
                              </div>

                            </li>
                        </ul>
                      </div>

                    </div>
                    </div>

            </nav>
</div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" >
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components"  >
              <div style="border-top: 5px solid grey;">
                <p style="font-size: 20px; color: red;">Cotton Bureau</p>
                <li class="active" style="background-color: black;">   <p>SHOP</p>
                    <a href='#'>All Product </a>
                    <a href="#"> Blank</a>
                    <a href="#"> Search </a>
                </li>
              </div>
              <div style="border-top: 5px solid grey;">
                <li class="active" style="background-color: black;">
                  <p>SELL</p>
                    <a href="#">Submit a Design</a>
                    <a href="#">How it works</a>
                    <a href="#">Cotton Bureau Plus</a>
                    <a href="#">FAQ</a>
                </li>
              </div>
              <div style="border-top: 5px solid grey;">
                <li class="active" style="background-color: black;">
                  <a href="#">Sign In</a>

                </li>
              </div>




            </ul>

            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>

</div>


<div>
<div class="row">
    <div class="col-lg-2">
    <div class="container_4">

           <div> <h2 id="nav1" href="#">Ananda Miarta</h2></div>
           <hr id="hr1">
           <b id="nav2" href="#" class="btn btn-lg"> Product </b>
           <br>
           <b id="nav2" href="#" class="btn btn-lg"> Profile </b>
           <br>
           <b id="nav2" href="#" class="btn btn-lg"> Order </b>
           <br>
           <hr id="hr2">
           <b id="nav3" href="#" class="btn btn-lg"> Submit a Design </b>
           <br>
           <b id="nav3" href="#" class="btn btn-lg"> Sign Out </b>

    </div>

</div>
  <div>
        <h2 id="pr"> Profile </h2>
    <div class="container1">
            <div>
             <h2 id="name1"> YOUR NAME </h2>
             <input id="input" type="text" name="name" placeholder="Senor Cotton">
            </div>

            <div>
             <h2 id="text"> EMAIL </h2>
             <input id="input" type="text" name="email" placeholder="you@yourname.com">
            </div>

            <div>
             <h2 id="text"> PASSWORD </h2>
             <input id="input" type="password" name="password" placeholder="" required>
             <!-- <h5 id="text"> We recommend at least 8 characters long, avoiding patterns and common words/phrases. See Google's creating a strong password guide for more help. </h5> -->
            </div>

            <div>
             <h2 id="text"> TWITTER </h2>
             <input id="input" type="text" name="twitter" placeholder="@cottonbureau">
            </div>

            <div>
             <h2 id="text"> INSTAGRAM </h2>
             <input id="input" type="text" name="instagram" placeholder="@cottonbureau">
            </div>

            <div>
             <h2 id="text"> WEBSITE </h2>
             <input id="input" type="text" name="website" placeholder="https://cottonbureau.com">
            </div>

            <div>
             <h2 id="text"> LOCATION </h2>
             <input id="input" type="text" name="location" placeholder="Pittsburgh, PA">
            </div>
          </div>
          <hr id="hrbtn" style="margin-left: 1%;">
           <button type="Submit" class="btn btn-danger" id="btn1" style="background-color: red; color: white; margin-left: 15%;">Update Profile</button>
        </div>

<div class="col-lg-4">
        <div class="container2">
          <div class="flex-container" style='padding-top: 50px;'>
  <!-- <script>
                       function myFunction() {
                         var x = document.getElementById("myFile");
                         x.disabled = true;
                      }
                      </script> -->
                      <div style="height: 700px;">
                        <img src="<?php echo base_url('assets/2.JPG') ?>" class="rounded-circle" alt="Cinque Terre" width="304" height="236" style='margin-top: 20px; margin-left: 100px;'>
                       <h2 id="flex"> AVATAR </h2>
                       <input type="file"  name="photo" accept=".gif, .jpeg, .jpg, .png, image/gif, image/jpeg, image/png" class="file-input-current" value="Browse" style='padding-left: 50px;'>

                      <h5 id="tulisan"> 400px or larger, 5mb max, JPG/PNG/GIF. It will be cropped to a circle when being displayed, so plan accordingly (see above preview). Squares work best. </h5>
                      <h2 style="font-size: 15px; padding-left: 50px; color: black"> BIO </h2>
                      <input id="input1" type="text" name="bio" placeholder="Go ahead, say something nice about yourself.">
                      <h3 style="color: grey; font-size: 10px; padding-left: 50px"> 140 characters or fewer, please. </h3>
                     </div>
                    </div>
                  </div>
                  </div>
                  </div>
</div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>

<footer>
  <div class="container8">
    <div class="row">
      <div class="col-lg-5">
          <h3> SIGN UP OUR NEWSLETTER, GET 10% OFF YOUR NEXT ORDER </h3>
      </div>
      <div class="col-lg-4">
        <div class="tempat">
          <input type="text" name="email" placeholder="  discount@me.com" class="email_input">
          <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
        </div>

      </div>
  </div>
</div>

<div class="container_1">
  <div class="row">
    <div class="col-md-2">
      <h4 class="font-weight-bold text-uppercase mt-3 mb-4">Shop</h4>

      <ul class="list-unstyled">
        <li>
          <a href="#!" style="color: white; font-weight: lighter; "> All Product</a>
        </li>
        <li>
          <a href="#!" style="color: white; font-weight: lighter; ">Tags</a>
        </li>
        <li>
          <a href="#!" style="color: white; font-weight: lighter; ">Blank by CB</a>
        </li>
        <li>
          <a href="#!" style="color: white; font-weight: lighter;">Help</a>
        </li>
      </ul>
    </div>

    <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Sell</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">How it works</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">Submit a Design</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">Cotton Bureau Plus</a>
        </li>
      </ul>
    </div>

   <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Company</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">About Us</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Jobs</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">CB Newsletter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Business Casual Blog</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Privacy Policy</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Terms of Service</a>
        </li>
      </ul>
    </div>


   <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Blank</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Shop Blank</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">About Blank </a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Blank Newsletter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Be a Model</a>
        </li>
      </ul>
    </div>


   <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Account</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Sign In</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Create Account</a>
        </li>
      </ul>
    </div>

   <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">us@cottonbureau.com</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Twitter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Facebook</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Instagram</a>
        </li>
        <li>
          <br/>
          <a href="#1" style="color: grey; font-weight: lighter; font-size: 17px; font-style: italic;">Support available 10am-6pm ET Monday through Friday</a>
        </li>

      </ul>
    </div>
    </div>

    <div class="row">
      <div class="col-md-12" style="color: grey; padding-top: 30px; font-size: 15px; font-weight: bolder; " align="center" >
        © Cotton Bureau. All rights reserved.
      </div>
  </div>

</footer>
</html>
