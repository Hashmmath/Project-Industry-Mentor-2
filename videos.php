<?php 		
include('database.php');
$sql=" SELECT * FROM video ";
$rs=mysqli_query($connect,$sql);?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css" />
    <link rel="stylesheet" href="./home.css" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <style>
      .search {
        float: right;
        color: white;
        padding: 12px 120px;
        margin-right: 35px;
        border-radius: 15px;
      }
      .topnav .login-container {
        float: right;
      }
      .topnav .login-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 3px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .login-container button:hover {
        background: #ccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .login-container {
          float: none;
        }
      }

      .topnav .reg-container {
        float: right;
      }
      .topnav .reg-container button {
        padding: 6px;
        margin-top: 8px;
        margin-right: 70px;
        background: #ddd;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
      }

      .topnav .reg-container button:hover {
        background: #cccccc;
      }
      @media screen and (max-width: 600px) {
        .topnav .reg-container {
          float: none;
        }
      }
      .logo img {
        padding: 3px 2px;
        margin-top: 0px;
        margin-right: 720px;
        font-size: 15px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 2px;
        top: 1px;
        display: inline-block;
        border-radius: 10px;
        height: 2cm;
        float: none;
        width: 3cm;
      }
    </style>
    </head>
    <body>
    <div class="logo">
      <a href="#"><img src="./Screenshot (2002).png" /></a>
    </div>
    <!-- Navigation -->
    <nav class="w3-bar w3-black">
      <a href="./home.html" class="w3-button w3-bar-item">Home</a>
      <!-- <a href="./places.html" class="w3-button w3-bar-item">Places</a> -->
      <a href="#course" class="w3-button w3-bar-item">Courses</a>
      <a href="./addvideo.php" class="w3-button w3-bar-item">Teach or Create</a>
      <a href="#review" class="w3-button w3-bar-item">Customer Reviews</a>
      <a href="#footer" class="w3-button w3-bar-item">Contact Us</a>
      <div class="search">
        <input
          type="text"
          name="search"
          id="search"
          placeholder="Search this website"
        />
      </div>
    </nav>
    <div class="topnav">
      <div class="login-container">
        <form action="/action_page.php">
          <button type="submit">Login</button>
        </form>
      </div>
      <div class="reg-container">
        <form action="/action_page.php">
          <button type="submit">SignUp</button>
        </form>
      </div>
    </div>
    <div class="course-box">
    <?php			
    $count=1;
    
 	while($row=mysqli_fetch_array($rs))
	{ 
	?>
    
        
            <div class="courses">
                <img src="images/courses.jpg" alt="">
                    <div class="details">
                        <span>Updated 15/08/2022</span>
                        <a href="#"><h6><?php echo $row['V_Title']?></h6></a>
                        <h5><?php echo $row['Course Difficulty']?></h5>
                        <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                            </div>
                    </div>
                    <div class="cost">
                            FREE
                    </div>
                </div>
                
        
        	
       
	<?php
	$count++;}
	?>
    </div>
    </body>
		
		
	

		
	
