<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NPRU Alumni</title>
  <link rel = "stylesheet" type = "text/css" 
     href = "<?php echo base_url(); ?>css/reg.css">
     
  <!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
  <img src="<?php echo base_url(); ?>img/bg04.jpg" alt="">
    <h1 class="title">สมัครสมาชิก</h1>
    <form method="post" action="../Alumni/reg_menu">
      <div class="box1">
      <h1>ข้อมูลส่วนตัว</h1>
        <p>
          รหัสนักศึกษา 
          <div class="input">
            <input name="Std_ID" type="text" maxlength="9"/>
          </div>
        </p><br><br><br><br>
        <p>
          ชื่อ-นามสกุล 
          <div class="input">
            <input name="Name_LastName" type="text" maxlength="100"/>
          </div>
        </p><br><br><br><br>
        <p>
          เลขบัตรประจำตัวประชาชน 
          <div class="input">
            <input name="ID_Card" type="text" id="ID_Card" size="30" maxlength="13"/>
          </div>
        </p><br><br><br><br>
        <p>
          วัน/เดือน/ปีเกิด 
          <div class="input">
            <label for="Date_Of_Birth"></label>
            <input type="date" name="Date_Of_Birth"/>
          </div>
        </p><br><br><br><br><br>
        <p>
          เพศ 
          <div class="sex">
            <input type="radio" name="Sex" value="ชาย"/>
            <label for="radio">ชาย</label>
            <input type="radio" name="Sex" value="หญิง"/>
            <label for="radio2">หญิง</label>
          </div>
        </p><br><br>
        <p>
          ที่อยู่ 
          <div class="input">
            <label for=""></label>
            <label for="textarea2"></label>
            <textarea name="Address"  cols="45" rows="5"></textarea>
          </div>
        </p><br><br><br><br><br><br><br>
        <p>
          เบอร์โทรศัพท์ 
          <div class="input">
            <label for="E-mail"></label>
            <input name="Tel" type="text" maxlength="10"/>
          </div>
        </p><br><br><br><br>
        <p>
          E-mail 
          <div class="input">
            <label for="textarea"></label>
            <label for="E_mail"></label>
            <input name="E_mail" type="text" id="E-mail" size="40" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          Facebook
          <div class="input">
            <label for="textfield"></label>
            <input name="Facebook" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          Instagram
          <div class="input">
            <input name="Instagram" type="text" maxlength="50" id="Instagram"/>
          </div>
        </p>
      </div>

      <div class="box2">
      <h1>ข้อมูลการศึกษา</h1>
        <p>
          ชื่อ - นามสกุลขณะศึกษาอยู่
          <div class="input">
            <input name="Name_LastName" type="text" maxlength="100"/>
          </div>
        </p><br><br><br><br>
        <p>
          ปีที่จบการศึกษา
          <div class="input">
            <label for="End_Year"></label>
            <input type="text" name="End_Year"/>
          </div>
        </p>
      </div>

      <div class="box3">
      <h1>ข้อมูลการทำงาน</h1>
        <p>
          ชื่อบริษัท
          <div class="input">
            <input name="Company_Name" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          ที่อยู่บริษัท
          <div class="input">
            <label for=""></label>
            <label for="textarea2"></label>
            <textarea name="Company_Address"  cols="45" rows="5"></textarea>
          </div>
        </p><br><br><br><br><br><br><br><br>
        <p>
          อาชีพ
          <div class="input">
            <input name="Profession" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          ตำแหน่ง
          <div class="input">
            <input name="Rank" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          เบอร์โทรศัพท์บริษัท
          <div class="input">
            <label for="Company_Tel"></label>
            <input name="Company_Tel" type="text" maxlength="10"/>
          </div>
        </p>
      </div>

      <div class="box4">
      <h1>สมัครสมาชิกเข้าสู่ระบบ</h1>
        <p>
          Username
          <div class="input">
            <input name="Username" type="text" maxlength="50"/>
          </div>
        </p><br><br><br><br>
        <p>
          Password
          <div class="input">
            <input name="Password" type="password" maxlength="50" />
          </div>
        </p><br><br><br><br>
        <p>
          Confirm password
          <div class="input">
            <input name="Re_Password" type="password" maxlength="50" />
          </div>
        </p>
      </div>

      <div class="button">
        <input class="reg" name="submit" type="submit" value="Register" />
        <a href="../Alumni/index" class="button">Login</a>
      </div>
    </form>

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