<?php
    $sql_lietke_sp ="SELECT * FROM tbl_sanpham";
    $row_lietke_sp = mysqli_query($conn,$sql_lietke_sp)
?>

<h3>Danh mục sản phẩm: </h3>
<div class="grip_container_maincontent">
    
        <?php
        while($row= mysqli_fetch_array($row_lietke_sp)) {
            echo "
            <div class='grip_item_maincontent'>
                <img src='admincp/model/quanlysp/uploads/".$row['hinhanh']."' alt='".$row['hinhanh']."'>
                <a href='?quanly=chitietsanpham&id=".$row['id_sanpham']."'>
                <p>{$row['tensanpham']}</p>
                <p class='price'>{$row['giasp']}đ </p>
                </a>
            </div>";
        }
        ?>
</div>