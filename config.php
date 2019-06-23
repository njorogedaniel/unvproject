<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "unv_exam_data";
$db_table = "projects";


//Connection link
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if (!$link){
    die("Connection Failed : " . mysqli_connect_error());
}