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

    }

?>