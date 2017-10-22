<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/09/2017
 * Time: 14:16
 */
try{
    $mongo=new Mongo('mongodb://localhost:27017');
    $db=$mongo->selectDB('test');//Your database name
    $user_table=$db->user;//Table name


}catch (MongoConnectionException $err){
    echo "Mongo connection error ".$err->getMessage();
}


?>