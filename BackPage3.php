<?php include('config/CheckUser.php');?>
<!DOCTYPE html>
<html>
    <head>
      <title>Web Suranaree</title>
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resource/css/styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="shortcut icon" href="resource/images/icon.png" type="image/x-icon">
    <body>
        <div class=header>
          <div class="text-image">
            <img src="resource/images/sut.jpg" width="100%">
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
                        <div class=head><B>แนวปฏิบัติในการดำเนินงานพัฒนา /ปรับปรุงหลักสูตร</B></div>
                        <div class= detail>
                          <table>
                            <tr> 
                              ส่วนส่งเสริมวิชาการ / งานโครงการและกิจกรรมทางวิชาการ / <a href="index.html" class="a" target="_blank" >หน้าแรก</a> / <a href="page3.html" class="a1" target="_blank">แนวปฏิบัติในการดำเนินงานพัฒนา /ปรับปรุงหลักสูตร</a>
                            </tr>
                           </table>
                           <br/>
                           
                        </div>
                        
                    </div>
                    <div class=static>
                      
                        </div>
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