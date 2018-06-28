<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
<div class="col-sm-4">

  <div class="card bg-danger text-white">
    <div class="card-header">
      hobbies are..
    </div>
    <div class="card-body">

      <?php
$i = 1;
foreach($rec->result() as $row)
{
 ?>
<?php echo $i.":";echo ucfirst($row->hobby)."<br>";?>
 <?php
 $i++;
}
  ?>
    </div>
  </div>

  </div>
  </div>
</div>

</body>
</html>
