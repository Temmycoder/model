<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .box{
            border-radius: 7px;
            font-size: 20px;
            padding: 40px 30px 30px 30px;
            border: none;
            background-color: #eee;
            text-align: left;
        }
    </style>
</head>
<body class="mb-5">
    <main>
        <?php include('includes/header.php');?>

        <div class="row mt-5">
            <div class="col-md-3"></div>

            <div class="box col-md-6">
            <h4 class="text-center">Contact Us</h4>

                <form method="post">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required><br>
                    <label>Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required><br>
                    <label>Message:</label>
                    <textarea rows="5" name="text" class="form-control">Hello, </textarea>
                    <div class="text-center mt-5">
                        <input type="submit" name="contact" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/script.min.js"></script>
</body>
</html>