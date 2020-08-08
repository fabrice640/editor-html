<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
      
      <img class="display-3"src="logo/HTML5.png"alt="HTML5"/>
      
      
       
        <img class="lead mb-0"src="logo/bootstrap4.jpeg"alt="Bootstrap4"/>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1 class="display-3">EDITOR MOLTO FACILE ED INTUITIVO PER  HTML5 E LIBRERIE PER IL WEB!</h1>
        
      </div>
    </div>
  </div>
</section>








<div class="jumbotron"style="width:99%;height:99%;">

<img class="display-3"src="logo/linguaggi-web.jpg"alt="linguaggi web"/>

<form action="sito.php"method="post">


<input class="form-control"type="text"name="button"placeholder="<button>Nome pulsante</button>"/>
<br>
<br/>
<input class="form-control"name="input"placeholder="<input>"/>
<br>
<br/>
<input class="form-control"name="select"placeholder="<select></select>"/>
<br>
<br/>
<input class="form-control"name="textarea"placeholder="<textarea></textarea>"/>
<br>
<br/>
<input class="form-control"type="text"name="h1"placeholder="<h1></h1>"/>
<br>
<br/>
<input class="form-control"type="text"name="h2"placeholder="<h2></h12"/>
<br>
<br/>
<input class="form-control"type="text"name="h3"placeholder="<h3></h3>"/>
<br>
<br/>
<input class="form-control"type="text"name="h4"placeholder="<h4></h4>"/>
<br>
<br/>
<input class="form-control"type="text"name="h5"placeholder="<h5></h5>"/>
<br>
<br/>
<input class="form-control"type="text"name="h6"placeholder="<h6></h6>"/>
<br>
<br/>



<input class="form-control"type="text"name="iframe"placeholder="<iframe src='url'></iframe>"/>
<br>
<br/>
<input class="form-control"type="text"name="div"placeholder="<div></div>"/>
<br>
<br/>
<input class="form-control"type="text"name="text"placeholder="<p></p>"/>
<br>
<br/>
<input class="form-control"type="text"name="table"placeholder="<table border='10px'><th><td></th></td></table>"/>
<br>
<br/>
<input class="form-control"type="text"name="dialog"placeholder="<dialog open></dialog"/>
<br>
<br/>
<textarea class="form-control"name="style"placeholder="<style></style>"></textarea>
<br>
<br/>





<button class="btn btn-dark"type="submit">GENERA HTML</button>

</form>

<form action="javascript.php"method="post">

<select class="form-control"name="javascript">

<option>Javascript</option>

<option>

<?php echo 'text/javascript';?>

</option>

</select>

<button class="btn btn-dark"type="submit">GENERA JAVASCRIPT</button>

<br>
<br/>

<br>
<br/>

  </form>

<form action="react.php"method="post">

<select class="form-control"name="react">

<option>React</option>

<option>

<?php echo 'https://unpkg.com/react@16/umd/react.production.min.js 
  https://unpkg.com/react-dom@16/umd/react-dom.production.min.js
  https://unpkg.com/babel-standalone@6.15.0/babel.min.js';?>
  
  </option>
  
  </select>
 
  <button class="btn btn-dark"type="submit">GENERA REACT</button>
  
  <br>
<br/>
  
  <br>
  <br/>
  
    </form>
    
      
  <form action="bootstrap4.php"method="post">
  
  <select class="form-control"name="angular">
<option>Bootstrap 4</option>
  <option>
  



 <?php echo 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 

https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"

https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js
';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA ANGULAR</button>
  </form>
  
  <form action="angular.php"method="post">
  
  <select class="form-control"name="angular">
<option>Angular Js</option>
  <option>
 
 <?php echo 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA ANGULAR</button>
  </form>
<br>
<br/>

 <br>
  <br/>

<select class="form-control"name="extJs">
<option>Extjs</option>
<option>
<br>
<br/>
<?php echo'https://ajax.googleapis.com/ajax/libs/ext-core/3.1.0/ext-core.js';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA EXT JS</button>
<br>
<br/>
 <br>
  <br/>
  
    </form>
  
    <form action="hammer.php"method="post">

<select class="form-control"name="hammer">
<option>Hammer</option>
<option>

<?php echo'https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA HAMMER</button>
  </form>
<br>
<br/>
<br>
<br/>
    <form action="jquery.php"method="post">

<select class="form-control"name="jquery">
<option>jQuery</option>
<option>

<?php echo'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA jQuery</button>
  </form>
<br>
<br/>
<br>
<br/>
    <form action="jquery-mobile.php"method="post">

<select class="form-control"name="jquery-mobile">
<option>jQuery mobile</option>
<option>

<?php echo'https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css
https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js';?>

</option>

</select>

  <button class="btn btn-dark"type="submit">GENERA jQuery MOBILE</button>
  
    </form>
  
<br>
<br/>
<br>
<br/>

    <form action="jquery-ui.php"method="post">

<select class="form-control"name="jqueryUi">
<option>jQuery Ui</option>
<option>
<?php echo'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"';?>
</option>
</select>

  <button class="btn btn-dark"type="submit">GENERA Ui</button>
  
  </form>
  
<br>
<br/>
<br>
<br/>

    <form action="mootools.php"method="post">

<select class="form-control"name="mootools">
<option>Mootools</option>
<option>

<?php echo'https://ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js';?>

</option>

</select>



<button class="btn btn-dark"type="submit">GENERA MOOTOOLS</button>







</form>

<br>
<br/>

<br>
<br/>

</div>

<body>
</html>



