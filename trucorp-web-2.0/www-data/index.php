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

    $query="SELECT * FROM users";
    $conn = $connection->query($query);
    
        ?>
            <table>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Kantor (Cabang/Pusat)</th>
                </tr>
                <?php
                while($data=$conn->fetch_assoc()){
                ?>
                <tr>
                    <th><?=$data=['id']?></th>
                    <th><?=$data=['Nama']?></th>
                    <th><?=$data=['Kantor(Pusat/Cabang)']?></th>
                </tr>
                <?php
                }
                ?>
        <?php
    
?>
    
</body>
</html>