<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Blood Bank</title>
</head>
<body>
<?php
      $uri = service('uri');
     ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="/">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" id="home" href="/">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" id="hospitals" href="/hospitals">Hospitals</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" id="about" href="about">About us</a>
      </li>
      <?php if (session()->get('isLoggedH')): ?>
        <li class="nav-item">
        <a class="nav-link" id="dashboard" href="hdashboard">Dashboard</a>
      </li>
      <li class="nav-item <?= ($uri->getSegment(1) == 'hprofile' ? 'active' : null) ?>">
            <a class="nav-link" href="/hprofile">Profile</a>
          </li>
         
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="/logout" class="btn btn-outline-warning" role="button">Logout</a>
    </form>
        <?php endif; ?>
      <?php if (session()->get('isLoggedIn')): ?>
        <li class="nav-item">
        <a class="nav-link" id="dashboard" href="dashboard">Dashboard</a>
      </li>
      <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
         
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="/logout" class="btn btn-outline-warning" role="button">Logout</a>
    </form>
    <?php endif; ?>
  </div>
</div>
</nav>
<script>
$('.nav-item .nav-link').click(function(){
    $('.nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
})
</script>
<style>
.jumbotron{
    margin : 0;
}
body {
    background-color: #e9ecef !important;
}
</style>

