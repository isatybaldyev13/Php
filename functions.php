<?php
function create_user($user){
    global $user_table;
    $user_table->insert($user);
}

function get_user($id){
    global $user_table;
    $user=$user_table->findOne(array('_id'=>new MongoId($id)));
    return $user;
}

function update_user_data($id,$updated_data){
    global $user_table;
    $user_table->update(array("_id"=>new MongoId($id)),array('$set'=>$updated_data));
}

function delete_user($id){
    global $user_table;
    $user_table->remove(array("_id"=>new MongoId($id)));
}
function get_users(){
    global $user_table;
    $users=$user_table->find();
    return $users;
}
function display_users(){
    $users=get_users();
    foreach ($users as $user){
        print_r($user);
    }
}