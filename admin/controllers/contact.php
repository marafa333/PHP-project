<?php
require_once "../init.php";
if($_GET['action'] == "add"){
    if($_POST){
        $tmp=$_POST;
        $res=insert('contacts',$tmp,$conn);
        if($res > 0){
            header("location:../views/contact/add.php?mes=The record has been added");
            exit();
        }else{
        header("location:../views/contact/add.php?mes=Error happened at storing data&error=1");
            exit();
        }
    }else{
    header("location:../views/contact/add.php");
            exit();
    }
}
 else if($_GET['action'] == "added"){
        if($_POST){
            $tmp=$_POST;
            $res=insert('contacts',$tmp,$conn);
            if($res > 0){
                header("location:../../index.php?mes=The record has been added");
                exit();
            }else{
            header("location:../../index.php?mes=Error happened at storing data&error=1");
                exit();
            }
        }else{
        header("location:../../index.php");
                exit();
        }
}
else if($_GET["action"]== "edit"){
    $id = $_GET['id'];
    $contact = find('contacts',$id,$conn);
    compactData('contact', $contact);
        if($_POST){
            $temp = $_POST;
            
            $contact = update('contacts',$temp,$id,$conn);
                if($contact){
                    compactData('contact', $contact);
                    header("location:../views/contact/edit.php?mes=The record has been updated");
                    exit();
                }else{
                    header("location:../views/contact/edit.php?mes=Error happened at storing data&error=1");
                    exit();
                }
    }else{
        header("location:../views/contact/edit.php");
        exit();
    }
    
}
else if($_GET["action"]== "delete"){
    $id = delete('contacts',$_GET['id'],$conn);
    $contacts = all('contacts',$conn);
    compactData('contacts', $contacts);
    header("location:../views/contact/show.php");
    exit();
}else{
    $contacts = all('contacts', $conn);
    compactData('contacts', $contacts);
    header("location:../views/contact/show.php");
    exit();
}
?>