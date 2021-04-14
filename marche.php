<?php 
require("php/config.php");
require($files_path."header.php");
$id = "marche"; //since we cannot pass body.php?id=marche we actually create it here because we can access what's before...
require($files_path."body.php");
require($files_path."footer.php");
?>
