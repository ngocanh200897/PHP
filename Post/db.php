<?php
include ('config.php');
class db {
    public static  $connection = NULL;
    //construct
    public function __construct() {
        if(!self::$connection)
        {
            self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
    }
    
    public function query($sql)
    {
        $data = mysqli_query(self::$connection, $sql);
        return $data;
    }
}
