<!DOCTYPE html>
<html>

<?php include("./vendor/inc/header.php") ?>


<body>

  <?php

  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  // echo $cs_id;
  $obj_name = new Course();
  $rs2 = $obj_name->getCourseDetail($cs_id)
  // echo $rs2['cs_id']
  ?>

  <?php include("./vendor/inc/nav.php") ?>

  <!-- Page content-->
  <div class="container mt-4" data-bs-spy="scroll" data-bs-target="#list-example">
    <div class="row">

      <div class="col-lg-8">
        <!-- Post content-->
        <article>
          <!-- Post header-->
          <header class="mb-4">

            <h1 class="fw-bolder mb-1">
              <?php
              echo $rs2['cs_name'];
              ?>
            </h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2"><i class="far fa-calendar-alt"></i> วันที่รับสมัคร
              <?php echo $rs2['cs_range_date'] ?>
            </div>
            <div class="text-muted fst-italic mb-2">คอร์สนี้เป็นของปี <?php echo $rs2['cs_year'] ?></div>
            <div class="sharethis-inline-share-buttons"></div>





          </header>
          <!-- Preview image figure-->
          <figure class="mb-4"><img class="img-fluid rounded" src="./vendor/<?= $rs2['cs_img']; ?>" alt="..." /></figure>
          <!-- Post content-->
          <section class="mb-5 course-body">


            <h5 class="fw-bolder mb-4 mt-5" id="list-item-3"><i class="far fa-calendar-alt"></i> ช่วงวันรับสมัคร</h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_range_date'] ?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-31"><i class="far fa-calendar-alt"></i> ช่วงเวลาเรียน</h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_date'] ?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-32"><i class="far fa-clock"></i> ระยะเวลาของหลักสูตร </h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_time'] ?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-5"><i class="fas fa-map-marker-alt"></i> สถานที่</h5>
            <ul class="list-inline course-content fs-6">
              <!-- <li class="list-inline-item">online โปรแกรม Zoom</li> -->
              <li class="list-inline-item"><?php echo $rs2['cs_location'] ?></li>
            </ul>




            <h5 class="fw-bolder mb-4 mt-5" id="list-item-2"><i class="fas fa-bullseye"></i> วัตถุประสงค์</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_fcourse'] ?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-4"><i class="far fa-user"></i> กลุ่มเป้าหมาย</h5>
            <ul class="list-inline course-content fs-6">

              <li class="list-inline-item"><?php echo $rs2['cs_group'] ?></li>

            </ul>


            <h5 class="fw-bolder mb-4 mt-5" id="list-item-6"><i class="fas fa-chalkboard"></i> ขอบข่ายเนื้อหา</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_detail'] ?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-7"><i class="fas fa-file-alt"></i> การวัดผลประเมินผล</h5>
            <li class="list-inline-item"><?php echo $rs2['cs_perform'] ?></li>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-8"><i class="fas fa-award"></i> ผลที่คาดว่าจะได้รับ</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_reward'] ?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-11"><i class="fas fa-clipboard-list"></i> กำหนดการ</h5>
            <ul class=" course-content fs-6 contact-course">
              <li><a href="./vendor/<?= $rs2['cs_schedule']; ?>" target="_blank" class="orange-theme-2">ดาวน์โหลด PDF</a> </li>
            </ul>


            <h5 class="fw-bolder mb-4 mt-5" id="list-item-10"><i class="far fa-comments"></i> สอบถามเพิ่มเติม</h5>
            <ul class="list-inline course-content fs-6 contact-course">
              <li class="list-inline-item"><i class="fas fa-phone-square-alt"></i> <a href="#"><?php echo $rs2['cs_phone'] ?></a>
              </li>
            </ul>




      </div>

      </section>

      </article>


      <!-- Side widgets-->
      <div class="col-lg-4  d-none d-lg-block">

        <div id="list-example " class="list-group sticky-top ">
          <div class="card-header bg-or-4"><a class=" list-group-item-action text-light" href="#"></a></div>
          <!-- <a class="list-group-item list-group-item-action" href="#list-item-1"><i class="fas fa-book-reader"></i> คำอธิบายหลักสูตร</a> -->
          <a class="list-group-item list-group-item-action" href="#list-item-3"><i class="far fa-calendar-alt"></i>
            วันรับสมัคร</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3"><i class="far fa-calendar-alt"></i>
            ช่วงเวลาเรียน</a>
          <a class="list-group-item list-group-item-action" href="#list-item-5"><i class="fas fa-map-marker-alt"></i>
            สถานที่</a>

          <a class="list-group-item list-group-item-action" href="#list-item-2"><i class="fas fa-bullseye"></i>
            วัตถุประสงค์</a>
          <a class="list-group-item list-group-item-action" href="#list-item-4"><i class="far fa-user"></i>
            กลุ่มเป้าหมาย</a>
          <a class="list-group-item list-group-item-action" href="#list-item-6"><i class="fas fa-chalkboard"></i>
            ขอบข่ายเนื้อหา</a>
          <a class="list-group-item list-group-item-action" href="#list-item-7"><i class="fas fa-file-alt"></i>
            การวัดผลประเมินผล</a>
          <a class="list-group-item list-group-item-action" href="#list-item-8"><i class="fas fa-award"></i>
            ผลที่คาดว่าจะได้รับ</a>
          <a class="list-group-item list-group-item-action" href="#list-item-11"><i class="fas fa-clipboard-list"></i>
            กำหนดการ</a>
          <!-- <a class="list-group-item list-group-item-action" href="#list-item-9">เข้าระบบคลังหน่วยกิต <i class="fas fa-graduation-cap text-success"></i></a> -->
          <div class="card-header bg-or-2 text-light">
            <i class="fas fa-wallet "></i> ค่าลงทะเบียน <?php echo $rs2['cs_wallet'] ?>/คน

          </div>
          <div class="my-3 card-rela">
            <a href="./register_course.php?cs_id=<?=$rs2['cs_id']?>" class="btn btn-success">ลงทะเบียน</a>
            <a href="#list-item-10" class="btn btn-primary">สอบถามเพิ่มเติม</a>
            <a class="btn btn-outline-warning" href="../view/form_edit_course.php?cs_id=<?= $rs2['cs_id'] ?>">EDIT</a>
            <a class="btn btn-outline-danger" href="../controller/con_del_course.php?cs_id=<?= $rs2['cs_id'] ?>" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')">DELETE</a>
          </div>
        </div>

      </div>
    </div>
  </div>



  <?php include("./vendor/inc/footer.php") ?>

</body>

</html>