<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="utf-8">          
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home</title>
<meta name="description" content="">            
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">

    <link href="css/layout_main.css" rel="stylesheet" />
    <link href="css/mobile_main.css" rel="stylesheet" />
    <script type="text/javascript" src="js/dateTime.js"></script>


<style>

    @import url('https://fonts.googleapis.com/css?family=Encode+Sans|Fjalla+One');

    body{
        font-family: 'Encode Sans', sans-serif;
        background-image:url('img/backgraund-login.jpg');
        background-repeat: no-repeat;
        margin: 0px;
        padding: 0px;        
    }

    #alerta{
        position: absolute;
        margin-top:75px;
        margin-left:533px;
         }

    form{
        margin: 200px 32% auto 32%;
        width: 500px;
        padding: 5px;
        border-radius: 20px;
        height: 135px;
        background: rgba(255,255,255, 0.6);
        box-shadow: 3px 5px 10px black;
    }

    table{
        margin: 15px auto 20px 10px;
        width: auto;
        height: auto;
    }
    td{ padding: 5px; }


</style>

</head>

<body>

<?php
require_once('conexao.inc.php');
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user, $pass);



if (count($_POST) > 0) {

 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

$sql = 'SELECT * FROM usuariosTi 
        WHERE usuario = :usuario
        AND ativo = 1';

$stmt = $db->prepare($sql);
$stmt->execute(['usuario' => $usuario]);
$reg= $stmt->fetch();

if(count($reg) > 0){
    if ($reg['senha'] == md5($senha)) {
        session_start();
        $_SESSION['autenticado'] = true;
        header('Location: index.php');
        die(0);
    }
}
session_start();
$_SESSION['autenticado'] = false;
 echo '<div id="alerta"><p>Erro na autenticação!</p></div>';
}
?>

<form action="login.php" method="post"> 
<table>    
    <tr><td><label for="name"><b>Usuário: </b></label></td><td><label for="name"><b>Senha: </b></label></td></tr>
    <tr><td><input type="text" name="usuario" required></td><td><input type="password" name="senha" required></td><td><input width="100px" type="image" src="img/login-button-png-hi.png" value="Login"></td></tr>    
</table>  
<a href="home.html"><img width="15px" src="img/Undo_voltar.png"><b>Voltar</b></a>
</form>

</body>
</html>