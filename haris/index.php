<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style type="text/css" media="screen">


.col-md-12,.col-md-6{

border: 1px solid black;
    padding: 18px;
    margin: 25px;

}
	
</style>

<?php

if (isset($_GET['value'])) {
	

if($_GET['value']==='add')
{

?>

 <div class="alert alert-success alert-dismissible"><p>Data Inserted</p>
 <button type="button" class="close"><a href="index.php">&times;</a></button>
             
</div>


<?php

 }elseif ($_GET['value']==='delete') {
 	
?> 	
 
<div class="alert alert-danger alert-dismissible"><p>Data Deleted</p>
 <button type="button" class="close"><a href="index.php">&times;</a></button>
             
</div>

<?php

}elseif ($_GET['value']==='update') {
?>

<div class="alert alert-secondary alert-dismissible"><p>Data Updated</p>
 <button type="button" class="close"><a href="index.php">&times;</a></button>
             
</div>

<?php

}

}


?>


</head>

<body>
     <div class="container">
	
<div class="row">
	
<div class="col-md-12 col-sm-12">
	

<h4> Hello Haris</h4>

<a href="controler.php?value=con" role="button" class="btn btn-primary">connection</a>
        <br>

  <div class="table-responsive">
  	
  <table class="table table-hover">
  	
  	<thead class="thead-dark">
  		<tr>
  			<th>ID</th>
  			<th>NAME</th>
  			<th>AGE</th>
  			<th colspan="2">ACTIONS</th>
  		</tr>
  	</thead>
  	<tbody>

<?php

include 'dal.php';

$obj=new haris();

$res=$obj->show();

while ($row=mysqli_fetch_assoc($res)) {


?>
  		<tr>
  			<td><?php echo $row['id'];?></td>
  			<td><?php echo $row['name'];?></td>
  			<td><?php echo $row['age'];?></td>
<td><a href="update.php?idupd=<?php echo $row['id'];?>" role="button" class="btn btn-secondary">EDIT</a></td>
<td><a href="controler.php?iddel=<?php echo $row['id'];?>" role="button" class="btn btn-danger">DELETE</a></td>			
     </tr>

<?php

}

?>

</tbody>
  
 </table>

</div>




</div>

</div>


<div class="row">
	
<div class="col-md-2">
	<p>Hello Haris</p>
</div>


<div class="col-md-6">
	
	<form action="controler.php" method="post">
	
	<div class="form-group">

    <label for="Name">Name:</label><br>
     <input type="text" name="name" class="form-control" placeholder="Enter Name here" autofocus required>
   
             <br>

<label for="Name">age:</label><br>
<input type="text" name="age" class="form-control" placeholder="Enter Age Here" autofocus required><br>

<button type="submit" name="add" class="btn btn-success">ADD</button>

</div>
</form>

</div>

<div class="col-md-2">
	<h4> Hello col 4</h4>
</div>


</div>

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>
</html>
