<?php
    if(isset($_POST["dangky"])) {
    $tenkhachhang = $_POST["tenkhachhang"];
    $email = $_POST["email"];
    $dienthoai = $_POST["dienthoai"];
    $diachi = $_POST["diachi"];
    $password = md5($_POST["password"]);
    $repassword = md5($_POST["repassword"]);
    if ($password != $repassword) {
        echo"<script>alert ('Mật khẩu không khớp nhau') </script>";
    }
    else {
        $sql_dangky = mysqli_query($conn,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE ('{$tenkhachhang}','{$email}','{$diachi}','{$password}','{$dienthoai}')" );
        if ($sql_dangky) {
        echo"<script>alert ('Bạn đã đăng ký thành công') </script>";
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id( $conn );

        if (isset($_GET['giohang'])){
            header('Location: index.php?quanly=giohang');
            }else{ 
                // echo'helllo';
            header('Location: index.php');
            }
        }
    }
}
?>

<div class="form-container">
    <h2 style="text-align: center;">Register</h2>
    <form method="POST">
        <input type="text" name ="tenkhachhang" placeholder="Full Name" required>
        <input type="email" name ="email" placeholder="Email" required>
        <input type="text" name ="dienthoai" placeholder="Điện Thoại" required>
        <input type="text" name ="diachi" placeholder="Địa chỉ" required>
        <input type="password" name ="password" placeholder="Password" required>
        <input type="password" name="repassword" placeholder="Confirm Password" required>
        <input type="submit" value="Đăng Ký" name="dangky">
        <!-- <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p> -->
    </form>
</div>