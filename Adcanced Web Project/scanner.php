<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="html5-qrcode.min.js"></script>
    <style>
        *, body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: row;
        background-color: #e0c6c6;
      }
        .reserved{
            margin: 4% auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            width: 70%;
            height: 85%;
        }
        .title {
        height: 64px;
        width: 100%;
        background-color: #303030;
        border-radius: 15px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        color: white;
        font-size: 9px;
        text-align: center;
      }
      .title h1 {
        width: 50%;
        height: 50%;
        line-height: 35px;
        text-align: center;
      }
      .title .stdName {
        border-right: solid 2px #707070;
      }
      .scanner{
        width: 60vh;
        height: 60vh;
        border-radius: 15px;
        background-color: #E4E4E4;
      }
      button{
        width: 200px;
        height: 50px;
        background-color: #303030;
        border-radius: 10px;
        align-self: flex-end;
        border: none;
        color: white;
        transition: all ease 0.8s;
      }
      button:hover{
        background-color: #4a4a4a;
      }
      .btnContainer{
        width: 60vh;
        display: flex;
        flex-direction: row;
        justify-content: end;
      }
      .btn{
        width: 200px;
        height: 50px;
        background-color: grey;
        border-radius: 10px;
        align-self: flex-end;
        border: none;
        color: white;
        transition: all ease 0.8s;
      }
      .btnActive{
        background-color: #303030;
      }
      .btn i{
        transition: all ease-in-out 0.5s;
    }
    .btnActive:hover{
        transform: scale(1.1);
        background-color: rgb(43, 187, 43);
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.195)
    }
      .btnActive:hover i{
        font-size: 80px;
        /* line-height: 10px; */
      }
      #html5-qrcode-anchor-scan-type-change, img{
        /* color: white; */
        display: none;
      }
      @media only screen and (max-width: 880px) {
        .reserved{
            margin: 15% auto;
            justify-content: space-around;
        }
        .btnContainer{
            width: 40vh;
        }
        .scanner{
            width: 40vh;
            height: 40vh;
        }
      }
      @media only screen and (max-width: 745px) {
        .title{
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            height: 90px;
            font-size: 8px;
        }
        .title .stdName{
            width: 90%;
            border-right: none;
            line-height: 55px;
            border-bottom: solid 2px #707070;
        }
        .title .subject{
            width: 90%;
            /* line-height: 45px; */
        }
        .btnContainer{
            justify-content: center;
        }
        .btn{
            align-self: center;
        }
      }
    </style>
    <title>Document</title>
</head>
<body>
  <?php
$std_id;
$sub;
$e;
$p;
if(isset($_SESSION['detail'])){
// echo "my favorite color  ".$_SESSION['detail'];
$std_id="".$_SESSION['detail'];
$lecturer_id="";
$each=explode(",", $std_id);
$e=$each[0];
$p=$each[1];
//-----------------
$con = mysqli_connect('localhost', 'root', '','attendance system');
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM `students name`");

while($row = mysqli_fetch_array($result))
{
if($row['email']==$e && $row['password']==$p){
$std_id=$row['id'];
$lecturer_id=$row['lecturer id'];
// echo "-----------------".$lecturer_id."---------------";
}else{
// echo "Account Does not Exist!";
};
}
$result2 = mysqli_query($con,"SELECT * FROM `lecturers accounts` WHERE `id`=$lecturer_id");
$sub=mysqli_fetch_array($result2)[4];
echo "<h5 class='subName'>".$sub."</h5>";
    $_SESSION['details']=$std_id."-". $lecturer_id;
    mysqli_close($con);
    // ----------------
 //   }
}
?>
    <section class="reserved">
        <div class="title">
            <!-- <h1 class="stdName">Student Name: John Doe</h1> -->
            <?php
        $con = mysqli_connect('localhost', 'root', '','attendance system');
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $result = mysqli_query($con, "SELECT * FROM `lecturers accounts` WHERE id='$lecturer_id'");
        $row= mysqli_fetch_array($result);

        $sName= $row[4];
        $lName= $row[1];
        
        mysqli_close($con);
          echo "<h1 class='subject'>Subject: ". $sName."</h1>";
          echo "<h1 class='lecturer'>Lecturer: $lName</h1>";
        ?>
            <!-- <h1 class="subject">Subject: Advanced Web Development</h1> -->
          </div>
          <div class="scanner">
            
    <div id="reader" style="border: 0px solid silver; height: 100%;" ></div>
    <!-- <span id="result">Result Here</span> -->
          </div>
          <form action="scannerResult.php" method="POST">
          <div class="btnContainer"><button class="btn" disabled name="submit"><i class="fa fa-check"></i></button></div>
          </form>
    </section>
    <script>
        // When scan is successful fucntion will produce data
        var subName= document.querySelector(".subName");
        var btn= document.querySelector(".btnContainer button");
        console.log("~~~~~"+subName.innerHTML+"~~~~~");
function onScanSuccess(qrCodeMessage) {

  // document.getElementById("result").innerHTML =
  //   '<span class="result">' + qrCodeMessage + "</span>";
// var myJavascriptVariable=qrCodeMessage;
if(qrCodeMessage==subName.innerHTML){
  console.log(qrCodeMessage+"=="+subName.innerHTML);
  btn.disabled=false;
  btn.classList.add("btnActive");
}else{
  console.log(qrCodeMessage+" vs "+subName.innerHTML);
  console.log("These two doesn't match!");
  btn.disabled=true;
}
}

// When scan is unsuccessful fucntion will produce error message
function onScanError(errorMessage) {
  // Handle Scan Error
}

// Setting up Qr Scanner properties
var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
  fps: 10,
  qrbox: 250
});

// in
html5QrCodeScanner.render(onScanSuccess, onScanError);


    </script>
    
</body>
</html>