<!DOCTYPE html>
<html>

<?php include("./vendor/inc/header.php") ?>

<body>

    <?php include("./vendor/inc/nav.php") ?>

    <?php include("./vendor/inc/header-topic.php") ?>

    <div style="text-align: center;margin-top:50px;">ค้นหาคอร์สของแต่ละปี
        <form class="d-flex container" action="./view_course_year_diff.php" method="get">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="cs_year" autocomplete="off">
            <button class="btn btn-outline-dark" type="submit" value="Search">Search</button>
        </form>
    </div>

    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                //เชื่อมต่อข้อมูล
                include_once "../model/ConDB.php";
                include_once "../model/Course.php";
                //สร้างตัวแปร
                //$cs_year = "2566";

                $cs_year = $_GET['cs_year'];

                $obj_name = new Course();
                $rs2 = $obj_name->getCourseYear($cs_year);
                //$rs2= $obj_name->getCourseYear($cs_year);
                //เรียกใช้ที่



                foreach ($rs2 as $result2) {
                ?>




                    <!-- Course section -->
                    <div class="col mb-5">

                        <div class="card h-150">
                            <a href="../view/view_course_id.php?cs_id=<?= $result2['cs_id'] ?>" class="card-link">
                                <!-- Product image-->
                                <img class="card-img-top" src="./vendor/<?= $result2['cs_img']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-left">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder course-name"><?= $result2['cs_name']; ?></h5>
                                        <!-- course tag line-->
                                        <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?= $result2['cs_date']; ?></div>
                                        <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                        <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                        <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                        <div class="course-note"><i class="fas fa-wallet"></i> <?= $result2['cs_wallet']; ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Course section -->

                <?php } ?>
            </div>
        </div>
    </section>

    <?php include("./vendor/inc/footer.php") ?>
</body>

</html>