<?php
# This update file creates the new table columns required to track seasons played and 'wants to retire' status

require_once('settings.php');
        
$connection= mysql_connect ($db_host, $db_user, $db_passwd);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($db_name, $connection);

$added= mysql_query("ALTER TABLE players ADD COLUMN seasons_played TINYINT SIGNED NOT NULL");
$added= mysql_query("ALTER TABLE players ADD COLUMN wants_retire VARCHAR NOT NULL DEFAULT No"); # No might not work
$added= mysql_query("ALTER TABLE players ADD COLUMN incentive MEDIUMINT NOT NULL DEFAULT 0");

if($added !== FALSE)
{
   echo("The columns have been added.");
   echo("Please remove update.php and return to the main page.");
}else{
   echo("The columns have not been added.");
}

?>
