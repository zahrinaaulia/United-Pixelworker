<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>


    .btn-default{
      color: red;
      border: 0px;
      width:100px;

    }

    .navbar-default{
      background: white;
      
    }

    #nav-id{
      font-color: red;
    }

    body, html{
        height: 120%;
        background-repeat: no-repeat;
        background-image: url("assets/background.png");
        font-family: sans-serif;
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

   form{
      border: 5px solid white;
      background-color: white;
      width: 500px;
      height: 600px;
      border-radius: 10px;
      margin-left: 650px;
      margin-top:200px;
      margin-bottom: 250px;
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
      width: 320px;
      height: 70px;
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
    text-decoration: underline;
  }

  .footer{
    background: #2b2d31;
    width: 100%;
    height: 50%;

  }



  </style>
</head>
<body>

<nav id="nav-id" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
          <ul class="nav navbar-nav">
              <li ><a  href="#"style="color: red; ">Toggle Bar</a></li>
              <li><a href="#" class="btn btn-default btn-lg"style="color: red;"><span class="glyphicon glyphicon-search"></span></a></li>
          </ul>
      </div>
      <div class="col-lg-4">
          <ul class="nav navbar-nav" style="margin-left: 250px">
              <li><a href="#"style="color: red;"><img src="assets/logo.jpeg" width="50px" height="55px"></a></li>
          </ul>
      </div>
      <div class="col-lg-4">
          <ul class="nav navbar-nav" style="margin-left:320px;">
              <li><a href="#" class="btn btn-default btn-lg"style="color: red;"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
              <li><a href="#" class="btn btn-default btn-lg"style="color: red;"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
      </div>
    </div>
  </div>
</nav>

<form>
  <h2> Sign In </h2>
      <div class="inputdata">
        <label>Email</label>
        <input type="text" id="input" name="username" placeholder="  email@pixelcorp.com" required/>
      </div>
      <div class="inputdata">
        <label>Password</label>
        <a href="#" class="forgot-password">Forgot Password?</a>
        <input type="text" id="input" name="passwod" placeholder="" required/>
      </div>
     
      <input class="button" type="submit" value="Sign in">
      <div class="toggle-link" style="font-size:15px;"> 
        Don't have an account?<a href="#" style="font-size:15px;"> Create one here.</a>
      </div>
</form>

  <footer class="footer">
    <a href="#"> link</a>
    
  </footer>

  


</body>
</html>