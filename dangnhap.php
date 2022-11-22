<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangnhap.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="conten">
       <img src="2.jpg">
       <div class="container">
       <h1>LOGIN</h1>
             <form action="xuly.php" method="Post">
                 <div class="input-form">
                     <span>Tên Người Dùng</span></br><br>
                     <input type="text" name="username"required=""/>
                 </div>
                 <div class="input-form">
                     <span>Mật Khẩu</span></br><br>
                     <input type="password" name="password" required=""/>
                 </div>
                 <div class="nho-dang-nhap">
                     <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                 </div>
                 <div class="input-form">
                     <input type="submit" value="Đăng Nhập">
                 </div>
                 <div class="input-form">
                     <p>Bạn Chưa Có Tài Khoản? <a href="register.php">Đăng Ký</a></p>
                 </div>
             </form>
       </div>
    </div>
</body>
</html>