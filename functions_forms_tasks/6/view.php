
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

        <?php include('controller.php') ?>

    </div>


    <div>



        <p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

    <form method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile">
        <input type="submit" name="Загрузить">
    </form>

        <?php

        $tmp_file = basename($_FILES['uploadfile']['tmp_name']);
        $orig_file = $_FILES['uploadfile']['name'];
        copy ($_FILES['uploadfile']['tmp_name'],"gallery/".$orig_file);

        ?>

    </div>


    <?php
    $images = gallery_view();
    //print_r ($images);

    $img = "gallery\\";

      $column = 3;
        $rows = 4;
      $i=0;
      $b=0;
$count = count($images);

    $image_count = '2';


            //      if ($value !== "." and $value !== "..")


    echo "<table>";

    for ($i=0; $i<=$rows; $i++) {
        echo "<tr>";

        for ($b = 0; $b <= $column; $b++) {

            if ($image_count < $count) {

                    echo "<td>";
                    echo " <a href=\"gallery.\\$images[$image_count]\"  target=\"_blank\"><img style='margin: 10px';  src=\"gallery.\\$images[$image_count]\" width=\"200px\" height=\"200px\"></a>";
                    echo "</td>";
                    $image_count++;

                }

            }

            echo "</tr>";
        }

    echo "</table>";





    ?>

    <div>


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
