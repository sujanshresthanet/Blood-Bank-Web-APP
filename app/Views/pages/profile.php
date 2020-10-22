<div class="jumbotron">
<div class="container">
  <h1 class="display-2">Hello, <?= session()->get('name') ?></h1>
  <p class="lead">
  Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.</p>


  <div class="row justify-content-center">
    <div class="col-auto">
    <a class="btn btn-outline-success btn-lg btn-block" href="/updateprofile" role="button">Update Your Details</a> <br>
    
    <?php if (session()->get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->get('success') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php endif; ?>
<table class="table table-bordered table-hover table-responsive">
<thead>
    <tr>
      <th class="text-center" colspan="2"><h3>Your Details</h3></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $user['name']; ?></td>
    </tr>
    <tr>
      <th scope="row">Age</th>
      <td><?php echo $user['age']; ?></td>
    </tr>
    <tr>
      <th scope="row">Mobile</th>
      <td><?php echo $user['mob']; ?></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $user['gender']; ?></td>
    </tr>
    <tr>
      <th scope="row">Blood Group</th>
      <td><?php echo $user['bloodgroup']; ?></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $user['email']; ?></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><?php echo $user['address']; ?></td>
    </tr>
    <tr>
      <th scope="row">City</th>
      <td><?php echo $user['city']; ?></td>
    </tr>
    <tr>
      <th scope="row">State</th>
      <td><?php echo $user['state']; ?></td>
    </tr>
    </tbody>
</table>

</div>
</div>





</div>
</div>