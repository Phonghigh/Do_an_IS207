<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Web bán hàng</title>
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
            // echo $_SESSION['dangky'];
            include("admincp/config/connect.php");
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/footer.php");
        ?>
        
    </div>
</body>
</html>