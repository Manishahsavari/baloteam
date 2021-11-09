<?php
include("database/db.php");
if(isset($_POST['sub'])){
    if(!empty($_POST['username'])){
        global $conn;
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $gt = $conn->prepare("INSERT INTO bh-use SET username=? , phone=? , email=? , password=?");
        $gt->bindValue(1,$username);
        $gt->bindValue(2,$phone);
        $gt->bindValue(3,$email);
        $gt->bindValue(4,$password);
        $gt->execute();



    }
}

?>
<form method="POST">
    <input type="text" placeholder="name" name="username">
    <input type="email" placeholder="email" name="email">
    <input type="number" placeholder="phone" name="phone">
    <input type="password" placeholder="password" name="password">
    <input type="submit" name="sub">
</form>

