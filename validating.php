<?php
// Sample user comment
$comment = "<h1>Hey there! How are you doing today?</h1>";
 
// Sanitize and print comment string
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
//echo 'what the blip';

// Sample integer value
$int = 0;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)){
    echo "The <b>$int</b> is a valid integer";
} else{
    echo "The <b>$int</b> is not a valid integer";
}
// Sample IP address
$ip = "172.16.254.1";
 
// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP)){
    echo "The <b>$ip</b> is a valid IP address";
} else {
    echo "The <b>$ip</b> is not a valid IP address";
}
// Sample email address
$email = "someone@@example.com";
 
// Remove all illegal characters from email
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
 
// Validate email address
if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "The $email is a valid email address<br>";
} else{
    echo "The $email is not a valid email address<br>";
}
// Sample website url
$url = "http:://www.example.com";
 
// Remove all illegal characters from url
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
 
// Validate website url
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
    echo "The $url is a valid website url<br>";
} else{
    echo "The $url is not a valid website url";
}
?>