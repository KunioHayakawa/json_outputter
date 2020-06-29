<?php
   $data_array = array(
                   "name" => "kunipon",
                   "age" => "20"
                 );
   header("Content-Type: application/json; charset=utf-8");
   $data_json = json_encode($data_array);
   if(json_last_error() == JSON_ERROR_NONE){
     print  $data_json;
   } else {
     http_response_code(500);
   }
?>
