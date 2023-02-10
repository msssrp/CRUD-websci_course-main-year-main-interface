<?php
include_once("../model/ConDB.php");
include_once("../model/Course.php");
?>
<!DOCTYPE html>
<html>

<?php include("./vendor/inc/header.php") ?>

<body>

  <?php
  $cs_id = htmlspecialchars($_GET["cs_id"]);

  $obj_name = new Course();
  $rs2 = $obj_name->getCourseDetail($cs_id)
  ?>


  <?php include("./vendor/inc/nav.php") ?>

  <?php include("./vendor/inc/header-topic.php") ?>


  </br>
  </br>
  </br>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
      </div>


      <div class="col-md-8">
        <form name="frmadd" method="post" action="../controller/con_edit_course.php" enctype="multipart/form-data">

          <input name="cs_id" type="hidden" id="ID" value="<?php echo $rs2['cs_id']; ?>">


          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">คอร์ส</label>
            <div class="col-sm-10">
              <input type="text" name="cs_name" class="form-control" id="cs_name" value="<?php echo $rs2['cs_name']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">ปีของคอร์ส</label>
            <div class="col-sm-10">
              <input list="year" name="cs_year" id="cs_year" class="form-control">

              <datalist id="year">
                <option value="2566">
                <option value="2567">
              </datalist>
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">รูปภาพ</label>
            <div class="col-sm-10">
              <input type="text" name="cs_img" class="form-control" id="cs_img" value="<?php echo $rs2['cs_img']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">แผนการ</label>
            <div class="col-sm-10">
              <input type="text" name="cs_schedule" class="form-control" id="cs_schedule" value="<?php echo $rs2['cs_schedule']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">ระยะเวลา</label>
            <div class="col-sm-10">
              <input type="text" name="cs_time" class="form-control" id="cs_time" value="<?php echo $rs2['cs_time']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">วันที่สมัคร</label>
            <div class="col-sm-10">
              <input type="text" name="cs_range_date" class="form-control" id="cs_range_date" value="<?php echo $rs2['cs_range_date']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">สถานที่</label>
            <div class="col-sm-10">
              <input type="text" name="cs_location" class="form-control" id="cs_location" value="<?php echo $rs2['cs_location']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">กลุ่มเป้าหมาย</label>
            <div class="col-sm-10">
              <input type="text" name="cs_group" class="form-control" id="cs_group" value="<?php echo $rs2['cs_group']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">รายละเอียด</label>
            <div class="col-sm-10">
              <input type="text" name="cs_detail" class="form-control" id="cs_detail" value="<?php echo $rs2['cs_detail']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">จุดมุ่งหมาย</label>
            <div class="col-sm-10">
              <input type="text" name="cs_fcourse" class="form-control" id="cs_fcourse" value="<?php echo $rs2['cs_fcourse']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">การประเมิน</label>
            <div class="col-sm-10">
              <input type="text" name="cs_perform" class="form-control" id="cs_perform" value="<?php echo $rs2['cs_perform']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">สิ่งที่จะได้รับ</label>
            <div class="col-sm-10">
              <input type="text" name="cs_reward" class="form-control" id="cs_reward" value="<?php echo $rs2['cs_reward']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">ราคาคอร์ส</label>
            <div class="col-sm-10">
              <input type="text" name="cs_wallet" class="form-control" id="cs_wallet" value="<?php echo $rs2['cs_wallet']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">วันที่อบรม</label>
            <div class="col-sm-10">
              <input type="date" name="cs_date" class="form-control" id="cs_date" value="<?php echo $rs2['cs_date']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="staticEmail" class="col-sm-2 col-form-label">เบอร์ติดต่อ</label>
            <div class="col-sm-10">
              <input type="text" name="cs_phone" class="form-control" id="cs_phone" value="<?php echo $rs2['cs_phone']; ?>">
            </div>
          </div>

          <div class="form-group row" style="margin-top: 20px;">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10" style="margin-bottom: 20px;">
              <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i>แก้ไขข้อมูล</button>
            </div>

          </div>


        </form>




      </div>

      <?php include("./vendor/inc/footer.php") ?>

</body>

</html>