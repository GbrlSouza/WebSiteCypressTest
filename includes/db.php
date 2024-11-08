<?php
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) { die("Conexão falhou: " . $conn->connect_error); }
