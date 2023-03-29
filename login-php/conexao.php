<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'andradhroot');
define('SENHA', '9442cb19');
define('DB', 'andradhlocalhost');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');