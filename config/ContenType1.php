<?php
        include('mysql.php');
        $mysql = new mysql();
        $con = $mysql->Connect();

        if(isset($_POST['edit_ContentType1_id'])){
            if(empty($_FILES["file"])){
                $id = $_POST['edit_ContentType1_id'];
                $value = $_POST['edit_textContentType1'];
                $query = $mysql->Edit01($con,'contenttype1','Name',$id,$value);
                if($query){
                    header("location: ../Backend01.php");
                }
            }else{
                //file
                $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
                $extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
                $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
                $source       = $_FILES["file"]["tmp_name"];
                $destination  = "../resource/pdf/{$basename}";

                $id = $_POST['edit_ContentType1_id'];
                $value1 = $_POST['edit_textContentType1'];
                $value2 = $basename;
                $filenamedelete = $_POST['filnamePDF_delete'];
                $query = $mysql->Edit02($con,'contenttype1','Name','filePDF',$id,$value1,$value2);
                $status = 0;
                if($query){
                    move_uploaded_file( $source, $destination );
                    unlink("../resource/pdf/$filenamedelete");
                    $status = 1;
                }

                if($status = 1){
                    header("location: ../Backend01.php");
                }

            }
        }

        if(isset($_POST['view_id'])){
            $value = $_POST['view_id'];
            $query = $mysql->SelectStartFormWhere1($con,'contenttype1','ID',$value);
            $getContentType = $query->fetch_assoc();
            echo json_encode($getContentType);
        }
       
        if(isset($_POST['title_id'])){

            $name = $_POST['name'];
            $id_title = $_POST['title_id'];
            //file
            $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
            $extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
            $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
            $source       = $_FILES["file"]["tmp_name"];
            $destination  = "../resource/pdf/{$basename}";
            //msql
            $insert = $mysql->InsertContentType1($con,$id_title,$name,$basename);
            $status = 0;

            if($insert){
                move_uploaded_file( $source, $destination );
                $status = 1;
            }else{
                echo "No $id_title";
            }

            if($status = 1){
                header("location: ../Backend01.php");
            }
        }

        if(isset($_GET['id_delete'])){
            
            $id_delete = $_GET['id_delete'];
            $status = 0;
            $delete = $mysql->DeleteById($con,"contenttype1",'ID',$id_delete);
            
            if($delete){
                $filenamedelete = $_GET['file_delete'];
                unlink("../resource/pdf/$filenamedelete");
                $status = 1;
            }

            if($status){
                header("location: ../Backend01.php");
            }

        }
       
?>