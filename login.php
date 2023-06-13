<?php
include("config/connection.php");
include("users.php");
session_start();

$user = new users();

if (isset($_POST['login'])){

    if(strlen($_POST['idemployment']) <= 2 || strlen($_POST['password']) <= 2) {
        header("location:index.php?messege=DATA YANG ANDA MASUKKAN SALAH !");
    } else {
        $user->set_login_data($_POST['idemployment'], $_POST['password']);
        $id = $user->get_idemployment();
        $password = $user->get_password();
        $sql = "SELECT * FROM users WHERE idemployment= $id AND password = '$password'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
        //data yang akan masuk kebagian dashboard
        while($row = $result->fetch_assoc()){
            $_SESSION['status'] = "login";
            $_SESSION['idemployment'] = $row['idemployment'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
        }
            if ($_SESSION['role'] == 'admin'){
            header("Location:media.php");
        } else {
            header("location:media.php");
        }
    } else {
        header("location:index.php?messege=DATA YANG ANDA MASUKKAN SALAH !");
    }
}
}

?>