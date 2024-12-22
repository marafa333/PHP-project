<?php
require_once "../init.php";
if($_GET['action'] == "add"){
    if($_POST){
        $mes = upload_fun($_FILES['avatar'],5,['jpg','png','jfif'],'../../uploads/','ar');
        $temp=$_POST;
        $temp['password']=md5($temp['password']);
        $temp['avatar']=$mes['file'];
        $res=insert('users',$temp,$conn);
        if($res > 0){
            header("location:../views/users/add.php?mes=The record has been added");
            exit();
        }else{
        header("location:../views/users/add.php?mes=Error happened at storing data&error=1");
            exit();
        }
    }else{
    header("location:../views/users/add.php");
            exit();
    }
}
else if($_GET["action"]== "edit"){
    $id = $_GET['id'];
    $user = find('users',$id,$conn);
    compactData('user', $user);
        if($_POST){
            $temp = $_POST;
            $temp['password']=md5($temp['password']);
                if($_FILES['avatar']['name'] != ''){
                $mes = upload_fun($_FILES['avatar'],5,['jpg','png','jfif'],'../../uploads/','ar');
                $temp['avatar']=$mes['file'];
                }
            $user = update('users',$temp,$id,$conn);
                if($user){
                    compactData('user', $user);
                    header("location:../views/users/edit.php?mes=The record has been updated");
                    exit();
                }else{
                    header("location:../views/users/edit.php?mes=Error happened at storing data&error=1");
                    exit();
                }
    }else{
        header("location:../views/users/edit.php");
        exit();
    }
    
}
else if($_GET["action"]== "delete"){
    $id = delete('users',$_GET['id'],$conn);
    $users = all('users',$conn);
    compactData('users', $users);
    header("location:../views/users/show.php");
    exit();
}else{
    $users = all('users', $conn);
    compactData('users', $users);
    header("location:../views/users/show.php");
    exit();
}
?>