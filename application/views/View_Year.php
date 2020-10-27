<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/showsearh.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
    <h1>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
    <table border="1" style="width:100%">
  <tr>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ - นามสกุล</th>
    <th>ปีที่จบ</th>
  </tr>
<?php
        foreach($MA->result() as $row){
?>
<tr>
    <td><center><?php echo $row->Std_ID ?></center></td>
    <td><center><?php echo $row->Name_LastName?></center></td>
    <td><center><?php echo $row->End_Year ?></center></td>
  </tr>
  <?php
         }

    ?>
    </table>
    </div>
    <?php include("footer.php");?>
</body>
</html>