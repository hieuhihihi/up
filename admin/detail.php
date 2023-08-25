<?php 
    require_once("../model/connect.php");
    include '../model/connect.php';
    error_reporting(2);
    
    $sql = "SELECT * FROM products WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo $sql;
        die('error');
    }
        else {
            while ($row = mysqli_fetch_assoc($result))
            {
                if($row = )
            }
        }