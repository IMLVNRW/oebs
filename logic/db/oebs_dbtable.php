<?php

require_once("logic/db/oebs_dbconection.php");

abstract class db_table {
    protected $connection;
    private $name;
    private $idname;

    public function __construct($db, $name, $idn = "id") {
        $this->connection = $db;
        $this->name = $name;
        $this->idname = $idn;
    }

    public function query_id($id) {
        $qry = $this->connection->query("SELECT * FROM  {$this->name} where {$this->idname} = {$id}");
        return $this->set_from_query($qry);
    }
    public function query() {
        $qry = $this->connection->query("SELECT * FROM  {$this->name}");
        return $this->set_from_query($qry);
    }

    abstract protected function set_from_query ($qry);
}

?>