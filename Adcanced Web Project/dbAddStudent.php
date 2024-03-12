<?php
    session_start();
?>
<?php
            $lecturer_id;
            $e;
            $p;
    if(isset($_SESSION['detail'])){
    echo "my favorite color  ".$_SESSION['detail'];
    $lecturer_id="".$_SESSION['detail'];
    $each=explode(",", $lecturer_id);
    $e=$each[0];
    $p=$each[1];
        //-----------------
    $con = mysqli_connect('localhost', 'root', '','attendance system');
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $result = mysqli_query($con,"SELECT * FROM `lecturers accounts`");
    
    // if(isset($_POST['email']) && isset($_POST['password'])){
      
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $_SESSION['color']=$email;
    // echo "my favorite color is ".$_SESSION['color'];
    
    while($row = mysqli_fetch_array($result))
    {
    if($row['email']==$e && $row['password']==$p){
    $lecturer_id=$row['id'];
    // echo "-----------------".$lecturer_id."---------------";
    }else{
    // echo "Account Does not Exist!";
    };
    }
    mysqli_close($con);
    // ----------------
    }
        ?>
<?php
// $error="";
$con = mysqli_connect('localhost', 'root', '','attendance system');

if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$note = $_POST['note'];
$attendanceID="";

//-------------------------

//-------------------------
//$date = date('Y/m/d'); // H:i:s for time
// $date2 = date('Y/m/d+7');
// $date3 = date('Y/m/d+7');
$date= date("Y-m-d");
$iDate2 = strtotime("+1 day", strtotime(date("Y-m-d")));
$date2= date("Y-m-d", $iDate2);
$iDate3 = strtotime("+2 day", strtotime(date("Y-m-d")));
$date3= date("Y-m-d", $iDate3);
$iDate4 = strtotime("+3 day", strtotime(date("Y-m-d")));
$date4= date("Y-m-d", $iDate4);
$iDate5 = strtotime("+4 day", strtotime(date("Y-m-d")));
$date5= date("Y-m-d", $iDate5);
$iDate6 = strtotime("+5 day", strtotime(date("Y-m-d")));
$date6= date("Y-m-d", $iDate6);
//$date = date('Y/m/d');
// $lectureres_id= $_POST[''];
// if(strpos($name, "A")){
    // $attendanceID=(int) $attendanceID+1;
$sql = "INSERT INTO `students name` (`name`, email, `password`, note, `lecturer id`) VALUES ('$name', '$email', '$password', '$note', '$lecturer_id')";
// $attendanceID=
$rs = mysqli_query($con, $sql);

$result = mysqli_query($con,"SELECT * FROM `students name`");
    while($row = mysqli_fetch_array($result))
    {
    if($row['email']==$email && $row['password']==$password){
    $attendanceID=$row['id'];
    // echo "-----------------".$lecturer_id."---------------";
    }else{
    // echo "Account Does not Exist!";
    };
    }
$sql2 = "INSERT INTO `attendance list` (`atendance id`, `date`, `poa`, `lecturer id`, `day id`) VALUES ('$attendanceID', '$date', 'Absent', '$lecturer_id', 1), ('$attendanceID', '$date2', 'Absent', '$lecturer_id', 2), ('$attendanceID', '$date3', 'Absent', '$lecturer_id', 3), ('$attendanceID', '$date4', 'Absent', '$lecturer_id', 4), ('$attendanceID', '$date5', 'Absent', '$lecturer_id', 5), ('$attendanceID', '$date6', 'Absent', '$lecturer_id', 6)";

$rs2 = mysqli_query($con, $sql2);

if($rs && $rs2)
{
	// echo "Contact Records Inserted";
  header("Location: workspace.php");
  exit;
}

mysqli_close($con);
// }else{
	// $error="Does not contain A";
// }
?>