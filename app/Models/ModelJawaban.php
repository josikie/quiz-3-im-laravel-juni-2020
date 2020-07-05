<?php
  namespace App\Models;
  use Illuminate\Support\Facades\DB;

  class ModelJawaban{
      public static function get_all(){
          $_jawaban = DB::table('jawaban')->get();
          return $_jawaban;
      }
     
      public static function save($data){
          unset($data["_token"]);
          $jawaban_baru = DB::table('jawaban')->insert($data);
          return $jawaban_baru;
      }
  }
?>