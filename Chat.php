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
<title>Acceuil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Page1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="accSet.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="Mypost.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Posts"><i class="fa fa-calendar-check-o"></i></a>
  <a href="Cov.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Covoiturage"><i class="fa fa-automobile"></i></a>
  <a href="Col.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Colocation"><i class="fa fa-university"></i></a>
  <a href="Chat.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Let's Chat"><i class="fa fa-envelope-open-o"></i></a>
  <a href="deco.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Deconnect"><i class="fa fa-sign-out"></i></a>  <div class="w3-dropdown-hover w3-hide-small">
  </div>
  <a href="https://polytecsousse.tn/" class="w3-bar-item w3-button w3-right" title="Site Web Poly">
    <img src="poly-logo1.png"  style="height:35px;width:120px" >
    <img src="logo_eurace.png"  style="height:35px;width:100px" >
  </a>
 </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
 
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo"$row[1] $row[2]"; ?></h4>
         <p class="w3-center"><img src="avatar1.png"  class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo"$row[4] "; ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo"$row[5] "; ?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo"$row[3] Years"; ?></p>
        </div>
      </div>
      <br>
      <?php } ?>
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Welcome to Covoiturage/Colocation Pour les polytechniciens...</p>
      </div>
    
 
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Posts</button>
          <div id="Demo1" class="w3-hide w3-container">
          <a href="Mypost.php"><p> See All My Posts...</p></a>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-paperclip fa-fw w3-margin-right"></i>Type</button>
          <div id="Demo2" class="w3-hide w3-container">
            <a href="Cov.php"><p align="center">Covoiturage</p></a>
            <a href="Col.php"><p align="center">Colocation</p></a>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Chat</button>
          <div id="Demo3" class="w3-hide w3-container">
          <a href="Chat.php"><p> Let's Chat...</p></a>
          </div>
      
        </div>      
      </div>
      <br>
</div>


      <div class="w3-col m7" >
    <form action='' method='POST'>
      <div class="w3-row-padding" >
        <div class="w3-col m12" >
          <div class="w3-card w3-round w3-white" >
            <div class="w3-container w3-padding" style="background-color: LightGray" >
              <h2 align="center"><p style="color: DarkRed ;font-size:140%;text-decoration: underline; font-family: Comic Sans MS, cursive, sans-serif "><b>CHAT GROUPS:</b></p></h2><br>
              
              <?php
                include("configPro.php");
            $res=mysqli_query($c,"select * from chat,chatuser where chatuser.iduser='$id' and chatuser.idchat=chat.idchat");
            while($l=mysqli_fetch_array($res)){
            echo"
            <p style='color:Teal;font-size:160%;text-decoration: underline;text-transform: uppercase'> <a href='Message.php?x=$l[0]'><i class='fa fa-users fa-fw w3-margin-right'>&#160&#160&#160".$l['libellechat']."</i></p></a>";
                    }
                    ?>
                    <a href="ajouter.php" style="color:Green"> Ajouter un groupe de chat</a><br /><br /><br />
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
<!-- Footer -->
<footer class="w3-container w3-theme-d5 w3-padding-16">
  <p>Projet Web: Covoiturage et Colocation Polytechniciens</p>
</footer>


<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 











