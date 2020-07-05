<?php 
   namespace App\Models;
   use Illuminate\Support\Facades\DB;

  
   class ModelPertanyaan{
       public static function get_all(){
           $pertanyaan_ = DB::table('pertanyaan')->get();
           return $pertanyaan_;
       }

       public static function save($data){
           //mengurangi data_token
           unset($data["_token"]);
           unset($data["likenya"]);
           unset($data["dislikenya"]);
           $pertanyaan_baru = DB::table('pertanyaan')->insert($data);
           return $pertanyaan_baru;
       }
   }

?>