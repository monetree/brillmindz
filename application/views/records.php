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

<div class="container">
  <h2>TOTAL RECORDS</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>SLNO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Hobby</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>joh</td>
        <td>Hobby</td>
        <td><a href="#">Update</a>&nbsp<a href="#">Delete</a></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
