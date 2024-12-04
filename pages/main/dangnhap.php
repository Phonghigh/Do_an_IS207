<?php
if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['Email'];
        $matkhau = md5($_POST['Password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau = '".$matkhau."' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $_SESSION['dangnhap'] = $row['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row['id_dangky'];
            $_SESSION['email'] = $row['email'];
            // echo "{$_SESSION['dangnhap']}";
            header('Location: index.php');
        }else{
            echo '<script> alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.")</script>';
        }
    }
?>

<div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form method="POST" id="login-form">
                <input type="text" placeholder="Email" name="Email" required>
                <input type="password" placeholder="Password" name="Password" required>
                <input type="submit" value="Login" name="dangnhap">
                <!-- <p>Don't have an account? <a href="#" onclick="showRegister()">Register</a></p> -->
            </form>
        </div>
    </div>