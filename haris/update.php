<?php

include 'dal.php';
$obj=new haris();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<?php
 
 if(isset($_GET['idupd']))
 {
 	
   $idupd=$_GET['idupd'];
 
   $res=$obj->viewSpecificData($idupd);

if(mysqli_num_rows($res) > 0)
		{
			$row = mysqli_fetch_assoc($res);
			?>
		
<div class="container">
	
<div class="row">
	
	<div class="col-md-8">
	
	<form action="controler.php" method="post">
	
	<div class="form-group">
	

   <!-- <label for="ID">ID:</label><br> -->
<input type="hidden" value="<?php echo $row['id'];?>" name="id" class="form-control">

  <br>
		
    <label for="Name">Name:</label><br>
     <input type="text"  value="<?php echo $row['name'];?>" name="name" class="form-control">
   
             <br>
<label for="Name">age:</label><br>
<input type="text" value="<?php echo $row['age'];?>" name="age" class="form-control"><br>

<button type="submit" name="update" class="btn btn-success">UPDATE</button>

</div>
</form>
<?php

}

}


?>

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