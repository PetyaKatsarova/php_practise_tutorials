
<h2>Contact Us</h2>
<p>Please fill in this form and send us.</p>
<form action="process-form.php" method="post">
    <p>
        <label for="inputName">Name:<sup>*</sup></label>
        <input type="text" name="name" id="inputName">
    </p>
    <p>
        <label for="inputEmail">Email:<sup>*</sup></label>
        <input type="text" name="email" id="inputEmail">
    </p>
    <p>
        <label for="inputSubject">Subject:</label>
        <input type="text" name="subject" id="inputSubject">
    </p>
    <p>
        <label for="inputComment">Message:<sup>*</sup></label>
        <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
    </p>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<!-- get method examples -->
<!-- <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <label for="inputName">Name for get: </label>
  <input type="text" name="name" id="inputName">
  <input type="submit" value="SubmitGet">
</form>
<!-- post method example -->
<!-- <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <label for="input2Name">Name for post: </label>
  <input type="text" name="name2" id="input2Name">
  <input type="submit" value="SubmitPost"> -->
<!-- </form> --> 
<!-- <?php 
//tutorialrepublic.com/php-tutorial play
// if(isset($_GET["name"])){
//    echo "<p>Hi, " .$_GET["name"] . " This is get method.</p>";
// }
// if(isset($_POST["name2"])){
//    echo "<p>Hi, " . $_POST["name2"] . " This is post method.</p>";
// } -->
// if(isset($_REQUEST["name2"])){
//    echo "<p>Hi, " .$_REQUEST["name2"] . " This is post method.</p>";
// }

// echo date('h:i:s') ."<br>";// 04:18:20 4 pm
// // echo date('H:I:s')."<br>";// 16:19:3316:0:33 ???
// echo date("F d, Y h:i:s A")."<br>";//February 02, 2021 11:51:04 AM
// echo date("h:i a")."<br>";//11:52 am
//$timestamp = time();
//echo (date('F d, Y, h:i:s', $timestamp)) ."<br>";//February 02, 2021, 11:54:42
// echo mktime(14, 30, 5, 3, 17, 1973) ."<br>";//some nums 1012230005
// echo date('l', mktime(0,0,0,3,17,1973));// Saturday\
//$mybd = mktime(14,30,30,03,17,1973);
//echo $mybd; //101223030
// $mytimestamp = mktime(14,30,30,03,17,1973);
// echo (date('F d - Y - h:i a', $mytimestamp)) ."<br>";

// $pattern = "/\s/";// all small chars?
// $replacement = "-";
// $text = "Earth revolves around\nthe\tSun";
// // Replace spaces, newlines and tabs
// echo preg_replace($pattern, $replacement, $text);
// echo "<br>";
// // Replace only spaces
// echo str_replace(" ", "-", $text);

// $pattern = "/[\s,]+/";
// $text = "My favourite colors are red, green and blue";
// $parts = preg_split($pattern, $text);
 
// // Loop through parts array and display substrings
// foreach($parts as $part){
//     echo $part . "<br>";
// };
