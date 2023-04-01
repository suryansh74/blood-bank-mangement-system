<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tab-pane container active">
    <h2 class='my-3'>Reciever Login</h2>
         <form action="config/con_log_rec.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Email</label>
          <input type="email" name="remail" placeholder="User Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Password</label>
          <input type="password" name="rpassword" placeholder="User Password" class="form-control mb-4">
          <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
          <a href="regrec.php" class="btn btn-info btn-block mb-4">Register</a>
        </form>
        <a href="index.php" class="btn btn-warning btn-block mb-4">Home</a>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>