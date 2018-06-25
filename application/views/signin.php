<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

      <style>
      body{
          background:#dc3545;
      }
      .card-header{
          color:white;
          font-weight:bold;
          font-size:25px;
      }
        .hobby{
            outline: none; 
            border-radius:3px;
            border:1px solid lightgrey;

        }
        .card-header{
            text-align:center;
        }
        .form-card{
            box-shadow:12px 15px 20px 0 rgba(46,61,73,.15);
            border:1px solid lightgrey;
            margin:20px;
            background:white;
            border-radius:10px;
            padding:20px;
        }
        .form-control{
           
            outline: none; 
        }
        .btn-danger{
            float:right;font-weight:bold;
        }
      </style>
   </head>
   <body>
      <div class="container">
     
      <div class="form-card">
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
               </div>
               <a href="<?php echo base_url();?>index.php/BaseController/signup/" style="color:red;">Not Yet registered?? SignUp..</a>
               <button class="btn btn-danger" type="submit">SignIn</button>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </body>
</html>