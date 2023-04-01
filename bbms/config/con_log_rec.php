<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>

<?php
$conn = new mysqli("localhost","root","","config");
if($conn)
{
    
}
else
{
echo "sorry connection not connected successfully";
}
if(isset($_POST['rlogin'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM reg_rec WHERE email='"
    . $_POST["remail"] . "' AND
    pass='" . $_POST["rpassword"] . "'    ");
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        echo "<script>location.href='../rec.php'</script>";
    }
    else {?>
    <div>
    <h5 class='my-3'>Account not found</h5>
    <a href="../regrec.php" class="btn btn-info btn-block mb-4">Register</a>
    <a href="../logrec.php" class="btn btn-primary btn-block mb-4">Login</a>
    <br>
    <a href="../index.php" class="btn btn-warning btn-block mb-4">Home</a>
    </div><?php
}}
?>












