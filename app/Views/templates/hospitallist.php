
<?php
$con=mysqli_connect("localhost","root","","u224459111_bb");
// Check connection
if (mysqli_connect_errno())
{
echo "Some Kind of error!";
}
$result = mysqli_query($con,"SELECT * from `hospital`");

echo "<hr class='my-4'>
<div class='container'>
<h2 class='text-center'>List of Hospitals.</h2>
<table class='table table-hover'>
<thead class='thead-dark'>
<tr>
<th scope='col' rowspan='2'>Hospital Name</th>
<th scope='col' rowspan='2'>Hospital Mobile</th>
<th scope='col' colspan='8'>Blood Group A to O Units (1 unit = ~525 mL)</th>
<th scope='col' rowspan='2'>Address</th>
<th scope='col' rowspan='2'>Email</th>
</tr>
<tr>


<th scope='col'>A+</th>
<th scope='col'>A-</th>
<th scope='col'>B+</th>
<th scope='col'>B-</th>
<th scope='col'>AB+</th>
<th scope='col'>AB-</th>
<th scope='col'>O+</th>
<th scope='col'>O-</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['mob'] . "</td>";
echo "<td>" . $row['ap'] . "</td>";
echo "<td>" . $row['an'] . "</td>";
echo "<td>" . $row['bp'] . "</td>";
echo "<td>" . $row['bn'] . "</td>";
echo "<td>" . $row['abp'] . "</td>";
echo "<td>" . $row['abn'] . "</td>";
echo "<td>" . $row['op'] . "</td>";
echo "<td>" . $row['one'] . "</td>";
echo "<td>" . $row['address'] ." ". $row['city'] ." ". $row['state'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>