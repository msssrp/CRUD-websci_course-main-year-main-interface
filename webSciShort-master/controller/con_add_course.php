<!DOCTYPE html>
<html>

<?php include("../view/vendor/inc/header.php") ?>

<body>
    
<?php include("../view/vendor/inc/nav.php") ?>

    <header class="bg-or-5 py-1 bg-header-img">
            <div class="container-fluid px-4 px-lg-5 my-5">
                <div class="text-center orange-theme-4">
                    <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                    <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
                </div>
            </div>
    </header>


    
    <div class="card text-center" style="width:100%;">
    <br>
    <div class="card-body">
        <h5 class="card-title">ข้อมูลอันนี้ได้ถูกเพิ่มลงฐานข้อมูลแล้ว</h5>
        <p class="card-text">คุณได้ทำการเพิ่มข้อมูลเสร็จสิ้น ข้อมูลชุดนี้ได้อยู่ระบบแล้ว!!</p>
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

    </div>

    <?php include("../view/vendor/inc/footer.php") ?>
<?php 

    //$cs_img=$_POST[""];
    $cs_img=$_POST["cs_img"];
    $cs_name=$_POST["cs_name"];
    $cs_date=$_POST["cs_date"];
    $cs_wallet=$_POST["cs_wallet"];
    $cs_range_date=$_POST["cs_range_date"];
    $cs_fcourse=$_POST["cs_fcourse"];
    $cs_time=$_POST["cs_time"];
    $cs_location=$_POST["cs_location"];
    $cs_group=$_POST["cs_group"];
    $cs_detail=$_POST["cs_detail"];
    $cs_perform=$_POST["cs_perform"];
    $cs_reward=$_POST["cs_reward"];
    $cs_schedule=$_POST["cs_schedule"];
    $cs_phone=$_POST["cs_phone"];
    $cs_year = $_POST["cs_year"];

    $course=array();
    $course["cs_img"]=$cs_img;
    $course["cs_name"]=$cs_name;
    $course["cs_date"]=$cs_date;
    $course["cs_wallet"]=$cs_wallet;
    $course["cs_range_date"]=$cs_range_date;
    $course["cs_fcourse"]=$cs_fcourse;
    $course["cs_time"]=$cs_time;
    $course["cs_location"]=$cs_location;
    $course["cs_group"]=$cs_group;
    $course["cs_detail"]=$cs_detail;
    $course["cs_perform"]=$cs_perform;
    $course["cs_reward"]=$cs_reward;
    $course["cs_schedule"]=$cs_schedule;
    $course["cs_phone"]=$cs_phone;
    $course["cs_year"]=$cs_year;
    
    include_once "../model/ConDB.php";
    include_once "../model/Course.php";
    $obj_name=new Course();
    $rs2= $obj_name->addCourse($course);

?>
