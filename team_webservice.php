<?php
require("header.php");

if (!Coach::isLoggedIn())
    die("You must be logged into NAFLM to use this webservice.");

$teamId = $_REQUEST["teamId"];
$team = new Team_HTMLOUT($teamId);
$team->handleActions($team->allowEdit());

?>
