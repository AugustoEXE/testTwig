<?php

?>

<form action="novoUsuarioGravar.php" method="post">
    <input type="text" name="name" placeholder="digite seu nome">
    <br>
    <input type="email" name="email" placeholder="digite seu email">
    <br>
    <input type="text" name="user" placeholder="digite o usuario">
    <br>
    <input type="password" name="pass" placeholder="digite sua senha">
    <br>
    <label for=""> ADMIN?</label>
    <input type="checkbox" name="admin" value= 1>
    <br>
    <button>enviar</button>
</form>