<?php
    session_start();

// echo "myJavascriptVariable". $_SESSION['myJavascriptVariable'];
// $index=1;
            if(isset($_SESSION['details'])){
                // echo "my favorite color  ".$_SESSION['details'];
                //------------------------
                $details="".$_SESSION['details'];
                // $value="".$_SESSION['value'];
    $each=explode("-", $details);
    $std_id=$each[0];
    // $value=$each[1]; 
    $lect_id=$each[1]; 
    // $index+=2;
    // echo "[[".$index."]]";
    // echo "(((((((".$std_id.")))))))))";
    // echo ">>>>>>>>>>>>".$value."<<<<<<<<<<<<<<<";
    echo "----------".$lect_id."-------------";
                $con = mysqli_connect('localhost', 'root', '','attendance system');
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con,"SELECT * FROM `lecturers accounts`");
    while($row = mysqli_fetch_array($result))
    {
    if($lect_id==$row['id']){
        $result = mysqli_query($con,"SELECT * FROM `attendance list`");
    $date= date("Y-m-d");
    $sql = "UPDATE `attendance list` SET poa='Present' WHERE `atendance id`='$std_id' && `date`='$date'";

if ($con->query($sql) === TRUE) {
//   echo "Record updated successfully";
  header("Location: scanner.php");
            exit;
} else {
//   echo "Error updating record: " . $con->error;
}
    }else{
        echo "FALSE";
    }
}
    
    //-----
//     while($row = mysqli_fetch_array($result))
//     {
//     if($row['atendance id']==$std_id && $row['date']==$date){
//         echo $row['poa'];
//         $sql="UPDATE `attendance list` SET poa='Present' WHERE `atendance id`='$std_id' && `date`='$date'";
//         //$sql = "INSERT INTO `attendance list` (`name`, email, `password`, note, `lecturer id`) VALUES ('$name', '$email', '$password', '$note', '$lecturer_id')";
// // $iDate2 = strtotime("+1 day", strtotime(date("Y-m-d")));
//         //
//     // $lecturer_id=$row['id'];
//     // echo "-----------------".$lecturer_id."---------------";
//     }else{
//     // echo "Account Does not Exist!";
//     };
//     }
// session_unset();
// unset($_SESSION["value"]);
    //   unset($_COOKIE['myJavascriptVariable']);
    mysqli_close($con);
                //------------------------
            }
        ?>