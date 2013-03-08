<?php

class BD {

    private $schema = "USB";
    private $local = true;

    public function conectarse() {
        if ($local){
            return $this->conectarse_local();
        }
        $dbconexion = pg_connect("host=auliya.ldc.usb.ve dbname=CI585226 user=08-11031 password=rausb")
                or die('No se estableció conexión con la BD: ' . pg_last_error());
        return $dbconexion;
    }

    public function conectarse_local() {
        $dbconexion = pg_connect("host=localhost dbname=ci585226 user=08-11031 password=rausb")
                or die('No se estableció conexión con la BD: ' . pg_last_error());
        return $dbconexion;
    }

    public function desconectarse($dbconexion) {
        pg_close($dbconexion);
    }

    public function agregarElem($elem) {
        $conexion = $this->conectarse();
        $query = "INSERT INTO " . $schema . "." . $elem->getTable() . "  (" . $elem->columnsDB() . ") VALUES (" . $elem->valuesDB() . ")";
        $result = pg_query($conexion, $query);
        if (!$result) {
            echo "No se pudo agregar el elemento";
        }
        desconectarse($conexion);
    }

    public function eliminarElem($elem) {
        $conexion = $this->conectarse();
        $query = " DELETE FROM " . $schema . "." . $elem->getTable() . " WHERE " .$elem->idname()." = " . $elem->getId();
        $result = pg_query($conexion, $query);
        if (!$result) {
            echo "No se pudo eliminar el elemento";
        }
        desconectarse($conexion);
    }

    public function consultarElem($elem) {
        $conexion = $this->conectarse();
        $query = " SELECT * FROM " . $schema . "." . $elem->getTable() . ($elem->getId() ? " WHERE " .$elem->getIdName()." = " . $elem->getId() : "" );
        $result = pg_query($conexion, $query);
        desconectarse($conexion);
        return $result;
    }

    public function modificarElem($elem, $value) {
        $conexion = $this->conectarse();
        $query = "UPDATE " . $schema . "." . $elem->getTable() . " SET " . $elem->getColumn() . " = " . $value . " WHERE " .$elem->idname()." = " . $elem->getId();
        $result = pg_query($conexion, $query);
        if (!$result) {
            echo "No se pudo modificar el elemento";
        }
        desconectarse($conexion);
    }

}

?>
