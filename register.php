<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
    <form method="post" action="register.php" class="form">
        <h1>Register form</h1>

        Username: <input type="text" name="username" value="" required>

        Password: <input type="text" name="password" value="" required/>

        Email: <input type="email" name="email" value="" required/>

        Phone: <input type="text" name="phone" value="" required/>

    <input type="submit" name="dangky" value="REGISTER"/>
</div>

<?php require 'xuly1.php';?>
</form>

</body>
</html>