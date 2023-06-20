<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if($username=="admin" && $password == "admin" )
{
  header('location: admin.php');
}

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "ashish"; //name of the database
        //creating a connection :
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

            $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $sql);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                //header('location: userdash.php');
              }
            else {
                echo '<script>alert("Wrong username / password")</script>';
                echo ' <script> window.location.assign("login.php")</script>';
                  }
          $sql1 = "SELECT * from login where username = '$username' ";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_fetch_assoc($result1);
          $conn->close();
?>


<!--From here userdashboard code start -->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
    />
  </head>

  <script>
    function logout()
    {
      window.location.assign("login.php");
    }
  </script>

  <body>
    <div class="desktop-1">
      <div class="top-nav-bar-parent">
        <div class="top-nav-bar">
          <div class="top-nav-bar-child"></div>
          <button onclick ="logout()"  class="logout">
            <div class="logout-child"></div>
            <div class="logout1">Logout</div>
          </button>
          <i class="metrolife">MetroLife</i>
        </div>
        <div class="hello-username" id="user">Hello, <?php echo $rows['username'];?> </div>
      </div>
      <div class="dashboard">Dashboard</div>
      <div class="assets">Assets</div>
      <div class="gold-parent">
        <div class="gold">
          <div class="gold-child"></div>
          <div class="value1" id="goldvalue">
            <span>$ </span>
            <span class="value11"><?php echo $rows['gold'];?></span>
          </div>
          <img class="image-41-icon" alt="" src="./public/image-41@2x.png" />

          <div class="btc">Gold</div>
        </div>
        <div class="oil">
          <div class="gold-child"></div>
          <div class="value1" id="petrolvalue">
            <span>$ </span>
            <span class="value11"><?php echo $rows['petrol'];?></span>
          </div>
          <div class="btc">Oil</div>
          <img class="image-45-icon" alt="" src="./public/image-45@2x.png" />
        </div>
        <div class="farm">
          <div class="gold-child"></div>
          <div class="value3" id="btcvalue">
            <span>$ </span>
            <span class="value11"><?php echo $rows['btc'];?></span>
          </div>
          <div class="btc">BTC</div>
        </div>
        <div class="pharmaceuticals">
          <div class="gold-child"></div>
          <div class="value3" id="wheatvalue">
            <span>$ </span>
            <span class="value11"><?php echo $rows['wheat'];?></span>
          </div>
          <div class="wheat">Wheat</div>
        </div>
        <img
          class="cryptocurrency-icon"
          alt=""
          src="./public/cryptocurrency.svg"
        />
        <img class="group-child" alt="" src="./public/rectangle-2@2x.png" />
      </div>
    </div>
  </body>
  
</html>
