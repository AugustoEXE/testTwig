<?php
$pass = $_POST['pass'] ?? false;

if($pass){

    echo password_hash($pass, PASSWORD_BCRYPT);

}

?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

<input type="password" name="pass" id="">
<br>
<button>enviar</button>
</form>