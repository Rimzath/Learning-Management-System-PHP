<?php include("../actions/checkstudent.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<?php
$email = $_SESSION['useremail'];
$user = "SELECT user.id as id , student.departmentid as departmentid ,student.yearid as yearid FROM user,student WHERE email = '$email' AND user.id = student.id ";
$userresult = mysqli_query($db_conn, $user);
$userrow = mysqli_fetch_object($userresult);

$subquery = "SELECT * FROM subject WHERE subject.departmentid = '$userrow->departmentid'";
$subresult = mysqli_query($db_conn, $subquery);

$totalsubject = mysqli_num_rows($subresult);
while ($subrow = mysqli_fetch_object($subresult)) {
    $present = 0;
    $absent = 0;
?>
<?php 
if($present+$absent == 0){
  echo "0%";
}
else{
  echo (($present)*100)/($present+$absent)."%";
}
?>
<?php
}
?>


<div class="flex overflow-hidden bg-white">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  
    

<?php include("../public/footer.php")?>