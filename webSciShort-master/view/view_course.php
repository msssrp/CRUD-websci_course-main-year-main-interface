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



    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                include "./view_course_card.php";
                ?>
            </div>
        </div>
    </section>
    

<?php include("./vendor/inc/footer.php") ?>

</body>

</html>