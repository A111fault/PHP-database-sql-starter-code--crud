<?php

$con = new mysqli('localhost', 'root', '', 'crud_op');

if (!$con) {
    die(mysqli_error($con));
}
?>