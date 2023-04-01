<?php
$conn = new mysqli("localhost","root","","config");
if($conn)
{
    
}
else
{
echo "sorry connection not connected successfully";
}
if(isset($_REQUEST['rregister']))
{
    echo "Hii";
    $name=$_REQUEST['rname'];
    $bg=$_REQUEST['rbg'];
    $city=$_REQUEST['rcity'];
    $phone=$_REQUEST['rphone'];
    $email=$_REQUEST['remail'];
    $password=$_REQUEST['rpassword'];



    $sql="INSERT INTO reg_rec(user, bg, city, no, email, pass)
         values('$name','$bg', '$city', '$phone', '$email','$password')";
    $conn->query($sql);
    echo "<script>location.href='../logrec.php'</script>";
}

?>
