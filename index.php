<?php  

 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="validation";

 // Create connection
 $conn = new mysqli($servername, $username, $password,$db);
session_start();
 if (isset($_POST['submit'])) {
     // code...
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $_SESSION['name']=$name;
    $sql="INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')";
    if(mysqli_query($conn,$sql)){
      echo '<script>alert("Thank you for your submisssion...Click ok to download your certificate");window.location.href="download.php"</script>';
    exit();

     } else{
         echo "Error:".$sql."".mysqli_error($conn);
    } mysqli_close($conn);

 }
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Participation Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body style=" " >
    <div class="w3-container">
      <center><img src="j.png" style="width:50%;">&nbsp;&nbsp;<img src="i.jpg" style="width:10%;">
<h3>Thank you for your Participation...Submit here Details & Download your Certificate</h3> </center>
    </div>
    <div class="container">
      <form method="post">
        <div class="title">Enter Your Details</div>
            <div class="input-box underline">
             <input type="text" placeholder="  Enter Your Name" style="border-radius: 8px;" title="name" name="name" required>
               <div class="underline"></div>
             </div>
              <div class="input-box">
               <input type="tel" pattern="[6789][0-9]{9}" style="border-radius: 8px;" title="mobile number" name="mobile" placeholder="   Enter your Phone number" required>
              <div class="underline"></div></div>
              <div class="input-box one">
              <input type="email" style="border-radius: 8px;" placeholder=" '  Enter Your email" title="email" name="email" required>
              <div class="underline"></div>
              </div>
             <div class="input-box button">
               <input type="submit" name="submit" value="submit">
             </div>
      </form>
        <!-- <div class="option">or Connect With Social Media</div>
        <div class="twitter">
          <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div> -->
       <!--  <div class="facebook">
          <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div> -->
    </div>
  </body>
</html>

<!--  $servername = "localhost";
 $username = "root";
 $password = "";
 $db="cert";

 // Create connection
 $conn = new mysqli($servername, $username, $password,$db);

 if (isset($_POST['submit'])) {
     // code...
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sql="INSERT INTO log(name,email,mobile) VALUES('$name','$email','$mobile')";
    if(mysqli_query($conn,$sql)){
      echo "thank you for your participation";
         exit;

     } else{
         echo "Error:".$sql."".mysqli_error($conn);
    } mysqli_close($conn);

 }
 -->
