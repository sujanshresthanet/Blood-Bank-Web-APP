<?php
$con=mysqli_connect("localhost","root","","u224459111_bb");
// Check connection
if (mysqli_connect_errno())
{
echo "Some Kind of error!";
}
$email = session()->get('email');
$result = mysqli_query($con,"SELECT * from `request` WHERE `hospital` = '$email'");

echo "<hr class='my-4'>
<div class='container'>
<h2 class='text-center'> Requests of blood units. </h2>
<div class='alert alert-warning alert-dismissible fade show' role='alert'>
After <strong>finishing the request</strong> contact admin to mark the request completed.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
<table class='table table-hover'>
<thead class='thead-dark'>
<tr>
<th scope='col'>Reciever Email</th>
<th scope='col'>Reciecer Mob</th>
<th scope='col'>Blood Type</th>
<th scope='col'>comments</th>
<th scope='col'>date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user'] . "</td>";
echo "<td>" . $row['usermob'] . "</td>";
echo "<td>" . $row['bloodtype'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>