<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "./vendor/inc/header.php" ?>

</head>

<body>


    <?php include "./vendor/inc/nav.php" ?>

    <?php include "./vendor/inc/header-topic.php" ?>

    <?php
    

    include_once("../model/ConDB.php");
    include_once("../model/Iresgister.php");

    $cs_id = $_GET['cs_id'];

    

    $obj_name = new Register();
    $rs2 = $obj_name->getRegisterCourse($cs_id);


    ?>


    <div class="container mt-5" style="width: 1200px;">
        <form method="post" action="../controller/con_add_regis_course.php?cs_id=<?= $rs2['cs_id'] ?>">
            <h2><?php echo $rs2['cs_name'] ?></h2> <br>
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="./vendor/<?php echo $rs2['cs_img'] ?>" alt="Card image cap">
            </div>
            <p class="mt-4">กรุณากรอกข้อมูลให้ถูกต้อง เพื่อใช้ยืนยันการลงทะเบียน</p> <br>
            <p>แบบฟอร์มนี้สำหรับการลงทะเบียนรายบุคคล </p> <br>
            <p>หากต้องการลงทะเบียนเป็นกลุ่ม ติดต่อไปที่ <a href="mailto:ScishortcoursesNPRU@gmail.com">ScishortcoursesNPRU@gmail.com</a></p>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <br>
            <h5>1. ลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น<?php echo $rs2['cs_name'] ?> ค่าลงทะเบียน <?php echo $rs2['cs_wallet'] ?></h5>
            <div class="form-group mt-4">
                <label for="sex">คำนำหน้า</label>
                <select class="form-control" name="sex" id="exampleFormControlSelect1" required>
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                    <option>อื่นๆ</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="nameL">ชื่อ นามสกุล</label>
                <input type="text" name="nameL" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group mt-4">
                <label for="numbers">หมายเลขโทรศัพท์</label>
                <input type="text" name="numbers" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group mt-4">
                <label for="id_card">เลขประจำตัวประชาชน</label>
                <input type="text" name="id_card" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group mt-4">
                <label for="certi">วุฒิการศึกษาสูงสุด (ที่ได้รับ)</label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="certi" required>
                    <option>มัธยมต้น</option>
                    <option>มัธยมปลาย</option>
                    <option>ปวช.</option>
                    <option>ปวส.</option>
                    <option>ปริญญาตรี</option>
                    <option>ปริญญาโท</option>
                    <option>ปริญญาเอก</option>
                    <option>อื่น ๆ</option>
                </select>
            </div>
            <h5 class="mt-4">2. การชำระเงินโอนผ่านธนาคาร ธนาคารกรุงไทย ประเภทกระแสรายวัน ชื่อบัญชี มหาวิทยาลัยราชภัฏนครปฐม เลขที่บัญชี 986 5 34173 5</h5>
            <h5 class="mt-4">3. ยืนยันการชำระเงินแบบฟอร์มยืนยันการชำระเงิน <a href="https://forms.gle/1i1xJFEtwHXbESUU7">https://forms.gle/1i1xJFEtwHXbESUU7</a></h5>
            <button type="submit" class="btn btn-danger mb-5 mt-4" style="margin-right:20px"><a href="./view_course.php" style="color: white;text-decoration:none;">ยกเลิก</a></button>
            <button type="submit" name="submit" class="btn btn-primary mb-5 mt-4">ยืนยัน</button>
        </form>
    </div>











    <?php include "./vendor/inc/footer.php" ?>

</body>

</html>