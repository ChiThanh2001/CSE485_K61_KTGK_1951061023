<?php 
  include("header_footer/header.php");
  require("./config/db.php");
 ?> 
  <main class="bg-warning">
      <div class="container">
          <div class="row">              
              <div class="directory-table">
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Mã người nhận máu</th>
                            <th scope="col">Tên người nhận máu</th>
                            <th scope="col">Năm sinh (Tuổi)</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Số lượng máu cần nhận</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày đăng kí nhận máu</th>
                            <th scope="col">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                            <?php 
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * from blood_recipient";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                  $i=1;
                                  while($row=mysqli_fetch_assoc($result)){
                            ?>
                                    <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $row['reci_name']; ?></td>
                                    <td><?php echo $row['reci_age']; ?></td>
                                    <td><?php echo $row['reci_bgrp']; ?></td>
                                    <td><?php echo $row['reci_bqnty']; ?></td>
                                    <td><?php echo $row['reci_sex']; ?></td>
                                    <td><?php echo $row['reci_reg_date']; ?></td>
                                    <td><?php echo $row['reci_phno']; ?></td>
                                    <td><a href="update/sua.php?reci_id=<?php echo $row['reci_id']; ?>">Sửa</a></td>
                                    <td><a href="update/xoa.php?reci_id=<?php echo $row['reci_id']; ?>">Xóa</a></td>
                                    </tr>
                            <?php
                                    $i++;
                                  }
                                }
                                 
                            ?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
</main>

<?php 
  include("header_footer/footer.php");
 ?>