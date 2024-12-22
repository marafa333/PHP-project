<?php
// Insert
function insert($table,$data,$conn) 
{
    $sql = "INSERT INTO `$table` SET";
    foreach ($data as $key => $value) {
        $sql .= "`$key`='$value' ,";
    }
    $sql =rtrim($sql,',');
    mysqli_query( $conn, $sql );
    return mysqli_insert_id( $conn );
}
// Find
function find($table,$id,$conn)
{
    $sql = "SELECT * FROM `$table` WHERE `id`='$id'";
    $res = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc( $res );
    return $row;
}
// Update
function update($table,$data,$id,$conn)
{
    $sql = "UPDATE `$table` SET";
    foreach ($data as $key => $value){
        $sql .= "`$key`='$value' ,";
    } 
    $sql = rtrim($sql,",");
    $sql .= "WHERE `id`='$id'";
    
    mysqli_query( $conn, $sql );
    return find($table,$id,$conn);
}
// Delete
function delete($table,$id,$conn) 
{
    $sql = "DELETE FROM `$table` WHERE `id`='$id'";
    return mysqli_query( $conn, $sql );
}
// All data
function all($table,$conn) 
{
    $sql = "SELECT * FROM `$table`";
    $res = mysqli_query($conn,$sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}

function sum( $table,$id,$conn)
{
    $sql = "SELECT COUNT($id) AS num FROM `$table`";
    $res = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc($res);
return $row['num'];
}
?>