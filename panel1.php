<?php
    error_reporting(0);
    $connection = mysql_connect('localhost','root',"");
    mysql_select_db("camp");
    mysql_query("SET NAMES utf8");
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $password = $_POST['password'];

      $result = mysql_query("INSERT INTO users (name, password)
       VALUES ('$name', '$password')");
       mysql_fetch_assoc($result);
    }
    header('Location: /');
    exit();
?>
