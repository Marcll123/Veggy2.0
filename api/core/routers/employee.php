<?php
        require_once '../controllers/EmployeeController.php';
        header('Content-Type: application/json');
        
        $newEmployee = new EmployeeController();
        switch($_SERVER['REQUEST_METHOD']){
                case 'GET':
                $data = $newEmployee->showEmployees();
                echo $data;
                break;

                case 'POST':
                $data = $newEmployee->save();
                echo $data;
                break;

                case 'PUT':
                $data = $newEmployee->update();
                echo  $data;
                break;

                case 'DELETE':
                $data = $newEmployee->delete();
                echo  $data;
                break;
              
        }

?>