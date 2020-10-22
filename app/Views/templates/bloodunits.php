<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u224459111_bb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Yes, I do agree. This file is definately a security risk
$sql = "SELECT SUM(`ap`), SUM(`an`),SUM(`bp`), SUM(`bn`),SUM(`abp`), SUM(`abn`),SUM(`op`), SUM(`one`) FROM `hospital`";
$result = $conn->query($sql);

$row = $result -> fetch_array(MYSQLI_ASSOC);

$conn->close();
?>
<hr class="my-4">
<div class="container">
<h2 class="text-center"> Available blood Units </h2>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Blood Groups</th>
      <th scope="col">Total Units</th>
    </tr>
  </thead>
  <tbody class="">
    <tr>
      <th scope="row">1</th>
      <td>Blood Group A+</td>
      <td><?php print_r($row['SUM(`ap`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Blood Group A-</td>
      <td><?php print_r($row['SUM(`an`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Blood Group B+</td>
      <td><?php print_r($row['SUM(`bp`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Blood Group B-</td>
      <td><?php print_r($row['SUM(`bn`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Blood Group AB+</td>
      <td><?php print_r($row['SUM(`abp`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Blood Group AB-</td>
      <td><?php print_r($row['SUM(`abn`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Blood Group O+</td>
      <td><?php print_r($row['SUM(`op`)']); ?></td>
      
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Blood Group O-</td>
      <td><?php print_r($row['SUM(`one`)']); ?></td>
      
    </tr>
  </tbody>
</table>
<div>