<?php

class Course
{


    private $ConDB;
    public function __construct()
    {
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }



    public function getCourseYear($cs_year)
    {
        $sql = "SELECT sci_cs.cs_id,sci_cs.cs_name,sci_cs.cs_img,sci_cs.cs_date,sci_cs.cs_wallet,sci_cs.cs_range_date,sci_cs.cs_fcourse,
        sci_cs.cs_time,sci_cs.cs_location,sci_cs.cs_group,sci_cs.cs_detail,sci_cs.cs_perform,sci_cs.cs_reward,sci_cs.cs_schedule,sci_cs.cs_phone,sci_cs.cs_year 
        FROM sci_cs INNER JOIN sci_years ON sci_cs.cs_year = sci_years.cs_year WHERE sci_cs.cs_year = " . $cs_year;
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }


    public function getCourseDetail($cs_id)
    {
        $sql = "SELECT * FROM sci_cs where cs_id = " . $cs_id;
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }





    public function addCourse($data_course)
    {
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`, `cs_range_date`, `cs_fcourse`, 
        `cs_time`, `cs_location`, `cs_group`, `cs_detail`, `cs_perform`, `cs_reward`, `cs_schedule`, `cs_phone`)";
        $sql .= " VALUES ('', :cs_name, :cs_img, :cs_date, :cs_wallet , :cs_range_date , :cs_fcourse
        , :cs_time , :cs_location, :cs_group, :cs_detail, :cs_perform , :cs_reward , :cs_schedule, :cs_phone);";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute($data_course)) {
            return true;
        } else {
            return false;
        }
    }

    public function delCourse($cs_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='" . $cs_id . "'";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editCourseeditCourse(
        $cs_id,
        $cs_name,
        $cs_img,
        $cs_date,
        $cs_wallet,
        $cs_range_date,
        $cs_fcourse,
        $cs_time,
        $cs_location,
        $cs_group,
        $cs_detail,
        $cs_perform,
        $cs_reward,
        $cs_schedule,
        $cs_phone,
        $cs_year
    ) {
        $sql = "UPDATE sci_cs SET cs_name='$cs_name',
        cs_img='$cs_img',
        cs_date='$cs_date',
        cs_wallet='$cs_wallet',
        cs_range_date='$cs_range_date',
        cs_fcourse='$cs_fcourse',
        cs_time='$cs_time',
        cs_location='$cs_location',
        cs_group='$cs_group',
        cs_detail='$cs_detail',
        cs_perform='$cs_perform',
        cs_reward='$cs_reward',
        cs_schedule='$cs_schedule',
        cs_phone='$cs_phone',
        cs_year='$cs_year' 
        WHERE cs_id='$cs_id'";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
        mysqli_close($this->ConDB);
    }


    public function addRegisterCourse($data_c_regis)
    {
        $sql = "INSERT INTO `sci_regis_course` (`cr_id`, `cr_email`, `cr_genders`, `cr_name`, `cr_numbers`, `cr_card_id`, `cr_certi`,`cs_id`)";
        $sql .= " VALUES ('', :cr_email, :cr_genders, :cr_name, :cr_numbers , :cr_card_id , :cr_certi , :cs_id);";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute($data_c_regis)) {
            echo '<script>
                    setTimeout(function(){
                     swal({
                       title:"Insert Registered!!",
                       text:"Data has been inserted",
                       type:"success"
                     },function(){
                           window.location = "../view/view_course.php";
                          })
                     },1000);
                    </script>';
        } else {
            echo '<script>
                    setTimeout(function(){
                     swal({
                       title:"Fail to insert data",
                       text:"Please input all fields",
                       type:"warning"
                     },function(){
                           window.location = "./con_add_regis_course.php";
                          })
                     },1000);
                    </script>';
        }
    }
}
