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
	<h1>Student Details</h1>

<div>
	<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">home</a>
</nav>
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('')?>index.php/admin/insert" >Add Student</a>
</nav>
</div>
<div class="container">
	<form action="<?php echo base_url('')?>index.php/admin/insert" method="POST">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">city</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   <?php
if(count($result)) {
$cnt=1;
foreach ($result as $row){
?>
<tr>
<td><?php echo ($row->id)?></td>
<td><?php echo ($row->name)?></td>
<td><?php echo ($row->email)?></td>
<td><?php echo ($row->mobile)?></td>
<td><?php echo ($row->city)?></td>
<td>
	 <button type="button" class="btn btn-danger"> <a href="<?php echo base_url()?>index.php/admin/update/<?php echo $row->id ?>">update </a></button>
  <button type="button" class="btn btn-secondry"><a href="<?php echo base_url('')?>index.php/admin/delete?id=<?php echo $row->id ?>">delete</a></button>
  
</td>


  


</tr>




<?php
$cnt++;
} // end foreach
} else { ?>
<tr>
<td colspan="7">No Record found</td>
</tr>
<?php
}
?>

  </tbody>
</table>
</form>
</div>
</body>
</html>