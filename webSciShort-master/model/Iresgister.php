<?php 


    interface Iregister{
        public function getRegisterCourse(string $cs_id):array;
        public function registerCourse(array $data_register):bool;
    }

    class Register implements Iregister{
         private $ConDB;

         public function __construct(){
            $con = new ConDB(); 
            $con->connect();
            $this->ConDB = $con->conn;
         }

        public function getRegisterCourse(string $cs_id):array{
        $sql = "SELECT * FROM sci_cs where cs_id = " . $cs_id;
        $query = $this->ConDB->prepare($sql);
            if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
        return false;
    }
    }
        public function registerCourse(array $data_regis):bool{
             $sql = "INSERT INTO `sci_regis_course` (`cr_id`, `cr_email`, `cr_genders`, `cr_name`, `cr_numbers`, `cr_card_id`, `cr_certi`,`cs_id`)";
        $sql .= " VALUES ('', :cr_email, :cr_genders, :cr_name, :cr_numbers , :cr_card_id , :cr_certi , :cs_id);";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute($data_regis)) {
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
                    return true;
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
                    return false;
        }
}
    }



?>
