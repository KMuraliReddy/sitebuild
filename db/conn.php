<?php

$mysqli = new mysqli("localhost", "root", "", "sitebuild");

if ($mysqli->connect_errno) {
    echo "Failled to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
