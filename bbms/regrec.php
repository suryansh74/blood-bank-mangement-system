<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="tab-pane container active" id="hospitals">
    <h2>Reciver Register</h2>
        <form action="config/con_reg_rec.php" method="post" enctype="multipart/form-data">
            <input type="text" name="rname" placeholder="User Name" class="form-control mb-3" required>
            <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <input type="text" name="rcity" placeholder="User City" class="form-control mb-3" required>
            <input type="tel" name="rphone" placeholder="User Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
            <input type="email" name="remail" placeholder="User Email" class="form-control mb-3" required>
            <input type="password" name="rpassword" placeholder="User Password" class="form-control mb-3" required minlength="6">
            <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
          <a href="logrec.php" class="btn btn-info btn-block mb-4">Login</a>
        </form>
        <a href="index.php" class="btn btn-warning btn-block mb-4">Home</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js
"></script>
    </body>
</html>