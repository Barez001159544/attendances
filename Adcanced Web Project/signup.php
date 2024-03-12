<!DOCTYPE html>
<?php
    ob_start();
    session_start();
?>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: linear-gradient(#e0c6c68d, #e0c6c68d), url("images/boy-and-girl-going-to-school-illustration_1541970830.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        /* overflow: hidden; */
        display: flex;
        justify-content: center;
        align-items: center;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 12px;
      }

      .container {
        width: 340px;
        height: 500px;
        border-radius: 10px;
        /* padding: 80px 19px 80px 20px; */
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
      }
      form{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        position: relative;
        padding: 10% 0 25% 0;
      }
      form .fields{
        height: 60%;
      }
      form .tfield {
        position: relative;
        border-bottom: 2px solid rgb(186, 185, 185);
        margin: 0 15px;
      }

      .tfield input {
        width: 100%;
        height: 40px;
        font-size: 12px;
        border: none;
        outline: none;
      }

      label {
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translatey(-50%);
        pointer-events: none;
        font-size: 12px;
        color: rgba(128, 128, 128, 0.608);
        /* opacity: 30%; */
        transition: 0.5s;
      }
      .tfield label i{
        margin-right: 10px;
      }

      /* .forgot {
        color: gray;
        margin: 0 15px;
        cursor: pointer;
        font-size: 10px;
      }
      .forgot:hover{
        color: rgb(46, 46, 46);
      } */
      .buton {
        width: 100%;
        height: 75px;
        border: none;
        position: absolute;
        /* right: 20px; */
        bottom: 0;
        /* border-radius: 10px; */
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background-color: rgb(36, 151, 186);
        text-align: center;
        font-weight: 800;
        font-family: monospace;
        font-size: 22px;
        cursor: pointer;
        color: white;
        transition: all ease-in 0.3s;
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        justify-items: center;
      }
      .buton .circle{
        width: 0;
        height: 0;
        background-color: green;
        border-radius: 50%;
        transition: all ease-in-out 0.3s;
        position: absolute;
        /*top: 0;
        left: 0; */
      }
      .buton p{
        z-index: 1;
      }
      .buton:hover{
        background-color: green;
      }
      .buton:hover .circle{
        width: 100%;
        height: 100%;
        border-top-right-radius: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 0;
      }

      .signup {
        position: relative;
        text-align: center;
        top: 30px;
        font-size: 12px;
      }
      .signup a {
        /* text-decoration: none; */
        color: rgb(36, 151, 186);
      }
      .error{
        font-size: 8px;
        margin:3vw 15px 0 15px;
        color: red;
      }
      .fields{
        height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      @media screen and (min-width: 2000px) {
        .container{
          height: 650px;
          width: 450px;
        }
        .tfield label, .signup, .tfield input{
          font-size: 16px;
        }
        /* .forgot{
          font-size: 14px;
        } */
        .error{
          font-size: 12px;
        }
      }
      @media screen and (min-width: 2000px) {
        .container{
          height: 100%;
          width: 100%;
        }
        form{
          padding-bottom: 30%;
          justify-content: space-evenly;
        }
        .fields{
          margin: 0 25px;
          height: 30%;
        }
        .tfield{
          height: 40%;
        }
        .tfield label, .signup, .tfield input{
          font-size: 54px;
        }
        /* .forgot{
          font-size: 32px;
          margin-left: 25px;
        } */
        .error{
          font-size: 28px;
          margin-top: 10%;
          margin-left: 25px;
        }
        .buton{
          height: 10%;
          font-size: 58px;
          border-radius: 0;
        }
      }

      .tfield input:focus ~ label,
      .tfield input:valid ~ label {
        top: -5px;
      }

      .tfield input:focus ~ span::before,
      .tfield input:valid ~ span:before {
        width: 100%;
        transition: 0.5s;
      }
    </style>
  </head>
  <body>
  <?php
      include "header.php";
    ?>
    <?php
    $con = mysqli_connect('localhost', 'root', '','attendance system');
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
        $nameError="";
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['subject_name'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $subject_name = $_POST['subject_name'];
          $_SESSION['detail']=$email.",".$password;
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(!preg_match("/[A-Z]/", $name) || !preg_match("/[a-z]/", $name)){
                // $nameError="OK!";
              $nameError="Name must contain at least one Upper & Lower case";
            }else if(!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match('~[0-9]+~', $password) || strlen($password)<8){
              $nameError="Password must contain at least one Upper & Lower case & Number length >8";
            }
            else if(!preg_match("/[A-Z]/", $subject_name) || !preg_match("/[a-z]/", $subject_name)){
              $nameError="Subject Name must contain at least one Upper & Lower case";
            }else{
              // $nameError="OK!";
              $sql = "INSERT INTO `lecturers accounts` (`name`, email, `password`, subject_name) VALUES ('$name', '$email', '$password', '$subject_name')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
if(isset($_SESSION['detail'])) {
  header("Location: workspace.php");
  exit;
}
            }
            // if(empty($_POST["gender"])){
            //     $genderError="Gender is required";
            // }else{
            //     $gender=test_input($_POST["gender"]);
            // }
            // if(empty($_POST["comment"])){
            //     $comment="";
            // }else{
            //     $comment=test_input($_POST["comment"]);
            // }
        }
      }
        // function test_input($data){
        //     $data=trim($data);
        //     return $data;
        // }
    ?>
    <div class="container">
      <form method="POST" action="<?PHP echo $_SERVER["PHP_SELF"];?>">
        <span class="fields">
        <div class="tfield">
          <input name="name" type="text" required />
          <span></span>
          <label><i class="fa fa-user"></i>Name</label>
        </div>

        <div class="tfield">
          <input name="email" type="email" required />
          <span></span>
          <label><i class="fa fa-at"></i>Email</label>
        </div>
        <div class="tfield">
            <input name="password" type="password" required />
            <span></span>
            <label><i class="fa fa-lock"></i>Password</label>
          </div>
          <div class="tfield">
            <input name="subject_name" type="text" required />
            <span></span>
            <label><i class="fa fa-book"></i>Subject Name</label>
          </div>
      </span>

        <!-- <a href="#" class="forgot">Forgot Password</a> -->

        <div class="signup">
          Already have an Account? <a href="login.php">Sign In</a>
        </div>
        <!-- <p class="error">Password must include characters and numbers</p> -->
        <p class="error"><?PHP echo $nameError;?></p>
        <!-- <input type="submit" value="Login" class="buton" /> -->
        <button href="workspace.php" value="Sign Up" class="buton" name="signup"> <p>Sign Up</p><div class="circle"></div></button>
      </form>
    </div>
  </body>
</html>
