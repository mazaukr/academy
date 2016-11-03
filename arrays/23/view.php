<?php include("controller.php") ?>
<?php include ('23.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=https://getbootstrap.com/favicon.ico">

    <title>Form Test</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com//assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/examples/sticky-footer/sticky-footer.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://getbootstrap.com//assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com//assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><a href="/">Form</a></h1>
    </div>


    <div>
        <p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
            пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
            2, 3, т. е. 6.</p>
        <form method="get">
            Digits: <input type="text" class="form-control"  placeholder="Your Digits" name="name" value="<?php $_GET['name']?>">
            Sum of each yours digit:: <input type="text"  class="form-control"  name="sum" value="<?php $_GET['sum']?>">
 <!--           Price: <input type="text"   placeholder="0" class="form-control" name="price" value="<?php $_GET['price']?>">-->
            <input type="submit" value="Send">
        </form>

            Result: <input type="text"  class="form-control"  name="sum" value="<?php echo "$sum";?>">




    </div>



</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">phpAcademy</p>
    </div>
</footer>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
