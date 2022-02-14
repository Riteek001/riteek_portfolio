<?php
include("conf.php");
#################################
$name      =  $_POST["name"] ;
echo "$name";
$email      =  $_POST["email"] ;
echo "$email";
$subject      =  $_POST["subject"] ;
echo "$subject";
$message   =  $_POST["message"] ;
echo"$message";

$sql="Insert into data(id,name,email,subject,message)
VALUES (' ','".$name."','".$email."','".$subject."','".$message."')";


if (mysqli_query($con, $sql)) 
{
   echo "<script>alert('Successful')</script>";
			echo"<script>window.location.href='index.html'</script>";

} 
else
 {
    echo "Error: " . $sql . "<br>" . $con->error;
}
//###########################################
?>
<html>
<body>
<script>
  alert("Record Added Successfully!");
  window.location.href = "index.html";
</script>
</body>
</html>