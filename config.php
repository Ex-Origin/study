<?php
include_once ('waf.php');

define('ROOT_DIR', dirname(__FILE__));
/** 定义根目录 */

if(stripos(ROOT_DIR.$_SERVER['REQUEST_URI'],__FILE__) === 0){
    include_once('403.html');
    header('HTTP/1.1 403 Forbidden');
    die();
}
function relative($file){

    if(defined('RELATIVE_PATH')){
        return RELATIVE_PATH;
    }

    $relative_path = '';
    $absolute_path = str_replace(ROOT_DIR,'',dirname($file));
    
    for ($i=0 ; $i < count($absolute_path) ; $i++){
        if($absolute_path[$i]=='/'){
            $relative_path = $relative_path.'../';
        }
    }

    if($relative_path==''){
        $relative_path = './';
    }
    define('RELATIVE_PATH',$relative_path);
    return RELATIVE_PATH;
}
?>