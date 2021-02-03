<!-- post transfers data in http body, send text/binary(like upload files) -->
<form method="post" action="hi_person.php">
   Name: <input type="text" name="person" />
   <input type="submit" />
</form>
<?php
if(isset($_POST['person'])){
    // html escaping: do on all data printed in html page, with html special chars
    // never escape date if u read it!
    // never double escape
    echo "Hi, " . htmlspecialchars($_POST["person"]);
    // data validation;
    // checkbox is submitted only if its actually checked
    //submittin arr
}
?>
<form method="post">
    <select name="people[]" multiple="multiple">
        <option value='Genko'>Genko</option>
        <option value='Svetlin'>Svetlin</option>
        <option value='Nora'>Nora</option>
    </select>
    <input type="submit" value="submit" />
</form>
<?php
if(isset($_POST['people'])){
    foreach($_POST['people'] as $p){
        echo htmlspecialchars($p) . "<br>";
    }
}