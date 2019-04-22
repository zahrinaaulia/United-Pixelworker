<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

    body, html{



        background-repeat: no-repeat;
        background-size: cover;

   }

   h2{
    font-family: canada-type-gibson,Avenir Next,Avenir,sans-serif;
    font-weight: 800;
    font-style: normal;
    font-size: 50px;
    padding-bottom: 30px;
    padding-top: 20px;
    margin-bottom: 36px;
    border-bottom: 1px solid #e9e9e9;
    margin-top: 1px;
    text-align: center;
  }

   .form_1{
      border: 5px solid white;
      background-color: white;
      width: 500px;
      height: 800px;
      border-radius: 10px;
      margin-left: 650px;
      margin-top:200px;
      margin-bottom: 100px;
      padding: 30px 30px 36px;
      flex-grow: 0;
      border-radius: 4px;
      box-shadow: 0 6px 12px 0 rgba(0,0,0,.06), 0 14px 35px 0 rgba(0,0,0,.08);

    }

    login{
      position: absolute;
      top: 50%;
      left: 50%;
      width: 250px
      padding : 80px,40px;
      border : 5px solid white;
      margin : 0;
      background-color: #ddd;

    }

    label{

      font-size: 15px;
      font-weight: 500;
      text-transform: none;
      letter-spacing: normal;
      font-style: normal;
      line-height: 1;
      font-weight: bold;

    }

    #input{
      margin-bottom: 30px;
      border-radius: 4px;
      border: 1px solid #BFBFBF;
      height: 60px;
      width: 420px

    }

    .forgot-password{
      font-size: 11px;
      font-weight: 400;
      color: black;
      top: 0;
      right: 0;
      margin-left: 250px;


    }

    .button{
      background: #ff523f;
      margin: 17px auto 0;
      margin-bottom: 15px;
      display: block;
      line-height: 1;
      font-size: 20px;
      padding: 14px 24px 13px;
      border-radius: 200px;
      box-shadow: 0 2px 2px 0 rgba(255,36,12,.18), 0 6px 10px 0 rgba(255,36,12,.18);
      text-align: center;
      text-transform: uppercase;
      letter-spacing: .75px;
      font-weight: 700;
      width: 400px;
      height: 100px;
      font-family: canada-type-gibson,Avenir Next,Avenir,sans-serif;
      font-weight: 800;
      font-style: normal;
      color: white;
      border: 1px solid white ;

    }



  .toggle-link{
    padding-top: 26px;
    text-align: center;
    font-size: 12px;
  }

  a{
    color: #ff523f;
    font-weight: bold;
    text-decoration: none;
  }

  footer{
    background: #2b2d31;
    height: 900px;
    margin-top:0 ;

  }

h3{
    font-family: canada-type-gibson,Avenir Next,Avenir,sans-serif;
    font-weight: 1000;
    font-style: normal;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-size: 20px;
    color: #fff;
    line-height: 1.3;
    padding-left: 30px
  }

.container{
  padding-top: 100px;
  padding-bottom: 50px;

}

.email_input{
  width: 250px;
  height: 50px;
  padding-right: 20px;
  border: 0px;
  background: transparent;
  color: white;
  font-weight: bold;
}

.tempat{
  margin-top: 12px;
  border: 1px groove white;
  width: 300px;

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

h4,h5,h6{
  padding-top: 20px;
  color: white;
  padding-bottom: 20px;
  font-size: 15px;
  border-top: 1px solid grey;
  font-weight: bold;

}



#search input [type=search]{
    position: absolute;
    display: block;
    width: 55px;
    top: 50px;
    right: 20px;
    width: 50px;
    height: 33px;
    margin: 0 0 0 auto;
    box-sizing: border-box;
    padding: 0 10px 0 10px;
    color: black;
    background-color: transparent;
    border: none;
    border-radius: 0px;
    font-size: 12px;
    cursor: pointer;
    -webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ease-in-out;
}

#search input[type=search]:focus {
  width : 255px;
  cursor: auto;

}

.btn1 {
  background-color: white; /* Blue background */
  border: none; /* Remove borders */
  color: red; /* White text */
  padding: 20px 20px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  width: 40px;
  height: 40px;

}


        /*
    Yihaaaaa
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: transparent;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

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

.nav-link{
  margin-left: 20px;
  float: left;
}

.container3{

  width: 1600px;
  margin-left: 20px;


}
.active{
  background-color: black:
}
/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

.kotak{
  height: 150px;
}

.dot{
  width: 50px;
  height: 50px;
  background-color: white;
  border: 1px solid black;
  display: inline-block;
  border-radius: 50%;
  padding-top: 0px;

}





.btntshirt{
  font-size:24px;
  color: black;
  border: 1px solid black;
  background-color: transparent;
  margin-left: 80px;
  margin-top: 50px;
  border-radius: 2px;
  width: 300px;
  height: 50px;

}

.custom-checkbox {
  width: 150px;
  height: 53px;
  border:1px solid #d3d3d3;
  border-radius: 5px;
  color: grey;

}

.custom-checkbox-input {
  display: none;

}

.custom-checkbox-text {
  background-color: white;
  color: grey;
  cursor: pointer;
  user-select: none;
  font-size: 15px;
  padding: 19px 68px 15px;
  border-radius: 5px;

}

.custom-checkbox-input:checked ~ .custom-checkbox-text{

  background-color: red;
  color: white;

}

td{
  border-top:1px solid grey;
  border-bottom:1px solid grey;
  font-size: 15px;
  height: 80px;

}

table{
  margin-top: 40px;
  margin-left: 100px;
  width: 800px;
  height: 400px;


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
                      <div class="container3">
                          <ul class="nav navbar-nav">
                            <li class="col-md-2">
                              <form id="search" style="width: 600px; align:center; padding-top: 10px;">
                                <img src="<?php echo base_url();?>assets/search.png" style="width: 30px;">
                                <input type="search" name="search" placeholder="search" style="background-color: transparent; border-style: none;">
                              </form>
                            </li>
                            <li class="col-md-8">
                                <a class="nav-link" href="<?php echo site_url();?>/login_controller/home" style="margin-left: 500px;">
                                  <img src="<?php echo base_url();?>assets/logo.jpeg" style="width: 40px; align:center;">
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

            <ul class="list-unstyled components"  ">
              <div style="border-top: 1px solid grey;">
                <p style="font-size: 20px; color: red;">Cotton Bureau</p>
                <li class="active" style="background-color: black;">   <p>SHOP</p>
                    <a href='#'>All Product </a>
                    <a href="#"> Blank</a>
                    <a href="#"> Search </a>
                </li>
              </div>
              <div style="border-top: 5px solid grey;">
                <li>
                  <p>SELL</p>
                    <a href="#">Submit a Design</a>
                    <a href="#">How it works</a>
                    <a href="#">Cotton Bureau Plus</a>
                    <a href="#">FAQ</a>
                </li>
              </div>
              <div style="border-top: 5px solid grey;">
                <li>
                  <a href="#">Sign In</a>

                </li>
              </div>




            </ul>


        </nav>

</div>
  <div style="margin-top: 100px;"></div>
  <div class="MainContainer">
    <div class="kotak">
      <div class="row">
        <div class="col-lg-6">
          <p style="margin-top: 40px; margin-left: 80px; font-size: 40px; color: black; font-weight: 700;">Aan Store</p>
        </div>
        <div class="col-lg-6">
          <button class="btntshirt"><i class="fa fa-tshirt"></i> T-Shirt</button>
        </div>
      </div>
    </div>
    <div style="height: auto; padding-bottom:50px; background-color:#F5F5F5;">
      <div class="row">
        <div class="col-md-6">
            <img src="<?php echo base_url();?>img/2.PNG" style="margin-left: 40px; margin-top: 50px;">
        </div>
        <div class="col-md-6">
            <div style="width: 700px; height: 1200px; margin-top: 40px; margin-left: 70px;">
                <p style="margin-left: 40px; padding-top: 40px;"> 01. <span style="color: black;"> FIT </span></p>
                    <button style="width: 550px; height: 70px; font-size: 20px; margin-left: 100px; background-color: white; border:1px solid #d3d3d3;border-radius: 5px;"> UNISEX</button>
                <p style="margin-left: 40px; padding-top: 40px;"> 02. <span style="color: black;"> STYLE </span></p>
                    <button style="width: 550px; height: 100px; font-size: 20px; margin-left: 100px; background-color: white; border:1px solid #d3d3d3;border-radius: 5px;"><i class="fa fa-tshirt" style="float: left; margin-left: 30px; width: 80px; height: 80px;"></i><h1 style="font-size: 20px; float: left; padding-top: 10px; margin-left:10px;">Hoodie</h1><br/>
                          <h1  style="font-size: 15px; float:left; padding-top: 5px; margin-right: 40px; color: grey; ">Next level, we've been used same shirt for years</h1></button>
                <p style="margin-left: 40px; padding-top: 40px;"> 03. <span style="color: black;">MATERIAL AND COLOR </span></p>
                    <button style="width: 150px; height: 150px;  margin-left: 100px; background-color: white; border:1px solid #d3d3d3; border-radius: 5px;"><span class="dot"></span><h1 style="font-size: 15px; padding-top: 5px; color: grey; ">WHITE</h1><h1 style="font-size: 15px; padding-top: 5px; color: grey; "> 100% COTTON </h1></button>
                <p style="margin-left: 40px; padding-top: 40px;"> 04. <span style="color: black;"> SIZE </span></p>
                      <div style="margin-left: 70px; margin-bottom: 10px">
                        <label class="custom-checkbox"align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False"/>
                            <input class="custom-checkbox-input" name="alarm" value="s" type="checkbox">
                            <span class="custom-checkbox-text" >S</span>
                        </label>
                        <label class="custom-checkbox" align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="m" type="checkbox">
                            <span class="custom-checkbox-text">M</span>
                        </label>
                        <label class="custom-checkbox"align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="l" type="checkbox">
                            <span class="custom-checkbox-text">L</span>
                        </label>
                        <label class="custom-checkbox" align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="xl" type="checkbox">
                            <span class="custom-checkbox-text">XL</span>
                        </label>
                      </div>
                      <div style="margin-left: 70px;">
                        <label class="custom-checkbox"align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False"/>
                            <input class="custom-checkbox-input" name="alarm" value="s" type="checkbox">
                            <span class="custom-checkbox-text">2X</span>
                        </label>
                        <label class="custom-checkbox" align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="m" type="checkbox">
                            <span class="custom-checkbox-text">3X</span>
                        </label>
                        <label class="custom-checkbox"align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="l" type="checkbox">
                            <span class="custom-checkbox-text">4X</span>
                        </label>
                        <label class="custom-checkbox" align="center" style="padding-top:20px;">
                            <input type="hidden" name="alarm" value="False" />
                            <input class="custom-checkbox-input" name="alarm" value="xl" type="checkbox">
                            <span class="custom-checkbox-text">5X</span>
                        </label>
                      </div>
                <div class="container-fluid">
                    <p style="margin-left: 10px; margin-top: 80px; color: black; font-size: 90px;font font-weight:lighter; float: left;">$27 </span></p>
                    <input class="button" type="submit" value="ADD TO CHART" style="float:right; margin-top: 110px; ">

                </div>

                </div>
                </div>
            </div>
      </div>
      <div style="background-color:white; margin-top:130px; margin-bottom:100px;">
        <div class="row">
          <div class="col-md-4" style="margin-left:60px;">
            <p style="padding-top:30px; border-top: 1px solid grey; "> Aan Store</p>
            <p style="padding-top:20px;"> aan mempunyai semua koleksi hoodie yang terbaru yang di produksi di bandung dan akan dijual juga di bandung. selain itu aan store juga menjual berbagai t-shirt yang bisa dilihat di @greatindonesia </p>
          </div>
          <div class="col-md-2" style="margin-left:60px;">
            <div class="tags" style=" border-top: 1px solid grey;">
              <p style="padding-top:30px; padding-bottom: 40px;">tags</p>
            </div>
            <div class="share"style=" border-top: 1px solid grey;">
              <p style="padding-top: 10px; padding-bottom: 20px; ">share</p>
              <i class="fab fa-twitter fa-2x" ></i>
              <i class="fab fa-pinterest fa-2x"></i>
              <i class="fab fa-instagram fa-2x"></i>

            </div>
          </div>
          <div class="col-md-4" style="margin-left:60px;">
              <h1 style="padding-top:30px; border-top: 1px solid grey; ">Ananda Miarta</h1>
              <p>Bali</p>
              <i class="fab fa-twitter fa-2x" ></i>
              <i class="fab fa-pinterest fa-2x"></i>
              <i class="fab fa-instagram fa-2x"></i>

          </div>


        </div>

      </div>
      <div style="background-color:white; margin-top:130px; margin-bottom:100px;">
        <div class="row">
          <div class="col-md-6">
            <table style="margin-right:30px;">
              <tr>
                <th style="border-top:1px solid grey; font-weight:lighter;">Sizing</th>
                <th style="border-top:1px solid grey;"></th>
                <th style="border-top:1px solid grey;"></th>
              </tr>
              <tr>
                <td style="padding-right:80px;font-weight:bold;">Inches</td>
                <td style="font-weight:bold;">Chest</td>
                <td style="font-weight:bold;">Length</td>
              </tr>
              <tr>
                <td style="font-weight:bold;">S</td>
                <td>34.5-36</td>
                <td>26-27</td>
              </tr>
              <tr>
                <td style="font-weight:bold;">M</td>
                <td>37-38</td>
                <td>27.50-28.50</td>
              </tr>
              <tr>
                <td style="font-weight:bold;">L</td>
                <td>38.50-41</td>
                <td>29.50-30.50</td>
              </tr>
              <tr>
                <td style="font-weight:bold;">2X</td>
                <td>46-48</td>
                <td>30-31</td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <table style="width: 600px; margin-left:130px;">
              <tr>
                <th style="border-top:1px solid grey; font-weight:lighter;">Details</th>
              </tr>
              <tr>
                <td>Next Level tri-blend men's tee</td>
              </tr>
              <tr>
                <td>SLim,modern-fit,Lightweight,drapey fabric.</td>
              </tr>
              <tr>
                <td>Super-soft 50% polyester,25% cotton,25% rayon,4.3 oz.</td>
              </tr>
              <tr>
                <td> Printed size tag.</td>
              </tr>
              <tr>
                <td>Imported, printed in Bandung,Indonesia </td>
              </tr>
              <tr>
                <td>Graphic digitally printed.</td>
              </tr>
            </table>

          </div>

        </div>
      </div>




  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
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
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Company</h6>

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
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Blank</h6>

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
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Account</h6>

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
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h6>

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

    <div class="row">
        <div class="col-md-12" style="color: grey; padding-top: 30px; font-size: 15px; font-weight: bolder; " align="center" >
          © Cotton Bureau. All rights reserved.
        </div>
    </div>



  </div>
</div>

  </footer>

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
</html>
