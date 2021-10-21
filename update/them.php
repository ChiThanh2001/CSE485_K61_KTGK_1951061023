<?php
  include("../header_footer/header.php");
  require("../config/db.php");
  if (isset($_POST['add_nv'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $bgrb = $_POST['bgrp'];
    $bqnty = $_POST['bqnty'];
    $sex = $_POST['sex'];
    $date = $_POST['date'];
    $phno = $_POST['phno'];
    $sql = "INSERT INTO blood_recipient(reci_name,reci_age,reci_bgrp,reci_bqnty,reci_sex,reci_reg_date,reci_phno) VALUES ('$name','$age','$bgrb','$bqnty','$sex','$date','$phno')";
    $run = mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql)==TRUE){
 
        echo "Thêm thành công";
      }else{
 
        echo "Thêm thất bại";
      }
      mysqli_close($conn);
    }
  
?>
<main>
    <div class="container-fluid !direction !spacing">
        <form class="row g-3 needs-validation" method="POST">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name="name" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Tuổi</label>
            <input type="number" class="form-control" name="age" value="" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" name="bgrb" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Số lượng máu cần nhận</label>
            <input type="text" class="form-control" name="bqnty" required>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Giới tính</label>   
            <input type="text" class="form-control" name="sex" required>      
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Ngày đăng kí nhận máu</label>
            <input type="date" class="form-control" name="date" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Số điện thoại</label>
            <input type="number" class="form-control" name="phno" required>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="add_nv">Lưu</button>
          </div>
        </form>
    </div>
</main>
<?php
  include("../header_footer/footer.php");
?>