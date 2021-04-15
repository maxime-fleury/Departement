<?php 
require("php/config.php");
require($files_path."header.php");
$id = "lieux"; //since we cannot pass body.php?id=accueil we actually create it here because we can access what's before...
require($files_path."body.php");
require($files_path."footer.php");
?>
