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
  <style>
      thead{
          background:#dc3545;
      }
      a{
        color:#dc3545;
        font-weight:bold;
      }
      h2{
        color:#dc3545;
        text-align:center;
      }

      </style>

</head>
<body>
<a href="<?php echo base_url();?>index.php/BaseController/logout">
<h3 style="float:right;color:#dc3545;">logout??  &nbsp&nbsp</h3>
</a>
<div class="container">
  <h2>TOTAL RECORDS : =><?php if(isset($total)){echo $total;}?></h2>
  <form class="form-inline" action="<?php echo base_url();?>index.php/BaseController/records/" method="post">
    <input type="text" class="form-control" id="pwd" placeholder="Search here" name="search">
    <button type="submit" class="btn btn-danger" name="search_btn">Search..</button>
  </form>
  <a href="<?php echo base_url();?>index.php/BaseController/records/"><button type="submit" class="btn btn-danger" name="button" style="float:right;">Show all Records</button></a>
  <table class="table">
    <thead>
      <tr>
        <th>SLNO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Gender</th>
        <th>Hobby</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
$i = 1;
foreach($records->result() as $row)
{
 ?>

 <?php
 $id=$user_id;
 if($id == $row->user_id){
   ?>
   <tr>
     <td style="background:cyan;"><?php echo $i;?></td>
     <td style="background:cyan;"><?php echo ucfirst($row->name);?></td>
     <td style="background:cyan;"><?php echo ucfirst($row->email);?></td>
     <td style="background:cyan;"><?php echo ucfirst($row->dob);?></td>
     <td style="background:cyan;">
       <?php
      $gender =$row->gender;
      if($gender == 2){
        echo "female";
      }else{
        echo "male";
      }
        ?>
     </td>
     <td style="background:cyan;"><a href="http://[::1]/brillmindz/index.php/BaseController/hobby/<?php echo $row->user_id;?>/"><button type="button" id="hobby_button" class="btn btn-sm btn-danger">See hobby</button></a></td>
     <td style="background:cyan;"><a href="http://[::1]/brillmindz/index.php/BaseController/update/<?php echo $row->user_id;?>">Update</a>&nbsp
       <a href="http://[::1]/brillmindz/index.php/BaseController/delete/<?php echo $row->user_id;?>">Delete</a></td>
   </tr>
   <?php
 }else{
 ?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo ucfirst($row->name);?></td>
        <td><?php echo ucfirst($row->email);?></td>
        <td><?php echo ucfirst($row->dob);?></td>
        <td style="background:cyan;">
          <?php
         $gender =$row->gender;
         if($gender == 2){
           echo "female";
         }else{
           echo "male";
         }
           ?>
        </td>
        <td><a href="http://[::1]/brillmindz/index.php/BaseController/hobby/<?php echo $row->user_id;?>/"><button type="button" id="hobby_button" class="btn btn-sm btn-danger">See hobby</button></a></td>
        <td><strong>Read Only</strong></td>
      </tr>
      <?php
    }
$i++;
  }
 ?>
    </tbody>
  </table>
  <div class="card">
  <div class="card-header">
  <?php
echo "<h3 style=color:#0099ff;text-align:center;letter-spacing:10px;>".$paginations."</h3>";
 ?>
   </div>
     </div>

</div>
</body>
</html>
