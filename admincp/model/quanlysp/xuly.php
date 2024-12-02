<?php
include("../../config/connect.php");
// echo"thành công";

if (isset($_POST['themsanpham'])) {
    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    //Xử lý hình ảnh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."' )";
    mysqli_query($conn, $sql_them);
    header('Location:../../index.php?action=quanlysanpham');
}

// elseif (isset($_POST['suasanpham'])) {
//     $id_danhmuc_sua = $_GET['id_danhmuc'];
//     $tendanhmuc_sua = $_POST['tendanhmuc_sua'];
//     $thutu_sua = $_POST['thutu_sua'];
//     $sql_sua = "UPDATE tbl_danhmuc
//                 SET tendanhmuc='{$tendanhmuc_sua}', thutu = {$thutu_sua}
//                 WHERE id_danhmuc={$id_danhmuc_sua};";
//     mysqli_query($conn, $sql_sua);
//     header('Location:../../index.php?action=quanlydanhmucsanpham');
// }

elseif (isset($_GET['query']) == 'xoa') {
    $id_sanpham = $_GET['id_sanpham'];
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham=".$id_sanpham."";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham');
}
?>