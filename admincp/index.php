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
            include("../admincp/config/connect.php");
            include("../admincp/model/header.php");
            include("../admincp/model/menu.php");
            include("../admincp/model/main.php");
            include("../admincp/model/footer.php");
        ?>
        
    </div>
</body>
</html>