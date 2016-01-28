<?php
namespace App\Model;

use DB;
use Illuminate\Support\Facades\Config;
/**
 * Description of Article
 *
 * @author fg
 */
class Article {
    //put your code here
    
    public function geSingletArticle($id){
        return DB::select('select * from `article` where `id`=?  and `status` = 1 limit 0,1',[$id])[0];
    }
    
    public function getArticleList($page){
        $rows = Config::get('article.rows_of_page');
        $start_offset = ($page-1) * $rows;
        $articles = DB::select('select * from `article` where `status` = 1 limit ?,?',[$start_offset, $rows]);
        return $articles;
    }
    
}
