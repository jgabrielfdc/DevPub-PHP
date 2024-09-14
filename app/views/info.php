<?php 
require("components/header_links.php");
require("components/menu.php");
phpinfo();
use mysqli;
$conn=new mysqli("localhost", "root","","devpub");
mysqli_init();

?>