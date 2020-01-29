<?php

class haris{

public $hostname = "localhost";
public $root="root";
public $pswd="";
public $Dbn="haris";
public $con="";

public function MakeConnection()
{

    try {
        $this->con=mysqli_connect($this->hostname,$this->root,$this->pswd,$this->Dbn);
       // echo "Connected";
    }catch (mysqli_sql_exception $e)
    {
      //  echo "Not Connected";
        $e->getMessage();
    }
return $this->con;

}



public function insert($name,$age)

{

$con =$this->MakeConnection();

$query="insert into haris(name,age) values('$name',$age)";

$res=mysqli_query($con,$query);

return $res;
}



public function show()
{

$con=$this->MakeConnection();


$query="select * from haris";

$res=mysqli_query($con,$query);

return $res;

}



public function iddelete($id)
{

$con=$this->MakeConnection();

$query="delete from haris where id=$id";

$res=mysqli_query($con,$query);

return $res;

}













public function update($id,$name,$age)
{

$con=$this->MakeConnection();

$query="update haris set name='$name', age=$age where id=$id";

$res=mysqli_query($con,$query);

return $res;

}



public function viewSpecificData($id)
{

 $con=$this->MakeConnection();

$query="select * from haris where id = $id";

$res=mysqli_query($con,$query);

return $res;
}















}

?>