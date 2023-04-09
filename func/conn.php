<?
$mysqli=false;
function conndb(){
    global $mysqli;
    $mysqli=new mysqli("localhost","root","root","vk");
    $mysqli->query("SET NAMES 'utf-8'");
}
function cldb(){
    global $mysqli;
    $mysqli->close();
}
?>