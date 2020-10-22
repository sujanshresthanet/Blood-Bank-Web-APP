<link rel="stylesheet" href="/style.css">
<body class="text-center vsc-initialized">
	<?php if (session()->get('success')): ?>
		<div class="alert alert-success" role="alert">
			<?= session()->get('success') ?>
				</div>
        <style>
          
          .alert{
            margin:0;
          }
        </style>
        <?php endif; ?>
        
        
        <form class="form-signin" action="/hlogin" method="post">
					
          <?php echo view ('templates/heart'); ?>
						<!--heart-->
						
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
						
            <label for="email"class="sr-only">Email address</label>
            <input type="text" class="form-control" required="" name="email" placeholder="Email" value="<?= set_value('email') ?>">
						
            <label for="password" class="sr-only">Password</label>
            <input type="password" class="form-control" required="" name="pass" placeholder="Password" value="">
						
            <?php if (isset($validation)): ?>
            <div>
              <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
              </div>
            </div>
            <?php endif; ?>
						
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <a class="btn btn-outline-success btn-lg btn-block" href="/registerask" role="button">Register</a>
            
            <hr class="my-4">
            <a class="btn btn-outline-secondary btn-lg btn-block" onclick="goBack()" role="button">Go back</a>
            <hr class="my-4">
						<p>Created for Internsala</p>
				</form>
</body>