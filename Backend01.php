<?php
include('config/CheckUser.php');
include('config/mysql.php'); 
 $mysql = new mysql();
 $con = $mysql->Connect();
 $titles = $mysql->SelectStartForm($con, "title");
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web Suranaree</title>
        <link rel="shortcut icon" href="resource/images/icon.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="resource/css/styles.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class=header>
          <div class="text-image">
            <img src="resource/images/sut.jpg" width="100%" >
            <div class="centered">รายละเอียดเกี่ยวกับหลักสูตร</div>
            </div>
          </div>
          <div class=menu>
            <div class="head-menu">
              รายละเอียดเกี่ยวกับหลักสูตร
            </div>
              <a href="Backend01.php">หน้าแรก</a>
              <button class="dropdown-btn">เกี่ยวกับเรา
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <a href="BackPage1.php">บุคลากร</a>
                <a href="BackPage.php">งานและภาระหน้าที่</a>
              </div>
              <button class="dropdown-btn">ขั้นตอนเกี่ยวกับหลักสูตร
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                  <a href="http://web.sut.ac.th/das/curriculum/document/process-curriculum.pdf" target="_blank">ขั้นตอนการจัดทำหลักสูตร</a>
                  <a href="http://web.sut.ac.th/das/curriculum/document/process-close-curriculum.pdf" target="_blank">ขั้นตอนการปิดหลักสูตร</a>
              </div>
              <a href="http://web.sut.ac.th/das/curriculum/document/curriculum-policy-SUT-62.pdf" target="_blank">นโยบายการพัฒนาหลักสูตร</a>
              <a href="http://web.sut.ac.th/das/curriculum/document/curruculum-guideline-SUT-62.pdf" target="_blank"> แนวปฏิบัติในการดำเนินงานพัฒนา<br/>/ปรับปรุงหลักสูตร</a>
              
              <button class="dropdown-btn">รูปแบบการจัดทำหลักสูตรของ มทส. (มคอ. 2)
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <a href="#">document</a>
                <a href="#">pdf</a>
              </div>
                <a href="http://web.sut.ac.th/das/support_aca/Manual_gradute.php" target="_blank">หลักสูตร</a>
             
              <a href="config/logout.php">ออกจากระบบ</a>
           </div>
                 
                    <div class=content>
                        <br>
                        <div class=head><B>มาตรฐานการอุดมศึกษา และเกณฑ์มาตรฐานที่เกี่ยวข้อง</B> </div>
                        <div class= detail>
                          <table>
                            <tr> 
                              ส่วนส่งเสริมวิชาการ / งานโครงการและกิจกรรมทางวิชาการ / <a href="index.html" class="a" target="_blank" >หน้าแรก</a> / <a href="index.html" class="a1" target="_blank">มาตรฐานการอุดมศึกษา และเกณฑ์มาตรฐานที่เกี่ยวข้อง</a>
                            </tr>
                           </table>
                            <div class="detail-content">
                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><b>เพิ่มรายการใหม่</b></button><br>
                            <div class="container"><hr></div>
                            <!--เพิ่มรายการดโครงการ-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการใหม่</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                 <div class="modal-body">
                                  <form id="formTitle" action="config/Title.php" method="POST">
                                   <div class="form-group">
                                      <label for="message-text" class="col-form-label">ชื่อรายการ</label>
                                      <textarea class="form-control" name="title" id="message-text"></textarea>
                                   </div>
                                  </form>
                                 </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                               <button type="button" onclick="submitTitle()" class="btn btn-primary">ตกลง</button>
                             </div>
                            </div>
                          </div>
                       </div>                            
                                   <?php //ss
                                     while($title = $titles->fetch_assoc()){
                                       ?>
                                          <a class="btn btn-danger text-white" href="config/Title.php?delete_title=<?php echo $title['ID']; ?>" onclick="return confirm('ลบข้อมูล')">ลบ</a>&nbsp;<button type="button" id="<?php echo $title['ID'];?>" class="btn btn-warning edit_title" data-toggle="modal" data-target="#exampleModal1">แก้ไข</button>&nbsp;<button class="accordion"><b><?php echo $title['Name']; ?></b></button>
                                           <div class="panel"><br/>
                                           <!--Modal แก้ไขรรายการโครงการ-->
                                           <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                             <div class="modal-content">
                                              <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLabel1">แก้ไข</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                               </button>
                                              </div>
                                             <div class="modal-body">
                                              <form id="formEditTitle" action="config/Title.php" method="POST">
                                               <input type="hidden" id="editText_id" name="id_editTitle">
                                               <div class="form-group">
                                                <label for="message-text" class="col-form-label">ชื่อรายการ</label>
                                                <textarea class="form-control" name="Text_title_edit" id="edit_textTitle"></textarea>
                                               </div>
                                              </form>
                                             </div>
                                             <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                              <button type="button" id="btn_editTitle" class="btn btn-primary">ตกลง</button>
                                             </div>
                                            </div>
                                           </div>
                                          </div>
                                             
                                             
                                             <!-- ปุ่มเพิ่มรายการย่อย -->
                                             <button type="button" style="margin-left: 10%;" id="<?php echo $title['ID'];?>" class="btn btn-success add_ContentType1" data-toggle="modal" data-target="#staticBackdrop1"><b>เพิ่มรายการใหม่</b></button><br>
                                             <!-- Modal เพิ่มรายการย่อย --><br>
                                            <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="1staticBackdropLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="1staticBackdropLabel">เพิ่มรายการใหม่<?php echo $title['ID'];?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                <div class="modal-body">
                                                <form id="formContentType1" action="config/ContenType1.php" method="POST" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                   <label for="message-text" class="col-form-label">ชื่อรายการ</label>
                                                   <textarea class="form-control" name="name" id="message-text"></textarea>
                                                   <label class="col-form-label">ไฟล์ PDF</label><br>
                                                   <input type="file" name="file" id="file" class="from-control">
                                                   <input type="hidden" name="title_id" id="title_id">
                                                 </div>
                                                </form>
                                              </div>
                                            <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                               <button type="button" name="btn_insertTitle" onclick="submitContentType1()" class="btn btn-primary">ตกลง</button>
                                            </div>
                                           </div>
                                          </div>
                                         </div>

                                            <!--<div class="animate-new" style="margin-left: 10%;">New</div><br>-->
                                             <?php
                                               $contents = $mysql->SelectStartFormWhere1($con, "contenttype1", "title_id",$title['ID']);
                                               while($content = $contents->fetch_assoc()){
                                                 ?>
                                                 <div style="margin-left: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="config/ContenType1.php?id_delete=<?php echo $content['ID']; ?>&&file_delete=<?php echo $content['filePDF']; ?>" class="btn btn-danger text-white" onclick="return confirm('ลบข้อมูล')">ลบ</a>&nbsp;
                                                 <button type="button" class="btn btn-warning btn_editContentType1" data-toggle="modal" id="<?php echo $content['ID']; ?>" data-target="#exampleModal2">แก้ไข</button>&nbsp;&nbsp;<a href="pdf.php?fielname=<?php echo "resource/pdf/".$content['filePDF']; ?>" class="a" target="_blank" ><?php echo $content['name'];?></a></div><br>
                                                  <!-- Modal แก้ไขรายการย่อย -->
                                                   <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                     <div class="modal-content">
                                                      <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                       </button>
                                                      </div>
                                                     <div class="modal-body">
                                                      <form id="formEditContentType1" action="config/ContenType1.php" method="POST" enctype="multipart/form-data">
                                                       <div class="form-group">
                                                        <label for="message-text" class="col-form-label">ชื่อรายการ</label>
                                                        <textarea class="form-control" name="edit_textContentType1" id="edit_textContentType1"></textarea>
                                                        <label class="col-form-label">ไฟล์ PDF</label><br>
                                                        <p id="edit_pdfName"></p>
                                                        <input type="file" name="file" id="file" class="from-control">
                                                        <input type="hidden" name="filnamePDF_delete" id="filnamePDF_delete">
                                                        <input type="hidden" name="edit_ContentType1_id" id="edit_ContentType1_id">
                                                       </div>
                                                      </form>
                                                     </div>
                                                    <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                     <button type="button" id="btn_submit_edit_ContenType1" class="btn btn-primary">ตกลง</button>
                                                   </div>
                                                  </div>
                                                 </div> 
                                                </div>
                                                 <?php
                                                  }
                                                 ?>
                                          </div>
                                       <?php
                                        }
                                       ?>
                        </div>
                        <div class=images-detail>
                            <img src="resource/images/sut1.jpg" width="50%">
                        </div>
                    </div>
                    <div class=static>
                        </div>
                           <!-- <div class="footer">
                          <div class="contact-1">
                              <b>ติดต่อ งานสภาวิชาการ</b>
                              <div class="detail-contact-1">
                                 อาคารบริหาร ชั้น 2 111 มหาวิทยาลัยเทคโนโลยีสุรนารี<br>
                                 ถ.มหาวิทยาลัย ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000
                                </div>
                          </div>
                        </div>-->
                        <script>

                         $(document).ready(function(){
                           $('.add_ContentType1').click(function(){
                             var title_id = $(this).attr('id');
                             $('#title_id').val(title_id);
                             
                           });

                           $('.edit_title').click(function(){
                             var view_id = $(this).attr('id');
                             //$('#edit_textTitle').val("ibrohem");
                             $.ajax({
                               url: "config/Title.php",
                               method: "POST",
                               data:{view_id:view_id},
                               dataType: "json",
                               success:function(data){
                                 $('#edit_textTitle').val(data.Name);
                                 $('#editText_id').val(data.ID);
                               }
                             });
                           });

                           $('#btn_editTitle').click(function(){
                             $('#formEditTitle').submit();
                           });

                           $('.btn_editContentType1').click(function(){
                             var view_id = $(this).attr('id');
                            //$('#edit_textContentType1').val(view_id);
                            $.ajax({
                              url: "config/ContenType1.php",
                              method: "POST",
                              data: {view_id:view_id},
                              dataType: "json",
                              success:function(data){
                                $('#edit_textContentType1').val(data.name);
                                $('#edit_pdfName').text(data.filePDF);
                                $('#edit_ContentType1_id').val(data.ID);
                                $('#filnamePDF_delete').val(data.filePDF);
                              }
                            });
                           });
                           
                           $('#btn_submit_edit_ContenType1').click(function(){
                             $('#formEditContentType1').submit();
                           });

                         });

                          function submitContentType1(){
                            document.getElementById("formContentType1").submit();
                          }

                          function submitTitle(){
                            document.getElementById("formTitle").submit();
                          }


                          var acc = document.getElementsByClassName("accordion");
                          var a;
                          
                          for (a = 0; a < acc.length; a++) {
                            acc[a].addEventListener("click", function() {
                              this.classList.toggle("active1");
                              var panel = this.nextElementSibling;
                              if (panel.style.maxHeight) {
                                panel.style.maxHeight = null;
                              } else {
                                panel.style.maxHeight = panel.scrollHeight + "px";
                              } 
                            });
                          }
                          </script>
                        <script>
                            var dropdown = document.getElementsByClassName("dropdown-btn");
                            var i;
                            
                            for (i = 0; i < dropdown.length; i++) {
                              dropdown[i].addEventListener("click", function() {
                              this.classList.toggle("active");
                              var dropdownContent = this.nextElementSibling;
                              if (dropdownContent.style.display === "block") {
                              dropdownContent.style.display = "none";
                              } else {
                              dropdownContent.style.display = "block";
                              }
                              });
                            }
                            </script>
 
    </body>
    </html>
    <?php $mysql->CloseDb($con); ?>