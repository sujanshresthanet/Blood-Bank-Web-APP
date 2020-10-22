<link rel="stylesheet" href="/style.css">
<body class="text-center vsc-initialized">
   <form class="form-R" action="/updateprofile" method="post">
      <?php echo view ('templates/heart'); ?> <!--heart-->
      <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
      <h1 class="h3 mb-3 font-weight-normal">Please fill in the deatials to update.</h1>
      
      <label for="name" class="sr-only">Name</label>
      <input type="text" class="form-control" name="name" placeholder="name" value="<?= set_value('name',$user['name']) ?>">
      
      <label for="mob"class="sr-only">Mobile Number</label>
      <input type="number" class="form-control" name="mob" placeholder="mob" value="<?= set_value('mob',$user['mob']) ?>">
      
      <label for="email"class="sr-only">Email address</label>
      <input type="text" class="form-control" readonly id="email" value="<?= $user['email'] ?>">
      
      <label for="gender" class="sr-only">gender</label>
      <select readonly id="email" name="gender" class="form-control" id="inlineFormCustomSelect">
        <option readonly id="email" selected><?= $user['gender'] ?></option>
        
        <label for="age"class="sr-only">Age</label>
        <input type="number" class="form-control" name="age" placeholder="age" value="<?= set_value('age',$user['age']) ?>">   
        
       
       
  
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="bloodgroup" id="bloodgroup">
  <option value="<?= $user['bloodgroup'] ?>">You have <?= $user['bloodgroup'] ?> Blood Group </option>
    <option value="A+">Change Blood Group to A+</option><option value="A-">Change Blood Group to A-</option>
    <option value="B+">Change Blood Group to B+</option><option value="B-">Change Blood Group to B-</option>
    <option value="AB+">Change Blood Group to AB+</option><option value="AB-">Change Blood Group to AB-</option>
   <option value="O+">Change Blood Group to O+</option><option value="O-">Change Blood Group to O-</option>
    </select>
        
        <label for="city"class="sr-only">city</label>
        <input type="text" class="form-control" name="city" placeholder="city" value="<?= set_value("city",$user['city']) ?>">
        
        <label for="state"class="sr-only">state</label>
        <input type="text" class="form-control" name="state" placeholder="state" value="<?= set_value('state',$user['state']) ?>">
        
        <label for="address"class="sr-only">address</label>
        <input type="text" class="form-control" name="address" placeholder="address" value="<?= set_value('address',$user['address']) ?>">
      
      <label for="password" class="sr-only">Password</label>
      <input type="password" class="form-control" name="pass" placeholder="password" value="">
      
      <label for="password_confirm" class="sr-only">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirm" placeholder="password confirm" id="password_confirm" value="">
      
      <?php if (isset($validation)): ?>
      <div>
         <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
         </div>
      </div>
      <?php endif; ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Update Profile</button>
      <a class="btn btn-outline-success btn-lg btn-block" href="/profile" role="button">Go Back</a>
      <hr class="my-4">
      <p>Created for Internsala</p>
   </form>
</body>