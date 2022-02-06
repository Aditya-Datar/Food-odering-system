    <?php
include('login_u.php'); // Includes Login Script

if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); //Redirecting to myrestaurant Page
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Guest Login | Food Heaven </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/nav.css">
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
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <!-- <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span> -->
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
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
          <label style="margin-left: 5px;">Don't have an account?<a href="customersignup.php" style="color: #FC8019;"> Sign Up</a></label>
        </div>

        </form>
        </div>     
      </div>      
    </div>
    </div>


    </body>

  <!-- <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Food Heaven 2021 </p>
  <br>
  </footer> -->
</html>