<?php
  setcookie("myLoginName", "MyWebsite");
  setcookie("myPreferredColor","Blue");
  echo "<br>";
  echo "2 cookies were delivered.<br>";

if (isset ($_COOKIE["myLoginName"])) {
    $loginName = $_COOKIE["myLoginName"];
    echo "Received a cookie named as LoginName: ".$loginName."<br>";
}else {
 echo "Did not received any cookie named LoginName.<br>";
}
$count = count ($_COOKIE);
echo "$count cookies recieved.<br>");
foreach ($_COOKIE as $name => $value) {
    echo "$name = $value<br>";
}
echo "<br>");
?>