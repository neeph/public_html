<?php
require_once 'Bd.php';

class TipoReglaMP {
    protected $_dbTable = "TIPO_REGLA";
    protected $_id = "ID_TIPO_REGLA";
    protected $_bd;

    function __construct() {
        $this->_bd = new Bd();
    }

    function fetchAll() {
        $sql = "SELECT * FROM $this->_dbTable";
        $res = $this->_bd->sql($sql);
        $arr = array();
        while($row = mysql_fetch_object($res)) {
            $arr[] = $row;
        }
        return $arr;
    }
}
?>