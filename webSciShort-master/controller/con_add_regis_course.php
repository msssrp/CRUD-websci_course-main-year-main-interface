<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("../view/vendor/inc/header.php") ?>

</head>

<body>


    <?php
    include_once("../model/ConDB.php");
    include_once("../model/Course.php");

    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['sex'] = $_POST['sex'];
    $_SESSION['nameL'] = $_POST['nameL'];
    $_SESSION['numbers'] = $_POST['numbers'];
    $_SESSION['id_card'] = $_POST['id_card'];
    $_SESSION['certi'] = $_POST['certi'];

   
    ?>


    <?php include("../view/vendor/inc/nav.php") ?>

    <?php include("../view/vendor/inc/header-topic.php") ?>


    <?php

    include_once("../model/ConDB.php");
    include_once("../model/Course.php");

    $cs_id = htmlspecialchars($_GET['cs_id']);

    $obj_name = new Course();
    $rs2 = $obj_name->getCourseDetail($cs_id)
    ?>


    <div class="container mt-5" style="width: 1200px;">
        <form action="./con-confirm_adding_course.php?cs_id=<?= $rs2['cs_id'] ?>" method="post">
            <h2><?php echo $rs2['cs_name'] ?></h2> <br>
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="../view/vendor/<?php echo $rs2['cs_img'] ?>" alt="Card image cap">
            </div>
            <h3 class="mt-4">โปรดตรวจสอบข้อมูลลงทะเบียน</h3>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['email'] ?>" disabled>
            </div>
            <br>
            <h5>1. ลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น<?php echo $rs2['cs_name'] ?> ค่าลงทะเบียน <?php echo $rs2['cs_wallet'] ?></h5>
            <div class="form-group mt-4">
                <label for="sex">คำนำหน้า</label>
                <input type="text" name="sex" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['sex']  ?>" disabled>
            </div>
            <div class="form-group mt-4">
                <label for="nameL">ชื่อ นามสกุล</label>
                <input type="text" name="nameL" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['nameL'] ?>" disabled>
            </div>
            <div class="form-group mt-4">
                <label for="numbers">หมายเลขโทรศัพท์</label>
                <input type="text" name="numbers" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['numbers'] ?>" disabled>
            </div>
            <div class="form-group mt-4">
                <label for="id_card">เลขประจำตัวประชาชน</label>
                <input type="text" name="id_card" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['id_card'] ?>" disabled>
            </div>
            <div class="form-group mt-4">
                <label for="certi">วุฒิการศึกษาสูงสุด (ที่ได้รับ)</label>
                <input type="text" name="certi" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['certi'] ?>" disabled>
            </div>
            <h5 class="mt-4">2. การชำระเงินโอนผ่านธนาคาร ธนาคารกรุงไทย ประเภทกระแสรายวัน ชื่อบัญชี มหาวิทยาลัยราชภัฏนครปฐม เลขที่บัญชี 986 5 34173 5</h5>
            <h5 class="mt-4">3. ยืนยันการชำระเงินแบบฟอร์มยืนยันการชำระเงิน <a href="https://forms.gle/1i1xJFEtwHXbESUU7">https://forms.gle/1i1xJFEtwHXbESUU7</a></h5>
            <button type="submit" class="btn btn-danger mb-5 mt-4" style="margin-right:20px"><a href="../view/register_course.php?cs_id=<?= $rs2['cs_id'] ?>" style="color: white;text-decoration:none;">แก้ไข</a></button>
            <button type="submit" value="Submit" class="btn btn-primary mb-5 mt-4">ยืนยัน</button>
        </form>
    </div>





    <?php include("../view/vendor/inc/footer.php") ?>

</body>

</html>