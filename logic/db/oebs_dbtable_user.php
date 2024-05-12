<?php 

require_once ("logic/db/oebs_dbtable.php");

class db_user {
    private $data;
    private $connection;

    public function __construct($array, $connection) {
        $this->data = $array;
        $this->connection = $connection;
    }

    public function get_id() : int { return $this->data["u_id"]; }
    public function get_hash() { return $this->data["u_hash"]; }
    public function get_tocken() { return $this->data["u_tocken"]; }
    public function get_last_login() { return $this->data["u_lastlogin"]; }
    public function get_create_stamp() { return $this->data["u_create"]; }
    public function is_active() { return $this->data["u_active"];}
}

class db_table_user extends db_table {
    
    public function __construct($db)  {
        parent::__construct($db, "oebs_user", "u_id");
    }

    protected function set_from_query ($qry) {
        $ret = null;
        $i = 0;
        

        while ($field = $qry->fetch_assoc()) {
            $ret[$i] = new db_user($field, $this->connection );
            $i++;
        }   
        var_dump($ret);

        return $ret;
    }
}

?>