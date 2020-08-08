

<?php





$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$email=$_POST['email'];

$dbconn = pg_connect("host=localhost dbname=sviluppatori  user=root  password=fabrice88@@")
    or die('Non connesso al database: ' . pg_last_error());



$query = 'INSERT INTO sviluppatori(nome,cognome,email)VALUES($nome,$cognome,$email)';
$result = pg_query($query) or die('Query fallita: ' . pg_last_error());


header('Location:home.php');


pg_free_result($result);


pg_close($dbconn);


?>
