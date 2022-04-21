<?php $db=mysqli_connect("localhost","root","","validation"); 


?><?php 
session_start();
 if(!isset($_SESSION['name']))
{
	echo '<script>alert("Please login");window.location.href="login.php";</script>';
}
$name=$_SESSION['name'];
// $name = $_POST['name'];

header('Content-type: image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("cer.jpg");
$color=imagecolorallocate($image, 205, 255, 205);
// $date=date('d F, Y');
// imagettftext($image, 18, 0, 880, 188, $color,$font, $date);
// $_POST="name";
imagettftext($image, 75, 0, 618, 725, $color,$font, $name);
// $grade="'A'";
// imagettftext($image, 48, 0, 1032, 1600, $color,$font, $grade);
imagejpeg($image,"certificate/$name.jpg");
imagejpeg($image);
imagedestroy($image);
//session_destroy();

?>