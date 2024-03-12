<?php
    session_start();
?>
<?php
$con = mysqli_connect('localhost', 'root', '','attendance system');
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM `lecturers accounts`");
$result2 = mysqli_query($con,"SELECT * FROM `students name`");

if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $_SESSION['detail']=$email.",".$password;
//   $_SESSION['password']=$password;
while($row = mysqli_fetch_array($result))
{
    if($row['email']==$email && $row['password']==$password){
        if(isset($_SESSION['detail'])) {
            header("Location: workspace.php");
            exit;
        }
// echo "Email: ". $row['email'].", Password: ".$row['password']." & Name: ".$row['name'];
// $_SESSION['detail']=$row['id'];
    }else{
        //-----------------------
        while($row2 = mysqli_fetch_array($result2))
{
    if($row2['email']==$email && $row2['password']==$password){
        if(isset($_SESSION['detail'])) {
            header("Location: scanner.php");
            exit;
        }
// echo "Email: ". $row['email'].", Password: ".$row['password']." & Name: ".$row['name'];
// $_SESSION['detail']=$row['id'];
    }else{
        echo "Account Does not Exist!";
    };
}
        //-----------------------
    };
}
}

mysqli_close($con);
?>