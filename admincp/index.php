<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include("config/connect.php");
            include("model/header.php");
            include("model/menu.php");
            include("model/main.php");
            include("model/footer.php");
        ?>
        
    </div>
</body>
</html>