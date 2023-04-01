<?php
$connection = new mysqli("localhost", "root", "", "config");
if($connection)
{}
else
{echo "sorry connection not connected successfully";}

$id = $_GET['id'];
$sql = "SELECT * FROM donar WHERE id=$id";
$result = $connection->query ($sql);
$row = $result->fetch_assoc();

?>

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
<form method="POST" enctype="multipart/form-data" class="container my-3">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Add-Details</label>
    <input type="details" name="details" class="form-control" value="<?php echo "$row[details]" ?> " aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $connection = new mysqli("localhost", "root", "", "config");
    if($connection)
    {}
    else
    {echo "sorry connection not connected successfully";}
    $details=$_POST['details'];
    echo $details;
    echo $id;
     $sql="UPDATE donar " .
        "SET details = '$details' ". " WHERE id= $id ";
    $result = $connection->query($sql);
    echo "<script>location.href='add_info.php'</script>";
}
?>