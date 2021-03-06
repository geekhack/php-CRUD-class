<?php
include('connection.php');


class User extends Connection 
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
  $value=implode(',',$enteredarray);
  return $value;
}
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
   Connection::getConnection();

   $q="INSERT INTO ".$this->getTable()."(".$this->getColumns().") VALUES('".$this->getValu()."')";
   $r=mysql_query($q) or die("oops".mysql_error());
   if(!$r)
   {
    echo "failed".mysql_error();
   }
   else
   {
    echo "Record successfully inserted";
   }
   
 } 
 //retrieving all the details from the table specified 
 public function selectUser()
 {
   Connection::getConnection();
   $q="SELECT * FROM ".$this->getTable()."";
   $r=mysql_query($q);
   if($r){

  //get the columns and the values
   $s=array();
  //loop through the rows   
   while($rows=mysql_fetch_array($r))
    { 
      $s[]=$rows;

    } 
    return $s;           
    }
      
 }
 //retrieving details from the table using the where clause

 public function selectUser2()
 {
    Connection::getConnection();

    $q="SELECT * FROM ".$this->getTable()." WHERE ".implode(',',$this->getColumns()."=".$this->getValu())."";
    $r=mysql_query($q);

    if($r){

      $s=array();
      while ($rows=mysql_fetch_array($r))
       {
         $s[]=$rows;
       }
       return $s;
      }
  }

 

 public function updateUser()
 {
   Connection::getConnection();

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
   Connection::getConnection();
   
   $q="DELETE FROM ".$this->getTable()." WHERE ".$this->getColumns()."=".$this->getValu()."";
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




?>