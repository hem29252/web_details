<?php

include('config/mysql.php'); 
 $mysql = new mysql();
 $con = $mysql->Connect();
 $titles = $mysql->SelectStartForm($con, "title");
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web Suranaree</title>
    </head>
    <link rel="shortcut icon" href="resource/images/icon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resource/css/styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
              <a href="index.php">หน้าแรก</a>
              <button class="dropdown-btn">เกี่ยวกับเรา
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <a href="page1.php">บุคลากร</a>
                <a href="page.php">งานและภาระหน้าที่</a>
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
             
              <a href="#contact">กลับสู่หน้าหลัก</a>
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
                                   <?php
                                     while($title = $titles->fetch_assoc()){
                                       ?>
                                          <button class="accordion"><b><?php echo $title['Name']; ?></b></button>
                                           <div class="panel"><br/>
                                            <div class="animate-new">New</div>
                                             <?php
                                               $contents = $mysql->SelectStartFormWhere1($con, "contenttype1", "title_id",$title['ID']);
                                               while($content = $contents->fetch_assoc()){
                                                 ?>
                                                 <div>&nbsp;&nbsp;&nbsp;&nbsp;<a href="pdf.php?fielname=<?php echo "resource/pdf/".$content['filePDF']; ?>" class="a" target="_blank" ><?php echo $content['name'];?></a></div><br>
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