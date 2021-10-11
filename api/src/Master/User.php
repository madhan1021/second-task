<?php
   namespace ThalukName\Master;

   use Exception;
   use ThalukName\Common\PostgreDB;

class User
   {
  /**
   * @var string[]
   */
  private array $retobj;

  /**
   * @throws Exception
   */
  function Tal_Fun($data){

    $talukname = (isset($data->ThalukName)) ? $data->ThalukName : null;
         $talukcode = (isset($data->ThalukCode)) ? $data->ThalukCode : null;

         $sql ='INSERT INTO thaluk_tables(thalukname,thalukcode) VALUES($1,$2)';

         $db = new PostgreDB();

         $db->Query($sql,[$talukname,$talukcode]);

         $db->DBClose();


    $this->retobj=["message" =>  "done"];

    return $this->retobj;
       }


  /**
   * @throws Exception
   */
  function TabFun ($data){
//        $retobj = [];

      $sql ='SELECT * from thaluk_tables ORDER by id ';

      $db = new PostgreDB();

      $db->Query($sql);
      $row = $db->FetchAll();
      $db->DBClose();


      if (count($row)>0) {

         $this->retobj=["message" => "done"];
      }

        return $row;
    }

//    function EDIT($data){
//      $retobj = [];
//
//      $statename = isset($data->StateName) ? $data->StateName : null;
//      $statecode = isset($data->StateCode) ? $data->StateCode : null;
//
//    $sql ='INSERT INTO cms.statename(statename,statecode) VALUES($1,$2)';
//
//    $db = new PostgreDB();
//
//    $db->Query($sql,[$statename,$statecode]);
//   //  $column = $db->FetchAll();
//    $db->DBClose();
//       $retobj=["message" => "successfully Done"];
//
//      return $retobj;
//  }
//
//  function REMOVE($data){
//      $retobj = [];
//
//      $id = isset($data->id) ? $data->id : null;
//      $sql ='DELETE FROM cms.statename where id=$1';
//
//      $db = new PostgreDB();
//
//
//      if ($db->Query($sql,[$id])) {
//
//         $retobj=["message" => "successfully Done"];
//       }
//      $db->DBClose();
//      return $retobj;
//   }


   }
?>
