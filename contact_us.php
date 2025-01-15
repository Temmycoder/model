<?php
    include('includes/connect.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';

    if(isset($_POST['contact'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = mysqli_query($conn, "SELECT * FROM user_tbl WHERE role = 'admin'");
        $row = mysqli_fetch_assoc($sql);

    }
?>

<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">

    <style>
        .box{
            border-radius: 7px;
            font-size: 20px;
            margin: 40px 7cm 0;
            padding: 70px 30px 50px 30px;
            border: none;
            background-color: #ddd;
            text-align: left;
        }
    </style>
</head>
<body>
    <main>
        <?php include('includes/header.php');?>

        <h1 class="pt-5 text-center">Change Password</h1>
            <div class="box">
                <?php echo $error_msg; echo $success?>
                <form method="post">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required><br>
                    <label>Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required><br>
                    <label>Phone Number:</label>
                    <input type="tel" name="phone" id="phone" maxlength="16" minlength="8" class="form-control" required><br><br>
                    <div class="text-center">
                        <input type="submit" name="contact" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
    </main>

    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>