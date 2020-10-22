<?php
$con=mysqli_connect("localhost","root","","u224459111_bb");
// Check connection
if (mysqli_connect_errno())
{
echo "Some Kind of error!";
}
        // Defining variables 
        $user = $usermob = $hospital = $bloodtype = $comments = $row1 = ""; 
        
        // Checking for a POST request 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
          $user = test_input($_POST["user"]); 
          $usermob = test_input($_POST["usermob"]); 
          $hospital = test_input($_POST["hospital"]); 
          $bloodtype = test_input($_POST["bloodtype"]); 
          $comments = test_input($_POST["comments"]); 
        //geting the data
        }

        function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
        } 
        
        $result1 = mysqli_query($con,"SELECT `mob` from `hospital` WHERE `email` = '$hospital'");
        $row1 = mysqli_fetch_array($result1);
              
      if(!is_null($row1)){
          //echo $row1['mob'];
          $sql = "INSERT INTO `request` (user, usermob, hospital, hospitalmob,bloodtype, comments) VALUES ('$user', '$usermob', '$hospital','".$row1['mob']."','$bloodtype','$comments')";

          if(mysqli_query($con, $sql)){
           
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Request has been made sucessfully And Updated Successfully!
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";
          }
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
          
          echo "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  Please enter a correct email ID for the hospital!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
            }
        
        
        
        
$email = session()->get('email');
$result = mysqli_query($con,"SELECT * from `request` WHERE `user` = '$email'");

echo "<hr class='my-4'>
<div class='container'>
<h2 class='text-center'>Requests to hospital you have made. </h2>
<div class='alert alert-warning alert-dismissible fade show' role='alert'>
After <strong>finishing the requests</strong> contact admin to mark the request completed.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
<table class='table table-hover'>
<thead class='thead-dark'>
<tr>
<th scope='col'>Hospital Email</th>
<th scope='col'>Hospital Mobile</th>
<th scope='col'>Blood Type</th>
<th scope='col'>comments</th>
<th scope='col'>date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['hospital'] . "</td>";
echo "<td>" . $row['hospitalmob'] . "</td>";
echo "<td>" . $row['bloodtype'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";

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
<?php 


$con=mysqli_connect("localhost","root","","u224459111_bb");
// Check connection
if (mysqli_connect_errno())
{
echo "Some Kind of error!";
}
?>
  
  <div class="text-center " id="req">
    <form class="form-check" action="<?php print $_SERVER["PHP_SELF"];?>" method="post">
      <?php echo view ('templates/heart'); ?> <!--heart-->
      <h1 class="h3 mb-3 font-weight-normal">Blood Bank Request from</h1>
      
      <label for="user" >Your Email Address</label>
      <input type="text" class="form-control disabled" name="user" placeholder="user" value="<?= session()->get('email'); ?>" readonly>
      
      <label for="usermob" >Your Mobile Number</label>
      <input type="number" class="form-control disabled" name="usermob" placeholder="mob" value="<?= session()->get('mob'); ?>" readonly >
      
      <label for="email" >Hospital's Email address</label>
      <input type="text" class="form-control" name="hospital" placeholder="email id of the hospital you wanna request" value="">
      
      <label for="bloodgroup" >Select Blood to request</label>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="bloodtype" id="bloodgroup">
    <option value="A+">Blood Group A+</option><option value="A-">Blood Group A-</option>
    <option value="B+">Blood Group B+</option><option value="B-">Blood Group B-</option>
    <option value="AB+">Blood Group AB+</option><option value="AB-">Blood Group AB-</option>
   <option value="O+">Blood Group O+</option><option value="O-">Blood Group O-</option>
    </select>
        
        <label for="comments">Any Instructions for hospital?</label>
        <input type="text" class="form-control" name="comments" placeholder="eg. Urgently Needed or How much blood needed?" value="">
        
        
     
      <button class="btn btn-lg btn-primary btn-block bg-success" type="submit" id="reqsam">Request Sample</button>
      
      <hr class="my-4">
      <p>Created for Internsala</p>
   </form>
   <style>
   label ,#reqsam{
      margin-bottom:0;
      margin-top:5px;
   }
   #req{
    width: 450px;
    align-items: center;
    margin: 15px auto;
   }

   </style>
   </div>
