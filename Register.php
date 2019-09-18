<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Php Demo</title>
    
</head>
<body>
<form action="validate.php" method="post">
        <div class="form-group">
      <input class="form-control" name="username" type="text" placeholder="Enter your UserName" />
      </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Enter your password"  name="password"/>
      </div>
      <div class="form-group">
      <input class="btn btn-warning" type="submit" value="Register" />
      </div>
    </form>

</body>
</html>