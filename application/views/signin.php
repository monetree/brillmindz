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
              <?php if(isset($message)){?>
              <div class="message"><?php echo $message;?></div>
              <?php
              }
               ?>
               <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email');?>">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php echo set_value('password');?>">
               </div>
               <a href="<?php echo base_url();?>index.php/BaseController/signup/" style="color:red;">Not Yet registered?? SignUp..</a>
               <button class="btn btn-danger" type="submit" name="signin">SignIn</button>
            </div>
         </div>
         <?php echo form_close();?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </body>
</html>
