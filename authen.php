<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "";
    $password = "";


    $check_username = preg_match_all("/^[A-Za-z]+$/", $_POST["USER"]);
    //atleast one letter and one digit 
    //minimum length of 8 character
    $check_password = preg_match_all("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $_POST["PASS"]);


    if ($check_username && $check_username) {
        $username = $_POST["USER"];
        $password = $_POST["PASS"];
        //Fetchi throught database 
        include "config.php";
        $query = "SELECT * FROM admin";
        $result = mysqli_query($conn, $query);
        session_start();
        $_SESSION["user_name"] = $username;
        while ($row = mysqli_fetch_array($result)) {
            if ($row['username'] == $username && $row['password'] == $password) {
                
                header("Location: admin_home.php");
            } else {
                header("Location: login.php?message=Invalid Login");
            }
        }
    }
    else{
        header("Location: login.php?message=Invalid Login or Invalid Entry");
    }
}
