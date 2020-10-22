<link rel="stylesheet" href="/style.css">

<body class="text-center vsc-initialized">


<div class="jumbotron justify-content-md-center">
<h1 class="display-2">Blood Bank<br>Login and Registeration</h1>
  <?php echo view ('templates/heart'); ?>
  <!--heart-->
<div class="container">
<div class="row justify-content-md-center">
    <div class="col-sm-4">
     
  <a class="btn btn-primary btn-lg btn-block" href="/login" role="button">Login as Reciever</a>
  <a class="btn btn-primary btn-lg btn-block" href="/hlogin" role="button">Login as Hospital</a>
  <a class="btn btn-outline-success btn-lg btn-block" href="/registerask" role="button">Register Page</a>
  <hr>
  <a class="btn btn-outline-secondary btn-lg btn-block" onclick="goBack()" role="button">Go back</a>
  <hr class="my-4">
  <p>Created for Internsala</p>
  </div></div></div></div>
</body>
<style>
  .heart{
    margin:20px;
  }
  .jumbotron{
    min-height:80%;
  }
  </style>