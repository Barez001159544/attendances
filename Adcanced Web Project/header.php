<!DOCTYPE html>
<html lang="en">
<head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header{
    width: 100vw;
    height: 80px;
    background-color: white;
    color: black;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 5%;
    position: fixed;
    top: 0;
    z-index: 1;
}
header .fa-bars{
    font-size: 30px;
}
header a{
    text-decoration: none;
    color: black;
    text-transform: uppercase;
}
.menuBanner {
    background-color: white;
    width: 100vw;
    height: 100vh;
    padding: 20vw;
    z-index: 5;
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.menuBanner ul{
    margin-block-start: 0;
    margin-block-end: 0;
    padding-inline-start: 0;
}
.menuBanner ul li a{
    font-size: 10vw;
    /* color: #111111; */
    color: black;
    text-decoration: none;
}
.menuBanner ul li a:hover{
    font-weight: bold;
}
.menuBanner ul li{
    text-align: center;
    list-style: none;
    margin-bottom: 5vw;
}
.menuBanner button{
    width: 20vw;
    height: 20vw;
    background-color: tomato;
    color: white;
    border-radius: 50%;
    border: none;
    font-size: 7vw;
}
@media only screen and (min-width: 1000px) {
    .menuBanner {
        margin-left: 98vw;
        background-color: white;
        width: 60vw;
        height: 80px;
        padding:0 5vw;
        z-index: 5;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        transition: all ease-in-out .5s;
        border-radius: 100px;
    }
    .showMenu{
        margin-left: 40vw;
    }
    .menuBanner ul{
        width: 50%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 60px;
        /* margin-block-start: 0;
        margin-block-end: 0;
        padding-inline-start: 0; */
    }
    .menuBanner ul li a{
        font-size: 1.5vw;
    }
    .menuBanner ul li{
        text-align:unset;
        list-style: none;
        /* margin-bottom: 5vw; */
    }
    .menuBanner button{
        width: 2vw;
        height: 2vw;
        background-color: tomato;
        color: white;
        border-radius: 50%;
        border: none;
        font-size: 1vw;
    }
    h2{
        font-size: 2.5vw;
    }
}
    </style>
    <title>Document</title>
</head>
<body>
<header>
      <a href="index.html"><h2>Attendancies</h2></a>
      <i class="fa fa-bars"></i>
      <div class="menuBanner">
        <ul>
        <li><a href="index.html">Home</a></li>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
        <button><i class="fa fa-close"></i></button>
      </div>
    </header>
    <script>
      var menu= document.querySelector("header i");
var banner= document.querySelector(".menuBanner");
var closeBanner= document.querySelector(".menuBanner i");
menu.onclick = function(){
    if(window.screen.width>=1000){
    banner.classList.add("showMenu");
    }else{
        banner.style.display="flex";
    }
    // body.style.overflowX="hidden";
    console.log("Show Menu");
};
closeBanner.onclick = function(){
    if(window.screen.width>=1000){
    banner.classList.remove("showMenu");
    }else{
        banner.style.display="none";
    }
    // body.style.overflowY="scroll";
    console.log("Hide Menu");
};
    </script>
</body>
</html>