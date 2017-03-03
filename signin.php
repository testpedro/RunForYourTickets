<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include'db.php';
session_start();

if(isset($_POST['logname']) && isset($_POST['logpass'])){
  $user=array();
  $user['logname']=$_POST['logname'];
  $user['logpass']=$_POST['logpass'];

  $logquery="select uemail, pswd from usuario where uemail='{$user['logname']}';";
  $res=pg_query($con, $logquery);
  if(!$res){
    echo "Não foi possível buscar o registro";
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:signin.php');
    die();
  }else{
    $search=pg_fetch_assoc($res);
    if($user['logname'] == $search['uemail'] && md5($user['logpass'])== $search['pswd']){
      $_SESSION['login'] = $user['logname'];
      $_SESSION['senha'] = $user['logpass'];
      header('location:profile.php');
    }
  }
}
include 'login.php';

?>
