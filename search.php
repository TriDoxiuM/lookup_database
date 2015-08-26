<?php
$db_hostname = 'localhost';
$db_username = '';
$db_password = '';
$db_database = '';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<form action="" method="post">
    Search: <input type="text" name="term" /><br />
    <input type="submit" value="Submit" />
</form>
<?php
if (!empty($_REQUEST['term'])) {

    $term = mysql_real_escape_string($_REQUEST['term']);

    $result = mysql_query("SELECT * FROM dbname WHERE tablename = '$term'");
    if (mysql_num_rows($result) == 0) {
        // row not found, do stuff...
        echo("Not Listed.");
    } else {
        echo("Listed.");
        
    }
}
//not my code.
?>
