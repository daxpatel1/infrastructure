<?php
  $servername = "localhost";
  $username = "portal";
  $password = "";
  $dbname = "portal-db";
  $port = 3316;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname, $port);

  // Check connection
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  } 

  $query = "SELECT * FROM events";
  mysqli_query($conn, $query) or die(' error querrring the datbase');

  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
?>