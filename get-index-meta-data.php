<?php

  echo "<table class='table table-bordered'>";
  echo "<tr><th>Meta-Data</th><th>Value</th></tr>";

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";

  # Get the instance ID from meta-data and print to the screen
  echo "<tr><td>Họ và tên</td><td><i>Nguyễn Minh Sang</i></td><tr>";

  # Availability Zone
  echo "<tr><td>MSSV</td><td><i>18133045</i></td><tr>";

  echo "</table>";

?>
