<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:50px">
    <h3>Add-Blood-info</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Blood group</th>
                <th>contact no</th>
                <th>Email</th>
                <th>City</th>
                <th>Details</th>
                <th>requirement</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $connection = new mysqli("localhost","root","","config");
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            $sql = "SELECT * FROM donar";
            $result = $connection->query($sql) ;

            if (!$result) {
            die("Invalid query: " . $connection->error);
            }
            while($row = $result->fetch_assoc())
            {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["bg"]."</td>
                <td>".$row["no"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["city"]."</td>
                <td>".$row["details"]."</td>
                <td>".$row["req"]."</td>
                <td><a href='edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Add-Details</a></td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="hos-link" href="index.php">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>