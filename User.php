<?php
$dbConnection;
class User {

    public $attribute;
    public $error_msg;
    private $dbConnection;
    
    public function __construct() {
        global $dbConnection;
        if($dbConnection){
            $this->dbConnection=$dbConnection;
        }else{
            $this->createDBConnection();
        }
    }

    public function validate() {
        if (!$this->attribute['name'] || $this->attribute['name'] == '') {
            $this->error_msg[] = $this->getErrorMsg('name');
        }
        if (!$this->attribute['username'] || $this->attribute['username'] == '') {
            $this->error_msg[] = $this->getErrorMsg('username');
        }
        if (!$this->attribute['password'] || $this->attribute['password'] == '') {
            $this->error_msg[] = $this->getErrorMsg('password');
        }
        if (!$this->attribute['confirm_password'] || $this->attribute['confirm_password'] == '') {
            $this->error_msg[] = $this->getErrorMsg('confirm_password');
        }
        if (!$this->attribute['zip'] || $this->attribute['zip'] == '') {
            $this->error_msg[] = $this->getErrorMsg('zip');
        }
        return count($this->error_msg) > 0 ? FALSE : TRUE;
    }

    public static function getErrorSummary($obj) {
        return $obj->preparedErrorMsgHTML($obj->error_msg);
    }
    public function save() {
        try {
            $query = "INSERT INTO tagrem_users (name, username, password, confirm_password,zip, created_date, updated_date)
                       VALUES ('" . $this->attribute['name'] . "', '" . $this->attribute['username'] . "', '" . $this->attribute['password'] . "', '" . $this->attribute['confirm_password'] . "' , '" . $this->attribute['zip'] . "', '" . date('Y-m-d H:i:s') . "', '" . date('Y-m-d H:i:s') . "') ";
            
            $this->dbConnection->query($query);
            if ($this->dbConnection->affected_rows > 0) {
                return $this->dbConnection->insert_id;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();            
            exit();
        }
    }

    private function getErrorMsg($field) {
        $errorArray = array(
                            'name' => 'Name field should not be blank',
                            'username' => 'Username field should not be blank',
                            'password' => 'Password field should not be blank',
                            'confirm_password' => 'Confirm Password field should not be blank',
                            'zip' => 'Zip code field should not be blank'
                        );
        return $errorArray[$field];
    }
    private function preparedErrorMsgHTML($errorArray) {
        $error='<ul>';
        foreach ($errorArray as $key => $value) {
            $error.='<li>- '.$value.'</li>';
        }
        $error.='</ul>';
        return $error;
    }
    
    private function createDBConnection(){
        global $dbConnection;
        $mysqlDb = new Mysqli('127.0.0.1', 'root', '', 'tagrem_db', 3306);
        if ($mysqlDb->connect_errno) {
            die('Connect Error: ' . $mysqlDb->connect_error);
        }
        $mysqlDb->set_charset("utf8");
        $dbConnection=$mysqlDb;
        $this->dbConnection=$mysqlDb;
    }
}

?>
