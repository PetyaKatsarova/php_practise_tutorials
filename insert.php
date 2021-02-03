<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
    
    // Set parameters
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);



// if($stmt = mysqli_prepare($link, $sql)){
//     // Bind variables to the prepared statement as parameters
//     // sss is 3 * str
//     mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
    
//     /* Set the parameters values and execute
//     the statement again to insert another row */
//     $first_name = "Hermione";
//     $last_name = "Granger";
//     $email = "hermionegranger@mail.com";
//     mysqli_stmt_execute($stmt);
    
//     /* Set the parameters values and execute
//     the statement to insert a row */
//     $first_name = "Ron";
//     $last_name = "Weasley";
//     $email = "ronweasley@mail.com";
//     mysqli_stmt_execute($stmt);
    
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
// }
 
// Close statement
//mysqli_stmt_close($stmt);
 
// Escape user inputs for security
// $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
// $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// // Attempt insert query execution
// $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
// if(mysqli_query($link, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// Close connection
//mysqli_close($link);