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
        <!-- Navigation -->
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
        <!-- Video -->
            <section id="video">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CCxgUXrbFWY?autoplay=1&&mute=1&playlist=CCxgUXrbFWY&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="des">
                    <h2>Data Structures</h2>
                    <p>This tutorial will provide you an introduction to data structures. This Simplilearn's tutorial will teach novices what data structure is and how to use it. We will discover real-world examples of data structures, as well as the types of data structures and their uses, in this data structures tutorial</p>
                </div>
                <div class="req">
                    <h3>Prerequisites</h3>
                    <ul>
                        <li>Any programming language preferably c/c++</li>
                    </ul>
                </div>
                <div class="difficulty">
                    <h4>Course difficulty : Medium</h4>
                    
                </div>
                
            </section>  
    </body>
</html>