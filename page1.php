<?php
     include('config/personnel.php');
     $authoriries =  $mysql->SelectStartForm($con,'personnel');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Web Suranaree</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="resource/css/styles.css">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="shortcut icon" href="resource/images/icon.png" type="image/x-icon">
    </head>
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
                        <div class=head><B>บุคลากร</B></div>
                        <div class= detail>
                          <table>
                            <tr> 
                              ส่วนส่งเสริมวิชาการ / งานโครงการและกิจกรรมทางวิชาการ / <a href="index.html" class="a" target="_blank" >หน้าแรก</a> / <a href="page1.html" class="a1" target="_blank">บุคลากร</a>
                            </tr>
                           </table>
                           <br/>
                      
                        </div>

                        <!--</content>-->
                          <div class="container">
                            <div class="row">
                             <?php while($auths = $authoriries->fetch_assoc()){ ?>
                              <div class="col-sm-4 mb-5">
                               <div class="card" style="border: solid 2px #f26522; background-color: #FFEBD2;">
                               <br>
                                <center><div><img style="border: solid 2px #f26522 ; border-radius: 10px;" class="card-top-img" src="resource/images/upload/<?php echo $auths['image'];?>" width="70%" height="290px" alt="Card image"></div></center>
                                <div class="card-body">
                                 <p class="card-text" style="margin: 0% 5% 0% 5%; font-size: 18px;" >            
                                  <?php echo $auths['FirstName']."  ".$auths['LastName'].'<br/>';
                                        echo $auths['Department'].'<br/>';
                                        echo 'โทรศัพท์ : '.$auths['Tel'].'<br/>';
                                        echo 'โทรสาร : '.$auths['Fax'].'<br/>';
                                        echo 'e-mail : '.$auths['Email'].'<br/>';
                                  ?></p>
                                 
                                 </div>                               
                               </div>
                             </div>
                             <?php } ?>
                            </div>
                            </div>
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
    <?php $mysql->CloseDb($con); ?>