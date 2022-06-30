<?php

require"Form.php";
$forminscripition = new Form($_POST);

?>

<form action ="#" method ="POST">

<?php
 echo $forminscripition -> input('username');
 echo $forminscripition -> input('nom');
 echo $forminscripition -> input('prenom');
 echo $forminscripition -> inputPS('password');
 echo $forminscripition -> submit('');
?>

</form>

<?php /* ICI MON CODE */

$forminscripition = new Form ();

?>

<form action ="#" method ="POST">

<?php
 echo $forminscripition -> input('pseudo');
 echo $forminscripition -> inputPS('password');
 echo $forminscripition -> submit();
?>

</form>


