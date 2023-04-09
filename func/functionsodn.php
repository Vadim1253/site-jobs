<?php
require_once "connect.php";
function getNews($limit,$id){
    global $mysqli;
    connectDB();//вкл бд
    if($id){$where="WHERE `id`=".$id;}
    $result=$mysqli->query("SELECT * FROM `vakans` $where ORDER BY `id` DESC LIMIT $limit");//вывод записи
    closeDB();//выкл бд
    if(!$id){
    return resultToArray ($result);}
    else{return $result->fetch_assoc();}
}//вывод записи
function resultToArray($result){
    $array=array();
    while(($row=$result->fetch_assoc()) != false){
        $array[]=$row;     
    }
    return $array;
}
?>