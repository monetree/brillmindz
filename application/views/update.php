<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">

   </head>
   <body>
      <div class="container">

      <div class="form-card">
        <?php echo form_open();?>
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <div class="form-group">
                 <input type="text" class="form-control" id="name" name="name" value="<?php echo $rec->row()->name;?>">
              </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $rec->row()->email;?>">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $rec->row()->dob;?>">
               </div>
               <button class="btn btn-danger" type="submit" name="update">Update</button>
            </div>
         </div>
         <?php echo form_close();?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </body>
</html>
