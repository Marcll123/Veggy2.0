<?php
    require_once '../models/employeeModel.php';
    class controlEmployees{

        public function showEmployees(){
           
            $Employee = new modelEmployees();
            return $Employee->consult();
        }

        public function save(){      
            $name  = $_POST['nameEmployee'];
            $surname = $_POST['lastnameEmployee'];
            $mail = $_POST['emailEmployee'];
            $key = $_POST['passEmployee'];

            $employeeX = new modelEmployees();
            return $employeeX->createUser($name , $surname, $mail, $key);
        }

    }

    
?>