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
    <h1>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
        <form action="../Alumni/search_Year" method="get">
            <center>
                <label class="title" for="Std_ID">ค้นหาด้วยปีที่จบ</label>

                <a href="../Alumni/getStdID"><img class="next" src="<?php echo base_url(); ?>img/next-button.png" alt=""></a>
                <a href="../Alumni/getName"><img class="back" src="<?php echo base_url(); ?>img/back-button.png" alt=""></a>

                <input class="input" type="text" id="End_Year" name="End_Year" value="">
                <input class="search" type="submit"  value="ค้นหา" />
            </center>
        </form>
    </div>
       
    <?php include("footer.php");?>
</body>
</html>