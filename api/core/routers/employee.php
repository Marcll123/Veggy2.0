<?php
        require_once '../controllers/employeeController.php';
        header('Content-Type: application/json');
        
        $newEmployee = new controlEmployees();
        switch($_SERVER['REQUEST_METHOD']){
                case 'GET':
                $data = $newEmployee->showEmployees();
                echo $data;
                break;
                case 'POST':
                $data = $newEmployee->save();
                echo $data;
                break;
        }

?>