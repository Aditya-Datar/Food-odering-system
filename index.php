<?php
session_start();
?>

<html>

  <head>
    <title> Home | DoorDash </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/nav.css">
  <style>
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
      color: #824bb9;
    }
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
      color: #fff;
    background-color: #824bb9;
    }
    .navbar-inverse .navbar-nav>li>a{
      color: #824bb9;
    }
    .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover{
      color: #fff;
    background-color: #824bb9;
    transition:0.5s;
    }
    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
      background-color: #824bb9;
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
      color: #824bb9;
    text-decoration: none;
    background-color: white;
    transition:0.5s;
    }
    .orderblock{
      border: 2px solid #824bb9;
      margin-bottom: 30px;
      background-color: #f0eafb;
      
    }
    .btn-success{
      background-color: #824bb9;
    border-color: #824bb9;
}
.btn-success:hover{
  background-color:#824bb9f0;border-color: #824bb9f0;
}
.wide{
  width: 100%;
    height: 100%;
    height: calc(100%-25px);
    background-image: url('https://wallpaperaccess.com/full/826922.jpg');
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
    background-color: #824bb9;
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
  </style>
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
          <a class="navbar-brand" href="index.php">DoorDash</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li style = "margin-left:50px;" class="active" ><a href="index.php">Home</a></li>
            <li style = "margin-left:25px;"><a href="aboutus.php">About</a></li>
            <!-- <li><a href="contactus.php">Contact Us</a></li> -->

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="restaurantList.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]);
              echo "$count";
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li style = "margin: 10px 0;"> <a href="customersignup.php"> User Sign-up</a></li>
              <li style = "margin: 10px 0;"> <a href="managersignup.php"> Manager Sign-up</a></li>

            </ul>
            </li>

            <li><a style = "margin-left:25px;" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu give-margin">
              <li style = "margin: 10px 0;"> <a href="customerlogin.php"> User Login</a></li>
              <li style = "margin: 10px 0;" > <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"> <a href="restaurantList.php"> <img src="images/logo2.jpg"> </a> </div>
        <!-- <div class="col-xs-2 logo">     <a href="restaurantList.php" <img src="images/logo2.jpg"></a></div> -->
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Order From Us</div>
    </div>
    <br>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
      <img src="images/home.jpg" alt="" srcset="" height=160px width=50%>
    <!-- <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center> -->
    </div>

    <div class="col-xs-12 line"><hr></div>



        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

  <!-- <footer class="container-fluid bg-4 text-center">
  <br>
  <p> DoorDash 2021  </p>
  <p> Creator: DBMS TEAM 7 </p>
  <br>
  </footer> -->
</html>