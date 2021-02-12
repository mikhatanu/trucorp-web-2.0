<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('database_config.php');

    $connection = new mysqli($server_address, $username, $password, $database);
    if($connection->connect_error){
        die('Connection failed: ' . $connection->connect_error);
    }

    $query="SELECT COUNT(*) FROM users";
    $conn = $connection->query($query);
    $data = $conn->fetch_array()
        ?>
            <table>
                <tr>
                    <th>Jumlah User</th>
                </tr>

                <tr>
                    <th><?php $data[1]?></th>

                </tr>
              
    
</body>
</html>
