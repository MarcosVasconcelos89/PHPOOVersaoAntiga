<?php
//Data Access Object
class Dao {

    protected $con;
    protected $rs;
    protected $sql;

    public function open(){
        $this->con = mysql_connect("localhost","root","coti");
        mysql_select_db("aula9",$this->con);
    }

    public function close(){
        mysql_close($this->con);
    }

    public function execute(){
        $this->open();
        $this->rs = mysql_query($this->sql,$this->con);
        $this->close();
        return $this->rs;
    }
}
?>
