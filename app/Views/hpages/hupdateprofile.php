<link rel="stylesheet" href="/style.css">

<body class="text-center vsc-initialized">
   <form class="form-R" action="/hupdateprofile" method="post">
      <?php echo view ('templates/heart'); ?>
      <!--heart-->
      <?php if (session()->get('success')): ?>
      <div class="alert alert-success" role="alert">
         <?= session()->get('success') ?>
      </div>
      <?php endif; ?>
      <h1 class="h3 mb-3 font-weight-normal">Please fill in the deatials to update.</h1>
      <div class="container">
         <div class="row">
            <div class="col">
               <label for="name" class="">Name</label>
               <input type="text" class="form-control" name="name" placeholder="name"
                  value="<?= set_value('name',$user['name']) ?>">

               <label for="mob" class="">Mobile Number</label>
               <input type="number" class="form-control" name="mob" placeholder="mob"
                  value="<?= set_value('mob',$user['mob']) ?>">

               <label for="email" class="">Email address</label>
               <input type="text" class="form-control" readonly id="email" value="<?= $user['email'] ?>">
               <label for="city" class="">City</label>
               <input type="text" class="form-control" name="city" placeholder="city"
                  value="<?= set_value("city",$user['city']) ?>">

               <label for="state" class="">State</label>
               <input type="text" class="form-control" name="state" placeholder="state"
                  value="<?= set_value('state',$user['state']) ?>">
               <label for="address" class="">Address</label>
               <input type="text" class="form-control" name="address" placeholder="address"
                  value="<?= set_value('address',$user['address']) ?>">
               <label for="pass" class="">Password</label>
               <input type="pass" class="form-control" name="pass" placeholder="pass" value="">

               <label for="password_confirm" class="">Confirm Password</label>
               <input type="password" class="form-control" name="password_confirm" placeholder="password confirm"
                  id="password_confirm" value="">
            </div>
            <div class="col">
               


               <label for="ap" class="">A+ Units</label>
               <input type="number" class="form-control" required="" placeholder="A+ Blood Units" name="ap" id="ap"
                  value="<?= set_value('ap',$user['ap']) ?>">

               <label for="an" class="">A- Units</label>
               <input type="number" class="form-control" required="" placeholder="A- Blood Units" name="an" id="an"
                  value="<?= set_value('an',$user['an']) ?>">
               <label for="bp" class="">B+ Units</label>
               <input type="number" class="form-control" required="" placeholder="B+ Blood Units" name="bp" id="bp"
                  value="<?= set_value('bp',$user['bp']) ?>">
               <label for="bn" class="">B- Units</label>
               <input type="number" class="form-control" required="" placeholder="B- Blood Units" name="bn" id="bn"
                  value="<?= set_value('bn',$user['bn']) ?>">
               <label for="abp" class="">AB+ Units</label>
               <input type="number" class="form-control" required="" placeholder="AB+ Blood Units" name="abp" id="abp"
                  value="<?= set_value('abp',$user['abp']) ?>">
               <label for="abn" class="">AB- Units</label>
               <input type="number" class="form-control" required="" placeholder="AB- Blood Units" name="abn" id="abn"
                  value="<?= set_value('abn',$user['abn']) ?>">
               <label for="op" class="">O+ Units</label>
               <input type="number" class="form-control" required="" placeholder="O+ Blood Units" name="op" id="op"
                  value="<?= set_value('op',$user['op']) ?>">
               <label for="one" class="">O- Units</label>
               <input type="number" class="form-control" required="" placeholder="O- Blood Units" name="one" id="one"
                  value="<?= set_value('one',$user['one']) ?>">
            </div>
         </div>











         <?php if (isset($validation)): ?>
         <div>
            <div class="alert alert-danger" role="alert">
               <?= $validation->listErrors() ?>
            </div>
         </div>
         <?php endif; ?>
<br>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Update Profile</button>
         <a class="btn btn-outline-success btn-lg btn-block" href="/profile" role="button">Go Back</a>
         <hr class="my-4">
         <p>Created for Internsala</p>
   </form>
</body>