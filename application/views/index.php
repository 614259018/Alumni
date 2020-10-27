<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/styles.css">
         
    <!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('<?php echo base_url(); ?>img/bg03.jpg');">
    <!---<div class="imgBg">
        <img src="<?php echo base_url();?>img/soft.png" alt="">
    </div>--->
    <div class="container">
        <a href="#" class="button" id="button">Login</a>
        <a href="../Alumni/register" class="button" id="button">Register</a>
    </div>

    <div class="popup">
            <div class="popup-content">
                <img class="close" src="<?php echo base_url(); ?>img/error.png" alt="close">
                <img class="profile-icon" src="<?php echo base_url(); ?>img/profileUser1.png" alt="user">
                <form action="../Alumni/Check_Login" method="post">
                <input name="Username" type="text" placeholder="Username">
                <input name="Password" type="password" placeholder="Password">
                <br>
                <center><input class="button-login" type="submit" name="login"  value="Login" /></center>
                </form>
                <br>
                <a href="../Alumni/register" class="button">If you don't Register</a>
            </div>
    </div>

<script src="<?php echo base_url(); ?>js/popup.js"></script>

<!--footer--------------->
<footer>
    <!--heading-->
    <p class="p1">สาขาวิศวกรรมซอฟต์แวร์</p>
    <!--paragraph-->
    <p class="p2">
        เว็บไซต์นี้ สร้างขึ้นมาเพื่อเก็บข้อมูลศิษ์เก่าเเละนักศึกษาปัจจุบัน <br>เพื่อที่จะได้ง่ายต่อการติดต่อเเละดูโปรไฟล์ของศิษย์ SE
    </p>
    <!--social-->
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-line"></i></a>
        <a href="#"><i class="fas fa-phone"></i></a>
    </div>
    <!--copyright-->
    <p class="copyright">ช่องทางติดต่อต่างๆ</p>
</footer>
</body>
</html>