<html>

  <head>
    <title> Guest Signup | Food Heaven </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/nav.css">
  
  <style>
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
      color: #FC8019;
    }
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
      color: #fff;
    background-color: #FC8019;
    }
    .navbar-inverse .navbar-nav>li>a{
      color: #FC8019;
    }
    .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover{
      color: #fff;
    background-color: #FC8019;
    transition:0.5s;
    }
    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
      background-color: #FC8019;
    }
    .navbar-nav>li>.dropdown-menu{
      border-radius: 10px;
      border-radius: 10px;
    margin-right: -25px;
    text-align: center;
    }
    .navbar-inverse{
      background-color: white;
      border-color: white;
    }
    .give-margin{
      margin-right: -30px !important;  
    }
    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
      color: #FC8019;
    text-decoration: none;
    background-color: white;
    transition:0.5s;
    }
    .orderblock{
      border: 2px solid #FC8019;
      margin-bottom: 30px;
    }
    .btn-success{
      background-color: #FC8019;
    border-color: #FC8019;
}
.btn-success:hover{
  background-color:#fc8019f0;border-color: #fc8019f0;
}
.wide{
  width: 100%;
    height: 100%;
    height: calc(100%-25px);
    background-image: url('https://media.istockphoto.com/photos/chinese-food-blank-background-picture-id545286388?k=20&m=545286388&s=612x612&w=0&h=1zAWEuV5W6SoYtErOkWasELFcAWMKgQEBUsNOoH5znc=');
    background-size: cover;
    justify-content: center;
    display: flex;
}
.tagline{
  text-align: center;
    font-size: 30px;
    color: white;
    text-shadow: 0 0 black;
    font-family: inherit;
    transform: translate(-50%, -50%);
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #FC8019;
    padding: 20px;
    border-radius: 25px;
    display:none;
}
.line{
  display:none;
  text-align:center;
}
.logo{
top:35%
}
.jumbotron .h1, .jumbotron h1{
  font-size: 45px;
}
.container .jumbotron, .container-fluid .jumbotron{
  padding-left: 15px;
}
.edit{
  color: #FC8019;text-shadow: 2px 2px 5px white;
}
.panel-primary>.panel-heading{
  background-color: #FC8019;
    border-color: #FC8019;
    text-align: center;
}
.container .jumbotron, .container-fluid .jumbotron{
  background-color: white;
}
.panel-primary{
  
  border-color: #FC8019;
}
.input-group{
  display: block;
}
.form-group{
  margin-top: 10px;
}
.my-btn{
  background-color: #FC8019 !important;
    border-color: #FC8019 !important;
}
.jumbotron{
  padding-top: 20px;
    padding-bottom: 15px;
}
.container .jumbotron, .container-fluid .jumbotron{
  padding-right: 15px;
}
.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child>.btn-group:not(:first-child)>.btn, .input-group-btn:first-child>.btn:not(:first-child), .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group>.btn, .input-group-btn:last-child>.dropdown-toggle{
  
  border-radius: 5px;

}
  </style>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Food Heaven</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php" style = "margin-left:50px;">Home</a></li>
            <li><a href="aboutus.php" style = "margin-left:25px;">About</a></li>
            <!-- <li><a href="contactus.php">Contact Us</a></li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                <li style = "margin: 10px 0;"> <a href="customersignup.php"> User Sign-up</a></li>
              <li style = "margin: 10px 0;"> <a href="managersignup.php"> Manager Sign-up</a></li>
      
            </ul>
            </li>

            <li><a href="#" style = "margin-left:25px;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li style = "margin: 10px 0;"> <a href="customerlogin.php"> User Login</a></li>
              <li style = "margin: 10px 0;" > <a href="managerlogin.php"> Manager Login</a></li>
   
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container" style="text-align: center;">
    <div class="jumbotron">
    <h1>Hi Guest, Welcome to <span class="edit"> FoodHeaven </span></h1>
   <h3>Please Login to continue.</h3>
    </div>
    </div>



    <div class="container" style="margin-bottom: 2%;display: flex;
    justify-content: center;    margin-top: -30px;">
      <div class="col-md-5">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="customer_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span> -->
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username(min 4 characters)" minlength=4 required="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span> -->
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
            </span> -->
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact(10 digits)" pattern="^\d{10}$" required="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
            </span> -->
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
            </span> -->
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password(min 8 characters)" minlength=8 required="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span> -->
              
            </div>           
          </div>
        </div>

        
        <div class="row" style = "display: flex;justify-content: center;">
          <div class="form-group col-xs-4" style="text-align: center;">
              <button class="btn btn-primary my-btn" name="submit" type="submit" value=" Login ">Submit</button>
          </div>

        </div>
        <div class="text-center">

          <label style="margin-left: 5px;">or</label> <br>
          <label style="margin-left: 5px;">Have an account? <a href="customerlogin.php" style="color: #FC8019;">Login.</a></label>
        </div>
       

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </body>

  <!-- <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Food Heaven 2021</p>
  <br>
  </footer> -->
</html>