<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
      <style>
   
      </style>
   </head>
   <body>
      <div class="container">
     
      <div class="form-card">
      <?php echo form_open();?>
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="conform_password" placeholder="confirm password" name="conform_password">
               </div>
               <div class="form-group">
               <input type="text" id="datepicker" class="form-control" placeholder="DOB" name="dob">
               </div>
        <center>
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="1" name="gender">Male
                  </label>
               </div>
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="2" name="gender">Female
                  </label>
               </div>
        </center>
               <div class="card">
                  <div class="card-header bg-danger">Hobby</div>
                  <div class="card-body">
                     <ol id='#ol'>
                        <input type="text" id="hobby" class="hobby" name='hobby[]' placeholder="Hobby">
                     </ol>
                  </div>
                  <div class="card-footer">
                    <button id="btn2" type="button" class="btn btn-sm btn-danger">+1</button>
                  </div>

               </div>
               <br>
               <a href="<?php echo base_url();?>index.php/BaseController/signin/" style="color:red;">Already registered?? SignIn..</a>
               <button class="btn btn-danger" type="submit" name="signup">SignUp</button>
         
               <?php echo form_close();?>
            </div>
         </div>
      </div>

<script>
$("#commentForm").validate();
</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>assets/script.js"></script>
     
      <script>
         $(document).ready(function(){
             $("#btn2").click(function(){
                 $("ol").append("<input type='text' name='hobby[]' id='hobby' class='hobby' placeholder='Hobby'>");
             });
         });
      </script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
    
   </body>
</html>