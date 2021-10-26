<?php
	class DbConfig 
{   
    public $_host = 'localhost';
    public $_username = 'root';
    public $_password = '';
    public $_database = 'to_do'; 

    
    public function __construct()
    {
            
            $connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$connection) {
                    echo 'Cannot connect to database server';
                    exit;
                } 
                 else{
                    return $connection;
                }
    }
}

$connection=new DbConfig();

class UserLogin {
	function helloWorld(){
        echo "Hello world";
	}
    
}
$user= new UserLogin();

?>