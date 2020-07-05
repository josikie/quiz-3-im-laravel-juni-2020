<?php
 
 namespace App\Models;

 use Illuminate\Support\Facades\DB;

 class ArtikelModel{
     public static function get_all(){
         $_artikel = DB::table('article')->get();
         return $_artikel;
     }

     public static function save($data){
        unset($data["_token"]);
        $new_article = DB::table('article')->insert($data);
        return $new_article;
     }

     public static function find_by_id($id){
         $article = DB::table('article')->where('id_artikel', $id)->first();
         return $article;
     }

     public static function update($id, $request){
         $article = DB::table('article')
                    ->where('id', $id)
                    ->update([
                         'title' => $request["title"],
                         'content' => $request["content"],
                         'slug' => $request["slug"],
                         'tag' => $request["tag"]
                    ]);
        return $article;            
     }

     public static function destroy($id){
         $deleted = DB::table('article')
                    ->where('id', $id)
                    ->delete();
         return $deleted;            
                      
     }
 }

?>