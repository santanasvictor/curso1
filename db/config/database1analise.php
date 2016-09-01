<?php
$conn = new PDO('mysql:host=localhost;dbname=curso1', 'root', '');

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
