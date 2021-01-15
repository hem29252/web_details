<?php
        include('mysql.php');
        $mysql = new mysql();
        $con = $mysql->Connect();

     if(isset($_POST['id_editTitle'])){
         $id = $_POST['id_editTitle'];
         $value = $_POST['Text_title_edit'];
         $query = $mysql->Edit01($con,'title','Name',$id,$value);
         if($query){
            header("location: ../Backend01.php");
         }
     }

     if(isset($_POST['view_id'])){
         $value = $_POST['view_id'];
         $sql = $mysql->SelectStartFormWhere1($con,'title','ID',$value);
         $title = $sql->fetch_assoc();
         if($title){
             echo json_encode($title);
         }
     }

     if(isset($_POST['title'])){
        $title = $_POST['title'];
        $sql = $mysql->InsertTitle($con,$title);
    
        if($sql){
            header("location: ../Backend01.php");
        }else{
            echo "No";
        }
     }

     if(isset($_GET['delete_title'])){
         $id = $_GET['delete_title'];

        $getContent = $mysql->SelectStartFormWhere1($con,'contenttype1','title_id',$id);

        while($content = $getContent->fetch_assoc()){
            $delete = $mysql->DeleteById($con,"contenttype1",'ID',$content['ID']);
            if($delete){
                $filename = $content['filePDF'];
                unlink("../resource/pdf/$filename");
            }
        }

         $delete = $mysql->DeleteById($con,"title",'ID',$id);
         if($delete){
            header("location: ../Backend01.php");
        }else{
            echo "No";
        }

     }
?>