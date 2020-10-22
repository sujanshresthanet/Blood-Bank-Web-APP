<link rel="stylesheet" href="/style.css">
<body class="text-center vsc-initialized">
   <form class="form-R" action="/register" method="post">
      <?php echo view ('templates/heart'); ?> <!--heart-->
      <h1 class="h3 mb-3 font-weight-normal">Please Fill in</h1>
      
      <label for="name" class="sr-only">Name</label>
      <input type="text" class="form-control" name="name" placeholder="name" value="<?= set_value('name') ?>">
      
      <label for="mob"class="sr-only">Mobile Number</label>
      <input type="number" class="form-control" name="mob" placeholder="mob" value="<?= set_value('mob') ?>">
      
      <label for="email"class="sr-only">Email address</label>
      <input type="text" class="form-control" name="email" placeholder="email" value="<?= set_value('email') ?>">
      
      <label for="gender" class="sr-only">gender</label>
      <select name="gender" class="form-control" id="inlineFormCustomSelect">
        <option selected>Choose Gender</option>
        <option class="form-control" value="Male">Male</option>
        <option class="form-control" value="Female">Female</option>
        
        <label for="age"class="sr-only">Age</label>
        <input type="number" class="form-control" name="age" placeholder="age" value="<?= set_value('age') ?>">
        
       
  
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="bloodgroup" id="bloodgroup">
    <option value="A+">Blood Group A+</option><option value="A-">Blood Group A-</option>
    <option value="B+">Blood Group B+</option><option value="B-">Blood Group B-</option>
    <option value="AB+">Blood Group AB+</option><option value="AB-">Blood Group AB-</option>
   <option value="O+">Blood Group O+</option><option value="O-">Blood Group O-</option>
    </select>
        
        <label for="city"class="sr-only">city</label>
        <input type="text" class="form-control" name="city" placeholder="city" value="<?= set_value("city") ?>">
        
        <label for="state"class="sr-only">state</label>
        <input type="text" class="form-control" name="state" placeholder="state" value="<?= set_value('state') ?>">
        
        <label for="address"class="sr-only">address</label>
        <input type="text" class="form-control" name="address" placeholder="address" value="<?= set_value('address') ?>">
      
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

      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <a class="btn btn-outline-success btn-lg btn-block" href="/loginask" role="button">Already have an account</a><hr class="my-4">
      <a class="btn btn-outline-secondary btn-lg btn-block" onclick="goBack()" role="button">Go back</a>
      <hr class="my-4">
      <p>Created for Internsala</p>
   </form>
</body>