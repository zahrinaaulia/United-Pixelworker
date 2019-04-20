<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style type="text/css">

 .btn-default{
      color: red;
      border: 0px;
      width:75px;

    }


/* Style the body */
body {
  font-family: Arial;
  margin: 0;
  transition: background-color .5s;
}

/* Header/Logo Title */

b{
	font-family: aktiv-grotesk,sans-serif;
  /*  font-weight: 500;*/
    font-style: normal;
    color: #2b2d31;
    /*padding: 0 6px;*/
}
.content{
font-family: aktiv-grotesk,sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.85
}

.container{
  background-color: #f5f7f9;
  margin-top: 30px;
  margin-left: 0px;
  margin-right: 0px;
  max-width: 2000px
}
.container1{
 width: 1000px;
 padding-bottom: 10px;
 margin-bottom: 10px; 
 margin-top: 0px;
 padding-top: 5px;
 margin-left: 200px;
}

.container11{
 background-color: white;
 max-width: 700px;
 padding-bottom: 50px;
 margin-bottom: 50px;
 padding-top: 10px 
}
.container12{
 background-color: white;
 max-width: 700px;
 padding-bottom: 50px;
 margin-bottom: 50px; 
}
.container2{
	align-items: right;
	 width: 500px;
 padding-bottom: 10px;
 margin-bottom: 10px; 
 margin-top: 0px;
 padding-top: 5px;
 margin-left: 700px;
 margin-right: 150px;
 background-color: #f5f7f9
}

.container21{
 background-color: white;
 max-width: 700px;
 padding-bottom: 50px;
 margin-bottom: 50px;
 padding-top: 10px 
}

.container22{
	 background-color: white;
 max-width: 700px;
 padding-bottom: 50px;
 margin-bottom: 50px; 
}

#file {
  display: inline-block;
}
#file input[type=file] {
  display:none;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


.sidenav {
  margin-top: 47px;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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

.tempat{
  margin-top: 12px;
  border: 1px groove white;
  width: 300px;

}

/* Page Content */
.content {padding:20px;}


.navbar{
  background-color: white;
}

.has-search .form-control {
  padding-left: 10px;
/*  padding-top: 50px*/
}

.has-search .form-control-feedback {
  position: absolute;
  z-index: 2;
  display: block;
  width: 2.375rem;
  height: 2.375rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #aaa;
}
footer{
	 height: 100px;   
}
</style>



<body>
	<div class="topnav">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2">
          <ul class="nav navbar-nav">
              <li ><span style="color: red; font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span></li> 
              <li><div style="padding-left: 10px; padding-top: 15px" class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div><!-- <img style="width: 50px" height="50px" src="searchlogo.png"> -->
              </li>
          </ul>
        </div>
           <div class="col-lg-8">
          <ul class="nav navbar-nav" style= "margin-left: 500px" >
              <li><img style="margin: center" width="50px" height="55px" src="logo.png"/></li>
          </ul>
      </div>
      <div class="col-lg-2">
          <ul class="nav navbar-nav" style= "margin-left:50px">
              <li  style="text-align: right;"><a style="color: red" href="#"><span style="color: red; padding-right: 5px" class="glyphicon glyphicon-user"></span>Sign In</a></li>
          </ul>
      </div>
      </div>
    </div>
</div>
<div class="topnav" style="background-color: white">
	<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
      	 <ul class="nav navbar-nav">
      	 	<li><a href="#" style="color: red">back to summary</a></li>
	
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a style="color: red; font-family: aktiv-grotesk,sans-serif;">Cotton Breau</a>
  <a href="#">All product</a>
  <a href="#">Submit a Design</a>
  <a href="#">My Account</a>
  <a href="#">Sign Out</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>


<div class="header" style="background-color: #f5f7f9">
	<img src="shipping.png" align="middle" style="margin-left: 300px">
		<div class="container" style=" background-color: #f5f7f9;padding-top: 20px;margin-right: 100px">
	
					<div class="container1">
						<div class="row">
							<div class="col-lg-6">
								<div class="container11" style="background-color: white">
									<div class="header" style="background-color: white"><h3>Shipping information</h3>
									</div>
		
								<form>
									<table style="background-color: white" align="left">
  										<div class="form-row">
    										<div class="form-group col-md-6">
    											<span>Email</span>
      											<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    											</div>
    										<div class="form-group col-md-6">
    	  										<span>country</span>
      											<select id="inputState" class="form-control">
        										<option selected>Choose...</option>
       										 	<option>...</option>
      											</select>
    										</div>
  										</div> 

  										<div class="form-row">
    										<div class="form-group col-md-6">
    											<input type="text" class="form-control" id="inputName" placeholder="Name">
    											</div>
    										<div class="form-group col-md-6">
    											<input type="text" class="form-control" id="inputAddress" placeholder="Address">
    											</div>
  											</div>

  										<div class="form-row">
    										<div class="form-group col-md-6">
      											<input type="text" class="form-control" id="company" placeholder="company">
    											</div>
    										<div class="form-group col-md-6">
      											<input type="text" class="form-control" id="inputadress2" placeholder="Address2">
    											</div>
  										</div>

    									<div class="form-row">
    										<div class="form-group col-md-6">
      											<input type="text" class="form-control" id="phone" placeholder="phone">
    											</div>
    										<div class="form-group col-md-6">
      											<input type="text" class="form-control" id="CIty" placeholder="City">
    											</div>
  										</div>

  	 									<div class="form-row" align="right">
    										<div class="form-group col-md-6" align="right">
    											<div class="form-group col-md-3"><select id="inputState" class="form-control">
        											<option selected>Choose...</option>
        											<option>...</option>
      												</select></div>
      											<div class="form-group col-md-3">
      												<input type="text" class="form-control" id="phone" placeholder="phone"></div>
    												</div>
  										</div> 
  									<button type="submit" class="btn btn-primary">Sign in</button> 

  									</table>
								</form>
							</div>

										<div class="container12" style="background-color: white">
											<div class="header" style="background-color: white"><h3>Payment information</h3>
											</div>
										<form>
											<table style="background-color: white" align="left">
  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<input type="email" class="form-control" id="cardnumber" placeholder="Card number">
    				</div>
    				<div class="form-group col-md-6">
    	  				<input type="email" class="form-control" id="mm/yy/cvc" placeholder="MM/YY/CVC">
    				</div>
  				</div> 
  			</table>
		</form>
		<button type="button" class="btn btn-danger">Place order</button>
	</div>
</div>

<!-- </div>
</div> -->


		<div class="container2" style="background-color: #f5f7f9 " align="right">
			
		<div class="row">
		<div class="col-lg-6">
			<div class="container21">
					<table style="background-color: white" align="right">
  						<tr>
  							<th>Your Order</th>
  						</tr>
  						<tr>
  							<td>Subtotal</td>
  						</tr>
  						<tr>
  							<td>Estimated Shipping & Handing -</td>
  						</tr>
  						<tr>
  							<td>Estimated Tax</td>
  						</tr> 
  						<tr>
  							<td>TOTAL</td>
  						</tr>
  					</table>
  				</div>
		
			

			<div class="container22">
				<table style="background-color: lightgrey" align="right" >
					<tr>
						<th>Help</th>
					</tr>
					<tr>
						<td><a href="#">Return Policy</a></td>
						<td><a href="#">support@cottonbureau.com</a></td>
					</tr>
					<tr>
						<td><a href="#">Shipping info</a></td>
						<td><a href="#">FAQ</a></td>
					</tr>
				</table>
			</div>

			<div class="container23" style="margin-top: 50px">
				<div class="Content">
					<p>Your credit card will be charged immediately, and your order will most likely be shipped April 26–May 7, 2019.<br></p>
					<p>By placing an order you agree to our Terms of Use and Privacy Policy.</p>
				</div>
			</div>

		</div>
		</div>
		</div> 


	</div>
</div>

<footer>
	<div class="row">
        <div class="col-md-12" style="color: grey; padding-top: 30px; font-size: 15px; font-weight: bolder; margin-left: 660px ">
        	<ul class="list-unstyled">
        <li>
          <a href="#1" style="font-weight: lighter;color: black"> Home </a> <a href="#1" style="font-weight: lighter;color: black"> Shop </a> <a href="#1" style="font-weight: lighter;color: black"> About us </a> <a href="#1" style="font-weight: lighter;color: black"> FAQ </a> <a href="#1" style="font-weight: lighter;color: black">Privacy</a> <a href="#1" style="font-weight: lighter;color: black"> Terms </a> <a href="#1" style="font-weight: lighter;color: black"> Contact Us </a>
      </li>
       
         <p style="margin-left: 50px"> © Cotton Bureau. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>