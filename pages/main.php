<div class="main">
    <?php
    
    ?>
    <div class="maincontent">
        <?php
        if(isset($_GET["quanly"])){
            $pages = $_GET["quanly"];
        }
        else{
            $pages = '';
        }


        if ($pages !='lienhe'){
            include("pages/sidebar/sidebar.php");
        }
        if ($pages =='danhmucsanpham'){
            include('pages/main/danhmucsanpham.php');
        }
        elseif ($pages == 'chitietsanpham'){
            include('pages/main/sanpham.php');
        }
        elseif ($pages == 'giohang'){
            include('pages/main/giohang.php');
        }
        elseif ($pages == 'dangky'){
            include('pages/main/dangky.php');
        }
        elseif ($pages == 'dangnhap'){
            include('pages/main/dangnhap.php');
        }
        elseif ($pages == 'thanhtoan'){
            include('pages/main/thanhtoan.php');
        }
        elseif ($pages == 'timkiem'){
            include('pages/main/timkiem.php');
        }
        elseif ($pages == 'camon'){
            include('pages/main/camon.php');
        }
        elseif ($pages == 'thaydoimatkhau'){
            include('pages/main/thaydoimatkhau.php');
        }
        elseif ($pages == 'lienhe'){
            include('pages/main/lienhe.php');
        }
        else{
            include('pages/main/index.php');
        }
        ?>  
    </div>
</div>