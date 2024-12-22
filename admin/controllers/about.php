<?php
require_once "../init.php";
if($_GET['action'] == "add"){
    if($_POST){
        $mes = upload_fun($_FILES['about_image'],5,['jpg','png','jfif'],'../../uploads/','ar');
        $tmp=$_POST;
        $temp['about_image']=$mes['file'];
        $res=insert('abouts',$tmp,$conn);
        if($res > 0){
            header("location:../views/about/add.php?mes=The record has been added");
            exit();
        }else{
        header("location:../views/about/add.php?mes=Error happened at storing data&error=1");
            exit();
        }
    }else{
    header("location:../views/about/add.php");
            exit();
    }
}
else if($_GET["action"]== "edit"){
    $id = $_GET['id'];
    $about = find('abouts',$id,$conn);
    compactData('about', $about);
        if($_POST){
            $temp = $_POST;
            if($_FILES['about_image']['name'] != ''){
                $mes = upload_fun($_FILES['about_image'],5,['jpg','png','jfif'],'../../uploads/','ar');
                $temp['about_image']=$mes['file'];
                }
            $about = update('abouts',$temp,$id,$conn);
                if($about){
                    compactData('about', $about);
                    header("location:../views/about/edit.php?mes=The record has been updated");
                    exit();
                }else{
                    header("location:../views/about/edit.php?mes=Error happened at storing data&error=1");
                    exit();
                }
    }else{
        header("location:../views/about/edit.php");
        exit();
    }
    
}
else if($_GET["action"]== "delete"){
    $id = delete('abouts',$_GET['id'],$conn);
    $abouts = all('abouts',$conn);
    compactData('abouts', $abouts);
    header("location:../views/about/show.php");
    exit();
}else{
    $abouts = all('abouts', $conn);
    compactData('abouts', $abouts);
    header("location:../views/about/show.php");
    exit();
}
?>