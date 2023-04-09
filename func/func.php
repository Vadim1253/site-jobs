<?php
require_once "conn.php";
function getVakans($lim,$id,$cat){
    global $mysqli;
    conndb();
    if($id){$where="WHERE `id`=".$id." AND `category`=".$cat;}
    $res=$mysqli->query("SELECT * FROM `vakans` $where ORDER BY `id` DESC LIMIT $lim");
    cldb();
    if(!$id){
            return resArr ($res);}
            else{return $res->fetch_assoc();} 
    // return resArr($res);
}
function resArr($res){
$arr=array();
while(($row=$res->fetch_assoc()) != false){
    $arr[]=$row;
}
return $arr;
}

// function getVakans($limit,$id){
//     global $mysqli;
//     connectDB();//вкл бд
//     if($id){$where="WHERE `id`=".$id;}
//     //$result = $mysqli->query('SELECT * FROM `massages` WHERE (usrid)=(SELECT id FROM `users` WHERE id='.$iid.')' );
//     $result=$mysqli->query("SELECT * FROM `vakans` $where ORDER BY `id` DESC LIMIT $limit");//вывод записи
//     closeDB();//выкл бд
//     if(!$id){
//     return resultToArray ($result);}
//     else{return $result->fetch_assoc();} 
// }//вывод записи
// function resultToArray($result){
//     $array=array();
//     while(($row=$result->fetch_assoc()) != false){
//         $array[]=$row; 
//     }
//     return $array;
// }
?>