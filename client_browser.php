<?php
  sesion_start();
  echo "<html>";

  $queryString = $_SERVER["QUERY_STRING"];
  echo "QUERY string of the incoming URL: ".$queryString."\n";

  echo "Cookies received: \n";
  foreach ($_COOKIE as $name => $value) {
    echo "$name = $value\n";
  }

  $myLogin = $_SESSION["myLogin"];
  echo "Value of myLogin has been retrieved: ".$myLogin."\n";
  $myColor = $_SESSION["myColor"];
  echo "Value of myLogin has been retrieved: ".$myColor."\n";

  echo "</html>\n";

?>