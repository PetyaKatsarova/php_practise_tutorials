<?php
$link = mysqli_connect('localhost', 'root', '', 'demo');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    echo 'connected to db.';
}
