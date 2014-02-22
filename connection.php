<?php

class Connection{
	
  public $host='localhost';
  public $username='root';
  public $password='';
  public $dbname='users';
  protected $serverconnect;
  protected $dbconnect;

  public function getConnection(){

    $this->serverconnect=mysql_connect($this->host,$this->username,$this->password);

    if(!$this->serverconnect)
    {
    	echo 'could not connect to the specified server';

    }
    else if($this->serverconnect)
    {
        $this->dbconnect=mysql_select_db($this->dbname);
        if(!$this->dbconnect)
        {
        	echo 'could not connect to the specified database';
        }  
    }
    else{
    	return $this->serverconnect;

    }
  }
  


}

?>