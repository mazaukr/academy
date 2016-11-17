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

<h2>Lists of entry</h2>

        <?php
        if ($_SESSION['guest_list'] !=='') {
            foreach ($_SESSION['guest_list'] as $key => $value) {

                foreach ($value as $key2 => $value2) {
                    echo $value2;
                    echo "=>";
                    echo $value2;
                }
            }
        }
?>


    </div>



    <div>
        <!--                <form method="post">
                        Name: <input type="text" class="form-control" praceholder="Name..." name="name" />
                        Count: <input type="text" class="form-control" praceholder="0" name="count" />
                        Price [$/h]: <input type="text" class="form-control" praceholder="0" name="price"  />
                        <input type="submit" value="Send">
                </form>-->


                        <form method="post">
                        Name: <input type="text" class="form-control" praceholder="Name..." name="name" value="<?php  echo ($_POST['name']='')?>"/>
                        Count: <input type="text" class="form-control" praceholder="0" name="count" value="<?=$_POST['count']=''?>"/>
                        Price: <input type="text" class="form-control" praceholder="0" name="price"  value="<?=$_POST['price']=''?>"/>
                        Sum: <input type="text" class="form-control" praceholder="0" name="sum"  value="<?=$_POST['sum']=''?>"/>

                        <input type="submit" name="action" value="Add">
                </form>


    </div>


    <?php

    ?>

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
