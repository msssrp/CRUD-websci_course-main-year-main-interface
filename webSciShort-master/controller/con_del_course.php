<!DOCTYPE html>
<html lang="en">

<?php include("../view/vendor/inc/header.php") ?>

<body>

  <?php

  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  // echo $cs_id;
  $obj_name = new Course();
  $rs2 = $obj_name->delCourse($cs_id)
  // echo $rs2['cs_id']
  ?>

  <?php include("../view/vendor/inc/nav.php") ?>

  <?php include("../view/vendor/inc/header-topic.php") ?>

<div class="card text-center" style="width:100%;">

  
  <div class="card-body">
    <h5 class="card-title">ข้อมูลอันนี้ถูกลบแล้ว</h5>
    <p class="card-text">คุณได้ทำการลบข้อมูลเสร็จสิ้น ข้อมูลชุดนี้ได้หายไปจากระบบแล้ว!!</p>
    <br>
    <a href="../view/view_course.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
  </div>
  <br>
  <br>
  <br>
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<?php include("../view/vendor/inc/footer.php") ?>
</body>

</html>