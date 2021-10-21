<?php
require("../config/db.php");
if(isset($_REQUEST['reci_id']) and $_REQUEST['reci_id']!=""){
$reci_id=$_GET['reci_id'];
$sql = "DELETE FROM blood_recipient WHERE reci_id='$reci_id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
header("location:../chitiet.php");
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>