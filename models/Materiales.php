<?php
    Class Materiales extends Conectar{

        public function get_materiales(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM ma_materiales";
            $sql = $conectar -> prepare($sql);
            $sql->execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_material($id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql= "SELECT * FROM ma_materiales Where ID = ?";
            $sql = $conectar-> prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

            //------------------------------------------
        
        public function insert_material($id, $descripcion, $unidad, $costo, $precio, $aplica_isv, $porcentaje_isv, $estado, $id_socio){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_materiales(id,descripcion,unidad,costo,precio,aplica_isv,porcentaje_isv, estado, id_socio) 
            VALUES (?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->bindValue(2, $descripcion);
            $sql->bindValue(3,$unidad);
            $sql->bindValue(4, $costo);
            $sql->bindValue(5, $precio);
            $sql->bindValue(6, $aplica_isv);
            $sql->bindValue(7, $porcentaje_isv);
            $sql->bindValue(8, $estado);
            $sql->bindValue(9, $id_socio);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
    //------------------------------------------
        public function eliminar_material($id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql= "DELETE FROM ma_materiales WHERE ID = ?";
            $sql = $conectar-> prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>