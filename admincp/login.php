<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tendanhmuc = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    echo "Tên danh mục: " . htmlspecialchars($tendanhmuc) . "<br>";
    echo "Thứ tự: " . htmlspecialchars($thutu);
} else {
    echo "Phương thức không hợp lệ.";
}
?>
