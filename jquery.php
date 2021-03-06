<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>

<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
      
     
        <img class="display-3"src="logo/jquery.png"alt="jquery"/>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1 class="display-3">EDITOR MOLTO FACILE ED INTUITIVO PER PROGRAMMARE IN JQUERY!</h1>
        
      </div>
    </div>
  </div>
</section>






<form action="jquery/jquery.php"method="post">

<label for="textarea-a">Textarea:</label>
<textarea name="jquery" class="form-control">

<?php

echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';






?>

</textarea>

<button class="btn btn-primary"type="submit">PROGRAMMAZIONE IN JQUERY</button>

</form>
</body>
</html>
