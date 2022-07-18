<?php

include("db.php");


$id = $_GET["id"];

$qry = "select * from product where $id = pid";

echo(" delete");


?>