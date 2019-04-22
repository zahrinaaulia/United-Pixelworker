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
                            <li class="col-md-2">
                              <form id="search" style="width: 600px; align:center; padding-top: 10px;">
                                <img src="assets/search.png" style="width: 30px;">
                                <input type="search" name="search" placeholder="search" style="background-color: transparent; border-style: none;">
                              </form>
                            </li>
                            <li class="col-md-8">
                                <a class="nav-link" href="#" style="margin-left: 500px;">
                                  <img src="assets/logo.jpeg" style="width: 40px; align:center;">
                                </a>
                            </li>
                            <li class="nav-item">

                            </li>
                            <li class="col-md-2">
                              <div style="margin-left: 70px; padding-top: 10px;">
                                <?php

                                if ( $this->session->userdata('status')) { ?>
                                    <button  onclick="window.location.href = '<?php echo site_url();?>/login_controller/profilenew'" style="font-size:24px; color: red; border: 0px; background-color: transparent;"> <?= $_SESSION['yourname'] ?> </button>
                                <?php  } else { ?>
                                  <button  onclick= "window.location.href = '<?php echo site_url();?>/login_controller/login_view'" style="font-size:24px; color: red; border: 0px; background-color: transparent;">Sign In <i class="fa fa-user"></i></button>
                                <?php }
                                ?>
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

            <ul class="list-unstyled components">
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
  <h1 style="padding: 150px; text-align:center;">SHIPPING AND PAYMENT</h1>
  <div class="row">
  <form class="col-lg-7">
    <table style="background-color: black;">
      <h3 style="padding-left: 175px;">Shipping Information</h3>
        <div class="form-row">
          <div class="form-group col-md" style="margin-left: 175px;">
            <span>Email</span>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
          <div class="form-group col-md" >
              <span>country</span>
              <select id="inputState" class="form-control">
              <option selected>Choose...</option>
                <option>...</option>
              </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md" style="margin-left: 175px;">
            <span>Name</span>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
            </div>
          <div class="form-group col-md">
              <span>Address</span>
              <input type="text" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md" style="margin-left: 175px;">
            <span>Company</span>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Company(Optional)">
            </div>
          <div class="form-group col-md">
              <span>Address2(Optional)</span>
              <input type="text" class="form-control" placeholder="Address2(Optional)">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md" style="margin-left: 175px;">
            <span>Name</span>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
            </div>
          <div class="form-group col-md">
              <span>Address</span>
              <input type="text" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2.5" style="margin-left: 610px;">
            <span>State/Province</span>
              <input type="text" class="form-control" id="inputEmail4" placeholder="State/Province">
            </div>
          <div class="form-group col-md-2.5">
              <span>Zip/Postal Code</span>
              <input type="text" class="form-control" placeholder="Zip/Postal Code">
          </div>
        </div>
        </table>
        <table>
            <h3 style="padding-left: 175px; padding-top: 100px;">Payment Information</h3>
              <div class="form-row">
                <div class="form-group col-md" style="margin-left: 175px;">
                  <span>Card Number</span>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Card Number">
                  </div>
                <div class="form-group col-md-1" >
                    <span>MM/YY</span>
                    <input type="text" class="form-control" placeholder="MM/YY">
                </div>
                <div class="form-group col-md-1" >
                  <span>CVC</span>
                  <input type="text" class="form-control" placeholder="CVC">
              </div>
              </div>

        </table>
        </form>
        <div style=" width: 600px;">
          <h3 style="padding-left: 50px;">Your Order</h3>
          <div class="form-row">
          <h5 style="padding-left: 50px; padding-top: 50px;"> Subtotal </h5>
          <h5 style="padding-left: 350px; padding-top: 50px;">$29.00</h5>
          </div>
          <div class="form-row">
          <h5 style="padding-left: 50px;">Estimated Shipping & Handling</h5>
          <h5 style="padding-left: 145px;">-</h5>
          </div>
          <div class="form-row">
          <h5 style="padding-left: 50px;">Estimated Tax</h5>
          <h5 style="padding-left: 305px;">-</h5>
          </div>
          <div class="form-row">
          <h3 style="padding-left: 50px; padding-top: 50px;"> Total </h3>
          <h5 style="padding-left: 368px; padding-top: 50px;">$29.00</h5>
          </div>
          <h3 style="padding-left: 50px; padding-top: 100px;">Help</h3>
          <div class="form-row">
          <h5 style="padding-left: 50px; padding-top: 50px;" > Return Policy </h5>
          <h6 style="padding-left: 200px; padding-top: 50px;">support@cottonbureau.com</h6>
          </div>
          <div class="form-row">
            <h5 style="padding-left: 50px;"> Shipping Info </h5>
            <h5 style="padding-left: 300px;">FAQ</h5>
            </div>
          <h6 style="padding-left: 50px; padding-top: 50px;"> Your credit card will be changed immediately, and your order will most likely be shipped.</h6>
          <h6 style="padding-left: 50px">By placing an order you agree to our Terms of Use and Privacy Policy.</h6>
        </div>
</div>
<button style="margin-left:175px;" type="button" class="btn btn-danger">Place order</button>

<div class="form-row" style="padding-left: 800px; padding-top: 300px;">
<h8 style="padding-right: 20px;">Home</h8>
<h8 style="padding-right: 20px;">Shop</h8>
<h8 style="padding-right: 20px;">About Us</h8>
<h8 style="padding-right: 20px;">FAQ</h8>
<h8 style="padding-right: 20px;">Privacy</h8>
<h8 style="padding-right: 20px;" >Terms</h8>
<h8 style="padding-right: 20px;">Contact Us</h8>
</div>
<h8 style="padding-left: 900px; padding-top: 350px; padding-bottom: 100px;">Cotton Bureau. All rights reserved.</h8>
</body>
</html>
