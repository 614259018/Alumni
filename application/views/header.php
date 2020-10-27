<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NPRU Alumni</title>
  <link rel = "stylesheet" type = "text/css" 
     href = "<?php echo base_url(); ?>css/headers.css">
  <!--using FontAwesome-->
  <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
      /*foreach($MA as $row){*/
    ?>
  <nav>
    <ul>
      <li><a class="" href="../Alumni/home"><img class="logo" src="<?php echo base_url(); ?>img/h2.jpg"></a></li>
      <li><a class= "first" href="../Alumni/home">หน้าหลัก</a></li>
      <li><a class="button-nav" href="../Alumni/showPrivate">ข้อมูลสมาชิกศิษย์เก่า</a></li>
      <li><a class="button-nav" href="../Alumni/master">บุคลากรประจำสาขา</a></li>
      <li><a class="button-nav" href="../Alumni/contact">ติดต่อ</a></li>
      <li>
        <div class="dropdown">
          <button class="dropbtn">ข้อมูลส่วนตัว ' <!--<?=$row->Name_LastName;?>-->&nbsp;<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
          <a href="../Alumni/Profile">ดูโปรไฟล์</a>
          <a href="../Alumni/edit">เเก้ไขข้อมูลส่วนตัว</a>
          <a href="../Alumni/logout">ออกจากระบบ</a>
      </div>
      </li>
    </ul>
    <div class="socialh"><li><a href="../Alumni/search"><i class="fas fa-search"></i></a></li></div>
  </nav>
  <div class="img">
    <img src="<?php echo base_url(); ?>img/bg04.jpg">
  </div>
  <?php
    /*}*/
  ?>
</body>
</html>
