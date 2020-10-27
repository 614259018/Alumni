<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/profileMe.css">
</head>
<body>
    <?php include("header.php");?>
    <?php
  foreach($MA as $row){
  ?>
  <center><h2>ข้อมูลส่วนตัว</h2></center>
    <div class="container">
      <tr>
        <td>
            <th>
              <a class="title">รหัสนักศึกษา 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Std_ID;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อ - นามสกุล 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Name_LastName;?></a>
              </a>
            </th>
            <br><br>
          
            <th>
              <a class="title">รหัสประจำตัวประชาชน 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->ID_Card;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">วันเดือนปีเกิด 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Date_Of_Birth;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ที่อยู่ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Address;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เบอร์โทรศัพท์ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Tel;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">E-mail 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->E_mail;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">Facebook 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Facebook;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">Instagran 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Instagram;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ปีที่จบ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->End_Year;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อบริษัท 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Company_Name;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ที่อยู่บริษัท 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Company_Address;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">อาชีพ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Profession;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ตำแหน่ง 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Rank;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เบอร์โทรศัพัท์ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->Company_Tel;?></a>
              </a>
            </th>
            <br>
        </td>
      </tr>
      <center><a class="button" href="../Alumni/edit">เเก้ไขข้อมูลส่วนตัว</a></center>
    </div>
  <?php
  }
  ?>
    
    <?php include("footer.php");?>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>
</body>
</html>