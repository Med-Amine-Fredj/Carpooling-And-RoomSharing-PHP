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
  <a href="Col.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Colocation"><i class="fa fa-university"></i></a>
  <a href="Chat.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Let's Chat"><i class="fa fa-envelope-open-o"></i></a>
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



    <!-- End Left Column -->
    </div>

    <!-- Write Post -->
    <div class="w3-col m7" >
    <form action='' method='POST'>
      <div class="w3-row-padding" >
        <div class="w3-col m12" >
          <div class="w3-card w3-round w3-white" >
            <div class="w3-container w3-padding" style="background-color:Gray;">
              <h6 class="w3-opacity">Write here your post... </h6>
              <input type="text"  size="70" class="w3-border w3-padding" name="descr" placeholder="Statut: Descrestion..."><br><br>
              <button type="submit" class="w3-button w3-theme" name="post"><i class="fa fa-pencil"></i>  Post</button>
              &#160&#160&#160&#160&#160
                      <input  class="w3-button w3-theme" type="file"  name="myfile[]" multiple>
              &#160&#160&#160&#160&#160&#160Type :  &#160&#160&#160&#160&#160&#160<input type="radio" name="type" value="Covoiturage"   required> Covoiturage &#160&#160&#160&#160&#160&#160
                      <input type="radio" name="type" value="Colocation" required > Colocation

            </div>
          </div>
        </div>
      </div>
      </form>
     <?php
      if(ISSET($_POST['post']))
         {
          $id=$_SESSION['id'];
          $descr=$_POST['descr'];
          $date=date("Y-m-d h:i:s");
          $type=$_POST['type'];
          $chemin=$_POST['myfile'];
         include("ConfigPro.php");
          $res2=mysqli_query($c,"INSERT INTO post VALUES(NULL,'$id','$descr','$date','$type')");
          $res3=mysqli_query($c,"SELECT max(idpost) FROM post,user where user.id=post.id ");
          while($row1=mysqli_fetch_array($res3))
                  {
                    foreach($chemin AS $v ){

          $res4=mysqli_query($c,"INSERT INTO image VALUES(NULL,'$row1[0]','$v')");
         }}
        }
    ?>
    <!-- Les Postes -->
              <?php 
                include("ConfigPro.php");
                $res5=mysqli_query($c,"SELECT * FROM post,user WHERE post.id=user.id AND post.type='Colocation' ORDER BY DATE DESC");
                while($row2=mysqli_fetch_array($res5))
                {
                  echo"<div class='w3-container w3-card w3-white w3-round w3-margin'><br>
                  <img src='avatar.png' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px'>
                  <span class='w3-right w3-opacity'>$row2[3]</span>
                  <h4>$row2[6] $row2[7]</h4><br>
                  <hr class='w3-clear'>
                  <p style='color:Green;font-size:160%;'>$row2[4]</p>";
                  $res30=mysqli_query($c,"SELECT * FROM post,image WHERE post.idpost=image.idpost ORDER BY DATE DESC");
                  while($row4=mysqli_fetch_array($res30))
                   {
                  if(!empty($row4[7]) AND $row2[0]==$row4[0])
                  {
                    $image = $row4[7];
                    $image_src = "ImageU/".$image;  
                    echo"
                  <img src='$image_src' style='width:100%' class='w3-margin-bottom'>";
                  }
                }
                  echo"
                  <p style='color:DodgerBlue;font-size:100%;text-decoration: underline'> Descreption: </p>
                  <p>$row2[2]</p>
                  <form action='like.php' method='POST'>
                  <input type='hidden' name='l' value='$row2[0]'>
                  <button type='submit'  name='like' class='w3-button w3-theme-d1 w3-margin-bottom'><i class='fa fa-thumbs-up'></i> Like</button> 
                  <button type='button' class='w3-button w3-theme-d2 w3-margin-bottom'><i class='fa fa-comment'></i>  Comment</button>
                  </form>";
                  $res14=mysqli_query($c,"SELECT COUNT(DISTINCT id) FROM like1 WHERE idpost='$row2[0]'");
                  while($row20=mysqli_fetch_array($res14))
                  {
                  echo"<p style='color:Tomato;font-size:100%;text-decoration: underline'>$row20[0] Likes</p>";
                  }
                  echo"<form action='comment.php' method='POST'>
                  <hr class='w3-clear'>
                  <input type='hidden' name='t' value='$row2[0]'>
                  <table style='border: 1px solid #dddddd;text-align: left;padding: 7px;font-family: arial, sans-serif;border-collapse: collapse;'>
                  <tr>
                  <th>
                  <input  type='text'  size='72' class='w3-border w3-padding' name='cmt' placeholder='Write your comment...'>
                  </th>
                  <th>
                  <button name='comment' type='submit' class=' w3-border w3-padding w3-button w3-theme-d2 '><i class='fa fa-mail-reply'></i> SEND</button>
                  </form>
                  </th>
                  </tr>
                  </table>";
                  $res11=mysqli_query($c,"SELECT * FROM comment,post,user WHERE comment.id=user.id AND post.idpost=comment.idpost  ORDER BY DATE DESC ");
                  while($row10=mysqli_fetch_array($res11))
                  {
                  if($row2[0]==$row10[1])
              {
                echo"<tr style='border: 1px solid black;'>
                <table  style='heigth:100%;width:100% ;padding: 150px ; border: 1px solid #dddddd;text-align: left;font-family: arial, sans-serif;border-collapse: collapse;'>
                <th  width='70' style='background-color: #dddddd;border: 0px solid black;width: 70px;text-align: center;'>
                <img align='center' src='avatar2.png' alt='Avatar' class='w3-circle' style='width:50px'>
                <p style='color:blue;font-size:60%;text-align: center;text-decoration: underline;'>$row10[11] $row10[12]</p>
                </th>
                <th width='580' style='background-color: #dddddd;border: 0px solid black;text-align: center;padding: 1px ; width:100%;word-wrap: break-word; overflow: hidden'>
              
                <p style='word-wrap: break-word; overflow: hidden'>$row10[3]</p></th>
                </th>                 
                <th style='background-color: #dddddd;border: 0px solid black;'>
                <p style='font-weight: lighter'>$row10[4]</p></th>
                </th>
                </tr>
                ";
              
              }}
                  echo"</table><br><br></div>";
              }
              
                 ?>  
</div>
        <!-- Right Column -->
        <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div></div></div>
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
