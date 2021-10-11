<?php

use ThalukName\Common\GeneralFunctions;
use ThalukName\Master\User;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

$generalFunction = new GeneralFunctions;
if ($generalFunction->addCORHeaders()) {
  exit();
}
$generalFunction->addGeneralHeaders();

switch (true){
    case (isset($_GET['thal']) && $_GET['thal']);
      $data = file_get_contents('php://input');
      $postdata = json_decode($data);
      $stn= new User();
      echo  json_encode($stn->Tal_Fun($postdata));
      break;



  case (isset($_GET['new_table']) && $_GET['new_table']);
    $data = file_get_contents('php://input');
    $postdata = json_decode($data);
    $tab= new User();
    echo  json_encode($tab->TabFun($postdata));
    break;

//  case (isset($_GET['edit']) && $_GET['edit']);
//    $data = file_get_contents('php://input');
//    $postdata = json_decode($data);
//    // var_dump($postdata);
//    $edit= new User();
//    echo  json_encode($edit->EDIT($postdata));
//    break;
//
//  case (isset($_GET['remove']) && $_GET['remove']);
//    $data = file_get_contents('php://input');
//    $postdata = json_decode($data);
//
//    $remove= new User();
//    echo  json_encode($remove->REMOVE($postdata));
//    break;

  default :
    header($_SERVER['SERVER_PROTOCOL']." 404 Not Found", false, 404); // HTTP/1.1 404 Not Found
    die();
}
?>
