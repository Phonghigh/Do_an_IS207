<div class="main">
    <?php
    include("../pages/sidebar/sidebar.php");
    ?>
    <div class="maincontent">
        <?php
        if(isset($_GET["quanly"])){
            $pages = $_GET["quanly"];
        }
        else{
            $pages = '';
        }
        if ($pages =='danhmucsanpham'){
            include('../pages/main/danhmucsanpham.php');
        }
        elseif ($pages == 'giohang'){
            include('../pages/main/giohang.php');
        }
        elseif ($pages == 'tintuc'){
            include('../pages/main/tintuc.php');
        }
        elseif ($pages == 'lienhe'){
            include('../pages/main/lienhe.php');
        }
        else{
            include('../pages/main/index.php');
        }
        ?>
            
    </div>
</div>