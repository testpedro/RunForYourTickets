<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include"db.php";

function data_para_banco($data){

	if($data == ''){
		return '1900-01-01';
	}
	$dados = explode("/", $data);
	$dataBanco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
	return $dataBanco;
}

if(isset($_POST['eventname'])){
  $event=array();
  $event['eventname']=$_POST['eventname'];

  if(isset($_POST['dataevento'])){
    $event['dataevento']=data_para_banco($_POST['dataevento']);
  }else{
    $event['dataevento']= '';
  }

  if(isset($_POST['local'])){
    $event['local']=trim($_POST['local']);
  }else{
    $event['local']= '';
  }
  if(isset($_POST['categ'])){
    $event['categ']=trim($_POST['categ']);
  }else{
    $event['categ']='';
  }
  if(isset($_POST['evhour'])){
    $event['evhour']=$_POST['evhour'];
  }
  $event['uemail']=$_SESSION['login'];
  $event['evnb']=0;

  createEvent($con, $event);
}
include 'anuncie.php';

?>
