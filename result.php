<?php
header("HTTP/1.0 404 Not Found");
readfile("404/404.html");
exit();
?>