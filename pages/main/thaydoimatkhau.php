<?php
if(isset($_POST['thaydoimatkhau'])){
        echo"{$_SESSION['email']} thanfh coogn";
        // $username = $_POST['username'];
        $password = md5($_POST['password']);
        $new_password = md5($_POST['new_password']);
        if ($password != $new_password) {
            echo"<script>alert ('Mật khẩu không khớp nhau') </script>";
        }
        else {
            $sql = "SELECT * FROM tbl_dangky WHERE email='".$_SESSION['email']."' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_assoc($result);
            $sql_update = "UPDATE tbl_dangky SET matkhau='".$password."' WHERE email ='".$_SESSION['email']."' ";
            $result = mysqli_query($conn, $sql_update);
            // header("Location: index.php");
        }
    }
?>

<div class="container">
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" id="login-form">
            <input type="password" placeholder="password" name="password" required>
            <input type="password" placeholder="re password" name="new_password" required>
            <input type="submit" value="Đổi mật khẩu" name="thaydoimatkhau">
        </form>
    </div>
</div>