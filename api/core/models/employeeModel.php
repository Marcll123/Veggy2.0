<?php
     require_once '../helpers/connection.php';
     
     class modelEmployees extends database {
        public $name = null;
        public $surname = null;
        public $mail = null;
        public $key = null;
        public function consult(){
          
            $connection = parent::connect();
            try {       
                $query = 'SELECT * FROM empleados';
                $data=  $connection->query($query,PDO::FETCH_ASSOC)->fetchAll();
                return json_encode($data);
            } catch (Exception $e) {
                $array = [
                    'message' => 'Error al ingresar un registro',
                    'type' => 'error',
                    'specificMessage' => $e->getMessage()
                ];
                return json_encode($array);
            }
        }

        public function createUser($name , $surname, $mail, $key){
            $conexion = parent::connect();       
            try {
                $query = 'INSERT INTO empleados(nombre, apellido, correo, clave) VALUES (?,?,?,?)';
                $conexion->prepare($query)->execute(array($name , $surname, $mail, $key));
                $array = [
                    'message' => 'He insertado un registro',
                    'type' => 'success',
                    'specificMessage' =>$conexion
                ];
                return json_encode($array);

            } catch (Exception $e) {
                $array = [
                    'message' => 'Error al ingresar un registro',
                    'type' => 'error',
                    'specificMessage' => $e->getMessage()
                ];
                return json_encode($array);
            }
        }
    }
?>