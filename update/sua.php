<?php
    include("../header_footer/header.php");
    require("../config/db.php");
?>

<main>
    <?php
    $reci_id = $_GET['reci_id'];
    $query = mysqli_query($conn, "select * from `blood_recipient` where reci_id='$reci_id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="container-fluid !direction !spacing">
        <form method="POST" class="form">
            <h2>Sửa thành viên</h2>
            <label>Họ và tên: </label><input type="text" value="<?php echo $row['reci_name']; ?>" name="name"><br>
            <label>Tuổi: </label> <input type="text" value="<?php echo $row['reci_age']; ?>" name="age"><br>
            <label>Nhóm máu:   </label> <input type="text" value="<?php echo $row['reci_bgrp']; ?>" name="bgrp"><br>
            <label>Số lượng máu cần nhận:   </label>  <input type="text" value="<?php echo $row['reci_bqnty']; ?>" name="bqnty"><br>
            <label>Giới tính:   </label>  <input type="text" value="<?php echo $row['reci_sex']; ?>" name="sex"><br>
            <label>Ngày đăng kí nhận máu:   </label>  <input type="text" value="<?php echo $row['reci_reg_date']; ?>" name="date"><br>
            <label>Số điện thoại:   </label>  <input type="text" value="<?php echo $row['reci_phno']; ?>" name="phno"><br>
            <input type="submit" value="sửa" name="update_user">
            <?php

            if (isset($_POST['update_user'])) {
                $reci_id = $_GET['reci_id'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $bgrb = $_POST['bgrp'];
                $bqnty = $_POST['bqnty'];
                $sex = $_POST['sex'];
                $date = $_POST['date'];
                $phno = $_POST['phno'];
                // Create connection
                $conn = new mysqli("localhost", "root", "", "bank_blood");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "UPDATE `blood_recipient` SET reci_name='$name',reci_age = '$age', reci_bgrp='$bgrb', reci_bqnty='$bqnty', reci_sex='$sex',reci_reg_date='$date',reci_phno='$phno' WHERE reci_id='$reci_id'";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    header("localtion:../chitiet.php");
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $conn->close();
                
            }
            ?>

        </form>
    </div>

</main>

<?php
  include("../header_footer/footer.php");
  ?>
