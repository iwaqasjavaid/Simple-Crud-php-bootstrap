<?php

include 'dal.php';

$obj=new haris();


if(isset($_GET['value']))

{

$obj->MakeConnection();

}



if(isset($_POST['add']))

{
   $name=$_POST['name'];
   $age=$_POST['age']; 

  $res=$obj->insert($name,$age);

if ($res>0) 
 {
	header('location:index.php?value=add');
}else
{

	echo "not inserted";
}



}




if (isset($_GET['iddel'])) 
{
	
$iddel=$_GET['iddel'];

$res=$obj->iddelete($iddel);


if ($res>0) {
	header('location:index.php?value=delete');

}else {

	echo "not deleted";
}



}



if (isset($_POST['update'])) {
	

$name=$_POST['name'];
$age=$_POST['age'];
$id=$_POST['id'];

$res=$obj->update($id,$name,$age);

if ($res>0) {

header('location:index.php?value=update');

}else{

	echo "not updated";
}



}
?>