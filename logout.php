<?php
session_start();
session_destroy();
header("location: ./registration.html");

?>