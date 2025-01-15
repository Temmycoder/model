<?php
    include("includes/connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="dashboard.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
</head>
<body>
    <?php include('includes/header.php');?>
    <main>
        <h2 class="my-5 text-center">OUR MODELS</h2>
        <?php
            $sql = "SELECT * FROM model_tbl ORDER BY id desc";
            $result = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($result) > 0){
                 
                echo "<table>";
                    echo "<thead>
                        <tr>
                            <th>Name</th>
                            <th>Nickname</th>
                            <th>Email</th>
                            <th>gender</th>
                            <th>Votes</th>
                            <th>Joined</th>
                        </tr>
                    </thead>";

                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tbody>
                            <tr>
                                <td>".$row['full_name']."</td>
                                <td>".$row['username']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['gender']."</td>
                                <td>".$row['votes']."</td>
                                <td>".$row['created_time']."</td>
                            </tr>
                        </tbody>";
                    }
                echo "</table>";
            }
            else{
                echo"No results found!!";
            }
        ?>
    </main>
</body>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>