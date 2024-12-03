<?php
    $id_sanpham = $_GET['id'];
    $sql_sp ="SELECT * FROM tbl_sanpham WHERE  id_sanpham = {$id_sanpham}";
    $sanpham = mysqli_fetch_assoc(mysqli_query($conn, $sql_sp));
?>

<!-- <h3>Chi tiết Sản Phẩm:</h3> -->

<div class="grid_container_sanpham">
    <div class="grid_item_sanpham">
        <img width="100%"
            src='<?php
            echo "admincp/model/quanlysp/uploads/{$sanpham['hinhanh']}";
            ?>' 
            alt="<?php
            echo $sanpham['hinhanh'];
            ?>"
        >
    </div>
    <form method="POST" action="pages/main/themgiohang.php?id_sanpham=<?php echo $sanpham['id_sanpham']?>">
        <div class="grid_item_sanpham">
            <?php
            echo 
                "<h1>{$sanpham['tensanpham']}</h1>
                <p><b>Giá sản phẩm: </b><span class='price'>";echo number_format($sanpham['giasp']); echo "đ</span> </p>
                <p><b>Mã sản phẩm: </b>{$sanpham['masp']}</p>
                <p><b>Số lượng sản phẩm: </b>{$sanpham['soluong']}</p>";
            ?>
            <p><input type="submit" name="themgiohang" value="Thêm Giỏ Hàng" class="themgiohang"></p>
        </div>
    </form>
</div>

<?php

?>