<?php 
include("ConfigPro.php");
session_start();
$id=$_SESSION['id'];
$res=mysqli_query($c,"select * from user where id='$id'");
while($row=mysqli_fetch_array($res))
{  
?>


<!DOCTYPE html>
<html>
<title>Account Settings</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-content" style="max-width:1440px">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Page1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="accSet.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="Mypost.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Posts"><i class="fa fa-calendar-check-o"></i></a>
  <a href="Cov.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Covoiturage"><i class="fa fa-automobile"></i></a>
  <a href="Col.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Colocation"><i class="fa fa-university"></i></a>
  <a href="Chat.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Let's Chat"><i class="fa fa-envelope-open-o"></i></a>
  <a href="deco.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Deconnect"><i class="fa fa-sign-out"></i></a>  <div class="w3-dropdown-hover w3-hide-small">
  </div>
  <a href="https://polytecsousse.tn/" class="w3-bar-item w3-button w3-right" title="Site Web Poly">
    <img src="poly-logo1.png"  style="height:35px;width:120px" >
    <img src="logo_eurace.png"  style="height:35px;width:100px" >
  </a>
 </div>
</div>
<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" id="account" >
  <div class="w3-half w3-indigo w3-container w3-center" style="height:730px">
    <div class="w3-padding-64">
      <h1><?php echo"$row[1] $row[2]" ?> </h1><br>
      <img src="avatar.png"  class="w3-circle" style="height:106px;width:106px" alt="Avatar">
    </div>
    <div class="w3-padding-64">
      <p>LOGIN :<?php echo" $row[6]" ?> </p>
      <p>MATRICULE : <?php echo" $row[4]" ?></p>
      <p>AGE : <?php echo" $row[3]" ?></p>
      <p>EMAIL : <?php echo" $row[5]" ?></p>
    </div>
  </div>






  <div class="w3-half w3-blue-grey  w3-container" style="height:730px">
    <div class="w3-padding-64 w3-padding-large">
      <h1>CHANGE</h1>
      <p class="w3-opacity">Change your account details...</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="" target="_blank" method="POST">
        <div class="w3-section">
          <label>LOGIN</label>
          <input class="w3-input" style="width:100%;" type="text"  name="loginm">
        </div>
        <div class="w3-section">
          <label> OLD PASSWORD</label>
          <input class="w3-input" style="width:100%;" type="password" name="mpd" checked>
        </div>
        <div class="w3-section">
          <label>NEW PASSWORD</label>
          <input class="w3-input" style="width:100%;" type="password" name="mdpm">
        </div>
        <div class="w3-section">
          <label>AGE</label>
          <input class="w3-input" style="width:100%;" type="number" name="agem">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right" name="send">Send </button>   
        <button type="submit" class="w3-button w3-teal w3-right">Cancel</button>
      
    </div>
    <button type="submit" class="w3-button w3-teal w3-right" name="back">Back</button>
  <!--
    <?php 
    if(ISSET($_POST['back']))
     {
         header("location:Page1.php");
     }
    ?>
-->
  </div>
</div>
</form>
<?php
if(ISSET($_POST['send']))
{
    $old=$_POST['mpd'];
        if($old!=$row[7])
            {
                echo"<div ><div class='w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small'>
                <span onclick='this.parentElement.style.display='none'' class='w3-button w3-theme-l3 w3-display-topright'>
                  <i class='fa fa-remove'></i>
                </span>
                <p><strong>Hey!</strong></p>
                <p>Password Incorrect ... </p>
              </div>
              </div> ";}else {
    $age=$_POST['agem'];
    $login=$_POST['loginm'];
    $psw=$_POST['mdpm'];
    include("ConfigPro.php");
    $res1=mysqli_query($c,"UPDATE user SET login='$login',age='$age',mdp='$psw' WHERE id='$id'");
    echo"<div class='w3-row'><div class='w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small'>
        <span onclick=this.parentElement.style.display='none'' class='w3-button w3-theme-l3 w3-display-topright'>
          <i class='fa fa-remove'></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Account updated ... </p>
      </div>
      </div> ";
    }
} }
    ?>
<footer class="w3-container w3-theme-d5">
  <p>Projet Web: Covoiturage et Colocation Polytechniciens</p>
</footer>
</body>
</html>
