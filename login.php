<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<style>
    body{
    background-color: rgb(16, 32, 51);
    color: white;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
div{
    margin: 10px;
}
.login{
    margin-top: 150px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgb(4, 3, 5);
    margin-left: 400px;
    margin-right: 400px;
    border-radius: 30px;
    box-shadow: rgb(106, 31, 31) 5px 5px 50px;
}
.submit{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    
}
.btn{
    font-size: 15px;
    padding: 6px;
    border-radius: 10px;
    background: linear-gradient(to right,black,rgb(50, 48, 61));
    color: aliceblue;
    border-color: black;
    cursor: pointer;
}
.btn:hover{
    transform: translateY(4px);
}


.errmsg{
    color: red;
}
</style>

<?php

    $msg = @$_GET["message"];

?>
<body>

    <div class="login">
        <div class="head">Admin Login</div>
        <div class="head2">
            <form action="authen.php" method="post">
                <div class="username">Username</div>
                <div class="username_input"><input class="btn" type="text" name="USER" id=""></div>
                <div class="password">Password</div>
                <div class="password_input"><input class="btn" type="password" name="PASS" id=""></div>
                <div class="submit"><input class="btn" type="submit" value="Submit"></div>
                <div class="errmsg"><?php echo $msg; ?></div>
            </form>
        </div>
    </div>
</body>
</html>