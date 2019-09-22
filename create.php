<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  	  
<div class="container">
	<form action="<?php echo base_url('')?>index.php/admin/insert" method="POST">
  <fieldset>
    <legend>Student Registration </legend>
    <?php echo $this->session->flashdata('message');?>
    <?php 
    		echo validation_errors();
    		 ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" pattern="[A-Za-z\s]+" class="form-control" name="name"   placeholder="Enter Name" required >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required >
    </div>
    <div class="form-group">
      <label> Password</label>
      <input type="password" name="password" class="form-control"  placeholder="Enter Password"  required>
    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Mobile</label>
      <input type="mobile" name="mobile" class="form-control" aria-describedby="emailHelp" placeholder="Mobile" required >
    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">city</label>
      <input type="text" name="city" class="form-control" aria-describedby="emailHelp" placeholder="city" required >
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
</body>
</html>