<?php
$dbms = 'mysql';
$host = 'localhost';
$dbName = 'database';
$user = 'root';
$pass = '';
$dsn = "$dbms:host=$host;dbname=$dbName";


try {
    $connection = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    echo "連線成功<br/>";
    $connection = null;
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
