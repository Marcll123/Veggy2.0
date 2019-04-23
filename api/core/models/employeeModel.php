<?php
     require_once '../helpers/Connection.php';
     
     class EmployeeModel extends Connection{
        public $id = null;
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

        public function updateUser( $name , $surname, $mail, $key, $id){
            $conexion = parent::connect();    
            try {
                $query = 'UPDATE empleados SET nombre=?, apellido=?, correo=?, clave=? WHERE id=?';
                $conexion->prepare($query)->execute(array($name , $surname, $mail, $key, $id));
                $array = [
                    'message' => 'He actualizado un registro',
                    'type' => 'success',
                    'specificMessage' =>$conexion
                ];
                return json_encode($array);
            } catch (Exception $e) {
                $array = [
                    'message' => 'Error al actualizar un registro',
                    'type' => 'error',
                    'specificMessage' => $e->getMessage()
                ];
                return json_encode($array);
            }
        }

        public function deleteUser($id){
               $conexion = parent::connect();    
                try {
                    $query = 'DELETE FROM empleados WHERE id=?';
                    $conexion->prepare($query)->execute(array($id));
                    $array = [
                        'message' => 'He Eliminado un registro',
                        'type' => 'success',
                        'specificMessage' =>$conexion
                    ];
                    return json_encode($array);
                } catch (Exception $e) {
                    $array = [
                        'message' => 'Error al eliminar un registro',
                        'type' => 'error',
                        'specificMessage' => $e->getMessage()
                    ];
                    return json_encode($array);
                }        
        }
    }
?>