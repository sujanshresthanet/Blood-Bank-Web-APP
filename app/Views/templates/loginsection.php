<hr class="my-4">
  <p>Blood Donation will cost you nothing, but it will save a life!<?php echo view ('templates/heart'); ?></p>
    <?php if (session()->get('isLoggedIn')) {

        echo "<h1>Hello, ".session()->get('name')."</h1><p class='text-secondary'>Please request the blood units in your Dashboard.</h1>";
      }     
            elseif (session()->get('isLoggedH')) {
              echo "<h1>Hello, ".session()->get('name')."</h1><p class='text-secondary'>Please Change or add blood units in your profile.</h1>";
      }       else {
                echo "<p class='lead'>
                <a class='btn btn-outline-primary btn-lg' href='/loginask' role='button'>Login</a>
                <a class='btn btn-outline-success btn-lg' href='/registerask' role='button'>Register</a>
                  Takes less then a minute to register. ";
    }
    ?>