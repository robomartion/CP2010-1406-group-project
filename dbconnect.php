<?php
try {
/* connect to SQLite database. It's good to have this in a separate file you can include in all pages that need DB access */
    $dbh = new PDO("sqlite:records.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>