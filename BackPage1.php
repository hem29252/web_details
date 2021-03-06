<?php
     include('config/CheckUser.php');
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
      <script src="resource/js/BackPage1.js"></script>
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
                        <div class=head><B>บุคลากร</B></div>
                        <div class= detail>
                          <table>
                            <tr> 
                              ส่วนส่งเสริมวิชาการ / งานโครงการและกิจกรรมทางวิชาการ / <a href="index.html" class="a" target="_blank" >หน้าแรก</a> / <a href="page1.html" class="a1" target="_blank">บุคลากร</a>
                            </tr>
                           </table>
                           <br/>
                      
            

                        <!--</content>-->
                           <!--<เพิ่มข้อมูล>-->
                           <br/>
                           <button class="btn btn-success btn-md" data-toggle="modal" data-target="#add_moda_auth">เพิ่ม</button>
                           
                           <div id="add_moda_auth" class="modal fade ">
                            <div class="modal-dialog">
                             <div class="modal-content">
                              <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                               <form id="form_add_auth" action="config/personnel.php" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                 <label>รูปภาพ</label>
                                 <input type="file" name="file"> 
                                </div>  
                                <div class="form-group">
                                 <input type="text" placeholder="ชื่อ" name="fname"  class="form-control w-100"> 
                                </div>   
                                <div class="form-group">
                                 <input type="text" placeholder="นามสกุล" name="lname" class="form-control w-100"> 
                                </div>    
                                <div class="form-group">
                                 <input type="text" placeholder="ตำแหน่งงาน" name="department" class="form-control w-100"> 
                                </div>   
                                <div class="form-group">
                                 <input type="text" placeholder="โทรศัพท์" name="tel" class="form-control w-100"> 
                                </div>
                                <div class="form-group">
                                 <input type="text" placeholder="โทรสาร" name="fax"  class="form-control w-100"> 
                                </div>   
                                <div class="form-group">
                                 <input type="text" placeholder="อีเมล" name="email"  class="form-control w-100"> 
                                </div>           
                                <input type="hidden" value="1" name="check_add_auth">
                               </form>
                              </div>
                              <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                               <button type="button" class="btn btn-primary" id="insert_auth" >ตกลง</button>
                              </div>
                             </div>
                            </div>
                           </div>
                           

                           <!--</เพิ่มข้อมูล>-->
                           <br/>
                           <br/>

                           
                           <table border="0">
                            <!-- <content> -->
                            <?php while($auths = $authoriries->fetch_assoc()){ ?>
                            <tr>
                              <td >
                               <img src="resource/images/upload/<?php echo $auths['image'];?>" width="150px" height="210px">
                              </td>
                                <td class="con">
                                  <?php echo $auths['FirstName']."  ".$auths['LastName'].'<br/>';
                                        echo $auths['Department'].'<br/>';
                                        echo 'โทรศัพท์ : '.$auths['Tel'].'<br/>';
                                        echo 'โทรสาร : '.$auths['Fax'].'<br/>';
                                        echo 'e-mail : '.$auths['Email'].'<br/>';
                                  ?>
                                  <!-- modal แก้ไข-->
                                  <div class="modal fade" id="edit_modalAuth">
                                   <div class="modal-dialog">
                                    <div class="modal-content">
                                     <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                      </button>
                                     </div>
                                     <div class="modal-body" style="text-align: left; font-size:16px;">
                                      <img id="edit_image" width="90px" height="110px">
                                      <form id="form_editAuth" action="config/personnel.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                         <input type="file" name="file"><br/>
                                         <hr/>
                                         <label>ชื่อ</label>
                                         <input type="text" class="form-control w-100" name="fname" id="fname">
                                         <label>นามสกุล</label>
                                         <input type="text" class="form-control w-100" name="lname" id="lname">
                                         <label>ตำแหน่งงาน</label>
                                         <input type="text" class="form-control w-100" name="department" id="department">
                                         <label>โทรศัพท์</label>
                                         <input type="text" class="form-control w-100" name="tel" id="tel">
                                         <label>โทรสาร</label>
                                         <input type="text" class="form-control w-100" name="fax" id="fax">
                                         <label>อีเมล</label>
                                         <input type="text" class="form-control w-100" name="email" id="email">
                                         <input type="hidden" value="1" name="check_edit_auth"/>
                                         <input type="hidden" name="filename_delete" id="filename_delete">
                                         <input type="hidden" id="edit_auth_id" name="id"/>
                                        </div>
                                      </form>
                                     </div>
                                     <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                      <button type="button" class="btn btn-primary" id="btn_edit_auth" >ตกลง</button>
                                     </div>
                                    </div>
                                   </div>
                                  </div>
                              </td>
                             <!-- <td><button class="btn btn-warning">แก้ไข</button>||<button class="btn btn-danger">ลบ</button></td>-->
                            </tr>
                            <tr>
                             <td style="text-align: left;" colspan="2">
                              <button class="btn btn-warning add_data_form_edit" data-toggle="modal" id="<?php echo $auths['Id'];?>" data-target="#edit_modalAuth">แก้ไข</button>
                              <a href="config/personnel.php?delete_id=<?php echo $auths['Id'];?>&&delete_image=<?php echo $auths['image'];?>" onclick="return confirm('ลบข้อมูล')" class="btn btn-danger text-white">ลบ</a>
                             </td>
                            </tr>
                            <?php } ?>
                            <!--</content>-->
                          </table>
                          <div style="height: 100px;"></div>
                        
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