<?php 
include('dbtool.php');
$InputEmail1 = $_POST["InputEmail1"];
$InputPassword1 = $_POST["InputPassword1"];
$InputPassword2 = $_POST["InputPassword2"];
echo "$InputEmail1 </br>";
echo "$InputPassword1</br>";
echo "$InputPassword2</br>";

if ($InputPassword1 != $InputPassword2) {
    echo "<script>alert('警告：請重新註冊'); location.href = 'index.php';</script>";
}
?>