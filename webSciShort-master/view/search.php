<!DOCTYPE html>
<html>

<?php include("./vendor/inc/header.php") ?>

<body>
   
    <?php include("./vendor/inc/nav.php") ?>

   
    <?php include("./vendor/inc/header-topic.php") ?>


    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sci_course";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['keywords']))
    {
        $keywords = $conn->escape_string($_GET['keywords']);
        $query =  $conn->query("
            SELECT *
            FROM sci_cs 
            WHERE cs_name LIKE '%{$keywords}%'
        ");
?>

    <?php
        if($query->num_rows){
            while($r = $query->fetch_object()){
    ?>
            <!-- Course section -->
            <div class="col mb-5">
                <div class="card h-150">
                    <a href="controller/con_view_course.php?cs_id=<?=$r->cs_id;?>" class="card-link">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?=$r->cs_img;?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-left">
                                <!-- Product name-->
                                <h5 class="fw-bolder course-name"><?=$r->cs_name;?></h5>
                                <!-- course tag line-->
                                <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?=$r->cs_date;?></div>
                                <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                <div class="course-note"><i class="fas fa-wallet"></i> <?=$r->cs_wallet;?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Course section -->
        <?php
            }
        }
    }
?>
            </div>
        </div>
    </section>
   

    <?php include("./vendor/inc/footer.php") ?>

</body>
</html>
