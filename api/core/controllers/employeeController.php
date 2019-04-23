<?php
    require_once '../models/EmployeeModel.php';
    class EmployeeController{

        public function showEmployees(){
           
            $Employee = new EmployeeModel();
            return $Employee->consult();
        }

        public function save(){      
            $name  = $_POST['nameEmployee'];
            $surname = $_POST['lastnameEmployee'];
            $mail = $_POST['emailEmployee'];
            $key = $_POST['passEmployee'];

            $employeeX = new EmployeeModel();
            return $employeeX->createUser($name , $surname, $mail, $key);
        }

        public function update(){
            $id = $_REQUEST['id'];
            $body = json_decode(file_get_contents("php://input"));    
         
            $employeeU = new EmployeeModel();
            return $employeeU->updateUser($body->nameEmployee, $body->lastnameEmployee, 
            $body->emailEmployee, $body->passEmployee, $id);
        }

        public function delete(){
            $id = $_REQUEST['id'];
            $employeeE = new EmployeeModel();
            return $employeeE->deleteUser($id);
        }

     
    }

    
?>