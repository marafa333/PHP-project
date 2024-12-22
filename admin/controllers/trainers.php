<?php
require_once "../init.php";
if($_GET['action'] == "add"){
    if($_POST){
        $mes = upload_fun($_FILES['trainer_image'],5,['jpg','png','jfif'],'../../uploads/','ar');
        $tmp=$_POST;
        $tmp['trainer_image']=$mes['file'];
        $res=insert('trainers',$tmp,$conn);
        if($res > 0){
            header("location:../views/trainers/add.php?mes=The record has been added");
            exit();
        }else{
        header("location:../views/trainers/add.php?mes=Error happened at storing data&error=1");
            exit();
        }
    }else{
    header("location:../views/trainers/add.php");
            exit();
    }
}
else if($_GET["action"]== "edit"){
    $id = $_GET['id'];
    $trainer = find('trainers',$id,$conn);
    compactData('trainer', $trainer);
        if($_POST){
            $temp = $_POST;
                if($_FILES['trainer_image']['name'] != ''){
                $mes = upload_fun($_FILES['trainer_image'],5,['jpg','png','jfif'],'../../uploads/','ar');
                $temp['trainer_image']=$mes['file'];
                }
            $trainer = update('trainers',$temp,$id,$conn);
                if($trainer){
                    compactData('trainer', $trainer);
                    header("location:../views/trainers/edit.php?mes=The record has been updated");
                    exit();
                }else{
                    header("location:../views/trainers/edit.php?mes=Error happened at storing data&error=1");
                    exit();
                }
    }else{
        header("location:../views/trainers/edit.php");
        exit();
    }
    
}
else if($_GET["action"]== "delete"){
    $id = delete('trainers',$_GET['id'],$conn);
    $trainers = all('trainers',$conn);
    compactData('trainers', $trainers);
    header("location:../views/trainers/show.php");
    exit();
}else{
    $trainers = all('trainers', $conn);
    compactData('trainers', $trainers);
    header("location:../views/trainers/show.php");
    exit();
}
?>