<?php
$conn = new mysqli("localhost","root","","config");
if($conn)
{
    
}
else
{
echo "sorry connection not connected successfully";
}
if(isset($_REQUEST['hregister']))
{
    echo "Hii";
    $name=$_REQUEST['hname'];
    $city=$_REQUEST['hcity'];
    $phone=$_REQUEST['hphone'];
    $email=$_REQUEST['hemail'];
    $password=$_REQUEST['hpassword'];



    $sql="INSERT INTO reg_hos(name, city, no, email, pass)
         values('$name', '$city', '$phone', '$email','$password')";
    $conn->query($sql);
    echo "<script>location.href='../loghos.php'</script>";
}

?>
