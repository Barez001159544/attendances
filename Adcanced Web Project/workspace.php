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
    <link rel="stylesheet" href="workspace.css" />
    <style>
      .nTS{
        text-align: center;
        line-height: 300px;
      }
      .stdInfoClick{
        width: 100%;
        height: 100%;
        background-color: #18181881;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        display: none;
      }
      .stdInfoClick .stdInfo{
        width: 500px;
        height: 340px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: white;
      }
      .stdInfoClick .stdInfo .stdDataClick{
        height:240px;
        display: flex;
        flex-direction: row;
      }
      .stdInfoClick .stdInfo .buttons{
        width: 500px;
        height: 80px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }
      .stdInfoClick .stdInfo .buttons button{
        width: 48%;
        height: 100%;
        border: none;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding:0 15%;
        font-size: 20px;
        font-weight: bold;
        color: white;
      }
      .stdInfoClick .stdInfo .buttons .delete{
        border-bottom-left-radius: 15px;
        background-color: #CF4747;
      }
      .stdInfoClick .stdInfo .buttons .save{
        border-bottom-right-radius: 15px;
        background-color: #21CA92;
      }
      .stdInfoClick .stdDetails{
        border-top-left-radius: 15px;
        list-style: none;
        background-color: #707070;
        width: 25%;
        padding: 25px;
        font-weight: bold;
      }
      .stdInfoClick .stdInformations{
        border-top-right-radius: 15px;
        list-style: none;
        background-color: #303030;
        width: 75%;
        padding: 25px;
      }
      .stdInfoClick .stdInformations input{
        background-color: transparent;
        border: none;
        color: white;
        width: 90%;
      }
      .stdInfoClick .stdInformations .notes{
        background-color: transparent;
        color: white;
        border: none;
      }
      /* .right .elements .studentsSection .data .dates li{
        list-style: none;
        text-align: center;
        line-height: 50px;
        font-weight: bold;
        padding: 0 10%;
      }
      .right .elements .studentsSection .data .info .absDays li{
        padding: 0 10%;
        background-color: #E4E4E4;
        border-bottom: 1px solid rgb(184, 184, 184);
        border-top: 1px solid rgb(184, 184, 184);
      } */
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jquery-3.6.3.min.js"></script>
    <title>Document</title>
  </head>
  <body>
  
        <?php
        $lecturer_id;
        $e;
        $p;
if(isset($_SESSION['detail'])){
// echo "my favorite color  ".$_SESSION['detail'];
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
    <section class="left">
      <h1>Attendancies</h1>
      <div class="ul">
        <div class="li students onClickEffect">
          <i class="fa fa-users iconFontUp"></i>
          <p>Students</p>
        </div>
        <div class="li addStudent offClickEffect">
          <i class="fa fa-user-plus iconFontDown"></i>
          <p>Add Std</p>
        </div>
        <div class="li qrCode offClickEffect">
          <i class="fa fa-qrcode iconFontDown"></i>
          <p>QR Code</p>
        </div>
        <div class="li logOut offClickEffect">
          <i class="fa fa-power-off iconFontDown"></i>
          <p class="logOut"><a>Log Out</a></p>
        </div>
      </div>
    </section>
    <section class="right">
      <div class="title">
        <!-- <h1 class="subject">Subject: Advenced Web Development</h1> -->
        <?php
        // echo $lecturer_id;
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
        <!-- <h1 class="lecturer">Lecturer: Safar Second Name</h1> -->
      </div>
      <div class="elements">
        <div class="studentsSection">
          <div class="metadata">
            <h3>Student Name</h3>
            <ul class="names">
              <!-- <li class="nl">First Name</li>
              <li class="nl">First Name</li>
              <li class="nl">First Name</li>
              <li class="nl">First Name</li>
              <li class="nl">First Name</li> -->
              <?php
                $con = mysqli_connect('localhost', 'root', '','attendance system');
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result1= mysqli_query($con, "SELECT * FROM `students name` WHERE `lecturer id`=$lecturer_id");
                // if(mysqli_fetch_array($result1)[0]!=null){
                  $isThereStudent=mysqli_fetch_array($result1);
                  if($isThereStudent==NULL){
                    $std_id=0;
                  }else{
                    $std_id=$isThereStudent[0];
                  }
                  // echo ">>>>>>>>>>".$std_id."<<<<<<<<<<";
                  $result2= mysqli_query($con, "SELECT COUNT(*) FROM `attendance list` WHERE `atendance id`=$std_id AND `lecturer id`=$lecturer_id");
                $numOfColumns=mysqli_fetch_array($result2)[0];
                // }else{
                  // $std_id=0;
                // }
                // echo $std_id.", ".$lecturer_id;
                
                // $result2= mysqli_query($con, "SELECT COUNT(*) FROM `attendance list` WHERE `atendance id`=$std_id AND `lecturer id`=$lecturer_id");
                // $numOfColumns=mysqli_fetch_array($result2)[0];
                // echo "+++++++".$numOfColumns."+++++";
                if($numOfColumns==0){
                  echo "<h3>No Name to Show<h3>";
                }
                else{
                $result = mysqli_query($con, "SELECT * FROM `students name` WHERE `lecturer id`='$lecturer_id'");
                while($row = mysqli_fetch_array($result)) {
                  echo "<li class='nl'>$row[1]</li>";
                }
              }
                mysqli_close($con);
              ?>
            </ul>
          </div>
          <div class="data">
            <ul class="dates">
              <!-- <li>March-21</li>
              <li>March-21</li>
              <li>March-21</li>
              <li>March-21</li>
              <li>March-21</li> -->
              <?php
                $con = mysqli_connect('localhost', 'root', '','attendance system');
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
        
                
                if($numOfColumns==0){
                  echo "<h3>No Date to Show!</h3>";
                }else{
                // echo "++++++++".$numOfColumns."++++++++";
                // while($row = mysqli_fetch_array($result)) {
                  for($i=1; $i<=$numOfColumns; $i++){
                    $result = mysqli_query($con, "SELECT * FROM `attendance list` WHERE `day id`=$i AND `lecturer id`=$lecturer_id");
                    $row = mysqli_fetch_array($result);
                    $date= explode("-", $row[1]);
                  echo "<li>$date[2]/$date[1]</li>";
                }
              }
        
                mysqli_close($con);
              ?>
            </ul>
            <ul class="info">
              <!-- <li class="eachStd">
                <ul class="absDays">
                  <li>Absent</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Absent</li>
                </ul>
              </li>
              <li class="eachStd">
                <ul class="absDays">
                  <li>Absent</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Absent</li>
                </ul>
              </li>
              <li class="eachStd">
                <ul class="absDays">
                  <li>Absent</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Absent</li>
                </ul>
              </li>
              <li class="eachStd">
                <ul class="absDays">
                  <li>Absent</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Absent</li>
                </ul>
              </li>
              <li class="eachStd">
                <ul class="absDays">
                  <li>Absent</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Present</li>
                  <li>Absent</li>
                </ul>
              </li> -->
              <?php
                $con = mysqli_connect('localhost', 'root', '','attendance system');
                $num=1;
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                if($numOfColumns==0){
                  echo "<h3 class='nTS'>Nothing to Show!</h3>";
                }else{
                // $result = mysqli_query($con, "SELECT * FROM `students name`");
                // $result3= mysqli_query($con, "SELECT DISTINCT COUNT(*) FROM `attendance list` WHERE `lecturer id`=$lecturer_id");
                // $numOfColumns2=mysqli_fetch_array($result3)[0];
                // echo "++++++++".$numOfColumns2."+++++";
                // $row = mysqli_fetch_array($result);
                // while($row = mysqli_fetch_array($result)) {
                  // for($i=0; $i<($numOfColumns2); $i++){
                  // echo "<li class='eachStd'>";
                  //   echo "<ul class='absDays'>";
                    // while($row2 = mysqli_fetch_array($result2)) {
                    //   for($j=1; $j<=$numOfColumns; $j++){
                    //     $result2 = mysqli_query($con, "SELECT * FROM `attendance list` WHERE `atendance id`=$std_id+$i AND `lecturer id`=$lecturer_id AND `day id`=$j");
                    //     // $number_users_query = mysqli_query($con, "SELECT * FROM `attendance list`");
                    //                 $number_users = mysqli_num_rows($result2);
                    //     if($number_users!=0){
                    //       // echo "We Have" . mysqli_fetch_array($result2)[0];
                    //       $row2 = mysqli_fetch_array($result2)[2];
                    //         echo "<li>$row2</li>";
                    //     }else{
                    //       // $std_id+=1;
                    //       // $number_users=1;
                    //       echo "JJJ";
                    //     }
                    //     // if($std_id+$i==mysqli_fetch_array($result2)[0]){
                    //       // echo $std_id+$i."-".mysqli_fetch_array($result2)[0]." , , , , ";
                    //       // `atendance id`=$std_id+$i AND
                    //     // $row2 = mysqli_fetch_array($result2)[2];
                    //   // echo "<li >$row2</li>";
                    //     // }else if(null==mysqli_fetch_array($result2)[0]){
                    //     //   echo "Nothing";
                    //     // }else{
                    //     //   echo "Nothing";
                    //     // }
                    //   // echo ($std_id+$i).", ".$lecturer_id.", ".($j+1).", ".$numOfColumns2;
                    // }
                    $ids="";
                    $result006 = mysqli_Query($con, "SELECT * FROM `attendance list` WHERE `lecturer id` = $lecturer_id  GROUP BY `atendance id`;");
                    while( $row1 = mysqli_fetch_array($result006) ){

                      echo "<li class='eachStd'>";
                      echo "<ul class='absDays'>";

                      $result007 = mysqli_Query($con, "SELECT * FROM `attendance list` WHERE `lecturer id`= $lecturer_id AND `atendance id` = $row1[0] ;");
                      while( $row = mysqli_fetch_array($result007) ){

                         echo "<li> " . $row[2] . "</li>";

                      }
                      $ids.=$row1[0]."-";
                        
                      echo "</ul>";
                      echo "</li>";

                    }
                    // echo $ids;

                  //   echo "</ul>";
                  // echo "</li>";
                // }
              }
        
                mysqli_close($con);
              ?>
            </ul>
          </div>
        </div>
        <div class="addStudentsSection">
          <form action="dbAddStudent.php" method="POST">
            <div class="inputs">
              <div class="each">
                <label for="">ID</label>
                <span
                  ><input
                    type="text"
                    required
                    placeholder="ID"
                    disabled
                    value="ID"
                    name="id" /><i class="fa fa-lock"></i
                ></span>
              </div>
              <div class="each">
                <label for="">Name</label>
                <input
                  type="text"
                  required
                  placeholder="John Doe"
                  name="name"
                />
              </div>
            </div>
            <div class="inputs">
              <div class="each">
                <label for="">G-Mail</label>
                <input
                  type="text"
                  required
                  placeholder="example@gmail.com"
                  name="email"
                />
              </div>
              <div class="each">
                <label for="">Password</label>
                <input
                  type="text"
                  required
                  placeholder="abcde12345"
                  name="password"
                />
              </div>
            </div>
            <div class="inputs note">
              <div class="noteEach">
                <label for="">Note</label>
                <input
                  type="text"
                  maxlength="200"
                  name="note"
                  placeholder="Anything you want to write about this student maximum of 200 characters, you can also change it whenever you want."
                />
              </div>
            </div>
            <button class="submitBtn" name="submitBtn" id="">
              <p>Save</p>
              <i class="fa fa-check"></i>
            </button>
            <!-- <input class="submitBtn" type="submit" name="" id="" value="Submit"> -->
          </form>
        </div>
        <div class="qrCodeSection">
          <div class="allQr">
            <div class="justQr">
              <img
                src="https://chart.googleapis.com/chart?cht=qr&chl=<?php echo $sName;?>&chs=160x160&chld=L|0"
                class="qrCode img-thumbnail img-responsive"
              />
            </div>
            <div class="scan">
              <h2>Scan Here</h2>
              <h1>↵</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="stdInfoClick">
    <form class="stdInfo" method="POST" action="<?PHP echo $_SERVER["PHP_SELF"];?>">
      <div class="stdDataClick">
        <ul class="stdDetails">
          <li>Name:</li>
          <li>G-Mail:</li>
          <li>Passwrod:</li>
          <li>Notes:</li>
        </ul>
        <ul class="stdInformations">
          <!-- ----------- -->
          
          
          <!-- ----------- -->
          <input type="text" name="name" class="name" value=<?PHP echo $name;?>>
          <input type="text" name="gmail" class="gmail" value=<?PHP echo $gmail;?>>
          <input type="text" name="password" class="password" value=<?PHP echo $password;?>>
          <!-- <input type="text" name="notes" class="notes" value="NotesNotes:"> -->
          <textarea name="notes" class="notes" cols="37" rows="8"><?PHP echo $notes;?></textarea>
          <!-- <li>NameName:</li>
          <li>G-MailG-Mail:</li>
          <li>PasswrodPassword:</li>
          <li>NotesNotes:</li> -->
        </ul>
      </div>
      <div class="buttons">
        <button class="delete" name="delete" onclick="saveORdelete()">
          <p>Delete</p>
          <i class="fa fa-trash"></i>
        </button>
        <button class="save" name="update" onclick="saveORdelete()">
          <p>Save</p>
          <i class="fa fa-check"></i>
        </button>
    </div>
    </form>
            </section>
            
    <div class="logOutSect"></div>
    <script>
      var stdsBtn = document.querySelector(".left .ul .students");
      var addStdsBtn = document.querySelector(".left .ul .addStudent");
      var qrCodeBtn = document.querySelector(".left .ul .qrCode");
      var logOut = document.querySelector(".left .ul .logOut");
      var studentsSection = document.querySelector(
        ".right .elements .studentsSection"
      );
      var addStudentsSection = document.querySelector(
        ".right .elements .addStudentsSection"
      );
      var qrCodeSection = document.querySelector(
        ".right .elements .qrCodeSection"
      );
      var stdsIcon = document.querySelector(".left .ul .students i");
      var addStdsIcon = document.querySelector(".left .ul .addStudent i");
      var qrCodeIcon = document.querySelector(".left .ul .qrCode i");
      var stdDetails= document.querySelector(".stdInfoClick");
      var indie=0;
      window.onload = () => {
        // collection of <li> elements
        const info = Array.from(document.getElementsByClassName("absDays"));
        const names = Array.from(document.getElementsByClassName("nl"));
        // add click event listener for each collection item
        info.forEach((button, index) => {
          button.addEventListener("mouseover", () => {
            info[index].style.transform = "translateY(-5px)";
            names[index].style.transform = "translateY(-5px)";
          });
          button.addEventListener("mouseout", () => {
            info[index].style.transform = "translateY(0px)";
            names[index].style.transform = "translateY(0px)";
          });
          button.addEventListener("click", () => {
            indie = index;
            document.cookie = "name = " + indie;
              stdDetails.style.display="flex";
            console.log("EACH STD DAYS CLICK!"+index);
          });
        });
        names.forEach((button, index) => {
          button.addEventListener("mouseover", () => {
            info[index].style.transform = "translateY(-5px)";
            names[index].style.transform = "translateY(-5px)";
          });
          button.addEventListener("mouseout", () => {
            info[index].style.transform = "translateY(0px)";
            names[index].style.transform = "translateY(0px)";
          });
          button.addEventListener("click", () => {
            indie = index;
            document.cookie = "name = " + indie;
              stdDetails.style.display="flex";
            console.log("EACH STD CLICK!"+index);
          });
        });
      };
      function onMenuItemsClick(
        onBtn,
        unBtn1,
        unBtn2,
        onSect,
        unSec1,
        unSec2,
        onIcon,
        unIcon1,
        unIcon2
      ) {
        onSect.style.display = "flex";
        unSec1.style.display = "none";
        unSec2.style.display = "none";
        onBtn.classList.add("onClickEffect");
        onBtn.classList.remove("offClickEffect");
        unBtn1.classList.remove("onClickEffect");
        unBtn1.classList.add("offClickEffect");
        unBtn2.classList.remove("onClickEffect");
        unBtn2.classList.add("offClickEffect");
        onIcon.classList.add("iconFontUp");
        unIcon1.classList.remove("iconFontUp");
        unIcon2.classList.remove("iconFontUp");
        onIcon.classList.remove("iconFontDown");
        unIcon1.classList.add("iconFontDown");
        unIcon2.classList.add("iconFontDown");
      }
      function saveORdelete(){
        stdDetails.style.display="none";
      }
      // var eachStdBlock = document.querySelector(".names li");
      $(document).ready(function () {
        $(stdsBtn).click(function () {
          onMenuItemsClick(
            stdsBtn,
            addStdsBtn,
            qrCodeBtn,
            studentsSection,
            addStudentsSection,
            qrCodeSection,
            stdsIcon,
            addStdsIcon,
            qrCodeIcon
          );
        });
        $(addStdsBtn).click(function () {
          onMenuItemsClick(
            addStdsBtn,
            stdsBtn,
            qrCodeBtn,
            addStudentsSection,
            studentsSection,
            qrCodeSection,
            addStdsIcon,
            stdsIcon,
            qrCodeIcon
          );
        });
        $(qrCodeBtn).click(function () {
          onMenuItemsClick(
            qrCodeBtn,
            stdsBtn,
            addStdsBtn,
            qrCodeSection,
            studentsSection,
            addStudentsSection,
            qrCodeIcon,
            stdsIcon,
            addStdsIcon
          );
        });
        // $(eachStdBlock).click(function () {
        //   console.log("EACH STDUDENT BLOCK!");
        // });
        $(logOut).click(function () {
          var myAnchor = document.querySelector(".logOut a");
          myAnchor.href="login.php";
          console.log("LOG OUT!");
        });
      });
    </script>
  </body>
</html>
