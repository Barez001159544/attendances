<!-- <!DOCTYPE html>


<html>

<head>

<style>

*{
    margin:0;
    padding:0;
}

body{ background-color: rgb(224, 198, 198); }


.container{
    display: flex;
    align-items: center;
    justify-content: center;
   
    margin-top: 10%;
}
.img1 {
    max-width: 50%;
    max-height: 50%;
    padding: 50px;
   
}

img{
   
    border:2px rgb(31, 151, 186) solid;
}
h1{
    margin-top: 5%;
    text-align: center;
    font-size: 3vw;
}
.text1 h2{
    font-size: 2.5vw;
    margin-bottom: 5%;
}
.text1{
    text-align: center;
   
    
}
.text1 p{
    font-size: 1.2vw;
    text-align: start;
    color: rgb(47, 47, 47);
   
}

.container2{
    display: flex;
    align-items: center;
    justify-content: center;
   
    margin-top: 10%;
}

.text1{
    text-align: center;
    padding: 50px;
}

.square{
    height: 10vw;
    width: 100%;
    background-color: rgb(31, 151, 186);
    padding-top: 20px;;
    margin-top: 10%;
    margin-bottom: 5%;
    text-align: center;
}
label{
    font-weight: 1000;
    font-size: 1.5vw;
}
</style>

</head>


<body>

    <div class="body">
    <h1>About Us</h1>

<div class="container">
    <div class="img1">
        <img src="./images/our vision.jpg" width="100%">
    </div>

    <div class="text1">
        <h2>Our Vision</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium
             incidunt dicta a atque asperiores.<br>
             Blanditiis sunt natus enim repudiandae
             inventore eos provident repellat ut qui.
             Lorem ipsum dolor sit amet<br>consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium
             incidunt dicta a atque asperiores.<br>
             Blanditiis sunt natus enim repudiandae
             inventore eos provident repellat ut qui.Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium<br>
             incidunt dicta a atque asperiores.
             Blanditiis sunt natus enim repudiandae<br>
             inventore eos provident repellat ut qui.</p>
    </div>
</div>

<div class="container2">
   

    <div class="text1">
        <h2>Our Approach</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium
             incidunt dicta a atque asperiores.<br>
             Blanditiis sunt natus enim repudiandae
             inventore eos provident repellat ut qui.
             Lorem ipsum dolor sit amet<br>consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium
             incidunt dicta a atque asperiores.<br>
             Blanditiis sunt natus enim repudiandae
             inventore eos provident repellat ut qui.Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Totam nulla doloribus illo animi accusantium<br>
             incidunt dicta a atque asperiores.
             Blanditiis sunt natus enim repudiandae<br>
             inventore eos provident repellat ut qui.</p>
    </div>

    <div class="img1">
        <img src="./images/our approach.jpg" width="100%">
    </div>
    


</div>

<div class="square">""Lorem ipsum dolor, sit
     amet consectetur adipisicing elit. Iste delectus 
     quibusdam consequuntur ratione, corporis ducimus,
      quasi nulla perspiciatis beatae earum, molestias dolor
      ibus? Cupidit
    ate fugiat illo repellendus, quaerat fugit impedit commodi.""<br>
<label>Zmnako Karwan</label></div>

</div>




</body>



</html> -->
<!DOCTYPE html>
<link rel="stylesheet" href="about.css" />
<style>
    .container{
        text-align: center;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
.box {
  width: 250px;
  height: 260px;
  display: inline-block;
  margin-right: 20px;
  background-color: #21A3CA;
  text-align: center;
  font-size: 15px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
  transition: transform 0.3s ease-out;
}

.box::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 0%;
  background-color: #f72c08;
  transition: height 0.3s ease-out;
}

.box:hover::before {
  height: 100%;
}

.box:hover .boxess{
  display: block;
  position: absolute;
  top: 30;
  left: 0;
  width: 100%;
  
  line-height: 20px;
 text-align: justify;
  color: rgb(244, 240, 240);
  text-align: center;

  padding: 10px;
  box-sizing: border-box;
  transition: top 0.3s ease-out;
}

.boxess {
  display: none;
  font-size: 1.2vw;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: #21A3CA;

}
h1{
    color: #f9f6f6;
    
  text-shadow: 1px 1px 0px #918f8f;
    font-size: 3vw;
}
.heads{
    color: #eeeaea;
   font-size: 3vw;
  text-shadow: 2px 1px 0px #a9a7a7;
}

.gallery {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    padding: 100px 20%;
    }
    .image-box {
    position: relative;
    width: 250px;
    height: 300px;
    margin: 20px;
    border-radius: 5px;
    overflow: hidden;
    }
    
    .image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }
    
    .image-box h3 {
    position: absolute;
   bottom: 0;
   
    left: 0;
    right: 0;
    padding: 5px;
    
    background-color: rgba(0, 0, 0, 0.5);
    color: #ffffff;
    font-size: 1.1em;
    }
    
    @media only screen and (max-width: 768px) {
   
    
   .image-box {
   width: 200%;
   height: 200px;
   }
  
  
   }
   img {
    transition: all 0.3s ease;
  }
  
  img:hover {
    opacity: 0.7;
    transform: scale(1.1);
  }
</style>
<html>

<head>







</head>



<body>
<?php
      include "header.php";
    ?>
   <div class="title">
    <div>
        <h2>About us</h2>
<p>Welcome to our website! We are a team of passionate individuals dedicated to creating exceptional content and providing valuable resources to our audience.

Our mission is to empower and inspire our readers to achieve their goals, whether it's in their personal or professional lives. We believe that everyone has the potential to succeed and make a positive impact in the world, and we strive to help our readers unleash their full potential.

Our content covers a wide range of topics, from self-improvement and personal growth to business and entrepreneurship. We take pride in producing high-quality articles, guides, and resources that are both informative and engaging.

At our core, we value authenticity, integrity, and a commitment to excellence. We believe in building meaningful relationships with our readers and creating a community of like-minded individuals who share our passion for personal and professional development.


     .</p>
    </div>

     
    <!-- <img src="images/close-up-airplane-engine-sunlight_124865-16404.jpg" width="40%" class="img"> -->
    <div class="img"></div>
</div> 
<!-- ---------------------------------- -->
<div class="container">

    <section class="boxes">

<div class="box">
  <h1>Mission</h1>
  <h2 class="heads">1</h2>
  <p class="boxess">Our mission is to create a learning environment that is inclusive, collaborative, and engaging.
     We strive to foster a love of learning and inspire our students to become lifelong learners who are committed to personal and intellectual growth.</p>
</div>

<div class="box">
    <h1>Aim</h1>
    <h2 class="heads">2</h2>
  <p class="boxess">At our institution, our aim is to provide high-quality education that is accessible to all.
     We believe that education is a fundamental human right, and we are committed to ensuring that our students have the tools and resources they need to succeed.</p>
</div>

<div class="box">
    <h1>Approach</h1>
    <h2 class="heads">3</h2>
  <p class="boxess">At our institution, we take a student-centered approach to education. We believe that every student has unique needs and learning styles,
     and we strive to provide individualized support to help them succeed.</p>
</div>

<div class="box">
    <h1>Vision</h1>
    <h2 class="heads">4</h2>
  <p class="boxess">We envision a world in which education is accessible to all, regardless of their background or circumstances. We strive to create a learning environment that is inclusive, diverse.
    </p>
</div>
</section>

<section class="gallery">
    <div class="image-box">
        <img src="images\274201913_1666217733713098_7903638773555872535_n.jpg" alt="Image 1">
        <h3>Barez Azad Ismail</h3>
    </div>
    <div class="image-box">
        <img src="images\IMG-3863-removebg-preview.jpg" alt="Image 2">
        <h3>Zmnako Karwan Sabir</h3>
    </div>
</section>

</div>




</body>



</html>