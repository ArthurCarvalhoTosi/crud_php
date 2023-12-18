<?php
include_once('../../config.php');  
include_once(DBAPI);

function find($table=null, $id=null){
    $conn = getConnection();

    $found[]=null;

    if($id){
        
        $sql =  "SELECT * FROM $table WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            $found = mysqli_fetch_array($result);
        }

    }
    else{
        $sql = "SELECT * FROM $table";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_array($result)){
                $found[] = $row;
            }
        }
    }

    closeConnection($conn);

    return $found;

}

function find_all($table){
    return find($table);
}

function save(){

}

function update(){

}

function delete(){

}

?>