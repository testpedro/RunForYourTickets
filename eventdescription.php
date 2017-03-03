<?php
session_start();
include 'db.php';

$event=searchEvent($con, $_GET['id']);

include 'description.php';
 ?>
