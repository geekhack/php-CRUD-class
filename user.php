/*
   @Rafael Wanjiku
*/
<?php

//include the autoload for the classes
class User
{
  public $user;
  public $tablename;
  public $columns=array();
  public $valu=array();
  public $id;
  

public function setId($id)
{
  $this->id=$id;
}
public function getId()
{
  return $this->id;
}
  
public function setTable($tablename)
{
  $this->tablename=$tablename;
}
public function getTable()
{
  return $this->tablename;
}
public function setColumns($columns)
{
 $this->columns=$columns;
}

public function getColumns()
{ 
  $enteredarray=$this->columns;
  //$enteredarray=array('fname','lname');
  $value=implode(',',$enteredarray);
  return $value;
}
//
public function setValu($valu)
{
  $this->valu=$valu;
}
public function getValu()
{ 
  $earray=$this->valu;
  $val=implode("','",$earray);
  return $val;
  
}
 public function insertUser()
 {
   mysql_connect("localhost","root","") or die("could not connect to the server");
   mysql_select_db("school");
   $q="INSERT INTO ".$this->getTable()."(".$this->getColumns().") VALUES('".$this->getValu()."')";
   $r=mysql_query($q);
   if(!$r)
   {
    echo "failed".mysql_error();
   }
   else
   {
    echo "Record successfully inserted";
   }
   //$this->user=$user;  
 } 
 //creating the retrieve query
 public function selectUser()
 {
   
   
 }
 public function updateUser()
 {
   mysql_connect("localhost","root","") or die("could not connect to the server");
   mysql_select_db("school");
   
   $q="UPDATE ".$this->getTable()." SET ".$this->getColumns()."='".$this->getValu()."' WHERE ".$this->getColumns()."='".$this->getId()."'";
   $r=mysql_query($q);
   if(!$r)
   {
    echo "failed".mysql_error();
   }
   else
   {
    echo "Record updated successfully";
   }
 
 }
 
 public function deleteUser()
 {
   mysql_connect("localhost","root","") or die("could not connect to the server");
   mysql_select_db("school");
   
   $q="DELETE FROM ".$this->getTable()." WHERE ".$this->getColumns()."='".$this->getId()."'";
   $r=mysql_query($q);
   if(!$r)
   {
    echo "failed".mysql_error();
   }
   else
   {
    echo "Record Deleted successfully";
   }
 
 }
}

$tablempya=new User();
$tablempya->setTable('foods');
$tablempya->getTable();
//getting the table columns from a fixed code
$items=array('foodname');
$tablempya->setColumns($items);
$tablempya->getColumns();
$tablempya->setId('chapati');
$tablempya->getId();
/*getting the columns values for the table for input
$vitu=array('chapati','round with sweet eyes','starchy','20','13000');
$tablempya->setValu($vitu);
$tablempya->getValu();
*/
//insert the data into the database

$tablempya->deleteUser();


?>