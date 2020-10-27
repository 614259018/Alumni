<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/showuser.css">
</head>
<body>
    <?php include("header.php");?>

    <div class="container">
        <h1>กรุณาเลือกวิธีค้นหา</h1>
        <center>
            <a class="button" href="../Alumni/getStdID">ค้นหาจากรหัสนักศึกษา</a>
            <a class="button" href="../Alumni/getName">ค้นหาจากชื่อนักศึกษา</a>
            <a class="button" href="../Alumni/getYear">ค้นหาจากปีที่จบ</a>
        </center>
    </div>
    
    <?php include("footer.php");?>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>
</body>
</html>