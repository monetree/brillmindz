<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

      <style>
      pre{
          background:#dc3545;
          color:white;
          font-weight:bold;
          border-radius:12px;
      }
      h5,h1{
          color:#dc3545;
          text-align:center;
      }
      </style>
   </head>
   <body>
   <div class="container">
   <div class="row">
         <div class="col-sm-4">
        <h5>assigned by => MANIKANDAN K</h5>
        <h5>assigned to => soubhagya </h5>
        <h5>duration: 25 june 2018 - 28 june 2018</h5>
        </div>
        <div class="col-sm-4">
        <h1>BRILL MINDZ</h1>
        </div>
        <div class="col-sm-4">
        <h5>Resolution => Resolved</h5>
        <h5>submitted on => 26 june 2018 </h5>
        </div>
   </div>
<pre>


    please read before start..



            Tasks:
            Do a sign in, sign up, logout and user list page with back end integration using 
            codeigniter. 

            Task 1: 
            Sign Up Form inputs: name, email-id, password,  confirm password, DOB, Gender, 
            Hobbies.Sign In Form inputs: email-id, password

            User can choose n number of hobbies.

            Task 2:
            Form validation need to be done both in front end and in back end. Front end 
            validation need to be done using jquery and javascript. And Back end validation 
            need to be done in codeigniter.

            Task 3:
            Implement normalization in database.

            Task 4:
            List all users, and have edit and delete option. The user can edit and delete only
            his data.

            Task 5:
            Implement pagination with search in user list.


        Note: use your own database username and password to access this site otherwise it will show error..
        database is available in the root directory of project


                technologies used:
                1:php
                2:html
                3:css
                4:javascript
                5:jquery
                6:bootstrap 4


                pages urls:
                1: http://[::1]/brillmindz/index.php/BaseController/index
                2: http://[::1]/brillmindz/index.php/BaseController/signup
                3: http://[::1]/brillmindz/index.php/BaseController/signin
                4: http://[::1]/brillmindz/index.php/BaseController/records


                user cant access (http://[::1]/brillmindz/index.php/BaseController/records) this page unless he logged in to account.for login he need to signup first.
                all details is available in this page

                for test login (
                username: soubhagyakumar666@gmail.com
                password: THinkonce
                );
                use these credientials for see records without signup

                after login if user will again go to (http://[::1]/brillmindz/index.php/BaseController/signin) page he will again redirect to records page . because he is already logged in.


</pre>
</div>
</body>
</html>