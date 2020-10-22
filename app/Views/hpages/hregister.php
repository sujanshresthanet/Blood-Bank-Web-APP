<link rel="stylesheet" href="/style.css">
<body class="text-center vsc-initialized">

   <form class="form-R" action="/hregister" method="post">
      <?php echo view ('templates/heart'); ?> <!--heart-->
      <h1 class="h3 mb-3 font-weight-normal">Please Fill in</h1>
      
      <label for="name" class="sr-only">Name</label>
      <input type="text" class="form-control" required="" name="name" placeholder="hospital name" value="<?= set_value('name') ?>">
      
      <label for="mob"class="sr-only">Mobile Number</label>
      <input type="number" class="form-control" required="" name="mob" placeholder="mob" value="<?= set_value('mob') ?>">
      
      <label for="email"class="sr-only">Email address</label>
      <input type="text" class="form-control" required="" name="email" placeholder="email" value="<?= set_value('email') ?>">
      <p id="tp">Total Number of Blood Units Available</p>

      <div class="form-inline">
      <label for="ap" class="sr-only form-inline">A+ Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="A+ Blood Units" name="ap" id="ap" value="<?= set_value('ap') ?>">
        <label for="an" class="sr-only form-inline">A- Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="A- Blood Units" name="an" id="an" value="<?= set_value('an') ?>">
      <label for="bp" class="sr-only form-inline">B+ Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="B+ Blood Units" name="bp" id="bp" value="<?= set_value('bp') ?>">
        <label for="bn" class="sr-only form-inline">B- Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="B- Blood Units" name="bn" id="bn" value="<?= set_value('bn') ?>">
      <label for="abp" class="sr-only form-inline">AB+ Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="AB+ Blood Units" name="abp" id="abp" value="<?= set_value('abp') ?>">
        <label for="abn" class="sr-only form-inline">AB- Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="AB- Blood Units" name="abn" id="abn" value="<?= set_value('abn') ?>">
      <label for="op" class="sr-only form-inline">O+ Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="O+ Blood Units" name="op" id="op" value="<?= set_value('op') ?>">
        <label for="one" class="sr-only form-inline">O- Blood Units Available</label>
        <input type="number" class="form-control" required="" placeholder="O- Blood Units" name="one" id="one" value="<?= set_value('one') ?>">
</div>
       
  
  
        <label for="city"class="sr-only form-inline">city</label>
        <input type="text" class="form-control" required="" name="city" placeholder="city" value="<?= set_value("city") ?>">
        
        <label for="state"class="sr-only">state</label>
        <input type="text" class="form-control" required="" name="state" placeholder="state" value="<?= set_value('state') ?>">
        
        <label for="address"class="sr-only">address</label>
        <input type="text" class="form-control" required="" name="address" placeholder="address" value="<?= set_value('address') ?>">
      
      <label for="password" class="sr-only">Password</label>
      <input type="password" class="form-control" required="" name="pass" placeholder="password" value="">
      
      <label for="password_confirm" class="sr-only">Confirm Password</label>
      <input type="password" class="form-control" required="" name="password_confirm" placeholder="password confirm" id="password_confirm" value="">
      
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