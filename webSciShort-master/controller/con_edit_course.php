<html lang="en">
<head>

<?php include("../view/vendor/inc/header.php") ?>


<body>

<?php include("../view/vendor/inc/nav.php") ?>

<?php include("../view/vendor/inc/header-topic.php") ?>

<div class="card text-center" style="width:100%;">
  <br>
  <br>  
  
  <div class="card-body">
    <br>
    <br>
    <h5 class="card-title">ข้อมูลอันนี้ถูกแก้ไขแล้ว</h5>
    <p class="card-text">คุณได้ทำการแก้ไขข้อมูลเสร็จสิ้น ข้อมูลชุดนี้ได้รับการแก้ไขลงระบบแล้ว!!</p>

    <a href="../view/view_course.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
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
</div>

<?php include("../view/vendor/inc/footer.php") ?>

<?php
  include_once "../model/ConDB.php";
  include_once "../model/Course.php";

  //สร้างตัวแปร
  $cs_id = $_POST['cs_id'];
  $cs_name = $_POST['cs_name'];
  $cs_img = $_POST['cs_img'];
  $cs_date = $_POST['cs_date'];
  $cs_wallet = $_POST['cs_wallet'];
  $cs_range_date = $_POST['cs_range_date'];
  $cs_fcourse = $_POST['cs_fcourse'];
  $cs_time = $_POST['cs_time'];
  $cs_location = $_POST['cs_location'];
  $cs_group = $_POST['cs_group'];
  $cs_detail = $_POST['cs_detail'];
  $cs_perform = $_POST['cs_perform'];
  $cs_reward = $_POST['cs_reward'];
  $cs_schedule = $_POST['cs_schedule'];
  $cs_phone = $_POST['cs_phone'];
  $cs_year = $_POST['cs_year'];

  //เรียกใช้
  $obj_name=new Course();
  $rs2=$obj_name->editCourseeditCourse($cs_id, 
    $cs_name,
    $cs_img,
    $cs_date,
    $cs_wallet,
    $cs_range_date,
    $cs_fcourse,
    $cs_time,$cs_location,
    $cs_group,$cs_detail,
    $cs_perform,$cs_reward,
    $cs_schedule,$cs_phone,$cs_year)

?>
</body>
</html>
